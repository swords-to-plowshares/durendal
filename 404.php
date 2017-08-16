<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Durendal
 */

get_header(); ?>

<div id="subpage-right-sidebar">
	<div class="purple-bg">
		<div class="container purple-bg">
			<div class="jumbotron">
				<h1 class="white" style="font-size: 34px; text-transform: initial;">
					<?php esc_html_e( 'Page was not found', 'durendal' ); ?>
				</h1>
			</div><!-- /jumbotron -->
		</div><!-- /container -->
	</div>
	
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<!-- Error info goes here. -->
					<section class="error-404 not-found">
						<div class="page-content">
							<p><?php esc_html_e( 'Sorry that page was not found. Try one of the links below or the search function below.', 'durendal' ); ?></p>

							<?php
								get_search_form();

								the_widget( 'WP_Widget_Recent_Posts' );

								// Only show the widget if site has multiple categories.
								if ( durendal_categorized_blog() ) :
							?>

							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'durendal' ); ?></h2>
								<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
								</ul>
							</div><!-- .widget -->

							<?php
								endif;

								/* translators: %1$s: smiley */
								$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'durendal' ), convert_smilies( ':)' ) ) . '</p>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

								the_widget( 'WP_Widget_Tag_Cloud' );
							?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div><!-- /col -->
				
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section>
</div>

<?php
get_footer();
