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

// if(is_null(session()->get('locale'))){
       
//         Route::get('/','HomeController@landing');
        
// }else{
//         Route::get('/','HomeController@index');
// }

Route::get('/','HomeController@index');
Route::get('lang/{locale}', 'LocaleController@lang');

Route::get('/news','NewsController@index');
Route::get('/newsinside/{id}','NewsController@detail');

Route::get('/contact','ContactController@index');
Route::post('AddContact','ContactController@store');

Route::get('/downloadform','FileFormController@index');

Route::get('/downloadreport','FileReportController@report');
Route::get('/download/detail/{id}','FileReportController@file_detail');
Route::get('download/listdetail/{id}','FileReportController@list_detail');
Route::get('/downloadinside/{id}/{file_type_id}','FileReportController@detail');

Route::get('/privatefunds', 'FundInformationController@index');

Route::get('/mutualfunds','MutualFundController@index');
Route::get('/mutualfunds/detail/{id}','MutualFundController@detail');

Route::get('/fundsepltf', 'FundInformationController@fundsepltf');
Route::get('/fundsprice','FundPriceController@index');
Route::get('/fundsprice/selectfund/{fund}','FundPriceController@search_select');
Route::get('/fundsprice/all','FundPriceController@indexfundpriceall');
Route::get('/fundsprice/seachfundprice','FundPriceController@select');


Route::get('/funds_perf', 'PerformanceController@index');
Route::get('/selectperformance','PerformanceController@selectperformance');
Route::get('performance/PDF/{type}/{date}','PerformanceController@printPDF');
Route::get('select/performance/{fund}','PerformanceController@select');

Route::get('/funds_seqrmf','FundInformationController@fundsseqrmf');
Route::get('/transaction', 'TransactionController@index');
Route::get('/economic','EconomicsController@index');
Route::get('/economic/seacheconomic','EconomicsController@seacheconomic');
Route::get('/governance','GovernanceController@index');

Route::get('/knowledge','KnowledgeController@index');
Route::get('/knowledge/inside/{id}','KnowledgeController@detail');
Route::get('/about', 'AboutController@index');
Route::get('/reportfunds', 'FundReportController@index');
Route::get('/calendar', 'CalendarController@index');
Route::get('/statusupdate','DebtController@index');
Route::get('/seachstatus','DebtController@search');
Route::get('/status/select/{status}','DebtController@select_search');
Route::get('/faq', 'QuestionController@index');
Route::get('faq/search','QuestionController@search');

Route::get('seachfunds','PerformanceController@search');

Route::get('account',function () {
        return view('account');
});
Route::get('trust','TrustController@index');
Route::get('funds/reit/manager','TrustController@reit_manager');
Route::get('funds/reit','TrustController@reit');
Route::get('trust/detail/{id}','TrustController@detail');

Route::get('search','SearchController@index');

