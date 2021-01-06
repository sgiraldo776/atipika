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

$cod_diseno=$_GET['id'];

$hoy = date("Y-m-d-H-i-s");

$sel =$conn->query("SELECT * FROM tbldiseñohechos WHERE cod_diseño_hecho='$cod_diseno'");

while ($row=$sel->fetch_array()){
    //echo $row[1];
    $nom=$row[1];
    $imagen=$row[2];
}

$ins=$conn->query("INSERT INTO tblpedido_diseño_hecho (id_cliente, cod_diseño_hecho, fecha) VALUES ( '$_SESSION[id]', '$cod_diseno', '$hoy')");

if ($ins==TRUE){
    echo "<script> alert('Correcto');</script>";
    echo "<script> location.href='estilos.php'; </script>";
}else{
    echo "Error: " . $sql . "<br>". $conn->error;
    //echo "<script> location.href='estilos.php'; </script>";
}

?>