<?php
get_header();
// $servicetitle = get_field('service_title');

?>
<div id="content" class="site-content container">
<div id="primary" class="content-area col-sm-12 col-md-10">
	<div id="left-box">
	<div id="home-loop">
			<?php
			if (have_posts()) {
				while (have_posts()) {

					// Get the next post and save it to $post
					the_post();

			?>
					<div class="post-item">

						<div class="post-title">
							<h2>

								<a href="<?php the_permalink(); ?>">

									<?php if (get_field('service_title')) : ?>
										<?php the_field('service_title'); ?>
									<?php elseif (get_field('staff_name')) : ?>
										<?php the_field('staff_name'); ?>
									<?php else : ?>
										<?php the_title(); ?>
									<?php endif; ?>
								</a>
							</h2>
						</div>

						<div class="post-content">

							<?php the_content(); ?>
							<?php if (get_field('staff_role')) : ?>
								<h4>Role: <?php echo the_field('staff_role') ?></h4>
							<?php elseif (get_field('service_description')) : ?>
								<?php the_field('service_description'); ?>
							<?php endif; ?>

							<?php
							$image = get_field('staff_img');
							if (!empty($image)) : ?>

								<img width="150px" ; src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
						</div>
						<div class="post-meta">
							<!-- if we need translate to another language, we should add a class and use poedit(lanageage package) -->
							<?php _e('category'); ?>：<?php the_category(','); ?><span> / </span>
							<?php _e('author'); ?>：<?php the_author(); ?><span> / </span>
							<?php echo __('time'); ?>：<?php the_time('Y-m-d'); ?>
							<?php edit_post_link(__('Edit'), ' <span>|</span> ', ''); ?>
						</div>

					</div>
			<?php
				}
			} else {
				echo 'No Post to Show so far';
			}
			?>
		</div>
		<div class="posts_nav_link">
			<?php posts_nav_link(); ?>
		</div>
		
	</div>
	

</div>

<?php get_sidebar(); ?>
</div>
		
<?php get_footer(); ?>