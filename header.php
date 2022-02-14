<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<div class="top-header">
			<div class="container">
				<div class="d-flex flex-row justify-content-between">
					
					<div class="header-brand">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
					</div>
					<div class="header-action d-flex flex-column justify-content-center">
						<a href="#" class="make-reserve">MAKE RESERVATION</a>
					</div>
					<div class="header-contact d-flex flex-column justify-content-center">
						<ul>
							<li><i class="fa fa-whatsapp"></i> Whatsapp: +255 682 6300 58</li>
							<li><i class="fa fa-envelope-o"></i> info@savannahtours.co.tz</li>
						</ul>
					</div>
					<div class="btn-menu">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<div class="bar"></div>	
					<div class="bar"></div>	
					<div class="bar"></div>	
					<!-- <div class="menu-title">
						Menu
					</div> -->
				</button>
					</div>
				</div>
			</div>
			
		</div>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar end -->

	<div class="container">
			<div class="mobile-logo-holder">
					<div><a href="/">
						<div class="logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="The Beach Back Logo" width="275px">
						</div>
					</a></div>
					<div>
					<a href="#" class="reservation-btn mobile">Make a Reservation</a>

					</div>
			</div>
	</div>