<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="row">
		<div class="col-lg-3">
			<div class="last-words p-5">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
				 Ex excepturi aut, minima adipisci exercitationem nulla 
				 ducimus repellendus sapiente. Excepturi, voluptas culpa
				  ullam esse alias dolore dolorem quidem. Fugit, incidunt voluptatum!</p>
			</div>
			
		</div>
		
		<div class="col-lg-5">
			<div class="footer-contact p-5">
				<div class="d-flex flex-column justify-content-center">
					<h2>Contact</h2>
					<ul>
						<li> <i class="fa fa-map-marker"></i>Viva Towers, Bibi Titi Rd, Dar es Salaam, Tanzania</li>
						<li> <i class="fa fa-envelope"></i> info@savannahtours.co.tz</li>
						<li> <i class="fa fa-phone"></i> +255 766 555 000</li>
					</ul> 
				</div>
			</div>
		</div>
		<div class="col-lg-4">
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>
		</div>
	</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

