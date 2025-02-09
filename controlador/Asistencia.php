<?php
require_once '../admin/config/global.php';
date_default_timezone_set(ZONA_HORARIA);
require_once '../modelos/Asistencia.php';

$asistencia = new Asistencia();

$fecha = date("Y-m-d");
$hora = date("H:i:s");

switch ($_GET["op"]) {
    
    case 'registrar':
        $codigo_persona = $_REQUEST['codigo'];
        
        $persona = $asistencia->verificarcodigo_persona($codigo_persona);
        if ($persona > 0) {
            $asistencia_actual = $asistencia->buscar_asistencia($codigo_persona, $fecha);
            
            if (!empty($asistencia_actual)) {
                $tipo = $asistencia_actual['tipo'] == 'Entrada' ? 'Salida' : 'Entrada';
                $rspsta = $asistencia->registrar_asistencia($persona['id'], $hora, $fecha, $tipo);
                echo $rspsta ? $tipo. 'registrado' : 'No se pudo registrar su' .$tipo;
            } else {
                $tipo = "Entrada";
                $respuesta = $asistencia->registrar_asistencia($persona['id'], $hora, $fecha, $tipo);
                echo $rspsta ? ' Ingreso registrado' : 'No se pudo registrar su ingreso';
            }
        } else {
            echo "No hay empleado registrado con este código";
        }
        break;
}