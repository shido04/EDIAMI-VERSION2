<?php
include_once "encabezado.php";
?>
<nav class="navbar navbar-expand-lg navbar-dark navbar-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Elementos de navegación alineados a la izquierda -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
				<li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Cursos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Office</a>
                        <a class="dropdown-item" href="#">Navegacion</a>
                        <a class="dropdown-item" href="#">Etc</a>
                    </div>
					
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Somos.php">Quienes somos</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="precios.php">Precios</a>
                </li>
                
            </ul>
            <!-- Elemento de navegación "Log In" alineado a la derecha -->
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="login.php">Iniciar</a>
                </li>
            </ul>
        </div>
    </div>
	
	
</nav>
<div class="position-relative primary pt-5 pb-5 sm:px-4 lg:pt-8 lg:pb-7 lg:px-6">
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

<script>
    document.getElementById('cardCurso').addEventListener('click', function(event) {
        event.preventDefault(); // Evita la acción predeterminada del enlace
        window.location.href = 'curso.php'; // Redirige al usuario a cursos.php
    });
</script>

    <!-- Fin del bucle de cursos -->
</div>

