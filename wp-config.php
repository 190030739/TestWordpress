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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'CeXg)N- >&pm=3:A]w5h7BI(7@?Qd6+`-dI,!5fLl&|hufKGe+3J;HhIOf3vBrf6' );
define( 'SECURE_AUTH_KEY',  'xOe>t,cFTch]- 37Lfb>2:QbVdi@iFt%)XD&qkU%/4x:Js {-.^37wsRp633Bffw' );
define( 'LOGGED_IN_KEY',    'Cp0X}2B(l&(yl<P|<o3QK]20+$`|$ZyYSA5P6<UV5ZlG+l/MKNo iL2Nd1VQ{7ko' );
define( 'NONCE_KEY',        'm+^znQ=6s]]#4_F.Kns>%Wy$riSiz-%#Bce&9l8V_U%z2?wg!7rrhNnPI+GGLiXJ' );
define( 'AUTH_SALT',        '9n%;n(hU: 9]EtVy1#7>t1&qn*Yuq<t(6TK(+d|&goK1`A>[lg|2 jFTxjY8(^CX' );
define( 'SECURE_AUTH_SALT', '>=S{zd{dQWW5F<,@X;rp9Z !{RZ]l2he$XUdLAKuoA4Gu(!G<z3bSF#/?5VYcc<r' );
define( 'LOGGED_IN_SALT',   '$gSHTD:[zwU-Wk$:yEi[!j.HQJmxt)(lN*XY!83%|n<L|a:DpdL(A!K1U~hK(k%m' );
define( 'NONCE_SALT',       'NM2GoNrGLNm_,-r3mY|sKaNkxT CdOa:kkU_?dq]6Li}JnB+4-[XN%OV|y3&{<cI' );

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
