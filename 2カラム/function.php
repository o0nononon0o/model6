<?php 

function enable_thumbnail(){
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'enable_thumbnail' );