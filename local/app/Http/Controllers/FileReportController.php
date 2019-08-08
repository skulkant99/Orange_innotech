<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileReportController extends Controller
{

    public function report(){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['file_type'] = \App\Models\FileType::select('file_types.*')
            ->orderBy('sort_id','ASC')
            ->paginate(20);
    
        return view('download_doc',$data);
    }
    public function file_detail($id){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
        $data['fund_type'] = \App\Models\FundType::where('fund_types.file_type_id',$id)
            ->select('fund_types.*')
            ->with(array('FileReport' => function($q){
                $q->leftJoin('years','years.year_no','file_reports.year_no');
                $q->leftJoin('months','months.month_no','file_reports.month_no');
                $q->select('file_reports.*','years.name as years_name','months.name as months_name');
                $q->orderBy('year_no','DESC');
                $q->orderBy('month_no','ASC');
            }))->get();
        
        $data['file_type'] = \App\Models\FileType::where('id','=',$id)->select()->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
     
        return view('download_doc_detail',$data);
    }
    public function list_detail($id)
    {
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['file_list'] = \App\Models\FileListReport::where('file_type_id',$id)
            ->leftJoin('years','years.year_no','file_list_reports.year_no')
            ->leftJoin('months','months.month_no','file_list_reports.month_no')
            ->select('file_list_reports.*','years.name as years_name','months.name as months_name')
            ->orderBy('year_no','DESC')
            ->orderBy('month_no','DESC')
            ->orderBy('date_no','DESC')
            ->get();
        $data['file_type'] = \App\Models\FileType::where('id','=',$id)->select()->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();

        return view('download_list_inside',$data);
        
    }
    public function detail($id,$file_type_id){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
        // $data['fund_type'] = \App\Models\FundType::where('fund_types.file_type_id',$id)
        //     ->select('fund_types.*')
        //     ->with(array('FileReport' => function($q){
        //         $q->leftJoin('years','years.year_no','file_reports.year_no');
        //         $q->leftJoin('months','months.month_no','file_reports.month_no');
        //         $q->select('file_reports.*','years.name as years_name','months.name as months_name');
        //         $q->orderBy('year_no','DESC');
        //         $q->orderBy('month_no','ASC');
        //     }))->get();
        $data['file_report'] = \App\Models\FileReport::where('fund_type_id','=',$id)
            ->leftJoin('years','years.year_no','file_reports.year_no')
            ->leftJoin('months','months.month_no','file_reports.month_no')
            ->select('file_reports.*','years.name as years_name','months.name as months_name')
            ->orderBy('year_no','DESC')
            ->orderBy('month_no','ASC')
            ->get();
    
        $data['fund_type'] = \App\Models\FundType::where('id',$id)
            ->select()
            ->get();
        
        $data['file_type'] = \App\Models\FileType::where('id','=',$file_type_id)->select()->get();
        
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
     
        return view('download_doc_inside',$data);
    }

}