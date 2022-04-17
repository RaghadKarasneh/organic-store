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
define( 'DB_NAME', 'orgainc_food' );

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
define( 'AUTH_KEY',         't|HN15.L-r8@Yx10Z*ML4I7L(fU=aX|et><5Q[?> zkW<5=UP[z]hU%mk7t.M:z~' );
define( 'SECURE_AUTH_KEY',  'C@ado^l;i_KSL;x#pUn03qe|X|8JI3!onumo}_L#b:W!*(2~W/7puC=W<Lzlt+~S' );
define( 'LOGGED_IN_KEY',    'SjvNi739]Y%(:tN?g!Ny})Dv!h#yrN~%kb*rzIwd?E@#@l:`h#oRZ`,z*bI}LLw6' );
define( 'NONCE_KEY',        '7n~#7aC?cChun2v#vR<1<.WG?%}+::ohK:6|RcGAd(_7QMDVl]z7ANc7f?ySIy l' );
define( 'AUTH_SALT',        '#PwW9YPluK`p%nj4*{|ev_6z%j/h)hfr:ff+$vduG)Hm}{}P(%vc:8eh&Ddb[So4' );
define( 'SECURE_AUTH_SALT', '[0-G*4W=~JJQWos7@/RQ=@~T~<X9JLP%:NN)z#{p,5;0xjynAk%VZB-6*a*?[@K+' );
define( 'LOGGED_IN_SALT',   'd1Ib@I gxFJn`~52=SeUG$Oqwi7aw+v2UG)x7@~f_8[J3Xo-@9d~avi+4] !I>-Y' );
define( 'NONCE_SALT',       'U;ZnU`{c$O1aiU}-]6v+MPNCL0Cu;I(5 X!~Hj*Y3Y}0T}V$C/t(Tpc@P8bhY`lM' );

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
