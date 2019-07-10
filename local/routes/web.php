<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/','HomeController@index');

Route::get('lang/{locale}', 'LocaleController@lang');

Route::get('/news','NewsController@index');
Route::get('/newsinside/{id}','NewsController@detail');

Route::get('/contact','ContactController@index');
Route::post('AddContact','ContactController@store');

Route::get('/downloadform','FileFormController@index');

Route::get('/downloadreport','FileReportController@report');
Route::get('/downloadinside/{id}','FileReportController@detail');

Route::get('/privatefunds', 'FundInformationController@index');

Route::get('/mutualfunds', function () {
        $data['category'] = \App\Models\Category::where('status','=','1')
                ->select('categories.*')
                ->orderBy('sort_id','ASC')
                ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
                ->select('contacts.*')
                ->get();
        return view('mutual_funds',$data);
});
Route::get('/fundsepltf', 'FundInformationController@fundsepltf');
Route::get('/fundsprice','FundPriceController@index');
Route::get('/fundsprice/selectfund/{fund}','FundPriceController@search_select');
Route::get('/fundsprice/seachfundprice','FundPriceController@seachfundprice');
Route::get('/funds_perf', 'PerformanceController@index');
Route::get('/funds_seqrmf','FundInformationController@fundsseqrmf');
Route::get('/transaction', 'TransactionController@index');
Route::get('/economic','EconomicsController@index');
Route::get('/knowledge','KnowledgeController@index');
Route::get('/knowledge/inside/{id}','KnowledgeController@detail');
Route::get('/about', 'AboutController@index');
Route::get('/reportfunds', function () {
        $data['category'] = \App\Models\Category::where('status','=','1')
                ->select('categories.*')
                ->orderBy('sort_id','ASC')
                ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
                ->select('contacts.*')
                ->get();
        return view('report_funds',$data);
});
Route::get('/calendar', 'CalendarController@index');
Route::get('/statusupdate','DebtController@index');
Route::get('/seachstatus','DebtController@search');
Route::get('/faq', 'QuestionController@index');

Route::get('seachfunds','PerformanceController@search');
Route::get('connect',function () {
        return view('connect');
});
Route::get('account',function () {
        return view('account');
});
Route::get('trust',function () {
        return view('trust');
});
Route::get('funds/reit/manager',function () {
        return view('funds_reit_manager');
});
Route::get('funds/reit',function () {
        return view('funds_reit');
});
