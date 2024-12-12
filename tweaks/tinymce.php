<?php

if ( !defined( 'ABSPATH' ) ) exit;

// --- Add the TinyMCE table plugin (using v4.9.11) ----------------------------

function leona_tinymce_addtableplugin( $plugins ) {
      $plugins['table'] = get_template_directory_uri() . '/plugin.min.js';
      return $plugins;
}

add_filter( 'mce_external_plugins', 'leona_tinymce_addtableplugin' );

// --- Add the table button ----------------------------------------------------

function add_the_table_button( $buttons ) {
    array_push( $buttons, 'separator', 'table' );
    return $buttons;
}

add_filter( 'mce_buttons', 'add_the_table_button' );

// --- Show advanced editor buttons --------------------------------------------

function leona_tinymce_advanced( $i ) {
	$i['toolbar1'] = 'styleselect,formatselect,bold,italic,underline,strikethrough,bullist,numlist,table,hr,link,unlink,outdent,indent,superscript,subscript,removeformat,charmap';
	return $i;
}

add_filter( 'tiny_mce_before_init', 'leona_tinymce_advanced' );
