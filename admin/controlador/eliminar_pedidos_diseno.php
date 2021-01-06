<?php

include '../../conexion.php';

$id_pedido=$_GET['id_pedido'];

$del = $conn -> query(" DELETE FROM tblpedido_diseño_hecho WHERE id_pedido='$id_pedido'");

if ($del==true){
        unlink("../../images/$img");//acá le damos la direccion exacta del archivo
        echo "<script> alert ('Eliminado correctamente') </script>";
        echo "<script> 	location.href='../pedidos_diseno_hecho.php'; </script>";
}else{
    echo "<script> alert ('Error') </script>";
    echo "<script> 	location.href='../pedidos_diseno_hecho.php'; </script>";
}



?>