<?php

// PrettyPhoto rel
//add_filter('wp_get_attachment_link', 'ygf_add_rel_attribute');
function ygf_add_rel_attribute($link) {
  global $post;
  return str_replace('<a href', '<a rel="prettyPhoto[pp_gal]" href', $link);
}

// PrettyPhto ajax
//add_filter('the_content', 'ygf_ajax_rel_attribute');
function ygf_ajax_rel_attribute($content) {
    global $post;
    if($post->ID != '91') return $content;

        return str_replace('<a href', '<a class="ajax-google-forms" rel="prettyPhoto[iframes]" href', $content);

}
