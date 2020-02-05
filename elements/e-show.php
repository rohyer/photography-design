<section id="show" class="section-site">
    <a href="https://br.freepik.com/fotos-vetores-gratis/fundo" alt="Fundo foto criado por v.ivash - br.freepik.com" target="__black" style="position: absolute; width: 20px; height: 20px; "></a>
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main.jpg" alt=""> -->

    <div id="welcome-phrase">
    <?php $hide_iam = get_theme_mod( "hide_iam", 0 ); ?>
    <?php $main_work = get_theme_mod( "main_work", 0 ); ?>
    <?php $secondary_work = get_theme_mod( "secondary_work", 0 ); ?>
    <?php $first_quality = get_theme_mod( "first_quality", 0 ); ?>
    <?php $second_quality = get_theme_mod( "second_quality", 0 ); ?>

    <h2><?php echo get_theme_mod( 'name_company' ) ?></h2>
    <?php if ( $hide_iam === 'value1' ) { ?>
        <span>Hello, I'm </span>

        <?php if ( $main_work != '') { ?>
            <span id="design-show" class="d-p-design"><?php echo get_theme_mod( 'main_work' ); ?> </span>
        <?php } ?>

        <?php if ( $secondary_work != '') { ?>
            <span id='photography-show' class="d-p-design"><?php echo get_theme_mod( 'secondary_work' ); ?></span>
        <?php } ?>

        <?php if ( $first_quality != '') { ?>
            <span id='first-quality' class="d-p-design"><?php echo get_theme_mod( 'first_quality' ); ?></span>
        <?php } ?>
        
        <?php if ( $second_quality != '') { ?>
            <span id='second-quality' class="d-p-design"><?php echo get_theme_mod( 'second_quality' ); ?></span>
        <?php } ?>

    <?php } elseif ( $hide_iam === 'value2' ) { ?>
        <span>Hello, we're </span>

        <?php if ( $main_work != '') { ?>
            <span id="design-show" class="d-p-design"><?php echo get_theme_mod( 'main_work' ); ?> </span>
        <?php } ?>

        <?php if ( $secondary_work != '') { ?>
            <span id='photography-show' class="d-p-design"><?php echo get_theme_mod( 'secondary_work' ); ?></span>
        <?php } ?>

        <?php if ( $first_quality != '') { ?>
            <span id='first-quality' class="d-p-design"><?php echo get_theme_mod( 'first_quality' ); ?></span>
        <?php } ?>
        
        <?php if ( $second_quality != '') { ?>
            <span id='second-quality' class="d-p-design"><?php echo get_theme_mod( 'second_quality' ); ?></span>
        <?php } ?>

    <?php } ?>
    </div>
</section>