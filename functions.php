<?php
function wpdocs_theme_name_scripts() {
    $theme_directory = get_template_directory_uri();

    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_style('bootstrap', $theme_directory . '/css/all.min.css');
    wp_enqueue_style('nice-select', $theme_directory . '/css/tailwind.css');
    wp_enqueue_style('font-awesome', $theme_directory . '/css/tooplate-antique-cafe.css');

    // Enqueue scripts with unique handles
    wp_enqueue_script('jquery', $theme_directory . '/js/jquery-3.6.0.min.js', array(), null, true);
    wp_enqueue_script('single-page-nav', $theme_directory . '/js/jquery.singlePageNav.min.js', array('jquery'), null, true);
    wp_enqueue_script('parallax', $theme_directory . '/js/parallax.min.js', array('jquery'), null, true);

    // Localize the script with data
    wp_localize_script('parallax', 'parallax_data', array('key' => 'value'));

    // Add a script for custom JavaScript
    wp_enqueue_script('custom-js', $theme_directory . '/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

function register_my_menus() {
    register_nav_menus(
        array(
            'custom_menu' => __('Body Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

function add_theme_menu() {
    add_menu_page(
        'Website Images',
        'Website Images',
        'manage_options',
        'website_image',
        'theme_settings_page',
        'dashicons-format-image',
        25
    );
}
add_action('admin_menu', 'add_theme_menu');

function theme_settings_page() {
    if (isset($_POST['update_body_image']) || isset($_POST['update_cafe_menu_image']) || isset($_POST['update_about_image']) || isset($_POST['update_contact_image'])) {
        if (isset($_POST['update_body_image'])) {
            update_option('body_image', esc_url_raw($_POST['body_image']));
        }

        if (isset($_POST['update_cafe_menu_image'])) {
            update_option('cafe_menu_image', esc_url_raw($_POST['cafe_menu_image']));
        }

        if (isset($_POST['update_about_image'])) {
            update_option('about_image', esc_url_raw($_POST['about_image']));
        }

        if (isset($_POST['update_contact_image'])) {
            update_option('contact_image', esc_url_raw($_POST['contact_image']));
        }

        echo '<div class="updated"><p>Settings saved.</p></div>';
    }

    echo '<div class="wrap"> ';
    echo '<h1>1: Body Image</h1>';
    echo '<form method="post" action="">';

    $body_image = get_option('body_image');
    echo '<label style="background-color:black; padding:1vh; color:white;" for="body_image">body image:</label>';
    echo '<input type="text" name="body_image" class="meta-image" value="' . esc_url($body_image) . '" />';
    echo '<input type="button" class="button image-upload" value="Browse Files" data-uploader_title="Upload Image" data-uploader_button_text="Use Image" /> <br>';
    
    echo '<input type="submit" name="update_body_image" class="button-primary" value="Update Settings" />';
    echo '</form>';
    echo '</div>';

    echo '<div class="wrap"> ';
    echo '<h1>2: Cafe Menu Image</h1>';
    echo '<form method="post" action="">';

    $cafe_menu_image = get_option('cafe_menu_image');
    echo '<label style="background-color:black; padding:1vh; color:white;" for="cafe_menu_image">cafe menu image:</label>';
    echo '<input type="text" name="cafe_menu_image" class="meta-image" value="' . esc_url($cafe_menu_image) . '" />';
    echo '<input type="button" class="button image-upload" value="Browse Files" data-uploader_title="Upload Image" data-uploader_button_text="Use Image" /> <br>';
    
    echo '<input type="submit" name="update_cafe_menu_image" class="button-primary" value="Update Settings" />';
    echo '</form>';
    echo '</div>';

    echo '<div class="wrap"> ';
    echo '<h1>3: About Image</h1>';
    echo '<form method="post" action="">';

    $about_image = get_option('about_image');
    echo '<label style="background-color:black; padding:1vh; color:white;" for="about_image">about image:</label>';
    echo '<input type="text" name="about_image" class="meta-image" value="' . esc_url($about_image) . '" />';
    echo '<input type="button" class="button image-upload" value="Browse Files" data-uploader_title="Upload Image" data-uploader_button_text="Use Image" /> <br>';
    
    echo '<input type="submit" name="update_about_image" class="button-primary" value="Update Settings" />';
    echo '</form>';
    echo '</div>';

    echo '<div class="wrap"> ';
    echo '<h1>4: Contact Image</h1>';
    echo '<form method="post" action="">';

    $contact_image = get_option('contact_image');
    echo '<label style="background-color:black; padding:1vh; color:white;" for="contact_image">contact image:</label>';
    echo '<input type="text" name="contact_image" class="meta-image" value="' . esc_url($contact_image) . '" />';
    echo '<input type="button" class="button image-upload" value="Browse Files" data-uploader_title="Upload Image" data-uploader_button_text="Use Image" /> <br>';
    
    echo '<input type="submit" name="update_contact_image" class="button-primary" value="Update Settings" />';
    echo '</form>';
    echo '</div>';
}

add_action('admin_menu', 'add_theme_menu');

// Image uploading logic
function enqueue_custom_scripts() {
    if (isset($_GET['page']) && $_GET['page'] === 'website_image') {
        wp_enqueue_media();
         wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/js/custom-admin.js', array('jquery'), null, true);
    }
}
add_action('admin_enqueue_scripts', 'enqueue_custom_scripts');



?>

