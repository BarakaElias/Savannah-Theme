<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <div class="d-flex flex-column justify-content-space-around">
                <div class="content">
                    <h2>Come and See Nature in it's Wildlife</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer
                         adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                         Cum sociis natoque penatibus et magnis dis parturient
                          montes, nascetur ridiculus
                     </p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-tear">
        <img src="<?php echo get_template_directory_uri() ?>/img/vector.svg" alt="cut out" >
    </div>
</div>


<div class="welcome">
    <div class="container">
        <div class="title">
            <h2>Welcome to Savannah</h2>
            <h3>Tours & Safari</h3>
        </div>
        <p class="welcome-content">
        Experience safaris, custom-made
         trips for couples, family holidays, honeymoons, and expert-led groups.
          Allow us to make your trip to Tanzania an experience you will never forget! 
        </p>
        <p>Lorem ipsum dolor sit amet, consectetuer
                         adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                         Cum sociis natoque penatibus et magnis dis parturient
                          montes, nascetur ridiculus</p>
    </div>
</div>


<div class="activities">
    <div class="container">
            <div class="d-flex flex-wrap">
                <div class="activity">
                    <div class="activity-img">
                        <div class="title">
                            Long Safari
                        </div>
                    </div>
                </div>
                <div class="activity">
                    <div class="activity-img">
                        <div class="title">
                            Long Safari
                        </div>
                    </div>
                </div>
                <div class="activity">
                    <div class="activity-img">
                        <div class="title">
                            Long Safari
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


<div class="news">
    <div class="news-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="news-img">
                    <div class="title">Valentine's Day</div>
                    <div class="date">14th February 2022</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <h2>What's New Today?</h2>
                    <p>Experience safaris, custom-made trips for couples, family holidays, honeymoons, and expert-led groups. </p>
                    <div class="d-flex justify-content-end">
                        <div>
                        <a href="#">Read more <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="popular-destinations">
    <div class="container">
    <div class="title">
            <h2>Popular Destinations</h2>
            <h3>to have a good time</h3>
        </div>
        <div class="d-flex flex-row justify-content-center flex-wrap">
            <?php
                $args = array( 'post_type' => 'destinations', 'posts_per_page' => 6 );
                $the_query = new WP_Query( $args );
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="destination">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <img src="<?php echo $image[0]; ?>" alt="Destniation Image">
                <h5><?php the_title(); ?></h5>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">
                    VISIT
                </a>
            </div>
            <?php endwhile; endif; ?>
            <div class="destination">
                <img src="<?php echo get_template_directory_uri(); ?>/img/zanzibar.jpg" alt="Destniation Image">
                <h5>Zanzibar</h5>
                <p>Take a stroll in the streets of Dar es Salaam</p>
                <a href="#">
                    VISIT
                </a>
            </div>
            <div class="destination">
                <img src="<?php echo get_template_directory_uri(); ?>/img/stonetown.jpg" alt="Destniation Image">
                <h5>Stone Town</h5>
                <p>Take a stroll in the streets of Dar es Salaam</p>
                <a href="#">
                    VISIT
                </a>
            </div>
            <div class="destination">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news.jpg" alt="Destniation Image">
                <h5>Dar es Salaam</h5>
                <p>Take a stroll in the streets of Dar es Salaam</p>
                <a href="#">
                    VISIT
                </a>
            </div>
            <div class="destination">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news.jpg" alt="Destniation Image">
                <h5>Dar es Salaam</h5>
                <p>Take a stroll in the streets of Dar es Salaam</p>
                <a href="#">
                    VISIT
                </a>
            </div>
            <div class="destination">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news.jpg" alt="Destniation Image">
                <h5>Dar es Salaam</h5>
                <p>Take a stroll in the streets of Dar es Salaam</p>
                <a href="#">
                    VISIT
                </a>
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



