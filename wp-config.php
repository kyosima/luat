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
define( 'DB_NAME', 'luat' );

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
define( 'AUTH_KEY',         '&{b;4em+J7!dv+)>g hnvU&d ola`z,Vb =D=7P-[Ybj^w:6PnIb`#=wp`B{;<od' );
define( 'SECURE_AUTH_KEY',  'F ;ZwB5C}K|btM,gd*n(>LKY(tX5ncbu.N%Z>9,>o$6-U#xy-ffv]c-BOHcR%lp7' );
define( 'LOGGED_IN_KEY',    'E3XOX@4N5|.=gUXT*#q$3A$^kY=`>[!I8o{`foMx`S#Rg]Ke{ KLPzW!:lw&yo-l' );
define( 'NONCE_KEY',        '=:igl17k-Q!]<-Q9p^aACDS.vdB653DBiPs~+`U*kN@y&-~T3WjsQ>w+]3ICYbdA' );
define( 'AUTH_SALT',        'f32U1i>]asShCaxN5T96OV)Uhsz6Vo+gCop~ypBxtBdq+]:^vgcExU=3~`/:x5rw' );
define( 'SECURE_AUTH_SALT', '&;S8F4UO7`/n0>(HW+F .?`Hq`{G}KT}N+Xu>!J$EP/ %6[DKNA}KOqK@}y,opvR' );
define( 'LOGGED_IN_SALT',   '?nG<@4&o1hp`EJwF.fY*>X|OP!&)I(<[Qu D+oJ$~u4 sUxNw__b3tJdc;[MzD}S' );
define( 'NONCE_SALT',       'AD6UVLeT Ls<<kORV/AvDP3`-Fy8]wYeEy,-!?5E</p!1 p&R>LAdFuXzkHKXG2@' );

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
define('FS_METHOD', 'direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
