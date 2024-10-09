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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         'B<);/zL7$:l&A``Gj,mb /b^#?wX =>8]]bt1H1;]^-EZoI~_6y{Gc!#|(7%>t{U' );
define( 'SECURE_AUTH_KEY',  'Fj}.zkvKsUg#+X!TiL-*1zM8c_LRc)c*L<]:gmptImAQQK#?:_[,3GH~0{09Kk2l' );
define( 'LOGGED_IN_KEY',    'OP9|J?BX+=DXBg2`hSOBz[OX4<>7djp^r)/@Q-0OW,?X)jJq]k~K|# GgsG#UT,r' );
define( 'NONCE_KEY',        'V@vK$a6bCGZ_ci/Vh~{U0G^hgD`sw@HNn[]n?SRS4apgld:N@eD[%J8k,XLo/`!D' );
define( 'AUTH_SALT',        '^r#:hj;/uOOruUP&Gx4Zi]67iJ?yq!Gq=-!<Zkz!=0q<yj{Tpa9NXE;&f6OnjyIJ' );
define( 'SECURE_AUTH_SALT', 'B$BbS;HE/_$AJ!^nqKzVqHACRyI~WT>]*io`ssmD .*~v?chxTbJVbp(KB9!8wsX' );
define( 'LOGGED_IN_SALT',   'qxF(.D|jC<uvhqnq{{yZAZa%TX:h-X)x>R&Ubu`J8)RRGq*qHJIZf4B LEvb{-ok' );
define( 'NONCE_SALT',       'Ebd^8?,Z),6|86UnI3Qx=W_9/A)<aO4<S>}:>J&OO8~Od>9WX~T##[,E?XY=^#Sp' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
