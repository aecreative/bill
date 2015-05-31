<?php 
global $qode_options_proya;
/* Set id on -1 beacause archive page id can have same id as some post and settings is not good */
if(is_category() || is_tag() || is_author()){
	$archive_id = $id;
	$id = -1;
}

if(get_post_meta($id, "qode_responsive-title-image", true) != ""){
    $responsive_title_image = get_post_meta($id, "qode_responsive-title-image", true);
}else{
	$responsive_title_image = $qode_options_proya['responsive_title_image'];
}

if(get_post_meta($id, "qode_fixed-title-image", true) != ""){
 $fixed_title_image = get_post_meta($id, "qode_fixed-title-image", true);
}else{
	$fixed_title_image = $qode_options_proya['fixed_title_image'];
}

if(get_post_meta($id, "qode_title-image", true) != ""){
 $title_image = get_post_meta($id, "qode_title-image", true);
}else{
	$title_image = $qode_options_proya['title_image'];
}
$title_image_height = "";
$title_image_width = "";
if(!empty($title_image)){
	$title_image_url_obj = parse_url($title_image);
  if (file_exists($_SERVER['DOCUMENT_ROOT'].$title_image_url_obj['path']))
		list($title_image_width, $title_image_height, $title_image_type, $title_image_attr) = getimagesize($_SERVER['DOCUMENT_ROOT'].$title_image_url_obj['path']);
}

if(get_post_meta($id, "qode_title-overlay-image", true) != ""){
 $title_overlay_image = get_post_meta($id, "qode_title-overlay-image", true);
}else{
	$title_overlay_image = $qode_options_proya['title_overlay_image'];
}

$header_height_padding = 0;
if (!empty($qode_options_proya['header_height'])) {
	$header_height = $qode_options_proya['header_height'];
} else {
	$header_height = 100;
}
if (isset($qode_options_proya['header_bottom_border_color']) && !empty($qode_options_proya['header_bottom_border_color'])) {
	$header_height = $header_height + 1;
}
if($qode_options_proya['header_bottom_appearance'] == 'stick menu_bottom'){
	$menu_bottom = '46';
	if(is_active_sidebar('header_fixed_right')){
		$menu_bottom = $menu_bottom + 22;
	}
} else {
	$menu_bottom = 0;
}
$nav_font_size = 7;
if(isset($qode_options_proya['menu_fontsize']) && $qode_options_proya['menu_fontsize'] != ""){
	$nav_font_size = $qode_options_proya['menu_fontsize'] / 2;
}
$header_top = 0;
if(isset($qode_options_proya['header_top_area']) && $qode_options_proya['header_top_area'] == "yes"){
	$header_top = 33;
}
$header_height_padding = $header_height + $menu_bottom + $header_top;
if ((isset($qode_options_proya['center_logo_image']) && $qode_options_proya['center_logo_image'] == "yes") || $qode_options_proya['header_bottom_appearance'] == 'fixed_hiding') {
    if(isset($qode_options_proya['logo_image'])){
                $logo_width = 0;
                $logo_height = 0;
                if (!empty($qode_options_proya['logo_image'])) {
                    $logo_url_obj = parse_url($qode_options_proya['logo_image']);
                    list($logo_width, $logo_height, $logo_type, $logo_attr) = getimagesize($_SERVER['DOCUMENT_ROOT'].$logo_url_obj['path']);
                }
            }
    if($qode_options_proya['header_bottom_appearance'] == 'stick menu_bottom'){
        $header_height_padding = $logo_height + 30 + $menu_bottom + $header_top; // 30 is top and bottom margin of centered logo
    } else if($qode_options_proya['header_bottom_appearance'] == 'fixed_hiding'){
        $header_height_padding = $logo_height/2 + 40 + $header_height + $header_top; // 40 is top and bottom margin of centered logo
    } else {
        $header_height_padding = $logo_height + 30 + $header_height + $header_top; // 30 is top and bottom margin of centered logo
    }
}
$title_height = 100;
if(get_post_meta($id, "qode_title-height", true) != ""){
	$title_height = get_post_meta($id, "qode_title-height", true);
}else if($qode_options_proya['title_height'] != ''){
	$title_height = $qode_options_proya['title_height'];
}else {
	if (isset($qode_options_proya['center_logo_image']) && $qode_options_proya['center_logo_image'] == "yes") {
		if($qode_options_proya['header_bottom_appearance'] == 'stick menu_bottom'){
			$title_height = $title_height + $logo_height + 30 + $menu_bottom + $header_top; // 30 is top and bottom margin of centered logo
		} else {
			$title_height = $header_height + $title_height + $logo_height + 30 + $header_top; // 30 is top and bottom margin of centered logo
		}
		
		
	} else {
		$title_height = $title_height + $header_height + $menu_bottom + $header_top;

	 }
}
if(get_post_meta($id, "qode_fixed-title-image", true) != ""){
 $fixed_title_image = get_post_meta($id, "qode_fixed-title-image", true);
}else{
	$fixed_title_image = $qode_options_proya['fixed_title_image'];
}

