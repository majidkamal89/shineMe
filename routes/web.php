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


Auth::routes();


Route::group(['prefix' => '/'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    if(!\Illuminate\Support\Facades\Request::is('dashboard')){
        Route::get('/{slug}', 'HomeController@show')->name('loadPage');
    }
    Route::get('/{slug}/{id}', 'HomeController@detailPage')->where('id', '[0-9]+')->name('detailPage');
    Route::get('/general-message/category/{id}', 'HomeController@listAllMajors')
        ->where('id', '[0-9]+')->name('listAllMajors');
    Route::get('/general-message/category-detail/{id}', 'HomeController@listSingleCategory')
        ->where('id', '[0-9]+')->name('listSingleCategory');

    Route::post('/{slug}/submit-request', 'ContactUsController@store')->name('saveContactRequest');
});

/*
Route::view('/knowledge-category', 'pages.knowledge-category');
Route::view('/knowledge-category-business', 'pages.knowledge-category-business');
Route::view('/sitemap', 'pages.sitemap');
Route::view('/search-result', 'pages.search-result');
*/

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'namespace' => 'admin' ,'as' => 'dashboard.'], function (){
    Route::get('/', 'DashboardController@index')->name('home');
    Route::get('/{slug}', 'PageController@index')->name('page');
    Route::post('/update/program/{id}', 'ProgramController@update')->where('id', '[0-9]+')->name('updateMajorProgram');
    Route::get('/load/program/{id}', 'ProgramController@show')->where('id', '[0-9]+')->name('loadMajorProgram');

    Route::post('/store/slider', 'SliderController@store')->name('saveSlider');
    Route::get('/load/slider/{id}', 'SliderController@show')->name('loadSliderData');
    Route::get('/delete/slider/{id}', 'SliderController@destroy')->name('deleteSliderData');

    Route::post('/store/service', 'ServiceController@store')->name('saveService');
    Route::get('/load/service/{id}', 'ServiceController@show')->name('loadServiceData');
    Route::get('/delete/service/{id}', 'ServiceController@destroy')->name('deleteServiceData');

    Route::post('/store/news', 'NewsController@store')->name('saveNews');
    Route::get('/load/news/{id}', 'NewsController@show')->name('loadNewsData');
    Route::get('/delete/news/{id}', 'NewsController@destroy')->name('deleteNewsData');

    Route::post('/contact/reply-to/{id}', 'DashboardController@sendResponseEmail')
        ->where('id', '[0-9]+')->name('sendResponseEmail');
    Route::get('/contact/all', 'DashboardController@loadContactUs')->name('loadContactUs');
    Route::get('/contact/delete/{id}', 'DashboardController@destroy')->name('deleteContactUs');

    // Email template route
    Route::post('/email-template/save', 'DashboardController@store')->name('saveEmailTemplate');
    Route::get('/email-template/all', 'DashboardController@loadEmailTemplate')->name('loadEmailTemplate');
    Route::get('/email-template/delete/{id}', 'DashboardController@deleteEmailTemplate')
        ->where('id', '[0-9]+')->name('loadEmailTemplate');

    // Admin Email route
    Route::post('/admin-email/save', 'DashboardController@saveAdminEmail')->name('saveAdminEmail');
    Route::get('/admin-email/all', 'DashboardController@loadAdminEmail')->name('loadAdminEmail');
    Route::get('/admin-email/delete/{id}', 'DashboardController@deleteAdminEmail')
        ->where('id', '[0-9]+')->name('deleteAdminEmail');

    // Add/Edit Program Major List
    Route::get('/{slug}/program-major/{id}', 'ProgramController@edit')->name('editProgramList');
    Route::get('/{slug}/program-major', 'ProgramController@create')->name('createProgramList');
    Route::post('/{slug}/program-major', 'ProgramController@store')->name('saveProgramList');
    Route::post('/{slug}/program-major/{id}', 'ProgramController@updateProgramList')->name('updateProgramList');
    Route::get('/{slug}/program-major/delete/{id}', 'ProgramController@destroy')->name('deleteProgramList');


    Route::get('/load-edit-form/{id}/{sequence}', 'PageController@edit')
        ->where('id', '[0-9]+')->where('sequence', '[0-9]+')->name('loadEditForm');
    Route::post('/update-edit-form/{id}/{sequence}', 'PageController@update')
        ->where('id', '[0-9]+')->where('sequence', '[0-9]+')->name('updatePageContent');
    Route::get('/load-page-data/{id}/{sequence}', 'PageController@show')
        ->where('id', '[0-9]+')->where('sequence', '[0-9]+')->name('loadPageData');
});
