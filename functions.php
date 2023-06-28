<?php 

add_action( 'wp_enqueue_scripts', function() {
    //подключаем стили

    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;800&display=swap' );
    wp_enqueue_style( 'font-gstatic', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'googleapi', 'https://fonts.googleapis.com' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );


    //<script src="js/main.min.js"></script>
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.min.js', array(), 'null', true );
	
});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag ' );
add_theme_support( 'custom-logo ' );

?>