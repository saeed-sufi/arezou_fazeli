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
define( 'DB_NAME', 'arezou_fazeli' );

/** MySQL database username */
define( 'DB_USER', 'arezou_fazeli' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Okeyzjg6442@' );

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
define('AUTH_KEY',         'Uf8xM&bz~:]F,vXA#}fRJuS_El, iN.56G-jwKZ50EE6bxeJ=X.a*z-Dbihm<BR.');
define('SECURE_AUTH_KEY',  ']e+3]d8~GUuVBZ|o-sas$L| dT[b]zXpuXB|f%8||gLMt.Wf(r;y4[|xpt_d|@W_');
define('LOGGED_IN_KEY',    'S9R{TTAF?QyQQ2%ca=>&xRQ7@]1n+|ak`2;?]jv[JIm0@]{Q/4sZ%avoIxtUX+W0');
define('NONCE_KEY',        '9}+OdmlE6YcBZ8%Qn1as{MV{-NW I76RI#=9Laesb0$(=|-+4^b>&jw700?H+dd%');
define('AUTH_SALT',        '-IPl;^30^N@R:qY,D.RM+!OZeJ+w2:z>0,aNFuz-50qT&xT%Z%0sAo0hc0%<8@P=');
define('SECURE_AUTH_SALT', 'f+ Me!#6zyH(V?A`Uv|.@bAn$}~93!er4h5~8xcC5XH?gid}G>.qqk CQv1CUsL@');
define('LOGGED_IN_SALT',   'OLR0tHUY|IDG~E|U,G#)$_Z:/|u[L9w2Y7!Vge`3hE+nDQi:URM6x(zUD#l[7C!f');
define('NONCE_SALT',       'S%DK<c])`n?>+h.yRhzOT}M!+jS78@R!,=/U|s2B^_v.=G*Z>AWSq0zVJ !YB^qi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'AF_';

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
define( 'WP_DEBUG_LOG', false);
define( 'WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
