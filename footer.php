			<footer class="bigfoot footer" role="contentinfo">

				<div id="inner-footer" class="wrap navs wpb_row cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',
    					'container_class' => 'footer-links cf',
    					'menu' => __( 'Footer Links', 'bonestheme' ),
    					'menu_class' => 'nav footer-nav cf',
    					'theme_location' => 'footer-links',
    					'before' => '',
        			'after' => '',
        			'link_before' => '',
        			'link_after' => '', 
        			'depth' => 0,
    					'fallback_cb' => 'bones_footer_links_fallback'
						)); ?>
					</nav>
					
					<?php get_sidebar(); ?>
					
				</div>

			</footer>

		</div>

		<?php?>
		<?php wp_footer(); ?>

	</body>

</html>
