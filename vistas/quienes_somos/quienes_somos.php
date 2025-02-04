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
    <title>Nosotros</title>

    <link rel="icon" type="image/png" href="../../img/atipika-icon.png">

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
    <section class="quien-somo">
        <div class="container">
            <div class="vista-somos text-center mt-5">
                <h1>¿QUIÉNES SOMOS?</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12 text-center">
                    <div class="tar-img p-5">
                        <img src="../../img/disenador-de-moda.svg" alt="">
                    </div>
                    <h1>MISIÓN</h1>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis eveniet assumenda reiciendis sunt quo ut eum necessitatibus asperiores numquam praesentium dolor iste exercitationem sint totam saepe, doloribus quod maxime magni.</p>
                </div>
                <div class="col-lg-4 col-sm-12 text-center">
                    <div class="tar-img p-5">
                        <img src="../../img/buscar.svg" alt="">
                    </div>
                    <h1>VISIÓN</h1>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis eveniet assumenda reiciendis sunt quo ut eum necessitatibus asperiores numquam praesentium dolor iste exercitationem sint totam saepe, doloribus quod maxime magni.</p>
                </div>
                <div class="col-lg-4 col-sm-12 text-center">
                    <div class="tar-img p-5">
                        <img src="../../img/moda.svg" alt="">
                    </div>
                    <h1>OBJETIVOS</h1>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis eveniet assumenda reiciendis sunt quo ut eum necessitatibus asperiores numquam praesentium dolor iste exercitationem sint totam saepe, doloribus quod maxime magni.</p>
                </div>
            </div>
        </div>
    </section>

    <?php
        include('../../includes/footer/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>