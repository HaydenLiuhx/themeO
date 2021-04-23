<?php get_header(); ?>
<div class="c">
	<div id="left-box">
		<div id="post-box">
			<?php
				the_post();
			?>
			
			<div class="post-item">
				<div class="post-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h2></div>
				<div class="post-meta">
					<?php _e( 'category'); ?>：<?php the_category(','); ?><span>|</span>
					<?php _e( 'author'); ?>：<?php the_author(); ?><span>|</span>
					Thumb up: <?php echo get_post_meta( $post->ID, 'zan', true ); ?><span>|</span>
					<?php echo __( 'time'); ?>：<?php the_time( 'Y-m-d' ); ?>
					<?php edit_post_link( __( 'Edit'), ' <span>|</span> ', '' ); ?>
				</div>
				<div class="post-content"><?php the_content(); ?></div>
				<div class="post-nav">
					<?php previous_post_link('Last：%link'); ?><br />
					<?php next_post_link('Next：%link'); ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>