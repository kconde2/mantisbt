<?php
$g_hostname               = 'mysql';
$g_db_type                = 'mysqli';
$g_database_name          = 'bugtracker';
$g_db_username            = 'root';
$g_db_password            = 'root';

$g_default_timezone       = 'UTC';

$g_crypto_master_salt     = '7TRvfGCBktvwI+CG9a071SRNDNfKDL1Se79JfpOsql8=';

# Mail configuration


/**
 * Webmaster email address. This is shown publicly at the bottom of each page
 * and thus may be susceptible to being detected by spam email harvesters.
 * @global string $g_webmaster_email
 */
$g_webmaster_email		= 'kconde@kernix.com';

/**
 * the sender email, part of 'From: ' header in emails
 * @global string $g_from_email
 */
$g_from_email			= 'noreply@example.com';

/**
 * the sender name, part of 'From: ' header in emails
 * @global string $g_from_name
 */
$g_from_name			= 'Kernix Mantis Bug Tracker';

/**
 * the return address for bounced mail
 * @global string $g_return_path_email
 */
$g_return_path_email	= 'admin@example.com';

$g_phpMailer_method = PHPMAILER_METHOD_SMTP;

$g_smtp_host = 'maildev';
$g_smtp_port = 25;

$g_log_level = LOG_EMAIL | LOG_EMAIL_RECIPIENT;
$g_log_destination = 'file:/var/log/mantisbt.log';
