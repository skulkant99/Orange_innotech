<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['information'] = \App\Models\Information::where('status','=','1')
            ->orderBy('sort_id','ASC')
            ->select('informations.*')
            ->paginate(8);
      
        return view('news',$data);
    }
    public function detail($id)
    {
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['information_detail'] = \App\Models\Information::where('id','=',$id)
            ->select('informations.*')
            ->get();
      
        return view('news_inside',$data);
    }
}