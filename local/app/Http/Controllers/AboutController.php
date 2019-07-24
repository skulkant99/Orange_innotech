<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
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
        $data['about'] = \App\Models\FundInformation::where('type','=','A')->select()->get();
        $data['personnel'] = \App\Models\Personnel::select()
            ->orderBy('sort_id','ASC')
            ->get();
        return view('about',$data);
    }
  
    
}