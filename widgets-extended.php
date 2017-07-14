<?php
/*
Plugin Name: WordPress Widgets Extended
Plugin URI: http://www.andornagy.com/plugins/wpwe
Description: WPWE adds some new widgets to your websites to customise how posts, pages, comments and authros appear in your sidebar. 
Version: 0.3
Author: Andor Nagy
Author URI: http://www.andornagy.com
License: GPL2

  Copyright 2013  WordPress Widgets Extended  (email : andornagy2012@gmail.com)

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


require_once( dirname( __FILE__ ) . '/widgets/recentPosts.php' );    // Including the Recent Posts widgets. 
require_once( dirname( __FILE__ ) . '/widgets/recentComments.php' ); // Including the Recent Comments widgets.
require_once( dirname( __FILE__ ) . '/widgets/authors.php' );        // Including the Authors widgets.
require_once( dirname( __FILE__ ) . '/widgets/pages.php' );          // Including the Pages widgets.

/**
 * Register with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
 */
add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );

/**
 * Enqueue plugin style-file
 */
function prefix_add_my_stylesheet() {
    // Respects SSL, Style.css is relative to the current file
    wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'prefix-style' );
}
?>