<?php

include '../../conexion.php';

$hoy = date("YmdHis");
$nombre=$_POST['nombre'];


$type=$_FILES['img1']['type'];
$tmp_name = $_FILES['img1']["tmp_name"];
$name =$_FILES['img1']["name"];
$name=$hoy.$name;
$img1="../../images/".$name;
move_uploaded_file($tmp_name,$img1);

$sql="INSERT INTO tblfondo (nombre, imagen) VALUES ('$nombre', '$name')";

if ($conn->query($sql)){
    
    echo "<script> alert('Correcto');</script>";
    echo "<script> location.href='../fondo.php'; </script>";
}else{
    echo "Error: " . $sql . "<br>". $conn->error;
    echo "<script> location.href='../fondo.php'; </script>";
}



?>