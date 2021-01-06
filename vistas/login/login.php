<?php
    include '../../conexion.php';
    session_start();
    if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            echo "<script>     location.href='../../index.php'; </script>";
        break;
        case 2:
            echo "<script>     location.href='../../index.php'; </script>";
        break;

        default:
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="">

    <!-- Sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="../../css/estilo.css">
</head>

<body class="bg-login">

    <section class="bg-login">

        <div class="container m-0 p-0 col-12">

            <div class="col-12 col-md-6 col-lg-6 bg-formulario">
                <form action="ingreso.php" method="post">
                    <div class="logo text-center col-12">
                        <a href="../../index.php">
                            <img src="../../img/logo-01.png" alt="">
                        </a>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="#">Correo</label>
                            <input type="email" class="login-form" name="correo">
                        </div>

                        <div class="form-group col-12">
                            <label for="">Contraseña</label>
                            <input type="password" class="login-form" name="contr">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 text-center aa">
                            <a href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>

                    <div class="align-items-center text-center">
                        <button type="submit" class="btn btn-color">Ingresar</button>
                        <a href="../registro/form_registrarse.php" class="btn btn-color">Registrarse</a>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

<?php
    if(isset($_GET['msg'])){
        if($_GET['msg']==1){
    ?>

    <script>
        Swal.fire('Sesión cerrada correctamente')
    </script>

    <?php
        }else{
            if($_GET['msg']==2){
    ?>

    <script>
        Swal.fire('Datos incorrectos')
    </script>
    
    <?php
        }else{
            if($_GET['msg']==3){
    ?>

    <script>
        Swal.fire('Registro existoso')
    </script>

    <?php
            }
            }
        }
    }
    ?>

</body>

</html>