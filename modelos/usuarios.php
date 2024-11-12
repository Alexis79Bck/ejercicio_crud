<?php

include '../controladores/conexion.php';

function listado()
{
    $conn = conexionDB();
    $sql = "SELECT * FROM usuario";

    $resultados = $conn->prepare($sql);
    $resultados->execute();
    $datosObtenidos = $resultados->get_result();  
    $resultados->free_result();
    $conn->close();
    return $datosObtenidos;
}

function nuevo()
{
    $cedula = $_REQUEST['cedula'] ??  "";
    $nombres = $_REQUEST['nombres'] ??  "";
    $apellidos = $_REQUEST['apellidos'] ??  "";
    $fecha_nacimiento = $_REQUEST['fecha_nacimiento'] ??  "";
    $sexo = $_REQUEST['sexo'] ??  "";
    $nacionalidad = $_REQUEST['nacionalidad'] ??  "";
    $telefono = $_REQUEST['telefono'] ??  "";
    $nombre_usuario = $_REQUEST['nombre_usuario'] ??  "";
    $password = $_REQUEST['password'] ?? "";
    $permiso_id = $_REQUEST['permiso_id'] ?? "";
    $usuario_cedula = $_REQUEST['usuario_cedula'] ?? "";
    $conn = conexionDB();
    $sqlInfoUsuario = "INSERT INTO info_usuarios('cedula', 'nombres', 'apellidos', 'fecha_nacimiento', 'nacionalidad', 'sexo', 'telefono') VALUES ($cedula, $nombres, $apellidos, $fecha_nacimiento, $nacionalidad, $sexo, $telefono)";
    $sqlUsuario = "INSERT INTO usuarios('nombre_usuario', 'password', 'permiso_id', 'usuario_cedula') VALUES ($nombre_usuario, $password, $permiso_id, $usuario_cedula)";
    
    try {
        $conn->query($sqlInfoUsuario);
        $conn->query($sqlUsuario);
        $resp = "Registro añadido exitosamente.";
    } catch (mysqli_sql_exception $e) {
        $resp = "Error en la base de datos: " . $e->getMessage();
    } catch (Exception $e) {
        $resp = "Error inesperado: " . $e->getMessage();
    }
    $conn->close();
    return $resp;
}

function mostrarDetalle($id)
{
    $conn = conexionDB();
    $sqlUsuario = "SELECT 'id', 'nombre_usuario', 'permiso_id', 'usuario_cedula' FROM 'usuarios' WHERE id = $id" ;
    
    try {
        $resultado = $conn->query($sqlUsuario);
        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
            $sqlInfoUsuario = "SELECT 'cedula', 'nombres', 'apellidos', 'fecha_nacimiento', 'nacionalidad', 'sexo', 'telefono' FROM 'info_usuarios' WHERE cedula = " . $usuario['cedula_usuario']; 
            $sqlPermiso = "SELECT 'id', 'nombre' FROM 'permisos' WHERE id = " . $usuario['permiso_id'];     
            $resultadoInfo = $conn->query($sqlInfoUsuario);
            $resultadoPermiso = $conn->query($sqlPermiso);
            $infoUsuario = $resultadoInfo->fetch_assoc();
            $permiso = $resultadoPermiso->fetch_assoc();
            $resp = [
                'nombres' => $infoUsuario['nombres'],
                'apellidos' => $infoUsuario['apellidos'],
                'fecha_nacimiento' => $infoUsuario['fecha_nacimiento'],
                'nacionalidad' => $infoUsuario['nacionalidad'],
                'sexo' => $infoUsuario['sexo'],
                'telefono' => $infoUsuario['telefono'],
                'nombre_usuario' => $usuario['nombre_usuario'],
                'permiso' => $permiso['permiso'],
            ];
        }else{
            $resp = "No se encontró ningun registro";
        }
    } catch (mysqli_sql_exception $e) {
        $resp = "Error en la base de datos: " . $e->getMessage();
    } catch (Exception $e) {
        $resp = "Error inesperado: " . $e->getMessage();
    }
    $conn->close();
    return $resp;
}

function actualizar($id)
{
    $nombre_usuario = $_REQUEST['nombre_usuario'];
    $permiso_id = $_REQUEST['permiso_id'];
    $usuario_cedula = $_REQUEST['usuario_cedula'];
    $conn = conexionDB();
    $sql = "INSERT INTO usuarios('nombre_usuario',  'permiso_id', 'usuario_cedula') VALUES ($nombre_usuario, $permiso_id, $usuario_cedula)";
    
    try {
        $conn->query($sql);
        $resp = "Registro añadido exitosamente.";
    } catch (mysqli_sql_exception $e) {
        $resp = "Error en la base de datos: " . $e->getMessage();
    } catch (Exception $e) {
        $resp = "Error inesperado: " . $e->getMessage();
    }
    $conn->close();
    return $resp;
}

function eliminar($id)
{
    $nombre_usuario = $_REQUEST['nombre_usuario'];
    $password = $_REQUEST['password'];
    $permiso_id = $_REQUEST['permiso_id'];
    $usuario_cedula = $_REQUEST['usuario_cedula'];
    $conn = conexionDB();
    $sql = "INSERT INTO usuarios('nombre_usuario', 'password', 'permiso_id', 'usuario_cedula') VALUES ($nombre_usuario, $password, $permiso_id, $usuario_cedula)";
    
    try {
        $conn->query($sql);
        $resp = "Registro añadido exitosamente.";
    } catch (mysqli_sql_exception $e) {
        $resp = "Error en la base de datos: " . $e->getMessage();
    } catch (Exception $e) {
        $resp = "Error inesperado: " . $e->getMessage();
    }
    $conn->close();
    return $resp;
}


