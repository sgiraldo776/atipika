<?php
    include '../conexion.php';

    session_start();
    $id=$_SESSION['id'];
        if(!isset($_SESSION['rol'])){
            include '../../includes/header/header_inicio.php';
        }else{
            if($_SESSION['rol'] !=1 ){
                if($_SESSION['rol'] =2 ){
                    include '../includes/header/header_usuario.php';
                }else {
                    include '../includes/header/header_inicio.php';
                }
            }else {
                include '../includes/header/header_admin.php';
            }            
        }

        $sel=$conn->query("SELECT `cart_item`.`id_carrito`, `tbldiseñohechos`.`nombre` as `productos`, `cart_item`.`quantity` as `cantidad`, `tbldiseñohechos`.`valor` as `Valor`, `tblcliente`.`nombre` as `cliente`
        FROM `cart_item` 
            LEFT JOIN `tbldiseñohechos` ON `cart_item`.`cod_diseño_hecho` = `tbldiseñohechos`.`cod_diseño_hecho` 
            LEFT JOIN `tblcliente` ON `cart_item`.`id` = `tblcliente`.`id` WHERE `cart_item`.`id` = $_SESSION[id]");

    
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
        

        <div class="container">
                <h1 class="mt-4">Carrito de compras</h1>
                <div class="mt-4">
                    <table class="table table-hover">
                        <thead class="thead">
                            <th>Carrito</th>
                            <th>Productos</th>
                            <th>Cantidad</th>
                            <th>Valor</th>
                        </thead>
                        <?php 
                        while ($fila = $sel -> fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $fila['id_carrito'] ?></td>
                            <td><?php echo $fila['productos'] ?></td>
                            <td><?php echo $fila['cantidad'] ?></td>
                            <td><?php echo $fila['Valor'] ?></td>
                            <td><a href="#" onclick="preguntar(<?php echo $fila['cod_diseño']?>)"><button class="btn btn-color">Quitar</button></a></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <button class="btn btn-color">Reservar</button>
                </div>
            </div>
        </div>
            



        </div>
    </div>

    <?php
        include ('../includes/footer/footer.php');
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