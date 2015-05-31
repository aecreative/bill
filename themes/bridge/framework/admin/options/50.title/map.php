<?php

$titlePage = new QodeAdminPage("4", "Title");
$qodeFramework->qodeOptions->addAdminPage("title",$titlePage);

$panel8 = new QodePanel("Title","title_panel");
$titlePage->addChild("panel8",$panel8);
	$animate_title_area = new QodeField("select","animate_title_area","no","Animations","Choose an animation for Title Area", array( "no" => "No animation",
       "text_right_left" => "Text right to left",
       "area_top_bottom" => "Title area top to bottom"
      ));
	$panel8->addChild("animate_title_area",$animate_title_area);
	$page_title_position = new QodeField("select","page_title_position","left","Title Text Alignment","Specify Title text alignment", array( "left" => "Left",
	       "center" => "Center",
	       "right" => "Right"
	      ));
	$panel8->addChild("page_title_position",$page_title_position);
	$predefined_title_sizes = new QodeField("select","predefined_title_sizes","small","Text Size","Choose a default Title size", array( "small" => "Small",
	       "medium" => "Medium",
	       "large" => "Large"
	      ));
	$panel8->addChild("predefined_title_sizes",$predefined_title_sizes);
	$title_text_shadow = new QodeField("yesno","title_text_shadow","no","Text Shadow","Enabling this option will give Title text a shadow");
	$panel8->addChild("title_text_shadow",$title_text_shadow);
	$title_background_color = new QodeField("color","title_background_color","","Background Color","Choose a background color for Title Area");
	$panel8->addChild("title_background_color",$title_background_color);
	$title_image = new QodeField("image","title_image","","Background Image","Choose an Image for Title Area");
	$panel8->addChild("title_image",$title_image);
	$responsive_title_image = new QodeField("yesno","responsive_title_image","no","Background Responsive Image","Enabling this option will make Title background image responsive", array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef_responsive_title_image_container", "dependence_show_on_yes" => ""));
	$panel8->addChild("responsive_title_image",$responsive_title_image);

	$responsive_title_image_container = new QodeContainer("responsive_title_image_container","responsive_title_image","yes");
	$panel8->addChild("responsive_title_image_container",$responsive_title_image_container);
		$fixed_title_image = new QodeField("select","fixed_title_image","no","Parallax Title Image","Enabling this option will make Title image parallax", array( "no" => "No",
		       "yes" => "Yes",
		       "yes_zoom" => "Yes, with zoom out"
		      ));
		$responsive_title_image_container->addChild("fixed_title_image",$fixed_title_image);
		$title_height = new QodeField("text","title_height","","Title Height (px)","Set a height for Title Area in pixels", array(), array("col_width" => 3));
		$responsive_title_image_container->addChild("title_height",$title_height);
	$title_overlay_image = new QodeField("image","title_overlay_image","","Pattern Overlay Image","Choose an image to be used as pattern over Title Area");
	$panel8->addChild("title_overlay_image",$title_overlay_image);
	$title_separator = new QodeField("yesno","title_separator","yes","Show Title Separator","Enabling this option will display a separator underneath Title", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_title_separator_container"));
	$panel8->addChild("title_separator",$title_separator);
	$title_separator_container = new QodeContainer("title_separator_container","title_separator","no");
	$panel8->addChild("title_separator_container",$title_separator_container);
		$title_separator_color = new QodeField("color","title_separator_color","","Title Separator Color","Choose a color for Title separator");
		$title_separator_container->addChild("title_separator_color",$title_separator_color);
		$title_separator_width = new QodeField("text","title_separator_width","","Title Separator Width (px)","Set the separator width in pixels", array(), array("col_width" => 3));
		$title_separator_container->addChild("title_separator_width",$title_separator_width);
	$border_bottom_title_area = new QodeField("yesno","border_bottom_title_area","no","Bottom Border","Enabling this option will display bottom border on Title Area", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_border_bottom_title_area_container"));
	$panel8->addChild("border_bottom_title_area",$border_bottom_title_area);
	$border_bottom_title_area_container = new QodeContainer("border_bottom_title_area_container","border_bottom_title_area","no");
	$panel8->addChild("border_bottom_title_area_container",$border_bottom_title_area_container);
		$border_bottom_title_area_color = new QodeField("color","border_bottom_title_area_color","","Bottom Border Color","Choose a color for Title Area bottom border");
		$border_bottom_title_area_container->addChild("border_bottom_title_area_color",$border_bottom_title_area_color);
	$margin_after_title = new QodeField("text","margin_after_title","","Margin After Title for Default Template (px)","Set a bottom margin for Title Area", array(), array("col_width" => 3));
	$panel8->addChild("margin_after_title",$margin_after_title);

$panel4 = new QodePanel("Breadcrumbs","enable_breadcrumbs_panel","vertical_area","yes");
$titlePage->addChild("panel4",$panel4);
	$enable_breadcrumbs = new QodeField("yesno","enable_breadcrumbs","no","Enable Breadcrumbs","This option will display Breadcrumbs in Title Area", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_breadcrumbs_container"));
	$panel4->addChild("enable_breadcrumbs",$enable_breadcrumbs);
	$enable_breadcrumbs_container = new QodeContainer("enable_breadcrumbs_container","enable_breadcrumbs","no");
	$panel4->addChild("enable_breadcrumbs_container",$enable_breadcrumbs_container);
		$breadcrumbs_color = new QodeField("color","breadcrumbs_color","","Breadcrumbs Color","Choose a color for Breadcrumb text");
		$enable_breadcrumbs_container->addChild("breadcrumbs_color",$breadcrumbs_color);
