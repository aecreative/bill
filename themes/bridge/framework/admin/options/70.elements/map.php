<?php

$elementsPage = new QodeAdminPage("6", "Elements");
$qodeFramework->qodeOptions->addAdminPage("elementsPage",$elementsPage);

//Separators

$panel2 = new QodePanel("Separators","separators_panel");
$elementsPage->addChild("panel2",$panel2);

	$group1 = new QodeGroup("Normal",'Define styles for separator of type "Normal"');
	$panel2->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$separator_color = new QodeField("colorsimple","separator_color","","Text Color","This is some description");
			$row1->addChild("separator_color",$separator_color);
			$separator_color_transparency = new QodeField("textsimple","separator_color_transparency","","Transparency","This is some description");
			$row1->addChild("separator_color_transparency",$separator_color_transparency);
		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$separator_thickness = new QodeField("textsimple","separator_thickness","","Thickness (px)","This is some description");
			$row2->addChild("separator_thickness",$separator_thickness);
			$separator_topmargin = new QodeField("textsimple","separator_topmargin","","Top Margin (px)","This is some description");
			$row2->addChild("separator_topmargin",$separator_topmargin);
			$separator_bottommargin = new QodeField("textsimple","separator_bottommargin","","Bottom Margin (px)","This is some description");
			$row2->addChild("separator_bottommargin",$separator_bottommargin);

	$group2 = new QodeGroup("Small",'Define styles for separator of type "Small"');
	$panel2->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);
			$separator_small_color = new QodeField("colorsimple","separator_small_color","","Text Color","This is some description");
			$row1->addChild("separator_small_color",$separator_small_color);
			$separator_small_color_transparency = new QodeField("textsimple","separator_small_color_transparency","","Transparency","This is some description");
			$row1->addChild("separator_small_color_transparency",$separator_small_color_transparency);
		$row2 = new QodeRow(true);
		$group2->addChild("row2",$row2);
			$separator_small_thickness = new QodeField("textsimple","separator_small_thickness","","Thickness (px)","This is some description");
			$row2->addChild("separator_small_thickness",$separator_small_thickness);
			$separator_small_width = new QodeField("textsimple","separator_small_width","","Width (px)","This is some description");
			$row2->addChild("separator_small_width",$separator_small_width);
			$separator_small_topmargin = new QodeField("textsimple","separator_small_topmargin","","Top Margin (px)","This is some description");
			$row2->addChild("separator_small_topmargin",$separator_small_topmargin);
			$separator_small_bottommargin = new QodeField("textsimple","separator_small_bottommargin","","Bottom Margin (px)","This is some description");
			$row2->addChild("separator_small_bottommargin",$separator_small_bottommargin);

    $group3 = new QodeGroup("Separator with Icon",'Define styles for separator with icon');
    $panel2->addChild("group3",$group3);
        $row1 = new QodeRow();
        $group3->addChild("row1",$row1);
            $separator_small_color = new QodeField("colorsimple","separator_with_icon_color","","Color","This is some description");
            $row1->addChild("separator_with_icon_color",$separator_small_color);
            $separator_small_color_transparency = new QodeField("textsimple","separator_with_icon_transparency","","Transparency","This is some description");
            $row1->addChild("separator_with_icon_transparency",$separator_small_color_transparency);
        $row2 = new QodeRow(true);
        $group3->addChild("row2",$row2);
            $separator_small_thickness = new QodeField("textsimple","separator_with_icon_thickness","","Thickness (px)","This is some description");
            $row2->addChild("separator_with_icon_thickness",$separator_small_thickness);
            $separator_small_width = new QodeField("textsimple","separator_with_icon_width","","Width (px)","This is some description");
            $row2->addChild("separator_with_icon_width",$separator_small_width);
            $separator_small_topmargin = new QodeField("textsimple","separator_with_icon_topmargin","","Top Margin (px)","This is some description");
            $row2->addChild("separator_with_icon_topmargin",$separator_small_topmargin);
            $separator_small_bottommargin = new QodeField("textsimple","separator_with_icon_bottommargin","","Bottom Margin (px)","This is some description");
            $row2->addChild("separator_with_icon_bottommargin",$separator_small_bottommargin);

