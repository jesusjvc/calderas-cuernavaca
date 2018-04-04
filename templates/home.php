<?php
/*Template Name: Principal */ 

get_header();

?>


    <section id="slide">
        <?php
            echo do_shortcode('[rev_slider alias="principal"]');
        ?>
    </section>

    <section id="quienes-somos" class="template-section padding-100">
        <div class="contenedor">
            <h2 class="bold">SOMOS CALDERAS <span class="amarillo block">CUERNAVACA</span></h2>



            <div class="flex">
                <div class="columna">
                    <p class="blanco">
                        Una empresa con más de 30 años de experiencia en el mantenimiento, reestructuración, actualización y automatización de calderas. También ofrecemos refacciones y venta de calderas. Para nosotros lo más importante es el confort y satisfacción de nuestros clientes.
                    </p>
                    <a href="/quienes-somos" class="boton azul">Saber más</a>
                </div>
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/nina.png" alt="">
                </div>
            </div>


        </div>
    </section>

    <section id="servicios" class="template-section">
        <div class="contenedor blanco padding-50">

            <h2 class="center"><span class="amarillo subrayado">SERVICIOS</span></h2>

            <article class="mantenimiento">
                <div class="flex">
                    <div class="columna">
                        <P>
                            Ofrecemos mantenimiento preventivo y correctivo a sus equipos de calderas, filtros de arenas, motobombas de circulación en cuarto de máquinas de su alberca, jacuzzi o chapoteadero.
                        </P>
                    </div>
                    <div class="columna">
                        <img class="img-servicio" src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/mantenimiento.png" alt="Mantenimiento de Calderas en Cuernavaca">
                    </div>

                </div>


                <div class="frase">
                    <p>¡Disfruta de tu alberca, con seguridad y confort!</p>
                    <a href="#" class="boton azul center">ME INTERESA</a>
                </div>
            </article>

            <article class="reestructuracion">
                <div class="flex">
                    <div class="columna">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/restructuracion.png" alt="Reestructuración, actualización, automatización y ahorro de gas">
                    </div>
                    <div class="columna">
                        <p>
                            Somos los únicos en el país que ofrecemos la implementación, reestructuración, actualización, automatización, para lograr un ahorro del 20% en gas L.P. o natural para calderas MASTERCALL. Además esta reestructuración permite actualizar los equipos y dejarlos seminuevos, prolongando la vida útil de los mismos.
                        </p>
                    </div>
                </div>

                <div class="frase">
                    <p>¡Vale la pena ahorrar, sin sacrificar la calidad y el confort!</p>
                    <a href="#" class="boton azul center">ME INTERESA</a>
                </div>
            </article>



        </div>
    </section>





    <section id="venta" class="template-section">
        <div class="contenedor blanco padding-50">
            <h2 class="center subrayado"><span class="amarillo">VENTA, INSTALACIÓN Y PUESTA EN MARCHA</span></h2>

            <div class="flex triple">
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/1.png" alt="Refacciones">
                    <p>Refacciones calderas y equipos auxiliares</p>
                    <a href="#" class="boton azul center">Me interesa</a>
                </div>
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/2.png" alt="Calderas para Vapor">
                    <p>Calderas para vapor tipo industrial, comercial y para la zona hotelera</p>
                    <a href="" class="boton azul center">Me interesa</a>
                </div>
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/3.png" alt="Generadores de Vapor en Gas LP">
                    <p>Generadores de vapor en gas L.P.  o natural y eléctricos para la zona residencial, comercial y hotelera</p>
                    <a href="" class="boton azul center">Me interesa</a>
                </div>
            </div>
        </div>
    </section>



    <?php
get_footer();
?>
