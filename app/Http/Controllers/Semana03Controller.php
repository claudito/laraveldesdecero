<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Semana03Controller extends Controller
{
    //

 function  ejemplo01(){


 	$nombres  = "Luis Augusto";

 	$edad     = 28;

 	$peso	=  60.5;

 	$estado = true;

 	$estado =  ($estado) ? 1 : 0;

    $fecha  = "2020-01-19";

    $hora   = "10:10:10";

  
  	 return $estado;



 }




 function ejemplo02(){


 $array = array('Azul','Verde','Rojo','Amarillo');


 $array = array(

 'id'=>1,
 'nombres'=>'Juan Carlos',
 'apellidos'=>'Perez Torres'



 );


 $array = array(

array(

 'id'=>1,
 'nombres'=>'Juan Carlos',
 'apellidos'=>'Perez Torres'


),

array(

 'id'=>2,
 'nombres'=>'Maria',
 'apellidos'=>'Perez'


)



 );


 return $array;



 }



 function ejemplo03(){


define('VELOCIDAD_LUZ','299 792 458 m/s');

define('IGV','18%');


define('CONEXION',

array(

'SERVER'=>'localhost',
'USER'	=>'root',
'PASS'	=>'',
'BD'	=>'db_curso'
	
)

);




 }


function ejemplo04(){

//IF ELSE
$edad = 18;


$mensaje = "";

if($edad>=18)
{

 $mensaje =  'Mayor de Edad';

}
else
{

 $mensaje =  'Menor de Edad';

}

//SWITCH
$opcion =  6;


switch ($opcion) {
	case 1:
	$mensaje  = "Opción #1";
		break;

	case 5:
	$mensaje  = "Opción #5";
		break;
	
	default:
	$mensaje = "Opción no disponible";
		break;
}


$opcion  = 5;


$array = array(

1 =>'Lorem ipsum dolor sit',
2 =>'2',
3 =>'yyyy',
4 =>'zzzz',
5 =>'xxxxx',
6 =>'6',
7 =>'7'


);

$mensaje = $array[$opcion];


return $mensaje;






}



function ejemplo05(){

##  Explode
$cadena =  "A/B/C/D/E/F/X/Y/Z";

$cadena =  explode('/', $cadena);

## Implode
//$cadena = implode(' ', $cadena);

//$cadena = strlen($cadena);

$cadena = count($cadena);

return $cadena;



}




}