//Buttons

$panel3 = new QodePanel("Buttons","buttons_panel");
$elementsPage->addChild("panel3",$panel3);

	$group1 = new QodeGroup("Default Button",'Define styles for "Default" Button');
	$panel3->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$button_title_color = new QodeField("colorsimple","button_title_color","","Text Color","This is some description");
			$row1->addChild("button_title_color",$button_title_color);
			$button_title_hovercolor = new QodeField("colorsimple","button_title_hovercolor","","Hover Color","This is some description");
			$row1->addChild("button_title_hovercolor",$button_title_hovercolor);
		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$button_title_google_fonts = new QodeField("Fontsimple","button_title_google_fonts","-1","Font Family","This is some description");
			$row2->addChild("button_title_google_fonts",$button_title_google_fonts);
			$button_title_fontsize = new QodeField("textsimple","button_title_fontsize","","Font Size (px)","This is some description");
			$row2->addChild("button_title_fontsize",$button_title_fontsize);
			$button_title_lineheight = new QodeField("textsimple","button_title_lineheight","","Line Height (px)","This is some description");
			$row2->addChild("button_title_lineheight",$button_title_lineheight);
		$row3 = new QodeRow(true);
		$group1->addChild("row3",$row3);
			$button_title_fontstyle = new QodeField("selectblanksimple","button_title_fontstyle","","Font Style","This is some description",$options_fontstyle);
			$row3->addChild("button_title_fontstyle",$button_title_fontstyle);
			$button_title_fontweight = new QodeField("selectblanksimple","button_title_fontweight","","Font Weight","This is some description",$options_fontweight);
			$row3->addChild("button_title_fontweight",$button_title_fontweight);
			$button_title_letter_spacing = new QodeField("textsimple","button_title_letter_spacing","","Letter Spacing (px)","This is some description");
			$row3->addChild("button_title_letter_spacing",$button_title_letter_spacing);
		$row4 = new QodeRow(true);
		$group1->addChild("row4",$row4);
			$button_backgroundcolor = new QodeField("colorsimple","button_backgroundcolor","","Background Color","This is some description");
			$row4->addChild("button_backgroundcolor",$button_backgroundcolor);
			$button_backgroundcolor_hover = new QodeField("colorsimple","button_backgroundcolor_hover","","Hover Background Color","This is some description");
			$row4->addChild("button_backgroundcolor_hover",$button_backgroundcolor_hover);
			$button_border_color = new QodeField("colorsimple","button_border_color","","Border Color","This is some description");
			$row4->addChild("button_border_color",$button_border_color);
			$button_border_hover_color = new QodeField("colorsimple","button_border_hover_color","","Border Hover color","This is some description");
			$row4->addChild("button_border_hover_color",$button_border_hover_color);
		$row5 = new QodeRow(true);
		$group1->addChild("row5",$row5);
			$button_border_width = new QodeField("textsimple","button_border_width","","Border Width (px)","This is some description");
			$row5->addChild("button_border_width",$button_border_width);
			$button_border_radius = new QodeField("textsimple","button_border_radius","","Border Radius (px)","This is some description");
			$row5->addChild("button_border_radius",$button_border_radius);

	$group2 = new QodeGroup("White Button",'Define styles for "White" Button');
	$panel3->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);
			$button_white_text_color = new QodeField("colorsimple","button_white_text_color","","Text Color","This is some description");
			$row1->addChild("button_white_text_color",$button_white_text_color);
			$button_white_text_color_hover = new QodeField("colorsimple","button_white_text_color_hover","","Hover Color","This is some description");
			$row1->addChild("button_white_text_color_hover",$button_white_text_color_hover);
		$row2 = new QodeRow(true);
		$group2->addChild("row2",$row2);
			$button_white_background_color = new QodeField("colorsimple","button_white_background_color","","Background Color","This is some description");
			$row2->addChild("button_white_background_color",$button_white_background_color);
			$button_white_background_color_hover = new QodeField("colorsimple","button_white_background_color_hover","","Hover Background Color","This is some description");
			$row2->addChild("button_white_background_color_hover",$button_white_background_color_hover);
			$button_white_border_color = new QodeField("colorsimple","button_white_border_color","","Border Color","This is some description");
			$row2->addChild("button_white_border_color",$button_white_border_color);
			$button_white_border_color_hover = new QodeField("colorsimple","button_white_border_color_hover","","Border Hover Color","This is some description");
			$row2->addChild("button_white_border_color_hover",$button_white_border_color_hover);

	$group3 = new QodeGroup("Small Button",'Define Styles for "Small" Button');
	$panel3->addChild("group3",$group3);
		$row1 = new QodeRow();
		$group3->addChild("row1",$row1);
			$small_button_lineheight = new QodeField("textsimple","small_button_lineheight","","Line height (px)","This is some description");
			$row1->addChild("small_button_lineheight",$small_button_lineheight);
			$small_button_fontsize = new QodeField("textsimple","small_button_fontsize","","Font Size (px)","This is some description");
			$row1->addChild("small_button_fontsize",$small_button_fontsize);
		$row2 = new QodeRow(true);
		$group3->addChild("row2",$row2);
			$small_button_fontweight = new QodeField("selectblanksimple","small_button_fontweight","","Font Weight","This is some description",$options_fontweight);
			$row2->addChild("small_button_fontweight",$small_button_fontweight);
			$small_button_padding = new QodeField("textsimple","small_button_padding","","Padding Left/Right (px)","This is some description");
			$row2->addChild("small_button_padding",$small_button_padding);
			$small_button_border_radius = new QodeField("textsimple","small_button_border_radius","","Border Radius (px)","This is some description");
			$row2->addChild("small_button_border_radius",$small_button_border_radius);

	$group4 = new QodeGroup("Large Button",'Define styles for "Large" Button');
	$panel3->addChild("group4",$group4);
		$row1 = new QodeRow();
		$group4->addChild("row1",$row1);
			$large_button_lineheight = new QodeField("textsimple","large_button_lineheight","","Line Height (px)","This is some description");
			$row1->addChild("large_button_lineheight",$large_button_lineheight);
			$large_button_fontsize = new QodeField("textsimple","large_button_fontsize","","Font Size (px)","This is some description");
			$row1->addChild("large_button_fontsize",$large_button_fontsize);
		$row2 = new QodeRow(true);
		$group4->addChild("row2",$row2);
			$large_button_fontweight = new QodeField("selectblanksimple","large_button_fontweight","","Font weight","This is some description",$options_fontweight);
			$row2->addChild("large_button_fontweight",$large_button_fontweight);
			$large_button_padding = new QodeField("textsimple","large_button_padding","","Padding left/right (px)","This is some description");
			$row2->addChild("large_button_padding",$large_button_padding);
			$large_button_border_radius = new QodeField("textsimple","large_button_border_radius","","Border Radius (px)","This is some description");
			$row2->addChild("large_button_border_radius",$large_button_border_radius);

	$group5 = new QodeGroup("Extra Large Button",'Define styles for "Extra Large" Button');
	$panel3->addChild("group5",$group5);
		$row1 = new QodeRow();
		$group5->addChild("row1",$row1);
			$big_large_button_lineheight = new QodeField("textsimple","big_large_button_lineheight","","Line Height (px)","This is some description");
			$row1->addChild("big_large_button_lineheight",$big_large_button_lineheight);
			$big_large_button_fontsize = new QodeField("textsimple","big_large_button_fontsize","","Font Size (px)","This is some description");
			$row1->addChild("big_large_button_fontsize",$big_large_button_fontsize);
		$row2 = new QodeRow(true);
		$group5->addChild("row2",$row2);
			$big_large_button_fontweight = new QodeField("selectblanksimple","big_large_button_fontweight","","Font Weight","This is some description",$options_fontweight);
			$row2->addChild("big_large_button_fontweight",$big_large_button_fontweight);
			$big_large_button_padding = new QodeField("textsimple","big_large_button_padding","","Padding Left/Right (px)","This is some description");
			$row2->addChild("big_large_button_padding",$big_large_button_padding);
			$big_large_button_border_radius = new QodeField("textsimple","big_large_button_border_radius","","Border Radius (px)","This is some description");
			$row2->addChild("big_large_button_border_radius",$big_large_button_border_radius);

