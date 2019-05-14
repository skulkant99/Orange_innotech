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

Route::get('/news','NewsController@index');

Route::get('/contact','ContactController@index');

Route::get('/downloadform','FileFormController@index');
Route::get('/downloadreport','FileFormController@report');
Route::get('/downloadinside','FileFormController@detail');

Route::get('/funds', function () {
    $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
    $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
    return view('private_fund',$data);
});
Route::get('/fundsprice', function () {
    $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
    $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
    return view('funds_price',$data);
});
Route::get('/funds_perf', function () {
    $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
    $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
    return view('funds_performance',$data);
});


