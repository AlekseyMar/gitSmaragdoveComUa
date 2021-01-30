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
define( 'DB_NAME', 'smaragdProj' );

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
define( 'AUTH_KEY',         'Vb%7l&!+kTV`}fV2<a0B`P_mjiNf$4..#a[2YQ~tq84r;*^n:T,<%Q,D p{ADO+)' );
define( 'SECURE_AUTH_KEY',  '`U37GY,U7J|<Mlt!s>o,|a!<ox/sbJ?BDxIdqrJN%ER@.uKrq}ImYvOSANpP=QB6' );
define( 'LOGGED_IN_KEY',    ']ZrD.+siAStC HPRD)Zd*hkv399vRy+fp|lbqvNj6]e8X9~4#nOOptVxB9H;vl^*' );
define( 'NONCE_KEY',        'KK9<oHOX@&,NN@Sxz9A(/8cUoh[v3QYn)/!]p?R]^E7^.ZndTkF} xr4e?1[ET~B' );
define( 'AUTH_SALT',        'uqxn5s/R_Qsti ,lO(_t=KxNbqV;MpPEODE/xCHKKz;4zz~E9(;#o>Zv&f>:+Y#Y' );
define( 'SECURE_AUTH_SALT', 'V,~#d]?u+[q4%??$36z,wT-`Mq&+o./7-)NHxaEuT)[^Xf$Zl&m]Yx_5GGhClooJ' );
define( 'LOGGED_IN_SALT',   'Ttj*0h9VWmIg6SR`8hqgb>:S7b( 5@PB`huOdFB5V0|Qo2pIEo]:=sGX|^2Z.!md' );
define( 'NONCE_SALT',       'A%>|+BWy8D~7/YTWko3[T+$@m0^*7Jy2[X{0{#TCvN[^}C8q`)bG= V}<yHtqD&x' );

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
