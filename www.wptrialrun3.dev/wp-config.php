<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wptrialrDBw6lwk');

/** MySQL database username */
define('DB_USER', 'wptrialrDBw6lwk');

/** MySQL database password */
define('DB_PASSWORD', '1DOcUiu7LD');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GxheKH;~-hWD9#xtaWD9*+iTP62*+ieH;{xueLH;yubXEA<yubX6yubXI{rnUQ73');
define('SECURE_AUTH_KEY',  'vZC8|wsZVC8|-lSO51!okRG1~-hdKG:~taWD:]wtZW52~+hSO51~-aLH;]xteLH<.');
define('LOGGED_IN_KEY',    'OC:wdZ95_~pWS95_~hOL1;-xhOK]#tpaHD]#xWTA6.*miPLTA6.*miPA6$yfbIE{$');
define('NONCE_KEY',        '-dKG]xtdKH:~-hWD;]xteLH;.taWD9#xta]xieLH2*+lLH;]xtaLH;.ubXEA<.qmM');
define('AUTH_SALT',        'ybQA^rcM7>ynQB}zjUF}vgRB>zkgJ0|vgR8>,oZJ4|vgR1!whRC[zdO85|wdR1_');
define('SECURE_AUTH_SALT', 'yQA7,uqbB7>vfQM7,njUB7,vrcB7>vrcN30@gRN8,!rYJ8|!sZVC}>vZVG:[zgRN1');
define('LOGGED_IN_SALT',   'd:whSD9[-eL51_taK;*paLH#tTD;*+aWH{+iXH;*tTI{+iTE;yjTPA{$mQ7<yjfE');
define('NONCE_SALT',       'kF[zkV8[@oZJ0![-wdZGC:-waGD:-lWG1+xeOK1:~lhHD]#xeaHD]*eaHD]#teaA6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
