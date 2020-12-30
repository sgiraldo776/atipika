<?php
    include '../../conexion.php';


    $hoy = date("Y-m-d-H-i-s");

    $tipo_prenda=$_POST['tipo_prenda'];
    $disenio=$_POST['disenio'];
    $fondo=$_POST['fondo'];
    $flor=$_POST['flor'];
    $frase=$_POST['frase'];
    $talla=$_POST['talla'];

    $sql=$conn->query("INSERT INTO tblpedido (id, cod_producto, talla, fecha, cod_estado, cod_diseño, cod_fondo, frase, cod_flor) VALUES (1036424415, '$tipo_prenda', '$talla', '$hoy', 1, '$disenio', '$fondo', '$frase', '$flor'  )");


    if ($sql==TRUE){
        //echo "<script> alert('Correcto');</script>";
        //echo "<script> location.href='crear_estilo.php'; </script>";
    }else{
        echo "Error: " . $sql . "<br>". $conn->error;
        //echo "<script> location.href='crear_estilo.php'; </script>";
    }
    
?>