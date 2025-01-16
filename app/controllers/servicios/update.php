<?php


include ('../../config.php');

$codigo = $_POST['codigo'];
$id_categoria = $_POST['id_categoria'];
$nombre_servicio = $_POST['nombre_servicio'];
$id_usuario = $_POST['id_usuario'];
$descripcion = $_POST['descripcion'];

$precio = $_POST['precio'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$id_servicio = $_POST['id_servicio'];



$sentencia = $pdo->prepare("UPDATE tb_servicios
    SET nombre_servicio=:nombre_servicio,
        descripcion=:descripcion,
    
        precio=:precio,
        fecha_ingreso=:fecha_ingreso,
       
        id_usuario=:id_usuario,
        id_categoria=:id_categoria,
        fyh_actualizacion=:fyh_actualizacion 
    WHERE id_servicio = :id_servicio");

$sentencia->bindParam('nombre_servicio',$nombre_servicio);
$sentencia->bindParam('descripcion',$descripcion);

$sentencia->bindParam('precio',$precio);
$sentencia->bindParam('fecha_ingreso',$fecha_ingreso);

$sentencia->bindParam('id_usuario',$id_usuario);
$sentencia->bindParam('id_categoria',$id_categoria);
$sentencia->bindParam('fyh_actualizacion',$fechaHora);
$sentencia->bindParam('id_servicio',$id_servicio);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se actualizo el servicio de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/servicios/');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo actualizar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/servicios/update.php?id='.$id_servicio);
}



