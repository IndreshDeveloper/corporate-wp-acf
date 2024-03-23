<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'corporate' );

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
define( 'AUTH_KEY',         'a5vP,J&/sD$<{{^Q^r8Z1xNwMD{N;PVjd`g*Fvhd#Sb[$egJ:&cJ0Om,jHdkzYn~' );
define( 'SECURE_AUTH_KEY',  '| 1@H4k5}Z6(#B}:e#`<|DMAZ:EiPumt@Co%~_&g+OuXu$~:cX*qxIQq>sul,j7x' );
define( 'LOGGED_IN_KEY',    'rf1&_]fvJi+2p}Yu0SX^fpU5_UDn+4/l1/JI|F.2wN<7E:Q[Q_R>}I>u-4UU+n5I' );
define( 'NONCE_KEY',        '}6ZNb_RmuC?0*.NYpO`e5p;jLe2Zm}j4:kn>`]tLO<!4#PZyhlhCKshtksJGsak/' );
define( 'AUTH_SALT',        '&t 4O?(P-fjS&E!;%5[]9{FI{FNcmCMdH%xP[ >=6%$/tg]~hdXn^W&8-]T.PPgn' );
define( 'SECURE_AUTH_SALT', '/an^>#*b>>ysGXmn|`C9,K6G_-gux)h3jB<=*6O~8L>R&]/H`G+Q;s`q_K#<7zU<' );
define( 'LOGGED_IN_SALT',   'lDWB{L~[9S@5*q7idR))21MTxaUnz7TO:`EukIP[CySfZ+%jKs@z!EXIy|uLzQ}7' );
define( 'NONCE_SALT',       'I[.ZP(TARd5X@/4!5Y:ow2STDFXAW@x4=7ZgMd/-wxn9*Ct*:PMEH.AwpsBD{O7*' );

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
