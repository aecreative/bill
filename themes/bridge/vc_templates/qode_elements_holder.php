<?php

$args = array(
	"number_of_columns" => "",
	"background_color" => ""
);

$html = "";

extract(shortcode_atts($args, $atts));

$number_of_columns_class = "";
$elements_holder_style = "";

if($number_of_columns != ""){
	$number_of_columns_class = " " . $number_of_columns ;
}

if($background_color != ""){
	$elements_holder_style = " style='background-color:". $background_color ."'";
}


$html = "<div class='q_elements_holder" . $number_of_columns_class . "' ". $elements_holder_style .">";
$html .= do_shortcode($content);
$html .= '</div>';

echo $html;

