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
define( 'DB_NAME', 'custom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3308' );

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
define( 'AUTH_KEY',         'jK8QE2,(YC8&a;t=rV-jso1-O/FMqApA$d%?05`,qNctksW<E]4Djy,Cd]<4S&wy' );
define( 'SECURE_AUTH_KEY',  '2=8`cMOm?i5%#NlQB49u<KJf=?WIp:U,@ylvf<-R~qCJ:hs+z~vdKCJYD;+1Mi&=' );
define( 'LOGGED_IN_KEY',    '4 k&?UkHj;O<$_@8*HXBaj,(Ew6FYooxKX_;y+.Z&3 S*=Z),mNav!DBrKzXGHgr' );
define( 'NONCE_KEY',        'XnVV>9&5:H-+WG +N#XleJNjgQDP=3K^FVCJCahxxyCG]wx{?d-+;Vp]L{]?q1@6' );
define( 'AUTH_SALT',        'PCQnt$DXKuo7)(##z:Osg08W:P:K~[]s}!z,xO}_m64vQX`zg4gM3xZP6pro6Wtq' );
define( 'SECURE_AUTH_SALT', 'CEo#s/!=(*OZW6UmQ;idqiufzeci}1SBTX*|M9Y)hCCXwK]j?SOi(m-%P_g(9!v#' );
define( 'LOGGED_IN_SALT',   '_3?|sg$2Q*KY;Mxzh([dFlKUkL;}L,J~&DWs^$I(MI%SN{MJckS`H${@3Gs+W<#P' );
define( 'NONCE_SALT',       'cN_<z<!3GwTQ*1DKF<|TX~]S}e-O$a`z50~Qp2|>c_IjTw>.3VBVpJCV8Ja:OFWF' );

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

define( 'WP_CACHE', true ); // Added by Hummingbird
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
