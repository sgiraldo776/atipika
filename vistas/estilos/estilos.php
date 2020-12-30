<?php
    include '../../conexion.php';

    session_start();
        if(!isset($_SESSION['rol'])){
            include '../../includes/header/header_inicio.php';
        }else{
            if($_SESSION['rol'] !=1 ){
                if($_SESSION['rol'] =2 ){
                    include '../../includes/header/header_usuario.php';
                }else {
                    include '../../includes/header/header_inicio.php';
                }
            }else {
                include '../../includes/header/header_admin.php';
            }            
        }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilos</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/estilo.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="../../img/bg.jpg" class="card-img-top">
                <div class="card-body">
                    <div class="col-12 text-center">
                        <h5 class="card-title">Card title</h5>
                    </div>

                    <div class="col-12">
                        <p class="card-text text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="align-items-center text-center mt-2">
                        <button type="submit" class="btn-color">Comprar</button>
                        <button type="submit" class="btn-color">Agregar a la bolsa</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>