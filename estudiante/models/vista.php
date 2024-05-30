<?php

require_once '../includes/headr.php';
require_once '../../includes/conexion.php';

$cursoId = $_SESSION['cursoId']?? ''; 



if (isset($_GET['curso'])) {
    $cursoId = $_GET['curso'];

    
} else {
    echo "No se proporcionó un ID de curso.";
}

?>

<main class="app-content">

<div class="position-relative primary pt-5 pb-5 sm:px-4 lg:pt-8 lg:pb-7 lg:px-6 pt-30">
    <div class="position-absolute w-100 h-50"></div>
    <div class="container-lg mx-auto">
        

        <div class="row">
            <div class="col-md-12 text-center border mt-3 p-4 bg-light">
                <h4>Descripcion del cursos</h4>
            </div>
        </div>
        <?php

        
        $cursoId = $_GET['curso']?? '';

        if (!empty($cursoId)) {
            
            $sql = "SELECT actividad FROM cursos WHERE cursos_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $cursoId, PDO::PARAM_INT);
            $stmt->execute();
            
            
            $actividad = $stmt->fetchColumn();
            
            
            echo "<div class='container'>";
            echo "<h2> </h2>";
            echo "<p>$actividad</p>"; 
            echo "</div>";
        } else {
            echo "No se proporcionó un ID de curso.";
        }
        ?>

        
    
        
        
    </div>
</div>

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
               echo '<source src="../../almacen/'. htmlspecialchars($result['video']). '" type="video/mp4">';
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
require_once '../includes/footer.php';
?>
