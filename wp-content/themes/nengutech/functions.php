<?php 
/**
 * Nengu tech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nengutech.com
 * @subpackage Nengutech
 * @since Nengutech 1.0
 */
 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );


function show_template() {
  global $template;
  return basename($template);
}


function get_breadcrumb() {
  echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
  if (is_category() || is_single()) {
      echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
      the_category(' &bull; ');
          if (is_single()) {
              echo "<h2>";
              the_title();
              echo "</h2>";
          }
  } elseif (is_page()) {
      echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
      echo the_title();
  } elseif (is_search()) {
      echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
      echo '"<em>';
      echo the_search_query();
      echo '</em>"';
  }
}


wp_enqueue_script("gforms_ui_datepicker", WP_PLUGIN_URL . "/gravityforms/js/jquery-ui/ui.datepicker.js", array("jquery"), "1.3.9", true);

wp_enqueue_script("gforms_datepicker", WP_PLUGIN_URL . "/gravityforms/js/datepicker.js", array("gforms_ui_datepicker"), "1.3.9", true);

wp_enqueue_script("gforms_conditional_logic_lib", WP_PLUGIN_URL . "/gravityforms/js/conditional_logic.js", array("gforms_ui_datepicker"), "1.3.9", true);

wp_enqueue_style("gforms_css", WP_PLUGIN_URL . "/gravityforms/css/forms.css");



add_filter( 'gform_submit_button', 'add_custom_css_classes', 10, 2 );
function add_custom_css_classes( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $classes = $input->getAttribute( 'class' );
    $classes .= " site-btn";
    $input->setAttribute( 'class', $classes );
    return $dom->saveHtml( $input );
}
 
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active-menu ';
  }
  return $classes;
}

function sendLeadToPerfex(){
  
  $request = array(
    'source' => '1',
    'status'  => '1',
    'assigned' => '2',
    'name'    => 'test lead',
    'email' => 'test@test.com',
    'phonenumber' => '214-555-5555'

  );

  $url = "https://office.nengu.tech/api/leads";
  $ch = curl_init($url);
  $options = array(
    CURLOPT_RETURNTRANSFER => true,         // return web page
    CURLOPT_HEADER         => false,        // don't return headers
    CURLOPT_FOLLOWLOCATION => false,         // follow redirects
    CURLOPT_ENCODING       => "utf-8",           // handle all encodings
    CURLOPT_AUTOREFERER    => true,         // set referer on redirect
    CURLOPT_CONNECTTIMEOUT => 20,          // timeout on connect
    CURLOPT_TIMEOUT        => 20,          // timeout on response
    CURLOPT_POST            => 1,            // i am sending post data
    CURLOPT_POSTFIELDS     => $request,    // this are my post vars
    CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
    CURLOPT_SSL_VERIFYPEER => false,        //
    CURLOPT_VERBOSE        => 1,
    CURLOPT_HTTPHEADER     => array(
        "authtoken: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoid2Vic2l0ZSIsIm5hbWUiOiJ3ZWJzaXRlIiwicGFzc3dvcmQiOm51bGwsIkFQSV9USU1FIjoxNTk5NDQyODQ1fQ.alDH4TGdmjWKkRdDYulW7mjnHthJPfsEb9xc1487hBE",
        "Content-Type: application/json"
    )

);

  curl_setopt_array($ch,$options);
  $data = curl_exec($ch);
  $curl_errno = curl_errno($ch);
  $curl_error = curl_error($ch);
  echo $curl_errno;
  echo $curl_error;
  curl_close($ch);
  var_dump($data);
}
//sendLeadToPerfex();;

/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Programs', 'Post Type General Name', 'twentytwenty' ),
          'singular_name'       => _x( 'Program', 'Post Type Singular Name', 'twentytwenty' ),
          'menu_name'           => __( 'Programs', 'twentytwenty' ),
          'parent_item_colon'   => __( 'Parent Program', 'twentytwenty' ),
          'all_items'           => __( 'All Programs', 'twentytwenty' ),
          'view_item'           => __( 'View Program', 'twentytwenty' ),
          'add_new_item'        => __( 'Add New Program', 'twentytwenty' ),
          'add_new'             => __( 'Add New', 'twentytwenty' ),
          'edit_item'           => __( 'Edit Program', 'twentytwenty' ),
          'update_item'         => __( 'Update Program', 'twentytwenty' ),
          'search_items'        => __( 'Search Program', 'twentytwenty' ),
          'not_found'           => __( 'Not Found', 'twentytwenty' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
      );
       
  // Set other options for Custom Post Type
       
      $args = array(
          'label'               => __( 'program', 'twentytwenty' ),
          'description'         => __( 'Program news and reviews', 'twentytwenty' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          'taxonomies'          => array( 'genres' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */ 
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          'show_in_rest' => true,
          'taxonomies'          => array( 'category' )
          
      );
       
      // Registering your Custom Post Type
      register_post_type( 'programs', $args );
   
  }
   
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
   
  add_action( 'init', 'custom_post_type', 0 );





  /*
 * Function for post duplication. Dups appear as drafts. User is redirected to the edit screen
 */
function rd_duplicate_post_as_draft(){
  global $wpdb;
  if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
    wp_die('No post to duplicate has been supplied!');
  }
 
  /*
   * Nonce verification
   */
  if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
    return;
 
  /*
   * get the original post id
   */
  $post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
  /*
   * and all the original post data then
   */
  $post = get_post( $post_id );
 
  /*
   * if you don't want current user to be the new post author,
   * then change next couple of lines to this: $new_post_author = $post->post_author;
   */
  $current_user = wp_get_current_user();
  $new_post_author = $current_user->ID;
 
  /*
   * if post data exists, create the post duplicate
   */
  if (isset( $post ) && $post != null) {
 
    /*
     * new post data array
     */
    $args = array(
      'comment_status' => $post->comment_status,
      'ping_status'    => $post->ping_status,
      'post_author'    => $new_post_author,
      'post_content'   => $post->post_content,
      'post_excerpt'   => $post->post_excerpt,
      'post_name'      => $post->post_name,
      'post_parent'    => $post->post_parent,
      'post_password'  => $post->post_password,
      'post_status'    => 'draft',
      'post_title'     => $post->post_title,
      'post_type'      => $post->post_type,
      'to_ping'        => $post->to_ping,
      'menu_order'     => $post->menu_order
    );
 
    /*
     * insert the post by wp_insert_post() function
     */
    $new_post_id = wp_insert_post( $args );
 
    /*
     * get all current post terms ad set them to the new post draft
     */
    $taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
    foreach ($taxonomies as $taxonomy) {
      $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
      wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
    }
 
    /*
     * duplicate all post meta just in two SQL queries
     */
    $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
    if (count($post_meta_infos)!=0) {
      $sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
      foreach ($post_meta_infos as $meta_info) {
        $meta_key = $meta_info->meta_key;
        if( $meta_key == '_wp_old_slug' ) continue;
        $meta_value = addslashes($meta_info->meta_value);
        $sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
      }
      $sql_query.= implode(" UNION ALL ", $sql_query_sel);
      $wpdb->query($sql_query);
    }
 
 
    /*
     * finally, redirect to the edit post screen for the new draft
     */
    wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
    exit;
  } else {
    wp_die('Post creation failed, could not find original post: ' . $post_id);
  }
}
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
 
/*
 * Add the duplicate link to action list for post_row_actions
 */
function rd_duplicate_post_link( $actions, $post ) {
  if (current_user_can('edit_posts')) {
    $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
  }
  return $actions;
}
 
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );
