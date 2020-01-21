$(document).ready(function(){
	$("#Ingresar").click(function(){
		var email = $("#email").val();
		var contrasena =$("#contrasena").val();
		var error = "";
		 if(!email.length) {
		 	error = "Debe digitar un email";
		 }else{

			 if(!contrasena){
			 	error = "Debe digitar una contrasena";
			 }
		}

		 if(error){
		 	alert(error);
		 }else{
		 	$.ajax({
		 		url:'Controlador/Login.php',
		 		method:'POST',
		 		dataType:"json",
		 		data:{email:email,contrasena:contrasena}
		 	}).done(function(data){
		 		console.log(data);
		 	});
		 }
	});
});