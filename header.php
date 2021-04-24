<!doctype html>
<head>
<!--get_bloginfo reflect database ->  option table
get_options(option,default)
update_option(option,newvalue)
_e() get and print
__() get

-->
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo get_bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.css'?>" type="text/css" />
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-3.6.0.min.js"></script>
	<?php if( is_page('contact') ){ ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/verif.js"></script>
<?php }?>
	<?php wp_head(); ?>
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