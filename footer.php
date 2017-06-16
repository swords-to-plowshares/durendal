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
							<!--<img src="<?php bloginfo("template_directory"); ?>/assets/template/images/logo-footer.png" class="margin-bottom-15">-->
							<ul class="list-icons">
								<li><strong>Main Office</strong></li>
								<li><i class="fa fa-map-marker pr-10 text-default purple"></i> 1060 Howard Street<br>
								&nbsp; &nbsp; &nbsp; &nbsp; San Francisco, CA 94103 </li>
								<li><i class="fa fa-phone pr-10 text-default purple"></i> 1 (415) 252-4788 </li>
							</ul>
							<ul class="list-icons">
								<li><strong>East Bay Office</strong></li>
								<li><i class="fa fa-map-marker pr-10 text-default purple"></i> 2719 Telegraph Avenue<br>
								&nbsp; &nbsp; &nbsp; &nbsp; Oakland, CA 94612 </li>
								<li><i class="fa fa-phone pr-10 text-default purple"></i> 1 (510) 844-7500 </li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-2 col-lg-offset-1">
						<div class="footer-content">
							<h2 class="title">Quick Links</h2>
							<div class="row">
								<div class="col-xs-12">
<!-- 									<ul class="list-style-none padding-0 margin-left-5">
										<li class="margin-bottom-5 hover-purple"><a href="https://www.swords-to-plowshares.org/about" class="no-ul">About Us</a></li>
										<li class="margin-bottom-5 hover-purple"><a href="https://www.swords-to-plowshares.org/contact-us" class="no-ul">Contact Us</a></li>
										<li class="margin-bottom-5 hover-purple"><a href="https://www.swords-to-plowshares.org/about/governance-finance" class="no-ul">Financials</a></li>
										<li class="margin-bottom-5 hover-purple"><a href="https://www.swords-to-plowshares.org/careers" class="no-ul">Careers</a></li>
										<li class="margin-bottom-5 hover-purple"><a href="https://www.swords-to-plowshares.org/self-help-materials" class="no-ul">Self Help Guides</a></li>
										<li class="margin-bottom-5 hover-purple"><a href="http://greatnonprofits.org/orgB/swords-to-plowshares" class="no-ul">Great Nonprofits</a></li>
										<li class="margin-bottom-5 hover-purple"><a href="http://www.charitynavigator.org/index.cfm?bay=search.profile&ein=942260626" class="no-ul">Charity Navigator</a></li>
										<li class="margin-bottom-5 hover-purple"><a href="http://www.guidestar.org/organizations/94-2260626/swords-plowshares-veterans-rights-organization.aspx" class="no-ul">Guidestar</a></li>
									</ul> -->
									
									<!-- ==========================================================================
										Footer | Quick Links | Left Menu
									========================================================================== -->
									<?php wp_nav_menu(array(
										"container"			=> false,
										"theme_location"	=> "menu-footer",
										"menu_class"		=> "list-style-none padding-0 margin-left-5",
										"walker"            => new Walker_FooterQuickLinks
									)); ?>
								</div>
							</div>
							<ul class="social-links circle animated-effect-1">
								<li class="facebook"><a target="_blank" href="https://www.facebook.com/vetshelpingvets" class="white"><i class="fa fa-facebook"></i></a></li>
								<li class="twitter"><a target="_blank" href="https://twitter.com/vetshelpingvets" class="white"><i class="fa fa-twitter"></i></a></li>
								<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/swords-to-plowshares" class="white"><i class="fa fa-linkedin"></i></a></li>
								<li class="youtube"><a target="_blank" href="https://www.youtube.com/user/VetsHelpingVets" class="white"><i class="fa fa-youtube-play"></i></a></li>
							</ul>
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
							<form role="form" id="footer-form" class="margin-clear" novalidate="novalidate" action="//swords-to-plowshares.us10.list-manage.com/subscribe/post?u=22a6559c6251f975e7f385476&amp;id=42595ded07" method="post">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group has-feedback mb-10">
											<label class="sr-only" for="name2">Name</label>
											<input type="text" class="form-control" id="name2" placeholder="Name" name="name2">
											<i class="fa fa-user form-control-feedback"></i>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group has-feedback mb-10">
											<label class="sr-only" for="email2">Email address</label>
											<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2">
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
									</div>
								</div>
								<div class="form-group has-feedback mb-10">
									<label class="sr-only" for="message2">Message</label>
									<textarea class="form-control" rows="4" id="message2" placeholder="Message" name="message2"></textarea>
									<i class="fa fa-pencil form-control-feedback"></i>
								</div>
								<input type="submit" value="Subscribe" class="margin-clear submit-button btn">
							</form>
						</div>
					</div>
				</div>
				<br>
				<!-- section start -->
				<!-- ================ -->
				<section id="collapseMap">
					<div id="map-canvas" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>
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
						<p class="text-center">Copyright © 2017 Swords to Plowshares. All Rights Reserved</p>
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
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/modernizr.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/jquery.validate.js"></script>
<!-- Morphext -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/morphext/morphext.min.js"></script>
<!-- Background Video -->
<script src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/vide/jquery.vide.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/owlcarousel2/owl.carousel.min.js"></script>
<!-- SmoothScroll javascript -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/plugins/SmoothScroll.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/template/js/custom.js"></script>

</body>
</html>
