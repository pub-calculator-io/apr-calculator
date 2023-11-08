=== APR Calculator by Calculator.iO ===
Contributors: calculatorio
Tags: 
Requires at least: 5.0
Tested up to: 6.4.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

APR calculator that uses the formula APR = ((I + F) / P) / N can help borrowers understand the true cost of loans and how to calculate APR on a loan.

== Description ==

APR calculator that uses the formula APR = ((I + F) / P) / N can help borrowers understand the true cost of loans and how to calculate APR on a loan.

__Shortcode__

Use the APR Calculator shortcode:

`[ci_apr_calculator]`

Libraries in use:
1. https://mathjs.org/
2. https://katex.org/
3. https://github.com/aFarkas/lazysizes
4. https://github.com/RobinHerbots/Inputmask
5. https://air-datepicker.com/
6. https://www.chartjs.org/

== Installation ==

1. Upload the /ci_apr_calculator/ folder to the /wp-content/plugins/ directory.
2. Activate the [APR Calculator](https://www.calculator.io/apr-calculator/ "APR Calculator Homepage") plugin through the "Plugins" menu in WordPress.

== Usage ==
* Add the shortcode `[ci_apr_calculator]` to your page or post and configure default mortgage parameters.
* If you are using widgets, just add the APR Calculator to the sidebar through the `Appearance -> Widgets -> APR Calculator` menu in WordPress.
* Add the following code: `<?php display_ci_apr_calculator(); ?>` to your template where you would like the APR Calculator to appear.

== Screenshots ==
1. The APR Calculator Input Form.
2. The APR Calculator Calculation Results.

== Changelog ==

= 1.0.0 =
* Initial release