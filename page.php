<?php get_header(); ?>

			<div id="content">
				
				<?php the_breadcrumb(); ?>
				
				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all cf" role="main">
								
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();
										
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section> <?php // end article section ?>
								
							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
										<section class="entry-content">
											<h2><?php _e( 'Inlägg hittades inte', 'bonestheme' ); ?></h2>
										</section>
									</article>

							<?php endif; ?>

						</div>

				</div>

			</div>

<?php get_footer(); ?>
