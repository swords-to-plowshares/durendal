<?php
/*
    Template Name: Events
*/

/* ================================================================================
    WordPress Post Fields | Content
================================================================================ */
$objThePost = get_post();

// Count the position of the loop.
$intCounter = 0;

/* ================================================================================
    Advanced Custom Fields | Content
================================================================================ */
$objFeaturedImage = get_field("main_image");

/* ================================================================================
    Header
================================================================================ */
get_header(); ?>

<script>var counter = 0;</script>
<div id="subpage-disabled-sidebar">
	<div class="purple-bg">
		<div class="container purple-bg">
			<div class="jumbotron">
				<h1 class="white" style="font-size: 36px; text-transform: initial;">
					<?php echo get_the_title(); ?>
				</h1>
			</div><!-- /jumbotron -->
		</div><!-- /container -->
	</div>

	<section class="main-container">
		<div class="container">
			<div class="row">
				<!-- Main Content -->
                <div class="col-md-9">
					<!-- Custom Styles -->
                    <link href="<?php bloginfo("template_directory"); ?>/assets/css/blog.css" rel="stylesheet" />
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <?php // Define our WP Query Parameters
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $the_query = new WP_Query( array(
                                    "post_type"         => "post",
                                    "category_name"     => "Events",
                                    "posts_per_page"    => 10,
                                    "paged"             => $paged,
									"meta_key"			=> "event_date_time",
                                    "orderby"           => "meta_value",
                                    "order"             => "DESC"
                                )); // $the_query
                            ?>

                            <!-- Start our WP Query -->
                            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <header class="entry-header">
                                        <!-- Grab all "Events" posts from Categories. -->
                                        <div class="masonry-post col-sm-6 margin-bottom-40">
                                            <div class="grid-post">
                                                <!-- ======================================================================
                                                    Thumbnail
                                                ====================================================================== -->
                                                <?php if(has_post_thumbnail()) { ?>
                                                    <?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive full-img")); ?>
                                                <?php } ?>

                                                <!-- ======================================================================
                                                    Event Info
                                                ====================================================================== -->
                                                <div class="grid-post-meta">
                                                    <div class="row">
                                                        <!-- Left Content -->
                                                        <?php
                                                            // Display ACF datetime field if set.
                                                            if (get_field("event_date_time") != null) {
                                                                $strDate = date_create(get_field("event_date_time"));
                                                            } else {
                                                                // Otherwise use the event creation date so it doesn't look unprofessional.
                                                                $strDate = date_create(the_date("", null, null, false));
                                                            } // if

                                                            // Dissect the $strDate object.
                                                            $strWeekDay = date_format($strDate, "D");
                                                            $strMonthDay = date_format($strDate, "M j");

                                                            $strEventTime = get_post_meta($post->ID, "eventTime", true);
                                                        ?>

                                                        <div class="col-xs-12 event-home-item">
                                                            <div class="padding-top-10 col-xs-3 col-md-3 text-center event-home-item-date">
                                                                <div class="black text-center text-small"><?php echo $strWeekDay; ?></div>
                                                                <h4 class="margin-top-0" style="font-size: 20px;"><?php echo $strMonthDay; ?></h4>
                                                            </div>

                                                            <!-- Right Content -->
                                                            <div class="col-xs-9 col-md-9">
                                                                <!-- ======================================================================
                                                                    Title
                                                                ====================================================================== -->
                                                                <?php 
                                                                    if ( is_single() ) :
                                                                        the_title( '<h3 style="margin-top: 4px;>', '</h3>' );
                                                                    else :
                                                                        the_title( '<h3 style="margin-top: 4px;"><a class="h3 title" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                                                                    endif; 
                                                                ?>
                                                            </div><!-- /col -->
                                                        </div><!-- /col -->
                                                    </div><!-- /row -->

                                                    <!-- ======================================================================
                                                        Content Body
                                                    ====================================================================== -->
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <!-- ======================================================================
                                                                Author Info (Commented out)
                                                            ====================================================================== -->
                                                            <!--   <?php if(have_comments() || current_user_can("edit_others_posts")) { ?>
                                                                   <ul class="list-inline">
                                                                      <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                                                                      <li><i class="fa fa-clock-o"></i> <time><?php the_date("M j, Y"); ?></time></li>
                                                                      <li><i class="fa fa-folder"></i> <?php the_category(", "); ?></li>
                                                                  </ul>
                                                                  <?php } ?>
                                                           --!>
                                                            <!-- ======================================================================
                                                                Event Time and Location
                                                            ====================================================================== -->
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

                                                            <!-- ======================================================================
                                                                Content
                                                            ====================================================================== -->
                                                            <p class="post-excerpt">
                                                                <?php the_excerpt(); ?>
                                                            </p>
                                                        </div><!-- /col -->
                                                    </div><!-- /row -->

                                                    <!-- ======================================================================
                                                        Entry Footer
                                                    ====================================================================== -->
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <!-- if have_comments() or is_admin -->
                                                            <ul class="list-inline">
                                                                <?php if(have_comments() || current_user_can("edit_others_posts")) { ?>
                                                                    <?php if(have_comments()) { ?>
                                                                        <!-- Comments -->
                                                                        <li><i class="fa fa-comments"></i> <?php comments_number(); ?></li>

                                                                        <!-- Edit Post -->
                                                                        <li><?php edit_post_link("Edit", "<i class='fa fa-pencil'></i> "); ?></li>
                                                                    <?php } ?>
                                                                        <!-- Edit Post -->
                                                                        <li><?php edit_post_link("Edit", "<i class='fa fa-pencil'></i> "); ?></li>
                                                                <?php } ?>
                                                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="<?php echo esc_url(get_permalink()); ?>">View Event</a></li>
                                                            </ul>
                                                        </div><!-- /col -->
                                                    </div><!-- /row -->

                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </header><!-- .entry-header -->
                                </article><!-- #post-## -->

                                <!-- Add clearfix to every 2nd post. -->
                                <?php 
                                    if ($intCounter % 2) {
                                        ?>
                                            <div class="clearfix"></div>
                                        <?php
                                    }
                                    $intCounter += 1;
                                ?>
                            <?php endwhile; wp_reset_postdata(); ?>
						</div><!-- /col -->
					</div><!-- /row -->
					
					<div class="row">
						<div class="col-xs-12 text-center">
							<?php
                                $big = 999999999; // need an unlikely integer

                                echo paginate_links( array(
                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format' => '?paged=%#%',
                                    'current' => max( 1, get_query_var('paged') ),
                                    'total' => $the_query->max_num_pages
                                ) );
                            ?>
						</div><!-- /col -->
					</div><!-- /row -->
				</div><!-- /col -->
                
                <!-- Sidebar -->
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section>

</div>
<?php get_footer(); ?>