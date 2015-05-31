<?php

$portfolioPage = new QodeAdminPage("8", "Portfolio");
$qodeFramework->qodeOptions->addAdminPage("portfolioPage",$portfolioPage);

//Portfolio Single Project

$panel1 = new QodePanel("Portfolio Single Project", "porfolio_single_project");
$portfolioPage->addChild("panel1",$panel1);

	$portfolio_style = new QodeField("select","portfolio_style","1","Portfolio Type",'Choose a default type for Single Project pages', array( "1" => "Portfolio small images",
       "2" => "Portfolio small slider",
       "5" => "Portfolio big images",
       "3" => "Portfolio big slider",
       "4" => "Portfolio custom - in grid",
       "7" => "Portfolio custom - full width",
       "6" => "Portfolio gallery"
      ));
	$panel1->addChild("portfolio_style",$portfolio_style);

	$portfolio_qode_like = new QodeField("onoff","portfolio_qode_like","on","Likes",'Enabling this option will turn on "Likes"');
	$panel1->addChild("portfolio_qode_like",$portfolio_qode_like);

	$lightbox_single_project = new QodeField("yesno","lightbox_single_project","yes","Lightbox for Images","Enabling this option will turn on lightbox functionality for projects with images.");
	$panel1->addChild("lightbox_single_project",$lightbox_single_project);

	$lightbox_video_single_project = new QodeField("yesno","lightbox_video_single_project","no","Lightbox for Videos","Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects.");
	$panel1->addChild("lightbox_video_single_project",$lightbox_video_single_project);

	$portfolio_columns_number = new QodeField("select","portfolio_columns_number","2","Number of Columns",'Enter the number of columns for Portfolio Gallery type', array( "2" => "2 columns",
       "3" => "3 columns",
       "4" => "4 columns"
      ));
	$panel1->addChild("portfolio_columns_number",$portfolio_columns_number);

	$portfolio_single_sidebar = new QodeField("select","portfolio_single_sidebar","default","Sidebar layout","Choose a sidebar layout for Single Project pages", array( "default" => "No Sidebar",
       "1" => "Sidebar 1/3 right",
       "2" => "Sidebar 1/4 right",
       "3" => "Sidebar 1/3 left",
       "4" => "Sidebar 1/4 left"
      ));
	$panel1->addChild("portfolio_single_sidebar",$portfolio_single_sidebar);
	
	$custom_sidebars = array();
	foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
		if(isUserMadeSidebar(ucwords($sidebar['name']))){
			$custom_sidebars[$sidebar['id']] = ucwords( $sidebar['name']);
		}
	}
	$portfolio_single_sidebar_custom_display = new QodeField("selectblank","portfolio_single_sidebar_custom_display","","Sidebar to Display","Choose a sidebar to display on Single Project pages", $custom_sidebars);
	$panel1->addChild("portfolio_single_sidebar_custom_display",$portfolio_single_sidebar_custom_display);

	$portfolio_single_slug = new QodeField("text","portfolio_single_slug","","Portfolio Single Slug",'Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect) ', array(), array("col_width" => 3));
	$panel1->addChild("portfolio_single_slug",$portfolio_single_slug);

	$portfolio_text_follow = new QodeField("portfoliofollow","portfolio_text_follow","portfolio_single_follow","Sticky Side Text ","Enabling this option will make side text sticky on Single Project pages");
	$panel1->addChild("portfolio_text_follow",$portfolio_text_follow);

	$portfolio_comments = new QodeField("yesno","enable_portfolio_comments", "no", "Enable comments","Enabling this option will display comments on portfolio single page");
	$panel1->addChild("enable_portfolio_comments",$portfolio_comments);