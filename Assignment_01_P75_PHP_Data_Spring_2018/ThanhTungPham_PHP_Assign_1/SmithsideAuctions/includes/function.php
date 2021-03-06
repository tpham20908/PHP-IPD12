<?php

/*
 * LoadContent
 * Load the content
 * @param $default
 */

function loadContent($where, $default='') {
    // get the content from the url
    // sanitize it for security reason
    $content = filter_input(INPUT_GET, $where, FILTER_SANITIZE_STRING);
    $default = filter_var($default, FILTER_SANITIZE_STRING);
    // the where wasn't anything on the url, then use the default
    $content = (empty($content))? $default : $content;
    
    /*
    // sidebar process
    $sidebar = filter_input(INPUT_GET, $where, FILTER_SANITIZE_STRING);
    if ($sidebar) {
        $html = include 'contents/' . $sidebar . '.php';
        return $html;
    }
    */
    
    // if we have content, then get it and pass it back
    if ($content) {
        // sanitize the date to prevent hacking
        $html = include 'contents/' . $content . '.php';
        return $html;
    }
}
