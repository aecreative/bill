<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Bill Howe
 */
?>
	<div class="ft">
    	<div class="wrap">
        	<?php //wp_nav_menu( array( 'container_class' => 'pageList', 'theme_location' => 'footer' ) ); ?>
            <div class="footer-menu">
            	<?php wp_nav_menu( array( 'theme_location' => 'footer2' ) ); ?>
                <div class="copyright">
    <p><span itemscope itemtype="http://schema.org/LocalBusiness" id="bhfc"><span itemprop="name" style="display:none">Bill Howe Family of Companies</span><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">9085 Aero Dr., Suite B</span> <span itemprop="addressLocality">San Diego</span>, <span itemprop="addressRegion">CA</span> <span itemprop="postalCode">92123</span></span> <span itemprop="telephone">619-286-6348</span> <?php
	if ( !is_page(3363) ) {
    	echo '<span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" style="display:none">Average of <span itemprop="ratingValue">'. billhowe_avgstars() .'</span> out of <span itemprop="bestRating">5</span> stars, from <span itemprop="reviewCount">'. get_comments_number( 3363 ) .'</span> reviews</span>';
	}
	?></span><br />
                    Copyright &copy; <?php echo date('Y'); ?> Bill Howe &nbsp;ı&nbsp; Plumbing License #488413 &nbsp;ı&nbsp; Heating & Air Conditioning License #906704 &nbsp;ı&nbsp; General Building Contractor's License #970643<br /><a href="http://www.billhowe.com/san-diego-plumber">San Diego Plumber</a> &nbsp;ı&nbsp; <a href="http://www.billhowe.com/hvac-san-diego/">HVAC San Diego</a> &nbsp;ı&nbsp; <a href="http://www.billhowe.com/san-diego-plumbing">San Diego Plumbing</a> &nbsp;ı&nbsp; <a href="http://www.billhowe.com/air-conditioning-san-diego-and-heating-san-diego/">Heating and Air Conditioning San Diego</a></p>
                </div>
                <div class="affiliates">
                    <a href="http://www.bbb.org/san-diego/business-reviews/plumbers/bill-howe-plumbing-inc-in-san-diego-ca-3001336" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icons/bbb.jpg" alt="BBB" width="45" height="60" /></a> &nbsp; <a href="http://www.phccsd.org/Bill_Howe_Plumbing.html" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icons/phcc.jpg" alt="PHCC" width="86" height="57" /></a> &nbsp; <img src="<?php bloginfo('template_url'); ?>/images/icons/cleantrust.jpg" alt="Clean Trust" width="47" height="68" />
                </div>
            </div>
            
            <br class="clear-fix" />
        </div>
    </div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>


<!--  Place this tag after the last plusone tag -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</body>
</html>
