			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="footer-container clearfix">
					<div class="footer-twitter-column">
						<h2>FOLLOW US</h2>
						<img class="twitter-logo" src="<?php echo get_template_directory_uri(); ?>/img/twitter.png">
						<div class="footer-column-content">
							<?php dt_twitter(); ?>
						</div>
					</div>
					<div class="footer-join-email-list-column">
						<h2>JOIN OUR ADVOCACY LIST</h2>
						<div class="footer-column-content">
							<?php echo do_shortcode( '[contact-form-7 id="102" title="Join Email List (Footer)"]' ); ?>
						</div>
					</div>
					<div class="footer-contact-column">
							<h2>CONTACT US</h2>
							<div class="footer-column-content">
								<p>Historic Tax Credit Coalition<br />
									Liberty Place<br />
									325 7th Street, Northwest<br />
									Suite 400<br />
									Washington, DC 20004<br />
									(202) 567-2900<br />
									<a href="mailto:coalition@historiccredit.com" style="footer-email-address">coalition@historiccredit.com</a>
						</div>
					</div>
				</div>
				<!-- copyright -->
				<!-- /copyright -->
			<p class="footer-copyright">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
				<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
			</p>
			</footer>
			<!-- /footer -->

			<!-- Mobile Footer - Medium -->
			<footer class="footer mobile-footer-medium" role="contentinfo">
				<div class="footer-mobile-right-column">	
					<div class="footer-join-email-list-column">
						<h2>JOIN OUR ADVOCACY LIST</h2>
						<div class="footer-column-content">
							<?php echo do_shortcode( '[contact-form-7 id="102" title="Join Email List (Footer)"]' ); ?>
						</div>
					</div>
					<div class="footer-contact-column">
						<h2>CONTACT US</h2>
						<div class="footer-column-content">
							<p>Historic Tax Credit Coalition<br />
								Liberty Place<br />
								325 7th Street, Northwest<br />
								Suite 400<br />
								Washington, DC 20004<br />
								(202) 567-2900<br />
								<a href="mailto:coalition@historiccredit.com" style="footer-email-address">coalition@historiccredit.com</a>
						</div>
					</div>
				</div>
				<div class="footer-mobile-left-column">
					<div class="footer-container clearfix">
						<div class="footer-twitter-column">
							<h2>FOLLOW US</h2>
							<img class="twitter-logo" src="<?php echo get_template_directory_uri(); ?>/img/twitter.png">
							<div class="footer-column-content">
								<?php dt_twitter(); ?>
							</div>
						</div>
					</div>
				</div>
				<!-- copyright -->
				<!-- /copyright -->
			<p class="footer-copyright">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
				<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
			</p>
			</footer>

			<!-- Mobile Footer - Small -->
			<footer class="footer mobile-footer-small" role="contentinfo">
				<div class="footer-twitter-column">
						<h2>FOLLOW US</h2>
						<img class="twitter-logo" src="<?php echo get_template_directory_uri(); ?>/img/twitter.png">
						<div class="footer-column-content">
							<?php dt_twitter(); ?>
						</div>
					</div>
					<div class="footer-join-email-list-column">
						<h2>JOIN OUR ADVOCACY LIST</h2>
						<div class="footer-column-content">
							<?php echo do_shortcode( '[contact-form-7 id="102" title="Join Email List (Footer)"]' ); ?>
						</div>
					</div>
					<div class="footer-contact-column">
						<h2>CONTACT US</h2>
						<div class="footer-column-content">
							<p>Historic Tax Credit Coalition<br />
								Liberty Place<br />
								325 7th Street, Northwest<br />
								Suite 400<br />
								Washington, DC 20004<br />
								(202) 567-2900<br />
								<a href="mailto:coalition@historiccredit.com" style="footer-email-address">coalition@historiccredit.com</a>
						</div>
					</div>

				<!-- copyright -->
				<!-- /copyright -->
			<p class="footer-copyright">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
				<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
			</p>
			</footer>

		</div>
		<!-- /wrapper -->
	</div>
		<?php wp_footer(); ?>

		<script>
		var currentPagePath = window.location.pathname;
		var links = document.getElementById("subpage-list").getElementsByTagName("a");
		for (var i = 0; i < links.length; i++) {
			var linkPath = links[i].pathname;
			console.log(currentPagePath);
			console.log(linkPath);
			if (linkPath === currentPagePath) {
				console.log('Yes');
				links[i].parentNode.style.display = "none";	
			}
		}
		</script>

		<!-- Repositioning of images inbetween paragraphs at certain breakpoints on About page -->
		<script>
// 			$(document).ready(function() {
//     // run test on initial page load
//     checkSize();

//     // run test on resize of the window
//     $(window).resize(checkSize);
// });

// //Function to the css rule
// function checkSize(){
//     if ($(".about-content-images").css("display") == "none" ) {
//     	var paragraphs = $(".about-content article").children("p");
//     	console.log(paragraphs);
//     }
// }
		</script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
