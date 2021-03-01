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
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function evaluatewpshortcode_civicrm_xmlMenu(&$files) {
  _evaluatewpshortcode_civix_civicrm_xmlMenu($files);
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
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function evaluatewpshortcode_civicrm_managed(&$entities) {
  _evaluatewpshortcode_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function evaluatewpshortcode_civicrm_caseTypes(&$caseTypes) {
  _evaluatewpshortcode_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function evaluatewpshortcode_civicrm_angularModules(&$angularModules) {
  _evaluatewpshortcode_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function evaluatewpshortcode_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _evaluatewpshortcode_civix_civicrm_alterSettingsFolders($metaDataFolders);
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
 * Implements hook_civicrm_thems().
 */
function evaluatewpshortcode_civicrm_themes(&$themes) {
  _evaluatewpshortcode_civix_civicrm_themes($themes);
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
