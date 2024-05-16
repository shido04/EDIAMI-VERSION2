<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 <!-- Asegúrate de cargar la versión completa de jQuery si necesitas AJAX -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
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
                        <a class="dropdown-item" href="#">0ffice</a>
                        <a class="dropdown-item" href="#">Navegacion</a>
                        <a class="dropdown-item" href="#">Etc</a>
                    </div>
					
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

<div class="bg-light">

 <div class="pt-5 pt-sm-6 pt-lg-8">
    <div class="container-fluid px-3 px-sm-4 px-lg-5">
      <div class="text-center">
        <h2 class="display-4 font-weight-bold text-dark">
          Precios
        </h2>
        <p class="mt-4 lead text-muted">
        Elige entre nuestras opciones de pago
              </p>
      </div>
    </div>
 </div>

 <div class="mt-4 bg-white pb-8 pb-sm-10 pb-lg-12">
    <div class="relative">
      <div class="absolute inset-0 h-50 bg-light"></div>
      <div class="container-fluid px-3 px-sm-4 px-lg-5">
        <div class="row">
          <div class="col-lg-6 p-4 p-lg-6 bg-white shadow-lg">
            <h3 class="display-5 font-weight-bold text-dark">
              Membresia Pro
            </h3>
            <p class="mt-4 text-muted">
              Acceso a todos los cursos de la plataforma
            </p>
            <div class="mt-4">
              <div class="d-flex align-items-center">
                <h4 class="mr-4 bg-white text-uppercase font-weight-semibold text-primary">
                 Qué está incluido
                </h4>
                <div class="flex-grow-1 border-top border-secondary"></div>
              </div>
              <ul class="mt-4 list-unstyled">
                <li class="d-flex align-items-start">
                 <div class="me-3">
				 <!-- Heroicon name: solid/check-circle -->
                    <svg class="bi bi-check-circle-fill text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						<path d="M10.97 4.97a.235.235 0 0 0-.02-.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
					  </svg>
                 </div>
                 <p class="mb-0 text-muted">
                 Acceso privado al foro
                 </p>
                </li>
                <ul class="list-unstyled">
				 <li class="d-flex align-items-start">
					<div class="me-3">
					  <!-- Heroicon name: solid/check-circle -->
					  <svg class="bi bi-check-circle-fill text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						<path d="M10.97 4.97a.235.235 0 0 0-.02-.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
					  </svg>
					</div>
					<p class="mb-0 text-muted">
          Recursos para miembros
					</p>
				 </li>

				 <li class="d-flex align-items-start">
					<div class="me-3">
					  <!-- Heroicon name: solid/check-circle -->
					  <svg class="bi bi-check-circle-fill text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						<path d="M10.97 4.97a.235.235 0 0 0-.02-.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
					  </svg>
					</div>
					<p class="mb-0 text-muted">
          Entrada a la conferencia anual
					</p>
				 </li>

				 <li class="d-flex align-items-start">
					<div class="me-3">
					  <!-- Heroicon name: solid/check-circle -->
					  <svg class="bi bi-check-circle-fill text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						<path d="M10.97 4.97a.235.235 0 0 0-.02-.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
					  </svg>
					</div>
					<p class="mb-0 text-muted">
          Camiseta oficial de miembro.
					</p>
				 </li>
				</ul>

            </div>
          </div>

          <div class="col-lg-6 p-4 p-lg-6 bg-light text-center">
            <p class="text-lg font-weight-medium text-dark">
              Pago mensual
            </p>
            <div class="mt-4 d-flex justify-content-center align-items-center text-5xl font-weight-bold text-dark">
              <span>
                $20.00
              </span>
              <span class="ml-3 text-xl font-weight-medium text-muted">
                MXN
              </span>
            </div>
            <p class="mt-4 text-sm">
              <a href="#" class="text-muted text-decoration-underline">
                Nuestros terminos y condiciones de uso
              </a>
            </p>
            <div class="mt-6">
              <button class="btn btn-lg btn-success w-100">
                Obtener acceso
              </button>
            </div>
            <div class="mt-4 text-sm">
                <span class="badge badge-light text-muted">
                Cancela cuando quieras
                </span>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
</div>




</body>

</html>
