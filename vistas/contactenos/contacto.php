<?php
    include('../../conexion.php');

    session_start();
        if(!isset($_SESSION['rol'])){
            include '../../includes/header/header_inicio.php';
        }else{
            if($_SESSION['rol'] ==1 ){
                include '../../includes/header/header_admin';
            }else{
                if($_SESSION['rol'] ==2 ){
                    include '../../includes/header/header_usuario.php';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../../img/icono-pag.png">
    

    <!-- Sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="../../css/estilo.css">
</head>
<body>
    <section>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="text-center">
                                <h3>Contáctenos</h3>
                            </div>
                            <form action="enviar_contacto.php" name="add_form" method="post" enctype="multipart/form-data">
                                    <label class="mt-3">Nombre </label>
                                    <input class="form-control" type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre y apellidos"> 
                                    <label class="mt-3">Correo </label>
                                    <input class="form-control" type="email" name="correo" id="correo" placeholder="Ingrese su correo"> 
                                    <label class="mt-3">Celular </label>
                                    <input class="form-control" type="tel" name="celular" id="celular" placeholder="Ingrese su número de celular">
                                    <label class="mt-3">Asunto </label>
                                    <input class="form-control" type="text" name="asunto" id="asunto" placeholder="Ingrese un asunto"> 
                                    <label class="mt-3">Comentario</label>
                                    <textarea class="form-control" name="comentario" id="comentario" rows="10" placeholder="Ingrese un comentario"></textarea>
                                <div class="text-center">
                                    <input type="button" class="btn btn-color" value="Enviar">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div>
                            <i class="far fa-envelope"></i> Correo
                            <p>admin@atipika.com</p>
                        </div>
                        <div class="mt-3">
                            <i class="fas fa-phone-alt"></i> Telefono
                            <p>+5755012354</p>
                        </div>
                        <div class="mt-3">
                            <i class="fas fa-map-marker-alt"></i> Dirección
                            <p>Envigado y Rionegro, Antioquia, Colombia
                            Vereda la Convención, Kilometro 2,2 vía Aeropuerto – Llanogrande. </p>
                        </div>
                        <div class="mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.649600524243!2d-75.435459!3d6.154214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55a99dfeb9f3a409!2sPortanova%20Center!5e0!3m2!1ses-419!2sus!4v1609012038820!5m2!1ses-419!2sus" width="600" height="368" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    
                    </div>
                </div>
            </div>

        </main>
    </section>

    

    <?php
        if(isset($_GET['msg'])){
            if($_GET['msg']==1){
        ?>

        <script>
            Swal.fire('Correo enviado exitosamente')
        </script>

        <?php
            }else{
                if($_GET['msg']==2){
        ?>

        <script>
            Swal.fire('No se pudo enviar el correo')
        </script>

        <?php
                }
            }
        }
        ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

        <!--validacion de capos vacios-->
        <script type="text/javascript" src="js/validacion.js"></script>

    <?php
        include '../../includes/footer/footer.php';
    ?>
</body>
</html>