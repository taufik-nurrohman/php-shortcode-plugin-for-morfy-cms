<?php

/**
 * `{php}` Shortcode for Morfy CMS 1.1.0+
 *
 * @package Morfy
 * @subpackage Plugins
 * @author Taufik Nurrohman <http://latitudu.com>
 * @copyright 2015 Romanenko Sergey / Awilum
 * @version 1.0.0
 *
 */

Shortcode::add('php', function($attr, $content) {
    ob_start();
    eval($content);
    return ob_get_clean();
});