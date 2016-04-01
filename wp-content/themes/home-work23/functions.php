<?php
function Rex_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('animate', get_template_directory_uri() . '../assets/css/animate.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '../assets/css/bootstrap.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '../assets/css/font-awesome.css');
    wp_enqueue_style('jquery.fancybox', get_template_directory_uri() . '../assets/css/jquery.fancybox.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '../assets/css/slick.css');

    wp_enqueue_style('default', get_template_directory_uri() . '../assets/css/theme-color/default.css');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '20151215', true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '20151215', true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.js', array('jquery'), 1.1, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js', array('jquery'), 1.1, true);
    wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array('jquery'), 1.1, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array(), '20151215', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array(), '20151215', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), '20151215', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array(), '20151215', true);

}

;
add_action('wp_enqueue_scripts', 'Rex_scripts');

//theme setup
function learnngWordPress_setup()
{
    //Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));
    ///add feature image suport
    add_theme_support('post-thumbnails');
    add_image_size('small-thambnail', '100%', '100%', true);
    add_image_size('banner-image', 920, 210, array('left', 'top'));
    //add post format support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'learnngWordPress_setup');
/*
------------------------
function getStyle() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'getStyle');
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_script( 'ajax-script', get_template_directory_uri() .  '/ajax-script.js', array('jquery') );
    wp_localize_script(
        'ajax-script',
        'ajax_object',
        array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce( 'send_letter' )
        )
    );
});
add_action( 'wp_ajax_send_letter', 'send_letter' );
add_action('wp_ajax_nopriv_send_letter', 'send_letter');
function my_action() {
    $nonce = $_POST['nonce'];
    if ( !wp_verify_nonce( $nonce, 'send_letter' ) ) {
        echo('Get out robot');
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
        $emailTo = get_option('admin_email');
        $subject = 'Повідомлення з сайту від '.$name;
        $body = "Імя: $name \n\nE-mail: $email \n\nПовідомлення: $comments";
        $headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
        wp_mail($emailTo, $subject, $body, $headers);
        wp_die();
    }
}
--------------------------
*/

add_action('admin_enqueue_scripts', 'my_enqueue');
function my_enqueue($hook)
{
    if ('index.php' != $hook) {
        // Only applies to dashboard panel
        return;
    }

    wp_enqueue_script('ajax-script', get_template_directory_uri() . '/ajax-script.js', array('jquery'));
    // in JavaScript, object properties are accessed as ajax_object.ajax_url, ajax_object.we_value
    wp_localize_script(
        'ajax-script',
        'ajax_object',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('send_letter_to_admin'),
            'thank_you_text' => __('Thank you!', 'geekhub-ajax-lessson')
        )
    );
}

add_action('wp_ajax_', 'send_letter_to_admin_callback');
function send_letter_to_admin_callback()
{
    global $wpdb; // this is how you get access to the database
    if (!wp_verify_nonce($_POST['nonce'], 'send_letter_to_admin')) {
        die('Security check');
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if ($name == '') {
            unset($name);
        }
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if ($email == '') {
            unset($email);
        }
    }
    if (isset($_POST['body'])) {
        $body = $_POST['body'];
        if ($body == '') {
            unset($body);
        }
    }

    if (isset($name) && isset($email) && isset($body)) {

        $address = "artemtancyura.sokil.che@gmail.com";
        $mes = "Имя: $name \nE-mail: $email \nТекст: $body";
        $send = mail($address, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
        if ($send == 'true') {
            echo "Thank you! Your letter is delivered";
        } else {
            echo "Error! The message is not delivered.";
        }

    } else {
        echo "Error! Check all fields and try again";
    }
    wp_die(); // this is required to terminate immediately and return a proper response
}
?>
