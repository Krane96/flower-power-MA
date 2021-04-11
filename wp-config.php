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
define( 'DB_NAME', 'flower-power-ma' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';Z>F[&GV1zUmB~n^TgT%%+`(_ahS[MM]yNkuP`9UqvockeA)-,p{OLvP9prwg2~>' );
define( 'SECURE_AUTH_KEY',  '} ]C$h F%Oc&)P)3A9U0`&R]!]L 05nS/,wIJDw@E2l&rC,$dnzFU>W6  mmVt*#' );
define( 'LOGGED_IN_KEY',    'Z$_cQwureV1}px;M&cFhH..B/RDBCToFKif-Ni;Ej9LwTNhbN9 bB)CY#mbuf08p' );
define( 'NONCE_KEY',        'wT(:p9l;:0|M>++L&;8Hq=*8bzz_{1VcwB{3^#4_;}:O%0JtobL{C-6*Rv^z:Y.V' );
define( 'AUTH_SALT',        '9lC0VWp-.l-ETe%/_XP}ER+%x,75bMuMjmAm,`i^cqo00o=Ed_2rnh~x&}.gV)vZ' );
define( 'SECURE_AUTH_SALT', 'O]ea9q(dSeXtr)sPL;bxS#b=&jG[Je%8!+ i/>rz(;~g@&NQR%%i%1tbx!WN,UV]' );
define( 'LOGGED_IN_SALT',   'OUj,[13G 1[s+s-T).S1[kL|yBEC?mm`9~BoB[ZX06S_!:6*aV3hF2uAj{X@.tXR' );
define( 'NONCE_SALT',       'd+i<vJSVX_w8OxErprw4fhZ49h@ZQ$B/yuO-vn[WdCRR]&EE5VWv%d`xOLR4MAT;' );

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
