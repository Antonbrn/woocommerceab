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
define( 'DB_NAME', 'woocommerceab_db' );

/** MySQL database username */
define( 'DB_USER', 'antonbrn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hej123' );

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
define( 'AUTH_KEY',         'F<rhl$yCT8f=<LUPS%9L}[O(KSAk ,j=xbM6])?3Bfi%baZQh% qF25&L4_;.)!u' );
define( 'SECURE_AUTH_KEY',  ':N~9 g+e#gUMMGHLie<s t/0)-4^!DVeXo,I QiU^@7J;Q75:xlEaE!6_Iz%)5H3' );
define( 'LOGGED_IN_KEY',    'F/+64]LlRlOp, nn4s_I00Ia1J/[lZq,ISaRTCUp^#gwKm/b7>{q[ebD+=~<u:AT' );
define( 'NONCE_KEY',        '8.Rmo.KEg| gk0|F/S?uw`&qTjwtC}E:_-?43_&E/0O7H`4h;)>Yj;i<ct$ E5eT' );
define( 'AUTH_SALT',        '|K@:E&<50-rLbT+NeVyx>)Yb%[csgd0eZUS$4G4ICP5vhDy+6iCGk .7D0ateA]h' );
define( 'SECURE_AUTH_SALT', 'WM+Sao&S57p(iH$(}sdKRxQ+ [RLRK#H;OXjR+`#8-OhJYaFlf|}~d9NBC2%yDhe' );
define( 'LOGGED_IN_SALT',   'rn=!Xw~To4z>|o{,g!UfZFsMx=r./M+l6GHFpDdb;h.fGNB;cdPC pgi ^sgx;b)' );
define( 'NONCE_SALT',       'Ve.DM3nr,.?+#PQm{(N. ]!noEr^dRBMBj6wReCCJ2ytOT=v0=&QPV08uT>8q2;g' );

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
