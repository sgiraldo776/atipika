<?php
    require_once "../../conexion.php";

    session_start();

    $Usuario = $_POST['correo'];
    $Contrasena = $_POST['contr'];
    //$Contraseña=hash("sha256", $Contraseña); //QUITAR EL COMENTARIO CUANDO EL LOGIN ESTÉ LISTO

    $sel = $conn->query("SELECT * FROM tblCliente WHERE correo='$Usuario' AND contrasena='$Contrasena'");

    $row = mysqli_fetch_array($sel);

    if ($row==TRUE) {
        if($row[6]==1){
            $_SESSION['id']=$row[0];
            $_SESSION['correo']=$row[4];
            $_SESSION['rol']=$row[6];
            echo "<script> location.href='../../index.php'; </script>";
        }else{
            $_SESSION['id']=$row[0];
            $_SESSION['correo']=$row[4];
            $_SESSION['rol']=$row[6];
            echo "<script> location.href='../../index.php'; </script>";
        }
    }else{
        echo "<script> location.href='login.php?msg=2'; </script>";
    }
?>