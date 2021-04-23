<?php get_header(); ?>
<div class="c">
	<!-- get the current class titles -->
	<div class="cat-title">(<?php single_cat_title(); ?>) Classisfied Posts：</div>
</div>
<div class="c">
	<div id="left-box">
		<div id="home-loop">
			<?php
				if( have_posts() ){
					while( have_posts() ){
						
						
						the_post();
						?>
						<div class="post-item">
							<div class="post-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h2></div>
							<div class="post-content"><?php the_content(); ?></div>
							<div class="post-meta">
								<?php _e( 'category'); ?>：<?php the_category(','); ?><span>|</span>
								<?php _e( 'author'); ?>：<?php the_author(); ?><span>|</span>
								<?php echo __( 'time'); ?>：<?php the_time( 'Y-m-d' ); ?>
								<?php edit_post_link( __( 'Edit',), ' <span>|</span> ', '' ); ?>
							</div>
						</div>
						<?php
					}
				}else{
					echo 'No Post to Show';
				}
			?>
		</div>
		<div class="posts_nav_link">
			<?php posts_nav_link(); ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>