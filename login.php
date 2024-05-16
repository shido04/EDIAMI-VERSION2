<?php
    session_start();
    if(!empty($_SESSION['active'])) {
        header('Location: administrador/');
    } else if(!empty($_SESSION['activeP'])) {
        header('Location: profesor/');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title></title>
    

</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 text-black">

        <div class="px-5 ms-xl-">
            <img src="img/logo.png"
		   style="width: 100px;" alt="logo">
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-1 pt-3 pt-xl-0 mt-xl-n5">
			

         <div class="cont-header">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">accede a tu cuenta</h3>

                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">administrador</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Alumno</button>
                        
                      </div>
                    </nav>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                              <form action="" onsubmit="return validar()">
                                <div data-mdb-input-init class="form-outline mb-4">
                                  <label for="usuario">Usuario</label>
                                <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" class="form-control form-control-lg">
                                </div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                  <label for="password">Contraseña</label>
                                <input type="password" name="pass" id="pass" placeholder="Contraseña" class="form-control form-control-lg">
                                  <div id = "messageUsuario"></div>
                                </div>
                                <div class="pt-1 mb-4">
									                <button id="loginUsuario" type="button">INICIAR SESION</button>
                                </div>
                              
                              </form>
                         </div>
                         <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                              <form action=""  onsubmit="return validar()">
                                <div data-mdb-input-init class="form-outline mb-4">
                                  <label for="usuario">Usuario</label>
                                <input type="text" name="usuarioProfesor" id="usuarioProfesor" placeholder="Cedula" class="form-control form-control-lg">
                                </div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                  <label for="password">Contraseña</label>
                                <input type="password" name="passProfesor" id="passProfesor" placeholder="Contraseña" class="form-control form-control-lg">
                                <div id="messageProfesor"></div> 
                                </div>
                                <div class="pt-1 mb-4">
                                  <<button id="loginProfesor" type="button">INICIAR SESION</button>
                                </div>
                              
                              </form>
                         </div>
                        
                    </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

         </div>

        </div>

      </div>
      <div class="col-sm-7 px-0 d-none d-sm-block">
        <img src="img/logn.png"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>

    
  
</section>

<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/login.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

	
</body>
</html>
