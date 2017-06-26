<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Wxk1w5B73B');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '5{$E<ILw>UPVRtbd@XVn)Z;DQCZToDX;A3TyM~,F9CA TUcumH~bbtz4j5lmJaQ1');
define('SECURE_AUTH_KEY',  'j|@V(!S^pt{&~)y3Z1qQ=Ne/Jt#20ky04qUT!suX`5W3oiKRn:/e%zRuf#CQZKfX');
define('LOGGED_IN_KEY',    '(Mys5vv6.>.,6F}!|iHih`7_0PPoBdd.&)h2s).1W?2Uhl$#sady2Ug0LSRl3aHT');
define('NONCE_KEY',        '<VaP#os:ckOg2gx]&oSM6[A|yaJ&:aSUE.[m|%3Vpt~zUQ;KH57XrJNOd%f|0AkK');
define('AUTH_SALT',        'n;Mf*U[+7]Lp3y2{T?rvQ`SjwXff`|=KhGXQxv gLZEX/,cr7T7,:^Miod.gn-[3');
define('SECURE_AUTH_SALT', '.jd `>JQ#T0nEF2{85-a7:y:x3+6lU{b5%>;zJ4P]ac_yJF.]swo`Si$)K7><y^h');
define('LOGGED_IN_SALT',   'oJ=Icl_k~G5AZ*_o;R[y:$)K+BFI!2VYtaq5QUMT/{^O{uju^|+`ZQ{y)k;d!cxV');
define('NONCE_SALT',       '^@|?6pGcj ug`k(cAN!2[A.=u-2Hv_<:I^u+,W:KMtMhvf2!/33Wn)IGzC}n3#J!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
