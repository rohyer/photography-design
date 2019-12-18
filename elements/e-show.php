<section id="show" class="section-site">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main.jpg" alt=""> -->

    <!-- <div id="image-show"> -->
    <div id="welcome-phrase">
    <?php $hide_iam = get_theme_mod( "hide_iam", 0 ); ?>
    <?php $hide_weare = get_theme_mod( "hide_weare", 0 ); ?>
    <?php if ( $hide_iam === 'value1' ) { ?>
        <h2>Hello, I'm <br/><span id="design-show">designer </span><span id='photography-show'>photographer</span></h2>
    <?php } elseif ( $hide_iam === 'value2' ) { ?>
        <h2>Hello, I am <br/><span id="design-show">designer </span><span id='photography-show'>photographer</span></h2>
    <?php } elseif ( $hide_iam === 'value3' ) { ?>
        <h2>Hello, we're <br/><span id="design-show">designers </span><span id='photography-show'>photographers</span></h2>
    <?php } elseif ( $hide_iam === 'value4' ) { ?>
        <h2>Hello, we are <br/><span id="design-show">designers </span><span id='photography-show'>photographers</span></h2>
    <?php } ?>
    </div>
    <!-- </div> -->
</section>