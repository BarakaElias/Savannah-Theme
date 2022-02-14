<?php
/**
 * Template Name: Template: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="about-banner">
    <div class="about-banner-bg">
        <div class="container">
            <div class="title">
                <h2>CONTACT</h2>
            </div>
        </div>
    </div>   
</div>

<div class="contact-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title">
                    <h3>Drop us a line</h3>
                </div>
                <p>Vivamus volutpat eros pulvinar velit laoreet, 
                    sit amet egestas erat dignissim. Sed quis rutrum
                     tellus, sit amet viverra felis. Cras sagittis
                      sem sit amet urna feugiat rutrum</p>
                <?php echo do_shortcode('[contact-form-7 id="23" title="Contact Form"]'); ?>
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <h4>AVAILABE FROM 8:00AM TO 4:30PM</h4>
                </div>
                <div class="phone">
                    <i class="fa-fa-phone"></i> +255 624 56 23 78
                </div>
                <div class="contact-address">
                    <ul class="m-5">
                        <li>Email: info@savannahtours.co.tz</li>
                        <li>Address: Masaki, Posta Rd</li>
                        <li>City: Dar es Salaam</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <div class="map">
    <?php echo do_shortcode('[wpgmza id="1"]'); ?>
</div> -->

<?php
get_footer();
