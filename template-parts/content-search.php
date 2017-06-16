<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Durendal
 */

?>

<section class="main-container">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

						<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php durendal_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->

					<footer class="entry-footer">
						<?php durendal_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->
			</div><!-- /col -->
			
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
</section>


