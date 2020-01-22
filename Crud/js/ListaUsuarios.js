$(document).ready(function () {    
    
    $('#lista').dataTable( {
        "serverSide": true,
        "ajax":{
            url:"../Controlador/ListaUsuarios.php",
            type:"POST"
        },
        columns: [
            {"data" : "id"},
            {"data" : "nombres"},
            {"data" : "apellidos"}, 
            {"data" : "email"},
            {"data" : "pais"}     
        ]
    });
});