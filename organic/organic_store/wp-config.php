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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'organic_store' );

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
define( 'AUTH_KEY',         '_AgpsEA!Bm7S:uhXoG{];dI2M1Xc[XVfI:Qp_-i`77XgDD2[;D@(ar[vbY{O-cE-' );
define( 'SECURE_AUTH_KEY',  'G9~7L;Rve05QAqe7.=sS54K4$?(T<0hd@NlHb;}AOkLe|cxNt!.]_:nkmTs5ewWE' );
define( 'LOGGED_IN_KEY',    'nu6biSP7* z]8Da?|$wdT;fB_^U2}~2jItvKgU7TS<rR0 `vz=og%qu{vl-9t,Ze' );
define( 'NONCE_KEY',        'g?qw^r ?yK:M0R>d(@LUHN+8Ds)Ub6pzDp1.s^CVFrH5GGxJV7rr6&W5zoI`bJHa' );
define( 'AUTH_SALT',        'eWVa08ORkb}TebUmaKJ*Q:mWInE./j@ff+]>|6d+^@U;is c]|b40j)pX@?pl*c,' );
define( 'SECURE_AUTH_SALT', ',2/2AS4joHV1!hmdK>7}%-m(mNzFD8RfrzwXY&faq_k<vUilnAdH!Y1XpoD&MG,^' );
define( 'LOGGED_IN_SALT',   '.m3m-%cuJEuQ .!<|vnQvM3W!O4Y#a$j`|oXJj-BR0` (DI*KUycN=Lt~>z0?S[[' );
define( 'NONCE_SALT',       'p|LW?4K9R|p}aeP=.@UHAUoY@x8oWbfUc;hHTseIx=p-Ec%r&UT1&[W&>yVeE@M{' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
