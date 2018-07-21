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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id705254_wp_264d71b086836250af3fb1b092add8f4' );

/** MySQL database username */
define( 'DB_USER', 'id705254_wp_264d71b086836250af3fb1b092add8f4' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bb68fcc93fb9a1992a90336c372be099d699e364' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E[u3`z1q=_vAocVa=[WK6$+}|I66r7_^/}=.QV9t)N2,p<?ZZUDZY29g!by_^S%{' );
define( 'SECURE_AUTH_KEY',  'SH[:Stg;;Et5+S??r3y.|^pyjh;|y1VYX1=c`HHTr!~:vkM}sHSL.!uZ<Q93V*wC' );
define( 'LOGGED_IN_KEY',    'xB@xr^xBH(X<ZkWy^6YmgOn;H57r.`U_#L`+jfvs^K_M*HEov>& x7nJtbDiH:le' );
define( 'NONCE_KEY',        'e,&r!C{y!2mt*h`U{Yc(vKAADd$U*7wy~wwp>8ZMS72a>>qG-klL;u)C{LA@F(4a' );
define( 'AUTH_SALT',        '1,6<1ahfDi}z?|+t{XVNk`Tsj=wW[~~Hd}cN|mxW+%,49}P34U3{t~$}3?=+k0)j' );
define( 'SECURE_AUTH_SALT', ' j*2nf$GuiT,7iAiaR|nSi_#OPyTK2k)(eR*=Q4X~2n1jW7t.??M1_8uTxO~RVX,' );
define( 'LOGGED_IN_SALT',   'OZDnv{/~d]y<|oe;&P/2n7VsJZ3Q0R^TGX)uEe5wwB(x0ZJo@J1$LoGilfP}h7X6' );
define( 'NONCE_SALT',       '(C7?bx#m@B9Uax|1IKx$}AS1/RZ{Y-F`0?x_|7ZOzH.2{#tfo_z]!yU;IaVp(RAf' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
