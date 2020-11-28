<?php

// Admin Page

function law_adviser_admin_page()
{
    add_menu_page('Lawers Theme Options', 'Lawers', 'manage_options', 'lawers-advise', 'law_adviser_theme_create_page', get_template_directory_uri() . '/img/law.png', 67);

    add_submenu_page('lawers-advise', 'Lawers Theme Options', 'General', 'manage_options', 'lawers-advise', 'law_adviser_theme_create_page');

    add_submenu_page('lawers-advise', 'Lawers Theme Home Setting', 'Home', 'manage_options', 'lawers-advise-home', 'law_adviser_theme_home_page');

    add_submenu_page('lawers-advise', 'Lawers Theme Contact Page', 'Contact', 'manage_options', 'lawers-advise-contact', 'law_adviser_theme_contact_page');

    add_submenu_page('lawers-advise', 'Lawers Theme About Page', 'About', 'manage_options', 'lawers-advise-about', 'law_adviser_theme_about_page');

    add_submenu_page('lawers-advise', 'Lawers Theme Attorney Page', 'Attorney', 'manage_options', 'lawers-advise-attorney', 'law_adviser_theme_attorney_page');

    add_submenu_page('lawers-advise', 'Lawers Theme Practice Page', 'Practice', 'manage_options', 'lawers-advise-practice', 'law_adviser_theme_practice_page');

    add_submenu_page('lawers-advise', 'Lawers Theme Blog Page', 'Blog', 'manage_options', 'lawers-advise-blog', 'law_adviser_theme_blog_page');

    // add_submenu_page('lawers-advise', 'Lawers Theme Price Page', 'Price', 'manage_options', 'lawers-advise-price', 'law_adviser_theme_price_page');

    add_action('admin_init', 'lawers_custome_settings');
}

// add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', int $position = null )

add_action('admin_menu', 'law_adviser_admin_page');

function law_adviser_theme_create_page()
{
    require_once get_template_directory() . '/inc/templates/lawers-admin.php';
}

function law_adviser_theme_home_page()
{
    require_once get_template_directory() . '/inc/templates/lawers-home.php';
}

function law_adviser_theme_contact_page()
{
    require_once get_template_directory() . '/inc/templates/lawers-contact.php';
}

function law_adviser_theme_about_page()
{
    require_once get_template_directory() . '/inc/templates/lawers-about.php';
}

function law_adviser_theme_attorney_page()
{
    require_once get_template_directory() . '/inc/templates/lawers-attorney.php';
}

function law_adviser_theme_practice_page()
{
    require_once get_template_directory() . '/inc/templates/lawers-practice.php';
}

function law_adviser_theme_blog_page()
{
    require_once get_template_directory() . '/inc/templates/lawers-blog.php';
}

// function law_adviser_theme_price_page()
// {
//     require_once get_template_directory() . '/inc/templates/lawers-price.php';
// }