//Message Boxes

$panel4 = new QodePanel("Message Boxes", "message_boxes_panel");
$elementsPage->addChild("panel4",$panel4);

	$group1 = new QodeGroup("Message Box Style","Define Message Box style");
	$panel4->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$message_title_color = new QodeField("colorsimple","message_title_color","","Text Color","This is some description");
			$row1->addChild("message_title_color",$message_title_color);
			$message_backgroundcolor = new QodeField("colorsimple","message_backgroundcolor","","Background color","This is some description");
			$row1->addChild("message_backgroundcolor",$message_backgroundcolor);
		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$message_title_google_fonts = new QodeField("Fontsimple","message_title_google_fonts","-1","Font Family","This is some description");
			$row2->addChild("message_title_google_fonts",$message_title_google_fonts);
			$message_title_fontsize = new QodeField("textsimple","message_title_fontsize","","Font Size (px)","This is some description");
			$row2->addChild("message_title_fontsize",$message_title_fontsize);
			$message_title_lineheight = new QodeField("textsimple","message_title_lineheight","","Line Height (px)","This is some description");
			$row2->addChild("message_title_lineheight",$message_title_lineheight);
		$row3 = new QodeRow(true);
		$group1->addChild("row3",$row3);
			$message_title_fontstyle = new QodeField("selectblanksimple","message_title_fontstyle","","Font Style","This is some description",$options_fontstyle);
			$row3->addChild("message_title_fontstyle",$message_title_fontstyle);
			$message_title_fontweight = new QodeField("selectblanksimple","message_title_fontweight","","Font Weight","This is some description",$options_fontweight);
			$row3->addChild("message_title_fontweight",$message_title_fontweight);
			
	$group2 = new QodeGroup("Message Icon Style","Define Message Box icon style");
	$panel4->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);
			$message_icon_color = new QodeField("colorsimple","message_icon_color","","Text Color","This is some description");
			$row1->addChild("message_icon_color",$message_icon_color);
			$message_icon_fontsize = new QodeField("textsimple","message_icon_fontsize","","Font Size (px)","This is some description");
			$row1->addChild("message_icon_fontsize",$message_icon_fontsize);

