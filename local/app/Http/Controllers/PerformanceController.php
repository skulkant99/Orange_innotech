<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PerformanceController extends Controller
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
        $data['date']  = \App\Models\Performance::select('performances.date')
            ->where('type','=','EP-LTF')   
            ->groupBy('date')
            ->orderBy('date','DESC')
            ->first();
        
        $data['perfor'] = \App\Models\Performance::select('performances.*')
            ->where('type','=','EP-LTF')   
            ->where('date','=',$data['date']->date)
            ->get();

    
        return view('funds_performance',$data);
    }
    public function search(Request $request)
    {
        $data['type'] = $request->input('type');
        $data['date'] = $request->input('date');
        $data['perfor'] = \App\Models\Performance::select('performances.*')
            ->where('type','=',$data['type'])   
            ->where('date','=',$data['date'])
            ->get();
        return view('funds_performance',$data);
    }
  
    
}