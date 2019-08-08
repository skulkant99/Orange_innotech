<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrustController extends Controller
{

    public function index(){
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['trust'] = \App\Models\Trust::select()->get();
        return view('trust',$data);
       
    }
    public function reit_manager(){
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['manager'] = \App\Models\TrustPersonnel::orderBy('sort_id','ASC')
            ->where('status','=',1)
            ->select()
            ->get();
        
        return view('funds_reit_manager',$data);
    }
    public function reit(){
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        return view('funds_reit',$data);
    }
    public function detail($id)
    {
        $data['trust'] = \App\Models\Trust::where('id',$id)
            ->select()
            ->first();
      
        return view('trust_detail',$data);
    }

}