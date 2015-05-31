<?php

$blogPage = new QodeAdminPage("7", "Blog");
$qodeFramework->qodeOptions->addAdminPage("blogPage",$blogPage);

// Blog List

$panel2 = new QodePanel("Blog List", "blog_list_panel");
$blogPage->addChild("panel2",$panel2);

	$pagination = new QodeField("zeroone","pagination","1","Pagination","Enabling this option will display pagination on bottom of Blog List");
	$panel2->addChild("pagination",$pagination);

	$blog_style = new QodeField("select","blog_style","1","Archive and Category Layout","Choose a default blog layout for archived Blog Lists and Category Blog Lists", array(
       "1" => "Blog Large Image",
//     "5" => "Blog Masonry Full Width",
       "3" => "Blog Large Image Whole Post",
       "4" => "Blog Small Image",
        "2" => "Blog Masonry"
      ));
	$panel2->addChild("blog_style",$blog_style);

	$category_blog_sidebar = new QodeField("select","category_blog_sidebar","default","Archive and Category Sidebar","Choose a sidebar layout for archived Blog Lists and Category Blog Lists", array( "default" => "No Sidebar",
       "1" => "Sidebar 1/3 right",
       "2" => "Sidebar 1/4 right",
       "3" => "Sidebar 1/3 left",
       "4" => "Sidebar 1/4 left"
      ));
	$panel2->addChild("category_blog_sidebar",$category_blog_sidebar);

	$blog_hide_comments = new QodeField("yesno","blog_hide_comments","no","Hide Comments","Enabling this option will hide comments on Blog List");
	$panel2->addChild("blog_hide_comments",$blog_hide_comments);

	$blog_hide_author = new QodeField("yesno","blog_hide_author","no","Hide Author","Enabling this option will hide author name on Blog List");
	$panel2->addChild("blog_hide_author",$blog_hide_author);

	$qode_like = new QodeField("onoff","qode_like","on","Likes",'Enabling this option will turn on "Likes"');
	$panel2->addChild("qode_like",$qode_like);

	$blog_page_range = new QodeField("text","blog_page_range","","Pagination Page Range",'Enter the number of numerals to be displayed before the "..." (For example, enter "3" to get "1 2 3...")', array(), array("col_width" => 3));
	$panel2->addChild("blog_page_range",$blog_page_range);

	$number_of_chars = new QodeField("text","number_of_chars","45","Number of Words in Blog Listing",'Enter the number of words to be displayed per post in Blog List', array(), array("col_width" => 3));
	$panel2->addChild("number_of_chars",$number_of_chars);

	$number_of_chars_masonry = new QodeField("text","number_of_chars_masonry","","Number of Words in Masonry",'Enter the number of words to be displayed per post in "Masonry" Blog List (Note: this overrides "Word Number" above)', array(), array("col_width" => 3));
	$panel2->addChild("number_of_chars_masonry",$number_of_chars_masonry);

	$number_of_chars_large_image = new QodeField("text","number_of_chars_large_image","","Number of Words in Large Image",'Enter the number of words to be displayed per post in "Large Image" Blog List (Note: this overrides "Word Number" above)', array(), array("col_width" => 3));
	$panel2->addChild("number_of_chars_large_image",$number_of_chars_large_image);

	$number_of_chars_small_image = new QodeField("text","number_of_chars_small_image","","Number of Words in Small Image",'Enter the number of words to be displayed per post in "Small Image" Blog List (Note: this overrides "Word Number" above))', array(), array("col_width" => 3));
	$panel2->addChild("number_of_chars_small_image",$number_of_chars_small_image);

	$blog_content_position = new QodeField("select","blog_content_position","content_above_blog_list","Content Position","Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", array(
		"content_above_blog_list" => "Content Above Blog List",
		"content_above_blog_list_and_sidebar" => "Content Above Blog List and Sidebar"
	));
	$panel2->addChild("blog_content_position",$blog_content_position);

	$pagination_masonry = new QodeField("select","pagination_masonry","pagination","Pagination on Masonry",'Choose a pagination style for "Masonry" Blog List', array( "pagination" => "Pagination",
       "load_more" => "Load More",
       "infinite_scroll" => "Infinite Scroll"
      ));
	$panel2->addChild("pagination_masonry",$pagination_masonry);

	$blog_masonry_filter = new QodeField("yesno","blog_masonry_filter","no","Show Category Filter on Masonry",'Enabling this option will display a Category Filter on "Masonry" Blog List');
	$panel2->addChild("blog_masonry_filter",$blog_masonry_filter);


	$group1 = new QodeGroup("Large Image Style",'Define styles for the "Large Image" Blog List');
	$panel2->addChild("group1",$group1);
		$row1 = new QodeRow();
		$group1->addChild("row1",$row1);
				$blog_large_image_text_in_box = new QodeField("selectsimple","blog_large_image_text_in_box","","Text in Box",'ThisIsDescription', array( "Default" => "Default",
		   "no" => "No",
		   "yes" => "Yes"
		  ));
			$row1->addChild("blog_large_image_text_in_box",$blog_large_image_text_in_box);
			$blog_large_image_border = new QodeField("selectsimple","blog_large_image_border","","Text Box Border",'ThisIsDescription', array( "Default" => "Default",
		   "no" => "No",
		   "yes" => "Yes"
		  ));
			$row1->addChild("blog_large_image_border",$blog_large_image_border);
			$blog_large_image_border_width = new QodeField("textsimple","blog_large_image_border_width","","Text Box Border width (px)","This is some description");
			$row1->addChild("blog_large_image_border_width",$blog_large_image_border_width);
		$row2 = new QodeRow(true);
		$group1->addChild("row2",$row2);
			$blog_large_image_background_color = new QodeField("colorsimple","blog_large_image_background_color","","Text Box Background Color","ThisIsDescription");
			$row2->addChild("blog_large_image_background_color",$blog_large_image_background_color);
			$blog_large_image_border_color = new QodeField("colorsimple","blog_large_image_border_color","","Text Box Border Color","ThisIsDescription");
			$row2->addChild("blog_large_image_border_color",$blog_large_image_border_color);

	$group2 = new QodeGroup("Small Image Style",'Define styles for the "Small Image" Blog List');
	$panel2->addChild("group2",$group2);
		$row1 = new QodeRow();
		$group2->addChild("row1",$row1);
				$blog_small_image_text_in_box = new QodeField("selectsimple","blog_small_image_text_in_box","","Text in Box","ThisIsDescription", array( "Default" => "Default",
		   "no" => "No",
		   "yes" => "Yes"
		  ));
			$row1->addChild("blog_small_image_text_in_box",$blog_small_image_text_in_box);
			$blog_small_image_border = new QodeField("selectsimple","blog_small_image_border","","Text Box Border","ThisIsDescription", array( "Default" => "Default",
		   "no" => "No",
		   "yes" => "Yes"
		  ));
			$row1->addChild("blog_small_image_border",$blog_small_image_border);
			$blog_small_image_border_width = new QodeField("textsimple","blog_small_image_border_width","","Text Box Border width (px)","ThisIsDescription");
			$row1->addChild("blog_small_image_border_width",$blog_small_image_border_width);
		$row2 = new QodeRow(true);
		$group2->addChild("row2",$row2);
			$blog_small_image_background_color = new QodeField("colorsimple","blog_small_image_background_color","","Text Box Background Color",'ThisIsDescription');
			$row2->addChild("blog_small_image_background_color",$blog_small_image_background_color);
			$blog_small_image_border_color = new QodeField("colorsimple","blog_small_image_border_color","","Text Box Border Color","ThisIsDescription");
			$row2->addChild("blog_small_image_border_color",$blog_small_image_border_color);

	$group3 = new QodeGroup("Masonry Style",'Define styles for the for the "Masonry" Blog List');
	$panel2->addChild("group3",$group3);
		$row1 = new QodeRow();
		$group3->addChild("row1",$row1);
			$blog_masonry_background_color = new QodeField("colorsimple","blog_masonry_background_color","","Text Box Background Color","ThisIsDescription");
			$row1->addChild("blog_masonry_background_color",$blog_masonry_background_color);
			$blog_masonry_border_color = new QodeField("colorsimple","blog_masonry_border_color","","Text Box Border Color","ThisIsDescription");
			$row1->addChild("blog_masonry_border_color",$blog_masonry_border_color);
			$blog_masonry_border_radius = new QodeField("textsimple","blog_masonry_border_radius","","Text Box Border width (px)","ThisIsDescription");
			$row1->addChild("blog_masonry_border_radius",$blog_masonry_border_radius);

