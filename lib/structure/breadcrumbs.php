<?php


//remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
// add_action( 'genesis_after_header', 'genesis_do_breadcrumbs' );


//* Modify breadcrumb arguments.
add_filter( 'genesis_breadcrumb_args', 'ygf_breadcrumb_args' );
function ygf_breadcrumb_args( $args ) {
        global $post;
	$args['home'] = __('Welcome', 'genesis-foundation-child-theme');
	$args['sep'] = ' > ';
return $args;
}

/*
*
* Add a specific custom post type archive to breadcrumbs
*
 */
// add_filter( 'genesis_archive_crumb', 'ygf_add_cpt_crumb', 10, 2 );

function ygf_add_cpt_crumb( $crumb, $args ) {
	if ( is_post_type_archive('cpt' ))
		return '<a href="' . get_permalink( 'cpt->ID' ) . '">' . get_the_title( 'cpt->ID' ) .'</a> ' . $args['sep'] . ' ' . $crumb;
	else
		return $crumb;
}
