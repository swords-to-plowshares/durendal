<?php
/*
    Template Name: Home Page
*/

/* ================================================================================
    Advanced Custom Fields | Content
================================================================================ */
// Hero
$strHero1_image = get_field("hero_1");
    $strHero1_description = get_field("hero_1_description");
    $strHero1_url = get_field("hero_1_url");

$strHero2_image = get_field("hero_2");
    $strHero2_description = get_field("hero_2_description");
    $strHero2_url = get_field("hero_2_url");

$strHero3_image = get_field("hero_3");
    $strHero3_description = get_field("hero_3_description");
    $strHero3_url = get_field("hero_3_url");

$strHero4_image = get_field("hero_4");
    $strHero4_description = get_field("hero_4_description");
    $strHero4_url = get_field("hero_4_url");

// Year in Review
$strReview_title = get_field("year_in_review_title");
$strReview_description = get_field("year_in_review_description");

// Benefits
$strBenefits1_title = get_field("benefits_1_title");
    $strBenefits1_count = get_field("benefits_1_count");
    $strBenefits1_image = get_field("benefits_1_image");
    $strBenefits1_link = get_field("benefits_1_link");

$strBenefits2_title = get_field("benefits_2_title");
    $strBenefits2_count = get_field("benefits_2_count");
    $strBenefits2_image = get_field("benefits_2_image");
    $strBenefits2_link = get_field("benefits_2_link");

$strBenefits3_title = get_field("benefits_3_title");
    $strBenefits3_count = get_field("benefits_3_count");
    $strBenefits3_image = get_field("benefits_3_image");
    $strBenefits3_link = get_field("benefits_3_link");

$strBenefits4_title = get_field("benefits_4_title");
    $strBenefits4_count = get_field("benefits_4_count");
    $strBenefits4_image = get_field("benefits_4_image");
    $strBenefits4_link = get_field("benefits_4_link");

$strBenefits5_title = get_field("benefits_5_title");
    $strBenefits5_count = get_field("benefits_5_count");
    $strBenefits5_image = get_field("benefits_5_image");
    $strBenefits5_link = get_field("benefits_5_link");

$strBenefits6_title = get_field("benefits_6_title");
    $strBenefits6_count = get_field("benefits_6_count");
    $strBenefits6_image = get_field("benefits_6_image");
    $strBenefits6_link = get_field("benefits_6_link");

// Resources
$strResources1_title = get_field("resource_1_title");
    $strResources1_image = get_field("resource_1_image");
    $strResources1_description = get_field("resource_1_description");
    $strResources1_url = get_field("resource_1_url");

$strResources2_title = get_field("resource_2_title");
    $strResources2_image = get_field("resource_2_image");
    $strResources2_description = get_field("resource_2_description");
    $strResources2_url = get_field("resource_2_url");

$strResources3_title = get_field("resource_3_title");
    $strResources3_image = get_field("resource_3_image");
    $strResources3_description = get_field("resource_3_description");
    $strResources3_url = get_field("resource_3_url");

$strResources4_title = get_field("resource_4_title");
    $strResources4_image = get_field("resource_4_image");
    $strResources4_description = get_field("resource_4_description");
    $strResources4_url = get_field("resource_4_url");

/* ================================================================================
    Header
================================================================================ */
get_header(); ?>

