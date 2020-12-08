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

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background full-background-small" style = "background: linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
                    ),url(http://foothills-bearden.local/wp-content/uploads/2020/12/Bearden-Bible-Study.jpg);
                    background-position: top center;
                    background-size: cover;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "center" >Bearden Bible Study</h1>
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
                                <p>November 20 - November 20</p>
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
                                <p>7:00-9:00pm</p>
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
                                <p>6200 Papermill Dr NW</p>
                                <p>Knoxville, TN 37919</p>
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
                    <a href="#"><div class="button">Register</div></a>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
