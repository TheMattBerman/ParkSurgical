<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Park-Surgical
 */

get_header();
?>
	<section class="hero" id="hero">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<label class="new-holder"><span class="new">NEW</span><span class="new-title">Park Surgical acquired by Dealmed</span></label>
					<h1><span>Park Surgical</span> customers now have access to thousands of additional products, <span>FASTER service, and better prices</span>.</h1>
					<p>Park Surgical is now part of Dealmed, one of the foremost medical supply companies, and a top supplier of medical equipment, surgical and medical supplies.</p>
					<a class="btn btn-red" href="https://www.dealmed.com/about">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section-form" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-start flex-column">
					<h2>Park Surgical Is Better Than Ever</h2>
					<p>Park Surgical customers now have access to Dealmed’s extensive selection of inventory and efficient services. Personal, competent customer service representatives are standing by to help.</p>
					<p>Whether you need medical equipment, diagnostics, pharmaceuticals, or medical supplies nobody compares to Dealmed for price savings and world-class service. We are proud of how we treat our valued customers and invite you to see for
						yourself what has enabled Dealmed to grow and prosper for so many years. </p>
					<a class="btn btn-arrow mt-2 mb-5" href="https://www.dealmed.com/shop">Dealmed Shop<i class="fa fa-arrow-right" aria-hidden="true"></i></a>

					<div class="row">
						<div class="col-12 col-md-3">
							<img src="<?php echo get_template_directory_uri(); ?>/dist/img/circle-arrow.png" alt="circle-arrow" />
						</div>
						<div class="col-12 col-md-9">
							<p>Fill out the form if you are a healthcare professional. At Dealmed, we pride ourselves on excellent customer service and look forward to serving Park Surgical’s valued customers. </p>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 offset-lg-1">
					<div class="form-holder">
						<div class="row">
							<div class="col-12">
								<h5>Contact us</h5>
							</div>
							<div class="col-12">
								<?php gravity_form( 1, false, false, false, '', false ); ?>

								<!-- <form>
									<div class="row">
										<div class="col-12 col-lg-6">
											<label>First Name</label>
											<input class="form-control" name="nameFirst" type="text">
										</div>
										<div class="col-12 col-lg-6">
											<label>Last Name</label>
											<input class="form-control" name="nameLast" type="text">
										</div>
										<div class="col-12">
											<label>Phone Number</label>
											<input class="form-control" name="phone" type="text">
										</div>
										<div class="col-12">
											<label>Email Address</label>
											<input class="form-control" name="email" type="email">
										</div>
										<div class="col-12 col-md-6 col-lg-7">
											<label>Are you Park Surgical Client? </label>
										</div>
										<div class="col-12 col-md-6 col-lg-5 mb-3 d-flex justify-content-md-end align-items-center flex-row">
											<input type="radio" name="client" id="yes" checked="">
											<label for="yes">Yes</label>
											<input type="radio" name="client" id="no">
											<label class="ml-3" for="no">No</label>
										</div>
										<div class="col-12">
											<label>Question or Concern?</label>
											<textarea class="form-control" name="question"></textarea>
										</div>
										<div class="col-12">
											<button type="submit" class="btn btn-red btn-submit">Send Message</button>
										</div>
									</div>
								</form> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="transition">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/img/img1.png" alt="img1" />
				</div>
				<div class="col-12 col-lg-5 offset-lg-1">
					<h2 class="mb-4">A Seamless Transition</h2>
					<p>The addition of Park Surgical’s distribution and medical-surgical business enables our company to better meet your individual medical supply services and needs. Dealmed’s online medical supply shop offers all Park Surgical products plus
						thousands more.</p>
					<p>Dealmed understands the changing climate of healthcare and how important it is to our customers to have an experienced and reliable partner. </p>
					<a class="btn btn-red biger mt-4" href="https://www.dealmed.com/">Explore Dealmed</a>
				</div>
			</div>
		</div>
	</section>
	<section id="honest">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-5 d-flex justify-content-center align-items-center flex-column">
					<h2 class="mb-4">Honest and Dependable For 90 Years</h2>
					<p>As a strong, forward thinking organization, Park Surgical has attracted and nurtured a significant number of highly experienced individuals from the medical industry. Founded in 1930, Park Surgical became an industry leader by being the
						first licensed pharmaceutical wholesaler, and third licensed pharmacy in the state of New York. Their extensive experience in the healthcare industry, unbeatable prices, and dedication to their clients cemented their reputation as one of
						the foremost suppliers of surgical and medical supplies in Brooklyn.</p>
				</div>
				<div class="col-12 col-lg-6 offset-lg-1 d-flex justify-content-center align-items-center">
					<div class="img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/img2.png);"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="pt-3" id="selection">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6 col-lg-4 box-shop">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/img/img3.png" alt="img3" />
					<h4>Extensive Selection.</h4>
					<p>Dealmed has an unbeatable selection. Our 100,000 square foot warehouse is filled with everything your office and patients need at the highest quality and most affordable price. Our stock features durable medical equipment such as
						Emergency Supplies, Medical Equipment and Instruments, Respiratory, Surgical Supplies, and even Medical Furniture and Medical Hardware. Dealmed manufactures a full-line of products offered exclusively to our customers. </p>
					<a class="btn btn-arrow mt-2 mb-5" href="https://www.dealmed.com/shop">Dealmed Shop<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
				</div>
				<div class="col-12 col-md-6 col-lg-4 box-shop">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/img/img4.png" alt="img4" />
					<h4>Innovative Technology.</h4>
					<p>Dealmed helps you stay up-to-date on industry news, CPT codes, and latest products. Partnering with Dealmed means access to our innovative tracking systems that help keep your practice organized and running smoothly. </p>
					<a class="btn btn-arrow mt-2 mb-5" href="https://www.dealmed.com/shop">Dealmed Shop<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
				</div>
				<div class="col-12 col-md-6 col-lg-4 box-shop">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/img/img5.png" alt="img5" />
					<h4>Exceptional Service.</h4>
					<p>You need a medical supplier that cares about you as much as you care about your patients. Dealmed provides free telephone support, express delivery, and expert installation to all their customers. In the age of online shopping, quality
						service and support can be overlooked - not at Dealmed.</p>
					<a class="btn btn-arrow mt-2 mb-5" href="https://www.dealmed.com/shop">Dealmed Shop<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</section>
	<section class="section-slider" id="testimonials">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10 text-center">
					<h2>As a Client, You are Our Top Priority</h2>
				</div>
				<div class="col-12 col-lg-8 text-center pb-70">
					<p>Personal, competent service is what we’re all about, and why we are one of the most trusted and respected Medical Supply Companies. Don’t just take our word for it.</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-lg-9">
					<div class="single-slider">


						<div class="item-slider">
							<div class="row">
								<div class="col-12 col-md-3">
									<!--<div class="slider-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/img-s.jpg);"></div>-->
								</div>
								<div class="col-12 col-md-8 pr-md-5 pr-3">
									<p>“Dealmed has been a great help to us. They are always available when we need them, always happy to help solve issues and keep things going smooth for us. Excellent customer service.”</p>
									<div class="row align-items-center">
										<div class="col-12 col-md-7">
											<span>WILLIAM FENSTER, M.D. F.A.A.P.<br />Kinder Pediatrics, P.C.</span>
										</div>
										<div class="col-12 col-md-5 mt-3 mt-md-0 text-right">
											<a class="btn btn-arrow" href="https://www.dealmed.com/">Dealmed Supplies<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-slider">
							<div class="row">
								<div class="col-12 col-md-3">
									<!--<div class="slider-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/img-s.jpg);"></div>-->
								</div>
								<div class="col-12 col-md-8 pr-md-5 pr-3">
									<p>“Working with Dealmed and our Sales Rep Al in particular has been an amazing experience. They treat us like family and are always available to meet our needs with a smile and the best price possible. It’s an absolute pleasure in
										every way.”</p>
									<div class="row align-items-center">
										<div class="col-12 col-md-7">
											<span>DR. YECHIEL ZAGELBAUM, DO<br />Brooklyn, NY - Williamsburg Pediatrics</span>
										</div>
										<div class="col-12 col-md-5 mt-3 mt-md-0 text-right">
											<a class="btn btn-arrow" href="https://www.dealmed.com/">Dealmed Supplies<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-slider">
							<div class="row">
								<div class="col-12 col-md-3">
									<!--<div class="slider-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/img-s.jpg);"></div>-->
								</div>
								<div class="col-12 col-md-8 pr-md-5 pr-3">
									<p>“Our Sales Rep is always very informative and attentive to all requests. He follows up promptly to all inquiries. Deliveries are always on time. Wouldn’t deal with anyone else</p>
									<div class="row align-items-center">
										<div class="col-12 col-md-7">
											<span>DANIELLE<br />Premier Pediatrics</span>
										</div>
										<div class="col-12 col-md-5 mt-3 mt-md-0 text-right">
											<a class="btn btn-arrow" href="https://www.dealmed.com/">Dealmed Supplies<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-slider">
							<div class="row">
								<div class="col-12 col-md-3">
									<!--<div class="slider-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/img-s.jpg);"></div>-->
								</div>
								<div class="col-12 col-md-8 pr-md-5 pr-3">
									<p>“Our medical office has been using Dealmed - Park Surgical for the last 8 years and they never disappoint. Our sales rep always goes above and beyond to make sure we have everything we need at a great price and when we need it.
										Always quality products and outstanding customer service. Would never consider working with anyone else!”</p>
									<div class="row align-items-center">
										<div class="col-12 col-md-7">
											<span>IGOR PALEY<br />OBS Director - Brooklyn Premier Orthopedics/Newkirk Surgical</span>
										</div>
										<div class="col-12 col-md-5 mt-3 mt-md-0 text-right">
											<a class="btn btn-arrow" href="https://www.dealmed.com/">Dealmed Supplies<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-slider">
							<div class="row">
								<div class="col-12 col-md-3">
									<!--<div class="slider-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/img-s.jpg);"></div>-->
								</div>
								<div class="col-12 col-md-8 pr-md-5 pr-3">
									<p>“I have been using them since I started with the practice, over 6 years ago. This practice has been using them for over 15 years. We have always been completely satisfied with their customer service team. They do an excellent job
										and have a large selection of products, items arrive the next business day and they offer competitive pricing. I am happy to recommend the services of Dealmed.”</p>
									<div class="row align-items-center">
										<div class="col-12 col-md-7">
											<span>STEPHANIE HAGGAR<br />Office Manager - Hassan Wehbeh, MD, FACOG</span>
										</div>
										<div class="col-12 col-md-5 mt-3 mt-md-0 text-right">
											<a class="btn btn-arrow" href="https://www.dealmed.com/">Dealmed Supplies<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-slider">
							<div class="row">
								<div class="col-12 col-md-3">
									<!--<div class="slider-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/img-s.jpg);"></div>-->
								</div>
								<div class="col-12 col-md-8 pr-md-5 pr-3">
									<p>“Dealmed is our main medical supplier and would highly recommend them for their quality products, competitive pricing and reliable delivery. Their method of communication is far superior to other suppliers. I know exactly when I
										can expect a product. Thank you Dealmed!”</p>
									<div class="row align-items-center">
										<div class="col-12 col-md-7">
											<span>PAMELA BEVENOUR<br />Practice Manager - Just Kids Pediatrics</span>
										</div>
										<div class="col-12 col-md-5 mt-3 mt-md-0 text-right">
											<a class="btn btn-arrow" href="https://www.dealmed.com/">Dealmed Supplies<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-slider">
							<div class="row">
								<div class="col-12 col-md-3">
									<!--<div class="slider-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/img-s.jpg);"></div>-->
								</div>
								<div class="col-12 col-md-8 pr-md-5 pr-3">
									<p>“Our office has been working with Dealmed for years and we could not be happier. They have the high-quality medical products that are both doctor and patient friendly. Their customer service department is always helpful and
										professional. Dealmed makes purchasing easy and allow us to focus on the patient which is what is most important“</p>
									<div class="row align-items-center">
										<div class="col-12 col-md-7">
											<span>XIOMARA MONTALVO<br />Manager - All Boro Medical</span>
										</div>
										<div class="col-12 col-md-5 mt-3 mt-md-0 text-right">
											<a class="btn btn-arrow" href="https://www.dealmed.com/">Dealmed Supplies<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item-slider">
							<div class="row">
								<div class="col-12 col-md-3">
									<!--<div class="slider-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/img-s.jpg);"></div>-->
								</div>
								<div class="col-12 col-md-8 pr-md-5 pr-3">
									<p>“Dealmed has fantastic products and great sales. I would highly recommend them to any physician office who is looking for competitive pricing and quality products.”</p>
									<div class="row align-items-center">
										<div class="col-12 col-md-7">
											<span>STACY EPISCOPO<br />Head Nurse - First State Women’s Care</span>
										</div>
										<div class="col-12 col-md-5 mt-3 mt-md-0 text-right">
											<a class="btn btn-arrow" href="https://www.dealmed.com/">Dealmed Supplies<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="secton-lower" id="learn">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-7 d-flex justify-content-center align-items-center">
					<!--<div class="img-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/img6.png);"></div>-->
					<img class="img-inner" src="<?php echo get_template_directory_uri(); ?>/dist/img/img6.png" alt="img6" />
				</div>
				<div class="col-12 col-lg-5  d-flex justify-content-center align-items-center flex-column">
					<h2 class="mb-4">Want to Learn more about Dealmed?</h2>
					<p>Get a firsthand look at Dealmed’s extensive inventory of medical supplies online by clicking here. Visit Dealmed.com or give us a call to speak to one of our dedicated customer service representatives standing by.</p>
					<a class="btn btn-phone mt-4" href="tel:8005690570"><i class="fa fa-phone" aria-hidden="true"></i>(800) 569-0570</a>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
