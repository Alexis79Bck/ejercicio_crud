<?php
    function conexionDB(){
        // Datos de conexión a la base de datos
        $servername = "127.0.0.1"; // Ej: localhost
        $username = "dba_testing";
        $password = "testing123";
        $dbname = "ejercicio_db";

        
        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error); 
        }
        else{
            return($conn);
        }
    }