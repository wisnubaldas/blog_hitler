<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateArtikel;
use Illuminate\Support\Facades\Storage;
use App\Models\Artikel;
use App\Models\TypeArtikel;
use App\DataTables\ArtikelDataTable;
use DataTables;
use Str;
class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $type_artikel = TypeArtikel::all();
        return view('back.blog.artikel',compact('type_artikel'));
    }
    public function delete($id)
    {
        dd($id);
    }
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        return view('back.edit-artikel',compact('artikel'));
    }
    public function create(CreateArtikel $request)
    {
        $isValid = $request->validated();
        /* if ($isValid->fails()) {
            return response()->json(['errors' => $isValid->errors()->all()]);
        } */
        $path = $request->file('image')->store('public/admin/image');
        $art = new Artikel;
        $art->title = $request->title;
        $art->body = $request->body;
        $art->image = Storage::url($path);
        $art->writer_id = auth()->user()->id;
        $art->save();
        $art->type()->attach(explode(',',$request->type_artikel));
    }
    public function grid()
    {   
        $model = Artikel::select(['id','title','body']);
        return DataTables::of($model)
                        ->editColumn('body',function($artikel){
                            return Str::words($artikel->body,50,'...');
                        })
                        ->addColumn('action',function($artikel){
                            return "<div class='btn-group' >
                                    <a href='/admin/artikel/edit/{$artikel->id}' class='btn btn-sm btn-warning' >Edit</a>
                                    <a href='/admin/artikel/delete/{$artikel->id}' class='btn btn-sm btn-danger' >Delete</a>
                                    </div>";
                        })
                        ->rawColumns(['body','action'])
                        ->make();
    }
}
