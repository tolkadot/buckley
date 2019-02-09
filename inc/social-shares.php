<?php

add_shortcode('share-me', 'tolka_social_sharing_buttons');

function tolka_social_sharing_buttons() {

        $content = "";
        // Get current page URL
        $tolkaURL = urlencode(get_permalink());
        // Get current page title
        $tolkaTitle = str_replace( ' ', '%20', get_the_title());

        $twitterURL = 'https://twitter.com/intent/tweet?text='.$tolkaTitle.'&amp;url='.$tolkaURL.'&amp;';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$tolkaURL;
        $googleURL = 'https://plus.google.com/share?url='.$tolkaURL;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$tolkaURL.'&amp;title='.$tolkaTitle;


        // Add sharing button at the end of page/page content
        $content .= '<div class="tolka-social">';
        $content .= '<h5>Share this </h5> <a class="tolka-link tolka-twitter" href="'. $twitterURL .'" target="_blank"><i class="fa fa-twitter-square"></i></a>';
        $content .= '<a class="tolka-link tolka-facebook" href="'.$facebookURL.'" target="_blank"><i class="fa fa-facebook-square"></i></a>';
        $content .= '<a class="tolka-link tolka-googleplus" href="'.$googleURL.'" target="_blank"><i class="fa fa-google-plus-square"></i></a>';
        $content .= '<a class="tolka-link tolka-linkedin" href="'.$linkedInURL.'" target="_blank"><i class="fa fa-linkedin"></i></a>';
        $content .= '</div>';

        return $content;
};
