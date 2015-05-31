<?php
/**
 * TwentyTen functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyten_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyten_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * Used to set the width of images and content. Should be equal to the width the theme
 * is designed for, generally via the style.css stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640;

/** Tell WordPress to run twentyten_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'billhowe_setup' );

if ( ! function_exists( 'billhowe_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override twentyten_setup() in a child theme, add your own twentyten_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_custom_image_header() To add support for a custom header.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Ten 1.0
 */
function billhowe_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'twentyten', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'twentyten' ),
	) );
	register_nav_menus( array(
		'footer' => __( 'Main Footer Navigation', 'twentyten' ),
	) );
	register_nav_menus( array(
		'footer2' => __( 'Sub Footer Navigation', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Services' => __( 'Services | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Plumbing' => __( 'Plumbing | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Heating and Air Conditioning' => __( 'HVAC | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Restoration and Flood' => __( 'Restoration | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Design and Remodeling' => __( 'Design | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Estimates' => __( 'Estimates | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Company' => __( 'Company | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Going Green' => __( 'Go Green | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Ask Howe' => __( 'Ask Howe | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Our Staff' => __( 'Our Staff | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Contact Us' => __( 'Contact | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Resources' => __( 'Resources | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'HealthyHeartContest' => __( 'HealthyHeartContest | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'HealthTips' => __( 'HealthTips | Sidebar Menu', 'twentyten' ),
	) );
	register_nav_menus( array(
		'Community Giving' => __( 'Community Giving | Sidebar Menu', 'twentyten' ),
	) );
	
	// This theme allows users to set a custom background
	add_custom_background();

	// Your changeable header business starts here
	define( 'HEADER_TEXTCOLOR', '' );
	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
	define( 'HEADER_IMAGE', '%s/images/headers/path.jpg' );

	// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to twentyten_header_image_width and twentyten_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width', 940 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height', 198 ) );

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be 940 pixels wide by 198 pixels tall.
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );
	add_image_size( 'landing', 651, 409, true );

	// Don't support text inside the header image.
	define( 'NO_HEADER_TEXT', true );

	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See twentyten_admin_header_style(), below.
	add_custom_image_header( '', 'twentyten_admin_header_style' );

	// ... and thus ends the changeable header business.

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'berries' => array(
			'url' => '%s/images/headers/berries.jpg',
			'thumbnail_url' => '%s/images/headers/berries-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Berries', 'twentyten' )
		),
		'cherryblossom' => array(
			'url' => '%s/images/headers/cherryblossoms.jpg',
			'thumbnail_url' => '%s/images/headers/cherryblossoms-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Cherry Blossoms', 'twentyten' )
		),
		'concave' => array(
			'url' => '%s/images/headers/concave.jpg',
			'thumbnail_url' => '%s/images/headers/concave-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Concave', 'twentyten' )
		),
		'fern' => array(
			'url' => '%s/images/headers/fern.jpg',
			'thumbnail_url' => '%s/images/headers/fern-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Fern', 'twentyten' )
		),
		'forestfloor' => array(
			'url' => '%s/images/headers/forestfloor.jpg',
			'thumbnail_url' => '%s/images/headers/forestfloor-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Forest Floor', 'twentyten' )
		),
		'inkwell' => array(
			'url' => '%s/images/headers/inkwell.jpg',
			'thumbnail_url' => '%s/images/headers/inkwell-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Inkwell', 'twentyten' )
		),
		'path' => array(
			'url' => '%s/images/headers/path.jpg',
			'thumbnail_url' => '%s/images/headers/path-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Path', 'twentyten' )
		),
		'sunset' => array(
			'url' => '%s/images/headers/sunset.jpg',
			'thumbnail_url' => '%s/images/headers/sunset-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Sunset', 'twentyten' )
		)
	) );
	
	
	add_action('wp_print_scripts', 'billhowe_scripts');
	add_action( 'login_head', 'billhowe_custom_login_logo' );
	add_action( 'login_headerurl', 'billhowe_custom_login_url' );
	add_shortcode( 'hr', 'billhowe_hr' );
	add_shortcode( 'num', 'billhowe_num_replace' );
	
	add_filter('comment_form_default_fields','billhowe_commentfields');
	add_filter('comment_text','billhowe_comment_text_filter', 50);
	add_filter( 'body_class', 'billhowe_bodyclasses' );
	add_filter('wptouch_desktop_switch_html', 'billhowe_desktopswitch');
}
endif;

function billhowe_scripts() {
	if ( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', array(), '1.4.4', true);
		
		if ( is_page_template('page-hvaclanding.php') == false ) {
			wp_enqueue_script( 'jquery-ui', get_bloginfo('template_url') .'/js/jquery-ui-1.8.2.custom.min.js', array('jquery'), '1.8.2', true );
			wp_enqueue_script( 'jquery-cycle', get_bloginfo('template_url') .'/js/jquery.cycle.min.js', array('jquery'), '1.09i', true );
			wp_enqueue_script( 'pirobox', get_bloginfo('template_url') .'/js/pirobox_extended/js/pirobox_extended_min.js', array('jquery'), '1.0', true );
		}
		wp_enqueue_script( 'jquery-cookie', get_bloginfo('template_url') .'/js/jquery.cookie.js', array('jquery'), false, true );
		wp_enqueue_script( 'billhowe-js', get_bloginfo('template_url') .'/js/billhowe.js', array('jquery','jquery-cookie'), '2.0', true );
	}
}

