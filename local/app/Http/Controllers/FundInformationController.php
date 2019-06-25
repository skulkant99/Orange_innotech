<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundInformationController extends Controller
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
        $data['fund'] = \App\Models\FundInformation::where('type','=','P')->select()->get();
        return view('private_fund',$data);
    }
    public function fundsepltf(){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
     
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['fund'] = \App\Models\FundInformation::where('type','=','L')->select()->get();
        return view('funds_epltf',$data);
    }
    public function fundsseqrmf(){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
     
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['fund'] = \App\Models\FundInformation::where('type','=','R')->select()->get();
        return view('funds_seqrmf',$data);
    }
    
}