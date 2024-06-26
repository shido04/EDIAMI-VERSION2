<?php
require_once 'includes/header.php';


?>

<div class="position-relative primary pt-5 pb-5 sm:px-4 lg:pt-8 lg:pb-7 lg:px-6 pt-20">

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
              Principiante 
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
                    Nuestros términos y condiciones de uso
                </a>
            </p>
            <div class="mt-6">
                <!-- Modificado para incluir un ID para identificarlo fácilmente -->
                <button id="obtenerAccesoBtn" class="btn btn-lg btn-success w-100">
                    Obtener acceso
                </button>
            </div>
            <div class="mt-4 text-sm">
                <span class="badge badge-light text-muted">
                    Cancela cuando quieras
                </span>
            </div>
        </div>

        <script>
        // Asegúrate de colocar este script al final del cuerpo de tu documento HTML o en un archivo JS externo
        document.getElementById('obtenerAccesoBtn').addEventListener('click', function() {
            window.location.href = 'checkout.php';
        });
        </script>

        </div>
      </div>
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
              Intermedio 
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

            </div>
          </div>

          <div class="col-lg-6 p-4 p-lg-6 bg-light text-center">
            <p class="text-lg font-weight-medium text-dark">
              Pago mensual
            </p>
            <div class="mt-4 d-flex justify-content-center align-items-center text-5xl font-weight-bold text-dark">
              <span>
                $50.00
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
              <button  href="checkout.php" class="btn btn-lg btn-success w-100">
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

<div class="mt-4 bg-white pb-8 pb-sm-10 pb-lg-12">
    <div class="relative">
      <div class="absolute inset-0 h-50 bg-light"></div>
      <div class="container-fluid px-3 px-sm-4 px-lg-5">
        <div class="row">
          <div class="col-lg-6 p-4 p-lg-6 bg-white shadow-lg">
            <h3 class="display-5 font-weight-bold text-dark">
              Avanzado 
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
          
            </div>
          </div>

          <div class="col-lg-6 p-4 p-lg-6 bg-light text-center">
            <p class="text-lg font-weight-medium text-dark">
              Pago mensual
            </p>
            <div class="mt-4 d-flex justify-content-center align-items-center text-5xl font-weight-bold text-dark">
              <span>
                $100.00
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

<?php
require_once 'includes/footer.php'
?>


