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

    Route::get('/premonition','Admin\HomeController@premonition');
    Route::get('/premonition/list_premonition','Admin\HomeController@list_premonition');

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
    Route::get('/address','Admin\ContactController@Address');
    Route::get('/contact/Lists','Admin\ContactController@Lists');
    Route::post('/contact','Admin\ContactController@store');
    Route::get('/contact/show/{id}','Admin\ContactController@show');
    Route::post('/contact/{id}','Admin\ContactController@update');
    Route::post('/contact/Delete/{id}','Admin\ContactController@destroy');


      Route::get('/Test', 'Admin\TestController@index');
        Route::get('/Test/Lists', 'Admin\TestController@Lists');
        Route::post('/Test', 'Admin\TestController@store');
        Route::get('/Test/{id}', 'Admin\TestController@show');
        Route::post('/Test/{id}', 'Admin\TestController@update');
        Route::post('/Test/Delete/{id}', 'Admin\TestController@destroy');

      Route::get('/FileForm', 'Admin\FileFormController@index');
        Route::get('/FileForm/Lists', 'Admin\FileFormController@Lists');
        Route::post('/FileForm', 'Admin\FileFormController@store');
        Route::get('/FileForm/{id}', 'Admin\FileFormController@show');
        Route::post('/FileForm/{id}', 'Admin\FileFormController@update');
        Route::post('/FileForm/Delete/{id}', 'Admin\FileFormController@destroy');

      Route::get('/Year', 'Admin\YearController@index');
        Route::get('/Year/Lists', 'Admin\YearController@Lists');
        Route::post('/Year', 'Admin\YearController@store');
        Route::get('/Year/{id}', 'Admin\YearController@show');
        Route::post('/Year/{id}', 'Admin\YearController@update');
        Route::post('/Year/Delete/{id}', 'Admin\YearController@destroy');

      Route::get('/FileType', 'Admin\FileTypeController@index');
        Route::get('/FileType/Lists', 'Admin\FileTypeController@Lists');
        Route::post('/FileType', 'Admin\FileTypeController@store');
        Route::get('/FileType/{id}', 'Admin\FileTypeController@show');
        Route::post('/FileType/{id}', 'Admin\FileTypeController@update');
        Route::post('/FileType/Delete/{id}', 'Admin\FileTypeController@destroy');

      Route::get('/FileType/FundType/{id}', 'Admin\FundTypeController@index');
        Route::get('/FundType/Lists', 'Admin\FundTypeController@Lists');
        Route::post('/FundType', 'Admin\FundTypeController@store');
        Route::get('/FundType/{id}', 'Admin\FundTypeController@show');
        Route::post('/FundType/{id}', 'Admin\FundTypeController@update');
        Route::post('/FundType/Delete/{id}', 'Admin\FundTypeController@destroy');

      Route::get('/FileType/FundType/FileReport/{id}', 'Admin\FileReportController@index');
        Route::get('/FileType/UploadFile//{id}', 'Admin\FileReportController@uploadFile');
        Route::get('/FileReport/Lists', 'Admin\FileReportController@Lists');
        Route::post('/FileReport', 'Admin\FileReportController@store');
        Route::get('/FileReport/{id}', 'Admin\FileReportController@show');
        Route::post('/FileReport/{id}', 'Admin\FileReportController@update');
        Route::post('/FileReport/Delete/{id}', 'Admin\FileReportController@destroy');

      Route::get('/News', 'Admin\NewsController@index');
        Route::get('/News/Lists', 'Admin\NewsController@Lists');
        Route::post('/News', 'Admin\NewsController@store');
        Route::get('/News/{id}', 'Admin\NewsController@show');
        Route::post('/News/{id}', 'Admin\NewsController@update');
        Route::post('/News/Delete/{id}', 'Admin\NewsController@destroy');

      Route::get('/Debt/Uploade/{id}', 'Admin\DebtController@index');
        Route::get('/Debt/Lists', 'Admin\DebtController@Lists');
        Route::post('/Debt', 'Admin\DebtController@store');
        Route::get('/Debt/{id}', 'Admin\DebtController@show');
        Route::post('/Debt/{id}', 'Admin\DebtController@update');
        Route::post('/Debt/Delete/{id}', 'Admin\DebtController@destroy');


      Route::get('/GroupMenu', 'Admin\MenuGroupController@index');
        Route::get('/GroupMenu/Lists', 'Admin\MenuGroupController@Lists');
        Route::post('/GroupMenu', 'Admin\MenuGroupController@store');
        Route::get('/GroupMenu/{id}', 'Admin\MenuGroupController@show');
        Route::post('/GroupMenu/{id}', 'Admin\MenuGroupController@update');
        Route::post('/GroupMenu/Delete/{id}', 'Admin\MenuGroupController@destroy');

      Route::get('/Calendar', 'Admin\CalendarController@index');
        Route::get('/Calendar/Lists', 'Admin\CalendarController@Lists');
        Route::post('/Calendar', 'Admin\CalendarController@store');
        Route::get('/Calendar/{id}', 'Admin\CalendarController@show');
        Route::post('/Calendar/{id}', 'Admin\CalendarController@update');
        Route::post('/Calendar/Delete/{id}', 'Admin\CalendarController@destroy');

      Route::get('/FundInformation', 'Admin\FundInformationController@index');
      Route::get('/Mutual', 'Admin\FundInformationController@mutual');
      Route::get('/About', 'Admin\FundInformationController@about');
        Route::get('/FundInformation/Lists', 'Admin\FundInformationController@Lists');
        Route::post('/FundInformation', 'Admin\FundInformationController@store');
        Route::get('/FundInformation/{id}', 'Admin\FundInformationController@show');
        Route::post('/FundInformation/{id}', 'Admin\FundInformationController@update');
        Route::post('/FundInformation/Delete/{id}', 'Admin\FundInformationController@destroy');

        Route::post('/FileInformation', 'Admin\FileInformationController@store');

      Route::get('/Transaction', 'Admin\TransactionController@index');
        Route::get('/Transaction/Lists', 'Admin\TransactionController@Lists');
        Route::post('/Transaction', 'Admin\TransactionController@store');
        Route::get('/Transaction/{id}', 'Admin\TransactionController@show');
        Route::post('/Transaction/{id}', 'Admin\TransactionController@update');
        Route::post('/Transaction/Delete/{id}', 'Admin\TransactionController@destroy');

      Route::get('/Question', 'Admin\QuestionController@index');
        Route::get('/Question/Lists', 'Admin\QuestionController@Lists');
        Route::post('/Question', 'Admin\QuestionController@store');
        Route::get('/Question/{id}', 'Admin\QuestionController@show');
        Route::post('/Question/{id}', 'Admin\QuestionController@update');
        Route::post('/Question/Delete/{id}', 'Admin\QuestionController@destroy');

      Route::get('/Question/Answer/{id}', 'Admin\AnswerController@index');
        Route::get('/Answer/Lists', 'Admin\AnswerController@Lists');
        Route::post('/Answer', 'Admin\AnswerController@store');
        Route::get('/Answer/{id}', 'Admin\AnswerController@show');
        Route::post('/Answer/{id}', 'Admin\AnswerController@update');
        Route::post('/Answer/Delete/{id}', 'Admin\AnswerController@destroy');

      Route::get('/Career', 'Admin\CareerController@index');
        Route::get('/Career/Lists', 'Admin\CareerController@Lists');
        Route::post('/Career', 'Admin\CareerController@store');
        Route::get('/Career/{id}', 'Admin\CareerController@show');
        Route::post('/Career/{id}', 'Admin\CareerController@update');
        Route::post('/Career/Delete/{id}', 'Admin\CareerController@destroy');

      Route::get('/FundPerformance','Admin\PerformanceController@fund');
      Route::get('/Performance/import/{fund_short_name}', 'Admin\PerformanceController@index');
        Route::get('/Performance/Lists', 'Admin\PerformanceController@Lists');
        Route::get('/FundPerformance/Lists','Admin\PerformanceController@FundLists');
        Route::post('/Performance', 'Admin\PerformanceController@store');
        Route::get('/Performance/{id}', 'Admin\PerformanceController@show');
        Route::post('/Performance/{id}', 'Admin\PerformanceController@update');
        Route::post('/Performance/Delete/{id}', 'Admin\PerformanceController@destroy');

      Route::get('/Fund', 'Admin\FundController@index');
        Route::get('/Fund/Lists', 'Admin\FundController@Lists');
        Route::post('/Fund', 'Admin\FundController@store');
        Route::get('/Fund/{id}', 'Admin\FundController@show');
        Route::post('/Fund/{id}', 'Admin\FundController@update');
        Route::post('/Fund/Delete/{id}', 'Admin\FundController@destroy');

      Route::get('/Fund/FundReport/{id}', 'Admin\FundReportController@index');
        Route::get('/FundReport/Lists', 'Admin\FundReportController@Lists');
        Route::post('/FundReport', 'Admin\FundReportController@store');
        Route::get('/FundReport/{id}', 'Admin\FundReportController@show');
        Route::post('/FundReport/{id}', 'Admin\FundReportController@update');
        Route::post('/FundReport/Delete/{id}', 'Admin\FundReportController@destroy');

      Route::get('/Personnel', 'Admin\PersonnelController@index');
        Route::get('/Personnel/Lists', 'Admin\PersonnelController@Lists');
        Route::post('/Personnel', 'Admin\PersonnelController@store');
        Route::get('/Personnel/{id}', 'Admin\PersonnelController@show');
        Route::post('/Personnel/{id}', 'Admin\PersonnelController@update');
        Route::post('/Personnel/Delete/{id}', 'Admin\PersonnelController@destroy');

      Route::get('/FileType/UploadFile/{id}', 'Admin\FileListReportController@index');
        Route::get('/FileListReport/Lists', 'Admin\FileListReportController@Lists');
        Route::post('/FileListReport', 'Admin\FileListReportController@store');
        Route::get('/FileListReport/{id}', 'Admin\FileListReportController@show');
        Route::post('/FileListReport/{id}', 'Admin\FileListReportController@update');
        Route::post('/FileListReport/Delete/{id}', 'Admin\FileListReportController@destroy');

      Route::get('/Governance', 'Admin\GovernanceController@index');
        Route::get('/Governance/Lists', 'Admin\GovernanceController@Lists');
        Route::post('/Governance', 'Admin\GovernanceController@store');
        Route::get('/Governance/{id}', 'Admin\GovernanceController@show');
        Route::post('/Governance/{id}', 'Admin\GovernanceController@update');
        Route::post('/Governance/Delete/{id}', 'Admin\GovernanceController@destroy');

      Route::get('/TypeDebt', 'Admin\TypeDebtController@index');
        Route::get('/TypeDebt/Lists', 'Admin\TypeDebtController@Lists');
        Route::post('/TypeDebt', 'Admin\TypeDebtController@store');
        Route::get('/TypeDebt/{id}', 'Admin\TypeDebtController@show');
        Route::post('/TypeDebt/{id}', 'Admin\TypeDebtController@update');
        Route::post('/TypeDebt/Delete/{id}', 'Admin\TypeDebtController@destroy');

      Route::get('/TypeFund', 'Admin\TypeFundController@index');
        Route::get('/TypeFund/Lists', 'Admin\TypeFundController@Lists');
        Route::post('/TypeFund', 'Admin\TypeFundController@store');
        Route::get('/TypeFund/{id}', 'Admin\TypeFundController@show');
        Route::post('/TypeFund/{id}', 'Admin\TypeFundController@update');
        Route::post('/TypeFund/Delete/{id}', 'Admin\TypeFundController@destroy');

      Route::get('/SubFund', 'Admin\SubFundController@index');
        Route::get('/SubFund/Lists', 'Admin\SubFundController@Lists');
        Route::post('/SubFund', 'Admin\SubFundController@store');
        Route::get('/SubFund/{id}', 'Admin\SubFundController@show');
        Route::post('/SubFund/{id}', 'Admin\SubFundController@update');
        Route::post('/SubFund/Delete/{id}', 'Admin\SubFundController@destroy');

      Route::get('Fund/SubFundTitile/{id}', 'Admin\SubFundTitileController@index');
        Route::get('/SubFundTitile/Lists', 'Admin\SubFundTitileController@Lists');
        Route::post('/SubFundTitile', 'Admin\SubFundTitileController@store');
        Route::get('/SubFundTitile/{id}', 'Admin\SubFundTitileController@show');
        Route::post('/SubFundTitile/{id}', 'Admin\SubFundTitileController@update');
        Route::post('/SubFundTitile/Delete/{id}', 'Admin\SubFundTitileController@destroy');

      Route::get('/Fund/SubFundDetail/{id}', 'Admin\SubFundDetailController@index');
        Route::get('/SubFundDetail/Lists', 'Admin\SubFundDetailController@Lists');
        Route::post('/SubFundDetail', 'Admin\SubFundDetailController@store');
        Route::get('/SubFundDetail/{id}', 'Admin\SubFundDetailController@show');
        Route::post('/SubFundDetail/{id}', 'Admin\SubFundDetailController@update');
        Route::post('/SubFundDetail/Delete/{id}', 'Admin\SubFundDetailController@destroy');

      Route::get('/Trust', 'Admin\TrustController@index');
        Route::get('/Trust/Lists', 'Admin\TrustController@Lists');
        Route::post('/Trust', 'Admin\TrustController@store');
        Route::get('/Trust/{id}', 'Admin\TrustController@show');
        Route::post('/Trust/{id}', 'Admin\TrustController@update');
        Route::post('/Trust/Delete/{id}', 'Admin\TrustController@destroy');

      Route::get('/TrustPersonnel', 'Admin\TrustPersonnelController@index');
        Route::get('/TrustPersonnel/Lists', 'Admin\TrustPersonnelController@Lists');
        Route::post('/TrustPersonnel', 'Admin\TrustPersonnelController@store');
        Route::get('/TrustPersonnel/{id}', 'Admin\TrustPersonnelController@show');
        Route::post('/TrustPersonnel/{id}', 'Admin\TrustPersonnelController@update');
        Route::post('/TrustPersonnel/Delete/{id}', 'Admin\TrustPersonnelController@destroy');

      Route::get('/Economic', 'Admin\EconomicController@index');
        Route::get('/Economic/Lists', 'Admin\EconomicController@Lists');
        Route::post('/Economic', 'Admin\EconomicController@store');
        Route::get('/Economic/{id}', 'Admin\EconomicController@show');
        Route::post('/Economic/{id}', 'Admin\EconomicController@update');
        Route::post('/Economic/Delete/{id}', 'Admin\EconomicController@destroy');

      Route::get('/Popup', 'Admin\PopupController@index');
        Route::get('/Popup/Lists', 'Admin\PopupController@Lists');
        Route::post('/Popup', 'Admin\PopupController@store');
        Route::get('/Popup/{id}', 'Admin\PopupController@show');
        Route::post('/Popup/{id}', 'Admin\PopupController@update');
        Route::post('/Popup/Delete/{id}', 'Admin\PopupController@destroy');

      ##ROUTEFORINSTALL##
});
//OrakUploader
Route::any('/upload_file', 'OrakController@upload_file');
