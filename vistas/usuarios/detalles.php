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
        <div class="container-fluid ">
            <!-- Page Features-->
            <div class="row">
                <div class="col col-md-10 col-lg-6 mx-auto  h-100">
                    <div class=" align-middle w-100">
                        <div class="text-center mt-4">
                            <h1 class="h2">Nuevo Usuario</h1>
                        </div>
                        <!-- <div class="card">
                            <div class="card-body"> -->
                        <!-- <div class="m-sm-4"> -->
                        <form class="container-fluid ">
                            <div class="mb-3 p-2 border border-primary rounded-2" style="background-color:#f0f8ff; border-radius: 25px">
                                <p class="display-6 mb-3 fs-2 text-decoration-underline text-primary text-center">Información Personal</p>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Cédula</label>
                                        <input class="form-control form-control-sm font-monospace" type="text" name="cedula">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Nombres</label>
                                        <input class="form-control form-control-sm font-monospace" type="text" name="nombres">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Apellidos</label>
                                        <input class="form-control form-control-sm font-monospace" type="text" name="apellidos">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Fecha de Nacimiento</label>
                                        <input class="form-control form-control-sm font-monospace" type="date" name="fecha_nacimiento">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Nacionalidad</label>
                                        <select class="form-control form-control-sm font-monospace" name="nacionalidad" id="nacionalidad">
                                            <option value="Venezolano">Venezolano</option>
                                            <option value="Extranjero">Extranjero</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Sexo</label>
                                        <select class="form-control form-control-sm font-monospace" name="sexo" id="sexo">
                                            <option value="M">Mujer</option>
                                            <option value="H">Hombre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Email</label>
                                        <input class="form-control form-control-sm font-monospace" type="email" name="email">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Teléfono</label>
                                        <input class="form-control form-control-sm font-monospace" type="text" name="telefono">
                                    </div>
                                </div>



                            </div>
                            <div class="mb-3 p-2 border border-primary rounded-2" style="background-color:#f0f8ff; border-radius: 25px">
                                <p class="display-6 mb-3 fs-2 text-decoration-underline text-primary text-center">Información de Acceso</p>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Nombre de Usuario</label>
                                        <input class="form-control form-control-sm font-monospace" type="text" name="nombre_usuario">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Password</label>
                                        <input class="form-control form-control-sm font-monospace" type="password" name="password">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Estatus</label>
                                        <select class="form-control form-control-sm font-monospace" name="estatus" id="estatus">
                                            <option selected value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>
                                            <option value="Suspendido">Suspendido</option>
                                            <option value="Bloqueado">Bloqueado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label class="form-label fw-bold">Permiso</label>
                                        <select class="form-control form-control-sm font-monospace" name="permiso" id="permiso">
                                            <option value="1">Todo</option>
                                            <option value="2">Consultar</option>
                                            <option value="3">Editar</option>
                                            <option value="4">Eliminar</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-block btn-primary" value="guardar">Guardar</button>
                            </div>


                        </form>
                        <!-- </div> -->
                        <!-- </div>
                        </div> -->

                    </div>
                </div>

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
                    // alert(response);
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