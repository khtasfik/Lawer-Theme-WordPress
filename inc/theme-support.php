<?php

$options = get_option('post_formate');
// print_r($options);
$formates = ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'];
$support = array();
foreach ($formates as $formate) {
	$support[] = isset($options[$formate]) ? $formate : '';
}
if ($support) {
	add_theme_support('post-formats', $support);
}

add_theme_support('custom-header');

add_theme_support('post-thumbnails', array('post'));

// add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );

// add_theme_support( 'menus' ); 

add_theme_support('menus');
function register_my_menus()
{
	$args = array(
		'menu-1' => __('Main Menu'),
		'menu-2' => __('Footer Menu')
	);
	register_nav_menus($args);
}
add_action('init', 'register_my_menus');

add_theme_support('custom-background');

function isdb_post_meta()
{
	$posted_on = human_time_diff(get_the_time('U'), current_time('timestamp'));

	$categories = get_the_category();
	$separator = ', ';
	$output = '';
	$i = 1;

	if (!empty($categories)) :
		foreach ($categories as $category) :
			if ($i > 1) : $output .= $separator;
			endif;
			$output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr('View all posts in%s', $category->name) . '">' . esc_html($category->name) . '</a>';
			$i++;
		endforeach;
	endif;

	return '<span class="posted-on">Posted <a href="' . esc_url(get_permalink()) . '">' . $posted_on . '</a> ago</span> / <span class="posted-in">' . $output . '</span>';
}
