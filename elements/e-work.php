<?php
$args_design = array(
    'category_name' => 'design-work'
);

$args_photography = array(
    'category_name' => 'photography-work'
);
?>

<section id="work" class="section-site">
    <div class="container-custom">
        <div class="row">
            <div class="col-12">
                <h5>Our latest work</h5>
                <h4>Portfolio</h4>
            </div>

            <?php $first_work_section = get_theme_mod("first_work_section", 0); ?>
            <?php $second_work_section = get_theme_mod("second_work_section", 0); ?>

            <?php if ($first_work_section != '' && $second_work_section != ''){ ?>
            <ul id="work-menu" class="col-12 d-flex justify-content-center">
                <li id="work-menu-all" class="work-menu-selected">All</li>
                <li id="work-menu-photography"><?php echo get_theme_mod( 'first_work_section' ); ?></li>
                <li id="work-menu-design"><?php echo get_theme_mod( 'second_work_section' ); ?></li>
            </ul>
            <?php } ?>

            <ul id="work-photography-design" class="d-flex justify-content-center">
                <?php 
                $query_photography = new WP_Query( $args_photography );
                if ( $query_photography->have_posts() ) {
                    while ( $query_photography->have_posts() ) {
                        $query_photography->the_post();
                ?>
                    <li id="post-<?php the_ID(); ?>" <?php post_class('work-post') ?>>
                        <div class="work-title">
                            <span><?php the_title(); ?></span>
                        </div>
                        <div class="work-open-img">
                            <button><i class="fas fa-search"></i></button>
                        </div>
                        <div class="work-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </li>
                <?php
                    }
                }
                ?>

                <?php 
                $query_design = new WP_Query( $args_design );
                if ( $query_design->have_posts() ) {
                    while ( $query_design->have_posts() ) {
                        $query_design->the_post();
                ?>
                    <li id="post-<?php the_ID(); ?>" <?php post_class('work-post') ?>>
                        <div class="work-title">
                            <span><?php the_title(); ?></span>
                        </div>
                        <div class="work-open-img">
                            <button><i class="fas fa-search"></i></button>
                        </div>
                        <div class="work-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </li>
                <?php
                    }
                }
                ?>
            </ul>

            
        </div>
    </div>
</section>