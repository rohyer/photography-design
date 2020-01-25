<section id="show" class="section-site">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main.jpg" alt=""> -->

    <!-- <div id="image-show"> -->
    <div id="welcome-phrase">
    <?php $hide_iam = get_theme_mod( "hide_iam", 0 ); ?>
    <?php $hide_weare = get_theme_mod( "hide_weare", 0 ); ?>

    <?php if ( $hide_iam === 'value1' ) { ?>
        <h2>Arts & Photography</h2><span>Hello, I'm </span><span id="design-show" class="d-p-design">designers </span><span id='photography-show' class="d-p-design">photographers</span>
    <?php } elseif ( $hide_iam === 'value2' ) { ?>
        <h2>Arts & Photography</h2><span>Hello, I am </span><span id="design-show" class="d-p-design">designers </span><span id='photography-show' class="d-p-design">photographers</span>

    <?php } elseif ( $hide_iam === 'value3' ) { ?>
        <h2>Arts & Photography</h2><span>Hello, we're </span><span id="design-show" class="d-p-design">designers </span><span id='photography-show' class="d-p-design">photographers</span>
        <span id='first-quality' class="d-p-design">creatives</span>
        <span id='second-quality' class="d-p-design">details</span>
        
    <?php } elseif ( $hide_iam === 'value4' ) { ?>
        <h2>Arts & Photography</h2><span>Hello, we are </span><span id="design-show" class="d-p-design">designers </span><span id='photography-show' class="d-p-design">photographers</span>
    <?php } ?>
    </div>
    <!-- </div> -->
</section>