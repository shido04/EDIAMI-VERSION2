<?php
require '../../../includes/conexion.php';

if(isset($_GET['idCurso'])) {
    $curso_id = $_GET['idCurso'];
    $sql = "SELECT * FROM cursos WHERE cursos_id =?";
    $query = $pdo->prepare($sql);
    $query->execute([$curso_id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if(empty($result)) {
        $respuesta = array('status' => false,'msg' => 'Datos no encontrados');
    } else {
        $respuesta = array('status' => true,'data' => $result);
    }
    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
}


?>
