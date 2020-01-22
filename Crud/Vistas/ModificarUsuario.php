<html>
<head>
	<title>NuevoUsuario</title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src='../js/ModificarUsuario.js'></script>
</head>
<body>
<h1>Actualizar Usuario</h1>
<lable>Id Registro</lable>
<input type='number' id= 'id'><button id="buscar">Buscar</button><br><br>
<lable>Nombres</lable>
<input type='text' id= 'nombres' disabled><br><br>
<lable>Apellidos</lable>
<input type='text' id= 'apellidos' disabled><br><br>
<lable>Email</lable>
<input type='email' id= 'email' disabled><br><br>
<lable>Paises</lable>
<select id=pais disabled>
</select><br><br>
<lable>Contrasena</lable>
<input type='password' id = 'contrasena' disabled><br><br>
<button id= 'actualizar'>Actualizar</button>
<button id= 'borrar'>Borrar</button>
</body>
</html>