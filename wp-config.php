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
define( 'DB_NAME', 'ejwp' );

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
define( 'AUTH_KEY',         '/7&?O}BMiquQ^dFaXhq/]goKk^i_}ul:X-7(LLv^,?}#i-t]0%/R6lG5OS/<=lW}' );
define( 'SECURE_AUTH_KEY',  '<:.|`|5=yQ/f2bQbF@3C6FS?s` 4{m&#QT{po+HEIoV)`j/p^1Xpq3q%_t{iLiml' );
define( 'LOGGED_IN_KEY',    ',|L#D#6Y5ABn4oG8=Eh]FCF{Y3%Q?/A/+ 5k$e$LWmRy&K0jL7Rw%e0:;8Skq{wL' );
define( 'NONCE_KEY',        '6UrNF4PE4i1EVG{fBT~:yDDq(/`SuE*nZ&Yr.8Jpn]%G}HO]8poBNY#RP<AHM.T6' );
define( 'AUTH_SALT',        'a07An/P=luZfp:7<T$vU#+)M?%u&Z:j MayOWR:ts4=J>cEmk*PfT/*P8:XFUX6R' );
define( 'SECURE_AUTH_SALT', 'd!+%.n2s`0qvIw3_@Z3_V)=.p|rZ6?3peNOn3T.|3&bdk5!M0<Y8U;-aN@^eB&Uq' );
define( 'LOGGED_IN_SALT',   'Et?7l_P()xcifU&i8lkM*Z=g<Mp?*r%lseg0rdaN]aZra`aSRNf..`R+HI=sJowP' );
define( 'NONCE_SALT',       '2/Iq%f?C=s?Lob!`rzf=U)s5L&8VKX$d8Mb>e6+;,a|w5VHH+!fz{~NCrEcy3J9A' );

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
