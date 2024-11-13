<?php

include '../controladores/conexion.php';

function listado()
{
    $conn = conexionDB();
    $sql = "SELECT * FROM permiso";

    $resultados = $conn->prepare($sql);
    $resultados->execute();
    $datosObtenidos = $resultados->get_result();  
    $resultados->free_result();
    $conn->close();
    return $datosObtenidos;
}
