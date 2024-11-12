<?php
include('../modelos/usuarios.php');

function obtenerOperacion($operacion)
{
    switch ($operacion) {
        case 'Listado':
            return generarTabla(listado());
    }
}
function generarTabla($datos)
{
   
    
    $tabla_resultados = '';

    while ($fila = $datos->fetch_assoc()) {
        $tabla_resultados .= '<tr class="font-monospace text-black">';
        $tabla_resultados .= '<td class="px-2 fw-bold text-center">' . $fila['id'] . '</td>';
        $tabla_resultados .= '<td class="px-2">' . $fila['nombre_usuario'] . '</td>';
        $tabla_resultados .= generarEtiquetaEstatus($fila['status']);
        $tabla_resultados .= '<td class="px-2">' . $fila['fecha_creacion'] . '</td>';
        $tabla_resultados .= '<td class="px-2">' . $fila['fecha_actualizacion'] . '</td>';
        $tabla_resultados .= '<td class="px-2">' . $fila['permiso_id'] . '</td>';
        $tabla_resultados .= '<td>
                                <p title="Detalles">
                                    <a href="detalles.php?id=' . $fila['id'] . '" role="button" class="btn btn-secondary btn-xs">
                                        <span class="text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </span>
                                    </a>
                                </p>
                            </td>';
        $tabla_resultados .= '<td>
                                <p title="Editar">
                                    <a href="editar.php?id=' . $fila['id'] . '" role="button" class="btn btn-primary btn-xs">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </p>
                            </td>';
        $tabla_resultados .= '<td>
                                <p title="Eliminar">
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
                            </td>';
        $tabla_resultados .= '</tr>';
    }
    
    var_dump($tabla_resultados);

    return $tabla_resultados;
}

function generarEtiquetaEstatus($nombre_estatus) 
{
    
    switch ($nombre_estatus) {
        case 'Activo':
            return '<td class="px-2 text-center">
                        <h5>
                            <span class="badge text-bg-success">' . $nombre_estatus . '</span>
                        </h5>
                    </td>';
        case 'Inactivo':
            return '<td class="px-2 text-center">
                        <h5>
                            <span class="badge text-bg-danger"> ' . $nombre_estatus . '</span>
                        </h5>
                    </td>';
        case 'Suspendido':
            return '<td class="px-2 text-center">
                        <h5>
                            <span class="badge text-bg-warning"> ' . $nombre_estatus . '</span>
                        </h5>
                    </td>';
        case 'Bloqueado':
            return '<td class="px-2 text-center">
                        <h5>
                            <span class="badge text-bg-secondary"> ' . $nombre_estatus . '</span>
                        </h5>
                    </td>';
    }
}

obtenerOperacion($_REQUEST['operacion']);
