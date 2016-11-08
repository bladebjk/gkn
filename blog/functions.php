<?php add_theme_support( 'post-thumbnails' );  
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'GknBlogTema' ),
) );
register_sidebar( array(
        'name' => __( 'Right Sidebar', 'GknBlogTema' ),
        'id' => 'sidebar-right',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'GknBlogTema' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );



 ?>