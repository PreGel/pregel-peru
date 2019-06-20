<?php
/**
* Enqueues child theme stylesheet, loading first the parent theme stylesheet.
*/
function pg_custom_enqueue_child_theme_styles() {
wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/assets/styles/style.css' );
}
add_action( 'wp_enqueue_scripts', 'pg_custom_enqueue_child_theme_styles', 999 );

// TODO
// loading development kit - redo kits for new structure
// this is because the typkit is maxed out, removing default kit id and replacing with dupe kit id - may need to move this function to child theme level for all?
function wpdocs_dequeue_script() {
   wp_dequeue_script( 'theme_typekit' );
}
add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );

function theme_typekit_child() {
      wp_enqueue_script( 'theme_typekit_child', 'https://use.typekit.net/mnx5izo.js', '', false);
  }
  add_action( 'wp_enqueue_scripts', 'theme_typekit_child' );

function theme_typekit_inline_child() {
    if ( wp_script_is( 'theme_typekit_child', 'done' ) ) { ?>
      <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <?php }
  }
  add_action( 'wp_head', 'theme_typekit_inline_child' );


//  add_action('wp_print_scripts','pg_dequeue_footer_foundation');
// function pg_dequeue_footer_foundation() {
//    wp_dequeue_script('foundation-js');
//  }
// Adding Foundation scripts file in the footer
/*function child_site_scripts() {
    wp_enqueue_script( 'new-foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), '6.2', true );
}
    add_action('wp_enqueue_scripts', 'child_site_scripts', 999);*/