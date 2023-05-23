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
define( 'DB_NAME', 'ecm' );

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
define( 'AUTH_KEY',         '+a0v{-cg9-`[!7Hs{X~evyp9,&?X_g OvI~!gi%UX!V0yyNi}T|+%O<!h(:{-jD#' );
define( 'SECURE_AUTH_KEY',  'DeB`u},0%92,t6:C@bIs-TN/BOj@Z.{$mZ8t!2Y92~9! ej@:%`P` z@_!^/X,Gh' );
define( 'LOGGED_IN_KEY',    'i;V4,7]4hUK)ZnK[fMRFn|O,$2lm?=`<r`kJyFY91#Zb<>>,>:+p8I,XU_e6O4=@' );
define( 'NONCE_KEY',        '#6q,gvADc?w9`uU<L3_G/oQY*~O)$v:<%Rbb=XS.bj-plxX7_n0/eO=M942}B]pM' );
define( 'AUTH_SALT',        '?Wb&:+<`g3g<{-6wc)3l9uu^(zeS>r$p0ir{I~T@|yp)Jj,MdqW3dzE1tIYh0XEf' );
define( 'SECURE_AUTH_SALT', 'eNN30*Ln|!!LHX>YNyp5^gW[?lJ9toy`97Z~G!@X0^Z13ej9:!jq;>}1]6T9W{$5' );
define( 'LOGGED_IN_SALT',   'Cv*KFp zmR&9U&5C/eIuq:1yL{Y;_Bz O:Xge<1f|L7jN3S&bwg-y^Ts|ZS@(Lq`' );
define( 'NONCE_SALT',       '9<I1@J^j6F-riI*i]XeD`jPRZ|sRQ*4NK:0hT+`x>5.~9z8qy4QaBUb~{|d3;gfs' );

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
