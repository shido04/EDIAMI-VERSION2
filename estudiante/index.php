<?php
require_once 'includes/header.php';
require_once '../includes/conexion.php';

$sql ="SELECT cursos_id, nombre, autor, imagen, video, categoria_id, nivel_id, estado
FROM cursos;
";
$query = $pdo->prepare($sql);
$query->execute();
$row = $query->rowCount();

?>


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
                    <div class="col-md-4 text-center border mt-3 p-4 bg-light">
                        <div class="card m-2 shadow" style="width: 23rem;">
                            <img src="../almacen/<?= htmlspecialchars($data['imagen'])?>" class="card-img-top" alt="<?= htmlspecialchars($data['nombre'])?>">
                            <div class="card-body">
                                <h4 class="card-title text-center"><?= htmlspecialchars($data['nombre'])?></h4>
                                <p>Categoría: <?= htmlspecialchars($data['categoria_id'])?></p>
                                <a href="contenido.php?curso=<?= htmlspecialchars($data['cursos_id'])?>" class="btn btn-primary">Acceder</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
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