
<div id="right-box">
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
		<?php wp_loginout(); ?>
		</ul>
	</div>
	<?php } ?>
</div>