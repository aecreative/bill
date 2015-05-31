<?php

$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
//    require_once( $root.'/wp-config.php' );
} else {
	$root = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))));
	if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
//    require_once( $root.'/wp-config.php' );
	}
}

$header_bottom_border_width = 1;
header("Content-type: text/css; charset=utf-8");

?>

<?php if (!empty($qode_options_proya['selection_color'])) { ?>
    /* Webkit */
    ::selection {
    background: <?php echo $qode_options_proya['selection_color'];  ?>;
    }
<?php } ?>
<?php if (!empty($qode_options_proya['selection_color'])) { ?>
    /* Gecko/Mozilla */
    ::-moz-selection {
    background: <?php echo $qode_options_proya['selection_color'];  ?>;
    }
<?php } ?>

<?php if (!empty($qode_options_proya['first_color'])) { ?>

    h1 a:hover,
    .box_image_holder .box_icon .fa-stack i.fa-stack-base,
    .q_percentage_with_icon,
    .filter_holder ul li.active span,
    .filter_holder ul li:hover span,
    .q_tabs .tabs-nav li.active a:hover,
    .q_tabs .tabs-nav li a:hover,
    .q_accordion_holder.accordion .ui-accordion-header:hover,
    .q_accordion_holder.accordion.with_icon .ui-accordion-header i,
    .testimonials .testimonial_text_inner p.testimonial_author span.author_company,
    .testimonial_content_inner .testimonial_author .company_position,
    .q_icon_with_title.center .icon_holder .font_awsome_icon i:hover,
    .q_box_holder.with_icon .box_holder_icon_inner .fa-stack i.fa-stack-base,
    .q_icon_with_title.boxed .icon_holder .fa-stack,
    .q_font_awsome_icon i:hover,
    .q_progress_bars_icons_inner .bar.active i.fa-circle,
    .q_list.number ul>li:before,
    .q_social_icon_holder:hover i.simple_social,
    .social_share_dropdown ul li :hover i,
    .social_share_list_holder ul li i:hover,
    .latest_post_inner .post_infos a:hover,
    .q_masonry_blog article .q_masonry_blog_post_info a:hover,
    .blog_holder article:not(.format-quote):not(.format-link) .post_info a:hover,
    .latest_post_inner .post_comments:hover i,
    .blog_holder article .post_description a:hover,
    .blog_holder article .post_description .post_comments:hover,
    .blog_like a:hover i,
    .blog_like a.liked i,
    article:not(.format-quote):not(.format-link) .blog_like a:hover span,
    .comment_holder .comment .text .replay,
    .comment_holder .comment .text .comment-reply-link,
    .header-widget.widget_nav_menu ul.menu li a:hover,
    aside .widget a:hover,
    aside .widget.posts_holder li:hover,
    .q_steps_holder .circle_small:hover span,
    .q_steps_holder .circle_small:hover .step_title,
    .header_top #lang_sel > ul > li > a:hover,
    .header_top #lang_sel_click > ul > li> a:hover,
    .header_top #lang_sel_list ul li a.lang_sel_sel,
    .header_top #lang_sel_list ul li a:hover,
    aside .widget #lang_sel a.lang_sel_sel:hover,
    aside .widget #lang_sel_click a.lang_sel_sel:hover,
    aside .widget #lang_sel ul ul a:hover,
    aside .widget #lang_sel_click ul ul a:hover,
    aside .widget #lang_sel_list li a.lang_sel_sel,
    aside .widget #lang_sel_list li a:hover,
    .service_table_inner li.service_table_title_holder i,
    <?php if(function_exists('is_woocommerce')) { ?>
        .myaccount_user a,
        .woocommerce .select2-results li.select2-highlighted,
        .woocommerce-page .select2-results li.select2-highlighted,
        .woocommerce-checkout .chosen-container .chosen-results li.active-result.highlighted,
        .woocommerce-account .chosen-container .chosen-results li.active-result.highlighted,
        .woocommerce ins, .woocommerce-page ins,
        .woocommerce ul.products li.product:hover h6,
        .woocommerce div.product div.product_meta > span a:hover,
        .woocommerce div.cart-collaterals div.cart_totals table tr.order-total strong span.amount,
        .woocommerce-page div.cart-collaterals div.cart_totals table tr.order-total strong span.amount,
        .woocommerce div.cart-collaterals div.cart_totals table tr.order-total strong,
        .woocommerce .checkout-opener-text a,
        .woocommerce form.checkout table.shop_table tfoot tr.order-total th,
        .woocommerce form.checkout table.shop_table tfoot tr.order-total td span.amount,
        .woocommerce aside ul.product_list_widget li > a:hover,
        .woocommerce aside ul.product-categories li > a:hover,
        .woocommerce aside ul.product_list_widget li span.amount,
        .woocommerce aside .widget ul.product-categories a:hover,
        .woocommerce-page aside .widget ul.product-categories a:hover,
        .shopping_cart_header .header_cart:hover i,
    <?php } ?>
    .q_team .q_team_social_holder .q_social_icon_holder:hover i.simple_social
	{
        color: <?php echo $qode_options_proya['first_color']; ?> !important;
    }
	h2 a:hover,
	h3 a:hover,
	h4 a:hover,
	h5 a:hover,
	h6 a:hover,
	p a:hover,
	.portfolio_share .social_share_holder a:hover,
	.breadcrumb .current,
	.breadcrumb a:hover,
	.q_icon_with_title .icon_with_title_link,
	.q_counter_holder span.counter,
	.q_font_awsome_icon i,
	.q_dropcap,
	.q_counter_holder span.counter,
	nav.mobile_menu ul li a:hover,
	nav.mobile_menu ul li.active > a,
	.q_progress_bars_icons_inner.square .bar.active i,
	.q_progress_bars_icons_inner.circle .bar.active i,
	.q_progress_bars_icons_inner.normal .bar.active i,
	.q_font_awsome_icon_stack .fa-circle,
	.footer_top .q_social_icon_holder:hover i.simple_social,
	.more_facts_button:hover,
	.box_holder_icon .fa-stack i,
	.blog_large_image_simple .minimalist_date,
	nav.content_menu ul li.active:hover i,
	nav.content_menu ul li:hover i,
	nav.content_menu ul li.active:hover a,
	nav.content_menu ul li:hover a,
	.vc_grid-container .vc_grid-filter.vc_grid-filter-color-grey > .vc_grid-filter-item:hover span,
	.vc_grid-container .vc_grid-filter.vc_grid-filter-color-grey > .vc_grid-filter-item.vc_active span
	{

		color: <?php echo $qode_options_proya['first_color']; ?>;
	}

    .box_image_with_border:hover,
    .qbutton:hover,
	.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn:hover,
	.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover,
    .load_more a:hover,
    .blog_load_more_button a:hover,
    #submit_comment:hover,
    .drop_down .wide .second ul li .qbutton:hover,
    .drop_down .wide .second ul li ul li .qbutton:hover,
    .qbutton.white:hover,
    .qbutton.green,
    .portfolio_slides .hover_feature_holder_inner .qbutton:hover,
    .testimonials_holder.light .flex-direction-nav a:hover,
    .q_progress_bars_icons_inner.square .bar.active .bar_noactive,
    .q_progress_bars_icons_inner.square .bar.active .bar_active,
    .q_progress_bars_icons_inner.circle .bar.active .bar_noactive,
    .q_progress_bars_icons_inner.circle .bar.active .bar_active,
    .widget.widget_search form.form_focus,
    .q_steps_holder .circle_small_wrapper,
    .animated_icon_inner span.animated_icon_back i,
	.blog_holder article.format-link .post_text:hover .post_text_inner,
	.blog_holder article.format-quote .post_text:hover .post_text_inner,

    <?php if(function_exists('is_woocommerce')) { ?>
        .woocommerce .button:hover,
        .woocommerce-page .button:hover,
        .woocommerce #submit:hover,
        .woocommerce ul.products li.product a.qbutton:hover,
        .woocommerce-page ul.products li.product a.qbutton:hover,
        .woocommerce ul.products li.product .added_to_cart:hover,
    <?php } ?>
    input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
        border-color: <?php echo $qode_options_proya['first_color']; ?>
    }

    .q_icon_list i,
    .q_progress_bar .progress_content,
    .q_progress_bars_vertical .progress_content_outer .progress_content,
    .qbutton:hover,
	.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn:hover,
	.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover,
	.post-password-form input[type='submit']:hover,
    .load_more a:hover,
    .blog_load_more_button a:hover,
    #submit_comment:hover,
    .drop_down .wide .second ul li .qbutton:hover,
    .drop_down .wide .second ul li ul li .qbutton:hover,
    .qbutton.white:hover,
    .qbutton.green,
    .call_to_action,
    .highlight,
    .testimonials_holder.light .flex-direction-nav a:hover,
    .q_dropcap.circle,
    .q_dropcap.square,
    .q_message,
    .q_price_table.active .active_text,
    .q_icon_with_title.boxed .icon_holder .fa-stack,
    .q_font_awsome_icon_square,
    .q_icon_with_title.square .icon_holder .fa-stack:hover,
    .box_holder_icon_inner.square .fa-stack:hover,
    .box_holder_icon_inner.circle .fa-stack:hover,
    .circle .icon_holder .fa-stack:hover,
    .q_list.number.circle_number ul>li:before,
    .q_social_icon_holder.circle_social .fa-stack:hover,
    .social_share_dropdown ul li.share_title,
    .latest_post_holder .latest_post_date .post_publish_day,
    .q_masonry_blog article.format-link:hover,
    .q_masonry_blog article.format-quote:hover,
    #wp-calendar td#today,
    .vc_text_separator.full div,
    .mejs-controls .mejs-time-rail .mejs-time-current,
    .mejs-controls .mejs-time-rail .mejs-time-handle,
    .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
    .q_pie_graf_legend ul li .color_holder,
    .q_line_graf_legend ul li .color_holder,
    .q_team .q_team_text_inner .separator,
    .circle_item .circle:hover,
    .qode_call_to_action.container,
    .qode_carousels .flex-control-paging li a.flex-active,
    .animated_icon_inner span.animated_icon_back i,

    <?php if(function_exists('is_woocommerce')) { ?>
        .woocommerce .button:hover,
        .woocommerce-page .button:hover,
        .woocommerce #submit:hover,
        .woocommerce ul.products li.product a.qbutton:hover,
        .woocommerce-page ul.products li.product a.qbutton:hover,
        .woocommerce ul.products li.product .added_to_cart:hover,
        .woocommerce .quantity .minus:hover,
        .woocommerce #content .quantity .minus:hover,
        .woocommerce-page .quantity .minus:hover,
        .woocommerce-page #content .quantity .minus:hover,
        .woocommerce .quantity .plus:hover,
        .woocommerce #content .quantity .plus:hover,
        .woocommerce-page .quantity .plus:hover,
        .woocommerce-page #content .quantity .plus:hover,
        .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range,
        .woocommerce-page .widget_price_filter .ui-slider-horizontal .ui-slider-range,
    <?php } ?>
	.q_circles_holder .q_circle_inner2:hover,
    input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
        background-color: <?php echo $qode_options_proya['first_color']; ?>
    }


    .q_circles_holder .q_circle_inner2:hover,
	.blog_holder article.format-link .post_text:hover .post_text_inner,
	.blog_holder article.format-quote .post_text:hover .post_text_inner {
        background-color: <?php echo $qode_options_proya['first_color']; ?> !important;
        border-color: <?php echo $qode_options_proya['first_color']; ?> !important;
    }
<?php } ?>

<?php if (!empty($qode_options_proya['second_color'])) { ?>

    h1,h2,h3,h4,h5,h6,
    h1 a,
    h2 a,
    h3 a,
    h4 a,
    h5 a,
    h6 a
    a,
    p a,
    nav.main_menu>ul>li.active > a,
    .drop_down .wide .second ul li ul li.menu-item-has-children > a,
    .drop_down .wide .second ul li ul li.menu-item-has-children > a:hover,
    .title h1,
    .q_icon_list p,
    .q_progress_bars_vertical .progress_number,
    .qbutton,
	.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn,
	.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover,
	.post-password-form input[type='submit'],
    .load_more a,
    .blog_load_more_button a,
    #submit_comment,
    .drop_down .wide .second ul li .qbutton,
    .drop_down .wide .second ul li ul li .qbutton,
    .q_percentage,
    .portfolio_navigation .portfolio_prev a:hover,
    .portfolio_navigation .portfolio_next a:hover,
    .q_tabs .tabs-nav li.active a,
    .q_accordion_holder.accordion .ui-accordion-header,
    .q_accordion_holder.accordion.with_icon .ui-accordion-header,
    .testimonials .testimonial_text_inner p.testimonial_author,
    .testimonial_content_inner .testimonial_author .website,
    .q_icon_with_title .icon_with_title_link:hover,
    .ordered ol li,
    .q_list.circle ul>li,
    .q_list.number ul>li,
    .latest_post_holder .latest_post_date .post_publish_month,
    .latest_post_inner .post_infos a,
    .q_masonry_blog article.format-quote .q_masonry_blog_post_text p,
    .q_masonry_blog article.format-link .q_masonry_blog_post_text p,
    .q_masonry_blog article .q_masonry_blog_post_info,
    .blog_holder article.format-quote .post_text .post_title p,
    .blog_holder article.format-link .post_text .post_title p,
    .single_links_pages span,
    .single_links_pages a:hover span,
    .comment_holder .comment .text .name,
    .blog_holder.masonry article .post_info,
    .pagination ul li span,
    .pagination ul li a:hover,
    .q_team .q_team_description_inner p,
    .carousel-inner .item.dark .slider_content .text .qbutton,
    .carousel-control,
	.more_facts_button,

    <?php if(function_exists('is_woocommerce')) { ?>
        .woocommerce div.message,
        .woocommerce .woocommerce-message,
        .woocommerce .woocommerce-error,
        .woocommerce .woocommerce-info,
        .myaccount_user,
        .woocommerce .button,
        .woocommerce-page .button,
        .woocommerce-page input[type="submit"],
        .woocommerce input[type="submit"],
        .woocommerce ul.products li.product .added_to_cart,
        .woocommerce .select2-container .select2-choice .select2-arrow .select2-arrow:after ,
        .woocommerce-page .select2-container .select2-choice .select2-arrow:after,
        .woocommerce-pagination ul.page-numbers li span.current,
        .woocommerce-pagination ul.page-numbers li a:hover,
        .woocommerce .quantity input.qty,
        .woocommerce #content .quantity input.qty,
        .woocommerce-page .quantity input.qty,
        .woocommerce-page #content .quantity input.qty,
        .woocommerce .summary p.stock.out-of-stock,
        .woocommerce aside ul.product_list_widget li a,
        .woocommerce .widget_price_filter .price_label,
        .woocommerce-page .widget_price_filter .price_label,
    <?php } ?>
	.carousel-control:hover,
    input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
        color: <?php echo $qode_options_proya['second_color']; ?>;
    }

    .qbutton,
	.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn,
	.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover,
	.post-password-form input[type='submit'],
    .load_more a,
    .blog_load_more_button a,
    #submit_comment,
    .drop_down .wide .second ul li .qbutton,
    .drop_down .wide .second ul li ul li .qbutton,
    .testimonials_holder .flex-direction-nav a,
    .header_top #lang_sel ul li ul li a,
    .header_top #lang_sel ul li ul li a:visited,
    .header_top #lang_sel_click ul li ul li a,
    .header_top #lang_sel_click ul li ul li a:visited,

    <?php if(function_exists('is_woocommerce')) { ?>
        .woocommerce .button,
        .woocommerce-page .button,
        .woocommerce-page input[type="submit"],
        .woocommerce input[type="submit"],
        .woocommerce ul.products li.product .added_to_cart,
    <?php } ?>
	.carousel-inner .item.dark .slider_content .text .qbutton,
    input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
        border-color: <?php echo $qode_options_proya['second_color']; ?>;
    }

    .ajax_loader .pulse,
    .ajax_loader .double_pulse .double-bounce1, .ajax_loader .double_pulse .double-bounce2,
    .ajax_loader .cube,
    .ajax_loader .rotating_cubes .cube1, .ajax_loader .rotating_cubes .cube2,
    .ajax_loader .stripes > div,
    .ajax_loader .wave > div,
    .ajax_loader .two_rotating_circles .dot1, .ajax_loader .two_rotating_circles .dot2,
    .ajax_loader .five_rotating_circles .container1 > div, .ajax_loader .five_rotating_circles .container2 > div, .ajax_loader .five_rotating_circles .container3 > div,
    .separator.small,
    .testimonials_holder .flex-direction-nav a:hover,
    .q_price_table .price_table_inner,
    .carousel-inner .item.dark .slider_content .text .qbutton:hover,
    .vertical_menu_hidden_button_line,
    .vertical_menu_hidden_button_line:after,.vertical_menu_hidden_button_line:before

    <?php if(function_exists('is_woocommerce')) { ?>
        , .woocommerce .product .onsale,
        .woocommerce .product .single-onsale
    <?php } ?> {
        background-color: <?php echo $qode_options_proya['second_color']; ?>;
    }


<?php } ?>

<?php if (!empty($qode_options_proya['spinner_color'])) { ?>
    .ajax_loader .pulse,
    .ajax_loader .double_pulse .double-bounce1, .ajax_loader .double_pulse .double-bounce2,
    .ajax_loader .cube,
    .ajax_loader .rotating_cubes .cube1, .ajax_loader .rotating_cubes .cube2,
    .ajax_loader .stripes > div,
    .ajax_loader .wave > div,
    .ajax_loader .two_rotating_circles .dot1, .ajax_loader .two_rotating_circles .dot2,
    .ajax_loader .five_rotating_circles .container1 > div, .ajax_loader .five_rotating_circles .container2 > div, .ajax_loader .five_rotating_circles .container3 > div{
    background-color: <?php echo $qode_options_proya['spinner_color']; ?>;
    }
<?php } ?>

