<?php

/*
Plugin Name: alpha projekt Workaround
Plugin URI: http://alpha-projekt.de
Description: Standardfunktionen für Theme- &amp; WordPress-Entwicklung
Version: 15.2.28
Author: Roman Hanzlik // alpha projekt GbR
Author URI: http://www.alpha-projekt.de/kontakt/
License: Attribution-NonCommercial 4.0 International (https://goo.gl/L9oQ68)
*/

require 'plugin-update-checker/plugin-update-checker.php';
$className = PucFactory::getLatestClassVersion('PucGitHubChecker');
$myUpdateChecker = new $className(
	'https://github.com/smatplacid/alpha-projekt/',
	__FILE__,
	'master'
);

// omment