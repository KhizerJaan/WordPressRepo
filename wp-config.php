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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'cj=udJ`-jO?gCRqkVH/z4|n&O `zmzQ(]N9/~hm+XsXIux;Bd}@psKW6<^(@<DcM' );
define( 'SECURE_AUTH_KEY',  '.%M8ja2.:qBZG>jhnIm)RwP5ToeS}*W]u6xMi9v?9Rgh~z}=2O XYr}OBHbSnMU1' );
define( 'LOGGED_IN_KEY',    ')`aDE#9TCm5j{,,MN4.BXgA0|<~jx@wV=M7U0x0A6L_wju*h)pNb}=C^~2|;nABm' );
define( 'NONCE_KEY',        ')5Vl+1D?YOKwk#7$4WZQ2lX^4L*Su1!=scP/0,t$}xn%{sj5$BJcb)N!rVB?CIo ' );
define( 'AUTH_SALT',        '|Dok~Z7{LW#.&L*<60:_muUD:f>FZ(P }E`3Q-[Ui@XkU`QN-5~wLp#bC<,8.jis' );
define( 'SECURE_AUTH_SALT', 'EPZ-1(r0{>V_#uo?}-RJ#o#yI0gbYO8w8pR{+R/Y6/rB *3VOoezfKAe/Eo5Q:iO' );
define( 'LOGGED_IN_SALT',   '#F49Ix5Na$IcMhtnMt0L$@Es=ab{+aXC/l=Cv}uuNE9@}jGO~R[.&0GG-K%s@)Kf' );
define( 'NONCE_SALT',       '52>Co%wV;v/>1q0rN0d!m0K,kvCBA6#rEwuy7(5*fR[mCWwb!G&h_x=O3XN*]gUF' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
