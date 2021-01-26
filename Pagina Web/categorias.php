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
    <title>Categorias | Papelerias Grafito´s Co.</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bibliografia.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/arriba.js"></script>
</head>
<body>
    <span class="ir-arriba icon-arriba"></span>
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 class="logo">Grafito´s  Co.</h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__phone">
                    <br><span class="icon-usuario">Suárez Román Clara Alin</span><br>
                    <br><span class="icon-usuario">Tapia Solis Samuel Alejandro</span><br><br>
                </p>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="./index.html" class="menu__link">Inicio</a></li>
                <li class="menu__item"><a href="proveedores.php" class="menu__link">Proveedores</a></li>
                <li class="menu__item"><a href="clientes.html" class="menu__link">Clientes</a></li>
                <li class="menu__item"><a href="inventario.php" class="menu__link">Inventario</a></li>
                <li class="menu__item"><a href="ventas.php" class="menu__link">Ventas</a></li>
                <li class="menu__item"><a href="categorias.php" class="menu__link menu__link--select">Categorias de Productos</a></li>
            </ul>
            
        </div>
    </nav>
    
    <section class="banner">
        <img src="img/fondo.jpg" alt="" class="banner__img">
        <div class="banner__content">
            CATEGORIAS DE PRODUCTOS
        </div>
    </section>
    
    <main class="main">
        <section class="group our-team">
            <div class="container container--flex"> 
                <p style= "line-height: 30px; text-align: center" class="main__txt">
                    <br><br><br>Si deseas saber la utilidad de uno de los productos de las categorias mostradas a continuación, introduce el código de barras en el campo correspondiente.<br>
                    
                    <section class="group group--color">
                        <div class="container container--cues">
                            Grafito´s Co. 
                        </div>
                    </section>
                    
                    <section class="form-register">    
                        <form action="javascript:abrir()" method="POST">   
                            <h4>Introduce el código de barras</h4>
                                <input class="controls" type="text" name= "CodigoBarras" id="CodigoBarras" placeholder="Ingrese el código de barras"><br>
                                <input class="botons" type="submit" name="send" id="send" value="Consultar"><br><br>
                        </form>
                    </section>
                    
                   
                    <div class="tabla" style:"text-align: center">
                    
                    <table>
                        <tr>
                            <th>Código de Barras</th>
                            <th>Producto</th>
                            <th>Precio de compra</th>
                            <th>Precio de venta</th>
                            <th>Utilidad</th>
                        </tr>
                    <?php
                                $consulta = "select cod_barras,descripcion,precio_compra,precio,'La utilidad es:', precio - precio_compra from inventario as inv full outer join productos as pro on inv.cod_barras=pro.cod_barras_inventario";
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
    <script src="js/menu.js"></script>
</body>
</html>

