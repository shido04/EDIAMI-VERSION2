<?php

require_once '../../../includes/conexion.php';

$sql = 'SELECT * FROM usuarios as u INNER JOIN rol as r ON u.rol = r.rol_id WHERE u.estado != 0';
$query = $pdo->prepare($sql);
$query->execute();

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);

for($i = 0;$i < count($consulta);$i++) {
    if($consulta[$i]['estado'] == 1) {
        $consulta[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
    } else {
        $consulta[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
    }

    $consulta[$i]['acciones'] = '
            <button class="btn btn-primary btn-sm" title="Editar" onclick="editarUsuario('.$consulta[$i]['usuario_id'].')">Editar</button>
            <button class="btn btn-danger btn-sm" title="Eliminar" onclick="eliminarUsuario('.$consulta[$i]['usuario_id'].')">Eliminar</button>
                                ';
}

echo json_encode($consulta,JSON_UNESCAPED_UNICODE);