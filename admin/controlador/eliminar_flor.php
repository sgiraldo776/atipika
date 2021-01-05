<?php

include '../../conexion.php';

$cod_flor=$_GET['cod_flor'];

$imagen=$conn->query("SELECT tblflor.imagen FROM tblflor WHERE cod_flor='$cod_flor'");

$fila = $imagen -> fetch_assoc();
    $img=$fila['imagen'];



$del = $conn -> query(" DELETE FROM tblflor WHERE cod_flor='$cod_flor'");

if ($del==true){
        unlink("../../images/$img");//acá le damos la direccion exacta del archivo
        echo "<script> alert ('Eliminado correctamente') </script>";
        echo "<script> 	location.href='../flor.php'; </script>";
}else{
    echo "<script> alert ('Error') </script>";
    echo "<script> 	location.href='../flor.php'; </script>";
}



?>