<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<? echo get_bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>
<body>
	<div id="header">
		<div id="headerimg">
			<h1>
			<a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
			<?php
				$view = get_option('view');
				update_option( 'view' , $view + 1);
			?>
			<p>visitors：<?php echo $view; ?></p>
		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>