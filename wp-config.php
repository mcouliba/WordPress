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
define( 'DB_NAME', getenv('DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '}X?Lx!Ug4(Gv|!V,T# l:<9%VeHd|y0Tj-9L>oigv.k6}q*Xz-)mxJ~?JydhKj e');
define('SECURE_AUTH_KEY',  'p0uf+vW*Ld|Um ],jy{n5U72SB~]?=-$)ToXb6ZRnnp8R;  jr?vx9ch@8]x(L^>');
define('LOGGED_IN_KEY',    'KZ|$;(yew+Sxl`F(q|GhYy;f.K=#]]X62x{D-Rq:Rr~YqQB[z5U`3&, -ui3)r!V');
define('NONCE_KEY',        'E#1WJ1$ImW/iqO7lw-VV:ku~0?.JVT0K9Uv9|y+E;L4+r/-sp-Q!O$Z*bI&bKrPe');
define('AUTH_SALT',        'e^>+AdA]kU`12PbQ/K`CnEx|K87ZikZOJ_BITo*oAU`6cMwcr XhQy_eo+>3p5D|');
define('SECURE_AUTH_SALT', 'Rt+Dy-leB~:i{j~:~<rB 3^?g-}-S:Fk^Iq[zJokWJ;_(EL&Ty$R-;_QotsM5wTd');
define('LOGGED_IN_SALT',   ',x5s4!@}D8dt0uc5S-Ef#2-`xrX^t^b0 }XPOTv$da6JR23qGqC#8{6+3&ZCf.@V');
define('NONCE_SALT',       '1f%bL>koGDN19?$v-LyL;F%K|-OsmmHs^4xvr;EhOisplV?lCuT^cDQ:F=dSo#M-');

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