//Blockquotes

$panel5 = new QodePanel("Blockquotes","blockquote_panel");
$elementsPage->addChild("panel5",$panel5);

	$group1 = new QodeGroup("Blockquote Style","Define Blockquote style");
	$panel5->addChild("group1",$group1);
        $row1 = new QodeRow(true);
        $group1->addChild("row1",$row1);
            $quote_link_blockqoute_fontsize = new QodeField("textsimple","quote_link_blockqoute_fontsize","","Font Size (px)","This is some description");
            $row1->addChild("quote_link_blockqoute_fontsize",$quote_link_blockqoute_fontsize);
            $quote_link_blockqoute_lineheight = new QodeField("textsimple","quote_link_blockqoute_lineheight","","Line Height (px)","This is some description");
            $row1->addChild("quote_link_blockqoute_lineheight",$quote_link_blockqoute_lineheight);

        $row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$blockquote_font_color = new QodeField("colorsimple","blockquote_font_color","","Text Color","This is some description");
            $row2->addChild("blockquote_font_color",$blockquote_font_color);
			$blockquote_background_color = new QodeField("colorsimple","blockquote_background_color","","Background Color","This is some description");
            $row2->addChild("blockquote_background_color",$blockquote_background_color);
			$blockquote_border_color = new QodeField("colorsimple","blockquote_border_color","","Border Color","This is some description");
            $row2->addChild("blockquote_border_color",$blockquote_border_color);
			$blockquote_quote_icon_color = new QodeField("colorsimple","blockquote_quote_icon_color","","Quote Icon Color","This is some description");
            $row2->addChild("blockquote_quote_icon_color",$blockquote_quote_icon_color);

//Social Icon

