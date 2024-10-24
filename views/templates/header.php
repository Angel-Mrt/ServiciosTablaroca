    <header class="header <?php echo $inicio ? 'header--inicio' : ''; ?> ">
        <div class="header__contenedor ">
            <div class="header__barra">
                <a href="/">
                    <h1 class="header__logo">
                        Serv.<span class="header__logo header__logo--bold">TBR</span>
                    </h1>
                </a>

                <div class="header__mobile-menu">
                    <!--   <img src="../build/img/barras.svg" alt="icono menu responsive"> -->
                </div>
                <div class="header__derecha">

                    <!-- <img src="../build/img/dark-mode.svg" class="dark-mode-boton" alt="Boton Modo Oscuro"> -->
                    <nav class="header__navegacion">
                        <a href="/servicios">Servicios</a>
                        <a href="/proyectos">Proyectos</a>
                        <a href="/nosotros">Sobre Nosotros</a>
                        <a href="/contacto">Contacto</a>
                        <?php //if ($auth) : 
                        ?>
                        <!-- <a href="/logaut">Cerrar Sesión</a> -->
                        <?php // endif 
                        ?>
                    </nav>
                </div>


            </div> <!--Barra-->
            <?php if ($inicio) { ?>
                <h1 class="header__leyenda">Soluciones de tablaroca. Contactanos y pide tu cotizacion gratis. </h1>
            <?php } ?>
        </div><!---->
    </header>