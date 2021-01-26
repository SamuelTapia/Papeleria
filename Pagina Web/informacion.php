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
    <title>Información de Clientes | Papelerias Grafito´s Co.</title>
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
                <li class="menu__item"><a href="clientes.html" class="menu__link menu__link--select">Información</a></li>
                <li class="menu__item"><a href="inventario.php" class="menu__link">Inventario</a></li>
                <li class="menu__item"><a href="ventas.php" class="menu__link">Ventas</a></li>
                <li class="menu__item"><a href="categorias.php" class="menu__link">Categorias de Productos</a></li>
            </ul>
            
        </div>
    </nav>
    
    <section class="banner">
        <img src="img/fondo8.jpg" alt="" class="banner__img">
        <div class="banner__content">
            INFORMACIÓN DE CLIENTES
        </div>
    </section>
    
    <main class="main">
        <section class="group our-team">
            <div class="container container--flex"> 
                <p style= "line-height: 30px; text-align: center" class="main__txt">
                    <section class="group group--color">
                        <div class="container">
                          <h2 class="main__tittle">Grafito´s Co.</h2> 
                        </div>
                    </section>
                    <div class="tabla">
                                        <table>
                                            <tr>
                                                <th>Razón Social</th>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Estado</th>
                                                <th>Calle</th>
                                                <th>Código Postal</th>
                                                <th>Colonia</th>
                                                <th>Número</th>
                                            </tr>
                                <?php
                                                $consulta = "select * from cliente";
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
                                                                    <td>'.$fila[7].'</td>
                                                                    <td>'.$fila[8].'</td>
                                                                </tr>
                                                            ';
                                                            $fila = pg_fetch_array($ejecutarConsulta);
                                                        }
                                                    }
                                                }
                                            ?>
                            </table>    
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
    <script src="js/menu.js"></script>
</body>
</html>