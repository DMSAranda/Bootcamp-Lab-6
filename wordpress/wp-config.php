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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'app_user' );

/** Database password */
define( 'DB_PASSWORD', '982hhfn9i24ugh925hg9235thrg39w28014t08hij' );

/** Database hostname */
define( 'DB_HOST', 'wordpress-mysql' );

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
define( 'AUTH_KEY',         'rZaJ`)P:7lLUn hhw^NI`ILIbD0vtwtCeae;vUD0wDN}re-fxglk}wu@u,ej$. U' );
define( 'SECURE_AUTH_KEY',  '$l@hfHeoq?2;y59OUaWls_MBh#|Hg/;Z*..sFitIsxl.I@@H#!5`>krzKo-^t-/F' );
define( 'LOGGED_IN_KEY',    ' (D`SsvL{G| @0<]`&y@-;:r8hEA3S-s)>Y%EsaOKfu&8Lc|:fRTQobi+1-Vm{G3' );
define( 'NONCE_KEY',        'pV?!d=i](8+_0Ampa%Q2Hl1TX]&%olJ&a~/0J2?jiB/u6b45D/xCatn=~0I+~ha*' );
define( 'AUTH_SALT',        '3_MT;vG|>~~r3<3A,2N{bucBP/PU],q`EaitSkD4Q<a3uF!3Oba ,rViomla*~}7' );
define( 'SECURE_AUTH_SALT', '~0p88XD^KLGF`q;X)v,uU{:COcvS8Kg?&}0Y@^^bYD:rbk4C>;G:pAm:+>PS6o]4' );
define( 'LOGGED_IN_SALT',   '<e0qY%{Bv;&Z3]`&LaCZ-/`{C90merQhbTS,r6{kkrg[M`QqJkxg;Wbkn6E[=3Lq' );
define( 'NONCE_SALT',       ',;08?49Gdu_b0/T;_A<YZ)h]g5{}hMy-dC8 K8)_dRs|^yM$l{Z}==~lVSp=2Gu]' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
