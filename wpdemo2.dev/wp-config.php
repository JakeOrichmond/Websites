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
define('DB_NAME', 'wpdemo2DBj27i');

/** MySQL database username */
define('DB_USER', 'wpdemo2DBj27i');

/** MySQL database password */
define('DB_PASSWORD', 'LrzRlA7Fqz');

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
define('AUTH_KEY',         '|hS|-C:oZ14|ZOwloN}kod|wNRGvkoF|ZNR[opti]*.aLtimL]pP_tT2x-lD_aeS+');
define('SECURE_AUTH_KEY',  'WxtH#aP_txSD-l9]SDjUY}^UFzY3,YM^rvI3uf3,bM^rA{fP<yMQAdN!g4[dhR0!J');
define('LOGGED_IN_KEY',    'unY^QAI$q3<bfU.uI6AyX3.G4dRV:~G1wgkC!VK~oJNCkV}@RVJzorJ4cY!v;2#');
define('NONCE_KEY',        'fEXMQ<nI6AyX3<PEI<mEI6eP<{*sgkC!VJN|kJN7vU}0|NBF,jB}0nN!vzY7vzn');
define('AUTH_SALT',        'Ksdh!|dC-lpN:kod|-ORGTHL.iAE2bPT;.LAD+a26]aPS]pD26tT15]SHL_i9D2,y');
define('SECURE_AUTH_SALT', 'YU@rvhS+ptL]ila]~WKthl9:dSV:sGO9wW58:VKO|lCG5I6Ayi{*.bA*quL]imb.x');
define('LOGGED_IN_SALT',   ',YJynqI<fjY^r:1|OCG~d58:dRV:@G48wV48}VJN|kCG4kY}0|NCF@c9DeiW*txP;');
define('NONCE_SALT',       's#+D26tT]+*eD+*t5]emL]-~W5txl;_#hW~twO:hWabAy$q3<{jI<{$T3quj{^.fT');

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
