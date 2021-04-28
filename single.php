<?php get_header(); ?>
<div id="content" class="site-content container">
<div id="primary" class="content-area col-sm-12 col-md-8">
	<!-- get the current class titles -->
	<div class="row justify-content-center">
	<div class="cat-title col-sm-10 col-md-8">
		<h1 style="text-align:center;color: #2280da;"><?php the_title(); ?></h1>
	</div>
</div>
	<div id="left-box">
		<div id="post-box">
			<?php
				the_post();
			?>
			
			<div class="post-item">
				<div class="post-title">
				<h2>

				<a href="<?php the_permalink(); ?>">

				<?php if(get_field('service_title')):?>
					<?php the_field('service_title');?>
				<?php elseif(get_field('staff_name')):?>
					<?php the_field('staff_name');?>
				<?php else:?>
					<?php the_title(); ?>
					<?php endif; ?>
				</a>
				</h2>
				</div>
				<div class="post-meta">
					<?php _e( 'category'); ?>：<?php the_category(','); ?><span>|</span>
					<?php _e( 'author'); ?>：<?php the_author(); ?><span>|</span>
					
					<?php echo __( 'time'); ?>：<?php the_time( 'Y-m-d' ); ?>
					<?php edit_post_link( __( 'Edit'), ' <span>|</span> ', '' ); ?>
				</div>
				<div class="post-content">
				<?php the_content(); ?>
				<?php if(get_field('staff_role')):?>
					<h4>Role: <?php echo the_field('staff_role')?></h4>
				<?php elseif(get_field('service_description')):?>
					<?php the_field('service_description');?>
				<?php endif;?>

				<?php 
					$image = get_field('staff_img');
					if( !empty($image) ): ?>

						<img width="150px"; src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>
				</div>
				<!-- <div class="post-description">
				
				</div> -->
				<div class="post-bio">
				<?php if(get_field('staff_bio')):?>
					<p><?php echo the_field('staff_bio')?></p>
				<?php endif; ?>
				</div>
				<div class="post-email">
				<?php if(get_field('staff_email')):?>
					<a href="mailto:<?php echo the_field('staff_email')?>"><p>Email: <?php echo the_field('staff_email')?></p></a>
				<?php endif; ?>
				</div>
				<div class="post-nav">
					<?php previous_post_link('Last：%link'); ?><br />
					<?php next_post_link('Next：%link'); ?>
				</div>
			</div>
		</div>
	</div>
				</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>