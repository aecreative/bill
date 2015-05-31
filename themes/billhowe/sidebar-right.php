<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Bill Howe
 * @since Twenty Ten 1.0
 */
 

if (is_page(array(88,76,68,81,1289,1109,1102,1099,1106)) ) {
	?>
    <li class="contact">
        <p><strong>Office Address:</strong></p>
        <p>Bill Howe Family of Companies Office Address:</p>
        <p>9085 Aero Dr., Suite B</p>
        <p>San Diego, CA 92123</p>
        <p><?php echo billhowe_phonenumber(false, true); ?></p>
        <p>Directions: <a target="_blank" href="http://goo.gl/maps/S3Hld">Click to view Directions</a></p>
    </li>
	<?php
} elseif ( is_page( array( 3232,6628 ) ) ) {
	?>
	<div class="cnew ns">
    	<p><strong>Sign up for our Newsletter today to start receiving monthly specials.</strong></p>
		<?php echo do_shortcode('[contact-form-7 id="5060" title=""]'); ?>
	</div>
	<?php	
} else {
	?>
	<div class="cnew">
	<?php
	$lnum = billhowe_phonenumber(false);
	echo str_replace('[num]', $lnum, do_shortcode('[contact-form-7 id="5059" title="Contact Us"]') );
	?>
	</div>
	<?php	
}
	get_sidebar('newbtns');
	get_sidebar('rightchat');
?>
