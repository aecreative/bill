<?php
/**
 * @package bh_plugin
 * @version 2.0
 */
/*
Plugin Name: BH Plugin
Plugin URI: http://www.billhowe.com/
Description: Takes some functionality that was hardcoded in to the old Bill Howe theme and plugin-izes it
Author: chousmith
Version: 2.0
*/

function bh_plugin_hr( $atts ) {
	return '<hr />';
}
add_shortcode( 'hr', 'bh_plugin_hr' );

add_shortcode( 'num', 'billhowe_num_replace' );

function billhowe_phonenumber( $format = true, $includetxt = false ) {
	$phone = '1.800.245.5469';
	
	if( isset( $_SESSION['bhphone'] ) ) {
		$phone = $_SESSION['bhphone'];
	}
	
	if ( is_page() ) {
		//if ( is_page_template( 'page-landing.php' ) || is_page_template( 'page-hvaclanding.php' ) || is_page_template( 'page-dkippc.php' ) || is_page_template( 'page-hvacppc.php' ) ) {
			global $post;
			$custom = get_post_meta($post->ID,'phone');
			$lnum = $custom[0];
			if ( $lnum & ( $lnum != '' ) ) {
				$phone = $lnum;
			}
		//}
		
		if ( is_page( 'emergency-after-hours' ) ) {
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
add_filter('qode_title_text', 'billhowe_dkititlefix');

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