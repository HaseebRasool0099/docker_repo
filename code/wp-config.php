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
define( 'DB_NAME', 'testdb' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'wordpress_mysql_1' );

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
define( 'AUTH_KEY',         'AI3>kR=peY.>z@A.=[ef}85[AUuDF~pR~}GlJ&X[%crrQs^nw65hHOvg@6lW>PLD' );
define( 'SECURE_AUTH_KEY',  '?,j7h.dBAh#[qq)NitqI!bV2T#?I;Mwh8=H_HEn%mz{ED5 &UJ<a:W8zh!RYuZ!V' );
define( 'LOGGED_IN_KEY',    'qgSs*H03PvPn$=!]^~Ar_Io+^VQ1J{FS9Yet,JAJh6_:jc*QJaZO+=Knv !qX;xq' );
define( 'NONCE_KEY',        'aUI(.qgH?j8b,M+G_kozeJfjEA1`(NzapYW r]3cMxRxN_{%,uIhzIc]renK7z,l' );
define( 'AUTH_SALT',        ';emD@MpQp0[DssuXkW*SvE3Sp^yf]K.>(|j^LXTl$H8diJt>oO<A;TZC}3`JWM}p' );
define( 'SECURE_AUTH_SALT', 'Bi %J)ZJ++*PGP+j#qbVLL<TQw`>;0;J+wf*Y{pVD)Ye!OE30a W;@T@c: <W8S)' );
define( 'LOGGED_IN_SALT',   'W?{>EU?$ddhtqOxm< Yu=5q})9bJ.lV`jd%[y~,DJ,aYO|2ROU$6WE}z@Sx75l$i' );
define( 'NONCE_SALT',       ':<-cNJ%&wujNcW92my$>w#1^vC7d.aZT=5zrXBam`>cBeM<ddH)k9,3+ixSYfXY[' );

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
