<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ProjetWordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         've|;()s7cT,6iw/[Bq.`_CBUevb7+O.Yng0x,GrfGEpwn/Y=-/>mpz`g]r/yVMHV' );
define( 'SECURE_AUTH_KEY',  'lykg%Fuo[we|vxY*&lAmAkvxnBeO6(Fqy|{9GTR~q],hHS<O>jPN5Brfib^AI:X6' );
define( 'LOGGED_IN_KEY',    'J|9K,qZJ1KRC/gNm4B[tT#UVKL}`3CH9hkxwzq!Tou#nILnj5d!QC@yAn2kHy{.|' );
define( 'NONCE_KEY',        'h.Kp-*OTslHPhT1Rcl6w)s*f0Z[He(4#iA^9S!--6,^kkH;| m$:;DToI.%ur c~' );
define( 'AUTH_SALT',        'nO*XWX4Z8)Xg6Sr8bU|pcvF7LhJCRMudK:<6dh]UKwg}`](iB4&?ZmyJ_!8g@:88' );
define( 'SECURE_AUTH_SALT', 'bohSdSwf`KH+!z5$^UC0}%VmH.j}n&y7VKZyV[]N;xiUw98KLR0TcZDM4)<1jq;t' );
define( 'LOGGED_IN_SALT',   'tY<~](a1*$Wc;4HO-uphN T&S_sCN|eg4]!&NT1NvuW+W)3G3jeKZ,DOU$!,(UVy' );
define( 'NONCE_SALT',       '*Ah%#.8diSvJTS17ZdUsxQYU9R95gm9n0=><e[`b2,gP,x~hh6:b(IyuTl=!xJ`B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
