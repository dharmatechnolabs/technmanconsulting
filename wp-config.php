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
define( 'DB_NAME', 'dharmate_technman' );

/** Database username */
define( 'DB_USER', 'dharmate_technman' );

/** Database password */
define( 'DB_PASSWORD', 'technman' );

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
define( 'AUTH_KEY',         'A<7FQRDd,ipSB/Vt=*yHv^%SV5U+S<ldM+iaO}eb1A$1,|nY&Opie195!egNmw:y' );
define( 'SECURE_AUTH_KEY',  'd;7h/ZT2FV>mvN#N$]*-syscH4t5wDy](.CRC]ilIKGZU=6%zI>gr 6B`}x8R05I' );
define( 'LOGGED_IN_KEY',    '%-7J2[)?<NVi,n5_yg6)s-cK%MLU+5Znz3GdU.&XNA6Un[NtXYJ69c!Nt77+w9{D' );
define( 'NONCE_KEY',        'LNzB]A3bJ{*@,<#Vk.97?(b[ys;%9Ju3QT(r%{]f<kJr_U>e!S3|{JWub$N5bS{`' );
define( 'AUTH_SALT',        'Xka2bfS>6R(s9VEE k#nmZ3)BU1oHFp}{C_QiowD+.LZ o]S?}L4nYNK;sF$%AA8' );
define( 'SECURE_AUTH_SALT', 'oX GS+o{42GG{QSV(eoXH<aePPNhLgVaR8X~(j,/B,xEe*OYr,xe;;Y- FUr2^Vg' );
define( 'LOGGED_IN_SALT',   'HN&kcZRaBeWW<d-Cv/NnZcE[LQ{pj<H:1p;D&}R7&S6MHH7}7+8MY(YS|6.3JjgE' );
define( 'NONCE_SALT',       '_#.`s%R;7o5`([iE[g]K6DoF5@__ET^rBfMEdV}F{dxv`5iI$~.{XiD%F]|6,g}{' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'www.dharmatechnolabs.com' );
define( 'PATH_CURRENT_SITE', '/technmanconsulting/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
