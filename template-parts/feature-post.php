<?php
$categoryId = get_option('lawers_company_feature_post');
$categoryType = get_option('lawers_company_feature_post_type');
$date = get_the_date();
$args = array(
    'post_type' => 'post',
    'orderby' => $date,
    'order' => 'DESC',
    'posts_per_page' => $categoryType,
    'cat'         => $categoryId,
    'paged' => get_query_var('paged')       //permalink rewrite
);
$q = new WP_Query($args);
if ($q->have_posts()) {
    while ($q->have_posts()) {
        $q->the_post();
        require get_template_directory() . '/template-parts/content.php';
    }
}
