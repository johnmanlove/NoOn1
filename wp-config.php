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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'no_prop1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZUI1^#*Ep{p/HS@Ny>XwQLefm>p?EgMaUBKqC@<t`5u<_YR.Dt`bubsd?Cug+4(|');
define('SECURE_AUTH_KEY',  'uO`g1X|3Au0ukifrh$ieg/)iUw`ehMN+8}TP2[ar`CMBL^&i?MUyA-yv2-`oI.s2');
define('LOGGED_IN_KEY',    'o)~B2&bbXShV)Zz!|Z=5*n:&..})3s_q+fTpbbj#c2%BlfQK4!6;z1}^e4Du2igh');
define('NONCE_KEY',        'dT^yvE[b08Yox*v4KFyr}7c)C+O+t1$Ioqu.7Ap!^l/ ,<N<cVy-y$L6,yiF(w!?');
define('AUTH_SALT',        's|{mQY0Of`=vwI+*g$-T+GF__V 1@X=1`J%sZdmO&= {hHZ(kUVpna(BYRROWYgP');
define('SECURE_AUTH_SALT', ']~7t#*IWi>N0L#Cey(3#X$Q;#aJCF8OdicJ,-z70_!s-Y9fM/%YEubU_0de[ozCf');
define('LOGGED_IN_SALT',   'QXw>U-bP ZMvN(|)d}YoT=?rUjVAj-UmohXCg4{gl6JT&%Ql9JBD^YO-4lvn~xV`');
define('NONCE_SALT',       '?c3y+*`.5[8Lkj1O29x *Mt.A{e-Q}x:3!Qq|iB~RlYoD&Vh}g{mI/i4_(-P*N3k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
