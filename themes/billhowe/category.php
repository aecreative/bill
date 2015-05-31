<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div class="bd">
		<div class="wrap">
        	<?php get_sidebar('subMenu'); ?>
            
            
            <div class="page">
                <div class="colmask leftmenu">
                    <div class="colleft">
                        <div class="col1">
                            <!-- Column 1 start -->
                            <h1>Bill's Blog</h1>
                            <div class="content">
                                <div class="main">

				<h1 class="page-title"><?php
					printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

								</div>
                                <div class="side">
                                	<ul class="side-menu" role="complementary">
                                    	<?php get_sidebar('right'); ?>
                                     </ul>
                                </div>
                            </div>
                            <!-- Column 1 end -->
                        </div>
                        <div class="col2">
                            <!-- Column 2 start -->
			    <div class="gp">
                            <!-- Place this tag where you want the +1 button to render -->
			    <g:plusone href="<?php echo get_permalink(); ?>"></g:plusone>
			    </div>
                            <div class="blogSidebar">
                                <ul class="side-menu" role="complementary">
                                	<?php get_sidebar(); ?>
                                </ul>
                            </div>
                        <!-- Column 2 end -->
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <br class="clear-fix" />
    </div>
<?php get_footer(); ?>
