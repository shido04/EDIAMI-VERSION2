<?php
require_once '../../../includes/conexion.php';

if($_POST) {
    $idCurso = $_POST['idCurso'];

    $sql = "DELETE FROM cursos WHERE cursos_id =?";
    $query = $pdo->prepare($sql);
    $result = $query->execute([$idCurso]);
    
    if($result) {
        $respuesta = array('status' => true,'msg' => 'Curso eliminado correctamente');
    } else {
        $respuesta = array('status' => false,'msg' => 'Error al eliminar');
    }
    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
}
?>
