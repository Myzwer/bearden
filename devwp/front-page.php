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
                    <h3 class = "add-padding dark-color-invert">We Can't Stay Here.</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 cell">
                    <h3 class = "no-spacing add-padding no-bot-padding">Foothills Church is Coming to Bearden!</h3>
<!--                    <p class = "no-top-padding margin-bottom">Launch Sunday for our Bearden Location will be September 12th at Bearden Middle School!</p>-->
                    <hr >

                    <div class="stat-line lr-padding">
                        <i class="fas fa-map-marker-alt"></i> <h4 class = "inline"> Location - Bearden Middle School</h4>
                    </div>

                    <hr>

                    <div class="stat-line lr-padding">
                        <i class="far fa-calendar-alt"></i> <h4 class = "inline"> Launch Date - September 12th</h4>
                    </div>

                    <hr >

                    <div class="stat-line lr-padding">
                        <i class="far fa-clock"></i> <h4 class = "inline"> Times - 9am or 11am</h4>
                    </div>

                    <hr>

                    <div class="stat-line lr-padding">
                        <i class="fas fa-users"></i> <h4 class = "inline">FC Kids - We have age-appropriate environments for Babies through 5th grade.</h4>
                    </div>

                    <hr>


                    <div class="center add-padding">
                        <a href="/vision"><div class="button">Learn More</div></a>
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
                    <h4 class = "no-spacing add-padding no-bot-padding center-desktop dark-color-invert">Commit to the Vision</h4>
                    <p class = "no-top-padding margin-bottom dark-color-invert height-lock">If you’re interested in learning more about what it would look like to join the Bearden launch team, then fill out our form and we would love to give your more information! Don’t miss out on this chance to be a part of what God is doing through Foothills Church in the Knoxville community.</p>
                    <div class="center add-padding">
                        <a href="https://foothillschurch.churchcenter.com/people/forms/195108"><div class="button">Join The Launch Team</div></a>
                    </div>
                </div>

                <div class="small-12 medium-6 cell">
                    <h4 class = "no-spacing add-padding no-bot-padding center-desktop dark-color-invert">Give to the Vision</h4>
                    <p class = "no-top-padding margin-bottom dark-color-invert height-lock">We trust that the Lord is going to do an amazing work through the Bearden location of Foothills Church. If you want to take part in what He is doing here, then we ask that you would consider giving to the vision of multiplying our location.
                    </p>
                    <div class="center add-padding">
                        <a href="https://foothillschurch.com/give/"><div class="button">Fuel The Vision</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>












<?php get_footer();
