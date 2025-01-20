<?php

/**
 * DDEV-specific configurations for NextCloud.
 * 
 * @see https://docs.nextcloud.com/server/latest/admin_manual/configuration_server/config_sample_php_parameters.html
 */

// Set the correct security policy
header('Strict-Transport-Security: max-age=15552000; includeSubDomains');

// Retrieve the DDEV URL
$primary_url = getenv('DDEV_PRIMARY_URL');
$url = parse_url($primary_url);

// Set the NextCloud Config
$CONFIG = [
    'memcache.local' => '\OC\Memcache\APCu',
    'maintenance_window_start' => 1,
    'default_phone_region' => 'US',
    'trusted_domains' => [
        $url['host']
    ],
    'overwrite.cli.url' => $primary_url,
    'mail_smtpmode' => 'null',
    'appcodechecker' => false,
    'updatechecker' => false,
    'check_for_working_htaccess' => false,
    'loglevel' => 1,
    'mail_smtpmode' => 'smtp',
    'mail_from_address' => getenv('DDEV_PROJECT'),
    'mail_domain' => getenv('DDEV_TLD'),
    'mail_smtphost' => 'localhost',
    'mail_smtpport' => 1025,
    'htaccess.RewriteBase' => '/',
    'debug' => true,
    'trusted_proxies' => [
        $_SERVER['SERVER_ADDR'] ?? ''
    ],
    'overwritehost' => $url['host'],
];
