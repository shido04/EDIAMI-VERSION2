<?php
session_start();
if(!empty($_POST)) {
    if(empty($_POST['loginEstudiante']) || empty($_POST['passEstudiante'])) {
        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Todos los campos son necesarios</div>';
    } else {
        require_once 'conexion.php';
        $login = $_POST['loginEstudiante'];
        $pass = $_POST['passEstudiante'];

        $sql = 'SELECT * FROM Estudiante WHERE cedula = ?';
        $query = $pdo->prepare($sql);
        $query->execute(array($login));
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($query->rowCount() > 0) {
            if(password_verify($pass, $result['clave'])) {
                $_SESSION['activeE'] = true;
                $_SESSION['Estudiante_id'] = $result['Estudiante_id'];
                $_SESSION['nombre'] = $result['nombre'];
                $_SESSION['cedula'] = $result['cedula'];

                echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Redirecting</div>';
            }else {
                echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Usuario o Clave incorrectos</div>';
            }
        } else {
            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Usuario o Clave incorrectos</div>';
        }
    } 
}