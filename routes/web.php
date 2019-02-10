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
// derniere version
Route::get('/','MainController@index');
Route::get('/myoffers','ArticleController@myoffers');
Route::get('/offers','ArticleController@index');
Route::get('/vuejs', function(){return view('vuetesting');});


Route::get('index.html','MainController@index')->name('');

Route::get('Ensat_CD', 'InscriptionsCPC_Controller@getData');

Route::post('inscriptionCPC/submit', 'InscriptionsCPC_Controller@submit');

Route::post('contactus/submit', 'contactus_Controller@submitHome');
//Route::post('contactusECC/submit', 'contactus_Controller@submitECC');
//Route::post('contactus/submit', 'contactus_Controller@submit');

Auth::routes();

Route::get('/blog', 'ArticleController@index')->name('home');

Route::get('/EspaceMembre', 'HomeController@index')->name('home');


Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);

Route::get('create/post','ArticleController@getArticleForm');

Route::post('create/post/add', 'ArticleController@submit');

Route::get('panel','ArticleController@getArticleForm');


Auth::routes();

Route::get('/chat', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');
