<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebtController extends Controller
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
        $data['debt'] = \App\Models\Debt::select()->paginate(4);
        return view('status_update',$data);
    }
    public function search(Request $request)
    {
        $data['type'] = $request->input('type');
        $data['date'] = $request->input('date');
    
        if($data['date'] != null){
            $date_create_edit = explode('/', $data['date']);
        
            $month = $date_create_edit[1];
            $year   = $date_create_edit[2] + 543;
            switch ($month) {
                case '01':
                    $month = "มกราคม";
                    break;
                case '02':
                    $month = "กุมภาพันธ์";
                    break;
                case '03':
                    $month = "มีนาคม";
                    break;
                case '04':
                    $month = "เมษายน";
                    break;
                case '05':
                    $month = "พฤษภาคม";
                    break;
                case '06':
                    $month = "มิถุนายน";
                    break;
                case '07':
                    $month = "กรกฎาคม";
                    break;
                case '08':
                    $month = "สิงหาคม";
                    break;
                case '09':
                    $month = "กันยายน";
                    break;
                case '10':
                    $month = "ตุลาคม";
                    break;
                case '11':
                    $month = "พฤศจิกายน";
                    break;
                case '12':
                    $month = "ธันวาคม";
                    break;
                default:
                    # code...
                    break;
            }
            $conversdate =  $month.' '.$year;
        }
        else{
            $conversdate = '';
        }
           
     
        $data['debt'] = \App\Models\Debt::select('debts.*')
            ->where('type','=',$data['type'])   
            ->where('name_th', 'like', '%' . $conversdate . '%')
            ->paginate(4);
   
        return view('status_update',$data);
    }
}