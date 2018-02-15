<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
	'*' => array(
		'defaultWeekStartDay' => 0,
		'enableCsrfProtection' => true,
		'omitScriptNameInUrls' => 'true',
		'useEmailAsUsername' => true,
		'generateTransformsBeforePageLoad' => true,
		'sendPoweredByHeader' => false,
		'cpTrigger' => 'admin',
		'devMode' => false,
		'usePathInfo' => true,

		// MailChimp Plugin Settings https://github.com/aelvan/mailchimp-subscribe-craft
		'mcsubApikey' => 'xxxxxxxxxxxxxxxxxxxxx-us2',
		'mcsubListId' => '2fd6ec09cf',
		'mcsubDoubleOptIn' => false

	),

  // Live (production) environment
    '.ie'  => array(
		'siteUrl' => 'http://www.fmco.ie/',
		'isSystemOn' => true,
		'devMode' => true,
		'allowAutoUpdates' => false,
		'environmentVariables' => array(
			'baseUrl'  => 'http://www.fmco.ie/',
			'basePath' => '/home/ibrennan/webapps/fmco2018/'
		),
		),
		// Dev (staging) environment
    'ibrennan.webfactional.com'  => array(
			'siteUrl' => 'http://ibrennan.webfactional.com',
			'isSystemOn' => true,
			'devMode' => true,
			'environmentVariables' => array(
				'baseUrl'  => 'http://ibrennan.webfactional.com/',
				'basePath' => '/home/ibrennan/webapps/fmco2018/'
			),
			),
    // RMM Local (development) environment
    '.local'  => array(
		'siteUrl' => 'http://fmco.local/',
		'isSystemOn' => true,
		'devMode' => true,
		'craftEnv' => 'local',
		'environmentVariables' => array(
			'baseUrl'  => 'http://fmco.local/',
			'basePath' => '/Users/johnhenry/Sites/fmco-local/'
		),
	),
	// WorkGroup Local (development) environment
    'localhost:8888'  => array(
		'siteUrl' => 'http://localhost:8888/186007-FMco/',
		'isSystemOn' => true,
		'devMode' => true,
		'craftEnv' => 'local',
		'environmentVariables' => array(
			'baseUrl'  => 'http://localhost:8888/186007-FMco/',
			'basePath' => '/Applications/MAMP/htdocs/186007-FMco/'
		),
    )
  );
