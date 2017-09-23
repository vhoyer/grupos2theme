<?php
include('customizer.php');
//
// grupos2theme functions
//
add_action( 'after_setup_theme', 'grupos2theme_setup' );
function grupos2theme_setup()
{
	load_theme_textdomain( 'grupos2theme', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'grupos2theme' ) )
	);
}
add_action( 'wp_enqueue_scripts', 'grupos2theme_load_scripts' );
function grupos2theme_load_scripts() {
	//
	// jquery
	//
	wp_enqueue_script( 'jqueryslim', get_template_directory_uri().'/'.'scripts/jquery-3.2.1.slim.min.js', array(), '', true );
	//
	// Owl
	//
	wp_enqueue_style( 'owlmin', get_template_directory_uri().'/sass/owl.carousel.min.css' );
	wp_enqueue_style( 'owltheme', get_template_directory_uri().'/sass/owl.theme.default.min.css' );
	wp_enqueue_script( 'owlcarousel', get_template_directory_uri().'/scripts/owl.carousel.min.js', array('jqueryslim'), '', true );
	//
	// Fonts
	//
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/'.'sass/framework/font-awesome.min.css', array(), '' );
	wp_enqueue_style( 'opensans', 'https://fonts.googleapis.com/css?family=Open+Sans' );
}
add_action( 'comment_form_before', 'grupos2theme_enqueue_comment_reply_script' );
function grupos2theme_enqueue_comment_reply_script()
{
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'grupos2theme_title' );
function grupos2theme_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_filter( 'wp_title', 'grupos2theme_filter_wp_title' );
function grupos2theme_filter_wp_title( $title )
{
	return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'grupos2theme_widgets_init' );
function grupos2theme_widgets_init()
{
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'grupos2theme' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
function grupos2theme_custom_pings( $comment )
{
	$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'grupos2theme_comments_number' );
function grupos2theme_comments_number( $count )
{
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}
function escapeStyle($file){
	return file_get_contents($file);
}
function dynamic_heading($caption,$options=array()){
	$options=array_merge(array(
		"class" => "",
		"in_front" => "h2",
		"else" => "h1",
	),$options);
	$tag = $options["else"];
	if (is_front_page() || is_home() || is_front_page() && is_home()){
		$tag = $options["in_front"];
	}
	if ($options["class"] != ""){
		$options["class"] = " class=\"${options["class"]}\"";
	}
	echo "<$tag${options["class"]}>$caption</$tag>\n";
}
