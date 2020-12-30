<?php
    include '../../conexion.php';

    $producto=$conn->query("SELECT * FROM tblproducto");
    $diseno=$conn->query("SELECT * FROM tbldiseño");
    $fondo=$conn->query("SELECT * FROM tblfondo");
    $flor=$conn->query("SELECT * FROM tblflor");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atipika</title>

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
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="col-sm-3 text-center">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo-02.png" alt="">
            </a>
        </div>

        <button class="navbar-toggler toggler col-sm-3 ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav hola ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Inicio</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vistas/estilos/estilos.php">Estilos</a>
                    <!-- <a class="nav-link" href="Cliente/login/frm_login.php">Iniciar Sesion</a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vistas/servicios/servicios.php">Nosotros</a>
                </li>
                <div class="btn-group">
                    <button type="button" class="btn btn-invi dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        Ingresar
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <a href="Cliente/login/frm_login.php"><button class="dropdown-item" type="button">Iniciar
                                Sesión</button></a>
                        <a href="Cliente/usuario/form_cliente.php"><button class="dropdown-item"
                                type="button">Registrarse</button></a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>


    <section>
        <div class="container my-5">

            <form action="ingresar_pedido.php" method="POST">

                <div>
                    <h2>Tipos de prendas</h2>
                </div>
                <?php
                while ($fila = $producto -> fetch_assoc()) {
                    ?>
                <div class="form-group d-flex scroll mb-5">

                    <div class="">
                        <label>
                            <input type="radio" name="tipo_prenda" class="card-input-element" value="<?php echo $fila['cod_producto'] ?>">
                            <div class="panel panel-default card-input">
                                <div class="card" style="width: 15rem;">
                                    <img src="<?php echo $urlimagen.$fila['imagen'] ?>" class="card-img-top" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $fila['nombre'] ?></h5>
                                        <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>

                </div>
                <?php 
                }
                ?>

                <div>
                    <h2>Diseños</h2>
                </div>
                <?php
                while ($fila = $diseno -> fetch_assoc()) {
                    ?>

                <div class="form-group d-flex scroll mb-5">

                    <div class="">
                        <label>
                            <input type="radio" name="disenio" class="card-input-element" value="<?php echo $fila['cod_diseño'] ?>">

                            <div class="panel panel-default card-input">
                                <div class="card" style="width: 15rem;">
                                    <img src="<?php echo $urlimagen.$fila['imagen'] ?>" class="card-img-top" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $fila['nombre'] ?></h5>
                                        <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>

                </div>
                <?php 
                }
                ?>

                <div>
                    <h2>Fondos</h2>
                </div>
                <?php
                while ($fila = $fondo -> fetch_assoc()) {
                    ?>

                <div class="form-group d-flex scroll mb-5">

                    <div class="">
                        <label>
                            <input type="radio" name="fondo" class="card-input-element" value="<?php echo $fila['cod_fondo'] ?>">

                            <div class="panel panel-default card-input">
                                <div class="card" style="width: 15rem;">
                                    <img src="<?php echo $urlimagen.$fila['imagen'] ?>" class="card-img-top" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $fila['nombre'] ?></h5>
                                        <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>

                </div>
                <?php 
                }
                ?>

                <div>
                    <h2>Flor</h2>
                </div>

                <?php
                while ($fila = $flor -> fetch_assoc()) {
                    ?>

                <div class="form-group d-flex scroll mb-5">

                    <div class="">
                        <label>
                            <input type="radio" name="flor" class="card-input-element" value="<?php echo $fila['cod_flor'] ?>">

                            <div class="panel panel-default card-input">
                                <div class="card" style="width: 15rem;">
                                    <img src="<?php echo $urlimagen.$fila['imagen'] ?>" class="card-img-top" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $fila['nombre'] ?></h5>
                                        <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>

                </div>

                <?php 
                }
                ?>
                


                <div class="form-group mb-5">

                    <h2>Frase</h2>

                    <input type="text" class="form-control" name="frase">

                </div>

                <div class="form-group">

                    <h2>Talla</h2>

                    <select name="talla" id="talla" class="form-control">
                        <option value="" disabled selected> - Seleccione una talla </option>
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>

                </div>

                <div class="mt-3 d-flex">
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-color"> Enviar cotización </button>
                    </div>
                </div>

            </form>

        </div>
    </section>





    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-left text-center copy">Atipika © 2020</div>
                <div class="col-lg-6 my-3 my-lg-0 text-lg-center text-center">
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-3 text-lg-center text-center contac">
                    <h3 class="contac"><a href="#">Contáctenos</a></h3>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>