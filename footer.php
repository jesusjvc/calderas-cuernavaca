<?php
/**
 * The template for displaying the footer
 *
 */
?>
    <?php if ( woodmart_needs_footer() ): ?>
    <?php if ( ! woodmart_is_woo_ajax() ): ?>
    </div>
    <!-- .main-page-wrapper -->
    <?php endif ?>
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    <?php
		$page_id = woodmart_page_ID();
		$disable_prefooter = get_post_meta( $page_id, '_woodmart_prefooter_off', true );
		$disable_footer_page = get_post_meta( $page_id, '_woodmart_footer_off', true );
		$disable_copyrights_page = get_post_meta( $page_id, '_woodmart_copyrights_off', true );
	?>
        <?php if ( ! $disable_prefooter && woodmart_get_opt( 'prefooter_area' ) ): ?>
        <div class="woodmart-prefooter">
            <div class="container">
                <?php echo do_shortcode( woodmart_get_opt( 'prefooter_area' ) ); ?>
            </div>
        </div>
        <?php endif ?>

        <!-- FOOTER -->
        <footer id="contacto" class="footer-container color-scheme-<?php echo esc_attr( woodmart_get_opt( 'footer-style' ) ); ?>">

            <div class="contacto contenedor blanco">
               
               <img class="titulo-contacto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/inicio/contactanos.png" alt="Contactanos">
                <div class="flex">
                    <div class="columna">
                       
                          <div class="correo">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/mail.png" alt="correo electrónico">
                           <a href="mailto:recepcionyventas@calderascuernavaca.com">recepcionyventas@calderascuernavaca.com</a>
                       </div>
                       
                        <?php
                           echo do_shortcode('[caldera_form id="CF588fa9af331c6"]');
                        ?>
                    </div>
                    <div class="columna">
                       <div class="mapa">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15096.270954314603!2d-99.242121!3d18.9283956!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e7e17acfdf20b48!2sCalderas+De+Curnavaca!5e0!3m2!1ses-419!2smx!4v1521736185642" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                       </div>
                    </div>
                </div>
            </div>



            <div class="sub-footer">
                <div class="contenedor">
                    <div class="flex">
                        <div class="columna">
                            <div class="flex bloque">
                                <div class="columna">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/horario.png" alt="">
                                </div>
                                <div class="columna">
                                    <div class="texto"><h4>Horarios de atención</h4>Lunes a Sábado de 8am a 5pm</div>
                                </div>
                            </div>
                        </div>
                        <div class="columna">
                            <div class="flex bloque">
                                <div class="columna">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/tel.png" alt="">

                                </div>
                                <div class="columna">
                                    <div class="texto">777 244 1676 <br> 777 311 1820</div>
                                </div>
                            </div>
                        </div>
                        <div class="columna">
                            <div class="flex bloque">
                                <div class="columna">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/whatsapp-logo.svg" alt="">
                                </div>
                                <div class="columna">
                                    <a href="https://api.whatsapp.com/send?phone=527772891698">
                                        <div class="texto">777 289 1698</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </footer>
        <?php endif ?>
        </div>
        <!-- end wrapper -->
        <div class="woodmart-close-side"></div>
        <?php wp_footer(); ?>
        </body>

        </html>
