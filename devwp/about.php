<?php
/**
 * Template Name: About Template
 *
 * The Contact Page of the Bearden Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Bearden
 * @since 1.0.0
 */

get_header(); ?>


    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background" style = "background: linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
                    ),url(<?php the_field('header_image'); ?>);
                    background-position: center center;
                    background-size: cover;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "center" >The Vision</h1>
                        <h3 class = "knockout-title">One Church. Two Locations.</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 cell">
                    <h3 class = "no-spacing add-padding no-bot-padding">The Vision Behind The Mission</h3>
                    <p class = "no-top-padding margin-bottom">Why are we starting a second location in Bearden?
                        In short, Jesus commands the church to make disciples everywhere all over the world. This is what is known as the Great Commission from Matthew 28:18-20.
                        Our goal is to be obedient to the Great Commission right here in the GREATER KNOXVILLE AREA. Here are a few statistics for why we are compelled to fight for Knoxville:</p>

                    <div class="stat-line lr-padding">
                        <i class="fas fa-cross ico-padding-1"></i> <h4 class = "inline"> In 2019, Knoxville made the top 100 most post-Christian cities in America. There are over 19,000 cities in America.</h4>
                    </div>

                    <hr >

                    <div class="stat-line lr-padding">
                        <i class="fas fa-church"></i> <h4 class = "inline"><span class="stat-number">33%</span> of Knoxville is unchurched. That is up from 29% in 2015. WE ARE GETTING MORE AND MORE POST CHRISTIAN EVERY YEAR!</h4>
                    </div>

                    <hr>

                    <div class="stat-line lr-padding">
                        <i class="fas fa-users"></i> <h4 class = "inline">There are over 1.1 million people in the great Knoxville area. That is over 350,000 people who are unchurched.</h4>
                    </div>

                    <hr>

                    <div class="stat-line lr-padding padding-bottom">
                        <i class="fas fa-arrow-circle-down ico-padding-1"></i> <h4 class = "inline">A 2018 study reports that 1 out 4 residents in Knoxville live below the poverty line.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width lb-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12">
                    <h3 class = "no-spacing add-padding no-bot-padding center dark-color-invert">What Now?</h3>
                </div>
                <div class="small-12 cell">
                    <h4 class = "no-spacing add-padding no-bot-padding dark-color-invert left">Commit to the Vision</h4>
                    <p class = "no-top-padding margin-bottom dark-color-invert">Over the upcoming months, we will work to build a launch team in the Knoxville area that will work together to launch Foothills Church Bearden. If you want to take the next step of committing to being a part of what God is doing at the Bearden location of Foothills Church, then we ask that you would click the button below. There you can commit to attend Basecamp and become a partner at FC, join a small group in Knoxville, attend launch team events throughout 2021, and use your time, talents, and resources to help launch FC Bearden in the fall of 2021.</p>
                    <div class="center add-padding">
                        <a href="https://foothillschurch.churchcenter.com/people/forms/195108"><div class="button button-sd">Join the Launch Team</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();