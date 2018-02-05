$(document).ready(function() {
    personas();
    aventuras();

    $(".fecha-nacimiento").datepicker({
        format: 'yyyy/mm/dd',
        showAnim: 'fade'
    }).on(
      'show', function() {          
        // Obtener valores actuales z-index de cada elemento
        var zIndexModal = $('#up-persona-modal').css('z-index');
        var zIndexFecha = $('.datepicker').css('z-index');
            // alert(zIndexModal + zIndexFEcha);
            // Re asignamos el valor z-index para mostrar sobre la ventana modal
            $('.datepicker').css('z-index',zIndexModal+1);
    });

    $("#fecha").datepicker({
        format: 'yyyy/mm/dd',
        showAnim: 'fade'
    }).on(
      'show', function() {          
        // Obtener valores actuales z-index de cada elemento
        var zIndexModal = $('#up-aventura-modal').css('z-index');
        var zIndexFecha = $('.datepicker').css('z-index');
            // alert(zIndexModal + zIndexFEcha);
            // Re asignamos el valor z-index para mostrar sobre la ventana modal
            $('.datepicker').css('z-index',zIndexModal+1);
    });

    $( "#update-user" ).click(function(event){ 
        event.preventDefault();
        var id= $( '#id' ).val();
        var route = "/personas/"+id+"";
        var dataString  = $( '#form-user-up' ).serializeArray();
        $.ajax({
            url: route,
            type: 'PUT',
            datatype: 'json',
            data:dataString,
            success:function(data){
                 $('#personas').DataTable().ajax.reload();
                 $.notify({icon: "add_alert", message: data.message},{type: 'success', timer: 1000});
            },
             error:function(data){
              var error = data.responseJSON.errors;
                for(var i in error){
                    var message = error[i];
                    $.notify({icon: "add_alert", message: message},{type: 'warning', timer: 1000});
                }
            }
        })
    })
})

$( "#update-aventura" ).click(function(event){ 
        event.preventDefault();
        var id= $( '#id' ).val();
        var route = "/aventuras/"+id+"";
        var dataString  = $( '#form-aventura-up' ).serializeArray();
        $.ajax({
            url: route,
            type: 'PUT',
            datatype: 'json',
            data:dataString,
            success:function(data){
                 $('#aventuras').DataTable().ajax.reload();
                 $("#up-aventura-modal").modal("hide");
                 $.notify({icon: "add_alert", message: data.message},{type: 'success', timer: 1000});
            },
             error:function(data){
              var error = data.responseJSON.errors;
                for(var i in error){
                    var message = error[i];
                    $.notify({icon: "add_alert", message: message},{type: 'warning', timer: 1000});
                }
            }
        })
    })

$( "#update-encuesta" ).click(function(event){ 
        event.preventDefault();
        var id= $( '#id-encuesta' ).val();
        var route = "/question/"+id+"";
        var dataString  = $( '#form-up-encuesta' ).serializeArray();
        $.ajax({
            url: route,
            type: 'PUT',
            datatype: 'json',
            data:dataString,
            success:function(data){
                 $.notify({icon: "add_alert", message: data.message},{type: 'success', timer: 1000});
            },
             error:function(data){
              var error = data.responseJSON.errors;
                for(var i in error){
                    var message = error[i];
                    $.notify({icon: "add_alert", message: message},{type: 'warning', timer: 1000});
                }
            }
        })
    })


function loadModalUser(id)
{
    //alert(id)
   event.preventDefault();
   var route = "/personas/"+id+"/edit";
   var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
           url: route,
           type: 'GET',
        success:function(data){
            $('#id').val(data.id)
            $('#rut').val(data.rut)
            $('#nombres').val(data.nombres)
            $('#apellidos').val(data.apellidos)
            $('#email').val(data.email)
            $('#peso').val(data.peso)
            $('#telefono').val(data.telefono)
            $('#nacimiento').val(data.nacimiento)
            $('#nacionalidad').val(data.nacionalidad)
          },
       error:function(){
           alert('la operación falló');
          }
    })
}
function loadModalAventura(id)
{
    //alert(id)
   event.preventDefault();
   var route = "/aventuras/"+id+"/edit";
   var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
           url: route,
           type: 'GET',
        success:function(data){
            $('#id').val(data.id)
            $('#nombre').val(data.nombre)
            $('#fecha').val(data.fecha)
            $('#estado').val(data.estado)
          },
       error:function(){
           alert('la operación falló');
          }
    })
}

/*function loadModalAddUserAventura(id)
{
   event.preventDefault();
   var route = "/aventuras/"+id+"/edit";
   var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
           url: route,
           type: 'GET',
        success:function(data){
            $('#id').val(data.id)
            $('#nombre').val(data.nombre)
            $('#fecha').val(data.fecha)
            $('#estado').val(data.estado)
          },
       error:function(){
           alert('la operación falló');
          }
    })
}*/


function loadEncuestaUser(id)
{
   event.preventDefault();
   var route = "/question/"+id+"/edit";
   var csrf_token = $('meta[name="csrf-token"]').attr('content');
   $.ajax({
           url: route,
           type: 'GET',
        success:function(data){
            $('#id-encuesta').val(data.id)
            $('#p1').val(data.p1)
            $('#p2').val(data.p2)
            $('#p3').val(data.p3)
            $('#p4').val(data.p4)
            $('#p5').val(data.p5)
            $('#p6').val(data.p6)
            $('#p7').val(data.p7)
            $('#p8').val(data.p8)
            $('#p9').val(data.p9)
          },
       error:function(){
           alert('la operación falló');
          }
    })
}

  var personas = function()
   {
        var table = $('#personas').DataTable({
        "headers": {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        "processing": true,
        "serverSide": true,
        "order": [[ 2, "asc" ]],
        "ajax": {
             "url": "personas/show",
            },
        "pagingType": "simple_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "Todos"]
        ],
        "language": {
            url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        //"responsive": true,
        "columns":[
            {data: 'rut', name: 'rut'},
            {data: 'nombres', name: 'nombres'},
            {data: 'apellidos', name: 'apellidos'},
            {data: 'nacimiento', name: 'nacimiento'},
            {data: 'action', name: 'action', orderable: false, searchable: false, class:"text-right"}
        ],
    })
}

var aventuras = function()
   {
        var table = $('#aventuras').DataTable({
        "headers": {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        "processing": true,
        "serverSide": true,
        "order": [[ 2, "asc" ]],
        "ajax": {
             "url": "aventuras/show",
            },
        "pagingType": "simple_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "Todos"]
        ],
        "language": {
            url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        //"responsive": true,
        "columns":[
            {data: 'fecha', name: 'fecha'},
            {data: 'nombre', name: 'nombre'},
            {data: 'estado', name: 'estado'},
            {data: 'action', name: 'action', orderable: false, searchable: false, class:"text-right"}
        ],
    })
  }