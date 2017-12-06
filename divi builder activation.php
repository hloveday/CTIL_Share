<?php
function dpb_all_post_types( $post_types ) {

$post_types = get_post_types();

if ( $post_types ) { // If there are any custom public post types.
 
 foreach ( $post_types as $post_type ) {
 $post_types[] ='$post_type';

return $post_types;
 }
}
}
add_filter( 'et_builder_post_types', 'dpb_all_post_types' );
?>