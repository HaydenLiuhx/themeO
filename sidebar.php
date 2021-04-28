
<div id="secondary" class="widget-area col-sm-12 col-md-2" role="complementary">
	<div style="margin-top: 10px;position:fixed;">
	<!-- use the tool -->
	<!-- whether it has a sidebar -->
	<?php if( is_dynamic_sidebar() ){ dynamic_sidebar(); }else{ ?>
		<!-- register_siderbar -> register a tool in function.php -->
	<div class="sbox">
		<h2>Categories</h2>
		<ul>
		<!-- call the list -->
		<?php wp_list_cats(); ?>
		</ul>
	</div>
	<div class="sbox">
		<h2>Functions</h2>
		<ul>
		<?php wp_register(); ?>
		<li class="cat-item">
		<a href="http://localhost:8888/contect-us/">Contact Us</a>
	</li>
	<li class="cat-item">
		<?php wp_loginout(); ?>
		</li>
	</ul>
	</div>
	<?php } ?>
	</div>
</div>