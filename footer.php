<?php wp_footer(); ?>

<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
<!-- ================ -->
<footer id="footer" class="clearfix">

	<!-- .footer start -->
	<!-- ================ -->
	<div class="footer default-bg">
		<div class="container-fluid">
			<div class="footer-inner">
				<div class="row">
					<div class="col-sm-6 col-md-3 col-lg-2 col-lg-offset-1">
						<div class="footer-content">
							<h2 class="title">Locations</h2>
							<!--<img src="<?php bloginfo("template_directory"); ?>/assets/template/images/logo-footer.png" class="margin-bottom-15">-->
							<ul class="list-icons">
								<li><strong>Main Office</strong></li>
								<li><i class="fa fa-map-marker pr-10 text-default purple"></i>1060 Howard Street<br>
								&nbsp; &nbsp; &nbsp; San Francisco, CA 94103 </li>
								<li><i class="fa fa-phone pr-10 text-default purple"></i>(415) 252-4788 </li>
							</ul>
							<ul class="list-icons">
								<li><strong>East Bay Office</strong></li>
								<li><i class="fa fa-map-marker pr-10 text-default purple"></i>2719 Telegraph Avenue<br>
								&nbsp; &nbsp; &nbsp; Oakland, CA 94612 </li>
								<li><i class="fa fa-phone pr-10 text-default purple"></i>(510) 844-7500 </li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-2 col-lg-offset-1">
						<div class="footer-content">
						<!-- ==========================================================================
							Footer | Quick Links
						========================================================================== -->
							<h2 class="title">Quick Links</h2>
							<div class="row margin-bottom-5">
								<div class="col-xs-12">
									<?php wp_nav_menu(array(
										"container"			=> false,
										"theme_location"	=> "menu-footer",
										"menu_class"		=> "list-style-none padding-0 margin-left-5",
										"walker"			=> new Walker_FooterQuickLinks
									)); ?>
								</div>
							</div>
						<!-- ==========================================================================
							Footer | Search Form
						========================================================================== -->
							<h2 class="title">Search</h2>
							<div class="row">
								<div class="col-xs-12">
									<form role="search" method="get" class="footer-form" style="margin: 0;" action="<?php echo home_url( '/' ); ?>">
										<label>
											<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( "I'm looking for ...", 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for', 'label' ) ?>" />
										</label>
										<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Find now', 'submit button' ) ?>" />
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix visible-sm"></div>
					<div class="col-md-6 col-lg-4 col-lg-offset-1">
						<div class="footer-content">
							<h2 class="title">News</h2>
							<p>Please sign up to receive newsletters directly to your inbox. We never share or sell your information.</p>
							<div class="alert alert-success hidden" id="MessageSent2">
								We have received your message, we will contact you very soon.
							</div>
							<div class="alert alert-danger hidden" id="MessageNotSent2">
								Oops! Something went wrong please refresh the page and try again.
							</div>
							<form role="form" id="footer-form" name="mc-embedded-subscribe-form" class="margin-clear" novalidate="novalidate" action="//swords-to-plowshares.us10.list-manage.com/subscribe/post?u=22a6559c6251f975e7f385476&amp;id=42595ded07" method="post" target="_blank">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group has-feedback mb-10">
											<label class="sr-only" for="mce-FNAME">First Name</label>
											<input type="text" class="form-control" id="mce-FNAME" placeholder="First Name" name="FNAME">
											<i class="fa fa-user form-control-feedback"></i>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group has-feedback mb-10">
											<label class="sr-only" for="mce-LNAME">Last Name</label>
											<input type="text" class="form-control" id="mce-LNAME" placeholder="Last Name" name="LNAME">
											<i class="fa fa-user form-control-feedback"></i>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group has-feedback mb-10">
											<label class="sr-only" for="mce-EMAIL">Email address</label>
											<input type="email" class="form-control" id="mce-EMAIL" placeholder="Enter email" name="EMAIL">
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group has-feedback mb-10">
											<label class="sr-only" for="mce-COMPANY">Company</label>
											<input type="text" class="form-control" id="mce-COMPANY" placeholder="Company (optional)" name="COMPANY">
											<i class="fa fa-building form-control-feedback"></i>
										</div>
									</div>
								</div>
								<div style="position: absolute; left: -5000px;" aria-hidden="true">
									<input type="text" name="b_22a6559c6251f975e7f385476_42595ded07" tabindex="-1" value="">
								</div>
								<div class="clear">
									<input type="submit" value="Subscribe" class="margin-clear submit-button btn">
								</div>
							</form>
						</div>
					</div>
				</div>
				<br>
				<!-- section start -->
				<!-- ================ -->
				<section id="collapseMap">
					<div id="map-canvas" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" alt="icon_error" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>
				</section>
				<!-- section end -->
			</div>
		</div>
	</div>
	<!-- .footer end -->

	<!-- .subfooter start -->
	<!-- ================ -->
	<div class="subfooter">
		<div class="container">
			<div class="subfooter-inner">
				<div class="row">
					<div class="col-md-12">
						<p class="text-center">Copyright © <?php echo date("Y"); ?> Swords to Plowshares. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .subfooter end -->

</footer>
<!-- .footer end -->

</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<!-- <script type="text/javascript" src="http://d1qlu92qlflogk.cloudfront.net/template-durendal/js/jquery-3.2.1.min.js"></script> -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/jquery.min.js"></script>
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/modernizr.js"></script>
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/jquery.validate.js"></script>
<!-- Morphext -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/morphext/morphext.min.js"></script>
<!-- Background Video -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/vide/jquery.vide.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/owlcarousel2/owl.carousel.min.js"></script>
<!-- SmoothScroll javascript -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/plugins/SmoothScroll.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="https://d1qlu92qlflogk.cloudfront.net/template-durendal/js/custom.js"></script>

</body>
</html>
