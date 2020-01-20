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


#Semana 02
Route::prefix('semana02')->group(function(){

 
Route::get('template',function(){


return view('semana02.template');

});


Route::get('crud',function(){


return view('semana02.crud');

});


Route::get('data',function(){


#Arrays Asociativos

$result = array(

array(

'id'			=>1,
'nombres'   	=>'Luis',
'apellidos' 	=>'Claudio',
'fecha_ingreso'	=>'2015-02-02',
'puesto'		=>'Analista',
'area'			=>'Sistemas'
 

),
array(

'id'			=>2,
'nombres'   	=>'Karen',
'apellidos' 	=>'Torres',
'fecha_ingreso'	=>'2017-04-07',
'puesto'		=>'Analista',
'area'			=>'Administración'
 

),
array(

'id'			=>3,
'nombres'   	=>'Omar',
'apellidos' 	=>'Fernandez',
'fecha_ingreso'	=>'2018-07-19',
'puesto'		=>'Analista',
'area'			=>'Ventas'
 

)




);



//return ['data'=>$result];
  return array('data'=>$result);


})->name('get_data');



});






Route::prefix('semana03')->group(function (){


# Semana03Controller
Route::get('ejemplo01','Semana03Controller@ejemplo01');

Route::get('ejemplo02','Semana03Controller@ejemplo02');

Route::get('ejemplo03','Semana03Controller@ejemplo03');

Route::get('ejemplo04','Semana03Controller@ejemplo04');

Route::get('ejemplo05','Semana03Controller@ejemplo05');


});