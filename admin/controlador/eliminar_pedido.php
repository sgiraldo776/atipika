<?php

include '../../conexion.php';

$cod_pedido=$_GET['cod_pedido'];

$del = $conn -> query(" DELETE FROM tblpedido WHERE cod_pedido='$cod_pedido'");

if ($del==true){
        unlink("../../images/$img");//acá le damos la direccion exacta del archivo
        echo "<script> alert ('Eliminado correctamente') </script>";
        echo "<script> 	location.href='../pedidos.php'; </script>";
}else{
    echo "<script> alert ('Error') </script>";
    echo "<script> 	location.href='../pedidos.php'; </script>";
}



?>