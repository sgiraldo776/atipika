<?php
    include '../../conexion.php';

$cod_diseno=$_GET['id'];

$hoy = date("Y-m-d-H-i-s");

$sel =$conn->query("SELECT * FROM tbldiseñohechos WHERE cod_diseño_hecho='$cod_diseno'");

while ($row=$sel->fetch_array()){
    //echo $row[1];
    $nom=$row[1];
    $imagen=$row[2];
}

$ins=$conn->query("INSERT INTO tblpedido_diseño_hecho (id_cliente, cod_diseño_hecho, fecha) VALUES ( '1036424415', 9, '$hoy')");

?>