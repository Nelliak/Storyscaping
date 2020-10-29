<?php
/*
* Plugin Name: Sweet-plugin
* Description: This is a sweet plugin for a storyscaping project. The plugin is based on HTML, CSS, JS and PHP
* Plugin URI: https://miglepdkt.com/storyscaping/wp-content/plugins/sweet-plugin
* Version: 0.2.8
* Author: Migle, Nela, Monika
* Author URI: https://miglepdkt.com/storyscaping/wp-content/plugins/sweet-plugin
* License: GPL2
*/


#First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the popup
add_shortcode('show_sweet_popup','sweet_popup');

# Take action - activate it
add_action('wp_enqueue_scripts','register_styles_and_scripts_for_sweet_popup');


# Creating a sweet popup
function sweet_popup()
{
$content = '';
$content .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">';
$content .= '<script src="https://kit.fontawesome.com/90f11e08e9.js" crossorigin="anonymous"></script>';
$content .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>';
$content .= '<script src="./script.js"></script>';
$content .= '<div id="overlay" class="cover blur-in">';
$content .= '</div>';
$content .= '<div class="row pop-up">';
$content .= '<div class="box small-6 large-centered">';
$content .= '<a href="#" class="close-button">✖</a>';
$content .= '<h3>#growwiththlangs</h3>';
$content .= '<p class="animate__animated animate__bounceInLeft">Share moments at school on your Instagram by using hashtag #growwiththlangs.</p>';
$content .= '<p class="animate__animated animate__bounceInRight"> "Be happy for this moment. This moment is your life." </p><a href="https://www.facebook.com/ThLangsHFVUC"><i style="font-size: 48px; color: Dodgerblue;"class="fab fa-facebook"></i></a><a href = "https://www.instagram.com/thlangshf_vuc/"><i style="font-size: 48px; color: #E1306C; margin-left:10px;" class="fab fa-instagram"></i></a>';
$content .= '</div>';
$content .= '</div>';

return $content;

}


function register_styles_and_scripts_for_sweet_popup() 
    {
    wp_enqueue_style('Cloudfare','https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css');
    wp_enqueue_style('CSSfaundation','https://cdn.jsdelivr.net/foundation/5.3.3/css/foundation.css');
    wp_enqueue_style('MyCSS',plugins_url('sweet-plugin/style.css'));
   
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('CustomScript', plugins_url('sweet-plugin/script.js'), array('jquery'), null, true);
    }
