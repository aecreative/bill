<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Bill_Howe
 */
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href="<?php bloginfo( 'template_url' ); ?>/js/pirobox_extended/css_pirobox/style_2/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
	// js script includes moved to functions.php
?>
</head>

<body <?php body_class(); ?>>
<!-- BEGIN LivePerson Monitor. -->
<script type="text/javascript">
if(typeof window.lpTag==='undefined'){window.lpTag={site:'67134540',v:'1.3',protocol:location.protocol,events:{bind:function(app,ev,fn){lpTag.defer(function(){lpTag.events.bind(app,ev,fn)},0)},trigger:function(app,ev,json){lpTag.defer(function(){lpTag.events.trigger(app,ev,json)},1)}},defer:function(fn,fnType){if(fnType==0){this.defB=this.defB||[];this.defB.push(fn)}else if(fnType==1){this.defT=this.defT||[];this.defT.push(fn)}else{this.defL=this.defL||[];this.defL.push(fn)}},load:function(src,chr,id){var t=this;setTimeout(function(){t.load(src,chr,id)},0)},load:function(src,chr,id){var url=src;if(!src){url=this.protocol+'//'+((this.ovr&&this.ovr.domain)?this.ovr.domain:'lptag.liveperson.net')+'/tag/tag.js?site='+this.site}var s=document.createElement('script');s.setAttribute('charset',chr?chr:'UTF-8');if(id){s.setAttribute('id',id)}s.setAttribute('src',url);document.getElementsByTagName('head').item(0).appendChild(s)},init:function(){this.timing=this.timing||{};this.timing.start=(new Date()).getTime();var that=this;if(window.attachEvent){window.attachEvent('onload',function(){that.domReady('domReady')})}else{window.addEventListener('DOMContentLoaded',function(){that.domReady('contReady')},false);window.addEventListener('load',function(){that.domReady('domReady')},false)}if(typeof(window.lptStop)=='undefined'){this.load()}},domReady:function(n){if(!this.isDom){this.isDom=true;this.events.trigger('LPT','DOM_READY',{t:n})}this._timing[n]=(new Date()).getTime()}};lpTag.init()}
</script>
<!-- END LivePerson Monitor. --><?php /*if ( is_user_logged_in() ) {
	$user = wp_get_current_user();
 echo '<pre style="display:none" title="loggedinya">'. print_r($user,true) .'</pre>';
}*/
?>
	<div class="hd">
		<div class="wrap">
        	<div class="logo">
            	<h1 class="hide">Bill Howe, San Diego Plumbers</h1>
                <a href="<?php bloginfo('url') ?>/" title="San Diego Plumbers"><img src="<?php bloginfo('template_url') ?>/images/logo2.png" width="328" height="65" alt="Bill Howe Plumbers" /></a>
            </div>
            <?php $phone = billhowe_phonenumber(); ?>
            <div class="phone<?php if ( $phone == '1.800.245.5469' ) echo ' def'; ?>">
            	<h2><?php echo billhowe_phonenumber(); ?></h2>
            </div>
<!-- BEGIN LivePerson Button Code -->
<div id="lpButDivID-1331834080309"></div>
<script type="text/javascript" charset="UTF-8" src="https://server.iad.liveperson.net/hc/67134540/?cmd=mTagRepstate&site=67134540&buttonID=12&divID=lpButDivID-1331834080309&bt=1&c=1"></script>
<!-- END LivePerson Button code -->
           	<?php wp_nav_menu( array( 'container_class' => 'centeredmenu', 'theme_location' => 'primary' ) ); ?>
            <div class="search">
                <?php get_search_form(); ?>
                <?php /*
                <form action="#">
                    <label for="search">search...</label>
                    <input type="text" class="text" name="search" id="search" />
                    <input type="image" class="image" src="<?php bloginfo('template_url') ?>/images/icons/search.png" />
                </form>
                */ ?>
            </div>
            <?php if(is_front_page()) { ?>

            <?php /*
            <div class="gp home">
                <!-- Place this tag where you want the +1 button to render -->
                <g:plusone count="false" href="<?php bloginfo('url'); ?>"></g:plusone>
            </div>
            */ ?>

            <?php }
            ?>
            <div class="social">
                <?php /*<a target="_blank" href="<?php bloginfo('url'); ?>/feed/" class="rss">RSS</a> */ ?>
                <a target="_blank" href="http://www.facebook.com/billhowecompanies" class="fb">Facebook</a>
                <a target="_blank" href="http://twitter.com/BHowePlumbing" class="tw">Twitter</a>
                <a target="_blank" href="http://www.youtube.com/user/BillHowePlumbing" class="yt">YouTube</a>
                <a target="_blank" href="https://plus.google.com/111275633734585780210/about" class="gp">Google+</a>
            </div>
        </div>
    </div>
