<?php
require_once 'includes/header.php';
require_once '../includes/conexion.php';


$idEstudiante = $_SESSION['Estudiante_id'];



?>


<<div class="position-relative primary pt-5 pb-5 sm:px-4 lg:pt-8 lg:pb-7 lg:px-6 pt-20"> <!-- Añade pt-20 aquí -->
    <div class="position-absolute w-100 h-50"></div>
    <div class="container-lg mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-weight-bold text-dark">
                EDIAMI
            </h2>
            <p class="mt-3 text-lg text-muted">
                Edad Digital: Introducción del Adulto Mayor al Internet
            </p>
        </div>

        <div class="mt-12 row gap-3">
            <!-- Aquí iría el bucle de cursos -->
            <div class="col-lg-4">
                <div class="card shadow-lg" id="cardCurso">
                    <img src="img/word.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">
                            <a href="curso.php" class="text-primary" id="enlaceCurso">
                                Categoria
                            </a>
                        </p>
                        <a href="curso.php" class="card-title" id="enlaceCursoTitulo">
                            
                        </a>
                        <p class="card-text">
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('cardCurso').addEventListener('click', function(event) {
        event.preventDefault(); // Evita la acción predeterminada del enlace
        window.location.href = 'curso.php'; // Redirige al usuario a cursos.php
    });
</script>

    <!-- Fin del bucle de cursos -->
</div>




<?php
require_once 'includes/footer.php'
?>