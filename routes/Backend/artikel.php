<?php
use App\Http\Controllers\Backend\ArtikelController;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::post('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
Route::get('/artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::get('/artikel/grid', function(DataTables $dataTables) {
    $model = App\Models\Artikel::query();
    return $dataTables->eloquent($model)
                        ->addColumn('image', function($m) {
                            return '<img src="'.url($m->image).'" alt="" class="width-xs" >';
                        })
                        ->addColumn('body', function($m) {
                            return Str::limit(Str::of(strip_tags($m->body))->ltrim(),400);
                        })
                        ->addColumn('action', 'back.blog.action-button')
                        ->rawColumns(['image','action','body'])
                        ->toJson();
});