// Blog Single

$panel3 = new QodePanel("Blog Single", "blog_single_panel");
$blogPage->addChild("panel3",$panel3);

	$blog_single_sidebar = new QodeField("select","blog_single_sidebar","default","Sidebar Layout","Choose a sidebar layout for Blog Single pages", array( "default" => "No Sidebar",
       "1" => "Sidebar 1/3 right",
       "2" => "Sidebar 1/4 right",
       "3" => "Sidebar 1/3 left",
       "4" => "Sidebar 1/4 left"
      ));
	$panel3->addChild("blog_single_sidebar",$blog_single_sidebar);
	
	$custom_sidebars = array();
	foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
		if(isUserMadeSidebar(ucwords($sidebar['name']))){
			$custom_sidebars[$sidebar['id']] = ucwords( $sidebar['name']);
		}
	}
	$blog_single_sidebar_custom_display = new QodeField("selectblank","blog_single_sidebar_custom_display","","Sidebar to Display","Choose a sidebar to display on Blog Single pages", $custom_sidebars);
	$panel3->addChild("blog_single_sidebar_custom_display",$blog_single_sidebar_custom_display);

	$blog_author_info = new QodeField("yesno","blog_author_info","no","Show Blog Author","Enabling this option will display author name on Blog Single pages");
	$panel3->addChild("blog_author_info",$blog_author_info);

// Quote/Link

$panel1 = new QodePanel("Quote/Link","quote_link_panel" );
$blogPage->addChild("panel1",$panel1);
	$blog_quote_link_box_color = new QodeField("color","blog_quote_link_box_color","","Box Backround Color",'Choose a box background color for "Quote" and "Link" type blog displays');
	$panel1->addChild("blog_quote_link_box_color",$blog_quote_link_box_color);