$title_background_color = '';
if(get_post_meta($id, "qode_page-title-background-color", true) != ""){
 $title_background_color = get_post_meta($id, "qode_page-title-background-color", true);
}else{
	$title_background_color = $qode_options_proya['title_background_color'];
}

$show_title_image = true;
if(get_post_meta($id, "qode_show-page-title-image", true) == 'yes') {
	$show_title_image = false;
}
$qode_page_title_style = "standard";
if(get_post_meta($id, "qode_page_title_style", true) != ""){
	$qode_page_title_style = get_post_meta($id, "qode_page_title_style", true);
}else{
	if(isset($qode_options_proya['title_style'])) {
		$qode_page_title_style = $qode_options_proya['title_style'];
	} else {
		$qode_page_title_style = "standard";
	}
}

$animate_title_area = '';
if(get_post_meta($id, "qode_animate-page-title", true) != ""){
	$animate_title_area = get_post_meta($id, "qode_animate-page-title", true);
}else{
	$animate_title_area = $qode_options_proya['animate_title_area'];
}

if($animate_title_area == "text_right_left") {
	$animate_title_class = "animate_title_text";
} elseif($animate_title_area == "area_top_bottom"){
	$animate_title_class = "animate_title_area";
} else {
	$animate_title_class = "title_without_animation";
}

$page_title_fontsize = '';
if(get_post_meta($id, "qode_page_title_font_size", true) != ""){
	$page_title_fontsize = "title_size_" . get_post_meta($id, "qode_page_title_font_size", true);
}else{
	if(isset($qode_options_proya['predefined_title_sizes'])) {
		$page_title_fontsize = "title_size_" . $qode_options_proya['predefined_title_sizes'];
	}
}

//init variables
$title_subtitle_padding 	= '';
$header_transparency 		= '';
$is_header_transparent  	= false;
$transparent_values_array 	= array('0.00', '0');
$solid_values_array			= array('', '1');
$header_bottom_border		= '';

//is header transparent not set on current page?
if(get_post_meta($id, "qode_header_color_transparency_per_page", true) === "") {
	//take global value set in Qode Options
	$header_transparency = $qode_options_proya['header_background_transparency_initial'];
} else {
	//take value set for current page
	$header_transparency = get_post_meta($id, "qode_header_color_transparency_per_page", true);
}

//is border bottom color for header set in Qode Options?
if(isset($qode_options_proya['header_bottom_border_color']) && !empty($qode_options_proya['header_bottom_border_color'])) {
	$header_bottom_border = $qode_options_proya['header_bottom_border_color'];
}

//is header completely transparent?
$is_header_transparent 	= in_array($header_transparency, $transparent_values_array);

//is header solid?
$is_header_solid		= in_array($header_transparency, $solid_values_array);