$panel6 = new QodePanel("Social Icons", "social_icon_panel");
$elementsPage->addChild("panel6",$panel6);

	$group1 = new QodeGroup("Social Icons style","Define Social Icons style");
	$panel6->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$social_icon_color = new QodeField("colorsimple","social_icon_color","","Icon Color","This is some description");
			$row1->addChild("social_icon_color",$social_icon_color);
			$social_icon_background_color = new QodeField("colorsimple","social_icon_background_color","","Icon Background Color","This is some description");
			$row1->addChild("social_icon_background_color",$social_icon_background_color);
			$social_icon_border_color = new QodeField("colorsimple","social_icon_border_color","","Icon Border Color","This is some description");
			$row1->addChild("social_icon_border_color",$social_icon_border_color);

//Testimonials

$panel7 = new QodePanel("Testimonials","testimonials_panel");
$elementsPage->addChild("panel7",$panel7);

	$group1 = new QodeGroup("Testimonials Style","Define Testimonials style");
	$panel7->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$testimonaials_font_size = new QodeField("textsimple","testimonaials_font_size","","Font Size (px)","This is some description");
			$row1->addChild("testimonaials_font_size",$testimonaials_font_size);
			$testimonaials_navigation_border_radius = new QodeField("textsimple","testimonaials_navigation_border_radius","","Navigation Border radius (px)","This is some description");
			$row1->addChild("testimonaials_navigation_border_radius",$testimonaials_navigation_border_radius);

//Counters

$panel8 = new QodePanel("Counters","counters_panel");
$elementsPage->addChild("panel8",$panel8);

	$group1 = new QodeGroup("Counters Style","Define styles for Counters");
	$panel8->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$counter_color = new QodeField("colorsimple","counter_color","","Numeral Color","This is some description");
			$row1->addChild("counter_color",$counter_color);
			$counter_text_color = new QodeField("colorsimple","counter_text_color","","Text Color","This is some description");
			$row1->addChild("counter_text_color",$counter_text_color);
			$counter_separator_color = new QodeField("colorsimple","counter_separator_color","","Separator Color","This is some description");
			$row1->addChild("counter_separator_color",$counter_separator_color);
		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$counters_font_size = new QodeField("textsimple","counters_font_size","","Numeral Font Size (px)","This is some description");
			$row2->addChild("counters_font_size",$counters_font_size);
			$counters_font_family = new QodeField("Fontsimple","counters_font_family","-1","Numeral Font Family","This is some description");
			$row2->addChild("counters_font_family",$counters_font_family);
			$counters_fontweight = new QodeField("selectblanksimple","counters_fontweight","","Numeral Font Weight","This is some description",$options_fontweight);
			$row2->addChild("counters_fontweight",$counters_fontweight);
		$row3 = new QodeRow(true);
		$group1->addChild("row3",$row3);
			$counters_text_font_size = new QodeField("textsimple","counters_text_font_size","","Text Font Size (px)","This is some description");
			$row3->addChild("counters_text_font_size",$counters_text_font_size);
			$counters_text_font_family = new QodeField("Fontsimple","counters_text_font_family","-1","Text Font Family","This is some description");
			$row3->addChild("counters_text_font_family",$counters_text_font_family);
			$counters_text_fontweight = new QodeField("selectblanksimple","counters_text_fontweight","","Text Font Weight","This is some description",$options_fontweight);
			$row3->addChild("counters_text_fontweight",$counters_text_fontweight);
			$counters_text_texttransform = new QodeField("selectblanksimple","counters_text_texttransform","","Text Transform","This is some description",$options_texttransform);
			$row3->addChild("counters_text_texttransform",$counters_text_texttransform);
		$row4 = new QodeRow(true);
		$group1->addChild("row4",$row4);
			$counters_text_letterspacing = new QodeField("textsimple","counters_text_letterspacing","","Text Letter Spacing (px)","This is some description");
			$row4->addChild("counters_text_letterspacing",$counters_text_letterspacing);

//Horizontal Progress Bars

$panel9 = new QodePanel("Horizontal Progress Bars", "horizontal_progress_bars_panel");
$elementsPage->addChild("panel9",$panel9);
	
	$group1 = new QodeGroup("Progress Bar Style","Define styles for Horizontal Progress Bars");
	$panel9->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$progress_bar_horizontal_fontsize = new QodeField("textsimple","progress_bar_horizontal_fontsize","","Font Size (px)","This is some description");
			$row1->addChild("progress_bar_horizontal_fontsize",$progress_bar_horizontal_fontsize);
			$progress_bar_horizontal_fontweight = new QodeField("selectblanksimple","progress_bar_horizontal_fontweight","","Text Font Weight","This is some description",$options_fontweight);
			$row1->addChild("progress_bar_horizontal_fontweight",$progress_bar_horizontal_fontweight);

