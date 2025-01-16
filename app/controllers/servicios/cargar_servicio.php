<?php


$id_servicio_get = $_GET['id'];

$sql_servicios = "SELECT *, cat.nombre_categoria as categoria, u.email as email, u.id_usuario as id_usuario
                  FROM tb_servicios as a INNER JOIN tb_categorias as cat ON a.id_categoria = cat.id_categoria 
                  INNER JOIN tb_usuarios as u ON u.id_usuario = a.id_usuario WHERE id_servicio = '$id_servicio_get'";
$query_servicios = $pdo->prepare($sql_servicios);
$query_servicios->execute();
$servicios_datos = $query_servicios->fetchAll(PDO::FETCH_ASSOC);

foreach ($servicios_datos as $servicios_dato){
    $codigo = $servicios_dato['codigo'];
    $nombre_categoria = $servicios_dato['nombre_categoria'];
    $nombre_servicio = $servicios_dato['nombre_servicio'];
    $email = $servicios_dato['email'];
    $id_usuario = $servicios_dato['id_usuario'];
    $descripcion = $servicios_dato['descripcion'];
   
  
    $precio = $servicios_dato['precio'];
    $fecha_ingreso = $servicios_dato['fecha_ingreso'];
   
}