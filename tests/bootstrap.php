<?php

if (!defined('PHPUNIT_RUN')) {
	define('PHPUNIT_RUN', 1);
}

require_once __DIR__.'/../../../lib/base.php';

if(!class_exists('PHPUnit_Framework_TestCase')) {
	require_once('PHPUnit/Autoload.php');
}

\OC::$composerAutoloader->addPsr4('Test\\', OC::$SERVERROOT . '/tests/lib/', true);

\OC_App::loadApp('files_paperhive');
