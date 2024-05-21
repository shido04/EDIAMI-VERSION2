<?php
require_once '../../../includes/conexion.php';

// Carpeta donde se guardarán los archivos
$carpetaAlmacen = '../../../almacen/';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cursos_id = $_POST['cursos_id'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $imagen = $_FILES['imagen']['name']; // Nombre original del archivo de imagen
    $video = $_FILES['video']['name']; // Nombre original del archivo de video
    $categoria_id = $_POST['listCategoria'];
    $nivel_id = $_POST['listNivel'];
    $estado = $_POST['listEstado'];

    // Mover los archivos a la carpeta especificada
    $imagenMoverida = $carpetaAlmacen. basename($_FILES['imagen']['name']);
    move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenMoverida);

    $videoMoverido = $carpetaAlmacen. basename($_FILES['video']['name']);
    move_uploaded_file($_FILES['video']['tmp_name'], $videoMoverido);

    // Aquí va tu lógica para insertar los datos en la base de datos

    // Ejemplo de inserción en la base de datos usando PDO
    $sql = "INSERT INTO cursos (nombre, autor, imagen, video, categoria_id, nivel_id, estado) VALUES (:nombre, :autor, :imagen, :video, :categoria_id, :nivel_id, :estado)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':imagen', $imagen); // Usamos el nombre original del archivo
    $stmt->bindParam(':video', $video); // Usamos el nombre original del archivo
    $stmt->bindParam(':categoria_id', $categoria_id);
    $stmt->bindParam(':nivel_id', $nivel_id);
    $stmt->bindParam(':estado', $estado);

    if ($stmt->execute()) {
        echo json_encode(['status' => true, 'msg' => 'Curso agregado correctamente']);
    } else {
        echo json_encode(['status' => false, 'msg' => 'Hubo un error al agregar el curso']);
    }
}
