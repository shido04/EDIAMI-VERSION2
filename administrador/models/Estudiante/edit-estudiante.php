<?php

require '../../../includes/conexion.php';

if(!empty($_GET)) {
    $idEstudiante = $_GET['idEstudiante'];

    $sql = "SELECT * FROM estudiante WHERE Estudiante_id = ?";
    $query = $pdo->prepare($sql);
    $query->execute(array($idEstudiante));
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if(empty($result)) {
        $respuesta = array('status' => false,'msg' => 'datos no encontrados');
    } else {
        $respuesta = array('status' => true,'data' => $result);
    }
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
}