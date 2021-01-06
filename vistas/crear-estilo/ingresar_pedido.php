<?php
    include '../../conexion.php';
    session_start();

    if(!isset($_SESSION['rol'])){
        header( 'location:'.$URL.'vistas/login/login.php');
    }else{
        if($_SESSION['rol'] !=2 ){
            header( 'location:'.$URL.'vistas/login/login.php');
        }
    }

    $hoy = date("Y-m-d-H-i-s");

    $tipo_prenda=$_POST['tipo_prenda'];
    $disenio=$_POST['disenio'];
    $fondo=$_POST['fondo'];
    $flor=$_POST['flor'];
    $frase=$_POST['frase'];
    $talla=$_POST['talla'];

    $sql=$conn->query("INSERT INTO tblpedido (id, cod_producto, talla, fecha, cod_estado, cod_diseño, cod_fondo, frase, cod_flor) VALUES ('$_SESSION[id]', '$tipo_prenda', '$talla', '$hoy', 1, '$disenio', '$fondo', '$frase', '$flor'  )");


    if ($sql==TRUE){
        //echo "<script> alert('Cotizacion enviada satisfactoriamente');</script>";
        echo "<script> location.href='crear_estilo.php?msg=1'; </script>";
    }else{
        echo "Error: " . $sql . "<br>". $conn->error;
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='crear_estilo.php'; </script>";
    }
    
?>