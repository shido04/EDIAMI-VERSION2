<?php

require_once '../../../includes/conexion.php';

if(!empty($_POST)) {
    if(empty($_POST['nombre']) || empty($_POST['usuario'])) {
        $respuesta = array('status' => false,'msg' => 'Todos los campos son necesarios');
    } else {
        $idusuario = $_POST['idusuario'];
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $rol = $_POST['listRol'];
        $estado = $_POST['listEstado'];

        $sql = 'SELECT * FROM usuarios WHERE usuario = ? AND usuario_id != ? AND estado != 0';
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario,$idusuario));
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result > 0) {
            $respuesta = array('status' => false,'msg' => 'El usuario ya existe');
        } else {
            if($idusuario < 0) {
                $clave = password_hash($_POST['clave'],PASSWORD_DEFAULT);
                $sqlInsert = 'INSERT INTO usuarios (nombre,usuario,clave,rol,estado) VALUES (?,?,?,?,?)';
                $queryInsert = $pdo->prepare($sqlInsert);
                $request = $queryInsert->execute(array($nombre,$usuario,$clave,$rol,$estado));
                $accion = 1;
            } else {
                if(empty($_POST['clave'])) {
                    $sqlUpdate = 'UPDATE usuarios SET nombre = ?,usuario = ?,rol = ?,estado = ? WHERE usuario_id = ?';
                    $queryUpdate = $pdo->prepare($sqlUpdate);
                    $request = $queryUpdate->execute(array($nombre,$usuario,$rol,$estado,$idusuario));
                    $accion = 2;
                } else {
                    $claveUpdate = password_hash($_POST['clave'],PASSWORD_DEFAULT);
                    $sqlUpdate = 'UPDATE usuarios SET nombre = ?,usuario = ?,clave = ?,rol = ?,estado = ? WHERE usuario_id = ?';
                    $queryUpdate = $pdo->prepare($sqlUpdate);
                    $request = $queryUpdate->execute(array($nombre,$usuario,$claveUpdate,$rol,$estado,$idusuario));
                    $accion = 3;
                }
                
            }  

            if($request > 0) {
                if($accion == 1) {
                    $respuesta = array('status' => true,'msg' => 'Usuario creado correctamente');
                } else {
                    $respuesta = array('status' => true,'msg' => 'Usuario actualizado correctamente');
                }
            }
        }
    }
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
}