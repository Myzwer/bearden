<?php
/**
 * Header file for the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/aa36ddf53c.js" crossorigin="anonymous"></script>
    <script src="https://js.churchcenter.com/modal/v1"></script>
<?php wp_head(); ?>
</head>

<div class="topnav" id="myTopnav">
<!--    <div class = "logo">
        <a href="http://charisinaction.org/">
            <img src = "http://starter-template.local/wp-content/uploads/2020/03/Logo.png" alt = "logo">
        </a>
    </div>-->

    <div class = "pushypushy">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
</div>












<body <?php body_class(); ?>>