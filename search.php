<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Durendal
 */

get_header(); ?>

<div id="subpage-right-sidebar">
	<div class="purple-bg">
		<div class="container purple-bg">
			<div class="jumbotron">
				<h1 class="white" style="font-size: 34px; text-transform: initial;">
					<?php printf( esc_html__( 'Search Results for: %s', 'durendal' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
			</div><!-- /jumbotron -->
		</div><!-- /container -->
	</div>
	
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<!-- Search body goes here.. -->
					<?php
					if ( have_posts() ) : ?>
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; wp_reset_query(); ?>
				</div><!-- /col -->
				
				<div class="col-md-3">
						<?php get_sidebar(); ?>
				</div><!-- /col -->
			</div><!-- /row -->
			
			<div class="row">
				<div class="col-xs-12">
					<div class="text-center">
						<style>.screen-reader-text{ display: none }</style>

						<!-- TODO: Fix Pagination and use wp_query pagination. -->
						<?php echo paginate_links( $args ); ?>
					</div>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section>
</div>

<?php
get_footer();
