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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'alfreire' );

/** Database password */
define( 'DB_PASSWORD', 'M3a74g20M' );

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
define( 'AUTH_KEY',         '[/f/UOK9E rNr+191~S&{i]%Tr<<SV4DTF{Ud~KC<?iay01z-2J&t@AaTCdTjdVL' );
define( 'SECURE_AUTH_KEY',  'b5n0veaHlO:aW#$qgpB2M,d YXR40=$V+(=/X^wnlo!Ti5(<)5BhYH3_Nz#|<rf;' );
define( 'LOGGED_IN_KEY',    'wm5D>ALLK<m>TYT`=&1I)XPB~Q^Qb4?2`IS*>W8&ZxR)mzR%Fi.;dJG2$~L`PRXU' );
define( 'NONCE_KEY',        ']9xwe{7`,](Cjoyv.56?ni?MWc4<Ea%>ayo|<.8ct~X9r6Zn1!wiwK+XodlXe/0M' );
define( 'AUTH_SALT',        'YrcQ9oZj]/ZDpbl0$& Mow1!C~8rp0|u@`hZ)%[|b99_P{q^m^[}+JrK*olCWQ$$' );
define( 'SECURE_AUTH_SALT', 'TS Rkx?>630ty>g5kHN7fEWjMd jbyiXNaqS{zx/HGL2Onw-a|bN2j&>k0BmW:ly' );
define( 'LOGGED_IN_SALT',   '&=^E^>U,MtI4Z:%8%J:S)}rA*Eam7as{5JTC_c4/y0n?|F)kxt2CT7@im,V(tiNA' );
define( 'NONCE_SALT',       'SG<tq=tT]ZxvLrtq;2d.sB:pm,@K^x3A;{$8rB.aIob7|q(NcK<]^bH)w!Y_[7bD' );

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