function lawers_custome_settings()
{
    // Register Setting for General Page
    register_setting('lawers-setting-group', 'lawers_advise_title_name');
    register_setting('lawers-setting-group', 'lawers_advise_tag');
    register_setting('lawers-setting-group', 'lawers_wordpress_url');
    register_setting('lawers-setting-group', 'lawers_upload_img');
    register_setting('lawers-setting-group', 'post_formate');
    register_setting('lawers-setting-group', 'main_slider');
    register_setting('lawers-setting-group', 'slider_title');
    register_setting('lawers-setting-group', 'slider_caption');
    register_setting('lawers-setting-group', 'slider_indecator');
    register_setting('lawers-setting-group', 'slider_button');

    // Register Setting for Home Page
    register_setting('lawers-Home-setting', 'lawers_from');
    register_setting('lawers-Home-setting', 'lawers_media_title');
    register_setting('lawers-Home-setting', 'lawers_media_caption');
    register_setting('lawers-Home-setting', 'lawers_media_flaticon');
    register_setting('lawers-Home-setting', 'lawers_media_flaticon_button');
    register_setting('lawers-Home-setting', 'lawers_company_name');
    register_setting('lawers-Home-setting', 'lawers_company_title');
    register_setting('lawers-Home-setting', 'lawers_company_url');
    register_setting('lawers-Home-setting', 'lawers_company_overview');
    register_setting('lawers-Home-setting', 'lawers_company_img');
    register_setting('lawers-Home-setting', 'lawers_company_help_intro');
    register_setting('lawers-Home-setting', 'lawers_company_help_intro_overview');
    register_setting('lawers-Home-setting', 'lawers_company_help_intro_overview_img');
    register_setting('lawers-Home-setting', 'lawers_company_help_intro_title');
    register_setting('lawers-Home-setting', 'lawers_company_help_intro_description');
    register_setting('lawers-Home-setting', 'lawers_company_help_intro_flacticon');
    register_setting('lawers-Home-setting', 'lawers_company_testimony');
    register_setting('lawers-Home-setting', 'lawers_company_testimony_main_title');
    register_setting('lawers-Home-setting', 'lawers_company_testimony_main_description');
    register_setting('lawers-Home-setting', 'lawers_company_testimony_body_description');
    register_setting('lawers-Home-setting', 'lawers_company_testimony_body_user');
    register_setting('lawers-Home-setting', 'lawers_company_testimony_body_designation');
    register_setting('lawers-Home-setting', 'lawers_company_testimony_body_img');
    register_setting('lawers-Home-setting', 'lawers_company_attorney');
    register_setting('lawers-Home-setting', 'lawers_company_attorney_main_title');
    register_setting('lawers-Home-setting', 'lawers_company_attorney_main_description');
    register_setting('lawers-Home-setting', 'lawers_company_attorney_name');
    register_setting('lawers-Home-setting', 'lawers_company_attorney_designation');
    register_setting('lawers-Home-setting', 'lawers_company_attorney_description');
    register_setting('lawers-Home-setting', 'lawers_company_attorney_image');
    register_setting('lawers-Home-setting', 'lawers_company_contact');
    register_setting('lawers-Home-setting', 'lawers_company_contact_title');
    register_setting('lawers-Home-setting', 'lawers_company_contact_phone');
    register_setting('lawers-Home-setting', 'lawers_company_contact_fax');
    register_setting('lawers-Home-setting', 'lawers_company_contact_address');
    register_setting('lawers-Home-setting', 'lawers_company_contact_email');
    register_setting('lawers-Home-setting', 'lawers_company_feature_post');
    register_setting('lawers-Home-setting', 'lawers_company_feature_post_type');


    // Register Setting for Contact Page

    register_setting('lawers-Contact-setting', 'lawers_advise_contact_img');
    register_setting('lawers-Contact-setting', 'lawers_advise_contact_information');
    register_setting('lawers-Contact-setting', 'lawers_advise_contact_information_address');
    register_setting('lawers-Contact-setting', 'lawers_advise_contact_information_phone');
    register_setting('lawers-Contact-setting', 'lawers_advise_contact_information_email');
    register_setting('lawers-Contact-setting', 'lawers_advise_contact_information_domain');
    register_setting('lawers-Contact-setting', 'lawers_advise_contact_from');

    // Register Setting for About Page

    register_setting('lawers-about-setting', 'lawers_advise_about_img');
    register_setting('lawers-about-setting', 'lawers_advise_about_main_title');
    register_setting('lawers-about-setting', 'lawers_advise_about_Main_description');
    register_setting('lawers-about-setting', 'lawers_advise_about_main_img');
    register_setting('lawers-about-setting', 'lawers_advise_about_help_title');
    register_setting('lawers-about-setting', 'lawers_advise_about_help_img');
    register_setting('lawers-about-setting', 'lawers_advise_about_help_font_title');
    register_setting('lawers-about-setting', 'lawers_advise_about_help_details');
    register_setting('lawers-about-setting', 'lawers_advise_about_help_fonticon');

    // Register Setting for Attorney Page

    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_img');
    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_main_title');
    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_main_description');
    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_body_img');
    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_body_user_name');
    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_body_user_title');
    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_body_user_description');
    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_body_user_facebook');
    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_body_user_twitter');
    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_body_user_google');
    register_setting('lawers-attorney-setting', 'lawers_advise_attorney_body_user_instagram');

    // Register Setting for Practice Page  

    register_setting('lawers-practice-setting', 'lawers_advise_practice_img');
    register_setting('lawers-practice-setting', 'lawers_advise_practice_body_img');
    register_setting('lawers-practice-setting', 'lawers_advise_practice_body_title');
    register_setting('lawers-practice-setting', 'lawers_advise_practice_body_description');

    // Register Setting for Blog Page 
    register_setting('lawers-blog-setting', 'lawers_advise_blog_img');
    register_setting('lawers-blog-setting', 'lawers_advise_blog_background_title');
    register_setting('lawers-blog-setting', 'lawers_advise_blog_background_short_title');
    register_setting('lawers-blog-setting', 'lawers_advise_blog_body_title');
    register_setting('lawers-blog-setting', 'lawers_advise_blog_body_short_title');
    register_setting('lawers-blog-setting', 'lawers_advise_blog_body_description');

    // Add settings section for General Page
    add_settings_section('lawers-sidebar-options', '<font face = "WildWest" size =" 5">General Setting</font>', 'lawers_sidebar_option', 'lawers-advise');

    // Add settings section for Home Page
    add_settings_section('lawers-home-setting', '<font face = "WildWest" size =" 5">Home Setting</font>', 'lawers_home_option', 'lawers-advise-home');

    // Add settings section for Contact Page
    add_settings_section('lawers-Contact-setting', '<font face = "WildWest" size =" 5">Contact Page Setting</font>', 'lawers_contact_option', 'lawers-advise-contact');

    // Add settings section for About Page
    add_settings_section('lawers-about-setting', '<font face = "WildWest" size =" 5">About Page Setting</font>', 'lawers_about_option', 'lawers-advise-about');

    // Add settings section for Attorney Page
    add_settings_section('lawers-attorney-setting', '<font face = "WildWest" size =" 5">Attorney Page Setting</font>', 'lawers_attorney_option', 'lawers-advise-attorney');

    // Add settings section for Practice Page
    add_settings_section('lawers-practice-setting', '<font face = "WildWest" size =" 5">Practice Page Setting</font>', 'lawers_practice_option', 'lawers-advise-practice');

    // Add settings section for Blog Page
    add_settings_section('lawers-blog-setting', '<font face = "WildWest" size =" 5">Blog Page Setting</font>', 'lawers_blog_option', 'lawers-advise-blog');

    // Add settings section for Price Page
    // add_settings_section('lawers-price-setting', '<font face = "WildWest" size =" 5">Price Page Setting</font>', 'lawers_price_option', 'lawers-advise-price');

    // add_settings_field( string $id, string $title, callable $callback, string $page, string $section = 'default', array $args = array() )

    // add_settings_field for General Page
    add_settings_field('lawers-title', '<font face = "Comic sans MS" size =" 3">Site Title</font>', 'lawers_advise_title', 'lawers-advise', 'lawers-sidebar-options');
    add_settings_field('lawers-tag-line', '<font face = "Comic sans MS" size =" 3">Tagline</font>', 'lawers_advise_tag_line', 'lawers-advise', 'lawers-sidebar-options');
    add_settings_field('lawers-wordpress-url', '<font face = "Comic sans MS" size =" 3">WordPress Address (URL)</font>', 'lawers_advise_wordpress_url', 'lawers-advise', 'lawers-sidebar-options');
    add_settings_field('lawers-upload-image', '<font face = "Comic sans MS" size =" 3">Upload Logo</font>', 'lawers_advise_upload_img', 'lawers-advise', 'lawers-sidebar-options');
    add_settings_field('lawers-upload-post-formate', '<font face = "Comic sans MS" size =" 3">Post</font>', 'lawers_advise_post_formate', 'lawers-advise', 'lawers-sidebar-options');
    add_settings_field('lawers-upload-main-slider', '<font face = "Comic sans MS" size =" 3">Main Slider</font>', 'lawers_advise_main_slider', 'lawers-advise', 'lawers-sidebar-options');

    // add_settings_field for Home Page
    add_settings_field('lawers-home-from', '<font face = "Comic sans MS" size =" 3">Email Form</font>', 'lawers_home_from_setting', 'lawers-advise-home', 'lawers-home-setting');
    add_settings_field('lawers-home-media-body', '<font face = "Comic sans MS" size =" 3">Media Body</font>', 'lawers_home_media_body', 'lawers-advise-home', 'lawers-home-setting');
    add_settings_field('lawers-home-company', '<font face = "Comic sans MS" size =" 3">Company Overview</font>', 'lawers_home_company_field', 'lawers-advise-home', 'lawers-home-setting');
    add_settings_field('lawers-home-company-help-intro', '<font face = "Comic sans MS" size =" 3">Company Help Introduction</font>', 'lawers_home_company_help', 'lawers-advise-home', 'lawers-home-setting');
    add_settings_field('lawers-home-company-testimony', '<font face = "Comic sans MS" size =" 3">Company Testimony</font>', 'lawers_home_company_testimony', 'lawers-advise-home', 'lawers-home-setting');
    add_settings_field('lawers-home-company-attorney', '<font face = "Comic sans MS" size =" 3">Company Attorney Details</font>', 'lawers_home_company_attorney', 'lawers-advise-home', 'lawers-home-setting');
    add_settings_field('lawers-home-company-contact', '<font face = "Comic sans MS" size =" 3">Company Contact Information</font>', 'lawers_home_company_contact', 'lawers-advise-home', 'lawers-home-setting');
    add_settings_field('lawers-home-company-post', '<font face = "Comic sans MS" size =" 3">Blog post</font>', 'lawers_home_company_post', 'lawers-advise-home', 'lawers-home-setting');

    // add_settings_field for Contact Page
    add_settings_field('lawers-Contact-page', '<font face = "Comic sans MS" size =" 3">Contact Image Upload</font>', 'lawers_contact_main_image', 'lawers-advise-contact', 'lawers-Contact-setting');
    add_settings_field('lawers-Contact-Information-page', '<font face = "Comic sans MS" size =" 3">Contact Information</font>', 'lawers_contact_information', 'lawers-advise-contact', 'lawers-Contact-setting');
    add_settings_field('lawers-Contact-Information-from', '<font face = "Comic sans MS" size =" 3">Contact Information Form</font>', 'lawers_contact_information_from', 'lawers-advise-contact', 'lawers-Contact-setting');

    // add_settings_field for About Page
    add_settings_field('lawers-About-Background-img', '<font face = "Comic sans MS" size =" 3">Background Image Section</font>', 'lawers_about_background_img', 'lawers-advise-about', 'lawers-about-setting');
    add_settings_field('lawers-About-Overview', '<font face = "Comic sans MS" size =" 3">Company Overview Section</font>', 'lawers_about_overview', 'lawers-advise-about', 'lawers-about-setting');
    add_settings_field('lawers-About-Help-Page', '<font face = "Comic sans MS" size =" 3">Company Help Section</font>', 'lawers_about_overview_help', 'lawers-advise-about', 'lawers-about-setting');

    // add_settings_field for About Page

    add_settings_field('lawers-Attorney-Page', '<font face = "Comic sans MS" size =" 3">Attorney Image Section</font>', 'lawers_attorney_page_img', 'lawers-advise-attorney', 'lawers-attorney-setting');
    add_settings_field('lawers-Attorney-Body-Page', '<font face = "Comic sans MS" size =" 3">Attorney Body Section</font>', 'lawers_attorney_body_page', 'lawers-advise-attorney', 'lawers-attorney-setting');

    // add_settings_field for Practice Page   
    add_settings_field('lawers-Practice-Page', '<font face = "Comic sans MS" size =" 3">Background Image</font>', 'lawers_practice_page', 'lawers-advise-practice', 'lawers-practice-setting');
    add_settings_field('lawers-Practice-Body-Page', '<font face = "Comic sans MS" size =" 3">Practice Body Section</font>', 'lawers_practice_body_page', 'lawers-advise-practice', 'lawers-practice-setting');

    // add_settings_field for Blog Page   
    add_settings_field('lawers-Blog-Page', '<font face = "Comic sans MS" size =" 3">Background Image</font>', 'lawers_blog_page', 'lawers-advise-blog', 'lawers-blog-setting');
    add_settings_field('lawers-Blog-Page-Info', '<font face = "Comic sans MS" size =" 3">Blog Info</font>', 'lawers_blog_info', 'lawers-advise-blog', 'lawers-blog-setting');

    // add_settings_field for Price Page   
    // add_settings_field('lawers-Price-Page', '<font face = "Comic sans MS" size =" 3">Background Image</font>', 'lawers_price_page', 'lawers-advise-price', 'lawers-price-setting');
}

