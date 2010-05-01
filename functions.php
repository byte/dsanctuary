<?php
function advertisement(){
include (TEMPLATEPATH . "/advertisement.php");}
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
    'after_widget' => '',
 'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
function wp_version() {
	global $wp_db_version;

	if ( $wp_db_version < 3582 ) {
		return '20';
	} else {
		return '21';
	}
}

function menucenter() {
	global $internetsharing;
	if (isset($internetsharing->option['tabs'])) {
		print 82 * $internetsharing->option['tabs'] . 'px';
	} else {
		print '95%';
	}
}?>