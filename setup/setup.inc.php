<?php
/**
 * EGroupware - guardiankey - setup
 *
 * @link http://www.egroupware.org
 * @package guardiankey
 */

$setup_info['guardiankey']['name']    = 'guardiankey';
$setup_info['guardiankey']['title']   = 'GuardianKey';
$setup_info['guardiankey']['version'] = '1.0';
$setup_info['guardiankey']['app_order'] = 1;
$setup_info['guardiankey']['enable']  = 2;
$setup_info['guardiankey']['autoinstall'] = true;	// install automatically on update

$setup_info['guardiankey']['author'] = 'Nathan Gray';
$setup_info['guardiankey']['maintainer'] = array(
	'name'  => 'EGroupware GmbH',
	'url'   => 'http://www.egroupware.org',
);
$setup_info['guardiankey']['license']  = 'GPL';
$setup_info['guardiankey']['description'] = 'Online document editing with guardiankey Libre Office Online';

/* The hooks this app includes, needed for hooks registration */
//$setup_info['guardiankey']['hooks']['settings'] = 'EGroupware\guardiankey\Preferences::settings';
$setup_info['guardiankey']['hooks']['admin'] = 'EGroupware\guardiankey\Admin::admin_sidebox';
$setup_info['guardiankey']['hooks']['config'] = 'EGroupware\guardiankey\Admin::config';
$setup_info['guardiankey']['hooks']['config_validate'] = 'EGroupware\guardiankey\Admin::validate';
$setup_info['guardiankey']['hooks']['csp-frame-src'] = 'EGroupware\guardiankey\Hooks::csp_frame_src';
$setup_info['guardiankey']['hooks']['filemanager-editor-link'] = 'EGroupware\guardiankey\Hooks::getEditorLink';
/* Tie into filemanager */
$setup_info['guardiankey']['hooks']['etemplate2_before_exec'] = 'EGroupware\guardiankey\Ui::index';


/* Dependencies for this app to work */
$setup_info['guardiankey']['depends'][] = array(
	'appname' => 'filemanager',
	'versions' => array('17.1')
);
$setup_info['guardiankey']['depends'][] = array(
	'appname' => 'api',
	'versions' => array('17.1')
);