if ( ! function_exists( 'twentyten_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in twentyten_setup().
 *
 * @since Twenty Ten 1.0
 */
function twentyten_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#headimg {
	border-bottom: 1px solid #000;
	border-top: 4px solid #000;
}
/* If NO_HEADER_TEXT is false, you would style the text with these selectors:
	#headimg #name { }
	#headimg #desc { }
*/
</style>
<?php
}
endif;

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * To override this in a child theme, remove the filter and optionally add
 * your own function tied to the wp_page_menu_args filter hook.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentyten_page_menu_args' );

/**
 * Sets the post excerpt length to 40 characters.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 *
 * @since Twenty Ten 1.0
 * @return int
 */
function twentyten_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'twentyten_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 *
 * @since Twenty Ten 1.0
 * @return string "Continue Reading" link
 */
function twentyten_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and twentyten_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string An ellipsis
 */
function twentyten_auto_excerpt_more( $more ) {
	return ' &hellip;' . twentyten_continue_reading_link();
}
add_filter( 'excerpt_more', 'twentyten_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function twentyten_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= twentyten_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'twentyten_custom_excerpt_more' );

/**
 * Remove inline styles printed when the gallery shortcode is used.
 *
 * Galleries are styled by the theme in Twenty Ten's style.css.
 *
 * @since Twenty Ten 1.0
 * @return string The gallery style filter, with the styles themselves removed.
 */
function twentyten_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'twentyten_remove_gallery_css' );

if ( ! function_exists( 'twentyten_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyten_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'twentyten'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @since Twenty Ten 1.0
 * @uses register_sidebar
 */
function twentyten_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'twentyten' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Blog Sidebar', 'twentyten' ),
		'id' => 'blog-sidebar',
		'description' => __( 'All the Bloggie Stuff', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="menu widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Homepage Giveaway', 'twentyten' ),
		'id' => 'hgiveaway',
		'description' => __( 'Use Widget to control GIVEAWAY box on bottom left of homepage', 'twentyten' ),
		'before_widget' => '<div class="hblc">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="hbt">',
		'after_title' => '</h3>',
	) );
}
/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'twentyten_widgets_init' );

/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );

