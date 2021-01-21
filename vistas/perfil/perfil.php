<?php
    include '../../conexion.php';

    session_start();
        if(!isset($_SESSION['rol'])){
            header( 'location:../login/login.php');;
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

        //consulta para traer los datos del cliente en el perfil

        $cliente=$conn ->query("SELECT * FROM tblcliente WHERE id='$_SESSION[id]'");

        $fila=$cliente->fetch_assoc();


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

    <!-- Sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
                <form action="actualizar-perfil.php" method="POST">


                        <div class="row my-4 ml-1">
                            <div class="col-md-6 col-sm-12">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $fila['nombre'] ?>" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" value="<?php echo $fila['apellidos'] ?>" required>
                            </div>
                        </div>

                        <hr>

                        <div class="row my-4 ml-1">
                            <div class="col-md-6 col-sm-12">
                                <label for="">Correo</label>
                                <input type="email" class="form-control" name="correo" value="<?php echo $fila['apellidos'] ?>" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="">Celular</label>
                                <input type="text" class="form-control" name="celular" value="<?php echo $fila['celular'] ?>" required>
                            </div>
                        </div>

                        <div class="row my-4 ml-1">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-color">Actualizar</button>
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
            text: 'Datos actualizados correctamente',

        })
    </script>

    <?php
            }else{
                if($_GET['msg']==2){
        ?>

    <script>
        Swal.fire('Hubo Un error, no se puedo actualizar los datos')
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