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
define( 'DB_NAME', 'lawfirm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '=&v%H;1XGkl5+mXow]dsfd&0cp-/SW~2]P`1@^;]CT^&BJ3bovsquQq)88-w5XAL' );
define( 'SECURE_AUTH_KEY',  'D^5q-bJ~{.=,_mCTrR5IJ~uoiU`}{lS>r$`b63:1>t2k0w2XQX>gt+ 9n~*@Tp?0' );
define( 'LOGGED_IN_KEY',    '3hv7sC<x]<P>Tn|(j$W%SHV]rbW#3#lnYNy12R+k3Yi:jBlU=UIVDzWW]ij/a-_:' );
define( 'NONCE_KEY',        'ah<n3>+ue^F_0(_GyJiu=&O.-=UuZ}@>{oProgIiomMhmB3x,,@BaTvF(u@10A|0' );
define( 'AUTH_SALT',        '`COqIlb8](J}hI$Zj5SfaF,)zHt9J5.}yBc8y.{cihEH:J:9NwfoI8K!_27{b QB' );
define( 'SECURE_AUTH_SALT', 'ZaxFL@vV?Md>,!XPC[g9ZAHYBzaX)u.E}jd:.  ?/|h+LG:p6+}RHTw/82M1WY?(' );
define( 'LOGGED_IN_SALT',   '^+b3q~U<B/_jNs7ua-(ap~jyblpPf>LX&r6_NOutDlZz+n3*,HUh?|e+Yz~Iu1rk' );
define( 'NONCE_SALT',       'VcAq okW+0#RBVD]5;+/S|kv6:NWS)f`Hx5z*zIuF$L?@nm1va#0aFKfj6@KD#}X' );

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
