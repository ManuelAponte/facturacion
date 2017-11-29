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


//Página Vista de documentos hecho con DataTable ejecutado del lado del servidor
Route::get('/', function () {    
    return view('consulta');
});
Route::get('api/docs', function(){
    return datatables()->eloquent(App\Documento::query())->toJson();
   // return datatables()->eloquent(App\Documento::all());
});

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

   // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');
*/

//Route::get('/','DownloadController@downfunc')->name('home');//Enrutador para pdf con descarga OK