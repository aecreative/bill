<?php

$footerPage = new QodeAdminPage("3", "Footer");
$qodeFramework->qodeOptions->addAdminPage("footer",$footerPage);


$panel10 = new QodePanel("Footer","footer_panel");
$footerPage->addChild("panel10",$panel10);
$uncovering_footer = new QodeField("yesno","uncovering_footer","no","Uncovering Footer","Enabling this option will make Footer gradually appear on scroll");
$panel10->addChild("uncovering_footer",$uncovering_footer);
$footer_in_grid = new QodeField("yesno","footer_in_grid","yes","Footer in Grid","Enabling this option will place Footer content in grid");
$panel10->addChild("footer_in_grid",$footer_in_grid);
$footer_main_image_background = new QodeField("image","footer_main_image_background","","Footer Background Image","Choose footer background image");
$panel10->addChild("footer_main_image_background",$footer_main_image_background);
$show_footer_top = new QodeField("yesno","show_footer_top","yes","Show Footer Top","Enabling this option will show Footer Top area", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_show_footer_top_container"));
$panel10->addChild("show_footer_top",$show_footer_top);
$show_footer_top_container = new QodeContainer("show_footer_top_container","show_footer_top","no");
$panel10->addChild("show_footer_top_container",$show_footer_top_container);
$footer_top_columns = new QodeField("select","footer_top_columns","4","Footer Top Columns","Choose number of columns for Footer Top area", array( "1" => "1",
       "2" => "2",
       "3" => "3",
       "5" => "3(25%+25%+50%)",
       "6" => "3(50%+25%+25%)",
       "4" => "4"
      ));
$show_footer_top_container->addChild("footer_top_columns",$footer_top_columns);

$group1 = new QodeGroup("Footer Top Colors","Configure colors for Footer Top area");
$show_footer_top_container->addChild("group1",$group1);
$row1 = new QodeRow();
$group1->addChild("row1",$row1);
$footer_top_background_color = new QodeField("colorsimple","footer_top_background_color","","Background Color","This is some description");
$row1->addChild("footer_top_background_color",$footer_top_background_color);
$footer_top_title_color = new QodeField("colorsimple","footer_top_title_color","","Title Color","This is some description");
$row1->addChild("footer_top_title_color",$footer_top_title_color);
$footer_top_text_color = new QodeField("colorsimple","footer_top_text_color","","Text Color","This is some description");
$row1->addChild("footer_top_text_color",$footer_top_text_color);
$row2 = new QodeRow(true);
$group1->addChild("row2",$row2);
$footer_link_color = new QodeField("colorsimple","footer_link_color","","Link Color","This is some description");
$row2->addChild("footer_link_color",$footer_link_color);
$footer_link_hover_color = new QodeField("colorsimple","footer_link_hover_color","","Link Hover Color","This is some description");
$row2->addChild("footer_link_hover_color",$footer_link_hover_color);
$footer_image_background = new QodeField("image","footer_image_background","","Footer Top Background Image","Choose footer top background image");
$show_footer_top_container->addChild("footer_image_background",$footer_image_background);


$footer_text = new QodeField("yesno","footer_text","yes","Show Footer Bottom","Enabling this option will show Footer Bottom area", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_footer_text_container"));
$panel10->addChild("footer_text",$footer_text);
$footer_text_container = new QodeContainer("footer_text_container","footer_text","no");
$panel10->addChild("footer_text_container",$footer_text_container);


$group2 = new QodeGroup("Footer Bottom Colors","Configure colors for Footer Bottom area");
$footer_text_container->addChild("group2",$group2);
$row1 = new QodeRow();
$group2->addChild("row1",$row1);
$footer_bottom_background_color = new QodeField("colorsimple","footer_bottom_background_color","","Background Color","This is some description");
$row1->addChild("footer_bottom_background_color",$footer_bottom_background_color);
$footer_bottom_text_color = new QodeField("colorsimple","footer_bottom_text_color","","Text Color","This is some description");
$row1->addChild("footer_bottom_text_color",$footer_bottom_text_color);
$footer_bottom_link_hover_color = new QodeField("colorsimple","footer_bottom_link_hover_color","","Link Hover Color","This is some description");
$row1->addChild("footer_bottom_link_hover_color",$footer_bottom_link_hover_color);

$footer_bottom_image_background = new QodeField("image","footer_bottom_image_background","","Footer Bottom Background Image","Choose footer bottom background image");
$footer_text_container->addChild("footer_bottom_image_background",$footer_bottom_image_background);
