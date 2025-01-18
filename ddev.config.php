<?php

/**
 * DDEV-specific configurations for NextCloud.
 * 
 * @see https://docs.nextcloud.com/server/latest/admin_manual/configuration_server/config_sample_php_parameters.html
 */

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
    'mail_domain' => $primary_url,
    'mail_smtphost' => 'localhost',
    'mail_smtpport' => getenv('DDEV_HOST_MAILPIT_PORT'),
];
