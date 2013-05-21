<?php

########################################################################
# Extension Manager/Repository config file for ext "static_info_tables".
#
# Auto generated 16-12-2011 20:46
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Info Tables',
	'description' => 'Data and API for countries, languages and currencies.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '6.0.0',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Stanislas Rolland/René Fritz',
	'author_email' => 'typo3@sjbr.ca',
	'author_company' => 'SJBR',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.0.6-6.2.99',
			'php' => '5.3.7-0.0.0',
		),
		'conflicts' => array(
			'sr_static_info' => '',
			'cc_infotablesmgm' => '',
			'static_info_tables_extbase' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => ''
);

?>