//Pie Charts

$panel10 = new QodePanel("Pie Charts","pie_charts_panel");
$elementsPage->addChild("panel10",$panel10);

	$group1 = new QodeGroup("Pie Chart Style","Define styles for Pie Charts");
	$panel10->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$pie_charts_fontsize = new QodeField("textsimple","pie_charts_fontsize","","Font Size (px)","This is some description");
			$row1->addChild("pie_charts_fontsize",$pie_charts_fontsize);
			$pie_charts_fontweight = new QodeField("selectblanksimple","pie_charts_fontweight","","Text Font Weight","This is some description",$options_fontweight);
			$row1->addChild("pie_charts_fontweight",$pie_charts_fontweight);

//Tabs Panel

$panel11 = new QodePanel("Tabs", "tabs_panel");
$elementsPage->addChild("panel11",$panel11);

	$group1 = new QodeGroup("Text Style","Define text styles for Process shortcode");
	$panel11->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$tabs_text_size = new QodeField("textsimple","tabs_text_size","","Font Size (px)","This is some description");
			$row1->addChild("tabs_text_size",$tabs_text_size);
			$tabs_fontweight = new QodeField("selectblanksimple","tabs_fontweight","","Text Font Weight","This is some description",$options_fontweight);
			$row1->addChild("tabs_fontweight",$tabs_fontweight);
	$group2 = new QodeGroup("Border Style","Define border styles for Tabs");
	$panel11->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);
			$tabs_border_color = new QodeField("colorsimple","tabs_border_color","","Border Color","This is some description");
			$row1->addChild("tabs_border_color",$tabs_border_color);
			$tabs_border_radius = new QodeField("textsimple","tabs_border_radius","","Border Radius (px)","This is some description");
			$row1->addChild("tabs_border_radius",$tabs_border_radius);
			$tabs_border_width = new QodeField("textsimple","tabs_border_width","","Border Width (px)","This is some description");
			$row1->addChild("button_border_width",$tabs_border_width);

//Process

$panel12 = new QodePanel("Process", "process_panel");
$elementsPage->addChild("panel12",$panel12);

	$process_circle_hover_background_color = new QodeField("color","process_circle_hover_background_color","","Circles Background Hover Color","Set Process circles background color on hover");
	$panel12->addChild("process_circle_hover_background_color",$process_circle_hover_background_color);
	
	$group1 = new QodeGroup("Circle Text",'Define styles for "Text in Process" type Process');
	$panel12->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$process_text_in_circle_font_weight = new QodeField("selectblanksimple","process_text_in_circle_font_weight","","Font Weight","This is some description",$options_fontweight);
			$row1->addChild("process_text_in_circle_font_weight",$process_text_in_circle_font_weight);
			$process_text_hover_color = new QodeField("colorsimple","process_text_hover_color","","Text Color on Hover","This is some description");
			$row1->addChild("process_text_hover_color",$process_text_hover_color);

//Input Fields

$panel13 = new QodePanel("Input fields","input_fields_panel");
$elementsPage->addChild("panel13",$panel13);

	$group1 = new QodeGroup("Input Fields Style","Define styles for text Input Fields");
	$panel13->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
			$input_background_color = new QodeField("colorsimple","input_background_color","","Background Color","This is some description");
			$row1->addChild("input_background_color",$input_background_color);
			$input_border_color = new QodeField("colorsimple","input_border_color","","Border Color","This is some description");
			$row1->addChild("input_border_color",$input_border_color);
			$input_text_color = new QodeField("colorsimple","input_text_color","","Text Color","This is some description");
			$row1->addChild("input_text_color",$input_text_color);

//Highlights

$panel1 = new QodePanel("Highlights","highlight_panel");
$elementsPage->addChild("panel1",$panel1);
	$highlight_color = new QodeField("color","highlight_color","","Highlight Color","Set color for highlighted text");
	$panel1->addChild("highlight_color",$highlight_color);