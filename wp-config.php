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
define( 'DB_NAME', 'lebron' );

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
define( 'AUTH_KEY',         '@!^#PV+`?;.J]mw2W!d/?R[cbSo+t?s!y+h%?z?ne6qxg9/%Y>2R3M1QM[/ QQp2' );
define( 'SECURE_AUTH_KEY',  '2D!i,}ySr1pr~/VwY*@A<IqHb^_B<;Lg8-9?Cv.idVD)a_!rYXApz3wVT& 5Nh|I' );
define( 'LOGGED_IN_KEY',    'E^/S6nSV7<$e7nMd:ifv5NzeP2S6eqdz%Df0$Q:OT_u6dXN~68%Edo..kUc$GNk ' );
define( 'NONCE_KEY',        'TeL5 7y;T]S/,PX>.#,Avx|:..!4+87mv7 ~zXTT^Xo0vkL-w,=NNKG:I<xZGw^P' );
define( 'AUTH_SALT',        '-`^CkU>D<k;D{P5RJ{Uc<*1(V5xRpW3!_`=93LB$3j*cVztjo_:L.zRw s}kJ.73' );
define( 'SECURE_AUTH_SALT', '-NL3rB1U)0Ns=UPdGsHzE)p4XW29AvZ->2cu+tLy6M617j*[7Oj/I0*Z?pqj<be]' );
define( 'LOGGED_IN_SALT',   ')~rmwh VMZbd1REAY!~a>Yoff-{!(|er1_;|Wy,.|=Zcb<{!G:J]G+7JKsW-^alj' );
define( 'NONCE_SALT',       'j|NSX`ypOZG<|ByyC[|=Z|zC2r-X6w zn)%:>*-3K :`$S]$%ZA-OxTtinw=[m@$' );

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
