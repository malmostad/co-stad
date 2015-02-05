<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<section class="entry-content">
											<h2><?php _e( 'Sidan hittades inte', 'bonestheme' ); ?></h2>
										</section>
									</article>

							<?php endif; ?>


						</div>

				</div>

			</div>


<?php get_footer(); ?>
