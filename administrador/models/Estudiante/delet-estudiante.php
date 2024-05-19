<?php

require_once '../../../includes/conexion.php';

if($_POST) {
    $idEstudiante = $_POST['idEstudiante'];

    $sql = "UPDATE estudiante SET estado = 0 WHERE Estudiante_id = ?";
    $query = $pdo->prepare($sql);
    $result = $query->execute(array($idEstudiante));
    
    if($result) {
        $respuesta = array('status' => true,'msg' => 'Usuario eliminado correctamente');
    } else {
        $respuesta = array('status' => false,'msg' => 'Error al eliminar');
    }
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
}