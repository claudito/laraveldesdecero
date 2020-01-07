<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8">	<!-- Ñ  í ü -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Semana 01 | Formularios</title>

 <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>

	</head>
	<body>
     
     <h1>Formularios</h1>

     <form id="registro">
     	
     <label>Nombres</label>
     <input type="text" name="nombres" required 
     value="Luis">

     <br>

     <label>Edad</label>
     <input type="number" name="edad" required min="18" max="99" value="29">
      
     <br>

     <label>Peso</label>
     <input type="number" name="peso" required 
     step="any" min="0.00" value="67.8">
       
     <br>
     <label>Fecha</label>
     <input type="date" name="fecha" required
     max="2020-01-05" min="2020-01-01" value="2020-01-04" 
     >
     <br>
     <label>Hora</label>
     <input type="time" name="hora" required
       min="14:00" max="18:00" value="15:00">

     <br>
     
     <label>Fecha y Hora</label>
     <input type="datetime-local" name="fechahora" 
      value="2020-01-08T18:00" 
     >
     <br>
      
     <label>Mes</label>
     <input type="month" name="mes" required value="2020-01">
      
     <br>
     <label>Semana</label>
     <input type="week" name="semana" required value="2020-W52">

     <br>
     <label>Turno</label>
     <input type="radio" name="turno" value="M" required >Mañana
     <input type="radio" name="turno" value="T" required >Tarde
     <input type="radio" name="turno" value="N" required checked>Noche


     <br>
     <label>Oficce</label>
     <input type="checkbox" name="office" value="Word">Word
     <input type="checkbox" name="office" value="Excel">Excel

     <br>

     <label>Rango</label>
     <input type="range" name="rango" required value="50">

     <br>
     <label >Colors</label>
     <input type="color" name="colors" required>

     <br>
    
     <label>Archivos</label>

     <input type="file" name="archivos">


     <br>

     <label>Distritos</label>
     <select name="distritos" required>
     <option value="">Seleccionar</option>
     <option value="1">San Juan de Lurigancho</option>
     <option value="2">Comas</option>
     <option value="3">Villa Maria</option>
     <option value="4" selected>Los Olivos</option>
     
     </select>

     <br>
    
     <label>Comentario</label>
     <textarea name="comentario" cols="50" rows="3" placeholder="Ingrese su comentario." >Hola soy un comentario</textarea>

     <br>
     
     <label>Contraseña</label>
     <input type="password" name="password" required value="123">

     <!-- Input Oculto -->
     <input type="hidden" name="oculto" value="*******">


     <br>

     <label>Email</label>
     <input type="email" name="email" required 
      value="luis.claudio@perutec.com.pe">

     <br>
     <label>Url</label>
     <input type="url" name="url" required value="http://perutec.com.pe">

    <br>
    <label for="">Imagen</label>
    <input type="image" name="imagen" 
    src="https://clouding.io/kb/wp-content/uploads/2017/10/if_laravel_1006880.png" alt="" width="50">


     <br>

     <label>Telefono</label>
     <input type="tel" name="telefono" required value="988888888">
      
     <br>
     <label>Búsqueda</label>
     <input type="search" name="busqueda" value="laravel 6">

     <br>
     <button>Registro</button>
     <input type="reset" value="Limpiar">

     </form>


	<script>
		
    $(document).on('submit','#registro',function (e){

      parametros = $(this).serialize();

      alert(parametros);

      e.preventDefault();
    });



	</script>
	</body>
</html>