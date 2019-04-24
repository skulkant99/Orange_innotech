<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/login', 'Admin\AuthController@login');

Route::post('/admin/CheckLogin', 'Admin\AuthController@CheckLogin');

Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
});

Route::group(['middleware' => 'admin_auth', 'prefix' => 'admin'], function() {
    Route::get('/', 'Admin\HomeController@index');
    Route::get('/logout', 'Admin\AuthController@logout');
    Route::get('/dashboard', 'Admin\HomeController@index');

    Route::post('/upload_file', 'Admin\UploadFileController@index');



    //User
    Route::get('/change_password', 'Admin\UserController@change_password');
    Route::get('/profile', 'Admin\UserController@profile');
    Route::get('/user/ListUser', 'Admin\UserController@ListUser');
    Route::post('/user/change_password', 'Admin\UserController@change_password');
    Route::post('/user/checkedit/{id}', 'Admin\UserController@update');
    Route::post('/user/delete/{id}', 'Admin\UserController@destroy');
    Route::resource('/user', 'Admin\UserController');
    // Route::get('/user', 'Admin\UserController@index');
    Route::get('/logout', 'Admin\AuthController@logout');

    //ManageMenu
    Route::get('/ManageMenu', 'Admin\MenuController@index');
    Route::get('/menu/ListMenu', 'Admin\MenuController@ListMenu');
    Route::post('/menu', 'Admin\MenuController@store');
    Route::get('/menu/{id}', 'Admin\MenuController@edit');
    Route::post('/menu/checkedit/{id}', 'Admin\MenuController@update');
    Route::post('/menu/delete/{id}', 'Admin\MenuController@destroy');

    //SetPermission
    Route::post('/SetPermission', 'Admin\MenuController@SetPermission');
    Route::post('/GetPermission/{id}', 'Admin\MenuController@GetPermission');

    Route::get('/Install', 'Admin\InstallController@index');
    Route::get('/Install/DefaultView', 'Admin\InstallController@DefaultView');
    Route::post('/Install/GetFieldDropDown', 'Admin\InstallController@GetFieldDropDown');
    Route::post('/Install/GetField/{table}', 'Admin\InstallController@GetField');
    Route::post('/Install', 'Admin\InstallController@Install');

    Route::get('/Menu', 'Admin\MenuController@index');
    Route::get('/Menu/Lists', 'Admin\MenuController@Lists');
    Route::post('/Menu', 'Admin\MenuController@store');
    Route::get('/Menu/{id}', 'Admin\MenuController@show');
    Route::post('/Menu/{id}', 'Admin\MenuController@update');
    Route::post('/Menu/Delete/{id}', 'Admin\MenuController@destroy');

    Route::get('/AdminUser', 'Admin\AdminUserController@index');
    Route::get('/AdminUser/Lists', 'Admin\AdminUserController@Lists');
    Route::post('/AdminUser', 'Admin\AdminUserController@store');
    Route::post('/AdminUser/change_password', 'Admin\AdminUserController@change_password');
    Route::get('/AdminUser/{id}', 'Admin\AdminUserController@show');
    Route::post('/AdminUser/{id}', 'Admin\AdminUserController@update');
    Route::post('/AdminUser/Delete/{id}', 'Admin\AdminUserController@destroy');

    Route::get('/content','Admin\ContentController@index');

    Route::get('/introduction','Admin\HomeController@introduction');
    Route::get('/introduction/list_introduction','Admin\HomeController@list_introduction');
    Route::post('/introduction','Admin\HomeController@store_intro');
    Route::get('/introduction/{id}','Admin\HomeController@edit_intro');
    Route::post('/introduction/{id}','Admin\HomeController@update');
    Route::post('/introduction/Delete/{id}','Admin\HomeController@destroy');

    Route::get('/banner','Admin\BannerController@index');
    Route::get('/banner/Lists','Admin\BannerController@Lists');
    Route::post('/banner','Admin\BannerController@store');
    Route::get('/banner/show/{id}','Admin\BannerController@show');
    Route::post('/banner/{id}','Admin\BannerController@update');
    Route::post('/banner/Delete/{id}','Admin\BannerController@destroy');

    Route::get('/category','Admin\CategoryController@index');
    Route::get('/category/Lists','Admin\CategoryController@Lists');
    Route::post('/category','Admin\CategoryController@store');
    Route::get('/category/show/{id}','Admin\CategoryController@show');
    Route::post('/category/{id}','Admin\CategoryController@update');
    Route::post('/category/Delete/{id}','Admin\CategoryController@destroy');

    Route::get('/information','Admin\InformationController@index');
    Route::get('/information/Lists','Admin\InformationController@Lists');
    Route::post('/information','Admin\InformationController@store');
    Route::get('/information/show/{id}','Admin\InformationController@show');
    Route::post('/information/{id}','Admin\InformationController@update');
    Route::post('/information/Delete/{id}','Admin\InformationController@destroy');

    Route::get('/contact','Admin\ContactController@index');
    Route::get('/contact/Lists','Admin\ContactController@Lists');
    Route::post('/contact','Admin\ContactController@store');
    Route::get('/contact/show/{id}','Admin\ContactController@show');
    Route::post('/contact/{id}','Admin\ContactController@update');
    Route::post('/contact/Delete/{id}','Admin\ContactController@destroy');


      ##ROUTEFORINSTALL##
});
//OrakUploader
Route::any('/upload_file', 'OrakController@upload_file');
