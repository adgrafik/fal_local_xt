<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$registerDriver = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Resource\\Driver\\DriverRegistry');
$registerDriver->registerDriverClass(
	'AdGrafik\\FalLocalXt\\Driver\\LocalXTDriver',
	'LocalXT',
	'Local XT filesystem',
	'FILE:EXT:fal_local_xt/Configuration/FlexForm/LocalXTDriver.xml'
);

?>