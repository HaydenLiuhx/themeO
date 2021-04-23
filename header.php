<!doctype html>
<head>
<!--get_bloginfo reflect database ->  option table
get_options(option,default)
update_option(option,newvalue)
_e() get and print
__() get

-->
	<meta http-equiv="Content-Type" content="text/html; charset=<? echo get_bloginfo('charset'); ?>" />
	<title><? bloginfo('name'); ?></title>
	<meta name="description" content="<? bloginfo('description'); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.css'?>" type="text/css" />

	<? wp_head(); ?>
</head>
<body>
<div class="c">
	<div id="header">
		<div id="headerimg">
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
			<?php
				$view = get_option('view');
				update_option( 'view' , $view + 1 );
			?>
			<p>Visit Traffic：<?php echo $view; ?> </p>
			
		</div>
	</div>
</div>