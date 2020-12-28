<?php

include '../../conexion.php';

$cod_prod=$_GET['cod_prod'];

$imagen=$conn->query("SELECT tbldiseñohechos.imagen FROM tbldiseñohechos");

$fila = $imagen -> fetch_assoc();
    $img=$fila['imagen'];



$del = $conn -> query(" DELETE FROM tbldiseñohechos WHERE cod_diseño='$cod_prod'");

if ($del==true){
        unlink("../../images/$img");//acá le damos la direccion exacta del archivo
        echo "<script> alert ('Eliminado correctamente') </script>";
        echo "<script> 	location.href='../producto.php'; </script>";
}else{
    echo "<script> alert ('Error') </script>";
    echo "<script> 	location.href='../producto.php'; </script>";
}



?>