<?php
require_once '../../../includes/conexion.php';

$carpetaAlmacen = '../../../almacen/';

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cursos_id = $_POST['cursos_id'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $imagen = $_FILES['imagen']['name'];
    $video = $_FILES['video']['name'];
    $categoria_id = $_POST['listCategoria'];
    $nivel_id = $_POST['listNivel'];
    $estado = $_POST['listEstado'];
    $actividad = $_POST['actividad'];

    // Verifica si se está editando un curso existente
    if ($cursos_id) {
        // Prepara la consulta de actualización
        $sql = "UPDATE cursos SET nombre =?, autor =?, imagen =?, video =?, categoria_id =?, nivel_id =?, estado =?, actividad =? WHERE cursos_id =?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $autor);
        $stmt->bindParam(3, $imagen);
        $stmt->bindParam(4, $video);
        $stmt->bindParam(5, $categoria_id);
        $stmt->bindParam(6, $nivel_id);
        $stmt->bindParam(7, $estado);
        $stmt->bindParam(8, $actividad);
        $stmt->bindParam(9, $cursos_id);

        if ($stmt->execute()) {
            echo json_encode(['status' => true,'msg' => 'Curso actualizado correctamente']);
        } else {
            echo json_encode(['status' => false,'msg' => 'Hubo un error al actualizar el curso']);
        }
    } else {
        // Proceso para insertar un nuevo curso
        $imagenMoverida = $carpetaAlmacen. basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenMoverida);

        $videoMoverido = $carpetaAlmacen. basename($_FILES['video']['name']);
        move_uploaded_file($_FILES['video']['tmp_name'], $videoMoverido);

        $sql = "INSERT INTO cursos (nombre, autor, imagen, video, categoria_id, nivel_id, estado, actividad) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $autor);
        $stmt->bindParam(3, $imagen);
        $stmt->bindParam(4, $video);
        $stmt->bindParam(5, $categoria_id);
        $stmt->bindParam(6, $nivel_id);
        $stmt->bindParam(7, $estado);
        $stmt->bindParam(8, $actividad);

        if ($stmt->execute()) {
            echo json_encode(['status' => true,'msg' => 'Curso agregado correctamente']);
        } else {
            echo json_encode(['status' => false,'msg' => 'Hubo un error al agregar el curso']);
        }
    }
}
