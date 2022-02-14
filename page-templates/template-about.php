<?php
/**
 * Template Name: Template: About
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
                <h2>About Us</h2>
            </div>
        </div>
    </div>   
</div>


<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title">
                    <h2>A few Words</h2>
                    <h3>About Us</h3>
                </div>
                <div class="content">
                    <p>Is safari operator based in East Africa, Tanzania. Traveling with us
                         you can be assured that your journey will be planned and executed
                          by experts with a passion for culture and nature.<p>Our professional
                               and experienced team arranges safaris, custom-made trips for couples,
                                family holidays, honeymoons, and expert-led groups. Allow us to 
                                make your trip to Tanzania an experience you will never forget!
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo do_shortcode('[robo-gallery id="62"]'); ?>
            </div>
        </div>
    </div>
</div>


<div class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/starfish.jpg" alt="Hand holding a starfish">
            </div>
            <div class="col-lg-6">
                <div class="title m-4">
                    <h2>Why book</h2>
                    <h3>with Us?</h3>
                </div>
                <div class="content m-4">
                    <p>Aenean vel quam elementum, ultricies ex sed,
                         bibendum arcu. Donec a tortor ac dolor commodo 
                         commodo vel non lectus. Nullam tincidunt massa 
                         tincidunt libero mattis ornare</p>
                    <ul>
                        <li>Aenean vel quam elementum, ultricies ex sed, bibendum arcu. Donec a tor</li>
                        <li>Aenean vel quam elementum, ultricies ex sed, bibendum arcu. Donec a tor. Nullam tincidunt massa tincidunt libero mattis ornare</li>
                        <li>Aenean vel quam elementum, ultricies ex sed, bibendum arcu. Donec a tor</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="about-popular-activities">
    <div class="container">
        <div class="title">
            <h2>Our most</h2>
            <h3>popular activities</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <div class="d-flex flex-row flex-wrap justify-content-sm-around">
                <div class="popular-activity first">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/activity.jpg" alt="activity">
                </div>
                <div class="popular-activity second">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/activity.jpg" alt="activity">
                </div>
                <div class="popular-activity third">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/activity.jpg" alt="activity">
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="d-flex justify-content-end flex-column">
                 <a href="#" class="btn btn-lg btn-warning">See more <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
   
</div>


<div class="vacation">
    <div class="vacation-bg">      
    </div>
    <div class="container">
            <div class="title">
                <h2>An Adventure</h2>
                <h3>A Click Away</h3>
            </div>
            <div class="content">
                <p>From bush to beach, our ever-exclusive use of private
                     properties offer nothing other than total relaxation 
                     in the beauty of Africa. These are the moments that are 
                     curated to sublimity, with you in the center of everything luxury safari.</p>
                     <div class="d-flex justify-content-end">
                         <a href="#">Take a Look <i class="fa fa-chevron-right"></i></a>
                     </div>
            </div>
     </div>  
</div>


<div class="about-socials">
    <div class="container">
        <div class="title">
            <h2>Socials</h2>
            <h3>connect with Us</h3>
        </div>
        <div class="instagram">
            <div class="instaname">
                <h4><i class="fa fa-instagram"></i>@savannatours_safari</h4>
            </div>
        </div>
    </div>
</div>


<div class="subscribe">
    <div class="container">
        <div class="title">
            <h2>Subscribe to</h2>
            <h3>our newsletter</h3>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="15" title="Subscribe"]'); ?>
    </div>
</div>


<?php
get_footer();
