<?php 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio CRUD</title>

    <!-- Layout CSS + Bootstrap-->
    <link href="../../css/styles.css" rel="stylesheet" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#!">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#!">Permisos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <h2>Listado de Usuarios</h2>
                <br />
                <div id="tabla_resultados"></div>
            </div>
        </div>
    </section>
   
     <!-- Archivo Script de Bootstrap -->
     <script src="../../js/bootstrap.bundle.min.js"></script>
     <script src="../../js/jquery_3_6_0.js"></script>
    <script> 
    // $(document).ready(function() {
    // $("#body").load(function() {
      document.addEventListener('DOMContentLoaded', function() {
        event.preventDefault();
        var operacion = "Listado";

        $("#tabla_resultados").html("Procesando..."); // Mostrar un mensaje de carga

        $.ajax({
            url: "../../controladores/control_usuarios.php",
            method: "POST",
            data: { 
                operacion: operacion
             },
            success: function(response) {
                alert(response);
                $("#tabla_resultados").html(response);
            },
            error: function() {
                $("#tabla_resultados").html("Error al procesar la solicitud");
            }
        });
    });
// });

//     $(document).ready(function() {
//     $("#enviar").click(function() {
//         event.preventDefault();
//         var filtro = $("#nombre").val();
//         var operacion = "GENERAL";

//         $("#tabla_resultado").html("Procesando..."); // Mostrar un mensaje de carga

//         $.ajax({
//             url: "../Controlador/control_servicios.php",
//             method: "POST",
//             data: { filtro: filtro,
//                     operacion:operacion
//              },
//             success: function(response) {
//                 // alert(response);
//                 $("#tabla_resultados").html(response);
//             },
//             error: function() {
//                 $("#tabla_resultados").html("Error al procesar la solicitud");
//             }
//         });
//     });
// });

</script>
   
</body>

</html>

