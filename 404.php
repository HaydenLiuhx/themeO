<?php get_header(); ?>
<div class="c">
	<div id="page-box">
		<div class="post-item _404">
			<div class="post-content">The page you are currently visiting does not exist! <font id="jump">3</font> seconds later back to Home Page，Or<a href="<?php bloginfo('url'); ?>">Back Directly</a></div>
		</div>
		<script>
			function countDown(secs){
				$("#jump").html(secs);
				if(--secs>0){ setTimeout( "countDown(" + secs + ")",1000 ); }
				else{window.location.href="<?php bloginfo('url'); ?>"; }
			}
			countDown(4);
		</script>
	</div>
</div>
<?php get_footer(); ?>