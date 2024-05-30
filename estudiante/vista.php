<?php
require_once 'includes/headr.php';
require_once '../includes/conexion.php';

// Verifica si el parámetro 'curso' está presente en la URL
if (isset($_GET['curso'])) {
    $cursoId = $_GET['curso'];

    // Utiliza $cursoId para buscar y mostrar detalles específicos relacionados con el curso
    // Similar al ejemplo anterior, pero adaptado a lo que necesites mostrar en vista.php
} else {
    echo "No se proporcionó un ID de curso.";
}
?>

<main class="app-content">
<div id="video_container"> 
<?php
       $cursos_id = isset($_GET['curso'])? intval($_GET['curso']) : null;

       if ($cursos_id!== null) {
           // Preparar y ejecutar la consulta para obtener el video por ID del curso
           $sql = "SELECT video FROM cursos WHERE cursos_id = :cursos_id";
           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(':cursos_id', $cursos_id, PDO::PARAM_INT);
           $stmt->execute();
           
           // Obtener el resultado
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           
           // Verificar si hay un video asociado
           if (!empty($result['video'])) {
               // Mostrar el video con nuevo tamaño
               echo '<video width="640" height="480" controls>';
               echo '<source src="../almacen/'. htmlspecialchars($result['video']). '" type="video/mp4">';
               echo 'Tu navegador no soporta el elemento de video.';
               echo '</video>';
           } else {
               echo 'No se encontró video para este curso.';
           }
       } else {
           echo 'ID de curso no proporcionado.';
       }
?>

		 
	
			 
			
	</div>
 </main>


<?php
require_once 'includes/footer.php';
?>
