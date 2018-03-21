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
//     return view('custom.login');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('register','userAuthController@showRegisterform')->name('custom.register');
Route::post('register','userAuthController@register');

// Dashboard Routes

Route::get('user_edit','userController@show')->name('user-edit');
Route::post('user_edit','userController@update');
Route::get('post_list','showMessangerForm@postlist')->name('user_post_list');
//This would show the message inside the Modal. Javascript API
Route::get('admin/postshow','showMessangerForm@showPost');
Route::get('updatepost','showMessangerForm@userUpdatePost');
Route::get('forceModalOpen','showMessangerForm@forceModalOpen');


Route::group(['middleware' => ['auth','roles']], function () {
////////////////////////////////////////////////////////////////
// ROUTES PROTECTED WITH THE auth and roles (admin) middleware//
// Adminstrator Routes

        Route::get('admin','adminControllerPages@show')->name('admin');


        //Administrator Messagers Routes

        Route::resource('admin/posts', 'adminControllerMessages');
        Route::get('admin/post_form','showMessangerForm@show')->name('postform.show');
        Route::post('admin/post_delete/{id}','adminControllerMessages@destroy');

        //User Admins site managements

        Route::get('admin/user','userController@userlist')->name('user.list');
        Route::post('admin/avatar/{id}','userController@avatar');
        Route::get('admin/user/view/{id}','userController@userview');
        Route::post('admin/user/view/{id}','userController@userAdminedit')->name('userAdminUpdate');
        Route::post('admin/user/{id}','userController@destroy')->name('user.destroy');

        //Excel Import and Export Contollers

        Route::get('admin/excel_form','ExcelController@showForm')->name('excel.import');
        Route::post('admin/excel_upload','ExcelController@import');
        Route::get('admin/scorecard','ExcelController@scorecard')->name('show.scorecard');


/////////////////////////////////////////////////////////
});




//TEST//
Route::get('post/{id}','showMessangerForm@usertest');
Route::get('test',function(){
    return view('thanks');
});
// Verification Email Route

Route::get('/verify/{token}','verifyController@verifyemail')->name('verify');


//Show Analytics

Route::get('analytic','showAnalytic@show')->name('show.analytic');

// Custom Logincontroller

Route::post('/login/custom',[
    'uses'=>'LoginController@login',
     'as'=>'login.custom'
]);
