<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galery;
class ParalaxController extends Controller
{
    public function index()
    {
        $galery = Galery::limit(8)->get();
        return view('paralax',compact('galery'));
    }
}
