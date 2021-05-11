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
                    ),url(http://beardentemp.flywheelstaging.com/wp-content/uploads/2020/11/Events-Header.jpg);
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



    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                ?>
                <div class="small-12 medium-6 cell">
                    <div class="event-card">
                        <div class="event-card-upper">
                            <img src="<?php the_post_thumbnail(); ?>" alt="">
                            <div class="event-times">
                                <span class="date"><?php the_field( "date", $post->ID); ?></span>
                                <span class="time"><?php the_field( "start_time", $post->ID); ?></span>
                            </div>
                        </div>
                        <h2><?php the_title(); ?></h2>
                        <div class="location">
                            <p><?php the_field( "location_name", $post->ID); ?></p>
                            <?php the_field( "address", $post->ID); ?>
                        </div>

                        <?php
                        echo '<div class="registration-links btn-group">';
                        echo '<a href="';
                        the_field("registration_link", $post->ID);
                        echo '"><button class = "blue-button">Register</button></a>';
                            echo '<a href="' . get_permalink() . '"><button> More Info</button></a>';
                        echo '</div>';
                        ?>

                    </div>
                </div>

            <?php
            endwhile;
            else:
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
            ?>
        </div>
    </div>
    </div>











<?php get_footer();
