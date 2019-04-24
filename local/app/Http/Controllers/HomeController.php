<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
        $data['intro'] = \App\Models\Introduction::where('status','=','1')
            ->select('introductions.*')
            ->get();
        $data['information'] = \App\Models\Information::where('status','=','1')
            ->select('informations.*')
            ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        return view('index',$data);
    }
}