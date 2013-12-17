<?php
if ( function_exists('register_sidebars') )
    register_sidebars(3);
    

/**
 * TypeKit Fonts
 *
 * @since Theme 1.0
 */
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/fdg0rac.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }
}
add_action( 'wp_head', 'theme_typekit_inline' );


?>