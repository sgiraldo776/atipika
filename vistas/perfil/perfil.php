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


    $sel=$conn->query('SELECT * FROM tbldiseñohechos');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilos</title>

    <link rel="icon" type="image/png" href="../../img/atipika-icon.png">

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/estilo.css">

</head>

<body>

    <section class="bg-login p-4">
        <div class="container perfil mt-2">
            <div class="p-sm-3 p-1">
                <form action="">


                        <div class="row my-4 ml-1">
                            <div class="col-md-6 col-sm-12">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="">Apellidos</label>
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>

                        <hr>

                        <div class="row my-4 ml-1">
                            <div class="col-md-6 col-sm-12">
                                <label for="">Correo</label>
                                <input type="email" class="form-control" id="">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="">Celular</label>
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>

                        <div class="row my-4 ml-1">
                        <div class="col text-center">
                            <button class="btn btn-color">Actualizar</button>
                        </div>
                        </div>
                        
                </form>
            </div>
        </div>
    </section>


    <?php
        include ('../../includes/footer/footer.php');
    ?>

    <?php
        if(isset($_GET['msg'])){
            if($_GET['msg']==1){
        ?>

    <script>
        Swal.fire({
            icon: 'success',
            title: 'Excelente...',
            text: 'Producto agregado al carrito',

        })
    </script>

    <?php
            }else{
                if($_GET['msg']==2){
        ?>

    <script>
        Swal.fire('No se pudo agregar al carrito')
    </script>

    <?php
                }
            }
        }
        ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>