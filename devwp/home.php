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
                    <h4 class = "dark-color-invert center">Bearden Exclusive Events</h4>
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

    <?php
    if (have_posts()) :
    while (have_posts()) : the_post();
    ?>

    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 medium-6 cell">
                    <div class="event-card">
                        <div class="event-card-upper">
                            <img src="http://foothills-bearden.local/wp-content/uploads/2020/12/Bearden-Bible-Study.jpg" alt="">
                            <div class="event-times">
                                <span class="date">January 24</span>
                                <span class="time">5:00pm</span>
                            </div>
                        </div>
                        <h2>Bearden Bible Study</h2>
                        <div class="location">
                            <p>Hilton Garden Inn</p>
                            <p>6200 Papermill Dr NW</p>
                            <p>Knoxville, TN 37919</p>
                        </div>

                        <?php
                        echo '<div class="registration-links btn-group">';
                            echo '<button><a href="https://foothillschurch.churchcenter.com/registrations/events/653099">Register</a></button>';
                            echo '<button>';
                        echo '<a href="' . get_permalink() . '"> More Info</a>';
                            echo '</button>';
                        echo '</div>';
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    endwhile;
    else:
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    ?>









<?php get_footer();
