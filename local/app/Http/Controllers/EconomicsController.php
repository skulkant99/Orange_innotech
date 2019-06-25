<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EconomicsController extends Controller
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
        $data['economics'] = \App\Models\Economic::select()->paginate(4);
        return view('economic',$data);
    }
}