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
define( 'DB_NAME', 'YouCode' );

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
define( 'AUTH_KEY',         '}&hzlxdO?q`13u4nc+M_wLx/)=f^bqnF}`T`QfbQ^*3i~gt)i79Jl_A<%mjeyAc^' );
define( 'SECURE_AUTH_KEY',  'tw2Kr9h}6EJ;Vs$k&:%L&KwW9A&+ZXn%Ow|r?mpQyk!ro5HLHygDe3uWfl!hQgv@' );
define( 'LOGGED_IN_KEY',    '(j+-+Z <b,Lj|m(E2`3EkH !)M.qZf=*vfi$Gv-..J@Jl0GYg;,?_ijjfo|:ain%' );
define( 'NONCE_KEY',        'BJ~g,^1r_AsP#bo<iP/E5f/7+@NGG43?>y[#v~,NV6m&>@YbB#tU=Tnn^rPS<;e[' );
define( 'AUTH_SALT',        '~wTXISJH9>egz*lyn5eM]J-N.YpA:=B!rgvJA/dKt&j,u|hhVqeLF>O8_>d_PX@=' );
define( 'SECURE_AUTH_SALT', '>H3{A%WI=xcjh7uky{ATy~-UU8~}q@?cEJQAM=Gh}JRDNie8L|.gE%i#Vd7J!W3_' );
define( 'LOGGED_IN_SALT',   'DX&HrB*h^6(dS{X_ _X0OXeSN--oaM<;zVMe7OlX=~h9#!pnBYj VGGI gY?3m3,' );
define( 'NONCE_SALT',       'bLc!a&tF.C*VwDqli A),/#BsFR#MHkcf@>m^icA,($(&o?_q#M[Je 3c_70N^5!' );

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
