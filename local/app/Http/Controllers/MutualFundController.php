<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MutualFundController extends Controller
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
        $data['sub_fund'] = \App\Models\SubFund::with('SubFundTitle')
            ->select()
            ->get();
        return view('mutual_funds',$data);
       
    }
    public function detail($id)
    {
        $data['sub_fund'] = \App\Models\SubFundTitle::where('id',$id)
            ->select()
            ->first();
        $data['fund_detail'] = \App\Models\SubFundDetail::where('sub_fund_title_id',$id)
            ->orderBy('sort_id','ASC')
            ->get();
        return view('funds_detail',$data);
    }

}