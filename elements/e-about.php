<?php
$args = array(
    'category_name' => 'about us'
);

$query = new WP_Query( $args );
if ( $query->have_posts() ) {
    $query->the_post();
}
?>

<section id="about" class="section-site">
    <div class="container-custom">
        <div class="row">
            <div class="col-12">
                <h5><?php the_title(); ?></h5>
                <h4>About us</h4>
            </div>

            <div class="col-12">
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</section>