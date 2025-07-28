<?php
/* Local configuration for Roundcube Webmail */

// ----------------------------------
// SQL DATABASE
// ----------------------------------
$config['db_dsnw'] = 'mysql://root:@localhost/roundcube';

// ----------------------------------
// IMAP
// ----------------------------------
$config['default_host'] = 'localhost'; // Use localhost for hMailServer on the same PC
$config['default_port'] = 143; // Default IMAP port for hMailServer

// ----------------------------------
// SMTP
// ----------------------------------
$config['smtp_server'] = 'localhost'; // hMailServer SMTP
$config['smtp_port'] = 25; // Default SMTP port
$config['smtp_user'] = '%u'; // Use IMAP username for SMTP
$config['smtp_pass'] = '%p'; // Use IMAP password for SMTP

$config['imap_conn_options'] = [
    'ssl' => ['verify_peer' => false, 'verify_peer_name' => false],
];

// ----------------------------------
// ENCRYPTION
// ----------------------------------
$config['des_key'] = '3SCozu2Jf6fwnT0AAsPqJvRV';

// ----------------------------------
// PLUGINS
// ----------------------------------
$config['plugins'] = ['xskin'];

// ----------------------------------
// SKIN
// ----------------------------------
$config['skin'] = 'outlook_plus';
$config['license_key'] = 'RCP-wZpEEXwF3Gs0';

// ----------------------------------
// SUPPORT
// ----------------------------------
$config['support_url'] = '';
?>