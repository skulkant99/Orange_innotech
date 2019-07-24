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
        $data['fund'] = \App\Models\Fund::select()->get();
        return view('economic',$data);
    }
    public function seacheconomic(Request $request)
    {
        $type = $request->input('type');
        $keyword = $request->input('keyword');
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['economics'] = \App\Models\Economic::select('economics.*')
            ->where('fund',$type)
            ->Where('name', 'like', '%' . $keyword . '%')
            ->paginate(4);
        $data['fund'] = \App\Models\Fund::select()->get();

        return view('economic',$data);
    }
}