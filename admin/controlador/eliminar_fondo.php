<?php

include '../../conexion.php';

$cod_fondo=$_GET['cod_fondo'];

$imagen=$conn->query("SELECT tblfondo.imagen FROM tblfondo WHERE cod_fondo='$cod_fondo'");

$fila = $imagen -> fetch_assoc();
    $img=$fila['imagen'];



$del = $conn -> query(" DELETE FROM tblfondo WHERE cod_fondo='$cod_fondo'");

if ($del==true){
        unlink("../../images/$img");//acá le damos la direccion exacta del archivo
        echo "<script> alert ('Eliminado correctamente') </script>";
        echo "<script> 	location.href='../fondo.php'; </script>";
}else{
    echo "<script> alert ('Error') </script>";
    echo "<script> 	location.href='../fondo.php'; </script>";
}

?>