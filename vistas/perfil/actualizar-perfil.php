<?php
require "../../conexion.php";
session_start();
if ($conn->connect_error) {
    die("Conección exitosa: " . $conn->connect_error);
}

$nombre=$_POST['nombre'];
$apellido=$_POST['apellidos'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];

$id=$_SESSION['id'];


$sql = $conn ->query("UPDATE tblcliente SET nombre='$nombre', apellidos='$apellido', celular='$celular', correo='$correo' WHERE id='$id'");

if ($sql) {
    echo "<script> 	location.href='perfil.php?msg=1'; </script>";
}else{
    echo "<script> 	location.href='perfil.php?msg=2'; </script>";
	
}
?>