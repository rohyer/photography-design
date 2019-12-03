<footer>
    <div class="container-custom">
        <div class="row">
            <div class="footer-datas col-4 d-flex justify-content-center">
                <span>
                    <i class="fas fa-phone"></i>
                    <p><?php echo get_theme_mod( 'telefone' ) ?></p>
                    
                    <?php $hide_footer_whatsapp = get_theme_mod("hide_footer_whatsapp", 0); ?>
                    <?php if ($hide_footer_whatsapp !== '') { ?>
                    <p><i class="fab fa-whatsapp"></i><?php echo get_theme_mod( 'whatsapp' ) ?></p>
                    <?php } ?>
                </span>
            </div>
            <div class="footer-datas col-4 d-flex justify-content-center">
                <span>
                    <i class="fas fa-map-marker-alt"></i>
                    <p><?php echo get_theme_mod( 'location_street_section' ) ?></p>
                    <p><?php echo get_theme_mod( 'location_country_section' ) ?></p>
                </span>
            </div>
            <div class="footer-datas col-4 d-flex justify-content-center">
                <span>
                    <i class="fas fa-envelope"></i>
                    <p><?php echo get_theme_mod( 'email' ) ?></p>
                </span>
            </div>

            <div class="footer-datas col-12 d-flex justify-content-center">
                <span>
                    <h6><?php echo get_theme_mod( 'name_company' ) ?></h6>
                </span>
            </div>

            <div id="footer-social-media" class="col-12 d-flex justify-content-center">
                <span>
                    <a href="<?php echo get_theme_mod( 'facebook' ) ?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo get_theme_mod( 'instagram' ) ?>"><i class="fab fa-instagram"></i></a>
                    <a href="<?php echo get_theme_mod( 'twitter' ) ?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?php echo get_theme_mod( 'linkedin' ) ?>"><i class="fab fa-linkedin-in"></i></a>
                </span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>