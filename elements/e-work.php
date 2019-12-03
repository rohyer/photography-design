<?php
$args = array(
    'category_name' => 'work'
);
?>

<section id="work" class="section-site">
    <div class="container-custom">
        <div class="row">
            <div class="col-12">
                <h5>Our latest work</h5>
                <h4>Portfolio</h4>
            </div>

            <ul id="work-menu" class="col-12 d-flex justify-content-center">
                <li id="work-menu-all" class="work-menu-selected">All</li>
                <li id="work-menu-photography"><?php echo get_theme_mod( 'first_work_section' ); ?></li>
                <li id="work-menu-design"><?php echo get_theme_mod( 'second_work_section' ); ?></li>
            </ul>

            <ul id="work-post">
            <?php 
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
            ?>
                <li id="post-<?php the_ID(); ?>" class="work-post">
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