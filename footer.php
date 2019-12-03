<footer>
    <div class="container-custom">
        <div class="row">
            <div class="footer-datas col-4 d-flex justify-content-center">
                <span>
                    <i class="fas fa-phone"></i>
                    <p><?php echo get_theme_mod( 'telefone_section' ) ?></p>
                </span>
            </div>
            <div class="footer-datas col-4 d-flex justify-content-center">
                <span>
                    <i class="fas fa-map-marker-alt"></i>
                    <p><?php echo get_theme_mod( 'location_street_section' ) ?></p>
                    <p><?php echo get_theme_mod( 'location_country_section' ) ?></p>
                </span>

                <!-- <h6>Contato</h6>
                <li> <span>Email: </span> <a href="#"><?php echo get_theme_mod( 'email_section' ) ?></a></li>
                <li> <span><?php echo get_theme_mod( 'contact_2_section_name' ) ?> </span> <a href="#"><?php echo get_theme_mod( 'contact_2_section' ) ?></a></li>
                <li> <span>Tel: </span> <a href="#"><?php echo get_theme_mod( 'telefone_section' ) ?></a></li>
                <li> <span> <?php echo get_theme_mod( 'contact_1_section_name' ) ?> </span> <a href="#"><?php echo get_theme_mod( 'contact_1_section' ) ?></a></li> -->
            </div>
            <div class="footer-datas col-4 d-flex justify-content-center">
                <span>
                    <i class="fas fa-envelope"></i>
                    <p><?php echo get_theme_mod( 'email_section' ) ?></p>
                </span>
            </div>

            <div class="footer-datas col-12 d-flex justify-content-center">
                <span>
                    <h6><?php echo get_theme_mod( 'name_section' ) ?></h6>
                </span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>