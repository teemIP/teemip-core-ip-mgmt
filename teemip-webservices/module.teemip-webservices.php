<?php
/*
 * @copyright   Copyright (C) 2010-2026 teemIP
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'teemip-webservices/3.2.2',
	array(
		// Identification
		//
		'label' => 'TeemIp WEB Services',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'teemip-ip-mgmt/3.2.2',
		),
		'mandatory' => true,
		'visible' => false,

		// Components
		//
		'datamodel' => array(
			'vendor/autoload.php',
			'src/Hook/TeemIpServices.php',
		),
		'data.struct' => array(
		),
		'data.sample' => array(
		),
		
		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => '',
		
		// Default settings
		//
		'settings' => array(
		),
	)
);
