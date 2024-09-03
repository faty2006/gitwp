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
define( 'DB_NAME', 'gitwp' );

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
define( 'AUTH_KEY',         'Y]M8KcoVxrH3S:WSql$Zz|Nvlz >U{51Co!+%$9dY}~vmKu8|H8U@6GTGRif`e^Q' );
define( 'SECURE_AUTH_KEY',  'X1-sS!0<s26zhoB$hh90!~mXu?}l,#j{x5VIVO5rx]VNAZL /%>&/)dAE`j,BJqq' );
define( 'LOGGED_IN_KEY',    '6[X+Td<n}e%hPL)_z1xQ<}bCg]5<MufuwFAr2sRkIuoAy^&0MZ;&X<-5K~ LGvWr' );
define( 'NONCE_KEY',        '!D9n#t0+Q:k& O7sg>ef<?~M%]X85ANqgTu6:%A3N6[e<jcKJIE7PYaSCqlo^-Mv' );
define( 'AUTH_SALT',        'R[ngNK:d^(r!#vQlMv8tu=rd$6^y*SH(ecH$=SFW1t0Aou}3pT>h5@g1tc5T2/.7' );
define( 'SECURE_AUTH_SALT', 'DaU[#vQ$40sCBX /jS_5AN{a3v/oD(IDW|s}LRGV.mzT:TU:(d1MT`/qLA%R.]~q' );
define( 'LOGGED_IN_SALT',   '?0+Z`K+^,2:ClzDAH]#h*cenxjyM~+mNkd*o0TX2}??*X?v35(/3$`xY1{?Q/p}A' );
define( 'NONCE_SALT',       '#<-Cf+0V4B~*E5qeoudNq|nA$3j-70e&QDL^Y*K&hH5SfS7OR-I#>.~n4|MOqvoY' );

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
