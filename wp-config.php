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
define( 'DB_NAME', 'test-task-one-vision' );

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
define( 'AUTH_KEY',         'Cz{xJ57Zgx4ROI4/%K75ZI1@8pNZX*qUl]snRC*V;(5Sx]H#<w.kXVO$RJxZ.x_,' );
define( 'SECURE_AUTH_KEY',  'R:_$`mOFjf_@e6a2#+[]qx4nt7qj%e(oQf}8TfBg 3R3?w@Fm^,+/9Hx21jP0P)#' );
define( 'LOGGED_IN_KEY',    '?V6%dC6L212rl *>Tg;|1]Daxhg(r`@4i`:@|.<IQ3<@e!5JO02*+omWi,8w@ltw' );
define( 'NONCE_KEY',        ':)RQyhfLtjv%;}&o|&[[[z`rBC+rzUS$y72,;C2OCf!GsQ~:Cj2eVDU_G,WuPfcW' );
define( 'AUTH_SALT',        'O5>acd(jl~))y_T 9QUa`r#j:)ev?i#T!uh0vT&?! Y>iyxa7Y[U`SFn<6{$FBxw' );
define( 'SECURE_AUTH_SALT', 'k8u[rxp^Fx^ZjB@0e>KQagDM{G|jM(]lCj5IbQiOuB>@3A?1a2#SqD*PgJdicmw=' );
define( 'LOGGED_IN_SALT',   'A8:&WenL|Zi~brE$JvV5/xgW&@u{TnV.U_!F?{0G`utmV(qke)O,=-t]~n)vckDG' );
define( 'NONCE_SALT',       'nsR=Bui?r)gn?PNk7Kh&mt[1*e tM%eRnH+x04wr$<X^=Z)_3hSW;ul2A(aGfRnk' );

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
