<?php
/*
Plugin Name: CI Apr calculator
Plugin URI: https://www.calculator.io/apr-calculator/
Description: APR calculator that uses the formula APR = ((I + F) / P) / N can help borrowers understand the true cost of loans and how to calculate APR on a loan.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_apr_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for APR Calculator by Calculator.iO";

function display_ci_apr_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">APR Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_apr_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_apr_calculator', 'display_ci_apr_calculator' );