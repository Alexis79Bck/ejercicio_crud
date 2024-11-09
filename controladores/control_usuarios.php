<?php
include ('../modelos/usuarios.php');

function mostrarTabla()
{
    $result = listado();
        $tabla_resultados = '<table class="table table-hover">'.
                '    <thead>'.
                '        <tr>'.
                '        <th scope="col">ID</th>'.
                '        <th scope="col">Nombre Usuario</th>'.
                '        <th scope="col">Permiso</th>'.
                '        <th scope="col">Acciones</th>'.
                '        </tr>'.
                '    </thead>';
        $tabla_resultados = $tabla_resultados . ' <tbody>';
        while($rw = $result->fetch_assoc()){
            $tabla_resultados = $tabla_resultados . ' <tr>';
            $tabla_resultados = $tabla_resultados . '  <th scope="row">' . $rw['id'] . '</th>';
            $tabla_resultados = $tabla_resultados . '  <td>' . $rw['nombre_usuario'] . '</td>';
            $tabla_resultados = $tabla_resultados . '  <td>' . $rw['permiso'] . '</td>';
            $tabla_resultados = $tabla_resultados . '  <td> </td>';
            $tabla_resultados = $tabla_resultados . '  </tr>';
        }
        $tabla_resultados = $tabla_resultados . '</tbody>';
        $tabla_resultados = $tabla_resultados . ' </table>';
        return($tabla_resultados);
}
