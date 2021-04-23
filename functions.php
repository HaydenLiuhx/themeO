<?php
	// register a tool
	register_sidebar(
		array(
			'name'          => 'siderbar',
			'before_widget' => '<div class="sbox">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
		)
	);
?>