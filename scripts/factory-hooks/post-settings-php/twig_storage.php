<?php

/**
 * @file
 * Factory hook implementation for twig storage directory.
 *
 * @see https://docs.acquia.com/site-factory/tiers/paas/workflow/hooks
 *
 * phpcs:disable DrupalPractice.CodeAnalysis.VariableAnalysis
 */

if (!empty($settings['php_storage']['twig']['directory']) &&
    is_string($settings['php_storage']['twig']['directory']) &&
    !empty($GLOBALS['gardens_site_settings']['conf']['acsf_db_name'])) {
  $settings['php_storage']['twig']['directory'] = rtrim($settings['php_storage']['twig']['directory'], '/') . '/' . $GLOBALS['gardens_site_settings']['conf']['acsf_db_name'];
}
