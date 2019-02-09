<?php


add_shortcode('tolka-hide-popup-text', 'hide_popup_text');

function hide_popup_text() {

        $content = "<style>.td-text{display:none}</style>";
        // Get current page URL

        return $content;
};