<?php
//Implementamos nuestro modelo de datos
require "../admin/config/conexion.php";
class Asistencia
{
    //Implementamos nuestro constructor
    public function __construct()
    {
    }

    public function verificarcodigo_persona($codigo_persona)
    {
        $sql = "SELECT * FROM proveedores WHERE codigo='$codigo_persona'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function buscar_asistencia($codigo_persona, $fecha)
    {
        $sql = "SELECT a.*,e_codigo FROM asistencia a INNER JOIN proveedores e ON a.empleado_id=e.id
                WHERE e.codigo= '$codigo_persona'
                AND a.fecha= '$fecha'
                ORDER by a.id DESC
                LIMIT 1";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function registrar_asistencia($empleado_id, $hora, $fecha, $tipo)
    {
        $sql = "INSERT INTO asistencia (empleado_id, hora, fecha, tipo) VALUES ('$empleado_id', '$hora', '$fecha', '$tipo')";
        return ejecutarConsulta($sql);
    }
}
?>
