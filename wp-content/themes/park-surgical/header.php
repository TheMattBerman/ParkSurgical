<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Park-Surgical
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="<?php echo get_template_directory_uri(); ?>/dist/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/dist/js/slick/slick.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/dist/css/main.min.css" rel="stylesheet" type="text/css" />

	<?php wp_head(); ?>
</head>

<body>
	<div class="top-menu">
		<div class="container-fluid">
			<nav class="navbar d-flex justify-content-between align-items-center">
				<div class="row no-gutters">
					<div class="col-12 d-flex justify-content-md-between justify-content-center align-items-center flex-sm-row flex-column">
						<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="logo" /></a>
						<ul class="navbar-nav d-flex flex-row  justify-content-center justify-content-md-end align-items-center">
							<li class="nav-item">
								<a class="btn btn-red big" href="tel:8005690570"><i class="fa fa-phone" aria-hidden="true"></i>(800) 569-0570</a>
							</li>
							<li class="nav-item">
								<div class="dropdown">
									<button class="btn btn-menu dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span></span>
										<span class="short"></span>
										<span></span>
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#contact">Contact Us</a>
										<a class="dropdown-item" href="#transition">A Seamless Transition</a>
										<a class="dropdown-item" href="#honest">Honest and Dependable</a>
										<a class="dropdown-item" href="#testimonials">Testimonials</a>
										<a class="dropdown-item" href="#learn">Learn More</a>
										<a class="dropdown-item" href="#footer">Contact Information</a>

									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>

<!-- <body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'park-surgical' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$park_surgical_description = get_bloginfo( 'description', 'display' );
			if ( $park_surgical_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $park_surgical_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'park-surgical' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header>

	<div id="content" class="site-content"> -->
