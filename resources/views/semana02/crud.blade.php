<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Crud</title>

 <!-- Css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>
<body>


<div class="container-fluid">
	
<div class="row">
	
<div class="col-md-12">
	
	
   <div class="card">
   	
	<div class="card-header">
		Lista de Trabajadores

     <div class="float-right">
        
        <button class="btn btn-primary btn-sm btn-agregar" ><i class="fa fa-plus"></i>  Agregar</button>

     </div>

	</div>

	<div class="card-body">

    <div class="table-responsive">
    
	 <table class="table" id="consulta">
     		<thead>
     				<tr>
     					<th>Id</th>
     					<th>Nombres</th>
     					<th>Apellidos</th>
     					<th>Fecha de Ingreso</th>
     					<th>Puesto</th>
     					<th>Área</th>
                        <th>Acciones</th>
     				</tr>
     		</thead>

     </table>

    </div>


	</div>

	<div class="card-footer text-center">
	 PerúTec Academy 2020
	</div>

   </div>



</div>


</div>

</div>


<!-- Modal Registro(Agregar/Actualizar) -->

<form id="registro" autocomplete="off">
    
<div class="modal fade" id="modal-registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
        <div class="form-group">
        <label>Nombres</label>
        <input type="text" name="nombres" class="nombres form-control">
        </div>

        <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="apellidos" class="apellidos form-control">
        </div>


        <div class="form-group">
        <label>Fecha de Ingreso</label>
        <input type="date" name="fecha_ingreso" class="fecha_ingreso form-control">
        </div>

        <div class="form-group">
        <label>Puesto</label>
        <input type="text" name="puesto" class="puesto form-control">
        </div>


        <div class="form-group">
        <label>Área</label>
        <select name="area" class="area form-control">
        <option value="Sistemas">Sistemas</option>
        <option value="Administración">Administración</option>
        <option value="Ventas">Ventas</option>
        </select>
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary btn-submit">Save changes</button>
      </div>
    </div>
  </div>
</div>


</form>



	<script>
		
     $(document).ready(function(){

      $('#consulta').DataTable({

     	language:{
     
        url:"{{ asset('js/spanish.json') }}"


     	},
     	ajax:{

         url:"{{ route('get_data') }}",
         type:"GET"


     	},
     	columns:[

     	{data:'id'},
     	{data:'nombres'},
     	{data:'apellidos'},
     	{data:'fecha_ingreso'},
     	{data:'puesto'},
     	{data:'area'},
        {data:null,render:function(data){

         return `

         <button 

        data-id             ="${data.id}"
        data-nombres        ="${data.nombres}"
        data-apellidos       ="${data.apellidos}"
        data-fecha_ingreso  ="${data.fecha_ingreso}"
        data-puesto         ="${data.puesto}"
        data-area           ="${data.area}" 

         class="btn btn-primary btn-sm btn-edit"><i class="fa fa-pencil-square-o"></i></button>

        <button class="btn btn-danger btn-sm btn-delete"
        ><i class="fa fa-trash-o"></i></button>

         `;


        }}



     	]



      });
 


     });


     //Cargar Modal Agregar
     $(document).on('click','.btn-agregar',function(){

        $('#registro')[0].reset();

        $('.modal-title').html('Agregar');
        $('.btn-submit').html('Agregar');
        $('#modal-registro').modal('show');


     });


       //Cargar Modal Actualizar
     $(document).on('click','.btn-edit',function(){

        $('#registro')[0].reset();

        //Elementos Data
        id             = $(this).data('id');
        nombres       = $(this).data('nombres');
        apellidos     = $(this).data('apellidos');
        fecha_ingreso = $(this).data('fecha_ingreso');
        puesto        = $(this).data('puesto');
        area          = $(this).data('area');


        $('.nombres').val(nombres);
        $('.apellidos').val(apellidos);
        $('.fecha_ingreso').val(fecha_ingreso);
        $('.puesto').val(puesto);

        $('.area').val(area);

        $('.modal-title').html('Actualizar');
        $('.btn-submit').html('Actualizar');
        $('#modal-registro').modal('show');


     });

       //Cargar Modal Eliminar
     $(document).on('click','.btn-delete',function(){


        Swal.fire({
  title: '¿Estás Seguro?',
  text: "El Registro se eliminará de forma permanente",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si,estoy seguro',
  cancelButtonText : 'Cancelar'
}).then((result) => {
  if (result.value) {

    
    Swal.fire({

    title:'Buen Trabajo',
    text :'Registro Eliminado',
    icon :'success',
    timer:3000,
    showConfirmButton:false


    });
    



  }


})




     });


	</script>
</body>
</html>