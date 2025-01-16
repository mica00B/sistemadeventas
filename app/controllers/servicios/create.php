<?php
include ('../../config.php');


$codigo = $_POST['codigo'];
$id_categoria = $_POST['id_categoria'];
$nombre_servicio = $_POST['nombre_servicio'];
$id_usuario = $_POST['id_usuario'];
$descripcion = $_POST['descripcion'];

$precio = $_POST['precio'];
$fecha_ingreso = $_POST['fecha_ingreso'];


$sentencia = $pdo->prepare("INSERT INTO tb_servicios
       ( codigo, nombre_servicio, descripcion, precio, fecha_ingreso, id_usuario, id_categoria, fyh_creacion) 
VALUES (:codigo,:nombre_servicio,:descripcion,:precio,:fecha_ingreso,:id_usuario,:id_categoria,:fyh_creacion)");

$sentencia->bindParam('codigo',$codigo);
$sentencia->bindParam('nombre_servicio',$nombre_servicio);
$sentencia->bindParam('descripcion',$descripcion);

$sentencia->bindParam('precio',$precio);
$sentencia->bindParam('fecha_ingreso',$fecha_ingreso);

$sentencia->bindParam('id_usuario',$id_usuario);
$sentencia->bindParam('id_categoria',$id_categoria);
$sentencia->bindParam('fyh_creacion',$fechaHora);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se registro el servicio de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/servicios/');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/servicios/create.php');
}