function lawers_sidebar_option()
{
    // echo "<h3>Theam Options</h3>";
}

function lawers_advise_title()
{
    $title = get_option('lawers_advise_title_name');
    echo "<input type='text' name='lawers_advise_title_name' value='$title'>";
}

function lawers_advise_tag_line()
{
    $tag = get_option('lawers_advise_tag');
    echo "<input type='text' name='lawers_advise_tag' value='$tag' size='50'> <br> <p>In a few words, explain what is the about of your site.</p>";
}

function lawers_advise_wordpress_url()
{
    $url = get_option('lawers_wordpress_url');
    echo "<input type='text' name='lawers_wordpress_url' value='$url' size='50'>";
}

function lawers_advise_upload_img()
{
    $img = get_option('lawers_upload_img');
    echo "<input id='lawers_logo_field' type='text' name='lawers_upload_img' value='$img' size='40'>
    <button type='button' class='btn btn-success' id='lawers_logo_uploader'>Upload Image</button> 
    <button type='button' class='btn btn-info' id='reset_image'>Reset</button>";
}

function lawers_advise_post_formate()
{
    $options = get_option('post_formate');
    // print_r($options);
    $formates = ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'];
    foreach ($formates as $formate) {
        $checked = isset($options[$formate]) ? ' checked ' : '';
        echo "<input type='checkbox' value='1' $checked name='post_formate[$formate]'> " . ucwords($formate) . '<br>';
    }
}

function lawers_advise_main_slider()
{
    $lawerSliders = get_option('main_slider');
    $lawerSlidersTitle = get_option('slider_title');
    $lawerSlidersCaption = get_option('slider_caption');
    $lawerSlidersIndecator = get_option('slider_indecator');
    $lawerSlidersButton = get_option('slider_button');
    if ($lawerSliders) {
        foreach ($lawerSliders as $key => $lawerSlider) {
            $rand = rand(10000000, 99999999);
            echo "<div id='slider_{$rand}'>
                <div class='form-group'>
                <input type='text' name='slider_title[]' value='{$lawerSlidersTitle[$key]}' placeholder='Slider Caption'>
                </div>
                <div class='form-group'>
                <input type='text' name='slider_caption[]' value='{$lawerSlidersCaption[$key]}' placeholder='Slider Title'>
                </div>
                <div class='form-group'>
                <input type='text' id='slider_{$rand}_field' class='slider_reset' name='main_slider[]' value='{$lawerSlider}' placeholder='Slider Image'> 
                </div>
                <div class='form-group'>
                <button type='button' class='upload main_slider_button btn btn-secondary' id='slider_{$rand}_uploader'>Upload Image</button>
                </div>
                <div class='form-group'>
                <button type='button' class='reset_main_slider_button btn btn-warning' id='slider_{$rand}_uploader'>Remove</button>
                </div>
                </div>
                
            ";
        }
    } else {
        $rand = rand(10000000, 99999999);
        echo "<div id='slider_{$rand}'>
            <input type='text' id='slider_{$rand}_field' class='slider_reset' name='main_slider[]' value=''> 
            <button type='button' class='upload main_slider_button' id='slider_{$rand}_uploader'>Upload Image</button>
            
            </div>
            
        ";
    }

    $checkedButton = ($lawerSlidersButton) ? 'checked' : '';
    $checkedIndecator = ($lawerSlidersIndecator) ? 'checked' : '';

    echo "<br>";
    echo "<button class='btn btn-info' id='add_new'>Add New</button>";
    echo "<br> <br>";
    echo "<div>
            <h6>Slider Button Active</h6>
            <input type='checkbox' name='slider_button' $checkedButton value='1'> Active </div> <br>
        <div>
        <h6>Indecator Active</h6>
        <input type='checkbox' name='slider_indecator' $checkedIndecator value='1'> Active</div>
    ";

    echo "<br> <br>";
    echo "
        <table border='2' width='50' class='col-lg-10'>
            <tr>
                <td>Title</td>
                <td>Caption</td>
                <td>URL</td>
                <td>Image</td>
            </tr>";

    foreach ($lawerSliders as $key => $lawerSlider) {
        echo "
                    <tr>
                        <td>{$lawerSlidersTitle[$key]}</td>
                        <td>{$lawerSlidersCaption[$key]}</td>
                        <td></td>
                        <td><img src='{$lawerSlider}' width='60px'></td>
                    </tr>
                ";
    }

    echo "

        </table>
    ";
}