<div class="best-offers">
    <div class="container">
        <div class="title">
                <h2>Best Offers</h2>
                <h3>to enjoy to the fullest</h3>
            </div>
        
        <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="offer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/magoroto.jpg" alt="pic of magoroto">
                    <div class="content">
                        <div class="d-flex justify-content-between">
                            <div><h5>Magoroto</h5></div>
                            <div><p><i class="fa fa-map-marker"></i>Morogoro</p></div>
                        </div>
                        <p class="category">CAMPING</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque.</p>
                        <div class="d-flex flex-row justify-content-end">
                            <a href="#">Explore</a>
                        </div>
                    </div>
            </div>
            <div class="offer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/magoroto.jpg" alt="pic of magoroto">
                    <div class="content">
                        <div class="d-flex justify-content-between">
                            <div><h5>Magoroto</h5></div>
                            <div><p><i class="fa fa-map-marker"></i>Morogoro</p></div>
                        </div>
                        <p class="category">CAMPING</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque.</p>
                        <div class="d-flex flex-row justify-content-end">
                            <a href="#">Explore</a>
                        </div>
                    </div>
            </div>
            <div class="offer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/magoroto.jpg" alt="pic of magoroto">
                    <div class="content">
                        <div class="d-flex justify-content-between">
                            <div><h5>Magoroto</h5></div>
                            <div><p><i class="fa fa-map-marker"></i>Morogoro</p></div>
                        </div>
                        <p class="category">CAMPING</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque.</p>
                        <div class="d-flex flex-row justify-content-end">
                            <a href="#">Explore</a>
                        </div>
                    </div>
            </div>
            <div class="offer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/kilimanjaro.jpg" alt="pic of magoroto">
                    <div class="content">
                        <div class="d-flex justify-content-between">
                            <div><h5>Climb Mt.Kilimanjaro</h5></div>
                            <div><p><i class="fa fa-map-marker"></i>Kilimanjaro</p></div>
                        </div>
                        <p class="category">MOUNTAIN CLIMBING</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque.</p>
                        <div class="d-flex flex-row justify-content-end">
                            <a href="#">Explore</a>
                        </div>
                    </div>
            </div>
            <div class="offer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/magoroto.jpg" alt="pic of magoroto">
                    <div class="content">
                        <div class="d-flex justify-content-between">
                            <div><h5>Magoroto</h5></div>
                            <div><p><i class="fa fa-map-marker"></i>Morogoro</p></div>
                        </div>
                        <p class="category">CAMPING</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque.</p>
                        <div class="d-flex flex-row justify-content-end">
                            <a href="#">Explore</a>
                        </div>
                    </div>
            </div>
            <div class="offer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/magoroto.jpg" alt="pic of magoroto">
                    <div class="content">
                        <div class="d-flex justify-content-between">
                            <div><h5>Magoroto</h5></div>
                            <div><p><i class="fa fa-map-marker"></i>Morogoro</p></div>
                        </div>
                        <p class="category">CAMPING</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque.</p>
                        <div class="d-flex flex-row justify-content-end">
                            <a href="#">Explore</a>
                        </div>
                    </div>
            </div>
            
        </div>
        <div class="d-flex  justify-content-center">
                <div>
                    <br><br>
                    <a href="#" class="more-offers">EXPLORE MORE OFFERS</a>
                </div>
            </div>
</div>
</div>


<div class="home-testimonials">
    <div class="container">
    <div class="title">
                <h2>Testimonials</h2>
                <h3>what others had to say</h3>
    </div>
        
    </div>
    <?php echo do_shortcode( '[rt-testimonial id="22" title="Home Testimonials"]' ) ?>
</div>


<!-- <div class="contact-us">
    <div class="container">
    <div class="title">
                <h2>Contact Us</h2>
                <h3>send us an inquiry</h3>
    </div>
    <?php// echo do_shortcode('[contact-form-7 id="23" title="Contact Form"]'); ?>
    </div>
</div> -->

<?php
get_footer();
