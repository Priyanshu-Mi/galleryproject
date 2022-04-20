<?php
$query = new WP_Query( array( 'post_type' => 'galleryimage', 'paged' => $paged ) );
    
    if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="container">
    <div class="row">
    <div class="col-md-4">
    <div class="entry">
    <h2 class="title"><?php the_title(); ?></h2>
    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>">
    <div>
    </div>
    </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
    <!-- show pagination here -->
    <?php else : ?>
    <!-- show 404 error here -->
    <?php endif;
    ?>