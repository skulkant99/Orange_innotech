<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();

        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->where('type','=','S')
            ->select('contacts.*')
            ->get();
     
        return view('contact',$data);
    }
}