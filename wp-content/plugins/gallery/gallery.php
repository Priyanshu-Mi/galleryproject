<?php
/*
    Plugin Name: Gallery Plugin
    Description: Simple Gallery Image Plugin Wordpress
    Author: Priyanshu Mishra
    Version: 1.0
*/
?>

<?php  
class Gallery 
 {
    public function __construct()
    {
        add_action('init', array($this, 'cw_post_type_galleryimage'));
        add_shortcode('GALLERY_IMAGES', array($this, 'wpb_demo_shortcode'));
    }

function cw_post_type_galleryimage() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('galleryimage', 'plural'),
    'singular_name' => _x('galleryimage', 'singular'),
    'menu_name' => _x('galleryimage', 'admin menu'),
    'name_admin_bar' => _x('galleryimage', 'admin bar'),
    'add_new' => _x('Add New Galleryimage', 'add new'),
    'add_new_item' => __('Add New Galleryimage'),
    'new_item' => __('New galleryimage'),
    'edit_item' => __('Edit galleryimage'),
    'view_item' => __('View galleryimage'),
    'all_items' => __('All New Galleryimages'),
    'search_items' => __('Search galleryimage'),
    'not_found' => __('No news found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'galleryimage'),
    'has_archive' => true,
    'hierarchical' => false,
    );
    register_post_type('galleryimage', $args);
    }
    //add_action('init', 'cw_post_type_galleryimage');


function wpb_demo_shortcode($agrs) { 
    
    if ( get_query_var('paged') ) $paged = get_query_var('paged');
    if ( get_query_var('page') ) $paged = get_query_var('page');
  
    
    $query = new WP_Query( array( 'post_type' => 'galleryimage', 'paged' => $paged ) );
    
    if ( $query->have_posts() ) : ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">    
                <h4><?php  echo  $agrs['heading'];?></h4>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    
                <div class="col-md-4">
                    <div class="entry">
                            <h2 class="title"><?php the_title(); ?></h2>
                            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>">
                    <div>
                </div>
            
    <?php endwhile; wp_reset_postdata(); ?>

    <!-- show pagination here -->
    <?php else : ?>
    <!-- show 404 error here -->
    <?php endif;?>
    </div>
    </div>
    </div>    
    <?php
    }
    // register shortcode
    //add_shortcode('gallery_images', 'wpb_demo_shortcode');
}
$gallery = new Gallery();
?>