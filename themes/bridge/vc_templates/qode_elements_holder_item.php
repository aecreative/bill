<?php

$args = array(
	"background_color" => "",
	"item_padding" => ""
);

$html = "";
$qode_elements_item_style = "";
$qode_elements_item_inner_style = "";


extract(shortcode_atts($args, $atts));


if($background_color != ""){
	$qode_elements_item_style .= " style='";
}

if($background_color != ""){
	$qode_elements_item_style .= "background-color:" . $background_color . ";";
}

if($background_color != ""){
	$qode_elements_item_style .= "'";
}

if($item_padding != ""){
	$qode_elements_item_inner_style = " style='padding:". $item_padding ."'";
}

$html .= "<div class='q_elements_item'";
$html .= $qode_elements_item_style . "><div class='q_elements_item_inner'>";
$html .= "<div class='q_elements_item_content'". $qode_elements_item_inner_style .">";

$html .= do_shortcode($content);
$html .= '</div></div></div>';
echo $html;

