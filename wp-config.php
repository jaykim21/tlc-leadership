<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tlcleadership_db' );

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
define( 'AUTH_KEY',         'VD2o 9-is[2cR0@XPL}:cH+8{^Z07Xb1Qo@GAXHTjQB}Io)_[F#:U y.N-jM2Z+>' );
define( 'SECURE_AUTH_KEY',  '/$RP h+i=P~GAX2waiX(;)~jbNYsO%;`93cxTBX~~:x@KFhUb9Ocf9K35]QZ)x/6' );
define( 'LOGGED_IN_KEY',    '#6RFtlEW7l50hW2 v5L:X?favH?^#>a.o qF3dc: e;%HgOM*IrVTMPd%SPZ=={W' );
define( 'NONCE_KEY',        'F# o=nHOCEl&yxV%-Vu{3d^*IRs}nH.C8QQQuv%B*0_r6`A@X_EB-Gho;~c,eplC' );
define( 'AUTH_SALT',        'k2ef.YHbB-*G.]6w0.dRcLH[`x!Z?8z?[C>#sV@cIK4tc;@BARkG*E~3Gwyd5@D ' );
define( 'SECURE_AUTH_SALT', '*iL[+]^xxQhZ`P+@jbQEs^Zgt$W$`%.Gn]@.$sw0ZY3.mhIQKEdSE7up2=V%#m|_' );
define( 'LOGGED_IN_SALT',   'Q2ey^lcRL(~@K.)|+Vxl~-EJ9exXEY}US@8<IRSp3VJ7X.S*o/ {BF.dTN.]Bw/8' );
define( 'NONCE_SALT',       '6FP1#Sz4eCXs a{;!Y91DztUKm%cx>J[@|71iyg#s$`2MjJ3Xhwi09@jG4TC-%rP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