// Home Function

function lawers_home_option()
{
}

function lawers_home_from_setting()
{
    $lawerHomeFrom = get_option('lawers_from');

    $checkedFrom = ($lawerHomeFrom) ? 'checked' : '';

    echo "<div>
            <input type='checkbox' name='lawers_from' $checkedFrom value='1'> Active </div>
        <div>";
}

function lawers_home_media_body()
{
    $lawerMediatitles = get_option('lawers_media_title');
    $lawerMediacaption = get_option('lawers_media_caption');
    $lawerMediaflaticonButton = get_option('lawers_media_flaticon_button');
    if ($lawerMediatitles) {
        echo "<div class='row pr-5' id='lawers-advice-media-from'>";
        foreach ($lawerMediatitles as $key => $lawerMediatitle) {
            $checkedflaticon = ($lawerMediaflaticonButton[$key]) ? 'checked' : '';
            $iconDisplay = ($lawerMediaflaticonButton[$key]) ? '' : 'd-none';
            $rand = rand(100000000, 999999999);
            echo "
            <div id='media_body_{$rand}' class='col-md-4'>
            <div class='form-group'>
            <input type='text' name='lawers_media_title[]' value='{$lawerMediatitle}' placeholder='Media Title'>
            </div>
            <div class='form-group'>
            <textarea name='lawers_media_caption[]' placeholder='Media Caption'> $lawerMediacaption[$key] </textarea>
            </div>
            <div class='form-group'>
            <div id='media_flact_{$rand}_icon_default' class='{$iconDisplay}'>
            <input type='text' name='lawers_media_flaticon_button[]' value='{$lawerMediaflaticonButton[$key]}' readonly id='media_flacticon_{$rand}_button_field'><br>
            <img src='{$lawerMediaflaticonButton[$key]}' id='media_flacticon_{$rand}_img' width='50px' class='mt-2'>
            <span id='media_flacticon_{$rand}_text_warning' class='text-danger'>*Flacticon must be 16x16 pxel*</span><br>
            <button type='button' id='media_flacticon_{$rand}_upload_button' class='btn btn-success media_flacticon_button mt-2'>Upload Image</button>
            </div><br>
            <lavel>Flacticon</lavel>
                <input type='checkbox' $checkedflaticon id='media_flact_${rand}_default' class='media_icon'  name='lawers_media_flaticon' value='1'>
                </div>
    
            </div>";
        }
        echo "</div>";
    } else {

        $rand = rand(100000000, 999999999);
        echo "<div class='row pr-5' id='lawers-advice-media-from'>
        <div id='media_body_{$rand}' class='col-md-4'>
        <div class='form-group'>
        <input type='text' name='lawers_media_title[]' value='' placeholder='Media Title'>
        </div>
        <div class='form-group'>
        <textarea name='lawers_media_caption[]' value='' placeholder='Media Caption'> </textarea>
        </div>
        <div class='form-group'>
        <div id='media_flact_{$rand}_icon_default' class='d-none'>
        <input type='text' name='lawers_media_flaticon_button[]' readonly id='media_flacticon_{$rand}_button_field'><br>
        <img src='' id='media_flacticon_{$rand}_img' width='50px' class='mt-2'>
        <span id='media_flacticon_{$rand}_text_warning' class='text-danger'>*Flacticon must be 16x16 pxel*</span><br>
        <button type='button' id='media_flacticon_{$rand}_upload_button' class='btn btn-success media_flacticon_button mt-2'>Upload Image</button>
        </div><br>
        <lavel>Flacticon</lavel>
            <input type='checkbox' id='media_flact_${rand}_default' class='media_icon' name='lawers_media_flaticon' value='1'>
            </div>

        </div>
        </div>";
    }

    echo "<br>";
    echo "<button class='btn btn-info' id='media_add_new'>Add New</button>";
}

function lawers_home_company_field()
{

    $companyTitle = get_option('lawers_company_title');
    $companyUrl = get_option('lawers_company_url');
    $companyOverview = get_option('lawers_company_overview');
    $companyImg = get_option('lawers_company_img');

    echo "
        <div class='form-group'>
            <input type='text' name='lawers_company_title' value='$companyTitle' placeholder='Company Title' size='40'>
        </div>
        <div class='form-group'>
            <input type='text' name='lawers_company_url' value='$companyUrl' placeholder='Company Url' size='40'>
        </div>
        <div class='form-group'>
        <textarea class='form-control w-50' rows='5' name='lawers_company_overview' placeholder='Company Overview' col='80'> $companyOverview </textarea>
        </div>
        <div class='form-group'>
        <input id='lawers_company_image_fields' type='text' name='lawers_company_img' value='$companyImg' size='40'><br>
        <button type='button' class='btn btn-success mt-2' id='lawers_company_image_uploader'>Upload Image</button> 
        <button type='button' class='btn btn-info mt-2' id='company_reset_image'>Reset</button>
        </div>
    ";
}

