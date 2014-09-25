<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Tim Rodgers Design
 */
?>
	</div>
		</div><!-- #content -->

		<div class="footer">
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info container">
					<div class="col-xs-12 col-md-3 footer-col">
						<ul>
							<li><strong>Tim Rodgers</strong></li>
							<li><a href="mailto:timbocf@gmail.com">timbocf@gmail.com</li>
							<li><a href="tel:9032378475">903-237-8475</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-md-7 footer-col">
						<ul class="footer-nav">
							<li><a href="home">Home</a></li>
							<li><a href="about-us">About Us</a></li>
							<li><a href="services">Services</a></li>
							<li><a href="portfolio">Portfolio</a></li>
							<li><a href="contact-us">Contact Us</a></li>
							<li class="social">
								<a href="//facebook.com" class="icon-social-facebook">Facebook</a>
								<a href="//twitter.com" class="icon-social-twitter">Twitter</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-md-2 footer-col footer-logo">
						<img src="<?php bloginfo('template_directory') ?>/images/trd-footer-logo.png" class="img-responsive">
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>
	</div><!-- #page -->


<script>

(function($){

	var page = '<?php echo $post->post_name ?>';

	$('.nav li a').removeClass('active');

	$('#' + page).addClass('active');


	// $('.nav li a').hover(function(){

	// 	if($(this).parent().hasClass('social')) {

	// 		$(this).removeClass('active');

	// 	} else {

	// 		$('.nav li a').removeClass('active');

	// 		$(this).addClass('active');

	// 	}

	// });

	// $('.nav li a').mouseleave(function(){

	// 	$('.nav li a').removeClass('active');

	// 	$('.first').addClass('active');

	// })

})(jQuery);

</script>

<?php wp_footer(); ?>

</body>
</html>