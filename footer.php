<!-- Template for the site's footer -->

<!-- Layout for larger screens (roughly laptop/desktop size) -->
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

			<p class="footer-copyright">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
				<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
			</p>

		</footer>

		<!-- Layout for medium size screens (roughly tablet size) -->
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

			<p class="footer-copyright">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
				<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
			</p>

		</footer>

		<!-- Layout for small size screens (roughly phone size) -->
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

			<p class="footer-copyright">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
				<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
			</p>

		</footer>
		<?php wp_footer(); ?>

		<script>
			// Hide current page from subpage lists on mobile dropdown navs
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

		<!-- Google Analytics -->
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