<!-- banner start -->
<!-- ================ -->
<div class="banner clearfix hidden-xs">

	<!-- slideshow start -->
	<!-- ================ -->
	<div class="slideshow">

		<!-- slider revolution start -->
		<!-- ================ -->
		<div class="slider-revolution-5-container">
			<div id="slider-banner-fullwidth" class="slider-banner-fullwidth rev_slider" data-version="5.0">
				<ul class="slides">
					<!-- slide 1 start -->
					<!-- ================ -->
					<?php if ($strHero1_image["url"] && $strHero1_description && $strHero1_url) { ?>
						<li data-transition="random" data-slotamount="default" data-masterspeed="default" data-title="<?php echo $strHero1_description; ?>">
							<!-- main image -->
							<img src="<?php echo $strHero1_image["url"]; ?>" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover"  class="rev-slidebg">

							<!-- Transparent Background -->
							<div class="tp-caption dark-translucent-bg"
								data-x="center"
								data-y="center"
								data-start="0"
								data-transform_idle="o:1;"
								data-transform_in="o:0;s:600;e:Power2.easeInOut;"
								data-transform_out="o:0;s:600;"
								data-width="5000"
								data-height="5000">
							</div>

							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_white"
								data-x="left"
								data-y="bottom"
								data-voffset="20"
								data-start="500"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
									<?php echo $strHero1_description; ?><br />
									<a href="<?php echo $strHero1_url; ?>" class="btn radius-50 btn-default btn-animated margin-clear">Read More <i class="fa fa-arrow-right"></i></a> 
							</div>

						</li>
					<?php } ?>
					<!-- slide 1 end -->

					<!-- slide 2 start -->
					<!-- ================ -->
					<?php if ($strHero2_image["url"] && $strHero1_description && $strHero2_url) { ?>
						<li class="text-center" data-transition="fade" data-slotamount="default" data-masterspeed="default" data-title="<?php echo $strHero2_description; ?>">

							<!-- main image -->
							<img src="<?php echo $strHero2_image["url"]; ?>" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

							<!-- Transparent Background -->
							<div class="tp-caption dark-translucent-bg"
								data-x="center"
								data-y="center"
								data-start="0"
								data-transform_idle="o:1;"
								data-transform_in="o:0;s:600;e:Power2.easeInOut;"
								data-transform_out="o:0;s:600;"
								data-width="5000"
								data-height="5000">
							</div>

							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_white"
								data-x="center"
								data-y="160"
								data-start="500"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
									<?php echo $strHero2_description; ?><br />
									<a href="<?php echo $strHero2_url; ?>" class="btn radius-50 btn-default btn-animated margin-clear">Read More <i class="fa fa-arrow-right"></i></a> 
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption small_white text-center"
								data-x="center"
								data-y="260"
								data-start="900"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];sX:1;sY:1;s:900;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
							</div>
						</li>
					<?php } ?>
					<!-- slide 2 end -->
					
					<!-- slide 3 start -->
					<!-- ================ -->
					<?php if ($strHero3_image["url"] && $strHero3_description && $strHero2_url) { ?>
						<li data-transition="random" data-slotamount="default" data-masterspeed="default" data-title="<?php echo $strHero3_description; ?>">
							<!-- main image -->
							<img src="<?php echo $strHero3_image["url"]; ?>" alt="<?php echo $strHero3_description; ?>" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

							<!-- Transparent Background -->
							<div class="tp-caption dark-translucent-bg"
								data-x="center"
								data-y="center"
								data-start="0"
								data-transform_idle="o:1;"
								data-transform_in="o:0;s:600;e:Power2.easeInOut;"
								data-transform_out="o:0;s:600;"
								data-width="5000"
								data-height="5000">
							</div>

							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_white"
								data-x="left"
								data-y="500"
								data-start="600"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption large_white tp-resizeme"
								data-x="left"
								data-y="170"
								data-start="650"
								data-transform_idle="o:1;"
								data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption large_white"
								data-x="center"
								data-y="center"
								data-voffset="100"
								data-start="650"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];sX:1;sY:1;s:900;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
									<?php echo $strHero3_description; ?><br />
									<a href="<?php echo $strHero3_url; ?>" class="btn radius-50 btn-default btn-animated margin-clear">Read More <i class="fa fa-arrow-right"></i></a>
							</div>
						</li>
					<?php } ?>
					<!-- slide 3 end -->

					<!-- slide 4 start -->
					<!-- ================ -->
					<?php if ($strHero4_image["url"] && $strHero3_description && $strHero4_url) { ?>
						<li data-transition="random" data-slotamount="default" data-masterspeed="default" data-title="<?php echo $strHero4_description; ?>">
							<!-- main image -->
							<img src="<?php echo $strHero4_image["url"]; ?>" alt="<?php echo $strHero4_description; ?>" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

							<!-- Transparent Background -->
							<div class="tp-caption dark-translucent-bg"
								data-x="center"
								data-y="center"
								data-start="0"
								data-transform_idle="o:1;"
								data-transform_in="o:0;s:600;e:Power2.easeInOut;"
								data-transform_out="o:0;s:600;"
								data-width="5000"
								data-height="5000">
							</div>

							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_white"
								data-x="left"
								data-y="bottom"
								data-voffset="50"
								data-start="500"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
									<?php echo $strHero4_description; ?><br />
									<a href="<?php echo $strHero4_url; ?>" class="btn radius-50 btn-default btn-animated margin-clear">Read More <i class="fa fa-arrow-right"></i></a>
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption small_white text-center"
								data-x="center"
								data-y="bottom"
								data-start="900"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];sX:1;sY:1;s:900;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
							</div>
						</li>
					<?php } ?>
					<!-- slide 4 end -->
				</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
		<!-- slider revolution end -->

	</div>
	<!-- slideshow end -->

