<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to twentyten_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

			<div id="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
			</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// so, per ticket #3971 , we want individual subpages for reviews
	// will accomplish this via www.billhowe.com/reviews/27 , where 27 = ID of the comment
	global $wp_query;
	if( $wp_query->query_vars[page] == 0 ) { // showing all comments ?>
<?php comment_form(array('label_submit'=>'Post')); ?>
<h1><em style="font-size:18px">Check out what other customers have had to say about our service at other review websites including:</em></h1>
<p><a href="https://plus.google.com/111275633734585780210/about" target="_blank">Google+</a> &nbsp; | &nbsp; <a href="http://www.kudzu.com/m/Bill-Howe-PlumbingHVAC-and-Flood-Svcs-1038645" target="_blank">Kudzu</a> &nbsp; | &nbsp; <a href="http://local.yahoo.com/info-20886046-bill-howe-plumbing-incorporated-san-diego;_ylt=Ai_qpw0eUSvhDBZmNb9q31.HNcIF;_ylv=3?csz=San+Diego,+CA+92110" target="_blank">Yahoo Local</a> &nbsp; | &nbsp; <a href="http://sandiego.citysearch.com/profile/465512/san_diego_ca/bill_howe_plumbing_inc.html#profileTab-reviews" target="_blank">City Search San Diego</a></p>
<p><br /></p>
<?php }
if ( have_comments() ) : ?>
			<?php if ( $wp_query->query_vars[page] == 0 ) {
				echo '<div itemscope itemtype="http://schema.org/Plumber"><h1><span itemprop="name">Bill Howe Plumbing</span> Reviews</h1>';
			echo '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"><p style="font-style: italic; color: #999">Average of <span itemprop="ratingValue">'. billhowe_avgstars() .'</span> out of <span itemprop="bestRating">5</span> stars, from <span itemprop="reviewCount">'. get_comments_number() .'</span> reviews</p></div></div>';
			}
			?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>

			<ol class="commentlist">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use twentyten_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define twentyten_comment() and that will be used instead.
					 * See twentyten_comment() in twentyten/functions.php for more.
					 */
					wp_list_comments( array( 'callback' => 'billhowe_review_comment', 'reverse_top_level' => true ) );
				?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div><!-- .navigation -->
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyten' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

</div><!-- #comments -->
