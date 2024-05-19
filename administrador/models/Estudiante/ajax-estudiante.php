<?php

require_once '../../../includes/conexion.php';

if(!empty($_POST)) {
    if(empty($_POST['nombre']) || empty($_POST['direccion']) || empty($_POST['cedula']) || empty($_POST['telefono']) || empty($_POST['correo']) || empty($_POST['nivel_est'])) {
        $respuesta = array('status' => false,'msg' => 'Todos los campos son necesarios');
    } else {
        $idEstudiante = $_POST['idEstudiante'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $nivel_est = $_POST['nivel_est'];
        $estado = $_POST['listEstado'];

        $sql = 'SELECT * FROM estudiante WHERE cedula = ? AND Estudiante_id != ? AND estado != 0';
        $query = $pdo->prepare($sql);
        $query->execute(array($cedula,$idEstudiante));
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result > 0) {
            $respuesta = array('status' => false,'msg' => 'El Estudiante ya existe');
        } else {
            if($idEstudiante < 0) {
                $clave = password_hash($_POST['clave'],PASSWORD_DEFAULT);
                $sqlInsert = 'INSERT INTO estudiante (nombre,direccion,cedula,clave,telefono,correo,nivel_est,estado) VALUES (?,?,?,?,?,?,?,?)';
                $queryInsert = $pdo->prepare($sqlInsert);
                $request = $queryInsert->execute(array($nombre,$direccion,$cedula,$clave,$telefono,$correo,$nivel_est,$estado));
                $accion = 1;
            } else {
                if(empty($_POST['clave'])) {
                    $sqlUpdate = 'UPDATE estudiante SET nombre = ?,direccion = ?,cedula = ?,telefono = ?,correo = ?,nivel_est = ?,estado = ? WHERE Estudiante_id = ?';
                    $queryUpdate = $pdo->prepare($sqlUpdate);
                    $request = $queryUpdate->execute(array($nombre,$direccion,$cedula,$telefono,$correo,$nivel_est,$estado,$idEstudiante));
                    $accion = 2;
                } else {
                    $claveUpdate = password_hash($_POST['clave'],PASSWORD_DEFAULT);
                    $sqlUpdate = 'UPDATE estudiante SET nombre = ?,direccion = ?,cedula = ?,clave = ?,telefono = ?,correo = ?,nivel_est = ?,estado = ? WHERE Estudiante_id = ?';
                    $queryUpdate = $pdo->prepare($sqlUpdate);
                    $request = $queryUpdate->execute(array($nombre,$direccion,$cedula,$claveUpdate,$telefono,$correo,$nivel_est,$estado,$idEstudiante));
                    $accion = 3;
                }
            }  

            if($request > 0) {
                if($accion == 1) {
                    $respuesta = array('status' => true,'msg' => 'Estudiante creado correctamente');
                } else {
                    $respuesta = array('status' => true,'msg' => 'Estudiante actualizado correctamente');
                }
            }
        }
    }
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
}