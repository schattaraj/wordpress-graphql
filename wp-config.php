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
define( 'AUTH_KEY',         ':={@tw`2l;e/od~G8|gB19|Skc &@}3<M/?JGT#S}/1c?&cN9@9=U1&!XB9dVIr-' );
define( 'SECURE_AUTH_KEY',  '-~+X:hFk(0y;fUjPRH] RS&bh5wOw[W+&}|pfVNjVHg:C=o=),g-RwRqA3[JQC&Q' );
define( 'LOGGED_IN_KEY',    'Yf+qLMD3eZV{Ng]pCm=/K3rVWphSPh/-Kx}OW3uLkw(5 UTSfAv(_0Kz21t.y#72' );
define( 'NONCE_KEY',        'd}!l`otIQH(A]rq*,vcGR]{!o?]b)7DMy0`CW<[a;>ap[?]Iqf[!=(W;er0sTQAw' );
define( 'AUTH_SALT',        'o~r:C c {![}4bOb7aWUebNh?WSBo]3A7DG3gP_;)$yw=Y92K>dO}/Rwc&KSHK7#' );
define( 'SECURE_AUTH_SALT', 'Al<$ F>N?wU-oXxlKwGsoG1`rTnj,^R.%!}Jq-N6G]]Xm>-)kr&b{,q@uL`dRZ&[' );
define( 'LOGGED_IN_SALT',   'L5p5/HE4?1$A6)A;Sm!#lsH?1~iJN&~(t%V6}lJ#?bt(:f%b*6Y]!xPD*Zz;eHIb' );
define( 'NONCE_SALT',       'A(f?U<xUIZR2M>k`kX]_o-Qp1PCr;kzg!]Ikrf7B0HiPV:3Z+4>E0Z/OJzft@*%#' );

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
