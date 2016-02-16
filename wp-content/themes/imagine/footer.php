	</div><!--container-->
		<footer class="clearfix">
			<a class="back-to-top" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/back-to-top.png"></a>
			<div class="cat-nav">
				<nav>
					<?php
					$args = array(
						'theme_location' => 'categories'
					);

					wp_nav_menu($args);
					?>
				</nav>
			</div>
			<p><small><?php bloginfo('name'); ?> - &copy; <?php echo date('Y')?></small></p>
		</footer>

<?php wp_footer(); ?>
</body>
</html>