function lawers_home_company_help()
{
    $lawersCompanyHelpIntro = get_option('lawers_company_help_intro_overview');
    $lawersCompanyHelpIntroImg = get_option('lawers_company_help_intro_overview_img');
    $lawersCompanyHelptitles = get_option('lawers_company_help_intro_title');
    $lawersCompanyHelpdescription = get_option('lawers_company_help_intro_description');
    $lawersCompanyHelpflacticon = get_option('lawers_company_help_intro_flacticon');
    echo "<div class='form-group'>
            <input type='text' name='lawers_company_help_intro_overview' value='$lawersCompanyHelpIntro' placeholder='Company Help Title'>
            </div>
            <div class='form-group'>
        <input id='lawers_company_help_img_field' type='text' name='lawers_company_help_intro_overview_img' value='$lawersCompanyHelpIntroImg' size='40'><br>
        <button type='button' class='btn btn-success mt-2' id='lawers_company_help_image'>Upload Image</button> 
        <button type='button' class='btn btn-info mt-2' id='uploader_reset_image'>Reset</button>
        </div>
    ";
    if ($lawersCompanyHelptitles) {
        echo "<div class='row pr-5' id='lawers-advice-company-from'>";
        foreach ($lawersCompanyHelptitles as $key => $lawersCompanyHelptitle) {
            $rand = rand(100000000, 999999999);
            echo "<div id='company_body_{$rand}' class='col-md-4'>
                <div class='form-group mt-2'>
                    <input type='text' name='lawers_company_help_intro_title[]' value='{$lawersCompanyHelptitle}' placeholder='Title'>
                </div>
                <div class='form-group'>
                    <textarea name='lawers_company_help_intro_description[]' placeholder='Description'> $lawersCompanyHelpdescription[$key] </textarea>
                </div>
                <div class='form-group'>
                    <input type='text' id='lawers_company_{$rand}_help_flacticon' name='lawers_company_help_intro_flacticon[]' value='{$lawersCompanyHelpflacticon[$key]}' readonly><br>
                    <button type='button' id='company_flacticon_{$rand}_upload_button' class='btn btn-success lawers_flacticon_button mt-2'>Upload Icon</button>
                </div>
            </div>";
        }

        echo "</div>";
    } else {
        $rand = rand(100000000, 999999999);
        echo "<div class='row pr-5' id='lawers-advice-company-from'>
        <div id='company_body_{$rand}' class='col-md-4'>
                <div class='form-group mt-2'>
                    <input type='text' name='lawers_company_help_intro_title[]' value='' placeholder='Title'>
                </div>
                <div class='form-group'>
                    <textarea name='lawers_company_help_intro_description[]' placeholder='Description'> </textarea>
                </div>
                <div class='form-group'>
                    <input type='text' id='lawers_company_{$rand}_help_flacticon' name='lawers_company_help_intro_flacticon[]' value='' readonly><br>
                    <button type='button' id='company_flacticon_{$rand}_upload_button' class='btn btn-success lawers_flacticon_button mt-2'>Upload Icon</button>
                    <button type='button' class='btn btn-info mt-2 intro_reset_image' id='company_intro_{$rand}_reset_image' style='display: none'>Reset</button>
                </div>
            </div>
            </div>";
    }

    echo "<br>";
    echo "<button class='btn btn-info' id='company_add_new'>Add New</button>";
}

function lawers_home_company_testimony()
{
    $testimonyTitle = get_option('lawers_company_testimony_main_title');
    $testimonyDescription = get_option('lawers_company_testimony_main_description');
    $testimonyBodyDescriptions = get_option('lawers_company_testimony_body_description');
    $testimonyBodyUser = get_option('lawers_company_testimony_body_user');
    $testimonyBodyDesignation = get_option('lawers_company_testimony_body_designation');
    $testimonyBodyImg = get_option('lawers_company_testimony_body_img');

    echo "<div class='form-group'>
        <input type='text' name='lawers_company_testimony_main_title' value='$testimonyTitle' placeholder='Testimony Title'>
        </div>
        <div class='form-group'>
        <textarea class='form-control w-50' rows='5' name='lawers_company_testimony_main_description' placeholder='Description'> $testimonyDescription </textarea>
        </div>
        ";

    if ($testimonyBodyDescriptions) {
        echo "<div class='row pr-5' id='lawers-advice-testimony-from'>";
        foreach ($testimonyBodyDescriptions as $key => $testimonyBodyDescription) {
            $rand = rand(100000000, 999999999);
            echo "<div id='company_testimony_body_{$rand}' class='col-md-4'>
                    <div class='form-group mt-2'>
                    <textarea name='lawers_company_testimony_body_description[]' placeholder='Description'> $testimonyBodyDescription </textarea>
                    </div>
                    <div class='form-group'>
                    <input type='text' name='lawers_company_testimony_body_user[]' value='$testimonyBodyUser[$key]' placeholder='Testimony User Name'>
                    </div>
                    <div class='form-group'>
                    <input type='text' name='lawers_company_testimony_body_designation[]' value='$testimonyBodyDesignation[$key]' placeholder='Testimony User Designation'>
                    </div>
                    <div class='form-group'>
                        <input type='text' id='lawers_testimony_{$rand}_body_img' name='lawers_company_testimony_body_img[]' value='$testimonyBodyImg[$key]' readonly><br>
                        <button type='button' id='company_testimony_{$rand}_upload_button' class='btn btn-success lawers_testimony_button mt-2'>Upload Image</button>
                        <button type='button' class='btn btn-info mt-2 testimony_reset_image' id='company_testimony_{$rand}_reset_image' style='display: none'>Reset</button>
                    </div>
                </div>";
        }
    } else {
        $rand = rand(100000000, 999999999);
        echo "<div id='company_testimony_body_{$rand}' class='col-md-4'>
                    <div class='form-group mt-2'>
                    <textarea name='lawers_company_testimony_body_description[]' placeholder='Description'> </textarea>
                    </div>
                    <div class='form-group'>
                    <input type='text' name='lawers_company_testimony_body_user[]' placeholder='Testimony User Name'>
                    </div>
                    <div class='form-group'>
                    <input type='text' name='lawers_company_testimony_body_designation[]' placeholder='Testimony User Designation'>
                    </div>
                    <div class='form-group'>
                        <input type='text' id='lawers_testimony_{$rand}_body_img' name='lawers_company_testimony_body_img[]' readonly><br>
                        <button type='button' id='company_testimony_{$rand}_upload_button' class='btn btn-success lawers_testimony_button mt-2'>Upload Image</button>
                    </div>
                </div>";
    }

    echo "</div>";
    echo "<button class='btn btn-info' id='testimony_add_new'>Add New</button>";
}

function lawers_home_company_attorney()
{
    $attorneyTitle = get_option('lawers_company_attorney_main_title');
    $attorneyDescription = get_option('lawers_company_attorney_main_description');
    $attorneyNames = get_option('lawers_company_attorney_name');
    $attorneyDesignation = get_option('lawers_company_attorney_designation');
    $lawersAttorneyDescription = get_option('lawers_company_attorney_description');
    $attorneyImage = get_option('lawers_company_attorney_image');

    echo "<div class='form-group'>
        <input type='text' name='lawers_company_attorney_main_title' value='$attorneyTitle' placeholder='Testimony Title'>
        </div>
        <div class='form-group'>
        <textarea class='form-control w-50' rows='5' name='lawers_company_attorney_main_description' placeholder='Description'> $attorneyDescription </textarea>
        </div>
        ";

    if ($attorneyNames) {
        echo "<div class='row pr-5' id='lawers-advice-attorney-full-from'>";
        foreach ($attorneyNames as $key => $attorneyName) {
            $rand = rand(100000000, 999999999);
            echo "<div id='company_attorney_body_{$rand}' class='col-md-4'>
                        <div class='form-group mt-2'>
                        <input type='text' name='lawers_company_attorney_name[]' value='$attorneyName' placeholder='Attorney User Name'>
                        </div>
                        <div class='form-group'>
                        <input type='text' name='lawers_company_attorney_designation[]' value='$attorneyDesignation[$key]' placeholder='Attorney designation'>
                        </div>
                        <div class='form-group'>
                        <textarea name='lawers_company_attorney_description[]' placeholder='Description'> $lawersAttorneyDescription[$key] </textarea>
                        </div>
                        <div class='form-group'>
                            <input type='text' id='lawers_attorney_{$rand}_body_img' name='lawers_company_attorney_image[]' value='$attorneyImage[$key]' readonly><br>
                            <button type='button' id='company_attorney_{$rand}_upload_button' class='btn btn-success lawers_attorney_images_button mt-2'>Upload Image</button>
                        </div>
                    </div>";
        }
        echo "</div>";
    } else {
        $rand = rand(100000000, 999999999);
        echo "<div class='row pr-5' id='lawers-advice-attorney-full-from'>
        <div id='company_testimony_body_{$rand}' class='col-md-4'>
                        <div class='form-group mt-2'>
                        <input type='text' name='lawers_company_attorney_name[]' placeholder='Attorney User Name'>
                        </div>
                        <div class='form-group'>
                        <input type='text' name='lawers_company_attorney_designation[]' placeholder='Attorney designation'>
                        </div>
                        <div class='form-group'>
                        <textarea name='lawers_company_attorney_description[]' placeholder='Description'> </textarea>
                        </div>
                        <div class='form-group'>
                            <input type='text' id='lawers_attorney_{$rand}_body_img' name='lawers_company_attorney_image[]' readonly><br>
                            <button type='button' id='company_attorney_{$rand}_upload_button' class='btn btn-success lawers_attorney_images_button mt-2'>Upload Image</button>
                        </div>
                    </div>
                    </div>";
    }
    echo "<button class='btn btn-info' id='attorney_add_new_button'>Add New</button>";
}

