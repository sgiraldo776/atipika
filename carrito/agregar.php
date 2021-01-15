<?php
    include('../conexion.php');
    session_start();

    if(!isset($_SESSION['rol'])){
        header( 'location:'.$URL.'vistas/login/login.php');
    }else{
        if($_SESSION['rol'] !=2 ){
            header( 'location:'.$URL.'vistas/login/login.php');
        }
    }
        
$cod_diseño_hecho=$_GET['id'];

$hoy = date("Y-m-d-H-i-s");

$insert=$conn->query("INSERT INTO cart_item (cod_diseño_hecho, quantity, id , created, modified) VALUES ( '$cod_diseño_hecho', 1, '$_SESSION[id]', '$hoy', '$hoy' )");

if ($insert){
    echo "<script> location.href='../index.php?msg=1'; </script>";
}else{
    echo "Error: " . $insert . "<br>". $conn->error;
    //echo "<script> location.href='estilos.php'; </script>";
}

?>