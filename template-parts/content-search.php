<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Durendal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("padding-bottom-40"); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a class="turquoise" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php 
			// If blog post, display author and post date in search results
				if ( in_category( "Blog" ) ) : ?>
					<ul class="list-inline">
						<li><h4>Blog</h4></li>
						<li><i class="fa fa-user"></i> <?php the_author(); ?></li>
						<li><i class="fa fa-calendar"></i> <time><?php the_date("M j, Y"); ?></time></li>
						</ul>
			<?php endif; ?>
			<?php 
			// If event post, display date and location of event in search results
				if ( in_category( "Events" ) ) : ?>
					<ul class="list-inline">
						<li><h4>Event</h4></li>
						<li><i class="fa fa-calendar padding-right-10"></i><?php the_field('event_date_time'); ?> </li>
						<li class="padding-bottom-10"><i class="fa fa-map-marker padding-right-10"></i><?php the_field('event_location'); ?> </li>
					</ul>
			<?php endif; ?>
						
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