//is header solid?
if($is_header_solid) {
	$title_holder_height = 'style="padding-top:' . $header_height_padding . 'px;height:' . ($title_height - $header_height_padding) . 'px;"';
	$title_subtitle_padding = 'style="padding-top:' . $header_height_padding . 'px;"';
} else {

	//is border for header bottom set?
	if ($header_bottom_border != '') {

		//center title between header and end of title section
		$title_holder_height = 'style="padding-top:' . $header_height_padding . 'px;height:' . ($title_height - $header_height_padding) . 'px;"';
		$title_subtitle_padding = 'style="padding-top:' . $header_height_padding . 'px;"';
	} else {

		//is header semi-transparent?
		if(!$is_header_transparent) {
			//center title between border and end of title section
			$title_holder_height = 'style="padding-top:' . $header_height_padding . 'px;height:' . ($title_height - $header_height_padding) . 'px;"';
			$title_subtitle_padding = 'style="padding-top:' . $header_height_padding . 'px;"';
		} else {
			//header is transparent. Center it between main menu item's text beginning and end of title section
			$title_holder_height = 'style="padding-top:'.(($header_height/2 - $nav_font_size) + $header_top) .'px;height:' . ($title_height - ($header_height/2 - $nav_font_size + $header_top)) . 'px;"';
			$title_subtitle_padding = 'style="padding-top:'.(($header_height/2 - $nav_font_size) + $header_top) .'px;"';
		}
	}
}

$paspartu = false;
if(isset($qode_options_proya['paspartu']) && $qode_options_proya['paspartu'] == 'yes'){
	$paspartu = true;
}

//is vertical menu activated in Qode Options?
if(isset($qode_options_proya['vertical_area']) && $qode_options_proya['vertical_area'] =='yes' && $paspartu == false){
	$title_subtitle_padding = 0;
	$title_holder_height = 100;
	$title_height = 100;
	if(get_post_meta($id, "qode_title-height", true) != ""){
		$title_holder_height = get_post_meta($id, "qode_title-height", true);
		$title_height = get_post_meta($id, "qode_title-height", true);
	}else if($qode_options_proya['title_height'] != ''){
		$title_holder_height = $qode_options_proya['title_height'];
		$title_height = $qode_options_proya['title_height'];
	}

}

$page_title_position = 'left';
$separator_title_position = 'left';
if(get_post_meta($id, "qode_page_title_position", true) != ""){
	$page_title_position = " position_" . get_post_meta($id, "qode_page_title_position", true);
	$separator_title_position = get_post_meta($id, "qode_page_title_position", true);
}else{
	$page_title_position = " position_" . $qode_options_proya['page_title_position'];
	$separator_title_position = $qode_options_proya['page_title_position'];
}

$enable_breadcrumbs = 'no';
if(get_post_meta($id, "qode_enable_breadcrumbs", true) != ""){
	$enable_breadcrumbs = get_post_meta($id, "qode_enable_breadcrumbs", true);
}elseif(isset($qode_options_proya['enable_breadcrumbs'])){
	$enable_breadcrumbs = $qode_options_proya['enable_breadcrumbs'];
}

$title_text_shadow = '';
if(get_post_meta($id, "qode_title_text_shadow", true) != ""){
	if(get_post_meta($id, "qode_title_text_shadow", true) == "yes"){
		$title_text_shadow = ' title_text_shadow';
	}
}else{
	if($qode_options_proya['title_text_shadow'] == "yes"){
		$title_text_shadow = ' title_text_shadow';
	}
}
$subtitle_color ="";
if(get_post_meta($id, "qode_page_subtitle_color", true) != ""){
	$subtitle_color = " style='color:" . get_post_meta($id, "qode_page_subtitle_color", true) . "';";
} else {
	$subtitle_color = "";
}
$separator_color ="";
if(get_post_meta($id, "qode_title_separator_color", true) != ""){
	$separator_color = " style='background-color:" . get_post_meta($id, "qode_title_separator_color", true) . "';";
} else {
	$separator_color = "";
}
$title_separator = "yes";
if(get_post_meta($id, "qode_separator_bellow_title", true)){
	$title_separator = get_post_meta($id, "qode_separator_bellow_title", true);
} elseif(isset($qode_options_proya['title_separator'])) {
	$title_separator = $qode_options_proya['title_separator'];
}