</div>
<!-- banner end -->

<div id="page-start"></div>

<!-- section start -->
<!-- ================ -->
<section class="section turquoise-bg clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center hover-orange">
				<a href="/donate" class="beige no-ul"><i class="fa fa-heart-o fa-3x" aria-hidden="true"></i><br />
				<h2><font color="beige">Donate</font></h2></a>
			</div>
			<div class="col-md-4 text-center hover-orange">
				<a href="/get-involved" class="beige no-ul"><i class="fa fa-users fa-3x" aria-hidden="true"></i><br />
				<h2><font color="beige">Get Involved</font></h2></a>
			</div>
			<div class="col-md-4 text-center hover-orange">
				<a href="/our-services" class="beige no-ul"><i class="fa fa-certificate fa-3x" aria-hidden="true"></i><br />
				<h2><font color="beige">Veteran Services</font></h2></a>
			</div>
		</div>
	</div>
</section>
<!-- section end -->

<!-- section -->
<!-- ================ -->
<section class="main-container beige-bg">
	<div class="container">
		<div class="row">						
			<div class="col-md-7">
				<div class="col-xs-12 col-md-12 margin-bottom-60-max-991 margin-bottom-40">
					<div class="pull-left">
						<h2 class="orange margin-0">From Our Blog</h2>
					</div>
					<div class="pull-right">
						<a class="see-all" href="/our-blog">Full Blog</a>
					</div>
				</div>

				<!-- =================================================================================
					Blog Feed
				================================================================================= -->
				<!-- Define our WP Query Parameters -->
				<?php $the_query = get_posts( array( 
					"posts_per_page" => 3, 
					"category_name" => "Blog" 
				) ); ?>
				
				<!-- Start our WP Query -->
				<?php if($the_query): ?>
					<?php foreach ($the_query as $post): setup_postdata( $post ); ?>
						<a href="<?php the_permalink() ?>">
							<div class="col-xs-12 col-md-12 margin-bottom-40 homepage-post">
								<div class="col-sm-3 col-md-3">
									<?php if(has_post_thumbnail()) { ?>
										<?php the_post_thumbnail('post-thumbnail', array( 'class' => "center-block margin-bottom-15 border-radius-5")); ?>
									<?php } ?>
								</div>
							<!-- Blog Entry -->
								<div class="col-sm-9 col-md-9">
									<!-- Title -->
									<h4 class="title turquoise"><?php the_title(); ?></h4>
									<p><time class="homepage-blog-date"><?php the_date("F j, Y"); ?></time></p>
									<p><?php the_excerpt(__('(more…)')); ?></p>
									<p class="turquoise">Read More<i class="pl-5 fa fa-angle-double-right"></i></p>
								</div>
							</div>
						</a>
					<?php endforeach; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>

			<div class="clearfix visible-xs visible-sm"></div>

			<div class="col-md-5">
				<div class="col-xs-12 col-md-12 margin-bottom-60-max-991 margin-bottom-40">
					<div class="pull-left">
						<h2 class="orange margin-0">Events</h2>
					</div>
					<div class="pull-right">
						<a class="see-all" href="/events">View Calendar</a>
					</div>
				</div>

				<!-- =================================================================================
					Events Feed
				================================================================================= -->
				<!-- Define our WP Query Parameters -->
				<?php // Define our WP Query Parameters
					$date_now = date('Y-m-d H:i:s');
					$the_query = get_posts( array(
						'post_type'      => 'post',
						'category_name'  => "Events",
						'posts_per_page' => 3,
						"meta_key"       => "event_date_time",
						"orderby"        => "meta_value",
						"order"          => "DESC"
					)); // $the_query
				?>
				
				<!-- Construct the event listing loop -->
				<?php if($the_query): ?>
					<?php foreach ($the_query as $post): setup_postdata( $post ); ?>
						<?php
							if (get_field("event_date_time") != null) {
								// Display ACF datetime field if set.
								$strDate = date_create(get_field("event_date_time"));
							} else {
								// Otherwise use the event creation date so it doesn't look unprofessional.
								$strDate = date_create(the_date("", null, null, false));
							} // if

							// Dissect the $strDate object.
							$strWeekDay = date_format($strDate, "D");
							$strMonthDay = date_format($strDate, "M j");
							$strEventTime = get_post_meta($post->ID, "event_date_time", true);
						?>

						<div class="col-xs-12 col-md-12 margin-bottom-40 event-home-item homepage-post">
							<a href="<?php the_permalink() ?>">
								<div class="padding-top-10 col-xs-3 col-md-3 text-center event-home-item-date">
									<div class="black text-center text-small"><?php echo $strWeekDay; ?></div>
										<h4 class="margin-top-0"><?php echo $strMonthDay; ?></h4>
									</div>
								<div class="col-xs-9 col-md-9">
									<h4 class="title margin-0 padding-bottom-10"><?php the_title(); ?></h4>
									<div class="padding-bottom-10">
										<?php 
											// Event Time
											if (get_field("event_date_time")) {
												echo '<div class="event-home-item-time"><i class="fa fa-calendar" style="padding-right:10px;"></i>' . get_field("event_date_time") . '</div>';
											} // if
										// Location
											if (get_field("event_location")) {
												echo '<div class="event-home-item-location"><i class="fa fa-map-marker" style="padding-right:10px;"></i>' . get_field("event_location") . '</div>';
											} // if
										?>
									</div>
									<p class="text-muted"<?php the_excerpt(__('(more…)')); ?></p>
									<p class="turquoise">View Event<i class="pl-5 fa fa-angle-double-right"></i></p>
								</div><!-- /col -->
							</a>
						</div><!-- /col -->
					<?php endforeach; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div><!-- /col -->
		</div>
	</div>
	<br />
