<?php
    include('conexion.php');
    session_start();
        if(!isset($_SESSION['rol'])){
            include 'includes/header/header_inicio.php';
        }else{
            if($_SESSION['rol'] !=1 ){
                if($_SESSION['rol'] =2 ){
                    include 'includes/header/header_usuario.php';
                }else {
                    include 'includes/header/header_inicio.php';
                }
            }else {
                include 'includes/header/header_admin.php';
            }            
        }
    
        $sel=$conn->query('SELECT * FROM tbldiseñohechos LIMIT 3');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atipika</title>

    <link rel="icon" type="image/png" href="img/atipika-icon.png">

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <main class="container">
        <div class="row main">
            <div class="col-lg-6 col-sm-12 px-5 txt">
                <h1 class="titulo">HOLA</h1>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis
                    totam incidunt ex animi aperiam labore dolores tempore consequuntur esse deleniti alias est
                    praesentium tempora magni excepturi possimus ullam quas iure dignissimos a inventore, voluptatem
                    deserunt autem? Odit corporis fugit autem facilis harum ea, aliquam fugiat natus excepturi cum
                    dolores aperiam eveniet et, obcaecati dolor dolore sed nobis alias inventore quibusdam odio, veniam
                    saepe voluptates modi! Magni totam eius facere similique quod molestiae tempore deleniti ullam
                    voluptatem possimus soluta ab delectus expedita placeat iusto sequi ducimus reiciendis, in fugiat
                    cum? Enim sequi rerum natus nobis adipisci ipsam praesentium reprehenderit aperiam commodi.</p>
            </div>
            <div class="col-lg-6 col-sm-12 card-img">
                <a href="vistas/crear-estilo/crear_estilo.php">
                    <div class="card-recolor"></div>
                </a>
            </div>
        </div>
    </main>

    <section>
        <div class="container">
            <div class="text-center titulo">
                <h1>Top productos</h1>
            </div>
            <div class="text-center">
                <div class="row destacado">
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
                                <a href="vistas/estilos/reservar_diseno.php?id=<?php echo $fila['cod_diseño_hecho'] ?>"><button class="btn-color">Comprar</button></a>
                                <a href="vistas/estilos/estilos.php"><button class="btn-color">Ver más</button></a>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                </div>
                        
            </div>

        </div>


    </section>

    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-left text-center copy">Atipika © 2020</div>
                <div class="col-lg-6 my-3 my-lg-0 text-lg-center text-center">
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="redes btn btn-social mx-3" href="https://www.instagram.com/atipika_oficial/?hl=es-la"
                        target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-3 text-lg-center text-center contac">
                    <h3 class="contac"><a href="#">Contáctenos</a></h3>
                </div>
            </div>
        </div>
    </footer>

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