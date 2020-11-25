<?php
/**
 * Template Name: Blog
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
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
                    ),url(http://foothills-bearden.local/wp-content/uploads/2020/11/Events-Header.jpg);
                    background-position: center center;
                    background-size: cover;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "center" >Events</h1>
                    <h4 class = "dark-color-invert center">Bearden Exclusive Events.</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 cell">
                    <h1 class = "add-padding center light-color-invert">Find Events</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 medium-6 cell">
                    <div class="event-card">
                        <div class="event-card-upper">
                            <img src="http://foothills-bearden.local/wp-content/uploads/2020/11/Bearden-About-Us.jpg" alt="">
                            <div class="event-times">
                                <span class="date">July 3, 2020</span>
                                <span class="time">7:00pm</span>
                            </div>
                        </div>
                        <h2>Event Name</h2>
                        <div class="location">
                            <p>The Lighthouse</p>
                            <p>42 Wallaby Way</p>
                            <p>Sydney, Australia</p>
                        </div>

                        <div class="registration-links btn-group">
                            <button><a href="#">Register</a></button>
                            <button><a href="#">More Details</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









<?php get_footer();
