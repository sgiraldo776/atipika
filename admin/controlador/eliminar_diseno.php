<?php

include '../../conexion.php';

$cod_diseño=$_GET['cod_diseño'];

$imagen=$conn->query("SELECT tbldiseño.imagen FROM tbldiseño");

$fila = $imagen -> fetch_assoc();
    $img=$fila['imagen'];



$del = $conn -> query(" DELETE FROM tbldiseño WHERE cod_diseño='$cod_diseño'");

if ($del==true){
        unlink("../../images/$img");//acá le damos la direccion exacta del archivo
        echo "<script> alert ('Eliminado correctamente') </script>";
        echo "<script> 	location.href='../diseño.php'; </script>";
}else{
    echo "<script> alert ('Error') </script>";
    echo "<script> 	location.href='../diseño.php'; </script>";
}



?>