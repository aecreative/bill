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
	<div class="ft wrap">
        <div class="copyright">
            <p>Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo site_url(); ?>">Bill Howe</a> &nbsp;|&nbsp; Plumbing License #488413 &nbsp;|&nbsp; Heating &amp; Air Conditioning License #906704 &nbsp;|&nbsp; General Building Contractor's License #970643<br /><a href="http://www.billhowe.com/san-diego-plumber">San Diego Plumber</a> &nbsp;ı&nbsp; <a href="http://www.billhowe.com/hvac-san-diego/">HVAC San Diego</a> &nbsp;ı&nbsp; <a href="http://www.billhowe.com/san-diego-plumbing">San Diego Plumbing</a> &nbsp;ı&nbsp; <a href="http://www.billhowe.com/air-conditioning-san-diego-and-heating-san-diego/">Heating and Air Conditioning San Diego</a></p>
        </div>
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
