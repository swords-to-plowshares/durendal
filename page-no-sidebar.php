<?php
/*
    Template Name: Disabled Sidebar
*/

/* ================================================================================
    WordPress Post Fields | Content
================================================================================ */
$objThePost = get_post();

/* ================================================================================
    Advanced Custom Fields | Content
================================================================================ */
$objFeaturedImage = get_field("main_image");

/* ================================================================================
    Header
================================================================================ */
get_header(); ?>

<div id="subpage-disabled-sidebar">
	<div class="purple-bg">
		<div class="container purple-bg">
			<div class="jumbotron">
				<h1 class="white" style="font-size: 34px; text-transform: initial;">
					<?php echo get_the_title(); ?>
				</h1>
			</div><!-- /jumbotron -->
		</div><!-- /container -->
	</div>

	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if( !empty($objFeaturedImage) ): ?>
						<img src="<?php echo $objFeaturedImage['url']; ?>" class="img-responsive center-block margin-bottom-40" />
					<?php endif; ?>

					<?php echo apply_filters( 'the_content', $objThePost->post_content ); ?>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section>

</div>
<?php get_footer(); ?>