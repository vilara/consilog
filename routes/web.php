<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::resource('/usuarios','UsuariosController');
Route::resource('/oms','OmsController');
Route::resource('/telefones','TelefonesController');
Route::resource('/enderecos','EnderecosController');
Route::resource('/latlongs','LatLongsController');
Route::resource('/cidades','CidadesController');
Route::resource('/estados','EstadosController');
Route::resource('/funcoes','FuncoesController');
Route::resource('/secoes','SecoesController');
Route::resource('/logins','LoginsController');
Route::resource('/civis','CivisController');
Route::resource('/militares','MilitaresController');
Route::resource('/postograds','PostoGradsController');
Route::resource('/perfils','PerfilController');
Route::resource('/tipoTels','tipoTelsController');
Route::resource('/comandos','ComandoController');


Route::get('/','PagesController@welcome');

Route::get('/usuarios/telefones/{id}','UsuariosController@userTel');
Route::get('/usuarios/telefones/create/{id}','UsuariosController@userTelCreate');
Route::get('/usuarios/enderecos/{id}','EnderecosController@CreateEndUsu');


Route::get('/oms/telefones/{id}','OmsController@omTel');
Route::get('/oms/telefones/create/{id}','TelefonesController@CreateTelOm');
Route::get('/oms/enderecos/{id}','EnderecosController@CreateEndOm');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
