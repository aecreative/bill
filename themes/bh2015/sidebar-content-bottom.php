<?php
$page = get_page( 11247 );
echo apply_filters( 'the_content', $page->post_content );
?>