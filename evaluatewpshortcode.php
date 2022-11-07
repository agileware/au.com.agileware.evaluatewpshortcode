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
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function evaluatewpshortcode_civicrm_postInstall() {
  _evaluatewpshortcode_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function evaluatewpshortcode_civicrm_uninstall() {
  _evaluatewpshortcode_civix_civicrm_uninstall();
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
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function evaluatewpshortcode_civicrm_disable() {
  _evaluatewpshortcode_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function evaluatewpshortcode_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _evaluatewpshortcode_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function evaluatewpshortcode_civicrm_entityTypes(&$entityTypes) {
  _evaluatewpshortcode_civix_civicrm_entityTypes($entityTypes);
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
