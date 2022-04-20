<?php
/*
    Plugin Name: General Page Plugin
    Description: Simple General Page Plugin Wordpress
    Author: Priyanshu Mishra
    Version: 1.0
*/
?>
<?php
class GeneralPage 
{
   public function __construct()
   {
       add_action('init', array($this, 'create_all_pages'));
       
   }

    function create_page($title_of_the_page,$content,$parent_id = NULL ) 
    {
        $objPage = get_page_by_title($title_of_the_page, 'OBJECT', 'page');
        if( ! empty( $objPage ) )
        {
            //echo "Page already exists:" . $title_of_the_page . "<br/>";
            return $objPage->ID;
        }
        
        $page_id = wp_insert_post(
                array(
                'comment_status' => 'close',
                'ping_status'    => 'close',
                'post_author'    => 1,
                'post_title'     => ucwords($title_of_the_page),
                'post_name'      => strtolower(str_replace(' ', '-', trim($title_of_the_page))),
                'post_status'    => 'publish',
                'post_content'   => $content,
                'post_type'      => 'page',
                'post_parent'    =>  $parent_id //'id_of_the_parent_page_if_it_available'
                )
            );
       // echo "Created page_id=". $page_id." for page '".$title_of_the_page. "'<br/>";
    
        if($title_of_the_page=='Contact Us'){
            update_post_meta( $page_id, '_wp_page_template', 'contact.php' );
        }
        return $page_id;
    }

    function create_all_pages(){
        $this->create_page( 'Home Page', 'This is hoome page');
        $this->create_page( 'Contact Us', 'The contact us page');
        $this->create_page( 'About Us', 'The about us page');
        $this->create_page( 'Team', 'The team page');
        $this->create_page( 'Privacy Policy', 'Privacy Policy Page');
        $this->create_page( 'User List', 'Show User List Page'); 
    }
   
}
$gps= new GeneralPage(); 

// register_deactivation_hook( __FILE__, 'my_plugin_remove' ); 
// function my_plugin_remove() {//  the id of our page...
// $the_page_id = get_option( $page_id );
// if( $the_page_id ) {
//  wp_delete_post( $the_page_id, true );
// }
// }
?>