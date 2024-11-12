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
                        <a class="nav-link" aria-current="page" href="../../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../permisos/listado.php">Permisos</a>
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
                <div class="text-center my-4">
                    <span class="h2">Usuarios</span>
                </div>
                <br />
                <div class="table-responsive">
                    <div class="text-end mb-2">
                        <p data-placement="middle" data-toggle="tooltip" title="Nuevo">
                            <a href="crear.php" role="button" class="btn btn-primary btn-sm">
                                <span class="text-white py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Nuevo
                                </span>
                            </a>
                        </p>
                    </div>
                    <table id="listaUsuarios" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-secondary fw-bold text-center">
                                <th class="px-2">ID</th>
                                <th class="px-2">Nombre de Usuario</th>
                                <th class="px-2">Estatus</th>
                                <th class="px-2">Fecha de Creación</th>
                                <th class="px-2">Última Actualización</th>
                                <th class="px-2">Permiso</th>
                                <th class="px-2" colspan="3">Acciones</th>

                            </tr>
                        </thead>
                        <tbody id="tabla_resultados">
                            <!-- <tr class="font-monospace text-black">
                                <td class="px-2 fw-bold text-center">1</td>
                                <td class="px-2">John.Due123</td>
                                <td class="px-2 text-center">
                                    <h5><span class="badge text-bg-success">Activo</span></h5>
                                </td>
                                <td class="px-2">Permiso</td>
                                <td class="px-2">01-04-2024</td>
                                <td class="px-2">11-06-2024</td>
                                <td>
                                    <p data-placement="middle" data-toggle="tooltip" title="Detalles">
                                        <a href="#" role="button" class="btn btn-secondary btn-xs">
                                            <span class="text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </span>
                                        </a>
                                    </p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Editar">
                                        <a href="#" role="button" class="btn btn-primary btn-xs">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Eliminar">
                                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </span>
                                        </button>
                                    </p>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>

                </div>
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
            var mensaje_procesando = `<tr class="font-monospace text-black">
                                        <td colspan="9" class="px-2 fw-bold text-center">
                                        Procesando...
                                        </td>`;

            $("#tabla_resultados").html(mensaje_procesando); // Mostrar un mensaje de carga
            console.log(operacion);
            console.log(mensaje_procesando);
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