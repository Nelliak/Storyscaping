<?php
/*
* Plugin Name: Social media icons
* Description: This is an animated social media icons plugin for a storyscaping project. The plugin is based on HTML, CSS and PHP
* Plugin URI: https://miglepdkt.com/storyscaping/wp-content/plugins/social-media-icons
* Version: 0.2.2
* Author: Migle, Nela, Monika
* Author URI: https://miglepdkt.com/storyscaping/wp-content/plugins/social-media-icons
* License: GPL2
*/

# Creating an animated social media icons 
function social_media_icons()
{
$content = '';
$content .= '<div class="footer">';
$content .= '<ul class="social-network social-circle">';
$content .= '<li><a class="icoLinkedin" href="https://www.linkedin.com/company/th-langs-hf-vuc/?originalSubdomain=dk" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>';
$content .= '<li><a class="icoTwitter" href="https://twitter.com/thlangs_hf_vuc" title="Twitter"><i class="fa fa-twitter"></i></a></li>';
$content .= '<li><a class="icoFacebook" href="https://www.facebook.com/ThLangsHFVUC" title="Facebook"><i class="fa fa-facebook"></i></a></li>';
$content .= '<li><a class="icoInstagram" href="https://www.instagram.com/thlangsskole/" title="Instagram"><i class="fa fa-instagram"></i></a></li>';
$content .= '</ul>';
$content .= '</div>';

return $content;

}

#First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the social media icons

add_shortcode('show_social_media_icons','social_media_icons');

# Take action - activate it


function register_styles_for_social_media_icons() 
    {
    wp_enqueue_style('Cloud','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('mystyleCSS',plugins_url('social-media-icons/style.css'));;

    }

?>

