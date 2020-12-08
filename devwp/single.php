<?php
/**
* Template Name: Posts Page
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @since 1.0
* @version 1.0
*/

get_header(); ?>

<!--Get the url and save it to a variable for use later -->
<?php
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

    <div class="grid-container full-width">
        <?php echo '<div class="grid-x grid-padding-x full-background full-background-small" style = "background: linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
                    ),url('. $url.');
                    background-position: top center;
                    background-size: cover;">';?>
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "center" ><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background padding-bottom">
        <div class = "grid-container ">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 medium-6 large-4 cell info-card box-shadow">
                    <div class="grid-x grid-padding-x">
                        <div class="small-2 cell">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="small-10 cell">
                            <div class="card-content">
                                <p><?php the_field( "date"); ?> - <?php the_field( "end_date"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="small-12 medium-6 large-4 cell info-card box-shadow">
                    <div class="grid-x grid-padding-x">
                        <div class="small-2 cell">
                            <i class="far fa-clock" id ="big-icon"></i>
                        </div>
                        <div class="small-10 cell">
                            <div class="card-content">
                                <p><?php the_field( "start_time"); ?> - <?php the_field( "end_time"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="small-12 medium-6 large-4 cell info-card-long box-shadow">
                    <div class="grid-x grid-padding-x">
                        <div class="small-2 cell">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="small-10 cell">
                            <div class="card-content">
                                <?php the_field( "address"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background padding-bottom">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="small-12 medium-6 large-4 add-padding center">
                <img class = "box-shadow rounded" src="http://foothills-bearden.local/wp-content/uploads/2020/12/Bearden-Bible-Study-Logo.png" alt="Promotional Stock Photo">
            </div>
            <div class="small-12 medium-6 large-8 cell">
                <h1 class="light-color-invert">Details</h1>
                <p class="no-spacing tb-padding">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consectetur
                    consequuntur deserunt dolore doloremque eum, excepturi, illo laudantium libero optio qui suscipit
                    tempora. Expedita id iusto nihil placeat repellendus sed.</p>
                <div class="padding-top">
                    <a href="#"><div class="button">Register 1</div></a>
                    <a href="#"><div class="button">Register 2</div></a>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width inverted-background">
        <div class="grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12">
                    <h3 class="no-spacing add-padding no-bot-padding center dark-color-invert">Secondary Section</h3>
                </div>
                <div class="small-12 cell">
                    <h4 class="no-spacing add-padding no-bot-padding dark-color-invert left">Here's more info that's
                        different!</h4>
                    <p class="no-top-padding margin-bottom dark-color-invert">Over the next year, we will work to build
                        a launch team in the Knoxville area that will work together to launch Foothills Church Bearden.
                        If you want to take the next step of committing to being a part of what God is doing at the
                        Bearden location of Foothills Church, then we ask that you would click the button below. There
                        you can commit to attend Basecamp and become a partner at FC, join a small group in Knoxville,
                        attend launch team events throughout 2021, and use your time, talents, and resources to help
                        launch FC Bearden in the fall of 2021.</p>
                    <div class="center add-padding">
                        <a href="#">
                            <div class="button">Second CTA</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="full-width main-background padding-bottom">
        <div class = "add-medium-padding">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 center cell">
                    <h1 class = "light-color-invert add-padding">FAQ</h1>
                </div>

                <div class="small-12 medium-6 large-12 cell">
                    <div class="faq-content">
                        <?php
                        // Start the Repeater Loop
                        if( have_rows('qaa') ):
                            // Card Start
                            // Begin looping data
                            $num = 1;
                            while ( have_rows('qaa') ) : the_row();
                                echo '<div class="faq-question">';
                                echo '<input id="q';
                                echo $num;
                                echo '"type="checkbox" class="panel">';
                                echo '<div class="plus">+</div>';

                                echo '<label for="q';
                                echo $num;
                                echo '" class="panel-title">';
                                the_sub_field('question');
                                echo '</label>';

                                echo '<div class="panel-content">';
                                the_sub_field('answer');
                                echo '</div>';
                                echo '</div>';
                                $num++;

                            endwhile;
                        else :
                            // no rows found
                        endif;
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
