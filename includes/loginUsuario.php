<?php
session_start();

if (!empty($_POST)) {
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

    if (empty($login) || empty($pass)) {
        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Todos los campos son necesarios</div>';
    } else {
        require_once 'conexion.php';
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        // Utiliza consultas preparadas para evitar inyecciones SQL
        $sql = 'SELECT * FROM usuarios as u INNER JOIN rol as r ON u.rol = r.rol_id WHERE u.usuario = ? AND u.estado != 0';
        $query = $pdo->prepare($sql);
        $query->execute([$login]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($query->rowCount() > 0) {
            if(password_verify($pass, $result['clave'])) {
                if($result['estado'] == 1) {
                    $_SESSION['active'] = true;
                    $_SESSION['id_usuario'] = $result['usuario_id'];
                    $_SESSION['nombre'] = $result['nombre'];
                    $_SESSION['rol'] = $result['rol_id'];
                    $_SESSION['nombre_rol'] = $result['nombre_rol'];

                    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Redirecting</div>';
                } else {
                    echo '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">&times;</button>Usuario inactivo, comuniquese con el administrador</div>';
                }
                
        }else {
            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Usuario o Clave incorrectos</div>';
        }
    } else {
        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Usuario o Clave incorrectos</div>';
        }
    }
}
?>

