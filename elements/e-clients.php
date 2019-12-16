<?php
$args = array(
    'category_name' => 'clients'
);
?>

<section id="clients" class="section-site">
    <div class="container-custom">
        <div class="row">
            <!-- <div class="col-12">
                <h4>Our clients feedback</h4>
            </div> -->

            <div class="col-12">
                <ul class="owl-carousel owl-theme">
                <?php
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                ?>
                <li id="post-<?php the_ID(); ?>" class="clients-post">
                    <div class="clients-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="clients-content">
                        <span><?php the_title(); ?></span>
                        <p><?php the_content() ?></p>
                    </div>
                </li>
                <?php
                    }
                }
                ?>
                </ul>
            </div>
        </div>
    </div>
</section>