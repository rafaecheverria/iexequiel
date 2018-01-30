function redirect(ruta)
{
    window.location = ruta;
    //setTimeout("location."+ruta, 5000);
}
$(document).ready(function() {
$( "#ingresar" ).click(function(event){ 
        event.preventDefault();
        var dataString  = $( '#form_login' ).serializeArray();
        var route = "login";
        console.log(dataString)
        $.ajax({
            url: route,
            headers: {'X-CSRF-TOKEN':$('input[name=_token]').attr('content')},
            type: 'post',
            datatype: 'json',
            data:dataString,
        success:function(data){
            redirect('/inicio');
        },
        error:function(data){
            console.log(data)
                var error = data.responseJSON.errors;
                for(var i in error){
                    for(var j in error[i]){
                        var message = error[i][j];
                       $.notify({icon: "add_alert", message: message},{type: 'warning', timer: 1000});
                    }
                }
            }
        })
    })

    toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "positionClass": "toast-bottom-right",
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }

})