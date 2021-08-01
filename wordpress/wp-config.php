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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '7LTlCC@QyiBZ6DX+Q[V0oct0[7Rq Lyli)d?$N4K5<G7!3BDtfFJbcG3w<56rf5:' );
define( 'SECURE_AUTH_KEY',  '?qCuSrj.!PwmgO}4o1E7aLTsSo;X$0UsW!R*ck;uqfm4</k~K!{}= +ZTX[,K2&c' );
define( 'LOGGED_IN_KEY',    ';(;pq@no ;{]I`h&e4NK`DL9&e9jh#k&7vG3k*q)4Bg;DxFoYZY&qhf8RhvFQy[M' );
define( 'NONCE_KEY',        '.i`C6aS(tqZpa:KX]3D/2_og7@[zOC/&FvV81+OiFQc{VaNEw&zwrN#>Ug@|yN(%' );
define( 'AUTH_SALT',        'Sz^,m_7He#,-o%lia(Lgj,En#iO GB=lqmtz_6>mUZxY(RB8=n%Ei[{=.=sxf2/n' );
define( 'SECURE_AUTH_SALT', ';{P1=x8ghy]`T7{t9~<6DBS<& afW2=aCRh-[WH3L<boCEBqo0){Bn%L 1iZ0Pf}' );
define( 'LOGGED_IN_SALT',   'mV pddS4}Lv,g@fi21:F.r`fw.&Gmz7DYSRyrl&Fvu1o<`ZJk:DRE?9jq!y-{Fma' );
define( 'NONCE_SALT',       'rjQaT@&MxvCwqIlj#VeT:R>@f&V!wjNh2-{&d|&0f7Gyg5W~jvRi-/x(V}<maIA8' );

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
