<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Park-Surgical
 */

?>

<section class="section-footer" id="footer">
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<h3>Do you have a question? Feel free to contact us.</h3>
				</div>
				<div class="col-12">
					<div class="row justify-content-center">
						<div class="col-12 col-md-6 col-lg-3">
							<a class="btn btn-phone" href="tel:8005690570"><i class="fa fa-phone" aria-hidden="true"></i>(800) 569-0570</a>
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<a class="btn btn-email" href="mailto:support@dealmed.com"><i class="fa fa-envelope" aria-hidden="true"></i>support@dealmed.com</a>
						</div>
						<div class="col-12 col-md-6 col-lg-6 social-inner text-center">
							<a class="social-link" href="https://www.linkedin.com/company/dealmed/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a class="social-link" href="https://www.facebook.com/dealmed"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
							<a class="social-link" href="https://www.instagram.com/officialdealmed/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a class="social-link" href="https://twitter.com/Dealmed"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 col-lg-6 d-flex justify-content-center justify-content-md-start justify-content-lg-start align-items-center flex-row">
					<p>© 2008 -2020 Dealmed Medical Supplies</p>
				</div>
				<div class="col-12 col-md-4 col-lg-6 d-flex justify-content-center  justify-content-md-start justify-content-lg-end align-items-center flex-row mb-3 mb-md-0 mb-lg-0">
					<!--<p>Website by Emerald Digital</p>-->
					<a class="copy-link" href="https://emerald.digital">Website by Emerald Digital</a>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/jquery-3-3-1.min.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/custom.js"></script>


	<!-- </div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'park-surgical' ) ); ?>">
				<?php

				printf( esc_html__( 'Proudly powered by %s', 'park-surgical' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php

				printf( esc_html__( 'Theme: %1$s by %2$s.', 'park-surgical' ), 'park-surgical', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer>
</div> -->

<?php wp_footer(); ?>

</body>
</html>