if ( ! function_exists( 'twentyten_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post—date/time and author.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'twentyten' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="https://plus.google.com/111275633734585780210" rel="author" target="_blank" title="Find us on Google+">%1$s</a></span>',
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'twentyten_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 * @since Twenty Ten 1.0
 */
function twentyten_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;
function truncate($text,$length=64,$tail="...") {
    $text = trim($text);
    $txtl = strlen($text);
    if($txtl > $length) {
        for($i=1;$text[$length-$i]!=" ";$i++) {
            if($i == $length) {
                return substr($text,0,$length) . $tail;
            }
        }
        $text = substr($text,0,$length-$i+1) . $tail;
    }
    return $text;
}
function billhowe_hr( $atts ) {
	return '<div class="hr"><!-- hr --></div>';
}

function billhowe_commentfields($fields) {
	if( is_page_template('page-reviews.php') ) {
		if(isset($fields['url'])) {
			unset($fields['url']);
		}
	
		$fields['stars'] = '<p class="rating">' . '<label for="rating">' . __( 'Your Rating' ) . '</label> <select id="rating" name="rating"><option value="5">5</option><option value="4">4</option><option value="3">3</option><option value="2">2</option><option value="1">1</option></select></p>';
	}
	return $fields;	
}

add_action ('comment_post', 'billhowe_commentmeta', 1);
function billhowe_commentmeta($comment_id) {
	$rating = absint($_POST['rating']);
	if($rating > 5 || $rating < 1) $rating = 1;
	add_comment_meta($comment_id, 'star_rating', $rating, true);
}


if ( ! function_exists( 'billhowe_review_comment' ) ) :
function billhowe_review_comment( $comment, $args, $depth ) {
	global $wp_query;
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
			if ( ( $wp_query->query_vars[page] == 0 ) || ( $wp_query->query_vars[page] == get_comment_ID() ) ) {
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><!-- <?php echo  $wp_query->query_vars[page] .' == '. get_comment_ID() ; ?>-->
		<div id="comment-<?php comment_ID(); ?>">
		<?php //echo '<pre style="display:none">'. print_r($comment,true) .'</pre>'; ?>

		<div class="comment-body" itemprop="review" itemscope itemtype="http://schema.org/Review">
        	<div class="rating">
            <?php
			$stars = get_comment_meta(get_comment_ID(),"star_rating");
			$stars = $stars[0];
			echo '<span class="count" itemprop="reviewRating">'. $stars .'</span>';
			for($i=1;$i<=5;$i++) echo '<div class="star o'. ($i<=$stars ? 'n' : 'ff') .'"></div>';
			?>
            </div>
            <em class="date"><?php echo '<meta itemprop="datePublished" content="'. esc_attr($comment->comment_date) .'">'. get_comment_date(); ?></em> - <?php 
			if ( $wp_query->query_vars[page] != 0 ) {
				echo '<span itemprop="reviewBody">';
				comment_text();
				echo '</span>';
			} else {
				// only show partial review
				$comment = get_comment( $comment_ID );
				$ctx = apply_filters( 'comment_text', get_comment_text( get_comment_ID() ), $comment );
				if ( strlen($ctx) > 114 ) {
					$ctx = substr($ctx, 0, strrpos( substr($ctx, 0, 114), ' '));
					if ( in_array( substr($ctx, strlen($ctx) - 1), array(',', '.', '!', '?') ) ) {
						$ctx = substr($ctx, strlen($ctx) - 1);
					}
				}
				echo $ctx .'... <a href="'. get_permalink(3363) .'/'. get_comment_ID() .'"><strong>Read Full Review</strong></a>';
			}
			?>
            <h3><em><span itemprop="author"><?php echo get_comment_author_link(); ?></span></em></h3>
        </div>
	</div><!-- #comment-##  -->
	<?php
			}
			break;
		case 'pingback'  :
		case 'trackback' :
			break;
	endswitch;
}
endif;

function billhowe_comment_text_filter($txt) {
	return wp_kses($txt,array());
}

function billhowe_bodyclasses($classes) {
	if ( is_page_template('page-landing.php') || is_page_template('page-afterhours.php') || is_page_template('page-hvaclanding.php') || is_page_template('page-dkippc.php') || is_page_template('page-hvacppc.php') || is_page_template('page-floodppc.php') ) {
		$classes[] = 'landing';
		if ( is_page_template('page-hvaclanding.php') || is_page_template('page-hvacppc.php') ) {
			$classes[] = 'hvac';
		}
		if ( is_page_template('page-dkippc.php') || is_page_template('page-hvacppc.php') || is_page_template('page-floodppc.php') ) {
			$classes[] = 'd';
		}
		if ( is_page_template('page-floodppc.php') ) {
			$classes[] = 'flood';
		}
	}
	return $classes;
}

function billhowe_custom_login_logo() { ?>
<style type="text/css">
h1 a { background: url(<?php bloginfo( 'template_url' ); ?>/images/logo.png) no-repeat top center; height: 72px; width: 361px; margin-left: -18px }
</style>
<?php
}

function billhowe_custom_login_url() {
	return trailingslashit(get_bloginfo('url'));
}

if ( !function_exists('billhowe_desktopswitch') ):
function billhowe_desktopswitch($switch_html) {
	global $wptouch_pro;
	$o = '';
	if ( wptouch_show_switch_link() ) {
		$o = '<div id="wptouch-desktop-switch">';
		$o .= '<a href="'. wptouch_get_desktop_switch_link() .'">Switch To '. (( $wptouch_pro->active_device_class == 'ipad' ) ? 'iPad' : 'Mobile') .' Version</a>';
		$o .= '</div>';
	}
	return $o;
}
endif;

function billhowe_avgstars() {
	global $wpdb;
	
	if ( false === ( $avg = get_transient( 'billhowe_star_avg' ) ) ) {
		
	
	/*
	SELECT SUM(wp_commentmeta.meta_value) FROM `wp_comments` LEFT JOIN `wp_commentmeta` USING(comment_ID) WHERE wp_comments.comment_post_ID = 3363 AND wp_comments.comment_approved = 1  AND wp_commentmeta.meta_key = 'star_rating'
	*/
	$starsum_st = 'starsum';
	$reviewcount_st = 'reviewcount';
	$review_post_ID = 3363;
	$comment_approved = 1;
	$meta_key = 'star_rating';
	
	$starquery = $wpdb->prepare( 
	"
	SELECT      SUM(key2.meta_value) AS %s, COUNT(*) AS %s
	FROM        $wpdb->comments key1
	LEFT JOIN	$wpdb->commentmeta key2 
	            ON key1.comment_ID = key2.comment_id
	WHERE       key1.comment_post_ID = %d
	            AND key1.comment_approved = %d
	            AND key2.meta_key = %s
	",
	$starsum_st, 
	$reviewcount_st, 
	$review_post_ID, 
	$comment_approved, 
	$meta_key
);
	$starsum = absint( $wpdb->get_var( $starquery, 0, 0 ) );
	$reviewcount = absint( $wpdb->get_var( $starquery, 1, 0 ) );
	
	$avg = round( ( 5 * ( $starsum / ( $reviewcount * 5 ) ) ), 1 );
	set_transient( 'billhowe_star_avg', $avg, 60*60*12 );
	}
	$avg = get_transient( 'billhowe_star_avg' );
	return $avg;
}

function billhowe_comment_transients( $comment ) {
	if ( $comment->comment_post_ID == 3363 ) {
		delete_transient( 'billhowe_star_avg' );
	}
}
add_action('comment_unapproved_to_approved', 'billhowe_comment_transients');
add_action('comment_approved_to_unapproved', 'billhowe_comment_transients');

function billhowe_phonenumber( $format = true, $includetxt = false ) {
	$phone = '1.800.245.5469';
	
	if( isset( $_SESSION['bhphone'] ) ) {
		$phone = $_SESSION['bhphone'];
	}
	
	if ( is_page() ) {
		if ( is_page_template( 'page-landing.php' ) || is_page_template( 'page-hvaclanding.php' ) || is_page_template( 'page-dkippc.php' ) || is_page_template( 'page-hvacppc.php' ) ) {
			global $post;
			$custom = get_post_meta($post->ID,'phone');
			$lnum = $custom[0];
			if ( $lnum & ( $lnum != '' ) ) {
				$phone = $lnum;
			}
		}
		
		if ( is_page_template( 'page-afterhours.php' ) ) {
			$phone = '619-821-9201';
		}

		if ( preg_match('/[A-Za-z]/', $phone) ) {
			$formattedPhone = format_phone_us( $phone, 'decimal' );
			if ( $format ) {
				$phone .= '<br /><span>' . $formattedPhone . '</span>';
			}
			else {
				$phone = $formattedPhone;
			}
		}
	}
	// check if ?s_cid=# is set in the URL, and switch accordingly
	if ( isset( $_GET['s_cid'] ) ) {
		$cid = $_GET['s_cid'];
		$cid = absint($cid);
		
		switch ( $cid ) {
			case 1:
				$phone = '619-821-8800';
				break;
			case 2:
				$phone = '619-821-9189';
				break;
			case 3:
				$phone = '619-821-9172';
				break;
			case 4:
				$phone = '619-821-9201';
				break;
			case 5:
				$phone = '619-821-9211';
				break;
			case 6:
				$phone = '619-202-1116';
				break;
			case 7:
				$phone = '619-202-1114';
				break;
		}
		
		$_SESSION['bhphone'] = $phone;
	}
	
	if ( $phone == '1.800.245.5469' ) {
		if ( $includetxt ) {
			$phone = '1-800-Bill-HOWE&nbsp;(1-800-245-5469)';
		}
	}
	return $phone;
}

function billhowe_num_replace() {
	return billhowe_phonenumber(false);
}

// returns formatted phone number
function format_phone_us( $phone = '', $format='standard', $convert = true, $trim = true )
{
	if ( empty( $phone ) ) {
		return false;
	}
	// Strip out non alphanumeric
	$phone = preg_replace( "/[^0-9A-Za-z]/", "", $phone );
	// Keep original phone in case of problems later on but without special characters
	$originalPhone = $phone;
	// If we have a number longer than 11 digits cut the string down to only 11
	// This is also only ran if we want to limit only to 11 characters
	if ( $trim == true && strlen( $phone ) > 11 ) {
		$phone = substr( $phone, 0, 11 );
	}
	// letters to their number equivalent
	if ( $convert == true && !is_numeric( $phone ) ) {
		$replace = array(
			'2'=>array('a','b','c'),
			'3'=>array('d','e','f'),
			'4'=>array('g','h','i'),
			'5'=>array('j','k','l'),
			'6'=>array('m','n','o'),
			'7'=>array('p','q','r','s'),
			'8'=>array('t','u','v'),
			'9'=>array('w','x','y','z'),
			);
		foreach ( $replace as $digit => $letters ) {
			$phone = str_ireplace( $letters, $digit, $phone );
		}
	}
	$a = $b = $c = $d = null;
	switch ( $format ) {
		case 'standard':
			$a = '(';
			$b = ') ';
			$c = '-';
			$d = '(';
			break;
		case 'decimal':
			$a = '';
			$b = '.';
			$c = '.';
			$d = '.';
			break;
		case 'period':
			$a = '';
			$b = '.';
			$c = '.';
			$d = '.';
			break;
		case 'hypen':
			$a = '';
			$b = '-';
			$c = '-';
			$d = '-';
			break;
		case 'dash':
			$a = '';
			$b = '-';
			$c = '-';
			$d = '-';
			break;
		case 'space':
			$a = '';
			$b = ' ';
			$c = ' ';
			$d = ' ';
			break;
		default:
			$a = '(';
			$b = ') ';
			$c = '-';
			$d = '(';
			break;
	}
	$length = strlen( $phone );
	// Perform phone number formatting here
	switch ( $length ) {
		case 7:
			// Format: xxx-xxxx / xxx.xxxx / xxx-xxxx / xxx xxxx
			return preg_replace( "/([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "$1$c$2", $phone );
		case 10:
			// Format: (xxx) xxx-xxxx / xxx.xxx.xxxx / xxx-xxx-xxxx / xxx xxx xxxx
			return preg_replace( "/([0-9a-zA-Z]{3})([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "$a$1$b$2$c$3", $phone );
		case 11:
			// Format: x(xxx) xxx-xxxx / x.xxx.xxx.xxxx / x-xxx-xxx-xxxx / x xxx xxx xxxx
			return preg_replace( "/([0-9a-zA-Z]{1})([0-9a-zA-Z]{3})([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "$1$d$2$b$3$c$4", $phone );
		default:
			// Return original phone if not 7, 10 or 11 digits long
			return $originalPhone;
	}
}

function billhowe_session_init() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'billhowe_session_init');


add_filter('rewrite_rules_array','progo_insertrules');
add_filter('query_vars','progo_insertvars');
add_filter('init','progo_flushrules');

// Remember to flush_rules() when adding rules
function progo_flushrules() {
	global $wp_rewrite;
   	$wp_rewrite->flush_rules();
}

// Adding a new rule
function progo_insertrules($rules) {
	$newrules = array();
	
	$stubs = array();
	
	$templates = array('page-dkippc.php');
	foreach($templates as $t) {
		$pages = get_pages(array(
			'meta_key' => '_wp_page_template',
			'meta_value' => $t
		));
		
		foreach ( $pages as $p ) {
			$stubs[] = $p->post_name;
		}
	}
	foreach ( $stubs as $s ) {
		$newrules['('. $s .'/)(.+?)$'] = 'index.php?pagename=$matches[1]&kw=$matches[2]';
		$newrules['('. $s .'/)(.+?)$'] = 'index.php?pagename=$matches[1]&keyword=$matches[2]';
	}
	
	return $newrules + $rules;
}

// Adding the id var so that WP recognizes it
function progo_insertvars($vars) {
    array_push($vars, 'kw');
    array_push($vars, 'keyword');
    return $vars;
}

function billhowe_keyword_shortcode($atts) {
	extract( shortcode_atts( array(
		'loc' => 0,
		'case' => 'titlecase',
		'default' => ''
	), $atts ) );
	
	global $wp_query;
	$oot = '';
	if(isset($wp_query->query_vars['kw'])) {
		if($wp_query->query_vars['kw'] != '') {
			$kw = $wp_query->query_vars['kw'];
			$slashit = strpos( $kw, '/' );
			if ( $slashit ) {
				// 2 kws?
				$kwa = explode('/', $kw);
				$loc = absint($loc);
				if ( $loc > count($kwa) ) $loc = 0;
				
				$oot = str_replace('-',' ',$kwa[0]);
			} else {
				// just 1
				$oot = str_replace('-',' ',$kw);
			}
		}
	}
	if ( ( $oot == '' ) || ( $oot == 'keyword' ) ){
		$oot = $default;
	}
	
	switch ( $case ) {
		case 'upper':
		case 'uppercase':
			$oot = strtoupper($oot);
			break;
		case 'lower':
		case 'lowercase':
			$oot = strtolower($oot);
			break;
		default:
			$oot = ucwords($oot);
			break;
	}
	
	return $oot;
}
add_shortcode('keyword', 'billhowe_keyword_shortcode');

function billhowe_dkititlefix($title) {
	global $wp_query;
	if(isset($wp_query->query_vars['kw'])) {
		$title = do_shortcode('[keyword default="Best San Diego Plumber"]');//$wp_query->query_vars['kw'];
	}
	return $title;
}
add_filter('aioseop_title', 'billhowe_dkititlefix');


/******************* Tracking Codes **********************/
	function billhowe_tracking_head() {
		// all pages - Google Analytics
		?>
			<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-18641188-1']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
			</script>
		<?php
	}
	add_action('wp_head', 'billhowe_tracking_head');


	function billhowe_tracking_foot() {
		// All pages
		?>
			<!-- Google Code for Remarketing Tag -->
			<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 996264411;
			var google_custom_params = window.google_tag_params;
			var google_remarketing_only = true;
			/* ]]> */
			</script>
			<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
			</script>
			<noscript>
			<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/996264411/?value=0&amp;guid=ON&amp;script=0"/>
			</div>
			</noscript>
		<?php

		// Save ten thanks
		if ( is_page('thankyou') || is_page('save-ten-thanks') ) { ?>

			<!-- Google Code for Estimates Conversion Page -->
			<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 996264411;
			var google_conversion_language = "en";
			var google_conversion_format = "2";
			var google_conversion_color = "ffffff";
			var google_conversion_label = "rAihCPWeqgIQ25OH2wM";
			var google_conversion_value = 250.00;
			var google_remarketing_only = false;
			/* ]]> */
			</script>
			<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
			</script>
			<noscript>
			<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/996264411/?value=250.00&amp;label=rAihCPWeqgIQ25OH2wM&amp;guid=ON&amp;script=0"/>
			</div>
			</noscript>

			<!-- BING -->
			<script type="text/javascript">
			// <![CDATA[
			if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};
			// ]]></script><script id="mstag_tops" type="text/javascript" src="//flex.atdmt.com/mstag/site/95d50699-3f12-4eb3-b834-ee26b25bd067/mstag.js"></script><script type="text/javascript">// <![CDATA[
			mstag.loadTag("analytics", {dedup:"1",domainId:"1060816",type:"1",revenue:"250.00",actionid:"17592"})
			// ]]>
			</script>
			<noscript><iframe src="//flex.atdmt.com/mstag/tag/95d50699-3f12-4eb3-b834-ee26b25bd067/analytics.html?dedup=1&amp;domainId=1060816&amp;type=1&amp;revenue=250.00&amp;actionid=17592" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none;"></iframe></noscript>

		<?php }

	}
	add_action('wp_footer', 'billhowe_tracking_foot');


/***************** End Tracking Codes ********************/












/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function resources_add_meta_box() {

	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	$template_file = get_post_meta($post_id,'_wp_page_template',TRUE);
	// check for a template type
	if ($template_file == 'page-resources.php') {

		$screens = array( 'post', 'page' );

		foreach ( $screens as $screen ) {

			add_meta_box(
				'resources_sectionid',
				__( 'Resources Page Display Options', 'resources_textdomain' ),
				'resources_meta_box_callback',
				$screen,
				'side'
			);
		}
	}
}
add_action( 'add_meta_boxes', 'resources_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function resources_meta_box_callback( $post ) {

	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'resources_meta_box', 'resources_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$_color = get_post_meta( $post->ID, 'resources_meta_color', true );
	$_template = get_post_meta( $post->ID, 'resources_meta_template', true );

	// select color
	echo '<label for="resources_page[color]">';
	_e( 'Color', 'resources_textdomain' );
	echo '</label> ';
	echo '<select id="resources_page[color]" name="resources_page[color]" >
		<option value="blue" '.($_color == 'blue' ? 'selected="selected"' : '').'>Blue</option>
		<option value="blue-dark" '.($_color == 'dark-blue' ? 'selected="selected"' : '').'>Dark Blue</option>
		<option value="gray" '.($_color == 'gray' ? 'selected="selected"' : '').'>Gray</option>
		<option value="green" '.($_color == 'green' ? 'selected="selected"' : '').'>Green</option>
		<option value="maroon" '.($_color == 'maroon' ? 'selected="selected"' : '').'>Maroon</option>
		</select><br />';

	// select template
	echo '<label for="resources_page[template]">';
	_e( 'Type', 'resources_textdomain' );
	echo '</label> ';
	echo '<select id="resources_page[template]" name="resources_page[template]" >
		<option value="plumbing" '.($_template == 'plumbing' ? 'selected="selected"' : '').'>Plumbing</option>
		<option value="heating" '.($_template == 'heating' ? 'selected="selected"' : '').'>Heating</option>
		<option value="ac" '.($_template == 'ac' ? 'selected="selected"' : '').'>Air Conditionaing</option>
		<option value="flood" '.($_template == 'flood' ? 'selected="selected"' : '').'>Restoration and Flood</option>
		</select><br />';

}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function resources_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['resources_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['resources_meta_box_nonce'], 'resources_meta_box' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */

	foreach ( $_POST['resources_page'] as $k => $v ) {
		update_post_meta( $post_id, 'resources_meta_' . $k, $v );
	}
	

		
}
add_action( 'save_post', 'resources_save_meta_box_data' );


function render_areas_of_expertise( $template = null, $return = true ) {
	$str = '<h4>Areas of Expertise</h4>';
	switch ( $template ) {
		case 'plumbing':
			$str .= '<ul class="expertise"><li>Plumbing Installations and Repairs</li>
			<li>Conventional and Tankless Water Heaters</li>
			<li>Gas Lines</li>
			<li>Drain Cleaning and Pipe Repair</li>
			<li>Sewer Lining</li>
			<li>Sewer Camera Inspections</li>
			<li>Slab Leak Location and Repair</li>
			<li>Hydro-Jetting</li>
			<li>Water Filtration Systems</li>
			<li>Plumbing Inspections</li>
			<li>Appliance hook-ups and draining</li>
			<li>Backflow Prevention</li>
			<li>Water Pressure Regulators</li></ul>';
			break;
		case 'heating':
			$str .= '<ul class="expertise"><li>Air Conditioner Repair & Installation</li>
			<li>Heater Repair & Installation</li>
			<li>Residential and Commercial</li>
			<li>Thermostat Upgrades</li>
			<li>Light Commercial HVAC</li>
			<li>Duct Cleaning</li>
			<li>Dryer Vent Cleaning</li>
			<li>Exhaust Fans</li>
			<li>Whole House Re-ducting</li>
			<li>"Green" Thermostat Recycling Program</li>
			<li>Financing Available (OAC)</li></ul>';
			break;
		case 'ac':
			$str .= '<ul class="expertise"><li>Air Conditioner Repair & Installation</li>
			<li>Heater Repair & Installation</li>
			<li>Residential and Commercial</li>
			<li>Thermostat Upgrades</li>
			<li>Light Commercial HVAC</li>
			<li>Duct Cleaning</li>
			<li>Dryer Vent Cleaning</li>
			<li>Exhaust Fans</li>
			<li>Whole House Re-ducting</li>
			<li>"Green" Thermostat Recycling Program</li>
			<li>Financing Available (OAC)</li></ul>';
			break;
		case 'flood':
			$str .= '<ul class="expertise"><li>Structural Dry out</li>
			<li>Drywall & Plaster repair</li>
			<li>Cabinet Repair and replacement</li>
			<li>Bathroom and kitchen remodeling</li>
			<li>Thermal Imaging</li>
			<li>Mold remediation</li>
			<li>Mold & Mildew odor control</li>
			<li>Water mitigation</li>
			<li>Stucco repair</li>
			<li>Wall texturing and Painting</li>
			<li>Flooring installation</li>
			<li>Tile work on enclosures, flooring and counter tops</li></ul>';
			break;
		default:
			$str = null;
			break;
	}
	if ( $return )
		return $str;

	print($str);
}

function render_testimonial( $type = false, $random = true, $count = 1, $return = true ) {

	$testimonials = array(
		'plumbing' => array(
			0 => array(
				't' => 'We wanted to give praise to Mauricio who worked on detecting and repairing a couple nasty leaks in our slab floor. He is most knowledgeable, courteous, patient, determined, hardworking, and professional. Our home is over 60 years old, a mass of redo and remodeling so we also appreciate his perseverance and sense of humor in this regard. Please communicate our appreciation and gratitude. You’ve got a great employee',
				'q' => 'Craig and Fran M via Bill Howe Website'
				),
			1 => array(
				't' => 'Miguel Gomez installed a new toilet in my home yesterday and I just wanted to say that he is another of your workers that gives your company such a great reputation He was courteous, friendly, and took efforts to explain and inform us of what he is doing, it was a pleasure to have him in my home.',
				'p' => 'Mary D via Bill Howe website'
				),
			2 => array(
				't' => 'Your technician, Mike, just fixed my drain problem and I had to write you to tell you how impressed I am with this knowledge, skills, and professionalism. Ill request him by name next time I need plumbing work. And I\'ll also be recommending bill Howe to all my friends from now on based on my experience with mike',
				'p' => 'Steven P via Bill Howe website'
				),
			3 => array(
				't' => 'Dear Bill, I wish to take the time to commend a very professional man that you have with your company. Brian rice was not only professional, honest and efficient, he was very effective. I had acquired the water heater over 8 years ago when I moved into the home. It has a twelve-year life. The water this morning was bitter cold and I was not receiving any hot water from the water heater. He recognized the problem immediately and saved me a thousand dollars in replacement of the heater by replacing a t-couple. My total bill was only 161.50 and I now have hot water! My kudos to Brian and your staff for a very professional and honest experience. I will be contacting Bill Howe and Brian Rice again for any of my plumbing needs',
				'p' => 'James D via Bill Howe website'
				),
			4 => array(
				't' => 'Got home last night to find leaking hot water in my garage. Never had to have one replaced before, so I was a bit panicked. Bill Howe was the second place I called. I spoke to the afterhour’s receptionist and she passed along my message to the plumber Alex, who called back within 30 minutes or so. He was able to walk me through a couple of diagnostic steps to determine the severity of the leak. I was able to get the leak stopped. I scheduled an early morning appointment for the next day and Alex showed up right on schedule with a new water heater. He got it installed and I was able to get to the office without having to miss a day of work. Alex is a really professional and asset to your company. As mentioned, Bill Howe was the second place I called. But after Alex’ service you guys will be my plumber from now on. Keep up the good work. And let Alex know his skill and professionalism are sincerely appreciated. Regards.',
				'p' => 'Clay U via Bill Howe website'
				),
			5 => array(
				't' => 'He showed up on time, was friendly, explained the process and what was found during the troubleshooting phase quoted a price and he did not up sell anything. I am Very pleased with this plumbing service and would use it in the future if I needed it',
				'p' => 'Clifford R via Angie\'s List'
				),
			6 => array(
				't' => 'I called them for a quote 9:50 AM and they were here within 20 minutes the plumber drained and removed my old water heater they brought and drove to his facility to get unscratched water heater. He had it installed by 12:45 and I had hot water by 1PM. they were fast efficient and courteous. I could not have asked for better service',
				'p' => 'David S via Angie’s List'
				),
			7 => array(
				't' => 'Fantastic when it happens on a weekend it’s always a pleasure to have a person who answers the phone and is knowledgeable on price and need. David Acosta was my technician, very professional answered all my questions. I would definitely recommend your service as well as David!',
				'p' => 'Sarah K via Angie’s List'
				),
			8 => array(
				't' => 'Just wanted to say thanks! Mike was just out to replace our garbage disposal. He arrived on time, did a great job and is a nice guy. Thanks!',
				'p' => 'Marc R via Bill Howe website'
				),
			9 => array(
				't' => 'I cannot say enough about Ron Riggs! I called another company that shall remain nameless (shame on me) and they no called and no showed two days in a row. I finally got smart and called Bill Howe. Ron came and was GOLDEN! He worked quickly, efficiently and cleaned up after himself...all in an hour. I am sure all the other employees are top notch, but Ron is best in my book...even my dog loved him! Thanks again!',
				'p' => 'Paul R. via BHP Website'
				)
			),
		'heating' => array(
			0 => array(
				't' => 'Eric I just wanted to drop you a note to say thanks for your great service last week in correcting the excessive noise we were receiving from our dryer vent fan, which was caused by an excessive buildup of lint. Although I was out of town when you performed the service in our downtown condo, my wife commented how professional you were...and the vent fan is now silent! Although it should be the norm to receive outstanding service, sometimes we aren’t so lucky with contactors we used to have in this building. As a result of our great experience with you we will be adding bill Howe to our HOAs list of preferred service providers this is distributed to all of the building residents.',
				'p' => 'CAPT Bayard via Bill Howe website'
				),
			1 => array(
				't' => 'Just had a furnace put in my house. From the get go Tommy Gerber was \'Johnny on the spot\' with the estimate and the fully explained the process to me and my wife. Great guy you have there!!!Then Dustin and Chris showed up smiles wide as day is long and on a \'Monday\' right off the bat, I knew these two outstanding individuals were going to do a great job. A great job is an understatement. Dustin and Chris were by far the two most professional individuals I have had the pleasure of meeting they explained what was going to happen and did it exactly as planned. they worked tirelessly without many break and even stayed until 8PM on the 2nd day of the install \'Just to get the job done\' ( I don\'t think they even stopped to eat) both Dustin and Chris were clean and super helpful with any and all questions. They are two individuals that need to stay with Bill Howe, What great representation of your company. Very pleased in PB. Give my kudos to all Tommy, Dustin and Chris that got this project completed on time and as promised.',
				'p' => 'Jim and Lisa G via Bill Howe Website'
				),
			2 => array(
				't' => 'Brian and Bruce proved to be very skilled and knowledgeable technicians who maintain a true loyalty to their company and their customers. The installation took longer than anticipated and even though Brian has wedding plans for later on in the evening he refused to leave the site until the tasks at hand were completed and the work area cleaned. In Addition, we really appreciated Brian spending the extra time to explain in detail in the operational procedures for our new mini split unit. Great service, calm and courteous manners and high customer satisfaction seem to be the main focus for Brian and Bruce. That is dedication! We will gladly refer our friends and family to Bill Howe and look forward to participating in their annual service program',
				'p' => 'Ben via Bill Howe website'
				),
			3 => array(
				't' => 'Through The whole process everyone was great and provided wonderful service. The two people you sent to do the job-Dustin and Chris. I couldn\'t have asked to have two better individuals do the work, and two dedicated employees who represent Bill Howe in a positive way. They are truly an asset to the company and take pride in the work they do. Dustin and Chris were outstanding, hardworking, personable, and took the time to answer any questions I had during the process, we will be sure to recommend Bill Howe to anyone who is looking to have any plumbing or central heating and air installed. Y\'all ROCK!',
				'p' => 'Craig S via letter'
				),
			4 => array(
				't' => 'We asked Bill Howe Inc. to replace an outdated wall furnace in our 100 year old home. Presented with several structural issues, technician Steven Winsett and staff went to great lengths to provide us with and updated and efficient unit, with minimal disruption to the house. This in addition to the excellent plumbing service they have given us makes them a one-call company, for our household.',
				'p' => 'Sue R via Bill Howe Website'
				),
			5 => array(
				't' => 'We are thrilled with the installation of the new furnace. Your technicians Brian and Bruce were very professional, and I appreciate the guidance from Brian on how to use our new cool thermostat. Thank You!!',
				'p' => 'Valerie S via Bill Howe website'
				)
			),
		'ac' => array(
			0 => array(
				't' => 'I saw an add for a A/C tuneup on a Bill Howe commercial, I had used them before for plumbing and was super happy so I figured I\'d try them again. I emailed them that night and heard back by the next morning.  Of course I waited until we had the horrible heat wave to contact them but they still were able to get me in a couple days later. The day of the service they called me before my appointment time to let me know that they were running behind and would most likely be arriving towards the end of my time window. I really appreciated that. They showed up on time and got right to work. Changed my filter added some freon and were finished. Brian and the other guy were great. Explained everything they did and now my A/C works awesome. Thanks!',
				'p' => 'Erin Z. Via Yelp'
				),
			1 => array(
				't' => 'Thank you for your prompt, professional service. We had our AC and heating installed last week. Great service, Clean job, the heating is very efficient, the guys where very polite',
				'p' => 'Lynn F. via Yelp'
				),
			2 => array(
				't' => 'We had a leaking A/C in the garage. The service man was on time, friendly, and competent. The nice thing about a big company is you know you can trust a brand, and their insured and bonded. In about 1.5 hours the issue was fixed.',
				'p' => 'Supreme S. via Yelp'
				)
			),
		'flood' => array(
			0 => array(
				't' => 'I wanted to pass on an \'Atta boy\' to your plumbing crew and restoration crew for the quick and thorough job they did when my bathroom flooded. The crews answered all my questions and let me know what was happening every step of the way. Even though the flooding happened during my days off, your company was great about taking my schedule into account (I work graveyard shift) when planning the restoration work. Prompt, efficient, and thorough. Nicely done, gentlemen!',
				'p' => ''
				),
			1 => array(
				't' => 'We had the misfortune of a slab leak just before the holidays. Called Bill Howe plumbing and thanks to the great work by Jorge on the plumbing for the pipe re-routing and very professional work by Miguel, Amber, and Derick on the restoration that was needed we are back to normal. The office staff was very helpful as well we highly recommend your company.',
				'p' => 'Bob R via Bill Howe Website'
				),
			2 => array(
				't' => 'After our master bedroom toilet had a significant leak all but destroying our newly renovated dining room, I contacted Bill Howe primarily for the immediate plumbing problem. However, once I talked to his representative (and with the OK of our insurance adjuster) I decided to pass the entire restoration job to Bill Howe. I couldn\'t have made a better choice. The overall condition in completing the job to pre-leak standards and coordinating with our other contractors was superb. And, Jose the reconstruction magician went out of his way to ensure everything was done right…',
				'p' => 'Tom B. via Angie’s List'
				),
			3 => array(
				't' => 'Without a doubt, the best service I have had from anybody who has ever come to work on my home! I had a pinhole leak in a pipe in my garage ceiling. Gabe arrived first thing in the morning, and had the leak located and fixed in 45 minutes. The restoration crew arrived later that afternoon, and removed the damaged area of the ceiling. The Bill Howe reps dealt directly with my insurance company in coordinating the insurance claim. Derick Taylor came out to estimate the reconstruction. He was prompt, professional and very helpful. I then dealt with Amber and Jose during the reconstruction. Jose was very personable and did an outstanding job putting everything back together. My neighbor, who is a carpenter, said it was some of the best drywall work he has seen. Amber was very helpful and extremely friendly in scheduling and assisting with the work to be done. What impresses me more than the high quality of work that Bill Howe provided was the fact that every person I dealt with was skilled at what they do, professional in their approach, and most of all friendly and helpful. I have already been recommending Bill Howe Plumbing to others and I will definitely use them again in the future.',
				'p' => 'Brad H. via BHP Website'
				),
			4 => array(
				't' => 'The Bill Howe Company is awesome. From Haley on the phones to their amazing plumbers and restoration. We had a pipe burst at 10:30 at night. We put in a call that night, and a plumber was out at 8:00 AM on a Saturday. I had shut off the water, but the damage was done to the master bathroom, half of the master bedroom, and part of another room. First, Joe and his co-worker came out and took pictures and took out was they could. They dried the carpet with heavy duty dryers took a week, THAT’S how wet it got. Then the bathroom was torn apart as were walls in both bedrooms Then Moises, Christian, Sean, and a couple of others whose names escape me, put up drywall and painted, washed the carpet and tiles. All this was great work, but the thing that impressed me most was the respect they had for my mother, aged 98, who suffers from advanced Alzheimer\'s and dementia, and is afraid of loud noises. If there was going to be a lot of noise, they closed it off as often as possible, sometimes putting the machines outside and running a line in. Derick took some incredibly detailed pictures of the damages, and laid out A to Z what needed to be done. This is a company who I wouldn’t hesitate to call in any emergency. To the whole Bill Howe Company, and to P.W. Stephens Environmental INC., who also helped in getting our home fixed, Anthony and Mitch, and their crews a heartfelt thank you. I am totally impressed that a company would go this far to please a customer.',
				'p' => 'Mary Louise P. via Bill Howe website'
				),
			5 => array(
				't' => 'I wanted to write this review to say that I am so very pleased with the service that I received from Bill Howe Plumbing and Flood Services. This is not the first time I’ve received EXCELLENT service from your company either. But in October, a pipe burst in my home’s slab. The water damage was extensive. John, with Flood Services came in and took charge of the situation. He is so knowledgeable and was able to help me through the entire process. If you have not been through this kind of situation before there is no way to explain how stressful it is. I knew what was happening and what I needed to do because John was there to help me. From this point forward, I will ALWAYS call Bill Howe. They can be trusted and are there to see that their customers are taken care of. I will be recommending your company to everyone I know. Thank you again for getting me through such a hectic time.',
				'p' => 'Kimberly H. via BHP website'
				)
			)
	);

	$str = null;

	if ( $type ) {

		$c = count($testimonials[$type]);
		$k = $c - 1;
		
		if ( (int) $count <= 1 ) {
			if ( $random == true ) {
				$r = rand(0, $k);
			}
			else if ( (int) $random < $c ) {
				$r = $random;
			}
			$t = $testimonials[$type][$r]['t'];
			$p = $testimonials[$type][$r]['p'];
			$str = '<blockquote><span class="quote">'.$t.'<em>- '.$p.'</em></span></blockquote>';
		}
		else {
			foreach ( $testimonials[$type] as $key => $val ) {
				if ( $key < $count ) {
					$str .= '<blockquote><span class="quote">'.$val['t'].'<em>- '.$val['p'].'</em></span></blockquote>';
				}
			}
		}
	}
	if ( $return )
		return $str;

	print $str;

}
