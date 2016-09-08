<?php


Route::get('/', ['as' => 'home', 'uses' => 'front\HomeController@index']);
Route::get('about', ['as' => 'about', 'uses' => 'front\HomeController@about']);
Route::get('services', 'front\HomeController@services');
Route::get('faq', 'front\HomeController@faq');
Route::get('login', 'front\HomeController@login');
Route::get('logout', 'front\HomeController@logout');

Route::get('new_customer', ['as'=> 'add.customer','uses'=>'user\UserController@add_customer']);
Route::post('contact',                  ['as' => 'user.email',                'uses' => 'front\HomeController@email']);
Route::post('about',                  ['as' => 'front.about',                'uses' => 'front\HomeController@aboutgo']);
Route::get('law',                  ['as' => 'front.law',                'uses' => 'front\HomeController@law']);
Route::post('sendmail',                  ['as' => 'front.sendmail',                'uses' => 'front\HomeController@sendmail']);

Route::any('contactemail',                  ['as' => 'contact.email',                'uses' => 'front\HomeController@contactemail']);

Route::get('dips',                  ['as' => 'dips',                'uses' => 'user\UserController@dips']);


Route::any('didupdate',                  ['as' => 'did.update',                'uses' => 'user\UserController@didupdate']);
Route::any('dipreload',                  ['as' => 'dip.reload',                'uses' => 'user\UserController@dipreload']);
Route::any('cnamverify',                  ['as' => 'cnam.verify',                'uses' => 'user\UserController@cnamverify']);

Route::post('addcustomer',                  ['as' => 'add.newcustomer',                'uses' => 'user\UserController@newcustomer']);
Route::any('company',                  ['as' => 'company.search',                'uses' => 'user\UserController@company']);



Route::get('admin',                  ['as' => 'admin.backend',                'uses' => 'user\UserController@admin_backend']);

Route::get('cnam',                  ['as' => 'cnam',                'uses' => 'user\UserController@cnam']);

Route::get('contact',['as' => 'contact', 'uses' => 'front\HomeController@contact'] );




Route::post('doLogin',                  ['as' => 'user.doLogin',                'uses' => 'user\UserController@doLogin']);




Route::any('cusupdate',                  ['as' => 'cus.update',                'uses' => 'user\UserController@cusupdate']);
Route::get('modify_customer',                  ['as' => 'admin.modify',                'uses' => 'user\UserController@modify_cus']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


*/


Route::get('did',                  ['as' => 'admin',                'uses' => 'user\UserController@index']);





