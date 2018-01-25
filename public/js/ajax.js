$(document).ready(function() {


	$( "#enviar_datos" ).click(function(event){ 

        event.preventDefault();
        var dataString  = $( '#form_user' ).serializeArray();
        var route = "datos_user";

        console.log(dataString)
       /* $.ajax({
            url: route,
            type: 'post',
            datatype: 'json',
            data:dataString,
            async : false,

            success:function(data){
                console.log(data.message);
                $.notify({icon: "add_alert", message: data.message},{type: 'success', timer: 1000})
                $('#form_doc')[0].reset()
            },
            error:function(data){
                var error = data.responseJSON.errors;
                for(var i in error){
                    for(var j in error[i]){
                        var message = error[i][j];
                        console.log(message)
                       $.notify({icon: "add_alert", message: message},{type: 'warning', timer: 1000})
                    }
                }
            }
        })*/
    })
})