function lawers_home_company_contact()
{
    $contactTitle = get_option('lawers_company_contact_title');
    $contactPhone = get_option('lawers_company_contact_phone');
    $contactFax = get_option('lawers_company_contact_fax');
    $contactAddress = get_option('lawers_company_contact_address');
    $contactEmail = get_option('lawers_company_contact_email');

    echo "<div class='form-group'>
    <input type='text' name='lawers_company_contact_title' value='$contactTitle' placeholder='Contact Title' size='40'>
    </div>
    <div class='form-group'>
    <input type='text' name='lawers_company_contact_phone' value='$contactPhone' placeholder='Contact Phone Number' size='40'>
    </div>
    <div class='form-group'>
    <input type='text' name='lawers_company_contact_fax' value='$contactFax' placeholder='Contact Fax Number' size='40'>
    </div>
    <div class='form-group'>
    <textarea class='form-control w-50' rows='5' name='lawers_company_contact_address' placeholder='Contact Address'> $contactAddress </textarea>
    </div>
    <div class='form-group'>
    <input type='text' name='lawers_company_contact_email' value='$contactEmail' placeholder='Contact Email' size='40'>
    </div>

    ";
}

function lawers_home_company_post()
{
    $categoryId = get_option('lawers_company_feature_post');
    $categoryType = get_option('lawers_company_feature_post_type');
    $categories = get_categories(array(
        'orderby' => 'name',
        'order'   => 'ASC'
    ));

    echo "<select name='lawers_company_feature_post'>";
    foreach ($categories as $category) {
        if ($category->term_id == $categoryId) {
            echo "<option value='{$category->term_id}' selected >{$category->name}</option>";
        } else {
            echo "<option value='{$category->term_id}' >{$category->name}</option>";
        }
    }
    echo "</select>";
    echo "<div class='form-group mt-2'>
            <input type='text' name='lawers_company_feature_post_type' value='$categoryType' placeholder='How many Post Show' size='40'>
    </div>";
}

// Contact Function

function lawers_contact_option()
{
    // echo "<h3>Theam Options</h3>";
}

function lawers_contact_main_image()
{
    $contactImage = get_option('lawers_advise_contact_img');
    echo "<input id='lawers_logo_field' type='text' name='lawers_advise_contact_img' value='$contactImage' size='40'><br>
    <button type='button' class='btn btn-success mt-2' id='lawers_contact_img'>Upload Image</button> 
    <button type='button' class='btn btn-info mt-2' id='reset_contact'>Reset</button>";
}

function lawers_contact_information()
{
    $contactInformationAddress = get_option('lawers_advise_contact_information_address');
    $contactInformationPhone = get_option('lawers_advise_contact_information_phone');
    $contactInformationEmail = get_option('lawers_advise_contact_information_email');
    $contactInformationDomain = get_option('lawers_advise_contact_information_domain');
    echo "<div class='form-group'>
    <textarea class='form-control w-50' rows='5' name='lawers_advise_contact_information_address' placeholder='Contact Address'> $contactInformationAddress </textarea>
    </div>
    <div class='form-group'>
    <input type='text' name='lawers_advise_contact_information_phone' value='$contactInformationPhone' placeholder='Add Contact Phone Number' size='40'>
    </div>
    <div class='form-group'>
    <input type='text' name='lawers_advise_contact_information_email' value='$contactInformationEmail' placeholder='Contact Email Address' size='40'>
    </div>
    <div class='form-group'>
    <input type='text' name='lawers_advise_contact_information_domain' value='$contactInformationDomain' placeholder='Domain Name' size='40'>
    </div>

    ";
}

function lawers_contact_information_from()
{

    $contactInformationFrom = get_option('lawers_advise_contact_from');

    $contactFrom = ($contactInformationFrom) ? 'checked' : '';

    echo "<div class='form-group'> 
            <input type='checkbox' name='lawers_advise_contact_from' $contactFrom value='1'> Active </div>
        <div>";
}

// About Function

function lawers_about_option()
{
}

function lawers_about_background_img()
{
    $aboutImg = get_option('lawers_advise_about_img');
    echo "<input id='lawers_about_img_field' type='text' name='lawers_advise_about_img' value='$aboutImg' size='40'><br>
    <button type='button' class='btn btn-success mt-2' id='lawers_about_img_up'>Upload Image</button> 
    <button type='button' class='btn btn-info mt-2' id='reset_about'>Reset</button>";
}



function lawers_about_overview()
{
    $aboutMainTitle = get_option('lawers_advise_about_main_title');
    $aboutMainOverview = get_option('lawers_advise_about_Main_description');
    $aboutMainImg = get_option('lawers_advise_about_main_img');

    echo "
        <div class='form-group'>
            <input type='text' name='lawers_advise_about_main_title' value='$aboutMainTitle' placeholder='Company Title' size='40'>
        </div>
        <div class='form-group'>
        <textarea class='form-control w-50' rows='5' name='lawers_advise_about_Main_description' placeholder='Company Overview' col='80'> $aboutMainOverview </textarea>
        </div>
        <div class='form-group'>
        <input id='lawers_company_about_img_field' type='text' name='lawers_advise_about_main_img' value='$aboutMainImg' size='40'><br>
        <button type='button' class='btn btn-success mt-2' id='lawers_company_img_uploader'>Upload Image</button> 
        <button type='button' class='btn btn-info mt-2' id='company_about_reset'>Reset</button>
        </div>
    ";
}

