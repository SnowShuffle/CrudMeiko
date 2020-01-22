$(document).ready(function () {    
    
    $.getJSON( "../js/paises.json", function( data ) {
		var listaPaises = "<option value = ''>Eliga una opcion</option>";
		$.each( data, function( key, val ) {
		  listaPaises += "<option value='" + key + "'>" + val + "</option>";
		  
		});

		$("#pais").html(listaPaises);
      });
      
    $("#buscar").click(function(){
        var id = $("#id").val()

        $.ajax({
            url: '../Controlador/BuscarUsuario.php',
            data: {"id":id},
            dataType:"json",
            method:'POST'
        }).done(function(data){
            if(data[0]== 'OK'){
                $("#nombres").val(data[1]['nombres']);
                $("#apellidos").val(data[1]['apellidos']);
                $("#pais").val(data[1]['pais']);
                $("#email").val(data[1]['email']);
                $("#contrasena").val(data[1]['contrasena']);
                $(":input").removeAttr("disabled");
            }else{
                alert(data[1])
            }
        })
    });

    $("#actualizar").click(function(){
        var id = $("#id").val()
        var nombres = $("#nombres").val()
        var apellidos = $("#apellidos").val()
        var pais = $("#pais").val()
        var email =  $("#email").val()
        var contrasena = $("#contrasena").val()

        $.ajax({
            url: '../Controlador/ModificarUsuario.php',
            data: {"id":id,"apellidos": apellidos,"nombres": nombres,"pais": pais,"email": email,"contrasena": contrasena},
            dataType:"json",
            method:'POST'
        }).done(function(data){

            if(data[0]=="OK"){
                $(":input").val("");
                $(":input").attr("diabled","disabled");
            }

            alert(data[1]);
        })
    });

    $("#borrar").click(function(){
        var id = $("#id").val()
        var respuesta = confirm("Realmente quiere eliminar el usuario con id "+id+"?");
        if(respuesta == true){
            $.ajax({
                url: '../Controlador/BorrarUsuario.php',
                data: {"id":id},
                dataType:"json",
                method:'POST'
            }).done(function(data){
    
                if(data[0]=="OK"){
                    $(":input").val("");
                }
    
                alert(data[1]);
            })
        }
    });
});