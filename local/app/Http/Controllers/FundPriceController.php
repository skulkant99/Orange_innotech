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
 

        // $data['result'] = DB::connection('sqlsrv')
        //     ->table('M_FUND','T_DAILY_NAV')
        //     ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
        //     ->select('M_FUND.StrFundShortName',
        //             'T_DAILY_NAV.DTENAVDATE',
        //             'T_DAILY_NAV.DECNAV',
        //             'T_DAILY_NAV.DECNAV_UNIT',
        //             'T_DAILY_NAV.DECPURCHASE',
        //             'T_DAILY_NAV.DECREDEEM',
        //                 DB::raw("(SELECT T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
        //                 WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 1 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVLAST"),
        //                 DB::raw("(SELECT T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
        //                 WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVBEFOR")
        //             )
        //     ->where('M_FUND.StrFundREF','=',001)
        //     ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
        //     ->paginate(15);

        $data['result'] = DB::connection('sqlsrv')
            ->table('M_FUND','T_DAILY_NAV')
            ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
            ->select('M_FUND.StrFundShortName',
                    'T_DAILY_NAV.DTENAVDATE',
                    'T_DAILY_NAV.DECNAV',
                    'T_DAILY_NAV.DECNAV_UNIT',
                    'T_DAILY_NAV.DECPURCHASE',
                    'T_DAILY_NAV.DECREDEEM'
                    )
            ->where('M_FUND.StrFundREF','=',001)
            ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
            ->paginate(10);

        $data['DACNAVLAST'] =  DB::connection('sqlsrv')
            ->table('M_FUND','T_DAILY_NAV')
            ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
            ->select('T_DAILY_NAV.DECNAV_UNIT')
            ->where('M_FUND.StrFundREF','=', 001)
            ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
            ->paginate(2);

    
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
            $data['fund'] = \App\Models\Fund::select()->get();          
                    
        return view('funds_price',$data);
    }
    public function indexfundpriceall()
    {
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
     
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
 

        // $data['result'] = DB::connection('sqlsrv')
        //     ->table('M_FUND','T_DAILY_NAV')
        //     ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
        //     ->select('M_FUND.StrFundShortName',
        //             'T_DAILY_NAV.DTENAVDATE',
        //             'T_DAILY_NAV.DECNAV',
        //             'T_DAILY_NAV.DECNAV_UNIT',
        //             'T_DAILY_NAV.DECPURCHASE',
        //             'T_DAILY_NAV.DECREDEEM',
        //                 DB::raw("(SELECT T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
        //                 WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 1 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVLAST"),
        //                 DB::raw("(SELECT T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
        //                 WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVBEFOR")
        //             )
        //     ->where('M_FUND.StrFundREF','=',001)
        //     ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
        //     ->paginate(15);
     $data['result'] = DB::connection('sqlsrv')
            ->table('M_FUND','T_DAILY_NAV')
            ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
            ->select('M_FUND.StrFundShortName',
                    'T_DAILY_NAV.DTENAVDATE',
                    'T_DAILY_NAV.DECNAV',
                    'T_DAILY_NAV.DECNAV_UNIT',
                    'T_DAILY_NAV.DECPURCHASE',
                    'T_DAILY_NAV.DECREDEEM'
                    )
            ->where('M_FUND.StrFundREF','=',001)
            ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
            ->paginate(10);

        
        $data['DACNAVLAST'] =  DB::connection('sqlsrv')
            ->table('M_FUND','T_DAILY_NAV')
            ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
            ->select('T_DAILY_NAV.DECNAV_UNIT')
            ->where('M_FUND.StrFundREF','=', 001)
            ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
            ->paginate(2);
        return view('funds_price_all',$data);
    }
    public function search_select($fund){
        
        $data['result'] = DB::connection('sqlsrv')
            ->table('M_FUND','T_DAILY_NAV')
            ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
            ->select('M_FUND.StrFundShortName',
                    'T_DAILY_NAV.DTENAVDATE',
                    'T_DAILY_NAV.DECNAV',
                    'T_DAILY_NAV.DECNAV_UNIT',
                    'T_DAILY_NAV.DECPURCHASE',
                    'T_DAILY_NAV.DECREDEEM'
                    )
            ->where('M_FUND.StrFundREF','=',$fund)
            ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
            ->paginate(15);

        $data['DACNAVLAST'] =  DB::connection('sqlsrv')
            ->table('M_FUND','T_DAILY_NAV')
            ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
            ->select('T_DAILY_NAV.DECNAV_UNIT')
            ->where('M_FUND.StrFundREF','=', $fund)
            ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
            ->paginate(2);
        return view('funds_price',$data);
    }
    public function seachfundprice(Request $request){
        $type = $request->input('type');
        $date = $request->input('date');
       
        $datecon = str_replace('/', '-', $date );
        $newDate = date("d-m-Y", strtotime($datecon));
       
       
        $data['result'] = DB::connection('sqlsrv')
                ->table('M_FUND','T_DAILY_NAV')
                ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
                ->select('M_FUND.StrFundShortName',
                        'T_DAILY_NAV.DTENAVDATE',
                        'T_DAILY_NAV.DECNAV',
                        'T_DAILY_NAV.DECNAV_UNIT',
                        'T_DAILY_NAV.DECPURCHASE',
                        'T_DAILY_NAV.DECREDEEM'
                        )
                ->where('M_FUND.StrFundREF','=',$type)
                ->where('T_DAILY_NAV.DTENAVDATE','=',$newDate)
                ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
                ->paginate(15);

        $data['DACNAVLAST'] =  DB::connection('sqlsrv')
                ->table('M_FUND','T_DAILY_NAV')
                ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
                ->select('T_DAILY_NAV.DECNAV_UNIT')
                ->where('M_FUND.StrFundREF','=', $type)
                ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
                ->paginate(2);
        
        return view('funds_price_all',$data);
        // return response()->json($result);
    }
}