function lawers_about_overview_help()
{
    $lawersAboutHelpTitle = get_option('lawers_advise_about_help_title');
    $lawersAboutHelpIntroImg = get_option('lawers_advise_about_help_img');
    $lawersAboutHelptitles = get_option('lawers_advise_about_help_font_title');
    $lawersAboutHelpdescription = get_option('lawers_advise_about_help_details');
    $lawersAboutHelpflacticon = get_option('lawers_advise_about_help_fonticon');
    echo "<div class='form-group'>
            <input type='text' name='lawers_advise_about_help_title' value='$lawersAboutHelpTitle' placeholder='Company Help Title'>
            </div>
            <div class='form-group'>
        <input id='lawers_company_about_help_img_field' type='text' name='lawers_advise_about_help_img' value='$lawersAboutHelpIntroImg' size='40'><br>
        <button type='button' class='btn btn-success mt-2' id='lawers_about_help_image_upload'>Upload Image</button> 
        <button type='button' class='btn btn-info mt-2' id='about_uploader_reset_image'>Reset</button>
        </div>
    ";
    if ($lawersAboutHelptitles) {
        echo "<div class='row pr-5' id='lawers-advice-company-about-from'>";
        foreach ($lawersAboutHelptitles as $key => $lawersAboutHelptitle) {
            $rand = rand(100000000, 999999999);
            echo "<div id='company_body_{$rand}' class='col-md-4'>
                <div class='form-group mt-2'>
                    <input type='text' name='lawers_advise_about_help_font_title[]' value='{$lawersAboutHelptitle}' placeholder='Title'>
                </div>
                <div class='form-group'>
                    <textarea name='lawers_advise_about_help_details[]' placeholder='Description'> $lawersAboutHelpdescription[$key] </textarea>
                </div>
                <div class='form-group'>
                    <input type='text' id='lawers_about_{$rand}_help_flacticon' name='lawers_advise_about_help_fonticon[]' value='{$lawersAboutHelpflacticon[$key]}' readonly><br>
                    <button type='button' id='lawers_company_flacticon_{$rand}_upload_button' class='btn btn-success about_flacticon_button mt-2'>Upload Icon</button>
                </div>
            </div>";
        }

        echo "</div>";
    } else {
        $rand = rand(100000000, 999999999);
        echo "<div class='row pr-5' id='lawers-advice-company-about-from'>
        <div id='company_body_{$rand}' class='col-md-4'>
                <div class='form-group mt-2'>
                    <input type='text' name='lawers_advise_about_help_font_title[]' value='' placeholder='Title'>
                </div>
                <div class='form-group'>
                    <textarea name='lawers_advise_about_help_details[]' placeholder='Description'> </textarea>
                </div>
                <div class='form-group'>
                    <input type='text' id='lawers_company_{$rand}_help_flacticon' name='lawers_advise_about_help_fonticon[]' value='' readonly><br>
                    <button type='button' id='company_flacticon_{$rand}_upload_button' class='btn btn-success lawers_flacticon_button mt-2'>Upload Icon</button>
                    <button type='button' class='btn btn-info mt-2 intro_reset_image' id='company_intro_{$rand}_reset_image' style='display: none'>Reset</button>
                </div>
            </div>
            </div>";
    }

    echo "<br>";
    echo "<button class='btn btn-info' id='company_about_add_new'>Add New</button>";
}

// Attorney Function

function lawers_attorney_option()
{
}

function lawers_attorney_page_img()
{
    $attorneyImg = get_option('lawers_advise_attorney_img');
    echo "<input id='lawers_attorney_img_field' type='text' name='lawers_advise_attorney_img' value='$attorneyImg' size='40'><br>
    <button type='button' class='btn btn-success mt-2' id='lawers_attorney_img_up'>Upload Image</button> 
    <button type='button' class='btn btn-info mt-2' id='reset_attorney'>Reset</button>";
}


function lawers_attorney_body_page()
{
    $attorneyMainTitle = get_option('lawers_advise_attorney_main_title');
    $attorneyMainOverview = get_option('lawers_advise_attorney_main_description');
    $attorneyBodyImg = get_option('lawers_advise_attorney_body_img');
    $attorneyUserNames = get_option('lawers_advise_attorney_body_user_name');
    $attorneyUserTitle = get_option('lawers_advise_attorney_body_user_title');
    $attorneyUserDescription = get_option('lawers_advise_attorney_body_user_description');
    $attorneyUserFacebook = get_option('lawers_advise_attorney_body_user_facebook');
    $attorneyUserTwitter = get_option('lawers_advise_attorney_body_user_twitter');
    $attorneyUserGoogle = get_option('lawers_advise_attorney_body_user_google');
    $attorneyUserInstagram = get_option('lawers_advise_attorney_body_user_instagram');

    $attorneyFacebook = ($attorneyUserFacebook) ? 'checked' : '';
    $attorneyTwitter = ($attorneyUserTwitter) ? 'checked' : '';
    $attorneyGoogle = ($attorneyUserGoogle) ? 'checked' : '';
    $attorneyInstagram = ($attorneyUserInstagram) ? 'checked' : '';

    echo "
        <div class='form-group'>
            <input type='text' name='lawers_advise_attorney_main_title' value='$attorneyMainTitle' placeholder='Attorney Title' size='40'>
        </div>
        <div class='form-group'>
        <textarea class='form-control w-50' rows='5' name='lawers_advise_attorney_main_description' placeholder='Attorney Overview' col='80'> $attorneyMainOverview </textarea>
        </div>
    ";

    if ($attorneyUserNames) {
        echo "<div class='row pr-5' id='lawers-advice-company-attorney-from'>";
        foreach ($attorneyUserNames as $key => $attorneyUserName) {
            $rand = rand(100000000, 999999999);
            echo "<div id='company_attorney_{$rand}' class='col-md-4'>
                <div class='form-group mt-2'>
                    <input type='text' name='lawers_advise_attorney_body_user_name[]' value='{$attorneyUserName}' placeholder='Title'>
                </div>
                <div class='form-group'>
                    <input type='text' name='lawers_advise_attorney_body_user_title[]' value='{$attorneyUserTitle[$key]}' placeholder='Designation'>
                </div>
                <div class='form-group'>
                    <textarea name='lawers_advise_attorney_body_user_description[]' placeholder='Description'> $attorneyUserDescription[$key] </textarea>
                </div>
                <div class='form-group'>
                    <input type='text' id='lawers_company_{$rand}_attorney_img' name='lawers_advise_attorney_body_img[]' value='{$attorneyBodyImg[$key]}' readonly><br>
                    <button type='button' id='company_attorney_{$rand}_upload_button' class='btn btn-success lawers_attorney_button mt-2'>Upload Image</button>
                </div>
                <div class='form-group'> 
                    <input type='checkbox' name='lawers_advise_attorney_body_user_facebook' $attorneyFacebook value='1'> Facebook
                    <input type='checkbox' name='lawers_advise_attorney_body_user_twitter' $attorneyTwitter value='1'> Twitter
                    <input type='checkbox' name='lawers_advise_attorney_body_user_google' $attorneyGoogle value='1'> Google
                    <input type='checkbox' name='lawers_advise_attorney_body_user_instagram' $attorneyInstagram value='1'> Instagram
                </div>
            </div>";
        }

        echo "</div>";
    } else {
        $rand = rand(100000000, 999999999);
        echo "<div class='row pr-5' id='lawers-advice-company-attorney-from'>
        <div id='company_attorney_{$rand}' class='col-md-4'>
                <div class='form-group mt-2'>
                    <input type='text' name='lawers_advise_attorney_body_user_name[]' value='' placeholder='Title'>
                </div>
                <div class='form-group'>
                    <input type='text' name='lawers_advise_attorney_body_user_title[]' value='' placeholder='Designation'>
                </div>
                <div class='form-group'>
                    <textarea name='lawers_advise_attorney_body_user_description[]' placeholder='Description'> </textarea>
                </div>
                <div class='form-group'>
                    <input type='text' id='lawers_company_{$rand}_attorney_img' name='lawers_advise_attorney_body_img[]' value='' readonly><br>
                    <button type='button' id='company_attorney_{$rand}_upload_button' class='btn btn-success lawers_attorney_button mt-2'>Upload Image</button>
                    <button type='button' class='btn btn-info mt-2 attorney_reset_image' id='attorney_body_{$rand}_reset_image' style='display: none'>Reset</button>
                </div>
                
                <div class='form-group mt-2'> 
                    <input type='checkbox' name='lawers_advise_attorney_body_user_facebook' value='1'> Facebook
                    <input type='checkbox' name='lawers_advise_attorney_body_user_twitter' value='1'> Twitter
                    <input type='checkbox' name='lawers_advise_attorney_body_user_google' value='1'> Google
                    <input type='checkbox' name='lawers_advise_attorney_body_user_instagram' value='1'> Instagram
                </div>
            </div>
        </div>";
    }

    echo "<br>";
    echo "<button class='btn btn-info' id='company_attorney_add_new'>Add New</button>";
}


