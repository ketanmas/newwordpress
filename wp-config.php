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
define( 'DB_NAME', 'newwordpress' );

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
define( 'AUTH_KEY',         '?Fi;fLU72A37[PJ`-8r*:ms^]l`k@o1(Z,|=S]L{{ IU]PDM{IIu<`O%T5}I(b%l' );
define( 'SECURE_AUTH_KEY',  '$`: (3-Ch~,{JZ|#4GB0TThG}jlpp4+7D!ce<]N> cK?(~)MmErw&U<&0Z.C!L6~' );
define( 'LOGGED_IN_KEY',    '2fThY.BM`0cf]O4xq&q}re|{dq;O#PbT{V2AS(=f%<a67op1hLjhLQe1lrueFx9S' );
define( 'NONCE_KEY',        'Vbq[T`}N7je3` }tha8)=rB=2XMIL8?sAx`ZdBtb#gX:1fwiatX${p@{*PP:k-9Y' );
define( 'AUTH_SALT',        'X$e,iGc=AR(M`W P1+cIeL]GHn[[zOx<s~FZ^G[W$oT2%@bv/jCqk;X31KcwE*85' );
define( 'SECURE_AUTH_SALT', 'xb *n%cX?5^]N7IsG& NBKM]XpgA$mPiU<wON1Cqw``MM];8U]@+rL_6tla@LPvG' );
define( 'LOGGED_IN_SALT',   'KDWw]_+[;Ux8BK*-MH/I}gZinKWGS$,  [DY4@WmLO8d)i^*R+0>dJ:3bxwzy,IP' );
define( 'NONCE_SALT',       'E)j[&@A2?81d!y=YKu{tixEgS<Jo%J*V|F8y@-X|F*oWS</R;eR/<z_& ~siMcC^' );

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
