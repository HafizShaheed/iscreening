<?php

use Illuminate\Support\Facades\Route;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;

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


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


//start


    Route::namespace('web')->group(function(){
        Route::get('test', 'webController@test')->name('web.test');
        Route::get('logout', 'webController@logout')->name('web.logout');
        Route::post('login-submit', 'webController@loginSubmitclient')->name('web.login_Submit_client');
        Route::get('/', 'webController@index')->name('web.login');
    });


// //Client or company Dashboard Dashboard
    Route::prefix('company')->namespace('user')->middleware('userAuth')->group(function(){

        Route::get('/', 'userController@index')->name('company.dashboard');
        Route::post('/sendEmailForRequestThirdParty', 'userController@sendEmailForRequestThirdParty')->name('company.sendEmailForRequestThirdParty');



        Route::prefix('report')->group(function(){
            Route::get('/', 'userController@report_List')->name('company.report_List');
            Route::get('/view', 'userController@viewReportsData')->name('company.viewReportsData');

        });

    });


    //Team Dashboard
    Route::prefix('panel-team')->namespace('team')->group(function(){


        Route::get('/', 'teamController@login')->name('team.login');


        Route::post('/login', 'teamController@loginSubmit')->name('team.loginSubmit');
        Route::get('/logout', 'teamController@logout')->name('team.logout');



        Route::middleware('teamAuth')->group(function(){

            Route::get('/dashboard', 'teamController@index')->name('team.index');
            Route::prefix('report')->group(function(){
                Route::get('/', 'teamController@report_List')->name('team.report_List');
                Route::get('/view', 'teamController@report_View')->name('team.report_View');
                Route::get('/add', 'teamController@add_report')->name('team.add_report');

            });
            Route::prefix('third-party')->group(function(){
                Route::get('/', 'teamController@vender_List')->name('team.vender_List');

            });

        });

    });
//Admin Dashboard
    Route::prefix('panel')->namespace('admin')->group(function(){

        Route::get('/', 'authController@index')->name('admin.dashboard');
        Route::get('/login', 'authController@login')->name('admin.login');
        Route::post('/login', 'authController@loginSubmit')->name('admin.loginSubmit');

        Route::get('/logout', 'authController@logout')->name('admin.logout');

        Route::middleware('adminAuth')->group(function(){

            Route::get('/dashboard', 'adminController@index')->name('admin.index');
            // Route::get('/attention-required', 'adminController@attentionRequired')->name('admin.attentionRequired');
            // Route::get('/report-page', 'adminController@reportPage')->name('admin.reportPage');
            Route::prefix('client')->group(function(){
                Route::get('/', 'adminController@companyList')->name('admin.companyList');
                Route::post('/add', 'userController@addClient')->name('admin.addClient');
                Route::post('/update_company', 'adminController@update_company')->name('admin.update_company');
                Route::get('/edit/{id}', 'adminController@Edit_company')->name('admin.Edit_company');


            });

            Route::prefix('team')->group(function(){
                Route::get('/', 'adminController@team_List')->name('admin.team_List');
                Route::post('/add', 'userController@addTeamMember')->name('admin.addTeamMember');
                Route::get('/edit/{id}', 'adminController@Edit_team')->name('admin.Edit_team');
                Route::post('/update_team', 'adminController@update_team')->name('admin.update_team');



            });
            Route::prefix('third-party')->group(function(){
                Route::get('/', 'adminController@vender_List')->name('admin.vender_List');
                Route::post('/add', 'userController@addThirdParty')->name('admin.addThirdParty');
                Route::post('/update_vender', 'adminController@update_vender')->name('admin.update_vender');
                Route::get('/edit/{id}', 'adminController@Edit_vender')->name('admin.Edit_vender');

            });

            Route::prefix('report')->group(function(){
                Route::get('/', 'adminController@report_List')->name('admin.report_List');
                Route::get('/view/{id}', 'adminController@report_View')->name('admin.report_View');
                Route::get('/edit/{id}', 'adminController@Edit_report')->name('admin.Edit_report');

            });



        });

    });