// Practice Area Function

function lawers_practice_option()
{
}

function lawers_practice_page()
{
    $practiceImg = get_option('lawers_advise_practice_img');
    echo "<input id='lawers_practice_img_field' type='text' name='lawers_advise_practice_img' value='$practiceImg' size='40'><br>
    <button type='button' class='btn btn-success mt-2' id='lawers_practice_img_up'>Upload Image</button> 
    <button type='button' class='btn btn-info mt-2' id='reset_practice'>Reset</button>";
}



function lawers_practice_body_page()
{
    $practiceBodyImgs = get_option('lawers_advise_practice_body_img');
    $practiceBodyTitle = get_option('lawers_advise_practice_body_title');
    $practiceBodyDes = get_option('lawers_advise_practice_body_description');

    if ($practiceBodyImgs) {
        echo "<div class='row pr-5' id='lawers-advice-company-practice-from'>";
        foreach ($practiceBodyImgs as $key => $practiceBodyImg) {
            $rand = rand(100000000, 999999999);
            echo "<div id='company_attorney_{$rand}' class='col-md-4'>
                <div class='form-group mt-2'>
                    <input type='text' name='lawers_advise_practice_body_title[]' value='{$practiceBodyTitle[$key]}' placeholder='Title'>
                </div>
                <div class='form-group'>
                    <textarea name='lawers_advise_practice_body_description[]' placeholder='Description'> $practiceBodyDes[$key] </textarea>
                </div>
                <div class='form-group'>
                    <input type='text' id='lawers_company_{$rand}_practice_img' name='lawers_advise_practice_body_img[]' value='{$practiceBodyImg}' readonly><br>
                    <button type='button' id='company_practice_{$rand}_upload_button' class='btn btn-success lawers_practice_button mt-2'>Upload Image</button>
                </div>
            </div>";
        }

        echo "</div>";
    } else {
        $rand = rand(100000000, 999999999);
        echo "<div class='row pr-5' id='lawers-advice-company-practice-from'>
        <div id='company_attorney_{$rand}' class='col-md-4'>
                <div class='form-group mt-2'>
                    <input type='text' name='lawers_advise_practice_body_title[]' value='' placeholder='Title'>
                </div>
                <div class='form-group'>
                    <textarea name='lawers_advise_practice_body_description[]' placeholder='Description'> </textarea>
                </div>
                <div class='form-group'>
                    <input type='text' id='lawers_company_{$rand}_practice_img' name='lawers_advise_practice_body_img[]' value='' readonly><br>
                    <button type='button' id='company_practice_{$rand}_upload_button' class='btn btn-success lawers_practice_button mt-2'>Upload Image</button>
                    <button type='button' class='btn btn-info mt-2 practice_reset_image' id='practice_body_{$rand}_reset_image' style='display: none'>Reset</button>
                </div>
                </div>
        </div>";
    }

    echo "<br>";
    echo "<button class='btn btn-info' id='company_practice_add_new'>Add New</button>";
}

// Add Blog Function

function lawers_blog_option()
{
}

function lawers_blog_page()
{
    $blogImg = get_option('lawers_advise_blog_img');

    echo "<input id='lawers_blog_img_field' type='text' name='lawers_advise_blog_img' value='$blogImg' size='40'><br>
    <button type='button' class='btn btn-success mt-2' id='lawers_blog_img_up'>Upload Image</button> 
    <button type='button' class='btn btn-info mt-2' id='reset_blog'>Reset</button>";
}

function lawers_blog_info()
{

    $blogbackgroundTitle = get_option('lawers_advise_blog_background_title');
    $blogbackgroundShortTitle = get_option('lawers_advise_blog_background_short_title');
    $blogBodyTitle = get_option('lawers_advise_blog_body_title');
    $blogBodyShortTitle = get_option('lawers_advise_blog_body_short_title');
    $blogBodyDescription = get_option('lawers_advise_blog_body_description');

    echo "
        <div class='form-group'>
            <input type='text' name='lawers_advise_blog_background_title' value='$blogbackgroundTitle' placeholder='Company Background Title' size='40'>
        </div>
        <div class='form-group'>
            <input type='text' name='lawers_advise_blog_background_short_title' value='$blogbackgroundShortTitle' size='40' placeholder='Company Background Short Title'><br>
        </div>
        <div class='form-group'>
            <input id='lawers_company_about_img_field' type='text' name='lawers_advise_blog_body_title' value='$blogBodyTitle' size='40' placeholder='Company Body Title'><br>
        </div>
        <div class='form-group'>
            <input type='text' name='lawers_advise_blog_body_short_title' value='$blogBodyShortTitle' size='40' placeholder='Company Body Short Title'><br>
        </div>
        <div class='form-group'>
            <textarea class='form-control w-50' rows='5' col='80' name='lawers_advise_blog_body_description' placeholder='Description'> {$blogBodyDescription} </textarea>
        </div>
    ";
}
