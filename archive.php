<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Durendal
 */

get_header(); ?>

<!-- Custom Styles -->
<link href="<?php bloginfo("template_directory"); ?>/assets/css/blog.css" rel="stylesheet" />

<div id="main-blog">
	<div class="purple-bg">
		<div class="container purple-bg">
			<div class="jumbotron">
				<?php
					the_archive_title( '<h1 class="white" style="font-size: 34px; text-transform: initial;">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
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
								while ( have_posts() ) : the_post();
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
								<?php echo paginate_links( $args ); ?>
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


<?php
get_sidebar();
get_footer();
