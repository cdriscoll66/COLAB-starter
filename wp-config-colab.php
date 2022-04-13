<?php

/**
 * Disable WordPress Automatic Updates
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * Disable Pantheon Login Form Modifications
 */
if (!defined('RETURN_TO_PANTHEON_BUTTON')) :
	define('RETURN_TO_PANTHEON_BUTTON', false);
endif;

/**
 * Redirect Pantheon Live Environment To Custom Domain
 *
 * @link https://pantheon.io/docs/redirects/#redirect-to-a-common-domain
 */
// if (php_sapi_name() !== 'cli' && $_SERVER['PANTHEON_ENVIRONMENT'] === 'live') :
// 	$custom_domain = 'www.exampleproject.com';
//
// 	if ($_SERVER['HTTP_HOST'] !== $custom_domain) :
// 		header('Location: ' . $scheme . '://' . $custom_domain . $_SERVER['REQUEST_URI'], true, 301);
// 		exit();
// 	endif;
// endif;

/**
 * Redirect Pantheon Environment To Custom Domains
 *
 * @link https://pantheon.io/docs/redirects/#redirect-to-a-common-domain
 */
// if (php_sapi_name() !== 'cli') :
// 	$custom_domains = [
// 		'live' => 'www.exampleproject.com', // @TODO explore automated primary domain
// 		'test' => '',
// 		'dev' => '',
// 		'updates' => '',
// 		'release' => '',
// 		'develop' => '',
// 	];
//
// 	if (isset($custom_domains[$_SERVER['PANTHEON_ENVIRONMENT']])) :
// 		$custom_domain = $custom_domains[$_SERVER['PANTHEON_ENVIRONMENT']];
//
// 		if ($_SERVER['HTTP_HOST'] !== $custom_domain) :
// 			header('Location: ' . $scheme . '://' . $custom_domain . $_SERVER['REQUEST_URI'], true, 301);
// 			exit();
// 		endif;
// 	endif;
// endif;

/**
 * Multi-Environment WP_DEBUG
 */
if (php_sapi_name() !== 'cli' && in_array($_ENV['PANTHEON_ENVIRONMENT'], [
	'live',
	'test',
	'updates',
	'release',
])) :
	define('WP_DEBUG',         true);
	define('WP_DEBUG_LOG',     true);
	define('WP_DEBUG_DISPLAY', false);
else :
	define('WP_DEBUG',         true);
	define('WP_DEBUG_LOG',     true);
	define('WP_DEBUG_DISPLAY', true);
endif;

/**
 * Disable Built-in WP-Cron
 *
 * Use external service like SetCronJob
 * https://www.setcronjob.com/account/cronjobs
 */
// define('DISABLE_WP_CRON', true);

/**
 * Disable Built-in WP-Cron
 *
 * Use external service like SetCronJob
 * https://www.setcronjob.com/account/cronjobs
 */
// if (php_sapi_name() !== 'cli' && in_array($_ENV['PANTHEON_ENVIRONMENT'], [
// 	'live',
// 	'test',
// 	'release',
// ])) :
// 	define('DISABLE_WP_CRON', true);
// endif;

/**
 * Multi-Environemnt SMTP Switch
 *
 * @link https://docs.google.com/document/d/1y5uCDAX-QgKZDXB2cMSK95c7klXHxF9WqS3-f2V7d84/edit#
 */
// define('WPMS_ON', true);
// if ($_ENV['PANTHEON_ENVIRONMENT'] === 'live') :
//     define('WPMS_MAILER',           'sendgrid');
//     define('WPMS_SENDGRID_API_KEY', 'YOUR_KEY_HERE');
// else:
//     define('WPMS_SMTP_HOST',    'smtp.mailtrap.io'); // The SMTP mail host.
//     define('WPMS_SMTP_PORT',    465); // The SMTP server port number.
//     define('WPMS_SSL',          'ssl'); // Possible values '', 'ssl', 'tls' - note TLS is not STARTTLS.
//     define('WPMS_SMTP_AUTH',    true); // True turns it on, false turns it off.
//     define('WPMS_SMTP_USER',    'SMTP_USERNAME'); // SMTP authentication username, only used if WPMS_SMTP_AUTH is true.
//     define('WPMS_SMTP_PASS',    'SMTP_PASSWORD'); // SMTP authentication password, only used if WPMS_SMTP_AUTH is true.
//     define('WPMS_SMTP_AUTOTLS', true); // True turns it on, false turns it off.
// endif;

/**
 * Multisite
 *
 * Not currently being leveraged, but enabled for futureproofing to show us
 * if anything we are implementing is incompatible with multisite.
 */
// define('WP_ALLOW_MULTISITE', true);

/**
 * Enable Direct File System Access
 */
// define('FS_METHOD', 'direct');