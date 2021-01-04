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

    <div class="container text-center">
        <div class="row">
            <?php
                while($fila=$sel->fetch_assoc()){
            ?>

            <div class="card m-3" style="width: 15rem;">
                <img src="<?php echo $urlimagen.$fila['imagen'] ?>" class="imagen-portada card-img-top"
                    style="height: 15rem;" />
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <?php echo $fila['nombre'] ?>
                    </h5>
                    <!-- <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.
                                        </p> -->

                    <div class="align-items-center text-center mt-2">
                        <button type="submit" class="btn-color">Comprar</button>
                        <button type="submit" class="btn-color">Agregar a la bolsa</button>
                    </div>
                </div>
            </div>


            <?php
                }
            ?>
        </div>
        <a href="../crear-estilo/crear_estilo.php">Crea tu propia prenda aquí</a>
    </div>

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