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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	

	<?php wp_head(); ?>
</head>
<body>

	<div id="header">
		<div id="headerimg" class="col-md-1">
		<?php echo is_home() ?  '<h1 class="site-title">' : '<span class="site-title">'; ?>

						<?php if( get_header_image() != '' ) : ?>

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img style="max-width: 90px;background-size: auto;height: 100%;" src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>


						<?php endif; // header image was removed ?>

						<?php if( !get_header_image() ) : ?>

							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

						<?php endif; // header image was removed (again) ?>

					<?php echo is_home() ?  '</h1>' : '</span>'; ?><!-- end of .site-name -->
		</div>

		<div style="margin-top: 10px;" >
		<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<div class="description" style="color: black"><?php bloginfo('description'); ?></div>
			<?php
				$view = get_option('view');
				update_option( 'view' , $view + 1 );
			?>
			<p style="color: black">Visit Traffic：<?php echo $view; ?> </p>
			</div>
		<div class="nav" class="col-md-4 pull-right">
		<ul>
			<?php wp_nav_menu() ?>
		</ul>
		</div>
		
	</div>
