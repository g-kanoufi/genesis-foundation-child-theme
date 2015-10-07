<?php

add_filter( 'genesis_footer_creds_text', 'ygf_footer_creds_text' );

/**
 * Custom footer 'creds' text
 *
 * Note: Avoid adding <p> tags here, since it causes an HTML validation error in Genesis
 *
 * @since 2.0.0
 */
function ygf_footer_creds_text() {
	$org_name = genesis_get_option('organization', 'child-settings');
	 return 'Copyright [footer_copyright] <a href="https://lostwebdesigns.com">Lost Webdesign</a> - Foundesis - ' . __('A Genesis Child theme made with <span class="♥">♥</span> and Foundation 5', 'genesis-foundation-child-theme');

}
