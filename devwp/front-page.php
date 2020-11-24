<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Bearden Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Bearden
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid-container full-width show-for-mobile">
        <div class="grid-x grid-padding-x full-background" style = "background: linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
                    ),url(https://knoxvilletn.gov/UserFiles/Servers/Server_109478/Image/Background/sunspherefall.jpg);
                    background-position: center center;
                    background-size: cover;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "center" >Foothills Bearden</h1>
                    <h4 class = "dark-color-invert center">One Church.</h4>
                    <h4 class = "dark-color-invert center">Two Locations.</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width show-for-desktop">
        <div class="backdrop">
            <p class="text multiply relative">
                <span class="content-middle">Bearden</span>
            </p>
            <div class="content-middle">
                <h4 class = "knockout-title">One Church. Two Locations.</h4>
            </div>
        </div>
    </div>

    <div class="full-width sd-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 center cell">
                    <h3 class = "add-padding dark-color-invert">Jesus said Go so we Go.</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 cell">
                    <h3 class = "no-spacing add-padding no-bot-padding">Why Bearden?</h3>
                    <p class = "no-top-padding margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae dolore dolores error exercitationem illo labore magnam modi non officiis omnis porro, quisquam sapiente sunt tempora vel velit voluptates voluptatum.</p>

                    <div class="stat-line lr-padding">
                        <i class="fas fa-users"></i> <h4 class = "inline"><span class="stat-number">83%</span> of people in Knoxville are unchurched.</h4>
                    </div>

                    <hr class="show-for-mobile">

                    <div class="stat-line lr-padding">
                        <i class="fas fa-church"></i> <h4 class = "inline"><span class="stat-number">23%</span> of people in Knoxville are not Christian.</h4>
                    </div>

                    <hr class="show-for-mobile">

                    <div class="stat-line lr-padding">
                        <i class="far fa-arrow-alt-circle-right ico-padding-1"></i> <h4 class = "inline"><span class="stat-number">41%</span> of people in Knoxville don't like Chic-fil-a.</h4>
                    </div>

                    <hr class="show-for-mobile">

                    <div class="stat-line lr-padding">
                        <i class="fas fa-cross ico-padding-1"></i> <h4 class = "inline"><span class="stat-number">67%</span> of people in Knoxville are UT fans.</h4>
                    </div>

                    <div class="center add-padding">
                        <a href="#"><div class="button">Learn More</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="full-width inverted-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12">
                    <h3 class = "no-spacing add-padding no-bot-padding center dark-color-invert">How Can I Help?</h3>
                </div>
                <div class="small-12 medium-6 cell">
                    <h4 class = "no-spacing add-padding no-bot-padding center-desktop dark-color-invert">Give to the Vision</h4>
                    <p class = "no-top-padding margin-bottom dark-color-invert">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae dolore dolores error exercitationem illo labore magnam modi non officiis omnis porro, quisquam sapiente sunt tempora vel velit voluptates voluptatum.</p>
                    <div class="center add-padding">
                        <a href="#"><div class="button">Fuel The Vision</div></a>
                    </div>
                </div>

                <div class="small-12 medium-6 cell">
                    <h4 class = "no-spacing add-padding no-bot-padding center-desktop dark-color-invert">Commit to the Vision</h4>
                    <p class = "no-top-padding margin-bottom dark-color-invert">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae dolore dolores error exercitationem illo labore magnam modi non officiis omnis porro, quisquam sapiente sunt tempora vel velit voluptates voluptatum.</p>
                    <div class="center add-padding">
                        <a href="#"><div class="button">Sign the Commitment</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>












<?php get_footer();
