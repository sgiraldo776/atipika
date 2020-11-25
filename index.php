<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atipika</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilo.css">
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
                    <a class="nav-link" href="vistas/nosotros/nosotros.php">Nosotros</a>
                    <!-- <a class="nav-link" href="Cliente/login/frm_login.php">Iniciar Sesion</a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vistas/servicios/servicios.php">Servicios</a>
                </li>
                <div class="btn-group">
                    <button type="button" class="btn btn-invi dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        Ingresar
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <a href="Cliente/login/frm_login.php"><button class="dropdown-item" type="button">Iniciar Sesión</button></a>
                        <a href="Cliente/usuario/form_cliente.php"><button class="dropdown-item" type="button">Registrarse</button></a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>

    <section class="mt-5 mb-5">
        <div class="container text-center">
            <div class="img-titulo text-center">
                <img class="img-tit" src="img/logo-01.png" alt="">
            </div>
        </div>
    </section>

    <section>
        <div class="container destacado">
            <div class="text-center ">
                <h1>Destacado</h1>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-lg-4 col-sm-12 text-center">
                    <h3>Destacado 1</h1>
                    
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 text-center">
                    <h3>Destacado 2</h1>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 text-center">
                    <h3>Destacado 3</h1>
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