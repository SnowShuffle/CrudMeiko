$(document).ready(function(){
	$("#Guardar").click(function(){
		var nombres = $("#nombres").val();
		var apellidos = $("#apellidos").val();
		var pais = $("#pais").val();
		var email = $("#email").val();
		var contrasena =$("#contrasena").val();
		var error = "";

		if(!email.length) {
			error .= "Debe digitar un email";
		}

		if(!contrasena){
			error .= "Debe digitar una contrasena";
		}

		if(!nombres){
			error .= "Debe digitar los nombres";
		}

		if(!apellidos){
			error .= "Debe digitar los apellidos";
		}

		if(!pais){
			error .= "Debe seleccionar un pais";
		}
		

		 if(error){
		 	alert(error);
		 }else{
		 	$.ajax({
		 		url:'Controlador/AgregarUsuario.php',
		 		method:'POST',
		 		dataType:"json",
		 		data:{email:email,contrasena:contrasena,nombres:nombres,apellidos:apellidos,pais:pais}
		 	}).done(function(data){
		 		
		 	});
		 }
	});
});