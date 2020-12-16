<?php


    /* session_start();
    if (!isset($_SESSION['rol'])){
        echo "<script> location.href='../index.php'; </script>";

    }else{
        if($_SESSION['rol']!=1){
            echo "<script> location.href='../index.php'; </script>";
        }
    } */

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Administracion Atipika</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        

        <!-- Custom styles for this template -->
        <link href="simple-sidebar.css" rel="stylesheet">

        <link href="../css/style.css" rel="stylesheet">

        <!-- Sweet alerts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    </head>

    <body>

        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Atipika
                </div>
                <div class="list-group list-group-flush">
                    <a href="producto.php" class="list-group-item list-group-item-action bg-light">Producto</a>
                    <a href="tipo_producto.php" class="list-group-item list-group-item-action bg-light">Tipo producto</a>
                    <a href="diseño.php" class="list-group-item list-group-item-action bg-light">Diseño</a>
                    <a href="flor.php" class="list-group-item list-group-item-action bg-light">Flor</a>
                    <a href="fondo.php" class="list-group-item list-group-item-action bg-light">Fondo</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-admin toggled" id="menu-toggle"><i class="fas fa-bars"></i></button>

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Inicio
                                    <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                Tipo Producto
            <!-- /#page-content-wrapper -->


            <div class="container-fluid">
                    <h1 class="mt-4">Ingresar Tipo producto</h1>
                    <form action="controlador/ingresar_tproducto.php" name="add_form" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nombre:</label>
                                <input type="text" id="pregunta" name="nombre" class="form-control" placeholder="nombre del diseño" required>
                        </div>
                        <div class="form-group">
                            <label> Imagen</label>
                                <input type="file" name="img1" required>
                        </div>
                        <div class="form-group text-center mb-5">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
            </div>

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
    </script>


    <!-- pregunta antes de eliminar sweat alert -->
    <script type="text/javascript">
            function preguntar(id){
            Swal
                .fire({
                    title: "¿Eliminar el sitio turistico?",
                    text: "¿Estas seguro de eliminar el sitio?",
                    icon: 'error',            
                    showCancelButton: true,
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar",
                })
                .then(resultado => {
                    if (resultado.value) {
                        // Hicieron click en "Sí"
                        //console.log("*se elimina la venta*");
                        window.location.href="controlador/eliminar_sitio.php?Cod_Sitio="+id
                    } else {
                        // Dijeron que no
                        console.log("*NO se elimina*");
                    }
                });

            }
        </script>

    </body>

</html>