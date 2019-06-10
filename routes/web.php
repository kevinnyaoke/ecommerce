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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login.custom',[
'uses'=>'LoginController@login',
'as'=>'login.custom',
]);

Route::group(['middleware'=>'auth'],function(){
  Route::get('/home',function(){
  return view('user.home');
  })->name('home');

  Route::get('/dashboard',function(){
    return view('admin.dashboard');
    })->name('dashboard');
});

Route::group(['prefix'=>'user'], function(){
  Route::get('/register','HomeController@register')->name('userreg');
  Route::get('/cart',"HomeController@cart")->name('cart');
  Route::get('/checkout','HomeController@checkout')->name('checkout');
  Route::get('/catalog','HomeController@catalog')->name('catalog');
  Route::get('/fashion','HomeController@fashion')->name('fashion');
  Route::get('/babytoys','HomeController@babytoys')->name('babytoys');
  Route::get('/electronics','HomeController@electronics')->name('electronics');
  Route::get('/fitness','HomeController@fitness')->name('fitness');
  Route::get('/supermkt','HomeController@supermkt')->name('supermkt');
  Route::get('/logout','HomeController@logout')->name('logout');


});



Route::group(['prefix'  =>  'admin'], function () {

  Route::get('login', 'AdminController@showLoginForm')->name('admin.login');
  Route::post('login', 'AdminController@login')->name('admin.login.post');
  Route::get('logout', 'AdminController@logout')->name('admin.logout');
  Route::get('calender','AdminController@calender')->name('calender');
  Route::get('invoice','AdminController@invoice')->name('invoice');
  Route::get('mailbox','AdminController@mailbox')->name('mailbox');
  Route::get('pageuser','AdminController@pageuser')->name('pageuser');
});