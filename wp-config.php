<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'combat' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R+QFL_6P,u(4js:a@mwN~40O-Y0r*%jl2x2$ gA<c[5KiU0kM95xKWy_7aa$CO@`' );
define( 'SECURE_AUTH_KEY',  'h@]3OiN~g)Jp>i$p62u+X-3N`hRD,;Dew%c,Rggo&Xa4IVxvmI^PWKK{=&!~@_;N' );
define( 'LOGGED_IN_KEY',    'BEQS.P8=~&zY?NIxp;Ig>={@|$h7=!Esw%WD`:D^^]tp6sLC%-Gp9+do$,,s`*I*' );
define( 'NONCE_KEY',        ')Sera<W Z6A5|EKs;w!|($/<YgG~zV>35WwnQJyM*69 pLp5buBR3N2U_|Y,]j}-' );
define( 'AUTH_SALT',        '=!cK0TiOa=1(~/ Eis>/5nO~8L]/7zO~wlb_LGfpofkR|pTw3}w>8xs2WO ?uiGP' );
define( 'SECURE_AUTH_SALT', 'yhP{Pb2E]~53~::e7cvh*d$W>:|etC_IQQ wI-aOQ.mckkCSw`4]PVvXEARg9O94' );
define( 'LOGGED_IN_SALT',   '&uHA}p&!HgL}~MyvD.-g,+qY_%aH_[=m~F%0X>|1H=R5;e/?s_;:d9vg}.[G`;zF' );
define( 'NONCE_SALT',       'os%7XaOtWI`9*U=tq~FSUrg__4}y1[j#KTD4T;HECVft$K4 ^5x13;.DYrA,F.LG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
