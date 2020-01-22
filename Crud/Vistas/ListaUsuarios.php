<html>
<head>
	<title>NuevoUsuario</title>
	<script  src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src = "https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src = "https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src='../js/ListaUsuarios.js'></script>
</head>
<body>
    <h1>Lista de Usuarios</h1><br>
    <div class= 'row'>
        <div class = 'col-2'></div>
        <div class='col-8 '>
            <table id = "lista" class="table table-striped" style="width:100%">
                <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Pais</th>
                        </tr>
                </thead>
            </table>
        <div>
        <div class = 'col-2'></div>
    </div>
</body>
</html>