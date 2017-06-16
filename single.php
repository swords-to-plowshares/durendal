<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Durendal
 */

/* ================================================================================
    Advanced Custom Fields | Content
================================================================================ */
$objFeaturedImage = get_field("main_image");

get_header(); ?>

<div id="main-blog">
	<!-- ======================================================================
		Jumbotron Title
	====================================================================== -->
	<div class="purple-bg">
		<div class="container purple-bg">
			<div class="jumbotron">
				<h1 class="white" style="font-size: 34px; text-transform: initial;">
					<?php single_post_title(); ?>
				</h1>
			</div><!-- /jumbotron -->
		</div><!-- /container -->
	</div>
	
	<div class="main-container">
		<section class="container">
			<div class="row">
				<div class="col-lg-9">
					<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content-page', get_post_format() );
						endwhile; // End of the loop.
					?>
					<!--post end-->

					<!-- ======================================================================
						Comments
					====================================================================== -->
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div><!-- /col -->

				<!-- Sidebar -->
				<div class="col-lg-3">
					<?php get_sidebar(); ?>
				</div><!-- /col -->
			</div><!-- /row -->
		</section><!-- /container -->
	</div>
</div><!-- /#main-blog -->

<?php
get_footer();
