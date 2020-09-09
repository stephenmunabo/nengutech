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


wp_enqueue_script("gforms_ui_datepicker", get_stylesheet_directory_uri() . "/gravityforms/js/jquery-ui/ui.datepicker.js", array("jquery"), "1.3.9", true);

wp_enqueue_script("gforms_datepicker", get_stylesheet_directory_uri() . "/gravityforms/js/datepicker.js", array("gforms_ui_datepicker"), "1.3.9", true);

wp_enqueue_script("gforms_conditional_logic_lib", get_stylesheet_directory_uri() . "/gravityforms/js/conditional_logic.js", array("gforms_ui_datepicker"), "1.3.9", true);

wp_enqueue_style("gforms_css", get_stylesheet_directory_uri() . "/gravityforms/css/forms.css");



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
