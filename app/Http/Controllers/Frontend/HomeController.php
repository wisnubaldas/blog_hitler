<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class HomeController extends Controller
{
    public function index()
    {
        $content = Artikel::limit(5)->get();
        return view('blog.index',[
            'page_title'=>'Kegiatan dan Program',
            'page_desc'=>'Kegiatan dan Progran Kerja Dinas Sosial Kota Tangerang',
            'page_img'=>'../blog/img/cover/65_DSC_0373.jpg',
            'artikel'=>$content,
        ]);
    }
}