</section>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<section class="section purple-bg clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="call-to-action text-center">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="title" style="color:#e7dcba; font-size:40px;"><?php echo $strReview_title; ?></h1>
							<h3 class="white"><?php echo $strReview_description; ?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<section class="section pv-40 stats">
	<div class="container">
		<div class="row">
			<!-- Benefits 1 -->
			<div class="col-xs-12 col-sm-4 text-center">
				<a class="no-ul" href="<?php echo $strBenefits1_link; ?>">
				<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="300">
					<img src="<?php echo $strBenefits1_image[url]; ?>" class="center-block margin-bottom-20" style="width: 100px; height: auto;" alt="<?php echo $strBenefits1_title; ?>" />
					<h3><?php echo $strBenefits1_title; ?></h3>
					<span class="counter counting" data-to="1525" data-speed="5000"><?php echo $strBenefits1_count; ?></span>
				</div>
				</a>
			</div>
			<!-- Benefits 2 -->
			<div class="col-xs-12 col-sm-4 text-center">
				<a class="no-ul" href="<?php echo $strBenefits2_link; ?>">
				<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="300">
					<img src="<?php echo $strBenefits2_image[url]; ?>" class="center-block margin-bottom-20" style="width: 100px; height: auto;" alt="<?php echo $strBenefits2_title; ?>" />
					<h3><?php echo $strBenefits2_title; ?></h3>
					<span class="counter counting" data-to="1525" data-speed="5000"><?php echo $strBenefits2_count; ?></span>
				</div>
				</a>
			</div>
			<!-- Benefits 3 -->
			<div class="col-xs-12 col-sm-4 text-center">
				<a class="no-ul" href="<?php echo $strBenefits3_link; ?>">
				<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="300">
					<img src="<?php echo $strBenefits3_image[url]; ?>" class="center-block margin-bottom-20" style="width: 100px; height: auto;" alt="<?php echo $strBenefits3_title; ?>" />
					<h3><?php echo $strBenefits3_title; ?></h3>
					<span class="counter counting" data-to="1525" data-speed="5000"><?php echo $strBenefits3_count; ?></span>
				</div>
				</a>
			</div>
			
			<div class="clearfix"></div>
			
			<!-- Benefits 4 -->
			<div class="col-xs-12 col-sm-4 text-center">
				<a class="no-ul" href="<?php echo $strBenefits4_link; ?>">
				<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="300">
					<img src="<?php echo $strBenefits4_image[url]; ?>" class="center-block margin-bottom-20" style="width: 100px; height: auto;" alt="<?php echo $strBenefits4_title; ?>" />
					<h3><?php echo $strBenefits4_title; ?></h3>
					<span class="counter counting" data-to="1525" data-speed="5000"><?php echo $strBenefits4_count; ?></span>
				</div>
				</a>
			</div>
			<!-- Benefits 5 -->
			<div class="col-xs-12 col-sm-4 text-center">
				<a class="no-ul" href="<?php echo $strBenefits5_link; ?>">
				<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="300">
					<img src="<?php echo $strBenefits5_image[url]; ?>" class="center-block margin-bottom-20" style="width: 100px; height: auto;" alt="<?php echo $strBenefits5_title; ?>" />
					<h3><?php echo $strBenefits5_title; ?></h3>
					<span class="counter counting" data-to="1525" data-speed="5000"><?php echo $strBenefits5_count; ?></span>
				</div>
				</a>
			</div>
			<!-- Benefits 6 -->
			<div class="col-xs-12 col-sm-4 text-center">
				<a class="no-ul" href="<?php echo $strBenefits6_link; ?>">
				<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="300">
					<img src="<?php echo $strBenefits6_image[url]; ?>" class="center-block margin-bottom-20" style="width: 100px; height: auto;" alt="<?php echo $strBenefits6_title; ?>" />
					<h3><?php echo $strBenefits6_title; ?></h3>
					<span class="counter counting" data-to="1525" data-speed="5000"><?php echo $strBenefits6_count; ?></span>
				</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<section class="section light-gray-bg clearfix">
	<div class="container">
		<h2>Resources</h2>
		<div class="row grid-space-10">
			<!-- Resources 1 -->
			<div class="col-sm-6 col-md-3">
				<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
					<div class="overlay-container">
						<img src="<?php echo $strResources1_image["url"]; ?>" class="center-block resource-img" alt="<?php echo $strResources1_title; ?>">
					</div>
					<div class="body">
						<h3><?php echo $strResources1_title; ?></h3>
						<div class="separator"></div>
						<p><?php echo $strResources1_description; ?></p>
						<a href="<?php echo $strResources1_url; ?>" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">More<i class="fa fa-arrow-right pl-10"></i></a>
					</div>
				</div>
			</div>

			<!-- Resources 2 -->
			<div class="col-sm-6 col-md-3">
				<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
					<div class="overlay-container">
						<img src="<?php echo $strResources2_image["url"]; ?>" class="center-block resource-img " alt="<?php echo $strResources2_title; ?>">
					</div>
					<div class="body">
						<h3><?php echo $strResources2_title; ?></h3>
						<div class="separator"></div>
						<p><?php echo $strResources2_description; ?></p>
						<a href="<?php echo $strResources2_url; ?>" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">More<i class="fa fa-arrow-right pl-10"></i></a>
					</div>
				</div>
			</div>

			<!-- Resources 3 -->
			<div class="col-sm-6 col-md-3">
				<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
					<div class="overlay-container">
						<img src="<?php echo $strResources3_image["url"]; ?>" class="center-block resource-img" alt="<?php echo $strResources3_title; ?>">
					</div>
					<div class="body">
						<h3><?php echo $strResources3_title; ?></h3>
						<div class="separator"></div>
						<p><?php echo $strResources3_description; ?></p>
						<a href="<?php echo $strResources3_url; ?>" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">More<i class="fa fa-arrow-right pl-10"></i></a>
					</div>
				</div>
			</div>

			<!-- Resources 4 -->
			<div class="col-sm-6 col-md-3">
				<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
					<div class="overlay-container">
						<img src="<?php echo $strResources4_image["url"]; ?>" class="center-block resource-img" alt="<?php echo $strResources4_title; ?>">
					</div>
					<div class="body">
						<h3><?php echo $strResources4_title; ?></h3>
						<div class="separator"></div>
						<p><?php echo $strResources4_description; ?></p>
						<a href="<?php echo $strResources4_url; ?>" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">More<i class="fa fa-arrow-right pl-10"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section end -->

<?php get_footer(); ?>