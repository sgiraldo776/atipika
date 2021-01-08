<?php
    require "../../conexion.php";
    
    if ($conn->connect_error) {
        die("Conección exitosa: " . $conn->connect_error);
    }

    $id=$_POST['identificacion'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $celular=$_POST['celular'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contra1'];
    //$contrasena=hash("sha256", $contrasena);

    $sql=$conn->query("INSERT INTO tblCliente (id, nombre, apellidos, celular, correo, contrasena, rol) VALUES ('$id', '$nombres', '$apellidos', '$celular', '$correo', '$contrasena', 2)");
        if ($sql==true){
            echo "<script> 	location.href='../login/login.php?msg=3'; </script>";
        }else{
            //echo "<script> 	location.href=''; </script>";
            echo "<script> 	alert('ERROR'); </script>";
        }
?>