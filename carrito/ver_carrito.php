<?php
    include '../conexion.php';

    session_start();
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

        $sel=$conn->query("SELECT `cart_item`.`id_carrito`, `tbldiseñohechos`.`nombre` as `productos`, `cart_item`.`quantity` as `cantidad`, `cart_item`.`imagen`, `tbldiseñohechos`.`valor` as `Valor`, `tblcliente`.`nombre` as `cliente`
        FROM `cart_item` 
            LEFT JOIN `tbldiseñohechos` ON `cart_item`.`cod_diseño_hecho` = `tbldiseñohechos`.`cod_diseño_hecho` 
            LEFT JOIN `tblcliente` ON `cart_item`.`id` = `tblcliente`.`id` WHERE `cart_item`.`id` = $_SESSION[id]");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>

    <link rel="icon" type="image/png" href="../img/atipika-icon.png">

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
                            <th>Imagen</th>
                            <th>Productos</th>
                            <th>Cantidad</th>
                            <th>Valor</th>
                        </thead>
                        <?php 

                        $cont=0;
                        while ($fila = $sel -> fetch_assoc()) {
                            //VARIABLES DEL ARRAY PARA EL CORREO
                            $productos[$cont]['prenda']=$fila['productos'];
                            $productos[$cont]['cantidad']=$fila['cantidad'];
                            $productos[$cont]['valor']=$fila['Valor'];
                        ?>
                        <tr>
                            <td><img style="width: 130px; height:150px;" src="<?php echo $urlimagen.$fila['imagen'] ?>" alt="<?php echo $fila['productos'] ?>"></td>
                            <td><?php echo $fila['productos'] ?></td>
                            <td><?php echo $fila['cantidad'] ?></td>
                            <td><?php echo $fila['Valor'] ?></td>
                            <td><a href="#" onclick="preguntar(<?php echo $fila['id_carrito']?>)"><button class="btn btn-color">Quitar</button></a></td>
                        </tr>
                        <?php
                            $cont++;
                        }
                        if (isset($productos)){
                            //VARIABLE DE SESION PARA EL CORREO
                            $_SESSION['productos']=$productos;
                        }else{
                            $_SESSION['productos']=0;
                        }
                        ?>
                    </table>
                    <!-- <form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
                      <input type="image" border="0" alt="" src="http://www.payulatam.com/img-secure-2015/boton_pagar_grande.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
                      <input name="buttonId" type="hidden" value="affFD8p0FpSuX8vKp0YtD466VeK5l2asFLU8jiUWhY7VhFt6iSD4cg=="/>
                      <input name="merchantId" type="hidden" value="688863"/>
                      <input name="accountId" type="hidden" value="691748"/>
                      <input name="description" type="hidden" value="predas"/>
                      <input name="referenceCode" type="hidden" value="0123"/>
                      <input name="amount" type="hidden" value="26000.00"/>
                      <input name="tax" type="hidden" value="0.00"/>
                      <input name="taxReturnBase" type="hidden" value="0.00"/>
                      <input name="shipmentValue" value="16000.00" type="hidden"/>
                      <input name="currency" type="hidden" value="COP"/>
                      <input name="lng" type="hidden" value="es"/>
                      <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
                      <input name="buttonType" value="SIMPLE" type="hidden"/>
                      <input name="signature" value="b64684f563f87ac51e9cea0ec249c5886ffd00a0e8da893ca940a0e5fe23acdb" type="hidden"/>
                    </form> -->
                    <a class="btn btn-color" href="enviar_pedido.php">Confirmar pedido</a>
                </div>
            </div>
        </div>
            



        </div>
    </div>


    <div class="my-5">
    </div>

    <footer class="footer py-4 fixed-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-left text-center copy">Atipika © <script>document.write(new Date().getFullYear());</script></div>
                <div class="col-lg-6 my-3 my-lg-0 text-lg-center text-center">
                    <a class="redes btn btn-social mx-3" href="https://cutt.ly/gjg4kjS" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a class="redes btn btn-social mx-3" href="wa.link/vtu4ai" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="redes btn btn-social mx-3" href="https://www.instagram.com/atipika_oficial/?hl=es-la"
                        target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-3 text-lg-center text-center contac">
                    <h3 class="contac"><a href="<?php echo $URL ?>vistas/contactenos/contacto.php" >Contáctenos</a></h3>
                </div>
            </div>
        </div>
    </footer> 

    <!-- pregunta antes de eliminar sweat alert -->
    <script type="text/javascript">
            function preguntar(id){
            Swal
                .fire({
                    title: "¿Eliminar el diseño?",
                    text: "¿Estas seguro de eliminar el item del carrito?",
                    icon: 'error',            
                    showCancelButton: true,
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar",
                })
                .then(resultado => {
                    if (resultado.value) {
                        // Hicieron click en "Sí"
                        //console.log("*se elimina la venta*");
                        window.location.href="eliminar_item.php?id_carrito="+id
                    } else {
                        // Dijeron que no
                        console.log("*NO se elimina*");
                    }
                });

            }
        </script>


        <?php
        if(isset($_GET['msg'])){
            if($_GET['msg']==1){
        ?>

        <script>
            Swal.fire({
                icon: 'error',
                title: 'Excelente...',
                text: 'carrito vaCIO',
            
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