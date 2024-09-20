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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'GxV2|go sf.d8O)FVy$Q]eSRW(}@YpF|_a/G_2I=}WB~2F`Gl,ed~%7|F_Qy.er%' );
define( 'SECURE_AUTH_KEY',   '7#?]w:a~qIrN,#sC1t7Q@/7;gf Aop%qBMdB_mNxf$[z>3/O3.3V1VS%Q4hyuYQ@' );
define( 'LOGGED_IN_KEY',     '(L(j A1N)8L`m,xpa]XK3bd1#ygfP@+Oh6F_zfc?=3$<bjLz(}dzR@`jEyb:cTQw' );
define( 'NONCE_KEY',         'bkExRx@gOVEH(nU,.Bw)D6ILQcJ!gKIVoo0dGN&CA9CW*ee+- g6H.7Kbd4 ^c^P' );
define( 'AUTH_SALT',         'grLJW||<{;+~SqEc3G2p1W#xz4]_MuG}4>qGhy^OjM/1%6yTS>_@NN+i>a+fP/>D' );
define( 'SECURE_AUTH_SALT',  'g|=/+PzLeX<]AL,<fn_&G* rt{;Z1~1B9(^r55eC<c*prnX:Vk98ba#[Fm5)oApg' );
define( 'LOGGED_IN_SALT',    'bZ4gyVXpO7r@cu^5ne!e%@6~hi>UlUHBx/ }T~,/Z2SX>Ls.D$KCnz5!![-oDp#8' );
define( 'NONCE_SALT',        '7xph4IJ,Ih g.Kq}$G~@wRhjVwsqd=p>UI *a4h9$7L5VI1FZVR zxfu)TmI$Mr`' );
define( 'WP_CACHE_KEY_SALT', '>dJ~|E 8#su-)}]N~^&Wl!L~D4Y.JEZDCDWw<^8c0o4KJlVVfS93JH!*LG-gq;?%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
