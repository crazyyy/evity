<?php
$portfolio = array(4,7,8,9);
$services = array(10);
if ( have_posts() ) { the_post(); rewind_posts(); }
if ( in_category($portfolio)) { include(TEMPLATEPATH . '/singleportfolio.php'); } 
else if ( in_category($services)) { include(TEMPLATEPATH . '/singleservices.php'); } 
else { include(TEMPLATEPATH . '/singlepost.php'); }
?>
