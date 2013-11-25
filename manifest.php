<?php

$manifest = array (
	0 => array (
			'acceptable_sugar_versions' => 
			array (
				0 => '6.*',
			),
		),
	1 => array (
			'acceptable_sugar_flavors' => 
			array (
				0 => 'PRO',
			),
		),
  'readme' => '',
  'key' => '',
  'author' => 'YOUR NAME',
  'description' => 'PROJECT DESCRIPTION',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'CUSTOM_PROJ',
  'published_date' => '2013-10-10 20:11:14',
  'type' => 'module',
  'version' => 1.0,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'CUSTOM_PROJ',
  'copy' => 
  array(   
	0 =>
	array(
		'from' => '<basepath>/SugarModules/modules/Accounts/custom_code/customscripts.php',
		'to' => 'custom/modules/Accounts/custom_code/customscripts.php',
	)
  ),
);