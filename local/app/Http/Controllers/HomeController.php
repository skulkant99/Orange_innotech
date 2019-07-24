<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
        $data['intro'] = \App\Models\Introduction::where('status','=','1')
            ->where('type','=','I')
            ->select('introductions.*')
            ->get();
        $data['information'] = \App\Models\Information::where('status','=','1')
            ->select('informations.*')
            ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['warning'] = \App\Models\Introduction::where('status','=','1')
            ->where('type','=','W')
            ->select('introductions.*')
            ->get();
        $data['fund'] = \App\Models\Fund::select()->get();
        // $test =  DB::connection('sqlsrv')->table('M_FUND');
        // dd($test);

        // $data['fund_EP'] =  DB::connection('sqlsrv')->select('SELECT TOP(1) StrFundShortName,
        //         T_DAILY_NAV.DTENAVDATE,
        //         T_DAILY_NAV.DECNAV,
        //         T_DAILY_NAV.DECNAV_UNIT,
        //         T_DAILY_NAV.DECPURCHASE,
        //         T_DAILY_NAV.DECREDEEM ,
        //         (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
        //         WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 1 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVLAST,

        //         (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
        //         WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVBEFOR

        //         from M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
        //         WHERE M_FUND.StrFundREF = 001 ORDER BY T_DAILY_NAV.DTENAVDATE DESC ');

        $data['fund_EP'] = DB::connection('sqlsrv')
            ->table('M_FUND','T_DAILY_NAV')
            ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
            ->select('M_FUND.StrFundShortName',
                    'T_DAILY_NAV.DTENAVDATE',
                    'T_DAILY_NAV.DECNAV',
                    'T_DAILY_NAV.DECNAV_UNIT',
                    'T_DAILY_NAV.DECPURCHASE',
                    'T_DAILY_NAV.DECREDEEM')
            ->where('M_FUND.StrFundREF','=',001)
            ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
            ->first();

            $data['fund_EP_sum'] =  DB::connection('sqlsrv')
                ->table('M_FUND','T_DAILY_NAV')
                ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
                ->select('T_DAILY_NAV.DECNAV_UNIT')
                ->where('M_FUND.StrFundREF','=', 001)
                ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
                ->paginate(2);


        //  $data['fund_S'] =  DB::connection('sqlsrv')->select('SELECT TOP(1) StrFundShortName,
        //         T_DAILY_NAV.DTENAVDATE,
        //         T_DAILY_NAV.DECNAV,
        //         T_DAILY_NAV.DECNAV_UNIT,
        //         T_DAILY_NAV.DECPURCHASE,
        //         T_DAILY_NAV.DECREDEEM ,
        //         (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
        //         WHERE M_FUND.StrFundREF = 016 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 1 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVLAST,

        //         (SELECT  T_DAILY_NAV.DECNAV_UNIT FROM M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
        //         WHERE M_FUND.StrFundREF = 016 ORDER BY T_DAILY_NAV.DTENAVDATE DESC OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY) AS DACNAVBEFOR

        //         from M_FUND LEFT JOIN T_DAILY_NAV ON T_DAILY_NAV.STRFUNDREF = M_FUND.StrFundREF 
        //         WHERE M_FUND.StrFundREF = 016 ORDER BY T_DAILY_NAV.DTENAVDATE DESC ');

        $data['fund_S'] = DB::connection('sqlsrv')
            ->table('M_FUND','T_DAILY_NAV')
            ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
            ->select('M_FUND.StrFundShortName',
                    'T_DAILY_NAV.DTENAVDATE',
                    'T_DAILY_NAV.DECNAV',
                    'T_DAILY_NAV.DECNAV_UNIT',
                    'T_DAILY_NAV.DECPURCHASE',
                    'T_DAILY_NAV.DECREDEEM')
            ->where('M_FUND.StrFundShortName','=','S-EQRMF')
            ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
            ->first();
    
     
        $data['fund_S_sum'] =  DB::connection('sqlsrv')
            ->table('M_FUND','T_DAILY_NAV')
            ->leftJoin('T_DAILY_NAV','M_FUND.StrFundREF','=','T_DAILY_NAV.STRFUNDREF')
            ->select('T_DAILY_NAV.DECNAV_UNIT')
            ->where('M_FUND.StrFundShortName','=','S-EQRMF')
            ->orderBy('T_DAILY_NAV.DTENAVDATE','DESC')
            ->paginate(2);
       
        $data['menu_group'] = \App\Models\Menu::select()->get();
        $data['date']  = \App\Models\Performance::select('performances.date')
            ->where('type','=','EP-LTF')   
            ->groupBy('date')
            ->orderBy('date','DESC')
            ->first();
    
        $data['perfor'] = \App\Models\Performance::select('performances.*')
            ->where('type','=','EP-LTF')   
            ->where('date','=',$data['date']->date)
            ->get();
        return view('index',$data);
    }
}