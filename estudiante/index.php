<?php
require_once 'includes/header.php';
require_once '../includes/conexion.php';

// Corrección aquí: Elimina el punto y coma si no es necesario
$sql ="SELECT cursos_id, nombre, autor, imagen, video, categoria_id, nivel_id, estado, actividad FROM cursos";
$query = $pdo->prepare($sql);
$query->execute();
$row = $query->rowCount();

?>

<script>
// Variable global para almacenar el ID del curso
var cursoId;
function redireccionar() {
    var pagina = 'models/vista.php'; // Asegúrate de que la ruta sea correcta
    if (window.location.href.includes('contenido')) {
        pagina = 'models/contenido.php'; // Asegúrate de que la ruta sea correcta
    }
    // Guarda la posición de desplazamiento actual
    sessionStorage.setItem('scrollPosition', window.pageYOffset || document.documentElement.scrollTop);
    window.location.href = pagina + '?curso=' + cursoId; // Redirige a la página elegida con el parámetro de curso
}



// Función para manejar el evento click del botón Acceder
function manejarClick(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado del link
    cursoId = event.target.getAttribute('data-cursos-id'); // Obtiene el ID del curso del atributo data
    // Almacena el ID del curso en la sesión PHP
    window.sessionStorage.setItem('cursoId', cursoId); // Guarda el ID del curso en sessionStorage
    redireccionar(); // Redirige a la página elegida con el parámetro de curso
}


</script>
<div class="position-relative primary pt-5 pb-5 sm:px-4 lg:pt-8 lg:pb-7 lg:px-6 pt-30">
    <div class="position-absolute w-100 h-50"></div>
    <div class="container-lg mx-auto">
        <div class="row">
            <div class="col-md-12 border shadow p-2 bg-info text-white d-flex align-items-center justify-content-center">
                <h3 class="display-4">EDIAMI</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center border mt-3 p-4 bg-light">
                <h4>Edad Digital: Introducción del Adulto Mayor al Internet</h4>
            </div>
        </div>
        <div class="row">
            <?php if ($row > 0):?>
                <?php while ($data = $query->fetch()):?>
                    
                    <div class="card m-2 shadow" style="width: 23rem;">
                        <img src="../almacen/<?= htmlspecialchars($data['imagen'])?>" class="card-img-top" alt="<?= htmlspecialchars($data['nombre'])?>">
                        <div class="card-body">
                            <h4 class="card-title text-center"><?= htmlspecialchars($data['nombre'])?></h4>
                            <p>Categoría: <?= htmlspecialchars($data['categoria_id'])?></p>
                            <a href="#" onclick="manejarClick(event)" data-cursos-id="<?= htmlspecialchars($data['cursos_id'])?>" class="btn btn-primary">Acceder</a>
                        </div>
                    </div>
                    
                <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>
</div>




  
</div>




<?php require_once 'includes/footer.php';?>
