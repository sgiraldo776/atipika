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
        
$id_carrito=$_GET['id_carrito'];

$del = $conn -> query(" DELETE FROM cart_item WHERE id_carrito='$id_carrito'");

if ($del==TRUE){
    echo "<script> location.href='ver_carrito.php'; </script>";
}else{
    echo "Error: " . $insert . "<br>". $conn->error;
    //echo "<script> location.href='estilos.php'; </script>";
}

?>