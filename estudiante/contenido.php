<?php
require_once 'includes/headr.php';
require_once '../includes/conexion.php';


?>

<div class="position-relative primary pt-5 pb-5 sm:px-4 lg:pt-8 lg:pb-7 lg:px-6 pt-30">
    <div class="position-absolute w-100 h-50"></div>
    <div class="container-lg mx-auto">
        

        <div class="row">
            <div class="col-md-12 text-center border mt-3 p-4 bg-light">
                <h4>Descripcion del cursos</h4>
            </div>
        </div>
        <?php

        // Recibir el ID del curso desde la URL
        $cursoId = $_GET['curso']?? '';

        if (!empty($cursoId)) {
            // Preparar y ejecutar la consulta para obtener la actividad del curso
            $sql = "SELECT actividad FROM cursos WHERE cursos_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $cursoId, PDO::PARAM_INT);
            $stmt->execute();
            
            // Obtener la actividad
            $actividad = $stmt->fetchColumn();
            
            // Mostrar la actividad
            echo "<div class='container'>";
            echo "<h2>Actividad del Curso</h2>";
            echo "<p>$actividad</p>"; // Asegúrate de escapar o limpiar la salida si es necesario
            echo "</div>";
        } else {
            echo "No se proporcionó un ID de curso.";
        }
        ?>

        
    
        
        
    </div>
</div>




    
</div>


<?php
require_once 'includes/footer.php';
?>
