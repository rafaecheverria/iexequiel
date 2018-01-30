function redirect(ruta)
{
    window.location = ruta;
    //setTimeout("location."+ruta, 5000);
}
$(document).ready(function() {


$("#nacimiento").datepicker({
    format: 'yyyy/mm/dd',
    showAnim: 'fade'
})


 $("#p3-text").hide();
 $("#p4-text").hide();
 $("#p5-text").hide();
 $("#p6-text").hide();
 $("#p7-text").hide();
 $("#p9-text").hide();


 $( "#p3-si" ).click(function(event){
    $('#p3-text').removeAttr('disabled');
    $("#p3-si").attr({'disabled': 'disabled'});
    $("#p3-text").show();
    $("#p3-text").focus();

});
 $( "#p3-no" ).click(function(event){
    $("#p3-text").attr({'disabled': 'disabled'});
    $('#p3-si').removeAttr('disabled');
    $("#p3-text").hide();
});

 $( "#p4-si" ).click(function(event){
    $('#p4-text').removeAttr('disabled');
    $("#p4-si").attr({'disabled': 'disabled'});
    $("#p4-text").show();
    $("#p4-text").focus();

});
 $( "#p4-no" ).click(function(event){
    $("#p4-text").attr({'disabled': 'disabled'});
    $('#p4-si').removeAttr('disabled');
    $("#p4-text").hide();
});

 $( "#p5-si" ).click(function(event){
    $('#p5-text').removeAttr('disabled');
    $("#p5-si").attr({'disabled': 'disabled'});
    $("#p5-text").show();
    $("#p5-text").focus();

});
 $( "#p5-no" ).click(function(event){
    $("#p5-text").attr({'disabled': 'disabled'});
    $('#p5-si').removeAttr('disabled');
    $("#p5-text").hide();
});

  $( "#p6-si" ).click(function(event){
    $('#p6-text').removeAttr('disabled');
    $("#p6-si").attr({'disabled': 'disabled'});
    $("#p6-text").show();
    $("#p6-text").focus();

});
 $( "#p6-no" ).click(function(event){
    $("#p6-text").attr({'disabled': 'disabled'});
    $('#p6-si').removeAttr('disabled');
    $("#p6-text").hide();
});


  $( "#p7-si" ).click(function(event){
    $('#p7-text').removeAttr('disabled');
    $("#p7-si").attr({'disabled': 'disabled'});
    $("#p7-text").show();
    $("#p7-text").focus();

});
 $( "#p7-no" ).click(function(event){
    $("#p7-text").attr({'disabled': 'disabled'});
    $('#p7-si').removeAttr('disabled');
    $("#p7-text").hide();
});

  $( "#p9-si" ).click(function(event){
    $('#p9-text').removeAttr('disabled');
    $("#p9-si").attr({'disabled': 'disabled'});
    $("#p9-text").show();
    $("#p9-text").focus();

});
 $( "#p9-no" ).click(function(event){
    $("#p9-text").attr({'disabled': 'disabled'});
    $('#p9-si').removeAttr('disabled');
    $("#p9-text").hide();
});

	$( "#enviar_datos" ).click(function(event){ 
        event.preventDefault();
        var dataString  = $( '#form-user' ).serializeArray();
        var route = "datos_user";
        console.log(dataString)
        $.ajax({
            url: route,
            type: 'post',
            datatype: 'json',
            data:dataString,
            success:function(data){
                console.log(data);
                $("#user_id").val(data.id_user)
                $("#add_question").modal({

                    show: "true",
                    backdrop: 'static', 
                    keyboard: false

                })
                toastr["info"](data.message)
            },
            error:function(data){
                console.log(data)
                var error = data.responseJSON.errors;
                for(var i in error){
                    for(var j in error[i]){
                        var message = error[i][j];
                        toastr.error(message);
                    }
                }
            }
        })
    })

    $( "#save-question" ).click(function(event){ 
        event.preventDefault();
        var dataString  = $( '#form-question' ).serializeArray();
        var route = "question";
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: route,
            type: 'post',
            datatype: 'json',
            data:dataString,
            success:function(data){
                $("#add_question").modal("hide")
                toastr["success"](data.message)
                $("#form-question")[0].reset()
                $("#form-user")[0].reset()
            },
            error:function(data){
                var error = data.responseJSON.errors;
                for(var i in error){
                    for(var j in error[i]){
                        var message = error[i][j];
                        toastr.error(message);
                    }
                }
            }
        })
    })
})

