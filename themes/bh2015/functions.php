<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);

add_filter('comment_form_default_fields','billhowe_commentfields');
add_filter('comment_text','billhowe_comment_text_filter', 50);

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

function bh2015_comment_transients( $comment ) {
	if ( $comment->comment_post_ID == 3363 ) {
		delete_transient( 'billhowe_star_avg' );
	}
}
add_action('comment_unapproved_to_approved', 'bh2015_comment_transients');
add_action('comment_approved_to_unapproved', 'bh2015_comment_transients');


function billhowe_commentfields($fields) {
	if( is_page_template('page-reviews.php') ) {
		if(isset($fields['url'])) {
			unset($fields['url']);
		}
    // add some classes?!
    
    
		$fields['stars'] = '<div style="display:none"><pre>'. print_r($fields,true) .'</pre></div><p class="rating">' . '<label for="rating">' . __( 'Your Rating' ) . '</label> <select id="rating" name="rating"><option value="5">5</option><option value="4">4</option><option value="3">3</option><option value="2">2</option><option value="1">1</option></select></p>';
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
			if ( ( $wp_query->query_vars['page'] == 0 ) || ( $wp_query->query_vars['page'] == get_comment_ID() ) ) {
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
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
			if ( $wp_query->query_vars['page'] != 0 ) {
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
	</div>
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
