<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request){
        $search = $request->input('keyword');
        
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['news'] = \App\Models\News::where('title_th','like', '%' . $search . '%')
            ->orWhere('title_en','like', '%' . $search . '%')
            ->get();
            
        $data['fileform'] = \App\Models\FileForm::where('name_th','like', '%' . $search . '%')
            ->orWhere('name_en','like', '%' . $search . '%')
            ->get();
        
        $data['filetype'] = \App\Models\FileType::where('name_th','like', '%' . $search . '%')
            ->orWhere('name_en','like', '%' . $search . '%')
            ->get(); 

        $data['fund'] = \App\Models\SubFundTitle::where('name_th','like', '%' . $search . '%')
            ->orWhere('name_en','like', '%' . $search . '%')
            ->get(); 
        
        
        if($search == "มูลค่าหน่วยลงทุนย้อนหลัง"){
            return redirect('fundsprice/all');
        }
        elseif($search = "nav"){
            return redirect('fundsprice');
        }
        elseif($search = "มูลค่าหน่วยลงทุน"){
            return redirect('fundsprice');
        }
        else{
            return view('search',$data);

        }
    }
}