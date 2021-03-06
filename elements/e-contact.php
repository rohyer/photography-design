<section id="contact" class="section-site">
    <div class="container-custom">
        <div class="row">
            <div class="col-12">
                <h4>Contact</h4>
            </div>

            <div class="d-none d-lg-block col-lg-3" id="section-contact-datas">
                <?php $facebook = get_theme_mod("facebook", 0); ?>
                <?php $instagram = get_theme_mod("instagram", 0); ?>
                <?php $twitter = get_theme_mod("twitter", 0); ?>
                <?php $linkedin = get_theme_mod("linkedin", 0); ?>

                <p><?php echo get_theme_mod( 'email' ); ?></p>
                <p><?php echo get_theme_mod( 'telefone' ); ?></p>

                <?php $hide_contact_whatsapp = get_theme_mod("hide_contact_whatsapp", 0); ?>
                <?php if ($hide_contact_whatsapp !== '') { ?>
                <p><i class="fab fa-whatsapp"></i><?php echo get_theme_mod( 'whatsapp' ); ?></p>
                <?php } ?>
                
                <?php if ($facebook != '') { ?>
                    <a href="<?php echo get_theme_mod( 'facebook' ); ?>">
                    <i class="fab fa-facebook-f"></i></a>
                <?php } ?>
                <?php if ($instagram != '') { ?>
                    <a href="<?php echo get_theme_mod( 'instagram' ); ?>">
                    <i class="fab fa-instagram"></i></a>
                <?php } ?>
                <?php if ($linkedin != '') { ?>
                    <a href="<?php echo get_theme_mod( 'linkedin' ); ?>">
                    <i class="fab fa-linkedin-in"></i></a>
                <?php } ?>
                <?php if ($twitter != '') { ?>
                    <a href="<?php echo get_theme_mod( 'twitter' ); ?>">
                    <i class="fab fa-twitter"></i></a>
                <?php } ?>
            </div>

            <div class="col-12 col-lg-9" id="section-contact-form">
                <?php echo do_shortcode('[contact-form-7 id="31" title="Formulário de contato 1"]'); ?>
            </div>
        </div>
    </div>
</section>