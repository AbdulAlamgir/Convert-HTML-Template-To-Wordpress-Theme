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

// Function to register Theme Customizer settings
function custom_cafe_menu_customizer($wp_customize) {
    // Add a section for menu customization
    $wp_customize->add_section('custom_cafe_menu_section', array(
        'title'    => __('Cafe Menu', 'text-domain'),
        'priority' => 30,
    ));

    // Menu items data
    $menu_items = array(
        'hot_cappuccino' => array(
            'name'  => 'Hot Cappuccino',
            'base_price' => 8.50,
            'image' => 'https://example.com/images/hot_cappuccino.jpg',
        ),
        'hot_americano' => array(
            'name'  => 'Hot Americano',
            'base_price' => 7.50,
            'image' => 'https://example.com/images/hot_americano.jpg',
        ),
        'hot_latte' => array(
            'name'  => 'Hot Latte',
            'base_price' => 8.50,
            'image' => 'https://example.com/images/hot_latte.jpg',
        ),
        'hot_chocolate' => array(
            'name'  => 'Hot Chocolate',
            'base_price' => 7.50,
            'image' => 'https://example.com/images/hot_chocolate.jpg',
        ),
        'iced_cappuccino' => array(
            'name'  => 'Iced Cappuccino',
            'base_price' => 8.50,
            'image' => 'https://example.com/images/iced_cappuccino.jpg',
        ),
        'iced_americano' => array(
            'name'  => 'Iced Americano',
            'base_price' => 7.50,
            'image' => 'https://example.com/images/iced_americano.jpg',
        ),
        'iced_milky_latte' => array(
            'name'  => 'Iced Milky Latte',
            'base_price' => 8.50,
            'image' => 'https://example.com/images/iced_milky_latte.jpg',
        ),
    );

    // Add controls for specific menu items (name, price, and image)
    foreach ($menu_items as $key => $item) {
        // Add control for menu item name
        $wp_customize->add_setting('custom_menu_name_' . $key, array(
            'default'           => $item['name'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('custom_menu_name_' . $key, array(
            'label'    => __('Coffee Name for ' . $item['name'], 'text-domain'),
            'section'  => 'custom_cafe_menu_section',
            'type'     => 'text',
        ));

        // Add control for menu item base price
        $wp_customize->add_setting('custom_menu_base_price_' . $key, array(
            'default'           => $item['base_price'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('custom_menu_base_price_' . $key, array(
            'label'    => __('Base Price for ' . $item['name'], 'text-domain'),
            'section'  => 'custom_cafe_menu_section',
            'type'     => 'number',
        ));

        // Add control for menu item image
        $wp_customize->add_setting('custom_menu_image_' . $key, array(
            'default'           => $item['image'],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_menu_image_' . $key, array(
            'label'    => __('Image for ' . $item['name'], 'text-domain'),
            'section'  => 'custom_cafe_menu_section',
        )));
    }
}

add_action('customize_register', 'custom_cafe_menu_customizer');

function custom_theme_customize_register( $wp_customize ) {
    // Section for Contact Options
    $wp_customize->add_section( 'contact_section', array(
        'title'    => __( 'Contact Section', 'your_theme_textdomain' ),
        'priority' => 30,
    ) );

    // Contact Us Title
    $wp_customize->add_setting( 'contact_us_title', array(
        'default'   => 'Contact Us',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'contact_us_title', array(
        'label'    => __( 'Contact Us Title', 'your_theme_textdomain' ),
        'section'  => 'contact_section',
        'type'     => 'text',
    ) );

    // Contact Us Description
    $wp_customize->add_setting( 'contact_us_description', array(
        'default'   => 'Praesent tellus magna, consectetur sit amet volutpat eu, pulvinar vitae sem. Sed ultrices.',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'contact_us_description', array(
        'label'    => __( 'Contact Us Description', 'your_theme_textdomain' ),
        'section'  => 'contact_section',
        'type'     => 'textarea',
    ) );

    // Telephone Number
    $wp_customize->add_setting('telephone_number', array(
        'default'   => '010-020-0340',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('telephone_number', array(
        'label'    => __('Telephone Number', 'your_theme_textdomain'),
        'section'  => 'contact_section',
        'type'     => 'text',
    ));

    // Email Address
    $wp_customize->add_setting('email_address', array(
        'default'   => 'info@company.com',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('email_address', array(
        'label'    => __('Email Address', 'your_theme_textdomain'),
        'section'  => 'contact_section',
        'type'     => 'text',
    ));

    // Google Maps Link
    $wp_customize->add_setting('google_maps_link', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('google_maps_link', array(
        'label'    => __('Google Maps Link', 'your_theme_textdomain'),
        'section'  => 'contact_section',
        'type'     => 'url',
    ));
}
add_action( 'customize_register', 'custom_theme_customize_register' );
//  About Options
function custom_themes_customize_register($wp_customize) {
    // Section for About Options
    $wp_customize->add_section('about_section', array(
        'title'    => __('About Section', 'your_theme_textdomain'),
        'priority' => 40,
    ));

    // About Heading
    $wp_customize->add_setting( 'about_heading', array(
        'default'   => 'About our cafe',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'about_heading', array(
        'label'    => __( 'About Heading', 'your_theme_textdomain' ),
        'section'  => 'about_section',
        'type'     => 'textarea',
    ) );


    // About Content
    $wp_customize->add_setting('about_content', array(
        'default'   => 'Images are taken from Pexels, a great stock photo website. This template used Tailwind CSS. You may modify Antique Cafe template in any way you prefer and use it for your website.',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('about_content', array(
        'label'    => __('About Content', 'your_theme_textdomain'),
        'section'  => 'about_section',
        'type'     => 'textarea',
    ));
     // Contact Button Text
     $wp_customize->add_setting('contact_button_text', array(
        'default'   => 'Contact',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('contact_button_text', array(
        'label'    => __('Contact Button Text', 'your_theme_textdomain'),
        'section'  => 'about_section',
        'type'     => 'text',
    ));
        // Support Content
        $wp_customize->add_setting('support_content', array(
            'default'   => 'If you wish to <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">support us</a>, please make a little donation via PayPal. That would be very helpful. Another way is to tell your friends about Tooplate website. Thank you.',
            'transport' => 'refresh',
        ));
    
        $wp_customize->add_control('support_content', array(
            'label'    => __('Support Content', 'your_theme_textdomain'),
            'section'  => 'about_section',
            'type'     => 'textarea',
        ));
}
add_action('customize_register', 'custom_themes_customize_register');

?>

