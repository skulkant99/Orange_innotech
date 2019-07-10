<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FundPriceController extends Controller
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
        $result = DB::connection('sqlsrv')->select('SELECT TOP(15) StrFundShortName,
                    T_DAILY_NAV.DTENAVDATE,
                    T_DAILY_NAV.DECNAV,
                    T_DAILY_NAV.DECNAV_UNIT,
                    T_DAILY_NAV.DECPURCHASE,
                    T_DAILY_NAV.DECREDEEM ,
                    (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                    WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 1 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVLAST,

                    (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                    WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVBEFOR

                    from M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                    WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC ');

                // $serverName = "(local)";  
                // $connectionInfo = array( "Database"=>"Zmico_Asset",
                //                         "ReturnDatesAsStrings"=> true,
                //                         "MultipleActiveResultSets"=>true,
                //                         "CharacterSet" => "UTF-8");  
                
                // /* Connect using Windows Authentication. */  
                // $conn = sqlsrv_connect( $serverName, $connectionInfo);  
            
                // if( $conn === false )  
                // {  
                //     echo "Unable to connect.</br>";  
                //     die( print_r( sqlsrv_errors(), true));  
                // }

                // $sql = "SELECT TOP (15) StrFundShortName,
                //         T_DAILY_NAV.DTENAVDATE,
                //         T_DAILY_NAV.DECNAV,
                //         T_DAILY_NAV.DECNAV_UNIT,
                //         T_DAILY_NAV.DECPURCHASE,
                //         T_DAILY_NAV.DECREDEEM ,
                //             (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                //             WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 1 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVLAST,

                //             (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                //             WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVBEFOR

                //             from M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                //             WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC ";   
                // $stmt  = sqlsrv_query($conn, $sql);
                // $result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

        $data['result'] = $result;
        return view('funds_price',$data);
    }
    public function search_select($fund){
        $result = DB::connection('sqlsrv')->select('SELECT TOP(15) StrFundShortName,
                    T_DAILY_NAV.DTENAVDATE,
                    T_DAILY_NAV.DECNAV,
                    T_DAILY_NAV.DECNAV_UNIT,
                    T_DAILY_NAV.DECPURCHASE,
                    T_DAILY_NAV.DECREDEEM ,
                    (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                    WHERE M_FUND.StrFundREF = '.$fund.' ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 1 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVLAST,

                    (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                    WHERE M_FUND.StrFundREF = '.$fund.' ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVBEFOR

                    from M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                    WHERE M_FUND.StrFundREF = '.$fund.' ORDER BY T_DAILY_NAV.DTENAVDATE DESC ');
        $data['result'] = $result;
        return view('funds_price',$data);
    }
    public function seachfundprice(Request $request){
        $data['type'] = $request->input('type');
        $data['date'] = $request->input('date');
        $newdate = date('Y-d-m', strtotime($data['date']));
        $convers = "'".$newdate."'";
       
        $data['result'] = DB::connection('sqlsrv')->select('SELECT TOP(15) StrFundShortName,
                    T_DAILY_NAV.DTENAVDATE,
                    T_DAILY_NAV.DECNAV,
                    T_DAILY_NAV.DECNAV_UNIT,
                    T_DAILY_NAV.DECPURCHASE,
                    T_DAILY_NAV.DECREDEEM ,
                    (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                    WHERE M_FUND.StrFundREF = '.$data['type'].' ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 1 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVLAST,

                    (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                    WHERE M_FUND.StrFundREF = '.$data['type'].' ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVBEFOR

                    from M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
                    WHERE M_FUND.StrFundREF = '.$data['type'].' AND T_DAILY_NAV.DTENAVDATE  = '.$convers.' ORDER BY T_DAILY_NAV.DTENAVDATE DESC ');
       
        return view('funds_price',$data);
    }
}