<?php


function sbrpw_get_post_thumbnail($post_id, $size = '', $default = 'wide') {
	$post_thumbnail = '';
	$thumb_id = get_post_thumbnail_id( $post_id );

	if ( $thumb_id == '' || $size == '') {
		$post_thumbnail = plugins_url( 'assets/default-thumbnail-' . $default . '.jpg' , __FILE__);
	} else {
		$_temp = wp_get_attachment_image_src($thumb_id, $size);
		$post_thumbnail = $_temp[0];
	}

	return $post_thumbnail;
}

function sbrpw_post_types_to_array(){
	    $post_types = get_post_types(array(
	        'show_ui'=>true,
	        'public'=>true
	    ),'objects');

	    $pts = array();

	    foreach ($post_types as $key=>$post_type){
	        $pts[$key] = $post_type->label;
	    }
	    return $pts;
	}