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
define( 'DB_NAME', 'project2' );

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
define( 'AUTH_KEY',         '*IVwpBC}fQx3y!{/A_i4nJouDx|p(,4}*E-eZ;yu THEH<0ORC9.J%.BhE:%VDR|' );
define( 'SECURE_AUTH_KEY',  '+T)r6 $Mq*1)k!|TEZ6`^_Z8[kqibBa<Ha}(SIz}A<e8Sb^WUY:uL2;-YOo^uf/h' );
define( 'LOGGED_IN_KEY',    'b={GjBcD3!nG60S?=DQ_X=X6Ydv;1MS[vBB5=y~=[c`SIyrNm(:<j,oA6#D~gCTZ' );
define( 'NONCE_KEY',        '[}X 2v[s)PeBLX$ 8^b]Dy:@4D*gp67)>c}^v?=C)dFF[f`V:bw6s&:~S9#FZODp' );
define( 'AUTH_SALT',        '+X/?Y|h1X$po8e|J<S7%D !Au-$|4N*L:slmDV N5e#+u/^uCy#z9W6/Y(M2Y22v' );
define( 'SECURE_AUTH_SALT', '6z-*R{4ie1}YCw?_w7hgK#Un)&!N8kQRo4V* wHC$gs@jTx+D&H0Cz_$=sbgFU+S' );
define( 'LOGGED_IN_SALT',   'G[M,k j]~+d {tE!uTZ$2B&lB-E-wg>L*U)ROKz#Ft5O$Z.ql6)|P3K6O?CK3]4O' );
define( 'NONCE_SALT',       '+tePKMn4^$&J/7GdRnxNN9vJlFLeP.8hDj$a8937l[PM!0q,qPn&:LDCLFYjPdmg' );

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
