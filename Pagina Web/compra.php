<?php
    $host="host=localhost";
    $port="port=5432";
    $dbname="dbname=papeleria";
    $user="user=postgres";
    $password="password=12345";
    
    $bd = pg_connect("$host $port $dbname $user $password");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Compra | Papelerias Grafito´s Co.</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/arriba.js"></script>
</head>
<body>
    <span class="ir-arriba icon-arriba"></span>
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 class="logo"><br>Grafito´s  Co.</h1><br><br>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="./index.html" class="menu__link">Inicio</a></li>
                <li class="menu__item"><a href="proveedores.php" class="menu__link">Proveedores</a></li>
                <li class="menu__item"><a href="clientes.html" class="menu__link menu__link--select">Compra</a></li>
                <li class="menu__item"><a href="inventario.php" class="menu__link">Inventario</a></li>
                <li class="menu__item"><a href="ventas.php" class="menu__link">Ventas</a></li>
                <li class="menu__item"><a href="categorias.php" class="menu__link">Categorias de Productos</a></li>
            </ul>
            
        </div>
    </nav>
    
    <section class="banner">
        <img src="img/fondo8.jpg" alt="" class="banner__img">
        <div class="banner__content">
            COMPRA
        </div>
    </section>
    
    <main class="main">
        <section class="group our-team">
            <div class="container container--flex"> 
                <p style= "line-height: 30px; text-align: center" class="main__txt">
                    <br><br>Bienvenido<br><br>
                    Para realizar una compra llena los campos correspondientes a los datos que se te solicitan a continuación, cuando termines da click en el campo de realizar compra que se encuentra en la parte inferior.<br><br>
                    
                                        
                    <section class="form-register">    
                        <form action="#" method="POST">   
                            <h4>Introduce tus datos</h4>
                            <input class="controls" type="text" name= "RazonSocial" id="RazonSocial" placeholder="Ingrese su Razón Social"><br>
                            <input class="controls" type="text" name= "Nombre" id="Nombre" placeholder="Ingrese su Nombre"><br>
                            <input class="controls" type="text" name= "ApellidoPaterno" id="ApellidoPaterno" placeholder="Ingrese eu Apellido Paterno"><br>
                            <input class="controls" type="text" name= "ApellidoMaterno" id="ApellidoMaterno" placeholder="Ingrese su Apellido Materno"><br>
                            <input class="controls" type="text" name= "Estado" id="Estado" placeholder="Ingrese su Estado"><br>
                            <input class="controls" type="text" name= "Calle" id="Calle" placeholder="Ingrese su Calle"><br>
                            <input class="controls" type="text" name= "CodigoPostal" id="Codigo Postal" placeholder="Ingrese su Codigo Postal"><br>
                            <input class="controls" type="text" name= "Colonia" id="Colonia" placeholder="Ingrese su Colonia"><br>
                            <input class="controls" type="text" name= "Numero" id="Numero" placeholder="Ingrese su Número"><br>
                            <p>Estoy de acuerdo con <a href="#">Términos y condiciones</a></p><br>
                            <input class="botons" type="submit" name="enviar" id="enviar" value="Registrar datos"><br><br><br><br><br><br>
                        </form>
                    </section>
                    
                    <section class="form-register">    
                        <form action="#" method="POST">
                            <h4>Compra</h4>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Introduce la Razón Social del cliente y el número de venta<br><br>
                            <input class="controls" type="text" name= "RazonSocial1" id="RazonSocial1" placeholder="Ingrese Razón Social"><br>
                            <input class="controls" type="text" name= "NumeroVenta" id="NumeroVenta" placeholder="Ingrese el número de venta con el formato VENT-001"><br>
                            <input class="controls" type="text" name= "CodigoVenta" id="CodigoVenta" placeholder="Ingrese el código de venta"><br>
                            <input class="controls" type="date" name= "Fecha" id="Fecha" placeholder="Ingrese la fecha con formato AAAA-MM-DD"><br><br><br>
                            <h4>Selecciona los productos  y la cantidad a comprar</h4>
                            <select class="controls">
                                <option disabled selected="" class="controls">Seleccione el producto</option>
                                <optgroup label="Articulos de papeleria" class="controls">
                                    <option class="controls" name="libreta" value="638274562987">Libreta pasta gruesa</option>
                                    <option class="controls" name="628827389208">Lápiz</option>
                                    <option class="controls" name="748392643926">Goma</option>
                                    <option class="controls" name="748392654782">Colores - 12 Piezas</option>
                                </optgroup>
                                <optgroup label="Regalos" class="controls">
                                    <option class="controls" name="738426439263">Perfume</option>
                                    <option class="controls" name="736547265378">Vajilla</option>
                                    <option class="controls" name="836583926478">Muñeca Barbie</option>
                                </optgroup>
                                <optgroup label="Recargas" class="controls">
                                    <option class="controls" name="100367392643">Telcel - $100</option>
                                    <option class="controls" name="200367392643">Telcel - $200</option>
                                    <option class="controls" name="500367392643">Telcel - $500</option>
                                    <option class="controls" name="100377392643">AT&T - $100</option>
                                    <option class="controls" name="200377392643">AT&T - $200</option>
                                    <option class="controls" name="500377392643">AT&T - $500</option>
                                    <option class="controls" name="100387392643">Movistar - $100</option>
                                    <option class="controls" name="200387392643">Movistar - $200</option>
                                    <option class="controls" name="500387392643">Movistar - $500</option>
                                </optgroup>
                                <optgroup label="Impresiones" class="controls">
                                    <option class="controls" name="946462874093">Blanco/Negro</option>
                                    <option class="controls" name="946364739264">Color</option>
                                </optgroup>
                            </select>
                            <input class="controls" type="text" name= "CodigoBarras" id="CodigoBarras" placeholder="Ingrese el codigo de barras del producto"><br>
                            <input class="controls" type="number" name= "Cantidad1" id="Cantidad1" placeholder="Ingrese la cantidad de unidades"><br>
                            <br><br>
                            <input class="botons" type="submit" name="enviar1" id="enviar1" value="Realizar compra"><br><br>
                            <p>¡Gracias por tu compra!</p>
                        </form>
                    </section>
                    <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para generar el ticket de la compra que realizó de click en el siguiente boton.<br><br>
                    <section class="group group--color">
                        <div class="container container--cues">
                            <a href="javascript:abrir()" class="btn btn--contact">Generar ticket</a> 
                        </div>
                    </section>
                    
                    <div class="ventana" id="open">
                        <div id="cerrar">
                            <a href="javascript:cerrar()"><img src="img/cerrar.png"></a>
                        </div>
                        Ticket de compra<br><br>
                        <div class="tabla">
                            <table>
                                <tr>
                                    <th>Fecha de compra</th>
                                    <th>Número de venta</th>
                                    <th>Razón Social</th>
                                    <th>Producto</th>
                                    <th>Precio de producto</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                </tr>
                                <?php
                                    $consulta = "select fecha,num_venta,razon_social_cliente,descripcion,precio_art,cantidad_art,precio_total from ventas as ven join producto_vendido as pv on ven.num_venta=pv.num_venta_ventas
                                    join productos as prod on prod.cod_barras_inventario=pv.cod_barras_inventario
                                    where num_venta='VENT-001'";
                                    $ejecutarConsulta = pg_query($bd,$consulta);
                                    $verFilas = pg_num_rows($ejecutarConsulta);
                                    $fila = pg_fetch_array($ejecutarConsulta);
                                
                                    if(!$ejecutarConsulta){
                                        echo "Error en la consulta";
                                    }else{
                                        if($verFilas < 1){
                                            echo "<tr><td>Sin Registros</td></tr>";
                                        }else{
                                            for($i=0; $i<=$fila; $i++){
                                                echo '
                                                    <tr>
                                                        <td>'.$fila[0].'</td>
                                                        <td>'.$fila[1].'</td>
                                                        <td>'.$fila[2].'</td>
                                                        <td>'.$fila[3].'</td>
                                                        <td>'.$fila[4].'</td>
                                                        <td>'.$fila[5].'</td>
                                                        <td>'.$fila[6].'</td>                                                      
                                                    </tr>
                                                ';
                                                $fila = pg_fetch_array($ejecutarConsulta);
                                            }
                                        }
                                    }
                                ?>
                            </table>    
                        </div>
                    </div>                    
                </p> 
            </div>
        </section>
    </main>
    <footer class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">¿Qué es la UNAM?</h2>
                    <p class="column__txt">Es la institución de educación más importante de México, desde su fundación ha sido el arquetipo de la educación universitaria en el país.</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Proyecto</h2>
                    <p class="column__txt">Bases de Datos<br><br>
                        Ing. Fernando Arreola Franco<br><br>Grupo 1</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Todas las secciones</h2>
                    <p class="column__txt"><a href="proveedores.php" class="icon-punto">Proveedores</a></p>
                    <p class="column__txt"><a href="clientes.html" class="icon-punto">Clientes</a></p>
                    <p class="column__txt"><a href="inventario.php" class="icon-punto">Inventario</a></p>
                    <p class="column__txt"><a href="ventas.php" class="icon-punto">Ventas</a></p>
                    <p class="column__txt"><a href="categorias.php" class="icon-punto">Categorías de productos</a></p>
                </div>
                <p class="copy">©2021 Papelerias Grafito´s Co. | Todos los derechos reservados</p>
            </div>
        </footer> 
    <script>
        function abrir(){
            document.getElementById("open").style.display="block";
        }
        function cerrar(){
            document.getElementById("open").style.display="none";
        }
    </script>
    <script src="js/menu.js"></script>
