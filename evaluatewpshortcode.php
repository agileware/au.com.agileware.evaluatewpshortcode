<?php

require_once 'evaluatewpshortcode.civix.php';
use CRM_Evaluatewpshortcode_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/ 
 */
function evaluatewpshortcode_civicrm_config(&$config) {
  _evaluatewpshortcode_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function evaluatewpshortcode_civicrm_install() {
  _evaluatewpshortcode_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function evaluatewpshortcode_civicrm_enable() {
  _evaluatewpshortcode_civix_civicrm_enable();
}

/**
 * Implement hook_civicrm_alterMailParams
 *
 * The main function to evaluate shortcode
 */
function evaluatewpshortcode_civicrm_alterMailParams( &$params, $context ) {
	if ( !function_exists( 'do_shortcode' ) ) {
		return;
	}
	$params['html'] = do_shortcode( $params['html'] );
}