if(get_post_meta($id, "qode_show-page-title", true) !== 'yes') { ?>
	<div class="title_outer <?php echo $animate_title_class.$title_text_shadow; if($responsive_title_image == 'yes' && $show_title_image == true){ echo ' with_image'; }?>" <?php echo 'data-height="'.$title_height.'"'; if($title_height != '' && $animate_title_area == 'area_top_bottom'){ echo 'style="opacity:0;height:' . $header_height_padding .'px;"'; } ?>>
		<div class="title <?php echo $page_title_fontsize . " " . $page_title_position; if($responsive_title_image == 'no' && $title_image != "" && ($fixed_title_image == "yes" || $fixed_title_image == "yes_zoom") && $show_title_image == true){ echo ' has_fixed_background '; if($fixed_title_image == "yes_zoom"){ echo 'zoom_out '; } } if($responsive_title_image == 'no' && $title_image != "" && $fixed_title_image == "no" && $show_title_image == true){ echo ' has_background'; }  ?>" style="<?php if($responsive_title_image == 'no' && $title_image != "" && $show_title_image == true){ if($title_image_width != ''){ echo 'background-size:'.$title_image_width.'px auto;'; } echo 'background-image:url('.$title_image.');';  } if($title_height != ''){ echo 'height:'.$title_height.'px;'; } if($title_background_color != ''){ echo 'background-color:'.$title_background_color.';'; } ?>">
			<div class="image <?php if($responsive_title_image == 'yes' && $title_image != "" && $show_title_image == true){ echo "responsive"; }else{ echo "not_responsive"; } ?>"><?php if($title_image != ""){ ?><img src="<?php echo $title_image; ?>" alt="&nbsp;" /> <?php } ?></div>
			<?php if($title_overlay_image != ""){ ?>
				<div class="title_overlay" style="background-image:url('<?php echo $title_overlay_image; ?>');"></div>
			<?php } ?>
			<?php if(get_post_meta($id, "qode_show-page-title-text", true) !== 'yes') { ?>
				<div class="title_holder" <?php if($responsive_title_image != 'yes' && get_post_meta($id, "qode_show-page-title-image", true) == ""){ echo $title_holder_height; }?>>
					<div class="container">
						<div class="container_inner clearfix">
								<div class="title_subtitle_holder" <?php if($responsive_title_image == 'yes' && $show_title_image == true){ echo $title_subtitle_padding; }?>>
								<?php if(($responsive_title_image == 'yes' && $show_title_image == true) || ($fixed_title_image == "yes" || $fixed_title_image == "yes_zoom") || ($responsive_title_image == 'no' && $title_image != "" && $fixed_title_image == "no" && $show_title_image == true)){ ?>
									<div class="title_subtitle_holder_inner">
								<?php } ?>
									<h1<?php if(get_post_meta($id, "qode_page-title-color", true)) { ?> style="color:<?php echo get_post_meta($id, "qode_page-title-color", true) ?>" <?php } ?>><span><?php qode_title_text(); ?></span></h1>
									<?php if($title_separator == "yes"){ ?>
										<span class="separator small <?php echo $separator_title_position; ?>" <?php echo $separator_color; ?>></span>
									<?php } ?>
								
									<?php if(get_post_meta($id, "qode_page_subtitle", true) != ""){ ?>
										<?php if(get_post_meta($id, "qode_page_title_font_size", true) == "large") { ?>
											<h4 class="subtitle" <?php echo $subtitle_color; ?>><?php echo get_post_meta($id, "qode_page_subtitle", true); ?></h4>
										<?php } else { ?>
											<span class="subtitle" <?php echo $subtitle_color; ?>><?php echo get_post_meta($id, "qode_page_subtitle", true); ?></span>
										<?php } ?>
									<?php } ?>
									<?php if (function_exists('qode_custom_breadcrumbs') && $enable_breadcrumbs == "yes") { ?>
										<div class="breadcrumb"> <?php qode_custom_breadcrumbs(); ?></div>
									<?php } ?>
								</div>
								<?php if(($responsive_title_image == 'yes' && $show_title_image == true)  || ($fixed_title_image == "yes" || $fixed_title_image == "yes_zoom") || ($responsive_title_image == 'no' && $title_image != "" && $fixed_title_image == "no" && $show_title_image == true)){ ?>
									</div>
								<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
<?php } ?>
<?php
	/* Return id for archive pages */
	if(is_category() || is_tag() || is_author()){
		$id = $archive_id;
	}
?>