</body>
</html>

<?php
    if(isset($_POST['enviar']))
            {
                $RazonSocial= $_POST["RazonSocial"]; 
                $Nombre= $_POST["Nombre"]; 
                $ApPat= $_POST["ApellidoPaterno"]; 
                $ApMat= $_POST["ApellidoMaterno"]; 
                $Estado= $_POST["Estado"]; 
                $Calle= $_POST["Calle"]; 
                $Cp= $_POST["CodigoPostal"]; 
                $Colonia= $_POST["Colonia"]; 
                $Numero= $_POST["Numero"];

                $sql="insert into cliente values ('$RazonSocial', '$Nombre', '$ApPat', 
                '$ApMat', '$Estado', '$Calle', '$Cp', '$Colonia', '$Numero')";
                
                $ejecutarInsertar = pg_query($bd,$sql);
                
                if(!$ejecutarInsertar)
                {
                    echo "Error en la linea de sql";
                }
            }

    if(isset($_POST['enviar1']))
            {
                    $RazonSocial1= $_POST["RazonSocial1"]; 
                    $NumVenta= $_POST["NumeroVenta"]; 
                    $CantArticulo= $_POST["Cantidad1"];
                    $CodVenta= $_POST["CodigoVenta"];
                    $Fecha= $_POST["Fecha"];
                    $Precio=200;
                    $Total=$Precio;
                    $CodBarras= $_POST["CodigoBarras"];
                    $sql1="insert into ventas values ('$NumVenta','$Fecha',$Total,'$RazonSocial1')";
                    $sql2="insert into producto_vendido values ($CodVenta,$CodBarras,$Precio,$CantArticulo,'$NumVenta')";
                    $ejecutarInsertar = pg_query($bd,$sql1);
                    $ejecutarInsertar = pg_query($bd,$sql2);
        
                if(!$ejecutarInsertar)
                {
                    echo "Error en la linea de sql";
                }
            }
?>