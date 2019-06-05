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
Route::get('/newsinside/{id}','NewsController@detail');

Route::get('/contact','ContactController@index');

Route::get('/downloadform','FileFormController@index');

Route::get('/downloadreport','FileReportController@report');
Route::get('/downloadinside/{id}','FileReportController@detail');



Route::get('/privatefunds', function () {
    $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
    $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
    return view('private_fund',$data);
});
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
Route::get('/fundsepltf', function () {
        $data['category'] = \App\Models\Category::where('status','=','1')
                ->select('categories.*')
                ->orderBy('sort_id','ASC')
                ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
                ->select('contacts.*')
                ->get();
        return view('funds_epltf',$data);
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
Route::get('/transaction', function () {
        $data['category'] = \App\Models\Category::where('status','=','1')
                ->select('categories.*')
                ->orderBy('sort_id','ASC')
                ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
                ->select('contacts.*')
                ->get();
        return view('transaction',$data);
});
Route::get('/economic', function () {
        $data['category'] = \App\Models\Category::where('status','=','1')
                ->select('categories.*')
                ->orderBy('sort_id','ASC')
                ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
                ->select('contacts.*')
                ->get();
        return view('economic',$data);
});
Route::get('/knowledge', function () {
        $data['category'] = \App\Models\Category::where('status','=','1')
                ->select('categories.*')
                ->orderBy('sort_id','ASC')
                ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
                ->select('contacts.*')
                ->get();
        return view('knowledge',$data);
});
Route::get('/about', function () {
        $data['category'] = \App\Models\Category::where('status','=','1')
                ->select('categories.*')
                ->orderBy('sort_id','ASC')
                ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
                ->select('contacts.*')
                ->get();
        return view('about',$data);
});
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
Route::get('/calendar', function () {
        $data['category'] = \App\Models\Category::where('status','=','1')
                ->select('categories.*')
                ->orderBy('sort_id','ASC')
                ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
                ->select('contacts.*')
                ->get();
        return view('calendar',$data);
});
Route::get('/statusupdate', function () {
        $data['category'] = \App\Models\Category::where('status','=','1')
                ->select('categories.*')
                ->orderBy('sort_id','ASC')
                ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
                ->select('contacts.*')
                ->get();
        return view('status_update',$data);
});
Route::get('/faq', function () {
        $data['category'] = \App\Models\Category::where('status','=','1')
                ->select('categories.*')
                ->orderBy('sort_id','ASC')
                ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
                ->select('contacts.*')
                ->get();
        return view('faq',$data);
});

