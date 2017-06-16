<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Durendal
 */

get_header(); ?>

<div id="subpage-left-sidebar">
	<div class="purple-bg">
		<div class="container purple-bg">
			<div class="jumbotron">
				<h1 class="white" style="font-size: 36px; text-transform: initial;">
					<?php echo get_the_title(); ?>
				</h1>
			</div><!-- /jumbotron -->
		</div><!-- /container -->
	</div><!-- /purple-bg -->
	
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div><!-- /col -->

				<div class="col-md-9">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section>
</div>



<?php
get_footer();
