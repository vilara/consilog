<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use GoogleMaps\GoogleMaps;
use FarhanWazir\GoogleMaps\GMaps;

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

Route::group(['middleware' => ['auth']], function(){
Route::resource('/oms','OmsController');
});

Route::resource('/telefones','TelefonesController');
Route::resource('/enderecos','EnderecosController');
Route::resource('/latlongs','LatLongsController');
Route::resource('/cidades','CidadesController');
Route::resource('/estados','EstadosController');
Route::resource('/funcoes','FuncoesController')->parameters(['funcoes' => 'funcao']); // muda o nome do parametro dos controllers --- nome do objeto tem que ser igual a "funcao"
Route::resource('/secoes','SecoesController');
Route::resource('/logins','LoginsController');
Route::resource('/civis','CivisController');
Route::resource('/militares','MilitaresController');
Route::resource('/postograds','PostoGradsController');
Route::resource('/perfils','PerfilController');
Route::resource('/tipoTels','tipoTelsController');
Route::resource('/comandos','ComandoController');
Route::resource('/armamentos','ArmamentoController');
Route::resource('/municaos','MunicaoController');


Route::get('/','PagesController@welcome');

Route::get('/usuarios/telefones/{id}','UsuariosController@userTel');
Route::get('/usuarios/telefones/create/{id}','UsuariosController@userTelCreate');
Route::get('/usuarios/enderecos/{id}','EnderecosController@CreateEndUsu');


Route::get('/oms/telefones/{id}','OmsController@omTel');
Route::get('/oms/telefones/create/{id}','TelefonesController@CreateTelOm');
Route::get('/oms/enderecos/{id}','EnderecosController@CreateEndOm');
Route::get('/oms/subordinacao/create/{id}','OmsController@CreateSubordinacaoOm');
Route::post('/oms/subordinacao/store','OmsController@StoreSubordinacaoOm');

// views dos comandos 

Route::get('/comandos/subordinados/{id}','ComandoController@showSubordinadas');

// views Latlongs 

Route::get('/latlongs/create/{id}','LatLongsController@createLatlongOm');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// maps

Route::get('/mapa', function (){
	
	$config = array();
	$config['center'] = '-23.955997, -46.351073';
	$config['zoom'] = '7';
	$config['map_height'] = '500px';
	$config['geocodeCaching'] = true;
	
	
	$gmap = new GMaps();
	$gmap->initialize($config);
	
	
	$marker = array();
	$marker['position'] = '-23.955997, -46.351073';
	$marker['infowindow_content'] = 'Brasil';
	$marker['visible'] = true;
	$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_spin&chld=1.0|0|006400|12|_|55';
	$gmap->add_marker($marker);
	
	$marker['position'] = '-22.955997, -46.351073';
	$marker['infowindow_content'] = 'Selva';
	$marker['visible'] = true;
	$gmap->add_marker($marker);
	
	
	
	$map = $gmap->create_map();
	return view('mapa.teste', compact('map'));
	
// 	return view('mapa.teste', compact('mm'));
});