<?php if (!empty($qode_options_proya['third_color'])) { ?>

    .portfolio_navigation .portfolio_prev a:hover,
    .portfolio_navigation .portfolio_next a:hover,
    .q_tabs.vertical .tabs-nav li.active a,
    .q_tabs.vertical.left .tab-content,
    .q_tabs.vertical.right .tab-content,
    .q_tabs.boxed .tabs-nav li.active a,
    .q_tabs.boxed .tabs-container,
    .q_accordion_holder.accordion .ui-accordion-header .accordion_mark,
    .single_links_pages span,
    .single_links_pages a:hover span,
    .pagination ul li span,
    .pagination ul li a:hover,
    .service_table_inner li {
        border-color: <?php echo $qode_options_proya['third_color']; ?>
    }

    .q_progress_bar .progress_content_outer,
    .q_progress_bars_vertical .progress_content_outer,
    .portfolio_navigation .portfolio_prev a:hover,
    .portfolio_navigation .portfolio_next a:hover,
    .q_accordion_holder.accordion .ui-accordion-header.ui-state-active .accordion_mark,
    .q_accordion_holder.accordion.boxed .ui-accordion-header,
    .q_social_icon_holder .fa-stack,
    .single_links_pages span,
    .single_links_pages a:hover span,
    .pagination ul li span,
    .pagination ul li a:hover,
    .q_circles_holder .q_circle_inner2 {
        background-color: <?php echo $qode_options_proya['third_color']; ?>
    }

<?php } ?>
<?php if (!empty($qode_options_proya['fourth_color'])) { ?>

    .q_icon_with_title span.fa-stack i:last-child,
    .q_box_holder.with_icon span.fa-stack i:last-child,
    .q_masonry_blog article.format-quote .q_masonry_blog_post_text i.qoute_mark,
    .q_masonry_blog article.format-link .q_masonry_blog_post_text i.link_mark,
    .q_masonry_blog article .quote_author,
    .blog_holder article.format-quote .post_text i.qoute_mark,
    .blog_holder article.format-link .post_text i.link_mark,
    .blog_holder article.format-quote .post_text .quote_author,
    .animated_icon_inner i {
        color: <?php echo $qode_options_proya['fourth_color']; ?>
    }

    .q_box_holder.with_icon,
    .q_icon_with_title .icon_holder .fa-stack,
    .box_holder_icon_inner .fa-stack,
    .q_font_awsome_icon_square,
    .q_font_awsome_icon_stack i.fa-stack-base,
    .animated_icon_inner i {
        border-color: <?php echo $qode_options_proya['fourth_color']; ?>
    }

    <?php if(function_exists('is_woocommerce')) { ?>
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
        .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle {
            background-color: <?php echo $qode_options_proya['fourth_color']; ?>
        }
    <?php } ?>

<?php } ?>
<?php if (!empty($qode_options_proya['background_color']) || !empty($qode_options_proya['text_color']) || !empty($qode_options_proya['text_fontsize']) || !empty($qode_options_proya['text_fontweight']) || $qode_options_proya['google_fonts'] != "-1") { ?>
    body{
    	<?php if($qode_options_proya['google_fonts'] != "-1"){ ?>
    	<?php $font = str_replace('+', ' ', $qode_options_proya['google_fonts']); ?>
    	font-family: '<?php echo $font; ?>', sans-serif;
    	<?php } ?>
    	<?php if (!empty($qode_options_proya['text_color'])) { ?> color: <?php echo $qode_options_proya['text_color'];  ?>; <?php } ?>
    	<?php if (!empty($qode_options_proya['text_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['text_fontsize']; ?>px; <?php } ?>
    	<?php if (!empty($qode_options_proya['text_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['text_fontweight'];  ?>;<?php } ?>
    }
    <?php if (!empty($qode_options_proya['background_color'])) { ?>
        body,
		.wrapper,
        .content,
        .full_width,
		.more_facts_holder,
		.comment_holder .comment #respond textarea,
		.comment_holder .comment #respond input[type='text'],
		.content .container
		{
        	background-color:<?php echo $qode_options_proya['background_color'];  ?>;
        }
    <?php } ?>
<?php } ?>
<?php if (!empty($qode_options_proya['background_color_box'])) { ?>
    .wrapper{
    	<?php if (!empty($qode_options_proya['background_color_box'])) { ?> background-color:<?php echo $qode_options_proya['background_color_box'];  ?>; <?php } ?>
    }
<?php } ?>
<?php
$boxed = "no";
if (isset($qode_options_proya['boxed']))
	$boxed = $qode_options_proya['boxed'];
?>
<?php if($boxed == "yes"){ ?>
body.boxed .wrapper{
	<?php if (!empty($qode_options_proya['background_color_box'])) { ?> background-color:<?php echo $qode_options_proya['background_color_box'];  ?>; <?php } ?>
	
	<?php if($qode_options_proya['pattern_background_image'] != ""){  ?>
		background-image: url('<?php echo $qode_options_proya['pattern_background_image'] ?>');
		background-position: 0px 0px;
		background-repeat: repeat;
	<?php } ?>
	
	<?php if($qode_options_proya['background_image'] != ""){  ?>
		background-image: url('<?php echo $qode_options_proya['background_image'] ?>');
		background-attachment: fixed;
		background-position: center 0px;
		background-repeat: no-repeat;
	<?php } ?>
}
body.boxed .content{
	<?php if (!empty($qode_options_proya['background_color'])) { ?> background-color:<?php echo $qode_options_proya['background_color'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['background_color_boxes'])) { ?>
.projects_holder article .portfolio_description,
.blog_holder.masonry article .post_text .post_text_inner,
.q_team,
.price_table_inner,
.latest_post_holder.boxes > ul > li,
.q_counter_holder.boxed_counter {
	background-color: <?php echo $qode_options_proya['background_color_boxes'];  ?>;
}
<?php } ?>
<?php if (!empty($qode_options_proya['highlight_color'])) { ?>
span.highlight {
	background-color: <?php echo $qode_options_proya['highlight_color'];  ?>;
}
<?php } ?>

<?php if (!empty($qode_options_proya['header_background_color']) || $qode_options_proya['header_background_transparency_initial'] != "") {
	if(!empty($qode_options_proya['header_background_color'])){
		$bg_color = qode_hex2rgb($qode_options_proya['header_background_color']);
	}else{
		$bg_color = qode_hex2rgb('#ffffff');
	}
	if ($qode_options_proya['header_background_transparency_initial'] != "") {
		$bg_color_transparency = $qode_options_proya['header_background_transparency_initial'];
	}else{
		$bg_color_transparency = 1;
	}
?>
.header_bottom,
.header_top {
	background-color: rgba(<?php echo $bg_color[0]; ?>,<?php echo $bg_color[1]; ?>,<?php echo $bg_color[2]; ?>,<?php echo $bg_color_transparency; ?>);
}

<?php if(isset($bg_color_transparency) && $bg_color_transparency == 0) { ?>

.header_bottom,
.header_top {
    border-bottom: 0;
}

.header_bottom {
    box-shadow: none;
}

.header_top .right .inner > div:first-child,
.header_top .right .inner > div,
.header_top .left .inner > div:last-child,
.header_top .left .inner > div {
    border: none;
}

<?php } ?>

<?php } ?>

<?php if (!empty($qode_options_proya['header_separator_color'])) { ?>

.header_top,
.header_bottom,
.title,
.drop_down .second .inner ul li,
.header-widget.widget_nav_menu ul.menu li ul li a,
.header_top #lang_sel ul li ul li a,
.header_top #lang_sel ul li ul li a:visited,
.header_top #lang_sel_click ul li ul li a,
.header_top #lang_sel_click ul li ul li a:visited,
.drop_down .second .inner > ul,
.drop_down .second .inner>ul,
li.narrow .second .inner ul,
.drop_down .wide .second ul li,
.drop_down .second ul li
	{
	border-color:<?php echo $qode_options_proya['header_separator_color'];  ?>;
}

<?php } ?>
<?php if (isset($qode_options_proya['border_bottom_title_area']) && $qode_options_proya['border_bottom_title_area'] == "yes") { ?>
	.title{
		border-bottom-width:1px;
		border-bottom-style:solid;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['border_bottom_title_area_color']) ) { ?>
	.title{
	border-bottom-color:<?php echo $qode_options_proya['border_bottom_title_area_color'];  ?>;
	}
<?php } ?>
<?php if (isset($qode_options_proya['margin_after_title']) && $qode_options_proya['margin_after_title'] !== '' ) { ?>
	@media only screen and (min-width: 1000px) {
		.content .container .container_inner.default_template_holder,
		.content .container .container_inner.page_container_inner
		{
			padding-top:<?php echo $qode_options_proya['margin_after_title'];  ?>px;
		}
	}
<?php } ?>
<?php if (!empty($qode_options_proya['breadcrumbs_color']) ) { ?>
	.breadcrumbs,
	.breadcrumb .current,
	.breadcrumb a{
	color:<?php echo $qode_options_proya['breadcrumbs_color']; ?>;
	}
<?php } ?>
<?php
if (!empty($qode_options_proya['header_background_color_scroll']) || $qode_options_proya['header_background_transparency_scroll'] != "") {
	
	if(!empty($qode_options_proya['header_background_color_scroll'])){
		$bg_color_scroll = qode_hex2rgb($qode_options_proya['header_background_color_scroll']);
	}else{
		$bg_color_scroll = qode_hex2rgb('#ffffff');
	}
	
	if ($qode_options_proya['header_background_transparency_scroll'] != "") {
		$bg_color_scroll_transparency = $qode_options_proya['header_background_transparency_scroll'];
	}else{
		$bg_color_scroll_transparency = 1;
	}
?>
header.fixed.scrolled .header_bottom,
header.fixed.scrolled .header_top {
	background-color: rgba(<?php echo $bg_color_scroll[0]; ?>,<?php echo $bg_color_scroll[1]; ?>,<?php echo $bg_color_scroll[2]; ?>,<?php echo $bg_color_scroll_transparency; ?>) !important;
}
<?php } ?>

<?php if($qode_options_proya['header_background_transparency_scroll'] != "" && $qode_options_proya['header_background_transparency_scroll'] == 0) { ?>

header.scrolled .header_bottom,
header.scrolled .header_top {
    border-bottom: 0;
}

header.scrolled .header_bottom {
    box-shadow: none !important;
}

header.scrolled .header_top .right .inner > div:first-child,
header.scrolled .header_top .right .inner > div,
header.scrolled .header_top .left .inner > div:last-child,
header.scrolled .header_top .left .inner > div {
    border: none;
}
<?php } ?>



<?php
if (!empty($qode_options_proya['header_background_color_sticky']) || $qode_options_proya['header_background_transparency_sticky'] != "") {
	
	if(!empty($qode_options_proya['header_background_color_sticky'])){
		$bg_color_sticky = qode_hex2rgb($qode_options_proya['header_background_color_sticky']);
	}else{
		$bg_color_sticky = qode_hex2rgb('#ffffff');
	}
	
	if ($qode_options_proya['header_background_transparency_sticky'] != "") {
		$bg_color_sticky_transparency = $qode_options_proya['header_background_transparency_sticky'];
	}else{
		$bg_color_sticky_transparency = 1;
	}
?>
header.sticky .header_bottom{
	background-color: rgba(<?php echo $bg_color_sticky[0]; ?>,<?php echo $bg_color_sticky[1]; ?>,<?php echo $bg_color_sticky[2]; ?>,<?php echo $bg_color_sticky_transparency; ?>) !important;
}
<?php } ?>

<?php if (!empty($qode_options_proya['header_top_background_color']) || $qode_options_proya['header_background_transparency_initial'] != "") {
	if(!empty($qode_options_proya['header_top_background_color'])) {
		$bg_color_top = qode_hex2rgb($qode_options_proya['header_top_background_color']);
	} else {
        $bg_color_top = qode_hex2rgb('#fff');
    }

	if ($qode_options_proya['header_background_transparency_initial'] != "") {
		$bg_color_transparency = $qode_options_proya['header_background_transparency_initial'];
	} else{
		$bg_color_transparency = 1;
	}
?>

.header_top{
	background-color: rgba(<?php echo $bg_color_top[0]; ?>,<?php echo $bg_color_top[1]; ?>,<?php echo $bg_color_top[2]; ?>,<?php echo $bg_color_transparency; ?>);
}
<?php } ?>
<?php if (!empty($qode_options_proya['header_bottom_border_color'])) {
	if (!empty($qode_options_proya['header_botom_border_transparency'])) {
		$header_border_transparency = qode_hex2rgb($qode_options_proya['header_bottom_border_color']);
		?>

	header:not(.sticky):not(.scrolled) .header_bottom{
		border-bottom: 1px solid rgba(<?php echo $header_border_transparency[0]; ?>,<?php echo $header_border_transparency[1]; ?>,<?php echo $header_border_transparency[2]; ?>,<?php echo $qode_options_proya['header_botom_border_transparency']; ?>);
	}
	<?php } else { ?>
	header:not(.sticky):not(.scrolled) .header_bottom{
		border-bottom: 1px solid <?php echo $qode_options_proya['header_bottom_border_color'];  ?>;
	}

<?php } }?>
<?php
if (!empty($qode_options_proya['header_top_background_color']) || $qode_options_proya['header_background_transparency_scroll'] != "") {
	
	if(!empty($qode_options_proya['header_top_background_color'])){
		$bg_color_scroll_top = qode_hex2rgb($qode_options_proya['header_top_background_color']);
	}else{
		$bg_color_scroll_top = qode_hex2rgb('#000000');
	}
	
	if ($qode_options_proya['header_background_transparency_scroll'] != "") {
		$bg_color_scroll_transparency = $qode_options_proya['header_background_transparency_scroll'];
	}else{
		$bg_color_scroll_transparency = 0.7;
	}
?>
header.sticky .header_top{
	background-color: rgba(<?php echo $bg_color_scroll_top[0]; ?>,<?php echo $bg_color_scroll_top[1]; ?>,<?php echo $bg_color_scroll_top[2]; ?>,<?php echo $bg_color_scroll_transparency; ?>);
}
<?php } ?>

<?php
$header_bottom_appearance = "fixed";
if (isset($qode_options_proya['header_bottom_appearance'])) {
    $header_bottom_appearance = $qode_options_proya['header_bottom_appearance'];
}
?>

<?php 
	$display_header_top = "yes";
	if(isset($qode_options_proya['header_top_area'])){
		$display_header_top = $qode_options_proya['header_top_area'];
	}
	if (!empty($_SESSION['qode_proya_header_top'])){
		$display_header_top = $_SESSION['qode_proya_header_top'];
	}
	
	if($display_header_top == "no"){
		$margin_top_add = 0;
	}else{
		$margin_top_add = 33;
	}
	if (!empty($qode_options_proya['header_height'])) {
		$header_height = $qode_options_proya['header_height'];
	} else {
		$header_height = 100;
	}
	if (!empty($qode_options_proya['header_bottom_border_color'])) {
		$header_height = $header_height + 1;
	}
	if($header_bottom_appearance == "stick menu_bottom") {
		$menu_bottom = 60; // border 1px
		if ($qode_options_proya['center_logo_image'] == "yes") {
			if(is_active_sidebar('header_fixed_right')){
				$menu_bottom = $menu_bottom + 26; // 26 is for right widget in header bottom (line height of text)
			}
		}
	} else {
		$menu_bottom = 0;
	}
	$header_height = $header_height + $menu_bottom;
?>

<?php if ($header_bottom_appearance != "fixed" && $header_bottom_appearance != "fixed_hiding") {?>
	<?php if ($qode_options_proya['center_logo_image'] != "yes") { ?>
		<?php if($header_bottom_appearance == "stick menu_bottom") { ?>
		.content{
			margin-top: <?php echo '-'.($margin_top_add + $header_height); // 30 is top and bottom margin of centered logo  + 6 is neagitve margin on header?>px;
		}
		<?php }  else { ?>
			.content{
				margin-top: <?php echo '-'.($header_height + $margin_top_add); ?>px;
			}
		<?php } ?>
		
	<?php } else { 
			$height = 0;
		?>
		<?php if(isset($qode_options_proya['logo_image'])){
			if (!empty($qode_options_proya['logo_image'])) {
				$logo_url_obj = parse_url($qode_options_proya['logo_image']);
				list($width, $height, $type, $attr) = getimagesize($_SERVER['DOCUMENT_ROOT'].$logo_url_obj['path']);
			}
		} ?>
		<?php if($header_bottom_appearance == "stick menu_bottom") { ?>
		.content{
			margin-top: <?php echo '-'.(30 + $height + $menu_bottom + $margin_top_add); // 30 is top and bottom margin of centered logo ?>px;
		}
		<?php }  else { ?>
			.content{
				margin-top: <?php echo '-'.(30 + $height + $header_height + $margin_top_add -1); // 30 is top and bottom margin of centered logo, 1 is border ?>px;
			}
		<?php } ?>
	<?php } ?>
<?php } else { ?>
.content{
	margin-top: 0;
}
<?php } ?>

<?php if (!empty($qode_options_proya['header_height'])) { ?>
.logo_wrapper,
.side_menu_button,
.shopping_cart_inner
{
	height: <?php echo $qode_options_proya['header_height'];  ?>px;
}
.content.content_top_margin{
	margin-top: <?php echo $qode_options_proya['header_height'] + $margin_top_add;  ?>px !important;
}

header:not(.centered_logo) .header_fixed_right_area {
    line-height: <?php echo $qode_options_proya['header_height'];  ?>px;
}

<?php //if ($qode_options_proya['header_background_transparency_initial'] != "1") { ?>
<!---->
<!--.drop_down .second,-->
<!--.drop_down .second.bellow_header-->
<!--{-->
<!--	top: --><?php //echo $qode_options_proya['header_height'] + $header_bottom_border_width;  ?><!--px;-->
<!--}-->
<?php //} ?>

<?php } ?>
<?php if($qode_options_proya['center_logo_image'] == "yes"){
	$center_logo_height = 0;
	if (!empty($qode_options_proya['logo_image'])) {
		$logo_url_obj = parse_url($qode_options_proya['logo_image']);
		list($width, $center_logo_height, $type, $attr) = getimagesize($_SERVER['DOCUMENT_ROOT'].$logo_url_obj['path']);

        if (isset($qode_options_proya['center_logo_image']) && $qode_options_proya['center_logo_image'] == 'yes'){
            $center_logo_height = $header_height; //header_height is set above
        }

	} ?>
	.content.content_top_margin{
		margin-top: <?php echo $center_logo_height + $margin_top_add + $header_height + 30;  ?>px !important;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['header_height_scroll'])) { ?>
header.scrolled .logo_wrapper,
header.scrolled .side_menu_button{
	height: <?php echo $qode_options_proya['header_height_scroll'];  ?>px;
}

header.scrolled nav.main_menu ul li a {
	line-height: <?php echo $qode_options_proya['header_height_scroll'];  ?>px;
}

header.scrolled .drop_down .second{
	top: <?php echo $qode_options_proya['header_height_scroll'];  ?>px;
}
<?php } ?>

<?php if (!empty($qode_options_proya['header_height_sticky'])) { ?>
header.sticky .logo_wrapper,
header.sticky.centered_logo .logo_wrapper,
header.sticky .side_menu_button,
header.sticky .shopping_cart_inner
	{
	height: <?php echo $qode_options_proya['header_height_sticky'];  ?>px !important;
}

header.sticky nav.main_menu > ul > li > a, 
.light.sticky nav.main_menu > ul > li > a, 
.light.sticky nav.main_menu > ul > li > a:hover, 
.light.sticky nav.main_menu > ul > li.active > a, 
.dark.sticky nav.main_menu > ul > li > a, 
.dark.sticky nav.main_menu > ul > li > a:hover, 
.dark.sticky nav.main_menu > ul > li.active > a {
	line-height: <?php echo $qode_options_proya['header_height_sticky'];  ?>px;
}

<?php } ?>

<?php if(isset($qode_options_proya['header_height_scroll_hidden']) && $qode_options_proya['header_height_scroll_hidden'] !== "") { ?>
    @media only screen and (min-width: 1000px){
        header.fixed_hiding.centered_logo.fixed_hiding .header_inner_left,
        header.fixed_hiding .q_logo_hidden a{
            height: <?php echo $qode_options_proya['header_height_scroll_hidden'];  ?>px;
        }
    }
<?php } ?>

<?php if(isset($qode_options_proya['logo_image'])){
    if (!empty($qode_options_proya['logo_image'])) {
        $logo_url_obj = parse_url($qode_options_proya['logo_image']);
        list($logo_width, $logo_height, $type, $attr) = getimagesize($_SERVER['DOCUMENT_ROOT'].$logo_url_obj['path']);
?>
        header.fixed_hiding .q_logo a,
        header.fixed_hiding .q_logo{
            max-height: <?php echo $logo_height/2; ?>px;
        }
<?php
    }
} ?>

<?php if(isset($qode_options_proya['logo_mobile_header_height']) && !empty($qode_options_proya['logo_mobile_header_height'])){ ?>
    @media only screen and (max-width: 1000px){
        .q_logo a,.q_logo img{
            height: <?php echo $qode_options_proya['logo_mobile_header_height']; ?>px !important;
        }
    }   
<?php } ?>

<?php if(isset($qode_options_proya['logo_mobile_height']) && !empty($qode_options_proya['logo_mobile_height'])){ ?>
    @media only screen and (max-width: 480px){
        .q_logo a,.q_logo img{
            height: <?php echo $qode_options_proya['logo_mobile_height']; ?>px !important;
        }
    }   
<?php } ?>

<?php
$parallax_onoff = "on";
if (isset($qode_options_proya['parallax_onoff']))
	$parallax_onoff = $qode_options_proya['parallax_onoff'];
if ($parallax_onoff == "off"){
?>
    .touch section.parallax_section_holder{
		height: auto !important;
		min-height: 300px;  
		background-position: center top !important;  
		background-attachment: scroll;
        background-size: cover;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['header_height'])) { ?>
nav.main_menu > ul > li > a{
	line-height: <?php echo $qode_options_proya['header_height'];  ?>px;
}
<?php } ?>

<?php
if((isset($qode_options_proya['dropdown_background_color']) && $qode_options_proya['dropdown_background_color'] != "") ||
    (isset($qode_options_proya['dropdown_background_transparency'])) && $qode_options_proya['dropdown_background_transparency'] != "") {

    //dropdown background and transparency styles
    $dropdown_bg_styles                 = '';
    $dropdown_bg_color                  = '';
    $dropdown_bg_color_initial          = '#111';
    $dropdown_bg_transparency           = '';
    $dropdown_bg_transparency_initial   = 1;

    $dropdown_bg_color        = $qode_options_proya['dropdown_background_color'] != "" ? $qode_options_proya['dropdown_background_color'] : $dropdown_bg_color_initial;
    $dropdown_bg_transparency = $qode_options_proya['dropdown_background_transparency'] != "" ? $qode_options_proya['dropdown_background_transparency'] : $dropdown_bg_transparency_initial;

    $dropdown_bg_color_rgb    = qode_hex2rgb($dropdown_bg_color);

    ?>

    .drop_down .second .inner ul,
    .drop_down .second .inner ul li ul,
	.shopping_cart_dropdown,
    li.narrow .second .inner ul,
	.header_top .right #lang_sel ul ul,
    .drop_down .wide .second ul li.show_widget_area_in_popup .widget{
    background-color: <?php echo $dropdown_bg_color;  ?>;
    background-color: rgba(<?php echo $dropdown_bg_color_rgb[0]; ?>,<?php echo $dropdown_bg_color_rgb[1]; ?>,<?php echo $dropdown_bg_color_rgb[2]; ?>,<?php echo $dropdown_bg_transparency; ?>);
    }

<?php  } //end dropdown background and transparency styles ?>

<?php if (!empty($qode_options_proya['menu_color']) || !empty($qode_options_proya['menu_fontsize']) || !empty($qode_options_proya['menu_fontstyle']) || !empty($qode_options_proya['menu_fontweight']) || !empty($qode_options_proya['menu_letter_spacing']) || $qode_options_proya['menu_google_fonts'] != "-1" || (isset($qode_options_proya['menu_letterspacing']) && $qode_options_proya['menu_letterspacing'] !== '') || (isset($qode_options_proya['menu_text_transform']) && $qode_options_proya['menu_text_transform'] !== '')) { ?>
nav.main_menu > ul > li > a{
	<?php if (!empty($qode_options_proya['menu_color'])) { ?> color: <?php echo $qode_options_proya['menu_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['menu_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['menu_google_fonts']); ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['menu_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['menu_fontsize'];  ?>px; <?php } ?>
    <?php if (!empty($qode_options_proya['menu_lineheight'])) { ?> line-height: <?php echo $qode_options_proya['menu_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['menu_fontstyle'])) { ?> font-style: <?php echo $qode_options_proya['menu_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['menu_fontweight'])) { ?> font-weight: <?php echo $qode_options_proya['menu_fontweight'];  ?>; <?php } ?>
	<?php if ($qode_options_proya['menu_letterspacing'] !== '') { ?> letter-spacing: <?php echo $qode_options_proya['menu_letterspacing'];  ?>px; <?php } ?>
	<?php if ($qode_options_proya['menu_text_transform'] !== '') { ?> text-transform: <?php echo $qode_options_proya['menu_text_transform'];  ?>; <?php } ?>
}

<?php } ?>

<?php

if(isset($qode_options_proya['menu_separator_between_items']) && $qode_options_proya['menu_separator_between_items'] == 'yes') { ?>
	nav.main_menu > ul > li:not(:first-child):before {
		content: '|';
		position: relative;
		left: -2px;
		color: #9e9e9e;
		font-size: 15px;
		font-weight: 400;
	}
<?php }

if(isset($qode_options_proya['menu_separator_color']) && $qode_options_proya['menu_separator_color'] !== '') { ?>
	nav.main_menu > ul > li:not(:first-child):before {
		color: <?php echo $qode_options_proya['menu_separator_color']; ?>;
	}
<?php }

?>

<?php if (!empty($qode_options_proya['menu_hovercolor'])) { ?>
nav.main_menu ul li:hover a {
	<?php if($qode_options_proya['menu_hovercolor'] !== '') { ?> color: <?php echo $qode_options_proya['menu_hovercolor'];  ?>; <?php } ?>
}
<?php } ?>

<?php

	$menu_active_color = '';

	if(isset($qode_options_proya['menu_activecolor'])) {
		$menu_active_color = $qode_options_proya['menu_activecolor'];
	} elseif(isset($qode_options_proya['menu_hovercolor']) && $qode_options_proya['menu_hovercolor'] !== '') {
		$menu_active_color = $qode_options_proya['menu_hovercolor'];
	}

	if($menu_active_color !== '') {
		?>
		nav.main_menu ul li.active a {
			color: <?php echo $menu_active_color; ?>
		}
	<?php
	}
?>

<?php if(isset($qode_options_proya['menu_hover_background_color']) && $qode_options_proya['menu_hover_background_color'] !== '') {
	$menu_hover_background_color = $qode_options_proya['menu_hover_background_color'];

	if(isset($qode_options_proya['menu_hover_background_color_transparency']) && $qode_options_proya['menu_hover_background_color_transparency'] !== '') {
		$menu_hover_background_color_rgb = qode_hex2rgb($menu_hover_background_color);
		$menu_hover_background_color = 'rgba('.$menu_hover_background_color_rgb[0].', '.$menu_hover_background_color_rgb[1].', '.$menu_hover_background_color_rgb[2].', '.$qode_options_proya['menu_hover_background_color_transparency'].')';
	}
?>
	nav.main_menu > ul > li:hover > a,
	header.sticky nav.main_menu > ul > li:hover > a {
		<?php if($qode_options_proya['menu_hover_background_color'] !== '') { ?>
			background-color: <?php echo $menu_hover_background_color; ?>;
		<?php } ?>
	}

	<?php

	if(isset($qode_options_proya['menu_hovercolor']) && $qode_options_proya['menu_hovercolor'] !== '') {
		?>
		nav.main_menu > ul > li:hover > a,
		header.sticky nav.main_menu > ul > li:hover > a,
		.dark nav.main_menu > ul > li:hover > a,
		.light header.sticky nav.main_menu > ul > li:hover > a {
			color: <?php echo $qode_options_proya['menu_hovercolor']; ?> !important;
		}
		<?php
	}
	?>
<?php } ?>

<?php if(!empty($qode_options_proya['dropdown_color']) || !empty($qode_options_proya['dropdown_fontsize']) || !empty($qode_options_proya['dropdown_lineheight']) || !empty($qode_options_proya['dropdown_fontstyle']) || !empty($qode_options_proya['dropdown_fontweight']) || $qode_options_proya['dropdown_google_fonts'] != "-1" || !empty($qode_options_proya['dropdown_texttransform'])  || (isset($qode_options_proya['dropdown_letterspacing']) && $qode_options_proya['dropdown_letterspacing'] !== '')){ ?>
.drop_down .second .inner > ul > li > a,
.drop_down .second .inner > ul > li > h3,
.drop_down .wide .second .inner > ul > li > h3,
.drop_down .wide .second .inner > ul > li > a,
.drop_down .wide .second ul li ul li.menu-item-has-children > a,
.drop_down .wide .second .inner ul li.sub ul li.menu-item-has-children > a,
.drop_down .wide .second .inner > ul li.sub .flexslider ul li  h5 a,
.drop_down .wide .second .inner > ul li .flexslider ul li  h5 a,
.drop_down .wide .second .inner > ul li.sub .flexslider ul li  h5,
.drop_down .wide .second .inner > ul li .flexslider ul li  h5,
.header_top #lang_sel ul li ul li a {
	<?php if (!empty($qode_options_proya['dropdown_color'])) { ?> color: <?php echo $qode_options_proya['dropdown_color']; ?>; <?php } ?>
	<?php if($qode_options_proya['dropdown_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['dropdown_google_fonts']) ?>', sans-serif !important;
	<?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['dropdown_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_lineheight'])) { ?> line-height: <?php echo $qode_options_proya['dropdown_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_fontstyle'])) { ?> font-style: <?php echo $qode_options_proya['dropdown_fontstyle'];  ?>;  <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['dropdown_fontweight'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_texttransform'])) { ?> text-transform: <?php echo $qode_options_proya['dropdown_texttransform'];  ?>;  <?php } ?>
	<?php if ($qode_options_proya['dropdown_letterspacing'] !== '') { ?> letter-spacing: <?php echo $qode_options_proya['dropdown_letterspacing'];  ?>px;  <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['dropdown_hovercolor'])) { ?>
.drop_down .second .inner > ul > li > a:hover,
.drop_down .wide .second ul li ul li.menu-item-has-children > a:hover,
.drop_down .wide .second .inner ul li.sub ul li.menu-item-has-children > a:hover{
	color: <?php echo $qode_options_proya['dropdown_hovercolor'];  ?> !important;
}
<?php } ?>
<?php if(!empty($qode_options_proya['dropdown_padding_top_bottom'])){ ?>
	.drop_down .wide .second>.inner>ul>li.sub>ul>li>a,
	.drop_down .second .inner ul li a,
	.drop_down .wide .second ul li a,
	.drop_down .second .inner ul.right li a
	{
	<?php if (!empty($qode_options_proya['dropdown_padding_top_bottom'])) { ?> padding-top: <?php echo $qode_options_proya['dropdown_padding_top_bottom']; ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_padding_top_bottom'])) { ?> padding-bottom: <?php echo $qode_options_proya['dropdown_padding_top_bottom']; ?>px; <?php } ?>

	}
<?php } ?>
<?php if(isset($qode_options_proya['dropdown_separator_beetwen_items']) && $qode_options_proya['dropdown_separator_beetwen_items'] == "yes"){ ?>
	.drop_down .second ul li{
		border-bottom-style:solid;
	}
	li.narrow .second .inner ul{
		padding-top:0;
		padding-bottom:0;
	}
	.drop_down .second .inner ul li ul{
		top:0;
	}
<?php } ?>
<?php if(isset($qode_options_proya['dropdown_border_around']) && $qode_options_proya['dropdown_border_around'] == "yes"){ ?>
	.drop_down .second .inner>ul, li.narrow .second .inner ul{
	border-style:solid;
	border-width:1px;
	}

<?php } ?>
<?php if(!empty($qode_options_proya['dropdown_wide_color']) || !empty($qode_options_proya['dropdown_wide_fontsize']) || !empty($qode_options_proya['dropdown_wide_lineheight']) || !empty($qode_options_proya['dropdown_wide_fontstyle']) || !empty($qode_options_proya['dropdown_wide_fontweight']) || (isset($qode_options_proya['dropdown_wide_google_fonts']) && $qode_options_proya['dropdown_wide_google_fonts'] != "-1") || !empty($qode_options_proya['dropdown_wide_texttransform'])  || (isset($qode_options_proya['dropdown_wide_letterspacing']) && $qode_options_proya['dropdown_wide_letterspacing'] !== '')){ ?>
	.drop_down .wide .second .inner>ul>li>a
	{
	<?php if (!empty($qode_options_proya['dropdown_wide_color'])) { ?> color: <?php echo $qode_options_proya['dropdown_wide_color']; ?>; <?php } ?>
	<?php if(isset($qode_options_proya['dropdown_wide_google_fonts']) && $qode_options_proya['dropdown_wide_google_fonts'] != "-1"){ ?>
		font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['dropdown_wide_google_fonts']) ?>', sans-serif !important;
	<?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_wide_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['dropdown_wide_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_wide_lineheight'])) { ?> line-height: <?php echo $qode_options_proya['dropdown_wide_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_wide_fontstyle'])) { ?> font-style: <?php echo $qode_options_proya['dropdown_wide_fontstyle'];  ?>;  <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_wide_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['dropdown_wide_fontweight'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_wide_texttransform'])) { ?> text-transform: <?php echo $qode_options_proya['dropdown_wide_texttransform'];  ?>;  <?php } ?>
	<?php if (isset($qode_options_proya['dropdown_wide_letterspacing']) && $qode_options_proya['dropdown_wide_letterspacing'] !== '') { ?> letter-spacing: <?php echo $qode_options_proya['dropdown_wide_letterspacing'];  ?>px;  <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['dropdown_wide_hovercolor'])) { ?>
	.drop_down .wide .second .inner>ul>li>a:hover{
	color: <?php echo $qode_options_proya['dropdown_wide_hovercolor'];  ?> !important;
	}
<?php } ?>
<?php if(!empty($qode_options_proya['dropdown_color_thirdlvl']) || !empty($qode_options_proya['dropdown_fontsize_thirdlvl']) || !empty($qode_options_proya['dropdown_lineheight_thirdlvl']) || !empty($qode_options_proya['dropdown_fontstyle_thirdlvl']) || !empty($qode_options_proya['dropdown_fontweight_thirdlvl']) || $qode_options_proya['dropdown_google_fonts_thirdlvl'] != "-1" || !empty($qode_options_proya['dropdown_texttransform_thirdlvl']) || (isset($qode_options_proya['dropdown_letterspacing_thirdlvl']) && $qode_options_proya['dropdown_letterspacing_thirdlvl'] !== '')){ ?>
.drop_down .wide .second .inner ul li.sub ul li a,
.drop_down .wide .second ul li ul li a,
.drop_down .second .inner ul li.sub ul li a,
.drop_down .wide .second ul li ul li a,
.drop_down .wide .second .inner ul li.sub .flexslider ul li .menu_recent_post,
.drop_down .wide .second .inner ul li .flexslider ul li .menu_recent_post a,
.drop_down .wide .second .inner ul li .flexslider ul li .menu_recent_post,
.drop_down .wide .second .inner ul li .flexslider ul li .menu_recent_post a{
	<?php if (!empty($qode_options_proya['dropdown_color_thirdlvl'])) { ?> color: <?php echo $qode_options_proya['dropdown_color_thirdlvl'];  ?>;  <?php } ?>
	<?php if($qode_options_proya['dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['dropdown_google_fonts_thirdlvl']) ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_fontsize_thirdlvl'])) { ?> font-size: <?php echo $qode_options_proya['dropdown_fontsize_thirdlvl'];  ?>px;  <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_lineheight_thirdlvl'])) { ?> line-height: <?php echo $qode_options_proya['dropdown_lineheight_thirdlvl'];  ?>px;  <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_fontstyle_thirdlvl'])) { ?> font-style: <?php echo $qode_options_proya['dropdown_fontstyle_thirdlvl'];  ?>;   <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_fontweight_thirdlvl'])) { ?> font-weight: <?php echo $qode_options_proya['dropdown_fontweight_thirdlvl'];  ?>;  <?php } ?>
	<?php if (!empty($qode_options_proya['dropdown_texttransform_thirdlvl'])) { ?> text-transform: <?php echo $qode_options_proya['dropdown_texttransform_thirdlvl'];  ?>;  <?php } ?>
	<?php if ($qode_options_proya['dropdown_letterspacing_thirdlvl'] !== '') { ?> letter-spacing: <?php echo $qode_options_proya['dropdown_letterspacing_thirdlvl'];  ?>px;  <?php } ?>
}
.drop_down .wide.icons .second i{
    <?php if (!empty($qode_options_proya['dropdown_color_thirdlvl'])) { ?> color: <?php echo $qode_options_proya['dropdown_color_thirdlvl'];  ?>;  <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['dropdown_hovercolor_thirdlvl'])) { ?>
.drop_down .second .inner ul li.sub ul li a:hover,
.drop_down .wide .second ul li.show_widget_area_in_popup:hover .popup_wrapper > a,
.drop_down .second .inner ul li ul li a:hover,
.drop_down .wide.icons .second a:hover i
{
	color: <?php echo $qode_options_proya['dropdown_hovercolor_thirdlvl'];  ?> !important;
}
<?php } ?>


<?php if(!empty($qode_options_proya['fixed_color']) || !empty($qode_options_proya['fixed_fontsize']) || !empty($qode_options_proya['fixed_lineheight']) || !empty($qode_options_proya['fixed_fontstyle']) || !empty($qode_options_proya['fixed_fontweight']) || $qode_options_proya['fixed_google_fonts'] != "-1"){ ?>
header.scrolled nav.main_menu > ul > li > a,
header.light.scrolled nav.main_menu > ul > li > a,
header.dark.scrolled nav.main_menu > ul > li > a{
	<?php if (!empty($qode_options_proya['fixed_color'])) { ?> color: <?php echo $qode_options_proya['fixed_color']; ?>; <?php } ?>
	<?php if($qode_options_proya['fixed_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['fixed_google_fonts']) ?>', sans-serif !important;
	<?php } ?>
	<?php if (!empty($qode_options_proya['fixed_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['fixed_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['fixed_lineheight'])) { ?> line-height: <?php echo $qode_options_proya['fixed_lineheight'];  ?>px !important; <?php } ?>
	<?php if (!empty($qode_options_proya['fixed_fontstyle'])) { ?> font-style: <?php echo $qode_options_proya['fixed_fontstyle'];  ?>;  <?php } ?>
	<?php if (!empty($qode_options_proya['fixed_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['fixed_fontweight'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['fixed_color'])) { ?>
header.scrolled .side_menu_button a {
    <?php if (!empty($qode_options_proya['fixed_color'])) { ?> color: <?php echo $qode_options_proya['fixed_color']; ?> !important; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['fixed_hovercolor'])) { ?>
header.scrolled nav.main_menu > ul > li > a:hover > span,
header.scrolled nav.main_menu > ul > li:hover > a > span,
header.scrolled nav.main_menu > ul > li.active > a > span,
header.scrolled nav.main_menu > ul > li > a:hover > i,
header.scrolled nav.main_menu > ul > li:hover > a > i,
header.scrolled nav.main_menu > ul > li.active > a > i,
header.scrolled .side_menu_button a:hover,
.light.scrolled nav.main_menu > ul > li > a:hover,
.light.scrolled nav.main_menu > ul > li.active > a,
.light.scrolled .side_menu_button a:hover,
.dark.scrolled nav.main_menu > ul > li > a:hover,
.dark.scrolled nav.main_menu > ul > li.active > a,
.dark.scrolled .side_menu_button a:hover {
	color: <?php echo $qode_options_proya['fixed_hovercolor'];  ?> !important;
}
<?php } ?>

<?php if(!empty($qode_options_proya['sticky_color']) || !empty($qode_options_proya['sticky_fontsize']) || !empty($qode_options_proya['sticky_lineheight']) || !empty($qode_options_proya['sticky_fontstyle']) || !empty($qode_options_proya['sticky_fontweight']) || $qode_options_proya['sticky_google_fonts'] != "-1"){ ?>
header.sticky nav.main_menu > ul > li > a, 
header.light.sticky nav.main_menu > ul > li > a, 
header.dark.sticky nav.main_menu > ul > li > a{
	<?php if (!empty($qode_options_proya['sticky_color'])) { ?> color: <?php echo $qode_options_proya['sticky_color']; ?>; <?php } ?>
	<?php if($qode_options_proya['sticky_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['sticky_google_fonts']) ?>', sans-serif !important;
	<?php } ?>
	<?php if (!empty($qode_options_proya['sticky_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['sticky_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['sticky_lineheight'])) { ?> line-height: <?php echo $qode_options_proya['sticky_lineheight'];  ?>px !important; <?php } ?>
	<?php if (!empty($qode_options_proya['sticky_fontstyle'])) { ?> font-style: <?php echo $qode_options_proya['sticky_fontstyle'];  ?>;  <?php } ?>
	<?php if (!empty($qode_options_proya['sticky_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['sticky_fontweight'];  ?>; <?php } ?>
}
<?php } ?>

<?php if (!empty($qode_options_proya['sticky_color'])) { ?>
header.sticky .side_menu_button a, 
header.sticky .side_menu_button a:hover{
    <?php if (!empty($qode_options_proya['sticky_color'])) { ?> color: <?php echo $qode_options_proya['sticky_color']; ?>; <?php } ?>
}
<?php } ?>

<?php if (!empty($qode_options_proya['sticky_hovercolor'])) { ?>
header.sticky nav.main_menu > ul > li > a:hover span, 
header.sticky nav.main_menu > ul > li.active > a span,
header.sticky nav.main_menu > ul > li:hover > a > span,
header.sticky nav.main_menu > ul > li > a:hover > i, 
header.sticky nav.main_menu > ul > li:hover > a > i,
header.sticky nav.main_menu > ul > li.active > a > i,
.light.sticky nav.main_menu > ul > li > a:hover, 
.light.sticky nav.main_menu > ul > li.active > a, 
.dark.sticky nav.main_menu > ul > li > a:hover, 
.dark.sticky nav.main_menu > ul > li.active > a{
	color: <?php echo $qode_options_proya['sticky_hovercolor'];  ?> !important;
}
<?php } ?>

<?php if (!empty($qode_options_proya['mobile_color']) || !empty($qode_options_proya['mobile_fontsize']) || !empty($qode_options_proya['mobile_lineheight']) || !empty($qode_options_proya['mobile_fontstyle']) || !empty($qode_options_proya['mobile_fontweight']) || !empty($qode_options_proya['mobile_letter_spacing']) || $qode_options_proya['mobile_google_fonts'] != "-1") { ?>
nav.mobile_menu ul li a,
nav.mobile_menu ul li h3{
	<?php if (!empty($qode_options_proya['mobile_color'])) { ?> color: <?php echo $qode_options_proya['mobile_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['mobile_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['mobile_google_fonts']); ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['mobile_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['mobile_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['mobile_lineheight'])) { ?> line-height: <?php echo $qode_options_proya['mobile_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['mobile_fontstyle'])) { ?> font-style: <?php echo $qode_options_proya['mobile_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['mobile_fontweight'])) { ?> font-weight: <?php echo $qode_options_proya['mobile_fontweight'];  ?>; <?php } ?>
	<?php if(!empty($qode_options_proya['mobile_letter_spacing'])){ ?>
	letter-spacing: <?php echo $qode_options_proya['mobile_letter_spacing'];  ?>px;
	<?php } ?>
}

<?php } ?>

<?php if(!empty($qode_options_proya['mobile_color'])) { ?>
	nav.mobile_menu ul li span.mobile_arrow i, nav.mobile_menu ul li span.mobile_arrow i {
	    color: <?php echo $qode_options_proya['mobile_color']; ?>;
	}
<?php } ?>

<?php if (!empty($qode_options_proya['mobile_hovercolor'])) { ?>
nav.mobile_menu ul li a:hover,
nav.mobile_menu ul li.active > a,
nav.mobile_menu ul li.current-menu-item > a{
	color: <?php echo $qode_options_proya['mobile_hovercolor'];  ?>;
}
<?php } ?>
<?php if (!empty($qode_options_proya['mobile_separator_color'])) { ?>
	nav.mobile_menu ul li,
	nav.mobile_menu ul li,
	nav.mobile_menu ul li ul li,
    nav.mobile_menu ul li.open_sub > ul{
		border-color: <?php echo $qode_options_proya['mobile_separator_color'];  ?>;
	}
<?php } ?>

<?php if (!empty($qode_options_proya['mobile_background_color'])) { ?>
	@media only screen and (max-width: 1000px){
		.header_bottom,
		nav.mobile_menu{
			background-color: <?php echo $qode_options_proya['mobile_background_color'];  ?> !important;
		}
	}
<?php } ?>
<?php if (!empty($qode_options_proya['input_background_color']) || !empty($qode_options_proya['input_border_color']) || !empty($qode_options_proya['input_text_color'])) { ?>
	#respond textarea,
	#respond input[type='text'],
	.contact_form input[type='text'],
	.contact_form  textarea,
	.comment_holder #respond textarea,
	.comment_holder #respond input[type='text'],
	input.wpcf7-form-control.wpcf7-text,
	input.wpcf7-form-control.wpcf7-number,
	input.wpcf7-form-control.wpcf7-date,
	textarea.wpcf7-form-control.wpcf7-textarea,
	select.wpcf7-form-control.wpcf7-select,
	input.wpcf7-form-control.wpcf7-quiz,
	.post-password-form input[type='password']
	{
	<?php if (!empty($qode_options_proya['input_background_color'])) { ?>background-color: <?php echo $qode_options_proya['input_background_color'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['input_border_color'])) { ?>border: 1px solid <?php echo $qode_options_proya['input_border_color'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['input_text_color'])) { ?>color:<?php echo $qode_options_proya['input_text_color'];  ?>; <?php } ?>
	}
<?php } ?>

<?php if (!empty($qode_options_proya['h1_color']) || !empty($qode_options_proya['h1_fontsize']) || !empty($qode_options_proya['h1_lineheight']) || !empty($qode_options_proya['h1_fontstyle']) || !empty($qode_options_proya['h1_fontweight']) || (isset($qode_options_proya['h1_letterspacing']) && $qode_options_proya['h1_letterspacing'] !== '') || $qode_options_proya['h1_google_fonts'] != "-1" || !empty($qode_options_proya['h1_texttransform'])) { ?>
h1,
.title h1 {
	<?php if (!empty($qode_options_proya['h1_color'])) { ?>	color: <?php echo $qode_options_proya['h1_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['h1_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['h1_google_fonts']); ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['h1_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['h1_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h1_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['h1_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h1_fontstyle'])) { ?>font-style: <?php echo $qode_options_proya['h1_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['h1_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['h1_fontweight'];  ?>; <?php } ?>
    <?php if ($qode_options_proya['h1_letterspacing'] !== '') { ?>letter-spacing: <?php echo $qode_options_proya['h1_letterspacing'];  ?>px; <?php } ?>
    <?php if (!empty($qode_options_proya['h1_texttransform'])) { ?>text-transform: <?php echo $qode_options_proya['h1_texttransform'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['page_title_color']) || !empty($qode_options_proya['page_title_fontsize']) || !empty($qode_options_proya['page_title_lineheight']) || !empty($qode_options_proya['page_title_fontstyle']) || !empty($qode_options_proya['page_title_fontweight']) || $qode_options_proya['page_title_google_fonts'] != "-1") { ?>
.title h1{
	<?php if (!empty($qode_options_proya['page_title_color'])) { ?>color: <?php echo $qode_options_proya['page_title_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['page_title_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['page_title_google_fonts']); ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['page_title_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['page_title_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['page_title_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['page_title_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['page_title_fontstyle'])) { ?>font-style: <?php echo $qode_options_proya['page_title_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['page_title_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['page_title_fontweight'];  ?>; <?php } ?>
}

<?php } ?>
<?php if (!empty($qode_options_proya['page_title_fontsize']) || !empty($qode_options_proya['page_title_lineheight'])) { ?>
	.title.title_size_small h1{
	<?php if (!empty($qode_options_proya['page_title_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['page_title_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['page_title_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['page_title_lineheight'];  ?>px; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['page_title_medium_fontsize']) || !empty($qode_options_proya['page_title_medium_lineheight']) || !empty($qode_options_proya['page_title_medium_fontweight'])) { ?>
	.title.title_size_medium h1{
	<?php if (!empty($qode_options_proya['page_title_medium_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['page_title_medium_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['page_title_medium_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['page_title_medium_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['page_title_medium_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['page_title_medium_fontweight'];  ?>; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['page_title_large_fontsize']) || !empty($qode_options_proya['page_title_large_lineheight']) || !empty($qode_options_proya['page_title_large_fontweight'])) { ?>
	.title.title_size_large h1{
	<?php if (!empty($qode_options_proya['page_title_large_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['page_title_large_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['page_title_large_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['page_title_large_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['page_title_large_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['page_title_large_fontweight'];  ?>; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['h2_color']) || !empty($qode_options_proya['h2_fontsize']) || !empty($qode_options_proya['h2_lineheight']) || !empty($qode_options_proya['h2_fontstyle']) || !empty($qode_options_proya['h2_fontweight']) || (isset($qode_options_proya['h2_letterspacing']) && $qode_options_proya['h2_letterspacing'] !== '') || $qode_options_proya['h2_google_fonts'] != "-1" || !empty($qode_options_proya['h2_texttransform'])) { ?>
h2,
h2 a{
	<?php if (!empty($qode_options_proya['h2_color'])) { ?>color: <?php echo $qode_options_proya['h2_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['h2_google_fonts'] != "-1"){ ?>
		font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['h2_google_fonts']); ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['h2_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['h2_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h2_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['h2_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h2_fontstyle'])) { ?>font-style: <?php echo $qode_options_proya['h2_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['h2_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['h2_fontweight'];  ?>; <?php } ?>
    <?php if ($qode_options_proya['h2_letterspacing'] !== '') { ?>letter-spacing: <?php echo $qode_options_proya['h2_letterspacing'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h2_texttransform'])) { ?>text-transform: <?php echo $qode_options_proya['h2_texttransform'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['h3_color']) || !empty($qode_options_proya['h3_fontsize']) || !empty($qode_options_proya['h3_lineheight']) || !empty($qode_options_proya['h3_fontstyle']) || !empty($qode_options_proya['h3_fontweight']) || (isset($qode_options_proya['h3_letterspacing']) && $qode_options_proya['h3_letterspacing'] !== '') || $qode_options_proya['h3_google_fonts'] != "-1" || !empty($qode_options_proya['h3_texttransform'])) { ?>
h3,h3 a{
	<?php if (!empty($qode_options_proya['h3_color'])) { ?>color: <?php echo $qode_options_proya['h3_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['h3_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['h3_google_fonts']); ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['h3_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['h3_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h3_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['h3_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h3_fontstyle'])) { ?>font-style: <?php echo $qode_options_proya['h3_fontstyle'];?>; <?php } ?>
	<?php if (!empty($qode_options_proya['h3_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['h3_fontweight'];  ?>; <?php } ?>
    <?php if ($qode_options_proya['h3_letterspacing'] !== '') { ?>letter-spacing: <?php echo $qode_options_proya['h3_letterspacing'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h3_texttransform'])) { ?>text-transform: <?php echo $qode_options_proya['h3_texttransform'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['h4_color']) || !empty($qode_options_proya['h4_fontsize']) || !empty($qode_options_proya['h4_lineheight']) || !empty($qode_options_proya['h4_fontstyle']) || !empty($qode_options_proya['h4_fontweight']) || (isset($qode_options_proya['h4_letterspacing']) && $qode_options_proya['h4_letterspacing'] !== '') || $qode_options_proya['h4_google_fonts'] != "-1" || !empty($qode_options_proya['h4_texttransform'])) { ?>
h4,
h4 a{
	<?php if (!empty($qode_options_proya['h4_color'])) { ?>color: <?php echo $qode_options_proya['h4_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['h4_google_fonts'] != "-1"){ ?>
		font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['h4_google_fonts']); ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['h4_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['h4_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h4_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['h4_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h4_fontstyle'])) { ?>font-style: <?php echo $qode_options_proya['h4_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['h4_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['h4_fontweight'];  ?>; <?php } ?>
    <?php if ($qode_options_proya['h4_letterspacing'] !== '') { ?>letter-spacing: <?php echo $qode_options_proya['h4_letterspacing'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h4_texttransform'])) { ?>text-transform: <?php echo $qode_options_proya['h4_texttransform'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['h5_color']) || !empty($qode_options_proya['h5_fontsize']) || !empty($qode_options_proya['h5_lineheight']) || !empty($qode_options_proya['h5_fontstyle']) || !empty($qode_options_proya['h5_fontweight']) || (isset($qode_options_proya['h5_letterspacing']) && $qode_options_proya['h5_letterspacing'] !== '') || $qode_options_proya['h5_google_fonts'] != "-1" || !empty($qode_options_proya['h5_texttransform'])) { ?>
h5,
h5 a,
.q_icon_with_title .icon_text_holder h5.icon_title {
	<?php if (!empty($qode_options_proya['h5_color'])) { ?>color: <?php echo $qode_options_proya['h5_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['h5_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['h5_google_fonts']); ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['h5_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['h5_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h5_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['h5_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h5_fontstyle'])) { ?>font-style: <?php echo $qode_options_proya['h5_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['h5_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['h5_fontweight'];  ?>; <?php } ?>
    <?php if ($qode_options_proya['h5_letterspacing'] !== '') { ?>letter-spacing: <?php echo $qode_options_proya['h5_letterspacing'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h5_texttransform'])) { ?>text-transform: <?php echo $qode_options_proya['h5_texttransform'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['h6_color']) || !empty($qode_options_proya['h6_fontsize']) || !empty($qode_options_proya['h6_lineheight']) || !empty($qode_options_proya['h6_fontstyle']) || !empty($qode_options_proya['h6_fontweight']) || (isset($qode_options_proya['h6_letterspacing']) && $qode_options_proya['h6_letterspacing'] !== '') || $qode_options_proya['h6_google_fonts'] != "-1" || !empty($qode_options_proya['h6_texttransform'])) { ?>
h6, h6 a {
	<?php if (!empty($qode_options_proya['h6_color'])) { ?>color: <?php echo $qode_options_proya['h6_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['h6_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['h6_google_fonts']); ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['h6_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['h6_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h6_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['h6_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h6_fontstyle'])) { ?>font-style: <?php echo $qode_options_proya['h6_fontstyle'];  ?>;  <?php } ?>
	<?php if (!empty($qode_options_proya['h6_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['h6_fontweight'];  ?>; <?php } ?>
	<?php if ($qode_options_proya['h6_letterspacing'] !== '') { ?>letter-spacing: <?php echo $qode_options_proya['h6_letterspacing'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['h6_texttransform'])) { ?>text-transform: <?php echo $qode_options_proya['h6_texttransform'];  ?>; <?php } ?>
}

<?php } ?>
<?php if(!empty($qode_options_proya['quote_link_blockqoute_fontsize']) || !empty($qode_options_proya['quote_link_blockqoute_lineheight'])){ ?>
	.blog_holder article.format-quote .post_text .post_title p,
	.blog_holder article.format-link .post_text .post_title p,
	.blog_holder article.format-quote .post_text .quote_author,
	blockquote h5
	{
	<?php if (!empty($qode_options_proya['quote_link_blockqoute_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['quote_link_blockqoute_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['quote_link_blockqoute_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['quote_link_blockqoute_lineheight'];  ?>px; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['text_color']) || !empty($qode_options_proya['text_fontsize']) || !empty($qode_options_proya['text_lineheight']) || !empty($qode_options_proya['text_fontstyle']) || !empty($qode_options_proya['text_fontweight']) || $qode_options_proya['text_google_fonts'] != "-1" || !empty($qode_options_proya['text_margin'])) { ?>
    p{
    	<?php if (!empty($qode_options_proya['text_color'])) { ?>color: <?php echo $qode_options_proya['text_color'];  ?>;<?php } ?>
    	<?php if($qode_options_proya['text_google_fonts'] != "-1"){ ?>
    		font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['text_google_fonts']); ?>', sans-serif;
    	<?php } ?>
    	<?php if (!empty($qode_options_proya['text_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['text_fontsize'];  ?>px;<?php } ?>
    	<?php if (!empty($qode_options_proya['text_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['text_lineheight'];  ?>px;<?php } ?>
    	<?php if (!empty($qode_options_proya['text_fontstyle'])) { ?>font-style: <?php echo $qode_options_proya['text_fontstyle'];  ?>;<?php } ?>
    	<?php if (!empty($qode_options_proya['text_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['text_fontweight'];  ?>;<?php } ?>
    	<?php if (!empty($qode_options_proya['text_margin'])) { ?>margin-top: <?php echo $qode_options_proya['text_margin'];  ?>px;<?php } ?>
    	<?php if (!empty($qode_options_proya['text_margin'])) { ?>margin-bottom: <?php echo $qode_options_proya['text_margin'];  ?>px;<?php } ?>
    }
    .filter_holder ul li span,
    blockquote h5,
    .q_social_icon_holder i.simple_social,
    .header-widget.widget_nav_menu ul.menu li a,
    .side_menu a,
    .side_menu li,
    .side_menu span,
    .side_menu p,
    .side_menu .widget.widget_rss li a.rsswidget,
    .side_menu #wp-calendar caption,
    .side_menu #wp-calendar th, 
    .side_menu #wp-calendar td,
    aside .widget #lang_sel_list li a,
    aside .widget #lang_sel li a,
    aside .widget #lang_sel_click li a,
    section.side_menu #lang_sel_list li a,
    section.side_menu #lang_sel li a,
    section.side_menu #lang_sel_click li a,
    footer #lang_sel_list li a,
    footer #lang_sel li a,
    footer #lang_sel_click li a,
    footer #lang_sel_list.lang_sel_list_horizontal a,
    footer #lang_sel_list.lang_sel_list_vertical a,
    .side_menu #lang_sel_list.lang_sel_list_horizontal a,
    .side_menu #lang_sel_list.lang_sel_list_vertical a,
    #lang_sel_footer a{
    	<?php if (!empty($qode_options_proya['text_color'])) { ?>color: <?php echo $qode_options_proya['text_color'];  ?>;<?php } ?>
    }
    .header_top #lang_sel > ul > li > a, 
    .header_top #lang_sel_click > ul > li> a,
    footer #lang_sel ul li a,
    footer #lang_sel ul ul a,
    footer #lang_sel_click ul li a,
    footer #lang_sel_click ul ul a,
    footer #lang_sel_click ul ul a span,
    section.side_menu #lang_sel ul li a,
    section.side_menu #lang_sel ul ul a,
    section.side_menu #lang_sel ul ul a:visited,
    section.side_menu #lang_sel_click > ul > li > a,
    section.side_menu #lang_sel_click ul ul a,
    section.side_menu #lang_sel_click ul ul a:visited{
    	<?php if (!empty($qode_options_proya['text_color'])) { ?>color: <?php echo $qode_options_proya['text_color'];  ?> !important;<?php } ?>
    }
    <?php if(function_exists("is_woocommerce") && !empty($qode_options_proya['text_color'])){ ?>
        .woocommerce del,
        .woocommerce-page del,
        .woocommerce input[type='text']:not(.qode_search_field),
        .woocommerce input[type='password'],
        .woocommerce input[type='email'],
        .woocommerce-page input[type='text']:not(.qode_search_field),
        .woocommerce-page input[type='password'],
        .woocommerce-page input[type='email'],
        .woocommerce textarea,
        .woocommerce-page textarea,
        .woocommerce .select2-container .select2-choice,
        .woocommerce-page .select2-container .select2-choice,
        .woocommerce .select2-dropdown-open.select2-drop-above .select2-choice,
        .woocommerce .select2-dropdown-open.select2-drop-above .select2-choices,
        .woocommerce-page .select2-dropdown-open.select2-drop-above .select2-choice,
        .woocommerce-page .select2-dropdown-open.select2-drop-above .select2-choices,
        .woocommerce .chosen-container.chosen-container-single .chosen-single,
        .woocommerce-page .chosen-container.chosen-container-single .chosen-single,
        .woocommerce-checkout .form-row .chosen-container-single .chosen-single,
        .woocommerce ul.products li.product h4,
        .woocommerce div.product p[itemprop='price'] del,
        .woocommerce div.product p[itemprop='price'] del span.amount,
        .woocommerce div.product div.product_meta > span span,
        .woocommerce div.product div.product_meta > span a,
        .woocommerce aside ul.product_list_widget li > a,
        .woocommerce aside ul.product-categories li > a,
        .woocommerce aside ul.product_list_widget li del span.amount,
        .shopping_cart_dropdown ul li a,
        .select2-drop{
            color: <?php echo $qode_options_proya['text_color']; ?>;
        }
    <?php } ?>
<?php } ?>
<?php if (!empty($qode_options_proya['link_color']) || !empty($qode_options_proya['link_fontstyle']) || !empty($qode_options_proya['link_fontweight']) || !empty($qode_options_proya['link_fontdecoration'])) { ?>
a, p a{
	<?php if (!empty($qode_options_proya['link_color'])) { ?>color: <?php echo $qode_options_proya['link_color'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_proya['link_fontstyle'])) { ?>font-style: <?php echo $qode_options_proya['link_fontstyle'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_proya['link_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['link_fontweight'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_proya['link_fontdecoration'])) { ?>text-decoration: <?php echo $qode_options_proya['link_fontdecoration'];  ?>;<?php } ?>
}

h1 a:hover,h2 a:hover,h3 a:hover,h4 a:hover,h5 a:hover,h6 a:hover,
.q_icon_with_title .icon_with_title_link,
.blog_holder article .post_description a:hover,
.blog_holder.masonry article .post_info a:hover,
.breadcrumb .current,
.breadcrumb a:hover,
.portfolio_social_holder a:hover,
.latest_post_inner .post_infos a:hover{
    <?php if (!empty($qode_options_proya['link_color'])) { ?>color: <?php echo $qode_options_proya['link_color'];  ?>;<?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['link_hovercolor']) || !empty($qode_options_proya['link_fontdecoration'])) { ?>
a:hover,p a:hover,
h1 a:hover,h2 a:hover,h3 a:hover,h4 a:hover,h5 a:hover,h6 a:hover,
.q_tabs .tabs-nav li a:hover,
.q_icon_with_title .icon_with_title_link:hover,
.blog_holder article .post_description a:hover,
.blog_holder.masonry article .post_info a:hover,
.portfolio_social_holder a:hover,
.latest_post_inner .post_infos a:hover{
	<?php if (!empty($qode_options_proya['link_hovercolor'])) { ?>color: <?php echo $qode_options_proya['link_hovercolor'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_proya['link_fontdecoration'])) { ?>text-decoration: <?php echo $qode_options_proya['link_fontdecoration'];  ?>;<?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['blockquote_font_color'])) { ?>
	blockquote h5{
		color: <?php echo $qode_options_proya['blockquote_font_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['blockquote_background_color']) && !empty($qode_options_proya['blockquote_border_color'])) { ?>
	blockquote{
		border-color: <?php echo $qode_options_proya['blockquote_border_color'];  ?>;
		background-color: <?php echo $qode_options_proya['blockquote_background_color'];  ?>;
	}
<?php } ?>
<?php if(!empty($qode_options_proya['blockquote_quote_icon_color'])) { ?>
    blockquote i.pull-left {
        color: <?php echo $qode_options_proya['blockquote_quote_icon_color']; ?>;
    }
<?php } ?>

<?php

//generate subtitle styles
$page_subtitle_styles 		= '';
$page_subtitle_large_styles = '';

if(isset($qode_options_proya['page_subtitle_color']) && $qode_options_proya['page_subtitle_color'] !== '') {
	$page_subtitle_styles .= 'color: '.$qode_options_proya['page_subtitle_color'].';';
}

if(isset($qode_options_proya['page_subtitle_fontsize']) && $qode_options_proya['page_subtitle_fontsize'] !== '') {
	$page_subtitle_styles .= 'font-size: '.$qode_options_proya['page_subtitle_fontsize'].'px;';
}

if(isset($qode_options_proya['page_subtitle_font_family']) && $qode_options_proya['page_subtitle_font_family'] !== '-1') {
	$page_subtitle_styles .= 'font-family: "'.str_replace('+', ' ', $qode_options_proya['page_subtitle_font_family']).'";';
}

if(isset($qode_options_proya['page_subtitle_lineheight']) && $qode_options_proya['page_subtitle_lineheight'] !== '') {
	$page_subtitle_styles .= 'line-height: '.$qode_options_proya['page_subtitle_lineheight'].'px;';
}

if(isset($qode_options_proya['page_subtitle_fontweight']) && $qode_options_proya['page_subtitle_fontweight'] !== '') {
	$page_subtitle_styles .= 'font-weight: '.$qode_options_proya['page_subtitle_fontweight'].';';
}

if(isset($qode_options_proya['page_subtitle_font_style']) && $qode_options_proya['page_subtitle_font_style'] !== '') {
	$page_subtitle_styles .= 'font-style: '.$qode_options_proya['page_subtitle_font_style'].';';
}

if($page_subtitle_styles !== '') {
	?>
	.subtitle {
		<?php echo $page_subtitle_styles; ?>
	}
	<?php
}
?>

<?php if (!empty($qode_options_proya['page_subtitle_large_fontsize']) || !empty($qode_options_proya['page_subtitle_large_lineheight']) || !empty($qode_options_proya['page_subtitle_large_fontweight'])) { ?>
.title.title_size_large	h4.subtitle{
	<?php if (!empty($qode_options_proya['page_subtitle_large_fontsize'])) { ?>font-size: <?php echo $qode_options_proya['page_subtitle_large_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['page_subtitle_large_lineheight'])) { ?>line-height: <?php echo $qode_options_proya['page_subtitle_large_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['page_subtitle_large_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['page_subtitle_large_fontweight'];  ?>; <?php } ?>
	}
<?php } ?>

<?php
//generate separator custom styles
$separator_styles = '';

if(isset($qode_options_proya['separator_thickness']) && $qode_options_proya['separator_thickness'] !== '') {
	$separator_styles .= 'height: '.$qode_options_proya['separator_thickness'].'px;';
}

if(isset($qode_options_proya['separator_topmargin']) && $qode_options_proya['separator_topmargin'] !== '') {
	$separator_styles .= 'margin-top: '.$qode_options_proya['separator_topmargin'].'px;';
}

if(isset($qode_options_proya['separator_bottommargin']) && $qode_options_proya['separator_bottommargin'] !== '') {
	$separator_styles .= 'margin-bottom: '.$qode_options_proya['separator_bottommargin'].'px;';
}

if(isset($qode_options_proya['separator_color']) && $qode_options_proya['separator_color'] !== '') {
	$separator_styles .= 'background-color: '.$qode_options_proya['separator_color'].';';
}

if(isset($qode_options_proya['separator_color_transparency']) && $qode_options_proya['separator_color_transparency'] !== '') {
	$separator_styles .= 'opacity: '.$qode_options_proya['separator_color_transparency'].';';
}

if($separator_styles !== '') {
	?>
	.separator {
		<?php echo $separator_styles; ?>
	}
	<?php
}

//generate small separator custom styles
$separator_small_styles = '';
$portfolio_slider_separator_styles = '';

if(isset($qode_options_proya['separator_small_thickness']) && $qode_options_proya['separator_small_thickness'] !== '') {
	$separator_small_styles .= 'height: '.$qode_options_proya['separator_small_thickness'].'px;';
}

if(isset($qode_options_proya['separator_small_topmargin']) && $qode_options_proya['separator_small_topmargin'] !== '') {
	$separator_small_styles .= 'margin-top: '.$qode_options_proya['separator_small_topmargin'].'px;';
}

if(isset($qode_options_proya['separator_small_bottommargin']) && $qode_options_proya['separator_small_bottommargin'] !== '') {
	$separator_small_styles .= 'margin-bottom: '.$qode_options_proya['separator_small_bottommargin'].'px;';
}

if(isset($qode_options_proya['separator_small_color']) && $qode_options_proya['separator_small_color'] !== '') {
	$separator_small_styles .= 'background-color: '.$qode_options_proya['separator_small_color'].';';
}

if(isset($qode_options_proya['separator_small_color_transparency']) && $qode_options_proya['separator_small_color_transparency'] !== '') {
	$separator_small_styles .= 'opacity: '.$qode_options_proya['separator_small_color_transparency'].';';
}

if(isset($qode_options_proya['separator_small_width']) && $qode_options_proya['separator_small_width'] !== '') {
	$separator_small_styles .= 'width: '.$qode_options_proya['separator_small_width'].'px;';
}

if($separator_small_styles !== '') {
	?>
	.separator.small,
	.wpb_column>.wpb_wrapper .separator.small {
		<?php echo $separator_small_styles; ?>
	}
	<?php
}

?>

<?php
//generate separator with icon styles
$separator_with_icon_styles = '';
$separator_with_icon_before_after_styles = '';

if(isset($qode_options_proya['separator_with_icon_thickness']) && $qode_options_proya['separator_with_icon_thickness'] !== '') {
	$separator_with_icon_before_after_styles .= 'border-bottom-width: '.$qode_options_proya['separator_with_icon_thickness'].'px;';
	$before_after_top = 10-((intval($qode_options_proya['separator_with_icon_thickness'])-1)/2);
	$separator_with_icon_before_after_styles .= 'top: '.$before_after_top.'px;';
}

if(isset($qode_options_proya['separator_with_icon_topmargin']) && $qode_options_proya['separator_with_icon_topmargin'] !== '') {
	$separator_with_icon_styles .= 'margin-top: '.$qode_options_proya['separator_with_icon_topmargin'].'px;';
}

if(isset($qode_options_proya['separator_with_icon_bottommargin']) && $qode_options_proya['separator_with_icon_bottommargin'] !== '') {
	$separator_with_icon_styles .= 'margin-bottom: '.$qode_options_proya['separator_with_icon_bottommargin'].'px;';
}

if(isset($qode_options_proya['separator_with_icon_color']) && $qode_options_proya['separator_with_icon_color'] !== '') {
	$separator_with_icon_styles .= 'color: '.$qode_options_proya['separator_with_icon_color'].';';
}

if(isset($qode_options_proya['separator_with_icon_transparency']) && $qode_options_proya['separator_with_icon_transparency'] !== '') {
	$separator_with_icon_styles .= 'opacity: '.$qode_options_proya['separator_with_icon_transparency'].';';
}

if(isset($qode_options_proya['separator_with_icon_width']) && $qode_options_proya['separator_with_icon_width'] !== '') {
	$separator_with_icon_styles .= 'width: '.$qode_options_proya['separator_with_icon_width'].'px;';
	$before_after_width = (intval($qode_options_proya['separator_with_icon_width'])-30)/2;
	$separator_with_icon_before_after_styles .= 'width: '.$before_after_width.'px;';
}

if($separator_with_icon_styles !== '') {
	?>
	.separator_with_icon {
		<?php echo $separator_with_icon_styles; ?>
	}
	<?php
}
if($separator_with_icon_before_after_styles !== '') {
	?>
	.separator_with_icon:before,
	.separator_with_icon:after{
		<?php echo $separator_with_icon_before_after_styles; ?>
	}
<?php
}
?>

<?php if (!empty($qode_options_proya['separator_color'])) { ?>
	.blog_holder article,
	.author_description,
	aside .widget,
	section.section,
	.animated_icons_with_text .animated_icon_with_text_inner:after,
	.animated_icons_with_text .animated_icon_with_text_inner:before{
		border-color:<?php echo $qode_options_proya['separator_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['message_backgroundcolor'])) { ?>
.q_message{
	<?php if (!empty($qode_options_proya['message_backgroundcolor'])) { ?>background-color: <?php echo $qode_options_proya['message_backgroundcolor'];  ?><?php } ?>;
}
<?php } ?>
<?php if (!empty($qode_options_proya['message_title_color']) || !empty($qode_options_proya['message_title_fontsize']) || !empty($qode_options_proya['message_title_lineheight']) || !empty($qode_options_proya['message_title_fontstyle']) || !empty($qode_options_proya['message_title_fontweight']) || $qode_options_proya['message_title_google_fonts'] != "-1") { ?>
.q_message .message_text{
<?php if (!empty($qode_options_proya['message_title_color'])) { ?>	color: <?php echo $qode_options_proya['message_title_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['message_title_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['message_title_google_fonts']); ?>', sans-serif;
	<?php } ?>
<?php if (!empty($qode_options_proya['message_title_fontsize'])) { ?>	font-size: <?php echo $qode_options_proya['message_title_fontsize'];  ?>px; <?php } ?>
<?php if (!empty($qode_options_proya['message_title_lineheight'])) { ?>	line-height: <?php echo $qode_options_proya['message_title_lineheight'];  ?>px; <?php } ?>
<?php if (!empty($qode_options_proya['message_title_fontstyle'])) { ?>	font-style: <?php echo $qode_options_proya['message_title_fontstyle'];  ?>; <?php } ?>
<?php if (!empty($qode_options_proya['message_title_fontweight'])) { ?>	font-weight: <?php echo $qode_options_proya['message_title_fontweight'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['message_icon_fontsize']) && !empty($qode_options_proya['message_icon_color'])) { ?>
.q_message.with_icon .q_message_icon_inner > i {
   <?php if (!empty($qode_options_proya['message_icon_color'])) { ?> color:  <?php echo $qode_options_proya['message_icon_color'];  ?>; <?php } ?>
   <?php if (!empty($qode_options_proya['message_icon_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['message_icon_fontsize'];  ?>px; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_proya['social_icon_background_color']) || !empty($qode_options_proya['social_icon_background_color'])) { ?>
    .q_social_icon_holder .fa-stack {
        <?php if(!empty($qode_options_proya['social_icon_background_color']) && !empty($qode_options_proya['social_icon_background_color'])) { ?>
		background-color: <?php echo $qode_options_proya['social_icon_background_color'];  ?>;
        <?php } ?>

        <?php if(!empty($qode_options_proya['social_icon_border_color'])) { ?>

        border: 1px solid <?php echo $qode_options_proya['social_icon_border_color']; ?>

        <?php } ?>
	}
<?php } ?>

<?php if(!empty($qode_options_proya['social_icon_color'])) { ?>
    .q_social_icon_holder .fa-stack i {
        color: <?php echo $qode_options_proya['social_icon_color']; ?>
    }
<?php } ?>

<?php if (!empty($qode_options_proya['button_title_color']) ||
			!empty($qode_options_proya['button_title_fontsize']) ||
			!empty($qode_options_proya['button_title_lineheight']) ||
			(isset($qode_options_proya['button_title_letter_spacing']) && $qode_options_proya['button_title_letter_spacing'] !== '') ||
			!empty($qode_options_proya['button_title_fontstyle']) ||
			!empty($qode_options_proya['button_title_fontweight']) || $qode_options_proya['button_title_google_fonts'] != "-1" ||
			!empty($qode_options_proya['button_border_color']) ||
			(isset($qode_options_proya['button_border_radius']) && $qode_options_proya['button_border_radius'] !== '') ||
			!empty($qode_options_proya['button_backgroundcolor']) ||
			(isset($qode_options_proya['button_border_width']) && $qode_options_proya['button_border_width'] !== '')) { ?>
.qbutton,
.qbutton.medium,
#submit_comment,
.load_more a,
.blog_load_more_button a,
.post-password-form input[type='submit'],
input.wpcf7-form-control.wpcf7-submit,
input.wpcf7-form-control.wpcf7-submit:not([disabled])
	{
<?php if (!empty($qode_options_proya['button_title_color'])) { ?>	color: <?php echo $qode_options_proya['button_title_color'];  ?>; <?php } ?>
	<?php if($qode_options_proya['button_title_google_fonts'] != "-1"){ ?>
	font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['button_title_google_fonts']); ?>', sans-serif;
	<?php } ?>

    <?php if (!empty($qode_options_proya['button_border_color'])) { ?>	border-color: <?php echo $qode_options_proya['button_border_color'];  ?>; <?php } ?>

	<?php if (!empty($qode_options_proya['button_title_fontsize'])) { ?>	font-size: <?php echo $qode_options_proya['button_title_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['button_title_lineheight'])) { ?>	line-height: <?php echo $qode_options_proya['button_title_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['button_title_lineheight'])) { ?>	height: <?php echo $qode_options_proya['button_title_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['button_title_fontstyle'])) { ?>	font-style: <?php echo $qode_options_proya['button_title_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['button_title_fontweight'])) { ?>	font-weight: <?php echo $qode_options_proya['button_title_fontweight'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['button_backgroundcolor'])) { ?>	background-color: <?php echo $qode_options_proya['button_backgroundcolor'];  ?>; <?php } ?>
	<?php if (isset($qode_options_proya['button_border_radius']) && $qode_options_proya['button_border_radius'] !== '') { ?>	border-radius: <?php echo $qode_options_proya['button_border_radius'];  ?>px; <?php } ?>
	<?php if (isset($qode_options_proya['button_border_radius']) && $qode_options_proya['button_border_radius'] !== '') { ?>	-moz-border-radius: <?php echo $qode_options_proya['button_border_radius'];  ?>px; <?php } ?>
	<?php if (isset($qode_options_proya['button_border_radius']) && $qode_options_proya['button_border_radius'] !== '') { ?>	-webkit-border-radius: <?php echo $qode_options_proya['button_border_radius'];  ?>px; <?php } ?>
	<?php if (isset($qode_options_proya['button_title_letter_spacing']) && $qode_options_proya['button_title_letter_spacing'] !== '') { ?>	letter-spacing: <?php echo $qode_options_proya['button_title_letter_spacing'];  ?>px; <?php } ?>
	<?php if(isset($qode_options_proya['button_border_width']) && $qode_options_proya['button_border_width'] !== '') { ?> border-width: <?php echo $qode_options_proya['button_border_width']; ?>px;<?php } ?>
}
<?php } ?>

<?php if (!empty($qode_options_proya['button_title_hovercolor']) ||
	(isset($qode_options_proya['button_backgroundhovercolor']) && !empty($qode_options_proya['button_backgroundhovercolor']))
	|| (isset($qode_options_proya['button_border_hover_color']) && $qode_options_proya['button_border_hover_color'])) { ?>
	.qbutton:hover,
	.qbutton.medium:hover,
	#submit_comment:hover,
	.load_more a:hover,
	.blog_load_more_button a:hover,
	.post-password-form input[type='submit']:hover,
	input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover
	{
	<?php if (!empty($qode_options_proya['button_title_hovercolor'])) { ?> color: <?php echo $qode_options_proya['button_title_hovercolor'];?>; <?php } ?>

	<?php if(isset($qode_options_proya['button_border_hover_color']) && $qode_options_proya['button_border_hover_color']) { ?> border-color: <?php echo $qode_options_proya['button_border_hover_color']; } ?>
	}
<?php } ?>

<?php if (!empty($qode_options_proya['button_backgroundcolor_hover'])) { ?>
	.qbutton:hover,
	#submit_comment:hover,
	.load_more a:hover,
	.blog_load_more_button a:hover,
	.post-password-form input[type='submit']:hover,
	input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover
	{
		<?php if (!empty($qode_options_proya['button_backgroundcolor_hover'])) { ?> background-color: <?php echo $qode_options_proya['button_backgroundcolor_hover'];?>; <?php } ?>
			}
<?php } ?>
<?php if (!empty($qode_options_proya['small_button_fontsize']) || !empty($qode_options_proya['small_button_lineheight']) || !empty($qode_options_proya['small_button_fontweight']) || !empty($qode_options_proya['small_button_padding']) || !empty($qode_options_proya['small_button_border_radius'])) { ?>
	.qbutton.small{

	<?php if (!empty($qode_options_proya['small_button_fontsize'])) { ?>	font-size: <?php echo $qode_options_proya['small_button_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['small_button_lineheight'])) { ?>	line-height: <?php echo $qode_options_proya['small_button_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['small_button_lineheight'])) { ?>	height: <?php echo $qode_options_proya['small_button_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['small_button_fontweight'])) { ?>	font-weight: <?php echo $qode_options_proya['small_button_fontweight'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['small_button_padding'])) { ?>	padding-left: <?php echo $qode_options_proya['small_button_padding'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['small_button_padding'])) { ?>	padding-right: <?php echo $qode_options_proya['small_button_padding'];  ?>px; <?php } ?>
	<?php if (isset($qode_options_proya['small_button_border_radius']) && !empty($qode_options_proya['small_button_border_radius'])) { ?>	border-radius: <?php echo $qode_options_proya['small_button_border_radius'];  ?>px; <?php } ?>
	<?php if (isset($qode_options_proya['small_button_border_radius']) && !empty($qode_options_proya['small_button_border_radius'])) { ?>	-moz-border-radius: <?php echo $qode_options_proya['small_button_border_radius'];  ?>px; <?php } ?>
	<?php if (isset($qode_options_proya['small_button_border_radius']) && !empty($qode_options_proya['small_button_border_radius'])) { ?>	-webkit-border-radius: <?php echo $qode_options_proya['small_button_border_radius'];  ?>px; <?php } ?>

	}
<?php } ?>
<?php if (!empty($qode_options_proya['large_button_fontsize']) || !empty($qode_options_proya['large_button_lineheight']) || !empty($qode_options_proya['large_button_fontweight']) || !empty($qode_options_proya['large_button_padding']) || !empty($qode_options_proya['large_button_border_radius'])) { ?>
	.qbutton.large{

	<?php if (!empty($qode_options_proya['large_button_fontsize'])) { ?>	font-size: <?php echo $qode_options_proya['large_button_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['large_button_lineheight'])) { ?>	line-height: <?php echo $qode_options_proya['large_button_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['large_button_lineheight'])) { ?>	height: <?php echo $qode_options_proya['large_button_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['large_button_fontweight'])) { ?>	font-weight: <?php echo $qode_options_proya['large_button_fontweight'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['large_button_padding'])) { ?>	padding-left: <?php echo $qode_options_proya['large_button_padding'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['large_button_padding'])) { ?>	padding-right: <?php echo $qode_options_proya['large_button_padding'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['large_button_border_radius'])) { ?>	border-radius: <?php echo $qode_options_proya['large_button_border_radius'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['large_button_border_radius'])) { ?>	-moz-border-radius: <?php echo $qode_options_proya['large_button_border_radius'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['large_button_border_radius'])) { ?>	-webkit-border-radius: <?php echo $qode_options_proya['large_button_border_radius'];  ?>px; <?php } ?>

	}
<?php } ?>
<?php if (!empty($qode_options_proya['big_large_button_fontsize']) || !empty($qode_options_proya['big_large_button_lineheight']) || !empty($qode_options_proya['big_large_button_fontweight']) || !empty($qode_options_proya['big_large_button_padding']) || !empty($qode_options_proya['big_large_button_border_radius'])) { ?>
	.qbutton.big_large,
	.qbutton.big_large_full_width {

	<?php if (!empty($qode_options_proya['big_large_button_fontsize'])) { ?>	font-size: <?php echo $qode_options_proya['big_large_button_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['big_large_button_lineheight'])) { ?>	line-height: <?php echo $qode_options_proya['big_large_button_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['big_large_button_lineheight'])) { ?>	height: <?php echo $qode_options_proya['big_large_button_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['big_large_button_fontweight'])) { ?>	font-weight: <?php echo $qode_options_proya['big_large_button_fontweight'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['big_large_button_padding'])) { ?>	padding-left: <?php echo $qode_options_proya['big_large_button_padding'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['big_large_button_padding'])) { ?>	padding-right: <?php echo $qode_options_proya['big_large_button_padding'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['big_large_button_border_radius'])) { ?>	border-radius: <?php echo $qode_options_proya['big_large_button_border_radius'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['big_large_button_border_radius'])) { ?>	-moz-border-radius: <?php echo $qode_options_proya['big_large_button_border_radius'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['big_large_button_border_radius'])) { ?>	-webkit-border-radius: <?php echo $qode_options_proya['big_large_button_border_radius'];  ?>px; <?php } ?>

	}
<?php } ?>
<?php if (!empty($qode_options_proya['button_white_border_color']) || !empty($qode_options_proya['button_white_text_color'])  || !empty($qode_options_proya['button_white_background_color'])) { ?>
	.qbutton.white{

	<?php if (!empty($qode_options_proya['button_white_border_color'])) { ?>	border-color: <?php echo $qode_options_proya['button_white_border_color'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['button_white_text_color'])) { ?>	color: <?php echo $qode_options_proya['button_white_text_color'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['button_white_background_color'])) { ?>	background-color: <?php echo $qode_options_proya['button_white_background_color'];  ?>; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['button_white_border_color_hover']) || !empty($qode_options_proya['button_white_text_color_hover']) || !empty($qode_options_proya['button_white_background_color_hover'])) { ?>
	.qbutton.white:hover,
	.portfolio_slides .hover_feature_holder_inner .qbutton:hover {

	<?php if (!empty($qode_options_proya['button_white_border_color_hover'])) { ?>	border-color: <?php echo $qode_options_proya['button_white_border_color_hover'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['button_white_text_color_hover'])) { ?>	color: <?php echo $qode_options_proya['button_white_text_color_hover'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['button_white_background_color_hover'])) { ?>	background-color: <?php echo $qode_options_proya['button_white_background_color_hover'];  ?>; <?php } ?>
	}
<?php } ?>
<?php if (isset($qode_options_proya['testimonaials_navigation_border_radius']) && $qode_options_proya['testimonaials_navigation_border_radius'] !== '') { ?>
	.testimonials_holder .flex-direction-nav a{
		border-radius: <?php echo $qode_options_proya['testimonaials_navigation_border_radius'];  ?>px;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['testimonaials_font_size'])) { ?>
	.testimonials .testimonial_text_inner p{
	<?php if (!empty($qode_options_proya['testimonaials_font_size'])) { ?>	font-size: <?php echo $qode_options_proya['testimonaials_font_size'];  ?>px; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['counter_color']) ||
			!empty($qode_options_proya['counters_fontweight']) ||
			(isset($qode_options_proya['counters_font_size']) && $qode_options_proya['counters_font_size'] !== '') ||
			(isset($qode_options_proya['counters_font_family']) && $qode_options_proya['counters_font_family'] !== '-1') ||
			(isset($qode_options_proya['counters_letter_spacing']) && $qode_options_proya['counters_letter_spacing'] !== '')) { ?>
	.q_counter_holder span.counter{
	<?php if (!empty($qode_options_proya['counter_color'])) { ?>	color: <?php echo $qode_options_proya['counter_color'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['counters_fontweight'])) { ?>	font-weight: <?php echo $qode_options_proya['counters_fontweight'];  ?>; <?php } ?>
	<?php if(isset($qode_options_proya['counters_font_size']) && $qode_options_proya['counters_font_size'] !== '') { ?> font-size: <?php echo $qode_options_proya['counters_font_size']; ?>px; <?php } ?>
	<?php if(isset($qode_options_proya['counters_font_family']) && $qode_options_proya['counters_font_family'] !== '-1') { ?> font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['counters_font_family']); ?>'; <?php } ?>
	<?php if(isset($qode_options_proya['counters_letter_spacing']) && $qode_options_proya['counters_letter_spacing'] !== '') { ?> letter-spacing: <?php echo $qode_options_proya['counters_letter_spacing']; ?>px; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['counter_text_color']) ||
			!empty($qode_options_proya['counters_text_fontweight']) ||
			!empty($qode_options_proya['counters_text_texttransform']) ||
			(isset($qode_options_proya['counters_text_letterspacing']) && $qode_options_proya['counters_text_letterspacing'] !== '') ||
			(isset($qode_options_proya['counters_text_font_size']) && $qode_options_proya['counters_text_font_size'] !== '') ||
			(isset($qode_options_proya['counters_text_font_family']) && $qode_options_proya['counters_text_font_family'] !== '-1')) { ?>
	.q_counter_holder p.counter_text{
	<?php if (!empty($qode_options_proya['counter_text_color'])) { ?>	color: <?php echo $qode_options_proya['counter_text_color'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['counters_text_fontweight'])) { ?>	font-weight: <?php echo $qode_options_proya['counters_text_fontweight'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['counters_text_texttransform'])) { ?>	text-transform: <?php echo $qode_options_proya['counters_text_texttransform'];  ?>; <?php } ?>
	<?php if ($qode_options_proya['counters_text_letterspacing'] !== '') { ?>	letter-spacing: <?php echo $qode_options_proya['counters_text_letterspacing'];  ?>px; <?php } ?>
	<?php if($qode_options_proya['counters_text_font_size']) { ?> font-size: <?php echo $qode_options_proya['counters_text_font_size']; ?>px; <?php } ?>
	<?php if($qode_options_proya['counters_text_font_family']) { ?> font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['counters_text_font_family']); ?>'; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['counter_separator_color'])) { ?>
	.wpb_column>.wpb_wrapper .q_counter_holder .separator.small
	{
	<?php if (!empty($qode_options_proya['counter_separator_color'])) { ?>	background-color: <?php echo $qode_options_proya['counter_separator_color'];  ?>; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['progress_bar_horizontal_fontsize']) || !empty($qode_options_proya['progress_bar_horizontal_fontweight'])) { ?>
	.q_progress_bar .progress_number{
	<?php if (!empty($qode_options_proya['progress_bar_horizontal_fontsize'])) { ?>	font-size: <?php echo $qode_options_proya['progress_bar_horizontal_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['progress_bar_horizontal_fontweight'])) { ?>	font-weight: <?php echo $qode_options_proya['progress_bar_horizontal_fontweight'];  ?>; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['pie_charts_fontsize']) || !empty($qode_options_proya['pie_charts_fontweight'])) { ?>
	.q_percentage{
	<?php if (!empty($qode_options_proya['pie_charts_fontsize'])) { ?>	font-size: <?php echo $qode_options_proya['pie_charts_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['pie_charts_fontweight'])) { ?>	font-weight: <?php echo $qode_options_proya['pie_charts_fontweight'];  ?>; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['tabs_border_color'])) { ?>
	.q_tabs.vertical .tabs-nav li.active a,
	.q_tabs.boxed .tabs-nav li.active a,
	.q_tabs.boxed .tabs-container
	{
	<?php if (!empty($qode_options_proya['tabs_border_color'])) { ?>border-color: <?php echo $qode_options_proya['tabs_border_color'];  ?>; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['tabs_border_color'])) { ?>
	.q_tabs.vertical.left .tab-content{
	<?php if (!empty($qode_options_proya['tabs_border_color'])) { ?>border-left-color: <?php echo $qode_options_proya['tabs_border_color'];  ?>; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['tabs_border_color'])) { ?>
	.q_tabs.vertical.right .tab-content{
	<?php if (!empty($qode_options_proya['tabs_border_color'])) { ?>border-right-color: <?php echo $qode_options_proya['tabs_border_color'];  ?>; <?php } ?>
	}
<?php } ?>
<?php if (!empty($qode_options_proya['tabs_border_radius'])) { ?>
	.q_tabs.vertical.left .tabs-nav li.active a{
		border-top-left-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-moz-border-top-left-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-webkit-border-top-left-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		border-bottom-left-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-moz-border-bottom-left-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-webkit-border-bottom-left-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
	}
	.q_tabs.boxed .tabs-nav li.active a{
		border-top-left-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-webkit-border-top-left-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-moz-border-top-left-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		border-top-right-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-webkit-border-top-right-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-moz-border-top-right-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
	}
	.q_tabs.vertical.right .tabs-nav li.active a{
		border-top-right-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-moz-border-top-right-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-webkit-border-top-right-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		border-bottom-right-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-moz-border-bottom-right-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
		-webkit-border-bottom-right-radius: <?php echo $qode_options_proya['tabs_border_radius'];  ?>px;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['tabs_border_width'])) { ?>
	.q_tabs.vertical .tabs-nav li.active a,
	.q_tabs.boxed .tabs-nav li.active a
		{
			border-width: <?php echo $qode_options_proya['tabs_border_width'];  ?>px;
		}

	.q_tabs.vertical.left .tab-content{
		border-left-width: <?php echo $qode_options_proya['tabs_border_width'];  ?>px;
		left: -<?php echo $qode_options_proya['tabs_border_width'];  ?>px;
	}
	.q_tabs.vertical.right .tab-content{
		border-right-width: <?php echo $qode_options_proya['tabs_border_width'];  ?>px;
		right: -<?php echo $qode_options_proya['tabs_border_width'];  ?>px;
	}
	.q_tabs.boxed .tabs-container{
		border-top-width: <?php echo $qode_options_proya['tabs_border_width'];  ?>px;
		top: -<?php echo $qode_options_proya['tabs_border_width'];  ?>px;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['tabs_text_size']) || !empty($qode_options_proya['tabs_fontweight'])) { ?>
	.q_tabs .tabs-nav li a{
	<?php if (!empty($qode_options_proya['tabs_text_size'])) { ?>font-size: <?php echo $qode_options_proya['tabs_text_size'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['tabs_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['tabs_fontweight'];  ?>; <?php } ?>
	}
<?php } ?>

<?php
$process_circle_text_styles 		= '';
$process_circle_text_hover_styles 	= '';
$process_circle_hover_styles 		= '';

if(isset($qode_options_proya['process_text_in_circle_font_weight']) && $qode_options_proya['process_text_in_circle_font_weight'] !== '') {
	$process_circle_text_styles .= 'font-weight: '.$qode_options_proya['process_text_in_circle_font_weight'].';';
}

if(isset($qode_options_proya['process_text_hover_color']) && $qode_options_proya['process_text_hover_color'] !== '') {
	$process_circle_text_hover_styles .= 'color: '.$qode_options_proya['process_text_hover_color'].' !important;';
}

if(isset($qode_options_proya['process_circle_hover_background_color']) && $qode_options_proya['process_circle_hover_background_color'] !== '') {
	$process_circle_hover_styles .= 'background-color: '.$qode_options_proya['process_circle_hover_background_color'].' !important;';
	$process_circle_hover_styles .= 'border-color: '.$qode_options_proya['process_circle_hover_background_color'].' !important;';
}

if($process_circle_text_styles !== '') {
	?>
	.q_circles_holder .q_circle_inner2 .q_text_in_circle {
	    <?php echo $process_circle_text_styles; ?>
	}
	<?php
}

if($process_circle_text_hover_styles !== '') {
	?>
	.q_circles_holder .q_circle_inner2:hover .q_text_in_circle {
	    <?php echo $process_circle_text_hover_styles; ?>
	}
	<?php
}



if($process_circle_hover_styles !== '') {
	?>
	.q_circles_holder .q_circle_inner2:hover {
		<?php echo $process_circle_hover_styles; ?>
	}
	<?php
}

?>

<?php
if(isset($qode_options_proya['google_maps_height'])){
	if (intval($qode_options_proya['google_maps_height']) > 0) {
?>
.google_map{
	height: <?php echo intval($qode_options_proya['google_maps_height']); ?>px;
}
<?php
	}
}
?>

<?php if (isset($qode_options_proya['footer_main_image_background']) && $qode_options_proya['footer_main_image_background'] != ""){ ?>
	.footer_inner{
	background-image:url(<?php echo esc_attr($qode_options_proya['footer_main_image_background']); ?>);
	background-position: 0 0;
	}
	.footer_top_holder,.footer_bottom_holder, .content footer .container {
	background-color:transparent;
	}
<?php } ?>

<?php if (!empty($qode_options_proya['footer_top_background_color'])) { ?>
	.footer_top_holder,	footer #lang_sel > ul > li > a,	footer #lang_sel_click > ul > li > a{
		background-color: <?php echo $qode_options_proya['footer_top_background_color']; ?>;
	}
	footer #lang_sel ul ul a,footer #lang_sel_click ul ul a,footer #lang_sel ul ul a:visited,footer #lang_sel_click ul ul a:visited{
		background-color: <?php echo $qode_options_proya['footer_top_background_color']; ?> !important;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['footer_top_title_color'])) { ?>
.footer_top .column_inner > div h2,
.footer_top .column_inner > div h3,
.footer_top .column_inner > div h4,
.footer_top .column_inner > div h5,
.footer_top .column_inner > div h6 {
	color:<?php echo $qode_options_proya['footer_top_title_color'];  ?>;
}
<?php } ?>
<?php if (!empty($qode_options_proya['footer_top_text_color'])) { ?>
	.footer_top,
	.footer_top p,
    .footer_top span,
    .footer_top li,
    .footer_top .textwidget,
    .footer_top .widget_recent_entries>ul>li>span {
		color: <?php echo $qode_options_proya['footer_top_text_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['footer_link_color'])) { ?>
    .footer_top a,
	.footer_top .q_social_icon_holder i.simple_social
	{
        color: <?php echo $qode_options_proya['footer_link_color']; ?> !important;
    }
<?php } ?>
<?php if (!empty($qode_options_proya['footer_link_hover_color'])) { ?>
    .footer_top a:hover,
	.footer_top .q_social_icon_holder:hover i.simple_social
	{
        color: <?php echo $qode_options_proya['footer_link_hover_color']; ?> !important;
    }
<?php } ?>

<?php if (isset($qode_options_proya['footer_image_background']) && $qode_options_proya['footer_image_background'] != ""){ ?>
	.footer_top_holder{
	background: url(<?php echo esc_attr($qode_options_proya['footer_image_background']); ?>) no-repeat;
	background-size: cover;
	}
<?php } ?>

<?php if (!empty($qode_options_proya['footer_bottom_background_color'])) { ?>
	.footer_bottom_holder, #lang_sel_footer{
		background-color:<?php echo $qode_options_proya['footer_bottom_background_color'];  ?>;
	}
<?php } ?>

<?php if (isset($qode_options_proya['footer_bottom_image_background']) && $qode_options_proya['footer_bottom_image_background'] != ""){ ?>
	.footer_bottom_holder{
	background-image:url(<?php echo esc_attr($qode_options_proya['footer_bottom_image_background']); ?>);
	}
<?php } ?>

<?php

	$footer_title_styles = array();

	if(isset($qode_options_proya['footer_title_font_family']) && $qode_options_proya['footer_title_font_family'] !== '-1') {
	$footer_title_styles[] = 'font-family: "'.str_replace('+', ' ', $qode_options_proya['footer_title_font_family']).'", sans-serif';
	}

	if(isset($qode_options_proya['footer_title_font_size']) && $qode_options_proya['footer_title_font_size'] !== '') {
	$footer_title_styles[] = 'font-size: '.$qode_options_proya['footer_title_font_size'].'px';
	}

	if(isset($qode_options_proya['footer_title_letter_spacing']) && $qode_options_proya['footer_title_letter_spacing'] !== '') {
	$footer_title_styles[] = 'letter-spacing: '.$qode_options_proya['footer_title_letter_spacing'].'px';
	}

	if(isset($qode_options_proya['footer_title_font_weight']) && $qode_options_proya['footer_title_font_weight'] !== '') {
	$footer_title_styles[] = 'font-weight: '.$qode_options_proya['footer_title_font_weight'];
	}

	if(isset($qode_options_proya['footer_title_text_transform']) && $qode_options_proya['footer_title_text_transform'] !== '') {
	$footer_title_styles[] = 'text-transform: '.$qode_options_proya['footer_title_text_transform'];
	}

	if(isset($qode_options_proya['footer_title_color']) && $qode_options_proya['footer_title_color'] !== '') {
	$footer_title_styles[] = 'color: '.$qode_options_proya['footer_title_color'];
	}

	if(isset($qode_options_proya['footer_title_font_style']) && $qode_options_proya['footer_title_font_style'] !== '') {
	$footer_title_styles[] = 'font-style: '.$qode_options_proya['footer_title_font_style'];
	}

	if(is_array($footer_title_styles) && count($footer_title_styles)) { ?>
	.footer_top h5 {
<?php echo implode(';', $footer_title_styles); ?>
	}
<?php } ?>

<?php if (!empty($qode_options_proya['footer_bottom_text_color'])) { ?>
.footer_bottom, .footer_bottom span, .footer_bottom p, .footer_bottom p a, #lang_sel_footer ul li a,
footer #lang_sel > ul > li > a,
footer #lang_sel_click > ul > li > a,
footer #lang_sel a.lang_sel_sel,
footer #lang_sel_click a.lang_sel_sel,
footer #lang_sel ul ul a,
footer #lang_sel_click ul ul a,
footer #lang_sel ul ul a:visited,
footer #lang_sel_click ul ul a:visited,
footer #lang_sel_list.lang_sel_list_horizontal a,
footer #lang_sel_list.lang_sel_list_vertical a,
#lang_sel_footer a,
.footer_bottom ul li a {
	color:<?php echo $qode_options_proya['footer_bottom_text_color'];  ?>;
}
<?php } ?>

<?php if(isset($qode_options_proya['footer_bottom_link_hover_color']) && $qode_options_proya['footer_bottom_link_hover_color'] != '') { ?>
	.footer_bottom p a:hover, #lang_sel_footer ul li a:hover,
	footer #lang_sel > ul > li > a:hover,
	footer #lang_sel_click > ul > li > a:hover,
	footer #lang_sel a.lang_sel_sel:hover,
	footer #lang_sel_click a.lang_sel_sel:hover,
	footer #lang_sel ul ul a:hover,
	footer #lang_sel_click ul ul a:hover,
	footer #lang_sel ul ul a:hover,
	footer #lang_sel_click ul ul a:hover,
	footer #lang_sel_list.lang_sel_list_horizontal a:hover,
	footer #lang_sel_list.lang_sel_list_vertical a:hover,
	#lang_sel_footer a:hover,
	.footer_bottom ul li a:hover {
	    color: <?php echo $qode_options_proya['footer_bottom_link_hover_color']; ?>;
	}
<?php } ?>

<?php if (!empty($qode_options_proya['content_bottom_background_color'])) { ?>
	.content_bottom{
		background-color:<?php echo $qode_options_proya['content_bottom_background_color'];  ?>;
	}
<?php } ?>

<?php
//generate side area styles
$side_area_container_styles 		= '';
$side_area_title_styles     		= '';
$side_area_text_styles				= '';
$side_area_text_hover_styles		= '';

if(isset($qode_options_proya['side_area_background_color']) && !empty($qode_options_proya['side_area_background_color'])) {
	$side_area_container_styles .= 'background-color: '.$qode_options_proya['side_area_background_color'].';';
}

if(isset($qode_options_proya['side_area_text_color']) && $qode_options_proya['side_area_text_color'] !== '') {
	$side_area_text_styles .= 'color: '.$qode_options_proya['side_area_text_color'].';';
}

if(isset($qode_options_proya['side_area_text_font_size']) && $qode_options_proya['side_area_text_font_size'] !== '') {
	$side_area_text_styles .= 'font-size: '.$qode_options_proya['side_area_text_font_size'].'px;';
}

if(isset($qode_options_proya['side_area_text_font_weight']) && $qode_options_proya['side_area_text_font_weight'] !== '') {
	$side_area_text_styles .= 'font-weight: '.$qode_options_proya['side_area_text_font_weight'].';';
}

if(isset($qode_options_proya['side_area_text_letter_spacing']) && $qode_options_proya['side_area_text_letter_spacing'] !== '') {
	$side_area_text_styles .= 'letter-spacing: '.$qode_options_proya['side_area_text_letter_spacing'].'px;';
}

if($side_area_text_styles !== '') {
	?>
	.side_menu .widget,
	.side_menu .widget.widget_search form,
	.side_menu .widget.widget_search form input[type="text"],
	.side_menu .widget.widget_search form input[type="submit"],
	.side_menu .widget h6,
	.side_menu .widget h6 a,
	.side_menu .widget p,
	.side_menu .widget li a,
	.side_menu .widget.widget_rss li a.rsswidget,
	.side_menu #wp-calendar caption,
	.side_menu .widget li,
	.side_menu_title h3,
	.side_menu .widget.widget_archive select,
	.side_menu .widget.widget_categories select,
	.side_menu .widget.widget_text select,
	.side_menu .widget.widget_search form input[type="submit"],
	.side_menu #wp-calendar th,
	.side_menu #wp-calendar td,
	.side_menu .q_social_icon_holder i.simple_social {
		<?php echo $side_area_text_styles; ?>
	}
	<?php
}

if ($side_area_container_styles !== '') {
    ?>
    .side_menu,
    .side_menu #lang_sel,
    .side_menu #lang_sel_click,
    .side_menu #lang_sel ul ul,
    .side_menu #lang_sel_click ul ul{
        <?php echo $side_area_container_styles ?>
    }
<?php }

if(isset($qode_options_proya['side_area_text_hover_color']) && $qode_options_proya['side_area_text_hover_color'] !== '') {
	$side_area_text_hover_styles .= 'color: '.$qode_options_proya['side_area_text_hover_color'].';';
}

if($side_area_text_hover_styles !== '') {
	?>
	.side_menu .widget a:hover,
	.side_menu .widget li:hover,
	.side_menu .widget li:hover > a,
	.side_menu li:hover .q_font_awsome_icon i {
		<?php echo $side_area_text_hover_styles; ?>
	}
	<?php
}

if(isset($qode_options_proya['side_area_title_color']) && $qode_options_proya['side_area_title_color'] !== '') {
	$side_area_title_styles .= 'color: '.$qode_options_proya['side_area_title_color'].';';
}

if(isset($qode_options_proya['side_area_title_font_size']) && $qode_options_proya['side_area_title_font_size'] !== '') {
	$side_area_title_styles .= 'font-size: '.$qode_options_proya['side_area_title_font_size'].'px;';
}

if(isset($qode_options_proya['side_area_title_letter_spacing']) && $qode_options_proya['side_area_title_letter_spacing'] !== '') {
	$side_area_title_styles .= 'letter-spacing: '.$qode_options_proya['side_area_title_letter_spacing'].'px;';
}

if(isset($qode_options_proya['side_area_title_font_weight']) && $qode_options_proya['side_area_title_font_weight'] !== '') {
	$side_area_title_styles .= 'font-weight: '.$qode_options_proya['side_area_title_font_weight'].';';
}

if($side_area_title_styles !== '') {
	?>
	.side_menu .side_menu_title h4,
	.side_menu h5,
	.side_menu h6 {
		<?php echo $side_area_title_styles; ?>
	}

	<?php
}

?>


<?php if (isset($qode_options_proya['blog_quote_link_box_color']) && !empty($qode_options_proya['blog_quote_link_box_color'])) { ?>
	.blog_holder article.format-link .post_text .post_text_inner,
	.blog_holder article.format-quote .post_text .post_text_inner,
    .blog_single.blog_holder article.format-link .post_text .post_text_inner,
    .blog_single.blog_holder article.format-quote .post_text .post_text_inner {
		background-color: <?php echo $qode_options_proya['blog_quote_link_box_color'];  ?>;
	}
	.blog_holder article.format-link .post_text:hover .post_text_inner,
	.blog_holder article.format-quote .post_text:hover .post_text_inner{
		border-color: <?php echo $qode_options_proya['blog_quote_link_box_color'];  ?>;
	}
<?php } ?>
<?php if (isset($qode_options_proya['blog_large_image_text_in_box']) && $qode_options_proya['blog_large_image_text_in_box'] == "no") { ?>
	.blog_holder.blog_large_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner{
		padding-left:0;
		padding-right:0;
		background-color:transparent;
	}
<?php } ?>
<?php if (isset($qode_options_proya['blog_large_image_border']) && $qode_options_proya['blog_large_image_border'] == "yes") { ?>
	.blog_holder.blog_large_image article .post_text .post_text_inner{
		border:1px solid #f6f6f6;

	}
	.blog_holder.blog_large_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner{
		border-top:none;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['blog_large_image_border_color']) && (isset($qode_options_proya['blog_large_image_text_in_box']) && $qode_options_proya['blog_large_image_text_in_box'] == "yes")) { ?>
	.blog_holder.blog_large_image article .post_text .post_text_inner {
		border-color: <?php echo $qode_options_proya['blog_large_image_border_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['blog_large_image_background_color']) && (isset($qode_options_proya['blog_large_image_text_in_box']) && $qode_options_proya['blog_large_image_text_in_box'] != "no")) { ?>
	.blog_holder.blog_large_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner {
	background-color: <?php echo $qode_options_proya['blog_large_image_background_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['blog_large_image_border_width']) && (isset($qode_options_proya['blog_large_image_text_in_box']) && $qode_options_proya['blog_large_image_text_in_box'] == "yes")) { ?>
	.blog_holder.blog_large_image article .post_text .post_text_inner {
	border-width: <?php echo $qode_options_proya['blog_large_image_border_width'];  ?>px;
	border-style: solid;
	}
<?php } ?>




<?php if (isset($qode_options_proya['blog_small_image_text_in_box']) && $qode_options_proya['blog_small_image_text_in_box'] == "no") { ?>
	.blog_holder.blog_small_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner{
	padding-left:0;
	padding-right:0;
	background-color:transparent;
	}
<?php } ?>
<?php if (isset($qode_options_proya['blog_small_image_border']) && $qode_options_proya['blog_small_image_border'] == "yes") { ?>
	.blog_holder.blog_small_image article .post_text .post_text_inner{
	border:1px solid #f6f6f6;

	}
	.blog_holder.blog_small_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner{
	border-top:none;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['blog_small_image_border_color']) && (isset($qode_options_proya['blog_small_image_text_in_box']) && $qode_options_proya['blog_small_image_text_in_box'] == "yes")) { ?>
	.blog_holder.blog_small_image article .post_text .post_text_inner {
	border-color: <?php echo $qode_options_proya['blog_small_image_border_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['blog_small_image_background_color']) && (isset($qode_options_proya['blog_small_image_text_in_box']) && $qode_options_proya['blog_small_image_text_in_box'] != "no")) { ?>
	.blog_holder.blog_small_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner {
	background-color: <?php echo $qode_options_proya['blog_small_image_background_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['blog_small_image_border_width']) && (isset($qode_options_proya['blog_small_image_text_in_box']) && $qode_options_proya['blog_small_image_text_in_box'] == "yes")) { ?>
	.blog_holder.blog_small_image article .post_text .post_text_inner {
	border-width: <?php echo $qode_options_proya['blog_small_image_border_width'];  ?>px;
	border-style: solid;
	}
<?php } ?>




<?php if (!empty($qode_options_proya['blog_masonry_border_color'])) { ?>
	.blog_holder.masonry article .post_text .post_text_inner{
		border-style:solid;
		border-width:1px;
		border-color:<?php echo $qode_options_proya['blog_masonry_border_color'];  ?>;
		border-top-width:0px;
	}
	.blog_holder.masonry article.format-quote .post_text .post_text_inner,
	.blog_holder.masonry article.format-link .post_text .post_text_inner,
	.blog_holder.masonry article.format-audio .post_text .post_text_inner{
		border-top-width:1px;
	}
	.blog_holder.masonry article.format-audio .post_text .post_text_inner{
		border-left-width:0px;
		border-right-width:0px;
		border-bottom-width:0px;
	}
	.blog_holder.masonry article.format-audio{
		border-style:solid;
		border-width:1px;
		border-color:<?php echo $qode_options_proya['blog_masonry_border_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['blog_masonry_border_radius'])) { ?>

	.blog_holder.masonry article .post_text .post_text_inner{
		border-radius: 0 0 <?php echo $qode_options_proya['blog_masonry_border_radius'];  ?>px <?php echo $qode_options_proya['blog_masonry_border_radius'];  ?>px;
		-moz-border-radius: 0 0 <?php echo $qode_options_proya['blog_masonry_border_radius'];  ?>px <?php echo $qode_options_proya['blog_masonry_border_radius'];  ?>px;
		-webkit-border-radius: 0 0 <?php echo $qode_options_proya['blog_masonry_border_radius'];  ?>px <?php echo $qode_options_proya['blog_masonry_border_radius'];  ?>px;
	}
	.blog_holder.masonry article.format-audio,
	.blog_holder.masonry article.format-quote .post_text .post_text_inner,
	.blog_holder.masonry article.format-link .post_text .post_text_inner{
		border-radius: <?php echo $qode_options_proya['blog_masonry_border_radius'];  ?>px;
		-moz-border-radius: <?php echo $qode_options_proya['blog_masonry_border_radius'];  ?>px;
		-webkit-border-radius: <?php echo $qode_options_proya['blog_masonry_border_radius'];  ?>px;
	}
<?php } ?>
<?php if (!empty($qode_options_proya['blog_masonry_background_color'])) { ?>
	.blog_holder.masonry article .mejs-container,
	.blog_holder.masonry_full_width article .mejs-container,
	.blog_holder.masonry article .post_text .post_text_inner,
	.blog_holder.masonry_full_width article .post_text .post_text_inner
	{
	background-color: <?php echo $qode_options_proya['blog_masonry_background_color'];  ?>;
	}
<?php } ?>
<?php
//generate header buttons styles
$header_buttons_styles          = '';
$header_buttons_hover_styles    = '';
if(isset($qode_options_proya['header_buttons_color']) && $qode_options_proya['header_buttons_color']) {
    $header_buttons_styles .= 'color: '.$qode_options_proya['header_buttons_color'].';';
}

if(isset($qode_options_proya['header_buttons_font_size']) && $qode_options_proya['header_buttons_font_size']) {
    $header_buttons_styles .= 'font-size: '.$qode_options_proya['header_buttons_font_size'].'px'.';';
}

if(isset($qode_options_proya['header_buttons_hover_color']) && $qode_options_proya['header_buttons_hover_color'] != '') {
    $header_buttons_hover_styles .= 'color: '.$qode_options_proya['header_buttons_hover_color'].';';
}

if($header_buttons_styles != ""){ ?>
    .side_menu_button > a,
    .mobile_menu_button span{ <?php echo $header_buttons_styles; ?> }

    .popup_menu .line,
    .popup_menu .line:after, .popup_menu .line:before{
        background-color: <?php echo $qode_options_proya['header_buttons_color']; ?>;
    }
<?php }

if($header_buttons_hover_styles != "") { ?>
    .side_menu_button > a:hover,
    .mobile_menu_button span:hover,
    .popup_menu:hover .line,
    .popup_menu:hover .line:after,
    .popup_menu:hover .line:before{ <?php echo $header_buttons_hover_styles; ?> }

    .popup_menu:hover .line,
    .popup_menu:hover .line:after, .popup_menu:hover .line:before{
        background-color: <?php echo $qode_options_proya['header_buttons_hover_color']; ?>;
    }
 <?php } ?>
 
 <?php if(!empty($qode_options_proya['vertical_area_hidden_button_color']) && $qode_options_proya['vertical_area_hidden_button_color'] !== ''){ ?>
	.vertical_menu_hidden_button_line,
	.vertical_menu_hidden_button_line:after,.vertical_menu_hidden_button_line:before{
		background-color: <?php echo $qode_options_proya['vertical_area_hidden_button_color']; ?>;
	}
<?php } ?>
 
<?php if(!empty($qode_options_proya['vertical_area_background'])){ ?>
	aside.vertical_menu_area{
        background-color: <?php echo $qode_options_proya['vertical_area_background']; ?>;
	}
<?php } ?>



<?php if(!empty($qode_options_proya['vertical_area_text_color'])){ ?>
	aside .vertical_menu_area_widget_holder,
	aside .vertical_menu_area_widget_holder p,
	aside .vertical_menu_area_widget_holder span
	{
		color: <?php echo $qode_options_proya['vertical_area_text_color']; ?>;
	}

<?php } ?>
<?php if (!empty($qode_options_proya['left_menu_alignment'])){ ?>
	.vertical_menu_area{
		text-align:<?php echo $qode_options_proya['left_menu_alignment'];  ?>;
	}
<?php } ?>

<?php if (!empty($qode_options_proya['vertical_menu_color']) || !empty($qode_options_proya['vertical_menu_fontsize']) || !empty($qode_options_proya['vertical_menu_fontstyle']) || !empty($qode_options_proya['vertical_menu_lineheight']) || !empty($qode_options_proya['vertical_menu_fontweight']) || !empty($qode_options_proya['vertical_menu_letter_spacing']) || (isset($qode_options_proya['vertical_menu_google_fonts']) && $qode_options_proya['vertical_menu_google_fonts'] != "-1")) { ?>
	nav.vertical_menu > ul > li > a{
	<?php if (!empty($qode_options_proya['vertical_menu_color'])) { ?> color: <?php echo $qode_options_proya['vertical_menu_color'];  ?>; <?php } ?>
	<?php if(isset($qode_options_proya['vertical_menu_google_fonts']) && $qode_options_proya['vertical_menu_google_fonts'] != "-1"){ ?>
		font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['vertical_menu_google_fonts']); ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['vertical_menu_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['vertical_menu_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['vertical_menu_fontstyle'])) { ?> font-style: <?php echo $qode_options_proya['vertical_menu_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['vertical_menu_fontweight'])) { ?> font-weight: <?php echo $qode_options_proya['vertical_menu_fontweight'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_proya['vertical_menu_lineheight'])) { ?> line-height: <?php echo $qode_options_proya['vertical_menu_lineheight'];  ?>px; <?php } ?>
	}
<?php } ?>

<?php if (!empty($qode_options_proya['vertical_menu_hovercolor'])) { ?>
	nav.vertical_menu > ul > li.active > a,
	nav.vertical_menu > ul > li:hover > a{
	color: <?php echo $qode_options_proya['vertical_menu_hovercolor'];  ?>;
	}
<?php } ?>

<?php if(!empty($qode_options_proya['vertical_dropdown_color']) || !empty($qode_options_proya['vertical_dropdown_fontsize']) || !empty($qode_options_proya['vertical_dropdown_lineheight']) || !empty($qode_options_proya['vertical_dropdown_fontstyle']) || !empty($qode_options_proya['vertical_dropdown_fontweight']) || (isset($qode_options_proya['vertical_dropdown_google_fonts']) && $qode_options_proya['vertical_dropdown_google_fonts'] != "-1")){ ?>
	.vertical_menu .second .inner > ul > li > a,
	.vertical_menu .wide .second .inner > ul > li > a{
	<?php if (!empty($qode_options_proya['vertical_dropdown_color'])) { ?> color: <?php echo $qode_options_proya['vertical_dropdown_color']; ?>; <?php } ?>
	<?php if(isset($qode_options_proya['vertical_dropdown_google_fonts']) && $qode_options_proya['vertical_dropdown_google_fonts'] != "-1"){ ?>
		font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['vertical_dropdown_google_fonts']) ?>', sans-serif !important;
	<?php } ?>
	<?php if (!empty($qode_options_proya['vertical_dropdown_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['vertical_dropdown_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['vertical_dropdown_lineheight'])) { ?> line-height: <?php echo $qode_options_proya['vertical_dropdown_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_proya['vertical_dropdown_fontstyle'])) { ?> font-style: <?php echo $qode_options_proya['vertical_dropdown_fontstyle'];  ?>;  <?php } ?>
	<?php if (!empty($qode_options_proya['vertical_dropdown_fontweight'])) { ?>font-weight: <?php echo $qode_options_proya['vertical_dropdown_fontweight'];  ?>; <?php } ?>
	}
<?php } ?>

<?php if (!empty($qode_options_proya['vertical_dropdown_hovercolor'])) { ?>
	.vertical_menu .second .inner > ul > li > a:hover{
	color: <?php echo $qode_options_proya['vertical_dropdown_hovercolor'];  ?> !important;
	}
<?php } ?>

<?php if(!empty($qode_options_proya['vertical_dropdown_color_thirdlvl']) || !empty($qode_options_proya['vertical_dropdown_fontsize_thirdlvl']) || !empty($qode_options_proya['vertical_dropdown_lineheight_thirdlvl']) || !empty($qode_options_proya['vertical_dropdown_fontstyle_thirdlvl']) || !empty($qode_options_proya['vertical_dropdown_fontweight_thirdlvl']) || (isset($qode_options_proya['vertical_dropdown_google_fonts_thirdlvl']) && $qode_options_proya['vertical_dropdown_google_fonts_thirdlvl'] != "-1")){ ?>
	.vertical_menu .second .inner ul li.sub ul li a{
	<?php if (!empty($qode_options_proya['vertical_dropdown_color_thirdlvl'])) { ?> color: <?php echo $qode_options_proya['vertical_dropdown_color_thirdlvl'];  ?>;  <?php } ?>
	<?php if(isset($qode_options_proya['vertical_dropdown_google_fonts_thirdlvl']) && $qode_options_proya['vertical_dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
		font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['vertical_dropdown_google_fonts_thirdlvl']) ?>', sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_proya['vertical_dropdown_fontsize_thirdlvl'])) { ?> font-size: <?php echo $qode_options_proya['vertical_dropdown_fontsize_thirdlvl'];  ?>px;  <?php } ?>
	<?php if (!empty($qode_options_proya['vertical_dropdown_lineheight_thirdlvl'])) { ?> line-height: <?php echo $qode_options_proya['vertical_dropdown_lineheight_thirdlvl'];  ?>px;  <?php } ?>
	<?php if (!empty($qode_options_proya['vertical_dropdown_fontstyle_thirdlvl'])) { ?> font-style: <?php echo $qode_options_proya['vertical_dropdown_fontstyle_thirdlvl'];  ?>;   <?php } ?>
	<?php if (!empty($qode_options_proya['vertical_dropdown_fontweight_thirdlvl'])) { ?> font-weight: <?php echo $qode_options_proya['vertical_dropdown_fontweight_thirdlvl'];  ?>;  <?php } ?>
	}
<?php } ?>

<?php if (!empty($qode_options_proya['vertical_dropdown_hovercolor_thirdlvl'])) { ?>
	.vertical_menu .second .inner ul li.sub ul li a:hover{
	color: <?php echo $qode_options_proya['vertical_dropdown_hovercolor_thirdlvl'];  ?> !important;
	}
<?php } ?>

<?php if ((isset($qode_options_proya['popup_menu_color']) && !empty($qode_options_proya['popup_menu_color'])) ||
          (isset($qode_options_proya['popup_menu_google_fonts']) && $qode_options_proya['popup_menu_google_fonts'] != "-1") ||
          (isset($qode_options_proya['popup_menu_fontsize']) && !empty($qode_options_proya['popup_menu_fontsize'])) ||
          (isset($qode_options_proya['popup_menu_lineheight']) && !empty($qode_options_proya['popup_menu_lineheight'])) ||
          (isset($qode_options_proya['popup_menu_fontstyle']) && !empty($qode_options_proya['popup_menu_fontstyle'])) ||
          (isset($qode_options_proya['popup_menu_fontweight']) && !empty($qode_options_proya['popup_menu_fontweight'])) ||
          (isset($qode_options_proya['popup_menu_letterspacing']) && $qode_options_proya['popup_menu_letterspacing'] !== '')) { ?>

    nav.popup_menu ul li a,
    nav.popup_menu ul li h6{
    <?php if (!empty($qode_options_proya['popup_menu_color'])) { ?> color: <?php echo $qode_options_proya['popup_menu_color'];  ?>; <?php } ?>
    <?php if($qode_options_proya['popup_menu_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['popup_menu_google_fonts']); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($qode_options_proya['popup_menu_fontsize'])) { ?> font-size: <?php echo $qode_options_proya['popup_menu_fontsize'];  ?>px; <?php } ?>
    <?php if (!empty($qode_options_proya['popup_menu_lineheight'])) { ?> line-height: <?php echo $qode_options_proya['popup_menu_lineheight'];  ?>px; <?php } ?>
    <?php if (!empty($qode_options_proya['popup_menu_fontstyle'])) { ?> font-style: <?php echo $qode_options_proya['popup_menu_fontstyle'];  ?>; <?php } ?>
    <?php if (!empty($qode_options_proya['popup_menu_fontweight'])) { ?> font-weight: <?php echo $qode_options_proya['popup_menu_fontweight'];  ?>; <?php } ?>
    <?php if ($qode_options_proya['popup_menu_letterspacing'] !== '') { ?> letter-spacing: <?php echo $qode_options_proya['popup_menu_letterspacing'];  ?>px; <?php } ?>
    }
<?php } ?>

<?php if (isset($qode_options_proya['popup_menu_color']) && !empty($qode_options_proya['popup_menu_color'])) { ?>
    .popup_menu.opened .line:after,
    .popup_menu.opened .line:before{
        background-color: <?php echo $qode_options_proya['popup_menu_color'];  ?>;
    }

<?php } ?>

<?php if ((isset($qode_options_proya['popup_menu_hover_color']) && !empty($qode_options_proya['popup_menu_hover_color'])) || (isset($qode_options_proya['popup_menu_hover_background_color']) && !empty($qode_options_proya['popup_menu_hover_background_color']))) { ?>
    nav.popup_menu ul li a:hover,
    nav.popup_menu ul li h6:hover{
    <?php if (!empty($qode_options_proya['popup_menu_hover_color'])) { ?>  color: <?php echo $qode_options_proya['popup_menu_hover_color'];  ?>;<?php } ?>
        <?php if (!empty($qode_options_proya['popup_menu_hover_background_color'])) { ?> background-color: <?php echo $qode_options_proya['popup_menu_hover_background_color'];  ?>; <?php } ?>
    }

<?php } ?>

<?php if ((isset($qode_options_proya['popup_menu_color_2nd']) && !empty($qode_options_proya['popup_menu_color_2nd'])) ||
    (isset($qode_options_proya['popup_menu_google_fonts_2nd']) && $qode_options_proya['popup_menu_google_fonts_2nd'] != "-1") ||
    (isset($qode_options_proya['popup_menu_fontsize_2nd']) && !empty($qode_options_proya['popup_menu_fontsize_2nd'])) ||
    (isset($qode_options_proya['popup_menu_lineheight_2nd']) && !empty($qode_options_proya['popup_menu_lineheight_2nd'])) ||
    (isset($qode_options_proya['popup_menu_fontstyle_2nd']) && !empty($qode_options_proya['popup_menu_fontstyle_2nd'])) ||
    (isset($qode_options_proya['popup_menu_fontweight_2nd']) && !empty($qode_options_proya['popup_menu_fontweight_2nd'])) ||
    (isset($qode_options_proya['popup_menu_letterspacing_2nd']) && $qode_options_proya['popup_menu_letterspacing_2nd'] !== '')) { ?>

    nav.popup_menu ul li ul li a,
    nav.popup_menu ul li ul li h6{
    <?php if (!empty($qode_options_proya['popup_menu_color_2nd'])) { ?> color: <?php echo $qode_options_proya['popup_menu_color_2nd'];  ?>; <?php } ?>
    <?php if($qode_options_proya['popup_menu_google_fonts_2nd'] != "-1"){ ?>
        font-family: '<?php echo str_replace('+', ' ', $qode_options_proya['popup_menu_google_fonts_2nd']); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($qode_options_proya['popup_menu_fontsize_2nd'])) { ?> font-size: <?php echo $qode_options_proya['popup_menu_fontsize_2nd'];  ?>px; <?php } ?>
    <?php if (!empty($qode_options_proya['popup_menu_lineheight_2nd'])) { ?> line-height: <?php echo $qode_options_proya['popup_menu_lineheight_2nd'];  ?>px; <?php } ?>
    <?php if (!empty($qode_options_proya['popup_menu_fontstyle_2nd'])) { ?> font-style: <?php echo $qode_options_proya['popup_menu_fontstyle_2nd'];  ?>; <?php } ?>
    <?php if (!empty($qode_options_proya['popup_menu_fontweight_2nd'])) { ?> font-weight: <?php echo $qode_options_proya['popup_menu_fontweight_2nd'];  ?>; <?php } ?>
    <?php if ($qode_options_proya['popup_menu_letterspacing_2nd'] !== '') { ?> letter-spacing: <?php echo $qode_options_proya['popup_menu_letterspacing_2nd'];  ?>px; <?php } ?>
    }
<?php } ?>

<?php if ((isset($qode_options_proya['popup_menu_hover_color_2nd']) && !empty($qode_options_proya['popup_menu_hover_color_2nd'])) || (isset($qode_options_proya['popup_menu_hover_background_color_2nd']) && !empty($qode_options_proya['popup_menu_hover_background_color_2nd']))) { ?>
    nav.popup_menu ul li ul li a:hover,
    nav.popup_menu ul li ul li h6:hover{
    <?php if (!empty($qode_options_proya['popup_menu_hover_color_2nd'])) { ?>  color: <?php echo $qode_options_proya['popup_menu_hover_color_2nd'];  ?>;<?php } ?>
    <?php if (!empty($qode_options_proya['popup_menu_hover_background_color_2nd'])) { ?> background-color: <?php echo $qode_options_proya['popup_menu_hover_background_color_2nd'];  ?>; <?php } ?>
    }

<?php } ?>

<?php if ((isset($qode_options_proya['popup_menu_background_color']) && !empty($qode_options_proya['popup_menu_background_color'])) || !empty($qode_options_proya['popup_menu_background_transparency'])) { ?>
    <?php $popup_menu_background_color = qode_hex2rgb($qode_options_proya['popup_menu_background_color']);

    if ($qode_options_proya['popup_menu_background_transparency'] != "") {
        $popup_menu_background_transparency = $qode_options_proya['popup_menu_background_transparency'];
    }else{
        $popup_menu_background_transparency = 0.95;
    }
    ?>
    .popup_menu_holder{
        background-color: rgba(<?php echo $popup_menu_background_color[0]; ?>,<?php echo $popup_menu_background_color[1]; ?>,<?php echo $popup_menu_background_color[2]; ?>,<?php echo $popup_menu_background_transparency; ?>);
    }

<?php } ?>

<?php
//generate top header styles
$top_header_font_styles 		= '';
$top_header_font_hover_styles 	= '';
$top_header_border_styles 		= '';
if(isset($qode_options_proya['top_header_text_color']) && $qode_options_proya['top_header_text_color'] !== '') {
	$top_header_font_styles .= 'color: '.$qode_options_proya['top_header_text_color'].';';
}

if(isset($qode_options_proya['top_header_text_hover_color']) && $qode_options_proya['top_header_text_hover_color'] !== '') {
	$top_header_font_hover_styles .= 'color: '.$qode_options_proya['top_header_text_hover_color'].';';
}

if(isset($qode_options_proya['top_header_text_font_family']) && $qode_options_proya['top_header_text_font_family'] !== '-1') {
	$top_header_font_styles .= 'font-family: "'.str_replace('+', ' ', $qode_options_proya['top_header_text_font_family']).'";';
}

if(isset($qode_options_proya['top_header_text_font_size']) && $qode_options_proya['top_header_text_font_size'] !== '') {
	$top_header_font_styles .= 'font-size: '.$qode_options_proya['top_header_text_font_size'].'px;';
}

if(isset($qode_options_proya['top_header_text_line_height']) && $qode_options_proya['top_header_text_line_height'] !== '') {
	$top_header_font_styles .= 'line-height: '.$qode_options_proya['top_header_text_line_height'].'px;';
}

if(isset($qode_options_proya['top_header_text_font_style']) && $qode_options_proya['top_header_text_font_style'] !== '') {
	$top_header_font_styles .= 'font-style: '.$qode_options_proya['top_header_text_font_style'].';';
}

if(isset($qode_options_proya['top_header_text_font_weight']) && $qode_options_proya['top_header_text_font_weight'] !== '') {
	$top_header_font_styles .= 'font-weight: '.$qode_options_proya['top_header_text_font_weight'].';';
}

if(isset($qode_options_proya['top_header_text_letter_spacing']) && $qode_options_proya['top_header_text_letter_spacing'] !== '') {
	$top_header_font_styles .= 'letter-spacing: '.$qode_options_proya['top_header_text_letter_spacing'].'px;';
}

if(isset($qode_options_proya['top_header_border_color']) && $qode_options_proya['top_header_border_color'] !== '') {
	$top_header_border_styles .= 'border-bottom: 1px solid '.$qode_options_proya['top_header_border_color'].';';
}

if(isset($qode_options_proya['top_header_border_weight']) && $qode_options_proya['top_header_border_weight'] !== '') {
	$top_header_border_styles .= 'border-width: '.$qode_options_proya['top_header_border_weight'].'px;';
}

if($top_header_font_styles !== '') {
?>
	.header_top .q_social_icon_holder i.simple_social,
	.header_top .header-widget,
	.header_top .header-widget.widget_nav_menu ul.menu>li>a,
	.header_top .header-widget p,
	.header_top .header-widget a,
	.header_top .header-widget span {
	     <?php echo $top_header_font_styles; ?>
	}

<?php
}

if($top_header_font_hover_styles !== '') {
	?>
	.header_top .q_social_icon_holder i.simple_social:hover,
	.header_top .header-widget:hover,
	.header_top .header-widget.widget_nav_menu ul.menu>li>a:hover,
	.header_top .header-widget p:hover,
	.header_top .header-widget a:hover,
	.header_top .header-widget span:hover {
	<?php echo $top_header_font_hover_styles; ?>
	}

<?php
}

if($top_header_border_styles !== '') {
	?>
	.header_top {
	<?php echo $top_header_border_styles; ?>
	}

<?php
}

//generate categories filter styles
$portfolio_filter_font_styles = '';
if(isset($qode_options_proya['portfolio_filter_color']) && $qode_options_proya['portfolio_filter_color'] !== '') {
	$portfolio_filter_font_styles .= 'color: '.$qode_options_proya['portfolio_filter_color'].';';
}

if(isset($qode_options_proya['portfolio_filter_font_family']) && $qode_options_proya['portfolio_filter_font_family'] !== '-1') {
	$portfolio_filter_font_styles .= 'font-family: '.str_replace('+', ' ', $qode_options_proya['portfolio_filter_font_family']).';';
}

if(isset($qode_options_proya['portfolio_filter_font_size']) && $qode_options_proya['portfolio_filter_font_size'] !== '') {
	$portfolio_filter_font_styles .= 'font-size: '.$qode_options_proya['portfolio_filter_font_size'].'px;';
}

if(isset($qode_options_proya['portfolio_filter_line_height']) && $qode_options_proya['portfolio_filter_line_height'] !== '') {
	$portfolio_filter_font_styles .= 'line-height: '.$qode_options_proya['portfolio_filter_line_height'].'px;';
}

if(isset($qode_options_proya['portfolio_filter_font_style']) && $qode_options_proya['portfolio_filter_font_style'] !== '') {
	$portfolio_filter_font_styles .= 'font-style: '.$qode_options_proya['portfolio_filter_font_style'].';';
}

if(isset($qode_options_proya['portfolio_filter_font_weight']) && $qode_options_proya['portfolio_filter_font_weight'] !== '') {
	$portfolio_filter_font_styles .= 'font-weight: '.$qode_options_proya['portfolio_filter_font_weight'].';';
}

if(isset($qode_options_proya['portfolio_filter_letter_spacing']) && $qode_options_proya['portfolio_filter_letter_spacing'] !== '') {
	$portfolio_filter_font_styles .= 'letter-spacing: '.$qode_options_proya['portfolio_filter_letter_spacing'].'px;';
}

if(isset($qode_options_proya['portfolio_filter_text_transform']) && $qode_options_proya['portfolio_filter_text_transform'] !== '') {
	$portfolio_filter_font_styles .= 'text-transform: '.$qode_options_proya['portfolio_filter_text_transform'].';';
}

if($portfolio_filter_font_styles !== '') {
	?>
	.filter_holder ul li span {
		<?php echo $portfolio_filter_font_styles; ?>
	}
	<?php
}




//Contact Form 7 Custom Styles - start
if(qode_contact_form_7_installed()){


$cf7_custom_style_1_elements_styles = '';
$cf7_custom_style_1_color_placeholder = '';
if(isset($qode_options_proya['cf7_custom_style_1_element_background_color']) && $qode_options_proya['cf7_custom_style_1_element_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_1_element_background_transparency']) && $qode_options_proya['cf7_custom_style_1_element_background_transparency'] !== ''){
		$cf7_custom_style_1_element_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_1_element_background_color']);
		$cf7_custom_style_1_elements_styles .= 'background-color: rgba('. $cf7_custom_style_1_element_background_color[0] . ',' . $cf7_custom_style_1_element_background_color[1] . ',' . $cf7_custom_style_1_element_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_1_element_background_transparency'] .');';
	} else {
		$cf7_custom_style_1_elements_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_1_element_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_1_element_border_color']) && $qode_options_proya['cf7_custom_style_1_element_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_1_border_transparency']) && $qode_options_proya['cf7_custom_style_1_border_transparency'] !== ''){
		$cf7_custom_style_1_element_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_1_element_border_color']);
		$cf7_custom_style_1_elements_styles .= 'border-color: rgba('. $cf7_custom_style_1_element_border_color[0] . ',' . $cf7_custom_style_1_element_border_color[1] . ',' . $cf7_custom_style_1_element_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_1_border_transparency'] .');';

	} else {
		$cf7_custom_style_1_elements_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_1_element_border_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_1_element_border_width']) && $qode_options_proya['cf7_custom_style_1_element_border_width'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'border-width: '.$qode_options_proya['cf7_custom_style_1_element_border_width'].'px;';
	$cf7_custom_style_1_elements_styles .= 'border-style:solid;';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_font_color']) && $qode_options_proya['cf7_custom_style_1_element_font_color'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'color: '.$qode_options_proya['cf7_custom_style_1_element_font_color'].';';
	$cf7_custom_style_1_color_placeholder .= 'color: '.$qode_options_proya['cf7_custom_style_1_element_font_color'].';';
	$cf7_custom_style_1_color_placeholder .= 'opacity:1;';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_font_family']) && $qode_options_proya['cf7_custom_style_1_element_font_family'] !== '-1') {
	$cf7_custom_style_1_elements_styles .= 'font-family: '.str_replace('+', ' ', $qode_options_proya['cf7_custom_style_1_element_font_family']).';';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_font_size']) && $qode_options_proya['cf7_custom_style_1_element_font_size'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'font-size: '.$qode_options_proya['cf7_custom_style_1_element_font_size'].'px;';
}
if(isset($qode_options_proya['cf7_custom_style_1_element_line_height']) && $qode_options_proya['cf7_custom_style_1_element_line_height'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'line-height: '.$qode_options_proya['cf7_custom_style_1_element_line_height'].'px;';
}
if(isset($qode_options_proya['cf7_custom_style_1_element_font_style']) && $qode_options_proya['cf7_custom_style_1_element_font_style'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'font-style: '.$qode_options_proya['cf7_custom_style_1_element_font_style'].';';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_font_weight']) && $qode_options_proya['cf7_custom_style_1_element_font_weight'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'font-weight: '.$qode_options_proya['cf7_custom_style_1_element_font_weight'].';';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_letter_spacing']) && $qode_options_proya['cf7_custom_style_1_element_letter_spacing'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'letter-spacing: '.$qode_options_proya['cf7_custom_style_1_element_letter_spacing'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_text_transform']) && $qode_options_proya['cf7_custom_style_1_element_text_transform'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'text-transform: '.$qode_options_proya['cf7_custom_style_1_element_text_transform'].';';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_padding_top']) && $qode_options_proya['cf7_custom_style_1_element_padding_top'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'padding-top: '.$qode_options_proya['cf7_custom_style_1_element_padding_top'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_padding_right']) && $qode_options_proya['cf7_custom_style_1_element_padding_right'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'padding-right: '.$qode_options_proya['cf7_custom_style_1_element_padding_right'].'px;';
}
if(isset($qode_options_proya['cf7_custom_style_1_element_padding_bottom']) && $qode_options_proya['cf7_custom_style_1_element_padding_bottom'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'padding-bottom: '.$qode_options_proya['cf7_custom_style_1_element_padding_bottom'].'px;';
}
if(isset($qode_options_proya['cf7_custom_style_1_element_padding_left']) && $qode_options_proya['cf7_custom_style_1_element_padding_left'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'padding-left: '.$qode_options_proya['cf7_custom_style_1_element_padding_left'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_margin_top']) && $qode_options_proya['cf7_custom_style_1_element_margin_top'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'margin-top: '.$qode_options_proya['cf7_custom_style_1_element_margin_top'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_margin_bottom']) && $qode_options_proya['cf7_custom_style_1_element_margin_bottom'] !== '') {
	$cf7_custom_style_1_elements_styles .= 'margin-bottom: '.$qode_options_proya['cf7_custom_style_1_element_margin_bottom'].'px;';
}

$cf7_custom_style_1_elements_focus_styles = '';

if(isset($qode_options_proya['cf7_custom_style_1_element_font_focus_color']) && $qode_options_proya['cf7_custom_style_1_element_font_focus_color'] !== '') {
	$cf7_custom_style_1_elements_focus_styles .= 'color: '.$qode_options_proya['cf7_custom_style_1_element_font_focus_color'].';';
}

if(isset($qode_options_proya['cf7_custom_style_1_element_focus_background_color']) && $qode_options_proya['cf7_custom_style_1_element_focus_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_1_button_background_transparency']) && $qode_options_proya['cf7_custom_style_1_button_background_transparency'] !== ''){
		$cf7_custom_style_1_element_focus_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_1_element_focus_background_color']);
		$cf7_custom_style_1_elements_focus_styles .= 'background-color: rgba('. $cf7_custom_style_1_element_focus_background_color[0] . ',' . $cf7_custom_style_1_element_focus_background_color[1] . ',' . $cf7_custom_style_1_element_focus_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_1_button_background_transparency'] .');';
	} else {
		$cf7_custom_style_1_elements_focus_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_1_element_focus_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_1_element_focus_border_color']) && $qode_options_proya['cf7_custom_style_1_element_focus_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_1_button_border_transparency']) && $qode_options_proya['cf7_custom_style_1_button_border_transparency'] !== ''){
		$cf7_custom_style_1_element_focus_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_1_element_focus_border_color']);
		$cf7_custom_style_1_elements_focus_styles .= 'border-color: rgba('. $cf7_custom_style_1_element_focus_border_color[0] . ',' . $cf7_custom_style_1_element_focus_border_color[1] . ',' . $cf7_custom_style_1_element_focus_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_1_button_border_transparency'] .');';

	} else {
		$cf7_custom_style_1_elements_focus_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_1_element_focus_border_color'].';';
	}
}


$cf7_custom_style_1_button_styles = '';
if(isset($qode_options_proya['cf7_custom_style_1_button_background_color']) && $qode_options_proya['cf7_custom_style_1_button_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_1_button_background_transparency']) && $qode_options_proya['cf7_custom_style_1_button_background_transparency'] !== ''){
		$cf7_custom_style_1_button_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_1_button_background_color']);
		$cf7_custom_style_1_button_styles .= 'background-color: rgba('. $cf7_custom_style_1_button_background_color[0] . ',' . $cf7_custom_style_1_button_background_color[1] . ',' . $cf7_custom_style_1_button_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_1_button_background_transparency'] .');';
	} else {
		$cf7_custom_style_1_button_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_1_button_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_1_button_border_color']) && $qode_options_proya['cf7_custom_style_1_button_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_1_button_border_transparency']) && $qode_options_proya['cf7_custom_style_1_button_border_transparency'] !== ''){
		$cf7_custom_style_1_button_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_1_button_border_color']);
		$cf7_custom_style_1_button_styles .= 'border-color: rgba('. $cf7_custom_style_1_button_border_color[0] . ',' . $cf7_custom_style_1_button_border_color[1] . ',' . $cf7_custom_style_1_button_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_1_button_border_transparency'] .');';

	} else {
		$cf7_custom_style_1_button_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_1_button_border_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_1_button_border_width']) && $qode_options_proya['cf7_custom_style_1_button_border_width'] !== '') {
	$cf7_custom_style_1_button_styles .= 'border-width: '.$qode_options_proya['cf7_custom_style_1_button_border_width'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_1_button_font_color']) && $qode_options_proya['cf7_custom_style_1_button_font_color'] !== '') {
	$cf7_custom_style_1_button_styles .= 'color: '.$qode_options_proya['cf7_custom_style_1_button_font_color'].';';
}

if(isset($qode_options_proya['cf7_custom_style_1_button_font_family']) && $qode_options_proya['cf7_custom_style_1_button_font_family'] !== '-1') {
	$cf7_custom_style_1_button_styles .= 'font-family: '.str_replace('+', ' ', $qode_options_proya['cf7_custom_style_1_button_font_family']).';';
}

if(isset($qode_options_proya['cf7_custom_style_1_button_font_size']) && $qode_options_proya['cf7_custom_style_1_button_font_size'] !== '') {
	$cf7_custom_style_1_button_styles .= 'font-size: '.$qode_options_proya['cf7_custom_style_1_button_font_size'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_1_button_font_style']) && $qode_options_proya['cf7_custom_style_1_button_font_style'] !== '') {
	$cf7_custom_style_1_button_styles .= 'font-style: '.$qode_options_proya['cf7_custom_style_1_button_font_style'].';';
}

if(isset($qode_options_proya['cf7_custom_style_1_button_font_weight']) && $qode_options_proya['cf7_custom_style_1_button_font_weight'] !== '') {
	$cf7_custom_style_1_button_styles .= 'font-weight: '.$qode_options_proya['cf7_custom_style_1_button_font_weight'].';';
}

if(isset($qode_options_proya['cf7_custom_style_1_button_letter_spacing']) && $qode_options_proya['cf7_custom_style_1_button_letter_spacing'] !== '') {
	$cf7_custom_style_1_button_styles .= 'letter-spacing: '.$qode_options_proya['cf7_custom_style_1_button_letter_spacing'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_1_button_text_transform']) && $qode_options_proya['cf7_custom_style_1_button_text_transform'] !== '') {
	$cf7_custom_style_1_button_styles .= 'text-transform: '.$qode_options_proya['cf7_custom_style_1_button_text_transform'].';';
}

if(isset($qode_options_proya['cf7_custom_style_1_button_height']) && $qode_options_proya['cf7_custom_style_1_button_height'] !== '') {
	$cf7_custom_style_1_button_styles .= 'height: '.$qode_options_proya['cf7_custom_style_1_button_height'].'px;';
	$cf7_custom_style_1_button_styles .= 'line-height: '.$qode_options_proya['cf7_custom_style_1_button_height'].'px;';
}

$cf7_custom_style_1_button_hover_styles = '';

if(isset($qode_options_proya['cf7_custom_style_1_button_font_hover_color']) && $qode_options_proya['cf7_custom_style_1_button_font_hover_color'] !== '') {
	$cf7_custom_style_1_button_hover_styles .= 'color: '.$qode_options_proya['cf7_custom_style_1_button_font_hover_color'].';';
}

if(isset($qode_options_proya['cf7_custom_style_1_button_hover_background_color']) && $qode_options_proya['cf7_custom_style_1_button_hover_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_1_button_background_transparency']) && $qode_options_proya['cf7_custom_style_1_button_background_transparency'] !== ''){
		$cf7_custom_style_1_button_hover_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_1_button_hover_background_color']);
		$cf7_custom_style_1_button_hover_styles .= 'background-color: rgba('. $cf7_custom_style_1_button_hover_background_color[0] . ',' . $cf7_custom_style_1_button_hover_background_color[1] . ',' . $cf7_custom_style_1_button_hover_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_1_button_background_transparency'] .');';
	} else {
		$cf7_custom_style_1_button_hover_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_1_button_hover_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_1_button_hover_border_color']) && $qode_options_proya['cf7_custom_style_1_button_hover_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_1_button_border_transparency']) && $qode_options_proya['cf7_custom_style_1_button_border_transparency'] !== ''){
		$cf7_custom_style_1_button_hover_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_1_button_hover_border_color']);
		$cf7_custom_style_1_button_hover_styles .= 'border-color: rgba('. $cf7_custom_style_1_button_hover_border_color[0] . ',' . $cf7_custom_style_1_button_hover_border_color[1] . ',' . $cf7_custom_style_1_button_hover_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_1_button_border_transparency'] .');';

	} else {
		$cf7_custom_style_1_button_hover_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_1_button_hover_border_color'].';';
	}
}

$cf7_custom_style_2_elements_styles = '';
if(isset($qode_options_proya['cf7_custom_style_2_element_background_color']) && $qode_options_proya['cf7_custom_style_2_element_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_2_element_background_transparency']) && $qode_options_proya['cf7_custom_style_2_element_background_transparency'] !== ''){
		$cf7_custom_style_2_element_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_2_element_background_color']);
		$cf7_custom_style_2_elements_styles .= 'background-color: rgba('. $cf7_custom_style_2_element_background_color[0] . ',' . $cf7_custom_style_2_element_background_color[1] . ',' . $cf7_custom_style_2_element_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_2_element_background_transparency'] .');';
	} else {
		$cf7_custom_style_2_elements_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_2_element_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_2_element_border_color']) && $qode_options_proya['cf7_custom_style_2_element_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_2_border_transparency']) && $qode_options_proya['cf7_custom_style_2_border_transparency'] !== ''){
		$cf7_custom_style_2_element_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_2_element_border_color']);
		$cf7_custom_style_2_elements_styles .= 'border-color: rgba('. $cf7_custom_style_2_element_border_color[0] . ',' . $cf7_custom_style_2_element_border_color[1] . ',' . $cf7_custom_style_2_element_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_2_border_transparency'] .');';

	} else {
		$cf7_custom_style_2_elements_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_2_element_border_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_2_element_border_width']) && $qode_options_proya['cf7_custom_style_2_element_border_width'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'border-width: '.$qode_options_proya['cf7_custom_style_2_element_border_width'].'px;';
	$cf7_custom_style_2_elements_styles .= 'border-style:solid;';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_font_color']) && $qode_options_proya['cf7_custom_style_2_element_font_color'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'color: '.$qode_options_proya['cf7_custom_style_2_element_font_color'].';';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_font_family']) && $qode_options_proya['cf7_custom_style_2_element_font_family'] !== '-1') {
	$cf7_custom_style_2_elements_styles .= 'font-family: '.str_replace('+', ' ', $qode_options_proya['cf7_custom_style_2_element_font_family']).';';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_font_size']) && $qode_options_proya['cf7_custom_style_2_element_font_size'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'font-size: '.$qode_options_proya['cf7_custom_style_2_element_font_size'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_line_height']) && $qode_options_proya['cf7_custom_style_2_element_line_height'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'line-height: '.$qode_options_proya['cf7_custom_style_2_element_line_height'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_font_style']) && $qode_options_proya['cf7_custom_style_2_element_font_style'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'font-style: '.$qode_options_proya['cf7_custom_style_2_element_font_style'].';';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_font_weight']) && $qode_options_proya['cf7_custom_style_2_element_font_weight'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'font-weight: '.$qode_options_proya['cf7_custom_style_2_element_font_weight'].';';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_letter_spacing']) && $qode_options_proya['cf7_custom_style_2_element_letter_spacing'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'letter-spacing: '.$qode_options_proya['cf7_custom_style_2_element_letter_spacing'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_text_transform']) && $qode_options_proya['cf7_custom_style_2_element_text_transform'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'text-transform: '.$qode_options_proya['cf7_custom_style_2_element_text_transform'].';';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_padding_top']) && $qode_options_proya['cf7_custom_style_2_element_padding_top'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'padding-top: '.$qode_options_proya['cf7_custom_style_2_element_padding_top'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_padding_right']) && $qode_options_proya['cf7_custom_style_2_element_padding_right'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'padding-right: '.$qode_options_proya['cf7_custom_style_2_element_padding_right'].'px;';
}
if(isset($qode_options_proya['cf7_custom_style_2_element_padding_bottom']) && $qode_options_proya['cf7_custom_style_2_element_padding_bottom'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'padding-bottom: '.$qode_options_proya['cf7_custom_style_2_element_padding_bottom'].'px;';
}
if(isset($qode_options_proya['cf7_custom_style_2_element_padding_left']) && $qode_options_proya['cf7_custom_style_2_element_padding_left'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'padding-left: '.$qode_options_proya['cf7_custom_style_2_element_padding_left'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_margin_top']) && $qode_options_proya['cf7_custom_style_2_element_margin_top'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'margin-top: '.$qode_options_proya['cf7_custom_style_2_element_margin_top'].'px;';
}
if(isset($qode_options_proya['cf7_custom_style_2_element_margin_bottom']) && $qode_options_proya['cf7_custom_style_2_element_margin_bottom'] !== '') {
	$cf7_custom_style_2_elements_styles .= 'margin-bottom: '.$qode_options_proya['cf7_custom_style_2_element_margin_bottom'].'px;';
}

$cf7_custom_style_2_elements_focus_styles = '';

if(isset($qode_options_proya['cf7_custom_style_2_element_font_focus_color']) && $qode_options_proya['cf7_custom_style_2_element_font_focus_color'] !== '') {
	$cf7_custom_style_2_elements_focus_styles .= 'color: '.$qode_options_proya['cf7_custom_style_2_element_font_focus_color'].';';
}

if(isset($qode_options_proya['cf7_custom_style_2_element_focus_background_color']) && $qode_options_proya['cf7_custom_style_2_element_focus_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_2_button_background_transparency']) && $qode_options_proya['cf7_custom_style_2_button_background_transparency'] !== ''){
		$cf7_custom_style_2_element_focus_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_2_element_focus_background_color']);
		$cf7_custom_style_2_elements_focus_styles .= 'background-color: rgba('. $cf7_custom_style_2_element_focus_background_color[0] . ',' . $cf7_custom_style_2_element_focus_background_color[1] . ',' . $cf7_custom_style_2_element_focus_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_2_button_background_transparency'] .');';
	} else {
		$cf7_custom_style_2_elements_focus_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_2_element_focus_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_2_element_focus_border_color']) && $qode_options_proya['cf7_custom_style_2_element_focus_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_2_button_border_transparency']) && $qode_options_proya['cf7_custom_style_2_button_border_transparency'] !== ''){
		$cf7_custom_style_2_element_focus_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_2_element_focus_border_color']);
		$cf7_custom_style_2_elements_focus_styles .= 'border-color: rgba('. $cf7_custom_style_2_element_focus_border_color[0] . ',' . $cf7_custom_style_2_element_focus_border_color[1] . ',' . $cf7_custom_style_2_element_focus_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_2_button_border_transparency'] .');';

	} else {
		$cf7_custom_style_2_elements_focus_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_2_element_focus_border_color'].';';
	}
}


$cf7_custom_style_2_button_styles = '';
$cf7_custom_style_2_color_placeholder = '';
if(isset($qode_options_proya['cf7_custom_style_2_button_background_color']) && $qode_options_proya['cf7_custom_style_2_button_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_2_button_background_transparency']) && $qode_options_proya['cf7_custom_style_2_button_background_transparency'] !== ''){
		$cf7_custom_style_2_button_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_2_button_background_color']);
		$cf7_custom_style_2_button_styles .= 'background-color: rgba('. $cf7_custom_style_2_button_background_color[0] . ',' . $cf7_custom_style_2_button_background_color[1] . ',' . $cf7_custom_style_2_button_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_2_button_background_transparency'] .');';
	} else {
		$cf7_custom_style_2_button_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_2_button_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_2_button_border_color']) && $qode_options_proya['cf7_custom_style_2_button_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_2_button_border_transparency']) && $qode_options_proya['cf7_custom_style_2_button_border_transparency'] !== ''){
		$cf7_custom_style_2_button_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_2_button_border_color']);
		$cf7_custom_style_2_button_styles .= 'border-color: rgba('. $cf7_custom_style_2_button_border_color[0] . ',' . $cf7_custom_style_2_button_border_color[1] . ',' . $cf7_custom_style_2_button_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_2_button_border_transparency'] .');';

	} else {
		$cf7_custom_style_2_button_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_2_button_border_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_2_button_border_width']) && $qode_options_proya['cf7_custom_style_2_button_border_width'] !== '') {
	$cf7_custom_style_2_button_styles .= 'border-width: '.$qode_options_proya['cf7_custom_style_2_button_border_width'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_2_button_font_color']) && $qode_options_proya['cf7_custom_style_2_button_font_color'] !== '') {
	$cf7_custom_style_2_button_styles .= 'color: '.$qode_options_proya['cf7_custom_style_2_button_font_color'].';';
	$cf7_custom_style_2_color_placeholder .= 'color: '.$qode_options_proya['cf7_custom_style_2_button_font_color'].';';
	$cf7_custom_style_2_color_placeholder .= 'opacity:1;';
}

if(isset($qode_options_proya['cf7_custom_style_2_button_font_family']) && $qode_options_proya['cf7_custom_style_2_button_font_family'] !== '-1') {
	$cf7_custom_style_2_button_styles .= 'font-family: '.str_replace('+', ' ', $qode_options_proya['cf7_custom_style_2_button_font_family']).';';
}

if(isset($qode_options_proya['cf7_custom_style_2_button_font_size']) && $qode_options_proya['cf7_custom_style_2_button_font_size'] !== '') {
	$cf7_custom_style_2_button_styles .= 'font-size: '.$qode_options_proya['cf7_custom_style_2_button_font_size'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_2_button_font_style']) && $qode_options_proya['cf7_custom_style_2_button_font_style'] !== '') {
	$cf7_custom_style_2_button_styles .= 'font-style: '.$qode_options_proya['cf7_custom_style_2_button_font_style'].';';
}

if(isset($qode_options_proya['cf7_custom_style_2_button_font_weight']) && $qode_options_proya['cf7_custom_style_2_button_font_weight'] !== '') {
	$cf7_custom_style_2_button_styles .= 'font-weight: '.$qode_options_proya['cf7_custom_style_2_button_font_weight'].';';
}

if(isset($qode_options_proya['cf7_custom_style_2_button_letter_spacing']) && $qode_options_proya['cf7_custom_style_2_button_letter_spacing'] !== '') {
	$cf7_custom_style_2_button_styles .= 'letter-spacing: '.$qode_options_proya['cf7_custom_style_2_button_letter_spacing'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_2_button_text_transform']) && $qode_options_proya['cf7_custom_style_2_button_text_transform'] !== '') {
	$cf7_custom_style_2_button_styles .= 'text-transform: '.$qode_options_proya['cf7_custom_style_2_button_text_transform'].';';
}

if(isset($qode_options_proya['cf7_custom_style_2_button_height']) && $qode_options_proya['cf7_custom_style_2_button_height'] !== '') {
	$cf7_custom_style_2_button_styles .= 'height: '.$qode_options_proya['cf7_custom_style_2_button_height'].'px;';
	$cf7_custom_style_2_button_styles .= 'line-height: '.$qode_options_proya['cf7_custom_style_2_button_height'].'px;';
}

$cf7_custom_style_2_button_hover_styles = '';

if(isset($qode_options_proya['cf7_custom_style_2_button_font_hover_color']) && $qode_options_proya['cf7_custom_style_2_button_font_hover_color'] !== '') {
	$cf7_custom_style_2_button_hover_styles .= 'color: '.$qode_options_proya['cf7_custom_style_2_button_font_hover_color'].';';
}

if(isset($qode_options_proya['cf7_custom_style_2_button_hover_background_color']) && $qode_options_proya['cf7_custom_style_2_button_hover_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_2_button_background_transparency']) && $qode_options_proya['cf7_custom_style_2_button_background_transparency'] !== ''){
		$cf7_custom_style_2_button_hover_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_2_button_hover_background_color']);
		$cf7_custom_style_2_button_hover_styles .= 'background-color: rgba('. $cf7_custom_style_2_button_hover_background_color[0] . ',' . $cf7_custom_style_2_button_hover_background_color[1] . ',' . $cf7_custom_style_2_button_hover_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_2_button_background_transparency'] .');';
	} else {
		$cf7_custom_style_2_button_hover_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_2_button_hover_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_2_button_hover_border_color']) && $qode_options_proya['cf7_custom_style_2_button_hover_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_2_button_border_transparency']) && $qode_options_proya['cf7_custom_style_2_button_border_transparency'] !== ''){
		$cf7_custom_style_2_button_hover_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_2_button_hover_border_color']);
		$cf7_custom_style_2_button_hover_styles .= 'border-color: rgba('. $cf7_custom_style_2_button_hover_border_color[0] . ',' . $cf7_custom_style_2_button_hover_border_color[1] . ',' . $cf7_custom_style_2_button_hover_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_2_button_border_transparency'] .');';

	} else {
		$cf7_custom_style_2_button_hover_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_2_button_hover_border_color'].';';
	}
}
$cf7_custom_style_3_elements_styles = '';
$cf7_custom_style_3_color_placeholder = '';
if(isset($qode_options_proya['cf7_custom_style_3_element_background_color']) && $qode_options_proya['cf7_custom_style_3_element_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_3_element_background_transparency']) && $qode_options_proya['cf7_custom_style_3_element_background_transparency'] !== ''){
		$cf7_custom_style_3_element_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_3_element_background_color']);
		$cf7_custom_style_3_elements_styles .= 'background-color: rgba('. $cf7_custom_style_3_element_background_color[0] . ',' . $cf7_custom_style_3_element_background_color[1] . ',' . $cf7_custom_style_3_element_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_3_element_background_transparency'] .');';
	} else {
		$cf7_custom_style_3_elements_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_3_element_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_3_element_border_color']) && $qode_options_proya['cf7_custom_style_3_element_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_3_border_transparency']) && $qode_options_proya['cf7_custom_style_3_border_transparency'] !== ''){
		$cf7_custom_style_3_element_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_3_element_border_color']);
		$cf7_custom_style_3_elements_styles .= 'border-color: rgba('. $cf7_custom_style_3_element_border_color[0] . ',' . $cf7_custom_style_3_element_border_color[1] . ',' . $cf7_custom_style_3_element_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_3_border_transparency'] .');';

	} else {
		$cf7_custom_style_3_elements_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_3_element_border_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_3_element_border_width']) && $qode_options_proya['cf7_custom_style_3_element_border_width'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'border-width: '.$qode_options_proya['cf7_custom_style_3_element_border_width'].'px;';
	$cf7_custom_style_3_elements_styles .= 'border-style:solid;';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_font_color']) && $qode_options_proya['cf7_custom_style_3_element_font_color'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'color: '.$qode_options_proya['cf7_custom_style_3_element_font_color'].';';
	$cf7_custom_style_3_color_placeholder .= 'color: '.$qode_options_proya['cf7_custom_style_3_element_font_color'].';';
	$cf7_custom_style_3_color_placeholder .= 'opacity:1;';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_font_family']) && $qode_options_proya['cf7_custom_style_3_element_font_family'] !== '-1') {
	$cf7_custom_style_3_elements_styles .= 'font-family: '.str_replace('+', ' ', $qode_options_proya['cf7_custom_style_3_element_font_family']).';';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_font_size']) && $qode_options_proya['cf7_custom_style_3_element_font_size'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'font-size: '.$qode_options_proya['cf7_custom_style_3_element_font_size'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_line_height']) && $qode_options_proya['cf7_custom_style_3_element_line_height'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'line-height: '.$qode_options_proya['cf7_custom_style_3_element_line_height'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_font_style']) && $qode_options_proya['cf7_custom_style_3_element_font_style'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'font-style: '.$qode_options_proya['cf7_custom_style_3_element_font_style'].';';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_font_weight']) && $qode_options_proya['cf7_custom_style_3_element_font_weight'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'font-weight: '.$qode_options_proya['cf7_custom_style_3_element_font_weight'].';';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_letter_spacing']) && $qode_options_proya['cf7_custom_style_3_element_letter_spacing'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'letter-spacing: '.$qode_options_proya['cf7_custom_style_3_element_letter_spacing'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_text_transform']) && $qode_options_proya['cf7_custom_style_3_element_text_transform'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'text-transform: '.$qode_options_proya['cf7_custom_style_3_element_text_transform'].';';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_padding_top']) && $qode_options_proya['cf7_custom_style_3_element_padding_top'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'padding-top: '.$qode_options_proya['cf7_custom_style_3_element_padding_top'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_padding_right']) && $qode_options_proya['cf7_custom_style_3_element_padding_right'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'padding-right: '.$qode_options_proya['cf7_custom_style_3_element_padding_right'].'px;';
}
if(isset($qode_options_proya['cf7_custom_style_3_element_padding_bottom']) && $qode_options_proya['cf7_custom_style_3_element_padding_bottom'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'padding-bottom: '.$qode_options_proya['cf7_custom_style_3_element_padding_bottom'].'px;';
}
if(isset($qode_options_proya['cf7_custom_style_3_element_padding_left']) && $qode_options_proya['cf7_custom_style_3_element_padding_left'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'padding-left: '.$qode_options_proya['cf7_custom_style_3_element_padding_left'].'px;';
}
if(isset($qode_options_proya['cf7_custom_style_3_element_margin_top']) && $qode_options_proya['cf7_custom_style_3_element_margin_top'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'margin-top: '.$qode_options_proya['cf7_custom_style_3_element_margin_top'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_margin_bottom']) && $qode_options_proya['cf7_custom_style_3_element_margin_bottom'] !== '') {
	$cf7_custom_style_3_elements_styles .= 'margin-bottom: '.$qode_options_proya['cf7_custom_style_3_element_margin_bottom'].'px;';
}


$cf7_custom_style_3_elements_focus_styles = '';

if(isset($qode_options_proya['cf7_custom_style_3_element_font_focus_color']) && $qode_options_proya['cf7_custom_style_3_element_font_focus_color'] !== '') {
	$cf7_custom_style_3_elements_focus_styles .= 'color: '.$qode_options_proya['cf7_custom_style_3_element_font_focus_color'].';';
}

if(isset($qode_options_proya['cf7_custom_style_3_element_focus_background_color']) && $qode_options_proya['cf7_custom_style_3_element_focus_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_3_button_background_transparency']) && $qode_options_proya['cf7_custom_style_3_button_background_transparency'] !== ''){
		$cf7_custom_style_3_element_focus_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_3_element_focus_background_color']);
		$cf7_custom_style_3_elements_focus_styles .= 'background-color: rgba('. $cf7_custom_style_3_element_focus_background_color[0] . ',' . $cf7_custom_style_3_element_focus_background_color[1] . ',' . $cf7_custom_style_3_element_focus_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_3_button_background_transparency'] .');';
	} else {
		$cf7_custom_style_3_elements_focus_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_3_element_focus_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_3_element_focus_border_color']) && $qode_options_proya['cf7_custom_style_3_element_focus_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_3_button_border_transparency']) && $qode_options_proya['cf7_custom_style_3_button_border_transparency'] !== ''){
		$cf7_custom_style_3_element_focus_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_3_element_focus_border_color']);
		$cf7_custom_style_3_elements_focus_styles .= 'border-color: rgba('. $cf7_custom_style_3_element_focus_border_color[0] . ',' . $cf7_custom_style_3_element_focus_border_color[1] . ',' . $cf7_custom_style_3_element_focus_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_3_button_border_transparency'] .');';

	} else {
		$cf7_custom_style_3_elements_focus_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_3_element_focus_border_color'].';';
	}
}


$cf7_custom_style_3_button_styles = '';
if(isset($qode_options_proya['cf7_custom_style_3_button_background_color']) && $qode_options_proya['cf7_custom_style_3_button_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_3_button_background_transparency']) && $qode_options_proya['cf7_custom_style_3_button_background_transparency'] !== ''){
		$cf7_custom_style_3_button_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_3_button_background_color']);
		$cf7_custom_style_3_button_styles .= 'background-color: rgba('. $cf7_custom_style_3_button_background_color[0] . ',' . $cf7_custom_style_3_button_background_color[1] . ',' . $cf7_custom_style_3_button_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_3_button_background_transparency'] .');';
	} else {
		$cf7_custom_style_3_button_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_3_button_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_3_button_border_color']) && $qode_options_proya['cf7_custom_style_3_button_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_3_button_border_transparency']) && $qode_options_proya['cf7_custom_style_3_button_border_transparency'] !== ''){
		$cf7_custom_style_3_button_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_3_button_border_color']);
		$cf7_custom_style_3_button_styles .= 'border-color: rgba('. $cf7_custom_style_3_button_border_color[0] . ',' . $cf7_custom_style_3_button_border_color[1] . ',' . $cf7_custom_style_3_button_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_3_button_border_transparency'] .');';

	} else {
		$cf7_custom_style_3_button_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_3_button_border_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_3_button_border_width']) && $qode_options_proya['cf7_custom_style_3_button_border_width'] !== '') {
	$cf7_custom_style_3_button_styles .= 'border-width: '.$qode_options_proya['cf7_custom_style_3_button_border_width'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_3_button_font_color']) && $qode_options_proya['cf7_custom_style_3_button_font_color'] !== '') {
	$cf7_custom_style_3_button_styles .= 'color: '.$qode_options_proya['cf7_custom_style_3_button_font_color'].';';
}

if(isset($qode_options_proya['cf7_custom_style_3_button_font_family']) && $qode_options_proya['cf7_custom_style_3_button_font_family'] !== '-1') {
	$cf7_custom_style_3_button_styles .= 'font-family: '.str_replace('+', ' ', $qode_options_proya['cf7_custom_style_3_button_font_family']).';';
}

if(isset($qode_options_proya['cf7_custom_style_3_button_font_size']) && $qode_options_proya['cf7_custom_style_3_button_font_size'] !== '') {
	$cf7_custom_style_3_button_styles .= 'font-size: '.$qode_options_proya['cf7_custom_style_3_button_font_size'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_3_button_font_style']) && $qode_options_proya['cf7_custom_style_3_button_font_style'] !== '') {
	$cf7_custom_style_3_button_styles .= 'font-style: '.$qode_options_proya['cf7_custom_style_3_button_font_style'].';';
}

if(isset($qode_options_proya['cf7_custom_style_3_button_font_weight']) && $qode_options_proya['cf7_custom_style_3_button_font_weight'] !== '') {
	$cf7_custom_style_3_button_styles .= 'font-weight: '.$qode_options_proya['cf7_custom_style_3_button_font_weight'].';';
}

if(isset($qode_options_proya['cf7_custom_style_3_button_letter_spacing']) && $qode_options_proya['cf7_custom_style_3_button_letter_spacing'] !== '') {
	$cf7_custom_style_3_button_styles .= 'letter-spacing: '.$qode_options_proya['cf7_custom_style_3_button_letter_spacing'].'px;';
}

if(isset($qode_options_proya['cf7_custom_style_3_button_text_transform']) && $qode_options_proya['cf7_custom_style_3_button_text_transform'] !== '') {
	$cf7_custom_style_3_button_styles .= 'text-transform: '.$qode_options_proya['cf7_custom_style_3_button_text_transform'].';';
}

if(isset($qode_options_proya['cf7_custom_style_3_button_height']) && $qode_options_proya['cf7_custom_style_3_button_height'] !== '') {
	$cf7_custom_style_3_button_styles .= 'height: '.$qode_options_proya['cf7_custom_style_3_button_height'].'px;';
	$cf7_custom_style_3_button_styles .= 'line-height: '.$qode_options_proya['cf7_custom_style_3_button_height'].'px;';
}

$cf7_custom_style_3_button_hover_styles = '';

if(isset($qode_options_proya['cf7_custom_style_3_button_font_hover_color']) && $qode_options_proya['cf7_custom_style_3_button_font_hover_color'] !== '') {
	$cf7_custom_style_3_button_hover_styles .= 'color: '.$qode_options_proya['cf7_custom_style_3_button_font_hover_color'].';';
}

if(isset($qode_options_proya['cf7_custom_style_3_button_hover_background_color']) && $qode_options_proya['cf7_custom_style_3_button_hover_background_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_3_button_background_transparency']) && $qode_options_proya['cf7_custom_style_3_button_background_transparency'] !== ''){
		$cf7_custom_style_3_button_hover_background_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_3_button_hover_background_color']);
		$cf7_custom_style_3_button_hover_styles .= 'background-color: rgba('. $cf7_custom_style_3_button_hover_background_color[0] . ',' . $cf7_custom_style_3_button_hover_background_color[1] . ',' . $cf7_custom_style_3_button_hover_background_color[2] . ',' . $qode_options_proya['cf7_custom_style_3_button_background_transparency'] .');';
	} else {
		$cf7_custom_style_3_button_hover_styles .= 'background-color: '.$qode_options_proya['cf7_custom_style_3_button_hover_background_color'].';';
	}
}

if(isset($qode_options_proya['cf7_custom_style_3_button_hover_border_color']) && $qode_options_proya['cf7_custom_style_3_button_hover_border_color'] !== '') {
	if(isset($qode_options_proya['cf7_custom_style_3_button_border_transparency']) && $qode_options_proya['cf7_custom_style_3_button_border_transparency'] !== ''){
		$cf7_custom_style_3_button_hover_border_color = qode_hex2rgb($qode_options_proya['cf7_custom_style_3_button_hover_border_color']);
		$cf7_custom_style_3_button_hover_styles .= 'border-color: rgba('. $cf7_custom_style_3_button_hover_border_color[0] . ',' . $cf7_custom_style_3_button_hover_border_color[1] . ',' . $cf7_custom_style_3_button_hover_border_color[2] . ',' . $qode_options_proya['cf7_custom_style_3_button_border_transparency'] .');';

	} else {
		$cf7_custom_style_3_button_hover_styles .= 'border-color: '.$qode_options_proya['cf7_custom_style_3_button_hover_border_color'].';';
	}
}
?>

<?php if($cf7_custom_style_1_button_styles !== ""){ ?>
	.cf7_custom_style_1  input.wpcf7-form-control.wpcf7-submit,
	.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
		<?php echo $cf7_custom_style_1_button_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_1_button_hover_styles !== ""){ ?>
	.cf7_custom_style_1  input.wpcf7-form-control.wpcf7-submit:hover,
	.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
		<?php echo $cf7_custom_style_1_button_hover_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_1_elements_styles !== ""){ ?>
	.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-text,
	.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-number,
	.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-date,
	.cf7_custom_style_1 textarea.wpcf7-form-control.wpcf7-textarea,
	.cf7_custom_style_1 select.wpcf7-form-control.wpcf7-select,
	.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-quiz{
		<?php echo $cf7_custom_style_1_elements_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_1_elements_focus_styles !== ""){ ?>
	.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-text:focus,
	.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-number:focus,
	.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-date:focus,
	.cf7_custom_style_1 textarea.wpcf7-form-control.wpcf7-textarea:focus,
	.cf7_custom_style_1 select.wpcf7-form-control.wpcf7-select:focus,
	.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-quiz:focus{
		<?php echo $cf7_custom_style_1_elements_focus_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_2_button_styles !== ""){ ?>
	.cf7_custom_style_2  input.wpcf7-form-control.wpcf7-submit,
	.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
		<?php echo $cf7_custom_style_2_button_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_2_button_hover_styles !== ""){ ?>
	.cf7_custom_style_2  input.wpcf7-form-control.wpcf7-submit:hover,
	.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
		<?php echo $cf7_custom_style_2_button_hover_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_2_elements_styles !== ""){ ?>
	.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-text,
	.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-number,
	.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-date,
	.cf7_custom_style_2 textarea.wpcf7-form-control.wpcf7-textarea,
	.cf7_custom_style_2 select.wpcf7-form-control.wpcf7-select,
	.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-quiz{
		<?php echo $cf7_custom_style_2_elements_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_2_elements_focus_styles !== ""){ ?>
	.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-text:focus,
	.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-number:focus,
	.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-date:focus,
	.cf7_custom_style_2 textarea.wpcf7-form-control.wpcf7-textarea:focus,
	.cf7_custom_style_2 select.wpcf7-form-control.wpcf7-select:focus,
	.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-quiz:focus{
		<?php echo $cf7_custom_style_2_elements_focus_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_3_button_styles !== ""){ ?>
	.cf7_custom_style_3  input.wpcf7-form-control.wpcf7-submit,
	.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
		<?php echo $cf7_custom_style_3_button_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_3_button_hover_styles !== ""){ ?>
	.cf7_custom_style_3  input.wpcf7-form-control.wpcf7-submit:hover,
	.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
		<?php echo $cf7_custom_style_3_button_hover_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_3_elements_styles !== ""){ ?>
	.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-text,
	.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-number,
	.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-date,
	.cf7_custom_style_3 textarea.wpcf7-form-control.wpcf7-textarea,
	.cf7_custom_style_3 select.wpcf7-form-control.wpcf7-select,
	.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-quiz{
		<?php echo $cf7_custom_style_3_elements_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_3_elements_focus_styles !== ""){ ?>
	.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-text:focus,
	.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-number:focus,
	.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-date:focus,
	.cf7_custom_style_3 textarea.wpcf7-form-control.wpcf7-textarea:focus,
	.cf7_custom_style_3 select.wpcf7-form-control.wpcf7-select:focus,
	.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-quiz:focus{
		<?php echo $cf7_custom_style_3_elements_focus_styles; ?>
	}
<?php } ?>

<?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
	.cf7_custom_style_1 ::-webkit-input-placeholder{
		<?php echo $cf7_custom_style_1_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
	.cf7_custom_style_1 :-moz-placeholder{
		<?php echo $cf7_custom_style_1_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
	.cf7_custom_style_1 ::-moz-placeholder{
		<?php echo $cf7_custom_style_1_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
	.cf7_custom_style_1 :-ms-input-placeholde{
		<?php echo $cf7_custom_style_1_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
	.cf7_custom_style_2 ::-webkit-input-placeholder{
	<?php echo $cf7_custom_style_2_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
	.cf7_custom_style_2 :-moz-placeholder{
	<?php echo $cf7_custom_style_2_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
	.cf7_custom_style_2 ::-moz-placeholder{
	<?php echo $cf7_custom_style_2_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
	.cf7_custom_style_2 :-ms-input-placeholde{
	<?php echo $cf7_custom_style_2_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
	.cf7_custom_style_3 ::-webkit-input-placeholder{
		<?php echo $cf7_custom_style_3_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
	.cf7_custom_style_3 :-moz-placeholder{
		<?php echo $cf7_custom_style_3_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
	.cf7_custom_style_3 ::-moz-placeholder{
		<?php echo $cf7_custom_style_3_color_placeholder; ?>
	}
<?php } ?>
<?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
	.cf7_custom_style_3 :-ms-input-placeholde{
		<?php echo $cf7_custom_style_3_color_placeholder; ?>
	}
<?php } ?>
<?php
} //end custom style contact form 7
?>
<?php
//generate qode search styles
if(isset($qode_options_proya['enable_search']) && $qode_options_proya['enable_search'] == 'yes') {
	$search_container_styles 	= '';
	$search_text_styles 		= '';

	if(isset($qode_options_proya['search_background_color']) && $qode_options_proya['search_background_color']) {
		$search_container_styles .= 'background-color: '.$qode_options_proya['search_background_color'].';';
	}

	if(isset($qode_options_proya['search_text_color']) && $qode_options_proya['search_text_color'] !== '') {
		$search_text_styles .= 'color: '.$qode_options_proya['search_text_color'].';';
	}

	if($search_container_styles !== '') {
	?>
		.qode_search_form,
		.qode_search_form input,
		.qode_search_form input:focus {
			<?php echo $search_container_styles; ?>
		}
	<?php
	}

	if($search_text_styles !== '') {
		?>
		.qode_search_form i,
		.qode_search_form .container input {
			<?php echo $search_text_styles ?>
		}
		<?php
	}
}

//generate title styles
$title_separator_styles = '';
if(isset($qode_options_proya['title_separator_color']) && $qode_options_proya['title_separator_color'] !== '') {
	$title_separator_styles .= 'background-color: '.$qode_options_proya['title_separator_color'].';';
}

if(isset($qode_options_proya['title_separator_width']) && $qode_options_proya['title_separator_width'] !== '') {
	$title_separator_styles .= 'width: '.$qode_options_proya['title_separator_width'].'px;';
}

if($title_separator_styles != '') {
	?>
	.title .separator { <?php echo $title_separator_styles; ?> }
	<?php
}
?>

<?php
//generate content with negative margin style
if(isset($qode_options_proya['content_negative_margin']) && $qode_options_proya['content_negative_margin'] !== '') {
?>
    .content_top_margin .content .title_outer{
        position:relative;
        z-index: 99;
    }

    .content_top_margin .content > .content_inner > .container{
        background-color: transparent !important;
        margin-top: <?php echo $qode_options_proya['content_negative_margin']; ?>px;
    }
<?php
}
?>

<?php
if(isset($qode_options_proya['vss_navigation_color']) && $qode_options_proya['vss_navigation_color'] !== '') {
	?>

	#multiscroll-nav span{
	border-color: <?php echo $qode_options_proya['vss_navigation_color']; ?>;
	}
	#multiscroll-nav li .active span{
	background-color: <?php echo $qode_options_proya['vss_navigation_color']; ?>;
	}
<?php
}
?>
<?php
if(isset($qode_options_proya['vss_navigation_size']) && $qode_options_proya['vss_navigation_size'] !== '') {
	?>

	#multiscroll-nav li,
	#multiscroll-nav span{
	width: <?php echo $qode_options_proya['vss_navigation_size']; ?>px;
	height: <?php echo $qode_options_proya['vss_navigation_size']; ?>px;
	}
<?php
}
?>

<?php

if(isset($qode_options_proya['vss_left_panel_size']) && $qode_options_proya['vss_left_panel_size'] !== '' && isset($qode_options_proya['vss_right_panel_size']) && $qode_options_proya['vss_right_panel_size'] !== '' && (intval($qode_options_proya['vss_left_panel_size']) + intval($qode_options_proya['vss_right_panel_size']) == 100)) {
	?>
	.ms-left {
	width: <?php echo $qode_options_proya['vss_left_panel_size']; ?>% !important;
	}

	.ms-right {
	width: <?php echo $qode_options_proya['vss_right_panel_size']; ?>% !important;
	}
<?php
}
?>

<?php if(isset($qode_options_proya['paspartu']) && $qode_options_proya['paspartu'] == 'yes') { ?>
	<?php if(isset($qode_options_proya['paspartu_color']) && $qode_options_proya['paspartu_color'] !== ''){?>
	.paspartu_outer,
	.paspartu_left,
	.paspartu_right,
	.paspartu_bottom,
	.paspartu_outer .q_slider,
	.paspartu_outer .content:not(.has_slider) .content_inner{
		background-color: <?php echo $qode_options_proya['paspartu_color']; ?>;
	}
	<?php } ?>
	
	<?php if(isset($qode_options_proya['paspartu_width']) && $qode_options_proya['paspartu_width'] !== ''){?>
	.paspartu_outer{
		padding: 0 <?php echo $qode_options_proya['paspartu_width']; ?>% <?php echo $qode_options_proya['paspartu_width']; ?>% <?php echo $qode_options_proya['paspartu_width']; ?>%;
	}

	.paspartu_outer .content:not(.has_slider) .content_inner{
		padding-top: <?php echo $qode_options_proya['paspartu_width']; ?>%;
	}

	.paspartu_left,
	.paspartu_right{
		width: <?php echo $qode_options_proya['paspartu_width']; ?>%;
	}
	
	header.paspartu_header_alignment .header_bottom{
		padding: 0px <?php echo $qode_options_proya['paspartu_width']; ?>%;
	}

	@media only screen and (min-width: 1024px) {
		header.paspartu_header_alignment .header_inner_left{
			left: <?php echo $qode_options_proya['paspartu_width']; ?>%;
		}
	}
	<?php } ?>
<?php } ?>

<?php if(qode_vc_grid_elements_enabled()) {

	$vc_grid_read_more_styles = array();
	$vc_grid_read_more_hover_styles = array();

	if(isset($qode_options_proya['vc_grid_button_title_color']) && $qode_options_proya['vc_grid_button_title_color'] !== '') {
	$vc_grid_read_more_styles[] = 'color: '.$qode_options_proya['vc_grid_button_title_color'] .' !important';
	}

	if(isset($qode_options_proya['vc_grid_button_title_fontsize']) && $qode_options_proya['vc_grid_button_title_fontsize'] !== '') {
	$vc_grid_read_more_styles[] = 'font-size: '.$qode_options_proya['vc_grid_button_title_fontsize'].'px';
	}

	if(isset($qode_options_proya['vc_grid_button_title_lineheight']) && $qode_options_proya['vc_grid_button_title_lineheight'] !== '') {
	$vc_grid_read_more_styles[] = 'line-height: '.$qode_options_proya['vc_grid_button_title_lineheight'].'px';
	}

	if(isset($qode_options_proya['vc_grid_button_title_letter_spacing']) && $qode_options_proya['vc_grid_button_title_letter_spacing'] !== '') {
	$vc_grid_read_more_styles[] = 'letter-spacing: '.$qode_options_proya['vc_grid_button_title_letter_spacing'].'px';
	}

	if(isset($qode_options_proya['vc_grid_button_title_fontstyle']) && $qode_options_proya['vc_grid_button_title_fontstyle'] !== '') {
	$vc_grid_read_more_styles[] = 'font-style: '.$qode_options_proya['vc_grid_button_title_fontstyle'];
	}

	if(isset($qode_options_proya['vc_grid_button_title_fontweight']) && $qode_options_proya['vc_grid_button_title_fontweight'] !== '') {
	$vc_grid_read_more_styles[] = 'font-weight: '.$qode_options_proya['vc_grid_button_title_fontweight'];
	}

	if(isset($qode_options_proya['vc_grid_button_title_google_fonts']) && $qode_options_proya['vc_grid_button_title_google_fonts'] !== "-1") {
	$vc_grid_read_more_styles[] = 'font-family: ' . str_replace('+', ' ', $qode_options_proya['vc_grid_button_title_google_fonts']) . ', sans-serif';
	}

	if(isset($qode_options_proya['vc_grid_button_backgroundcolor']) && $qode_options_proya['vc_grid_button_backgroundcolor'] !== '') {
	$vc_grid_read_more_styles[] = 'background-color: ' .$qode_options_proya['vc_grid_button_backgroundcolor'];
	}

	if(isset($qode_options_proya['vc_grid_button_border_color']) && $qode_options_proya['vc_grid_button_border_color'] !== '') {
	$vc_grid_read_more_styles[] = 'border-color: ' .$qode_options_proya['vc_grid_button_border_color'];
	}

	if(isset($qode_options_proya['vc_grid_button_border_width']) && $qode_options_proya['vc_grid_button_border_width'] !== '') {
	$vc_grid_read_more_styles[] = 'border-width: ' .$qode_options_proya['vc_grid_button_border_width'].'px';
	}

	if(isset($qode_options_proya['vc_grid_button_border_radius']) && $qode_options_proya['vc_grid_button_border_radius'] !== '') {
	$vc_grid_read_more_styles[] = 'border-radius: ' .$qode_options_proya['vc_grid_button_border_radius'].'px';
	}

	if(isset($qode_options_proya['vc_grid_button_title_hovercolor']) && $qode_options_proya['vc_grid_button_title_hovercolor'] !== '') {
	$vc_grid_read_more_hover_styles[] = 'color: '.$qode_options_proya['vc_grid_button_title_hovercolor'] .' !important';
	}

	if(isset($qode_options_proya['vc_grid_button_backgroundcolor_hover']) && $qode_options_proya['vc_grid_button_backgroundcolor_hover'] !== '') {
	$vc_grid_read_more_hover_styles[] = 'background-color: '.$qode_options_proya['vc_grid_button_backgroundcolor_hover'];
	}

	if(isset($qode_options_proya['vc_grid_button_border_hover_color']) && $qode_options_proya['vc_grid_button_border_hover_color'] !== '') {
	$vc_grid_read_more_hover_styles[] = 'border-color: '.$qode_options_proya['vc_grid_button_border_hover_color'];
	}


	if(is_array($vc_grid_read_more_styles) && count($vc_grid_read_more_styles)) { ?>
	.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn {
	<?php echo esc_attr(implode(';', $vc_grid_read_more_styles)); ?>
	}
<?php }

	if(is_array($vc_grid_read_more_hover_styles) && count($vc_grid_read_more_hover_styles)) { ?>
	.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn:hover {
	<?php echo esc_attr(implode(';', $vc_grid_read_more_hover_styles)); ?>
	}
<?php }

	$vc_grid_load_more_styles = array();
	$vc_grid_load_more_hover_styles = array();

	if(isset($qode_options_proya['vc_grid_load_more_button_title_color']) && $qode_options_proya['vc_grid_load_more_button_title_color'] !== '') {
		$vc_grid_load_more_styles[] = 'color: '.$qode_options_proya['vc_grid_load_more_button_title_color'] .' !important';
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_title_google_fonts']) && $qode_options_proya['vc_grid_load_more_button_title_google_fonts'] !== '-1') {
		$vc_grid_load_more_styles[] = 'font-family: '. str_replace('+', ' ', $qode_options_proya['vc_grid_load_more_button_title_google_fonts']) . ', sans-serif';
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_title_fontsize']) && $qode_options_proya['vc_grid_load_more_button_title_fontsize'] !== '') {
		$vc_grid_load_more_styles[] = 'font-size: '. $qode_options_proya['vc_grid_load_more_button_title_fontsize'].'px';
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_title_lineheight']) && $qode_options_proya['vc_grid_load_more_button_title_lineheight'] !== '') {
		$vc_grid_load_more_styles[] = 'line-height: '. $qode_options_proya['vc_grid_load_more_button_title_lineheight'].'px';
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_title_fontstyle']) && $qode_options_proya['vc_grid_load_more_button_title_fontstyle'] !== '') {
		$vc_grid_load_more_styles[] = 'font-style: '. $qode_options_proya['vc_grid_load_more_button_title_fontstyle'];
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_title_fontweight']) && $qode_options_proya['vc_grid_load_more_button_title_fontweight'] !== '') {
		$vc_grid_load_more_styles[] = 'font-weight: '. $qode_options_proya['vc_grid_load_more_button_title_fontweight'];
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_title_letter_spacing']) && $qode_options_proya['vc_grid_load_more_button_title_letter_spacing'] !== '') {
		$vc_grid_load_more_styles[] = 'letter-spacing: '. $qode_options_proya['vc_grid_load_more_button_title_letter_spacing'].'px';
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_backgroundcolor']) && $qode_options_proya['vc_grid_load_more_button_backgroundcolor'] !== '') {
		$vc_grid_load_more_styles[] = 'background-color: '. $qode_options_proya['vc_grid_load_more_button_backgroundcolor'];
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_border_color']) && $qode_options_proya['vc_grid_load_more_button_border_color'] !== '') {
		$vc_grid_load_more_styles[] = 'border-color: '. $qode_options_proya['vc_grid_load_more_button_border_color'];
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_border_width']) && $qode_options_proya['vc_grid_load_more_button_border_width'] !== '') {
		$vc_grid_load_more_styles[] = 'border-width: '. $qode_options_proya['vc_grid_load_more_button_border_width'].'px';
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_border_radius']) && $qode_options_proya['vc_grid_load_more_button_border_radius'] !== '') {
		$vc_grid_load_more_styles[] = 'border-radius: '. $qode_options_proya['vc_grid_load_more_button_border_radius'].'px';
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_title_hovercolor']) && $qode_options_proya['vc_grid_load_more_button_title_hovercolor'] !== '') {
		$vc_grid_load_more_hover_styles[] = 'color: '.$qode_options_proya['vc_grid_load_more_button_title_hovercolor'] .' !important';
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_backgroundcolor_hover']) && $qode_options_proya['vc_grid_load_more_button_backgroundcolor_hover'] !== '') {
		$vc_grid_load_more_hover_styles[] = 'background-color: '. $qode_options_proya['vc_grid_load_more_button_backgroundcolor_hover'];
	}

	if(isset($qode_options_proya['vc_grid_load_more_button_border_hover_color']) && $qode_options_proya['vc_grid_load_more_button_border_hover_color'] !== '') {
		$vc_grid_load_more_hover_styles[] = 'border-color: '. $qode_options_proya['vc_grid_load_more_button_border_hover_color'];
	}


	if(is_array($vc_grid_load_more_styles) && count($vc_grid_load_more_styles)) { ?>
		.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn {
		<?php echo esc_attr(implode(';', $vc_grid_load_more_styles)); ?>
		}
	<?php }

	if(is_array($vc_grid_load_more_hover_styles) && count($vc_grid_load_more_hover_styles)) { ?>
		.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover {
		<?php echo esc_attr(implode(';', $vc_grid_load_more_hover_styles)); ?>
		}
	<?php }

	$vc_grid_pagination_styles = array();
	$vc_grid_pagination_hover_styles = array();

	if(isset($qode_options_proya['vc_grid_pagination_color']) && $qode_options_proya['vc_grid_pagination_color'] !== '') {
		$vc_grid_pagination_styles[] = 'color: '.$qode_options_proya['vc_grid_pagination_color'] . ' !important';
	}

	if(isset($qode_options_proya['vc_grid_pagination_background_color']) && $qode_options_proya['vc_grid_pagination_background_color'] !== '') {
		$vc_grid_pagination_styles[] = 'background-color: '.$qode_options_proya['vc_grid_pagination_background_color'] . ' !important';
	}

	if(isset($qode_options_proya['vc_grid_pagination_border_color']) && $qode_options_proya['vc_grid_pagination_border_color'] !== '') {
		$vc_grid_pagination_styles[] = 'border-color: '.$qode_options_proya['vc_grid_pagination_border_color'] . ' !important';
	}

	if(isset($qode_options_proya['vc_grid_pagination_hover_color']) && $qode_options_proya['vc_grid_pagination_hover_color'] !== '') {
		$vc_grid_pagination_hover_styles[] = 'color: '.$qode_options_proya['vc_grid_pagination_hover_color'] . ' !important';
	}

	if(isset($qode_options_proya['vc_grid_pagination_background_hover_color']) && $qode_options_proya['vc_grid_pagination_background_hover_color'] !== '') {
		$vc_grid_pagination_hover_styles[] = 'background-color: '.$qode_options_proya['vc_grid_pagination_background_hover_color'] . ' !important';
	}

	if(isset($qode_options_proya['vc_grid_pagination_border_hover_color']) && $qode_options_proya['vc_grid_pagination_border_hover_color'] !== '') {
		$vc_grid_pagination_hover_styles[] = 'border-color: '.$qode_options_proya['vc_grid_pagination_border_hover_color'] . ' !important';
	}

	if(is_array($vc_grid_pagination_styles) && count($vc_grid_pagination_styles)) { ?>
		.vc_grid-container .vc_grid-pagination .vc_grid-pagination-list > li > a,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots .vc_grid-owl-dot span,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots .vc_grid-owl-dot span,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot span,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot span,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot span {
		<?php echo esc_attr(implode(';', $vc_grid_pagination_styles)); ?>
		}
	<?php }

	if(is_array($vc_grid_pagination_hover_styles) && count($vc_grid_pagination_hover_styles)) { ?>
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots .vc_grid-owl-dot span:hover,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots .vc_grid-owl-dot.active span,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots .vc_grid-owl-dot span:hover,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots .vc_grid-owl-dot.active span,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot span:hover,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot.active span,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot span:hover,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot.active span,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot span:hover,
		.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot.active span,
		.vc_grid-container .vc_grid-pagination .vc_grid-pagination-list > li > a:hover,
		.vc_grid-container .vc_grid-pagination .vc_grid-pagination-list > li.vc_grid-active > a {
		<?php echo esc_attr(implode(';', $vc_grid_pagination_hover_styles)); ?>
		}
	<?php }

	if (!empty($qode_options_proya['vc_grid_arrows_color'])) { ?>
		.vc_grid-container .vc_grid .vc_grid-owl-nav .vc_grid-owl-prev,
		.vc_grid-container .vc_grid .vc_grid-owl-nav .vc_grid-owl-next {
		color: <?php echo esc_attr($qode_options_proya['vc_grid_arrows_color']); ?> !important;
		}
	<?php } ?>

<?php } ?>

<?php if (isset($qode_options_proya['qs_slider_height_tablet']) && !empty($qode_options_proya['qs_slider_height_tablet'])) { ?>
    @media only screen and (min-width: 480px) and (max-width: 768px){
        .q_slider .carousel, .qode_slider_preloader, .carousel-inner>.item{
            height: <?php echo $qode_options_proya['qs_slider_height_tablet']; ?>px !important;
        }
    }
<?php } ?>

<?php if (isset($qode_options_proya['qs_slider_height_mobile']) && !empty($qode_options_proya['qs_slider_height_mobile'])) { ?>
    @media only screen and (max-width: 480px){
        .q_slider .carousel, .qode_slider_preloader, .carousel-inner>.item{
            height: <?php echo $qode_options_proya['qs_slider_height_mobile']; ?>px !important;
        }
    }
<?php } ?>

<?php
//generate Qode Slider buttons styles
$qs_button1_styles       = '';
$qs_button1_hover_styles = '';
$qs_button2_styles       = '';
$qs_button2_hover_styles = '';

if(isset($qode_options_proya['qs_button_color']) && $qode_options_proya['qs_button_color']) {
    $qs_button1_styles .= 'color: '.$qode_options_proya['qs_button_color'].' !important;';
}

if(isset($qode_options_proya['qs_button_background_color']) && $qode_options_proya['qs_button_background_color']) {
    $qs_button1_styles .= 'background-color: '.$qode_options_proya['qs_button_background_color'].' !important;';
}

if(isset($qode_options_proya['qs_button_border_color']) && $qode_options_proya['qs_button_border_color']) {
    $qs_button1_styles .= 'border-color: '.$qode_options_proya['qs_button_border_color'].' !important;';
}

if(isset($qode_options_proya['qs_button_border_width']) && $qode_options_proya['qs_button_border_width']) {
    $qs_button1_styles .= 'border-width: '.$qode_options_proya['qs_button_border_width'].'px !important;';
}

if(isset($qode_options_proya['qs_button_border_radius']) && $qode_options_proya['qs_button_border_radius']) {
    $qs_button1_styles .= 'border-radius: '.$qode_options_proya['qs_button_border_radius'].'px !important;';
}

if(isset($qode_options_proya['qs_button_hover_color']) && $qode_options_proya['qs_button_hover_color'] != '') {
    $qs_button1_hover_styles .= 'color: '.$qode_options_proya['qs_button_hover_color'].' !important;';
}

if(isset($qode_options_proya['qs_button_hover_background_color']) && $qode_options_proya['qs_button_hover_background_color'] != '') {
    $qs_button1_hover_styles .= 'background-color: '.$qode_options_proya['qs_button_hover_background_color'].' !important;';
}

if(isset($qode_options_proya['qs_button_hover_border_color']) && $qode_options_proya['qs_button_hover_border_color'] != '') {
    $qs_button1_hover_styles .= 'border-color: '.$qode_options_proya['qs_button_hover_border_color'].' !important;';
}

if($qs_button1_styles != ""){ ?>
    .carousel-inner .slider_content .text .qbutton:not(.white){ 
        <?php echo $qs_button1_styles; ?> 
    }
<?php }

if($qs_button1_hover_styles != "") { ?>
    .carousel-inner .slider_content .text .qbutton:not(.white):hover{ 
        <?php echo $qs_button1_hover_styles; ?> 
    }
<?php }

if(isset($qode_options_proya['qs_button2_color']) && $qode_options_proya['qs_button2_color']) {
    $qs_button2_styles .= 'color: '.$qode_options_proya['qs_button2_color'].' !important;';
}

if(isset($qode_options_proya['qs_button2_background_color']) && $qode_options_proya['qs_button2_background_color']) {
    $qs_button2_styles .= 'background-color: '.$qode_options_proya['qs_button2_background_color'].' !important;';
}

if(isset($qode_options_proya['qs_button2_border_color']) && $qode_options_proya['qs_button2_border_color']) {
    $qs_button2_styles .= 'border-color: '.$qode_options_proya['qs_button2_border_color'].' !important;';
}

if(isset($qode_options_proya['qs_button2_border_width']) && $qode_options_proya['qs_button2_border_width']) {
    $qs_button2_styles .= 'border-width: '.$qode_options_proya['qs_button2_border_width'].'px !important;';
}

if(isset($qode_options_proya['qs_button2_border_radius']) && $qode_options_proya['qs_button2_border_radius']) {
    $qs_button2_styles .= 'border-radius: '.$qode_options_proya['qs_button2_border_radius'].'px !important;';
}

if(isset($qode_options_proya['qs_button2_hover_color']) && $qode_options_proya['qs_button2_hover_color'] != '') {
    $qs_button2_hover_styles .= 'color: '.$qode_options_proya['qs_button2_hover_color'].' !important;';
}

if(isset($qode_options_proya['qs_button2_hover_background_color']) && $qode_options_proya['qs_button2_hover_background_color'] != '') {
    $qs_button2_hover_styles .= 'background-color: '.$qode_options_proya['qs_button2_hover_background_color'].' !important;';
}

if(isset($qode_options_proya['qs_button2_hover_border_color']) && $qode_options_proya['qs_button2_hover_border_color'] != '') {
    $qs_button2_hover_styles .= 'border-color: '.$qode_options_proya['qs_button2_hover_border_color'].' !important;';
}

if($qs_button2_styles != ""){ ?>
    .carousel-inner .slider_content .text .qbutton.white{ 
        <?php echo $qs_button2_styles; ?> 
    }
<?php }

if($qs_button2_hover_styles != "") { ?>
    .carousel-inner .slider_content .text .qbutton.white:hover{ 
        <?php echo $qs_button2_hover_styles; ?> 
    }
<?php } ?>