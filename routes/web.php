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
//Route::get('/offerpageismael', function(){return view('inc\offerpageismael');});
Route::get('offerinfo/details/{idpub}', 'ArticleController@offerDetails');


Route::get('index.html','MainController@index')->name('');

Route::get('/profile/{id}','UserController@profile');

Route::get('/profile/edit',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::post('/profile/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('Ensat_CD', 'InscriptionsCPC_Controller@getData');

Route::group(['middleware' => 'web'], function () {

Route::get('fileUpload', function () {

    return view('fileUpload');

});

Route::post('fileUpload', ['as'=>'fileUpload','uses'=>'HomeController@fileUpload']);
});

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

//Route::get('create/post','ArticleController@getArticleForm');

//Route::post('myoffers', 'ArticleController@submit');
Route::post('create/post/add', 'ArticleController@submit');
Route::get('post/delete/{id}', 'ArticleController@destroy');
Route::post('create/post/update/{id}', 'ArticleController@update');

Route::get('panel','ArticleController@getArticleForm');
Auth::routes();

Route::get('/chat', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');
