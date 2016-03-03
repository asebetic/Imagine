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
			<div class="icons">
				<a href="https://www.facebook.com/ivan.veres.dj" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" alt="Facebook"/></a>
				<a href="https://twitter.com/ivan_veres" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" alt="Twitter"/></a>
				<a href="https://hr.linkedin.com/in/ivan-vere%C5%A1-417811106" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.png" alt="Linkedin"/></a>
			</div>
		</footer>

<?php wp_footer(); ?>
</body>
</html>