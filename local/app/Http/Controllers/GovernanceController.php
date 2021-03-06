<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GovernanceController extends Controller
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
        $data['governance'] = \App\Models\Governance::select()->get();
        return view('governance',$data);
    }
}