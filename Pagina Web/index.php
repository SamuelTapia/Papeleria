<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Papelerias Grafito´s Co.</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bibliografia.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/arriba.js"></script>
</head>
<body>
    <?php
        require_once ('recibir.php');
        $conexion=conectarBD();
    ?>
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
                <li class="menu__item"><a href="./index.html" class="menu__link menu__link--select">Inicio</a></li>
                <li class="menu__item"><a href="proveedores.php" class="menu__link">Proveedores</a></li>
                <li class="menu__item"><a href="clientes.html" class="menu__link">Clientes</a></li>
                <li class="menu__item"><a href="inventario.php" class="menu__link">Inventario</a></li>
                <li class="menu__item"><a href="ventas.php" class="menu__link">Ventas</a></li>
                <li class="menu__item"><a href="categorias.php" class="menu__link">Categorias de Productos</a></li>
            </ul>
            
        </div>
    </nav>
    
    <section class="banner">
        <img src="img/fondo11.jpg" alt="" class="banner__img">
        <div class="banner__content">
            GRAFITO´S Co.<br><br>
            SAVE TIME, SAVE MONEY<br>
        </div>
    </section>
    
    <main class="main">
        <section class="group group--color">
            <div class="container">
              <h2 class="main__tittle">Propósito</h2> 
              <p class="main__txt">En Papelerias Grafito´s Co. buscamos ofrecerle un servicio de calidad en el cual usted pueda comprar los articulos que necesite con la seguridad de que contamos con el producto de mas alta calidad en el mercado.</p>
            </div>
        </section>
        
        <section class="group main__about__description">
            <div class="container container--flex">
                <div class="column column--50">
                    <img src="img/acerca.jpg" alt="">
                </div>
                <div class="column column--50" style="text-align: justify">
                    <h3 class="column__title">Conócenos más...</h3>
                    <p class="column__txt">Grafito´s Co. es una empresa reciente, la cual se dedica a distribuir productos de papeleria, regalos, etc, ofreciendo el mejor precio dentro del mercado.</p>
                    <a href="compra.php" class="btn btn--contact">Comprar</a>
                </div>
            </div>
        </section>
        
        <section class="group today-special">
            <br><br><br></b><h2 class="group__title">Secciones</h2>
            <div class="container container--flex">
                <div class="column column--50-25">
                    
                </div>
                <div class="column column--50-25">
                    <img src="img/proveedores.png" alt="" class="today-special__img">
                    <div class="today-special__title">Proveedores</div>
                    <a href="proveedores.php" class="btn btn--contact">Ver más</a>
                </div>
                <div class="column column--50-25">
                    <img src="img/clientes.png" alt="" class="today-special__img">
                    <div class="today-special__title">Clientes</div>
                    <a href="clientes.html" class="btn btn--contact">Ver más</a>
                </div>
                <div class="column column--50-25">
                    
                </div>
                <div class="column column--50-25">
                    <img src="img/inventario.png" alt="" class="today-special__img">
                    <div class="today-special__title">Inventario</div>
                    <a href="inventario.php" class="btn btn--contact">Ver más</a>
                </div>
                <div class="column column--50-25">
                    <img src="img/ventas.png" alt="" class="today-special__img">
                    <div class="today-special__title">Ventas</div>
                    <a href="ventas.php" class="btn btn--contact">Ver más</a>
                </div>
                
                <div class="column column--50-25">
                    <img src="img/producto.png" alt="" class="today-special__img">
                    <div class="today-special__title">Categorias de productos</div>
                    <a href="categorias.php" class="btn btn--contact">Ver más</a>
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