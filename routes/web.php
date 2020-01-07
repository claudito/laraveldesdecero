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

#Grupos de Rutas(Prefijos)
#Semana01:['formularios','tablas','video','audio']

/*
Route::get('semana01/formularios',function (){

  return view('semana01.index');

});
*/

Route::prefix('semana01')->group(function (){

#semana01/formularios
Route::get('formularios',function (){

  return view('semana01.formularios');

});

#semana01/tablas
Route::get('tablas',function (){

  return view('semana01.tablas');

});

#semana01/audio
Route::get('audio',function (){

  return view('semana01.audio');

});


#semana01/video
Route::get('video',function (){

  return view('semana01.video');

});




});