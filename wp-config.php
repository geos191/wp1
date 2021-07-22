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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'geos191' );

/** MySQL database password */
define( 'DB_PASSWORD', 'op5525939895' );

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
define( 'AUTH_KEY',         'x2jIzv1?|`#<^,UZ@*akn`$]H[MgbsXkzl<Vh{@oCrpsYdDRw%tB!HPRH<D@s|gt' );
define( 'SECURE_AUTH_KEY',  ';)0nDe;eP~o`Xt:qSCa1d}8_/YF_.ub:$eZvpA$g9@Ows:$CG3HJrT3u@gVKHV&)' );
define( 'LOGGED_IN_KEY',    ';U_SEx.b{/s?A8/D+[lRWm__4x+`mT_+t^.7i]GQheWZ~4Y+<!R|5?ZN8;g51IY<' );
define( 'NONCE_KEY',        'RDJv6tSA5M/0oZWGZ&p-+s.aA+p5[?x9s^dv POfhJc8,A k$.7]GO& 0v{a=p[7' );
define( 'AUTH_SALT',        'O,lh j2+S)Lve;agxdt9e1u{gu2>iwlk~lZ;{w;*[U@PTBOajM_FU`%X+qO%~_aF' );
define( 'SECURE_AUTH_SALT', 'D*jbEi)RR]jhsMlTjNsQ<L&X/f%HL1Ypzi@T4vXxyj&V Kw!4,l|>b:%sC2ts} j' );
define( 'LOGGED_IN_SALT',   'r,iQzj5cFE(cjJxy`@bliTHH93vIM]n%F6gY};:mNhPyu_iw4SPab%b+TO|Z@J_Y' );
define( 'NONCE_SALT',       '@N||hO+!WAxtbR+JCu?yYQi)g5{&euUgUx/6X-Bmh|u*tnFnZ9N0pgf=rq9_1lxS' );

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
