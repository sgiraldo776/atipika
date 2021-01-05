<?php

include '../../conexion.php';

$cod_tprod=$_GET['cod_tprod'];

$imagen=$conn->query("SELECT tblproducto.imagen FROM tblproducto WHERE cod_producto='$cod_tprod'");

$fila = $imagen -> fetch_assoc();
    $img=$fila['imagen'];



$del = $conn -> query(" DELETE FROM tblproducto WHERE cod_producto='$cod_tprod'");

if ($del==true){
        unlink("../../images/$img");//acá le damos la direccion exacta del archivo
        echo "<script> alert ('Eliminado correctamente') </script>";
        echo "<script> 	location.href='../tipo_producto.php'; </script>";
}else{
    echo "<script> alert ('Error') </script>";
    echo "<script> 	location.href='../tipo_producto.php'; </script>";
}



?>