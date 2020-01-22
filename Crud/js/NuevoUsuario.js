$(document).ready(function(){

	$.getJSON( "../js/paises.json", function( data ) {
		var listaPaises = "<option value = ''>Eliga una opcion</option>";
		$.each( data, function( key, val ) {
		  listaPaises += "<option value='" + key + "'>" + val + "</option>";
		  
		});

		$("#pais").html(listaPaises);
	  });

	$("#Guardar").click(function(){
		
		var nombres = $("#nombres").val();
		var apellidos = $("#apellidos").val();
		var pais = $("#pais").val();
		var email = $("#email").val();
		var contrasena =$("#contrasena").val();
		var error = "";

		if(!email.length) {
			error += "Debe digitar un email \n";
		}

		if(!contrasena){
			error += "Debe digitar una contrasena\n";
		}

		if(!nombres){
			error += "Debe digitar los nombres \n";
		}

		if(!apellidos){
			error += "Debe digitar los apellidos \n";
		}

		if(!pais){
			error += "Debe seleccionar un pais \n";
		}
		

		 if(error){
		 	alert(error);
		 }else{
		 	$.ajax({
		 		url:'../Controlador/AgregarUsuario.php',
		 		method:'POST',
		 		dataType:"json",
		 		data:{email:email,contrasena:contrasena,nombres:nombres,apellidos:apellidos,pais:pais}
		 	}).done(function(data){
				if(data[0] == "OK" )
				{
					$(":input").val("");
				}

				alert(data[1]);
				
		 	});
		 }
	});
});