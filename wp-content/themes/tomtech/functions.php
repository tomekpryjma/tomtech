<?php

require_once get_template_directory() . '/inc/hooks/actions.php';

if (! function_exists('dd')) {
    function dd($var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        die();
    }
}