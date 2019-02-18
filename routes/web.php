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


Route::group(['namespace'=>'Home'], function (){
    $this->get('/', 'Principal\HomeController@index')->name('Home.Principal.index');
});

Auth::routes();


Route::group(['namespace'=>'Painel'], function (){
    $this->get('/Painel', 'Principal\PainelController@index')->name('Painel.Principal.index');
});
