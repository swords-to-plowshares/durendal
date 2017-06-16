<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Durendal
 */

// Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
// Build query to only retrieve everything BUT events.
$query = new WP_Query( array(
	"post_type" => "post",
	"category__not_in" => array(get_cat_ID("Events")),
	"paged" => $paged,
));


get_header(); ?>

<!-- Custom Styles -->
<link href="<?php bloginfo("template_directory"); ?>/assets/css/blog.css" rel="stylesheet" />

<div id="main-blog">
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
					<div class="masonry-blog row">
						<?php
							$intCounter = 0;	
						
							if ( have_posts() ) :
								// The Post Loop
								while ( $query->have_posts() ) : $query->the_post();
									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/content', get_post_format() );
						
									// This inserts clearfix every 2 posts.
									if ($intCounter % 2) {
										?> <div class="clearfix"></div> <?php
									}
						
									$intCounter++;
								endwhile;
							else :
								get_template_part( 'template-parts/content', 'none' );
							endif;
						?>
					</div><!-- /row -->

					<div class="row">
						<div class="col-xs-12">
							<div class="text-center">
								<style>.screen-reader-text{ display: none }</style>
								
								<!-- TODO: Fix Pagination and use wp_query pagination. -->
								<?php
									$big = 999999999; // need an unlikely integer

									echo paginate_links( array(
										'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format' => '?paged=%#%',
										'current' => max( 1, get_query_var('paged') ),
										'total' => $query->max_num_pages
									) );
								?>
								
								<?php 
									// Reset query data.
									wp_reset_query();
								?>
							</div>
						</div><!-- /col -->
					</div><!-- /row -->
				</div><!-- /col -->

				<!-- Sidebar -->
				<div class="col-lg-3">
					<?php get_sidebar(); ?>
				</div><!-- /col -->
			</div><!-- /row -->
		</section><!-- /container -->
	</div>
</div>

<!-- ======================================================
	Title
====================================================== -->

	

<?php
get_footer();

