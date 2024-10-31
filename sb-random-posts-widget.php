<?php
/*
Plugin Name: SB Random Posts Widget
Description: Simple way display random posts in your blogroll
Plugin URI: https://sihung.net/plugins/simple-random-posts
Author: Hung Trang Si
Author URI: https://sihung.net
Version: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*

    Copyright (C) 2016  Hung Trang Si  trangsihung@gmail.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

include_once 'functions.php';
include_once 'classes.php';

$plugin = new SB_RandomPosts_ShortCode();
add_shortcode( 'sb_random_posts', array( 'SB_RandomPosts_ShortCode', 'shortcode_callback' ) );

function sbrpw_register_widgets() {
    register_widget( 'SB_RandomPosts_Widget' );
}

add_action( 'widgets_init', 'sbrpw_register_widgets' );
