<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \Mpdf\Mpdf;
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
           
        $data['fund'] = \App\Models\Fund::select()->get();
    
        return view('funds_performance',$data);
    }
    public function search(Request $request)
    {
        $data['type'] = $request->input('type');
        $data['date'] = $request->input('date');
        $month = substr( $data['date'],-5,-3);
        $year = substr( $data['date'],0,4);
        
        $check_date = \App\Models\Performance::select('date')
            ->where('type','=',$data['type'])  
            ->where('date','=',$data['date'])  
            ->first();
       
        $date_last = \App\Models\Performance::select('date')
            ->where('type','=',$data['type'])   
            ->whereMonth('date','=',$month)
            ->whereYear('date','=', $year)
            ->orderBy('date','DESC')
            ->first();
        
            
        if($check_date == null){
            if($date_last == null){
                $data['perfor'] = \App\Models\Performance::select('performances.*')
                ->where('type','=',$data['type'])  
                ->whereMonth('date','=',$month)
                ->whereYear('date','=', $year)
                ->get();
            }else{
                $data['perfor'] = \App\Models\Performance::select('performances.*')
                ->where('type','=',$data['type']) 
                ->where('date','=',$date_last->date)  
                ->whereMonth('date','=',$month)
                ->whereYear('date','=', $year)
                ->get();
            }
           
        }else{
            $data['perfor'] = \App\Models\Performance::select('performances.*')
                ->where('type','=',$data['type']) 
                ->where('date','=',$check_date->date)  
                ->get();
        }
       
          
        $data['fund'] = \App\Models\Fund::select()->get();
        return view('funds_performance',$data);
    }
    public function selectperformance(Request $request)
    {
        $data['fund'] = $request->input('fund');
        $data['date']  = \App\Models\Performance::select('performances.date')
            ->where('type','=',$data['fund'])   
            ->groupBy('date')
            ->orderBy('date','DESC')
            ->first();

        $perfor = \App\Models\Performance::select('performances.*')
            ->where('type','=',$data['fund'])  
            ->where('date','=',$data['date']->date)
            ->get();

        return response()->json($perfor);
    }
    public function select($fund)
    {
    
        $data['date']  = \App\Models\Performance::select('performances.date')
            ->where('type','=',$fund)   
            ->groupBy('date')
            ->orderBy('date','DESC')
            ->first();

        $data['perfor']  = \App\Models\Performance::select('performances.*')
            ->where('type','=',$fund)  
            ->where('date','=',$data['date']->date)
            ->get();

            $data['fund'] = \App\Models\Fund::select()->get();

        return view('funds_performance',$data);

    }
    public function printPDF($type,$date)
    {
        $data['perfor'] = \App\Models\Performance::select('performances.*')
            ->where('type','=',$type)  
            ->where('date','=',$date)
            ->get();

        $data_body =  view('PDF.performance',$data);
    
        $mpdf = new Mpdf(
                array(
                'autoLangToFont' => true,
                'format' => 'A4',
                'margin_top' => 10,
                'margin_left' => 10,
                'margin_right' => 10,
                'margin_bottom' => 5,
                )
                );
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        $mpdf->SetTitle('performance');


        // $mpdf->SetHTMLHeader($data_head);
        $mpdf->WriteHTML($data_body);
        // $mpdf->SetHTMLFooter($data_foot);

        $mpdf->Output('test' . '.pdf', 'i');
    }
    
}