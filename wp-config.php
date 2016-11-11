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
define('DB_NAME', 'mobigino');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'h60(h:jQ#ViPh|.sS5K}abuxL&Kh@#S{YZ{JK;?T9BDv!a[j<}+S{|Z[L4R(d41t');
define('SECURE_AUTH_KEY',  '?JF0VfcE$f{g3Vh!U!xqns#|AmG!H+M|W0S.0~84^}Yq#+aVxzhbdlf9l@$fpyN9');
define('LOGGED_IN_KEY',    'b-`/?h<*e+]andqc>Q>7f@|ZO7dCP8X;(xbrs}i`&JDi{!^x1LkZpy.Fd?8MJmPb');
define('NONCE_KEY',        '@;|UHn.WtGllodOaVehpfv 4V) XJgWY$cS+WUPEo1sf@^5p3 YcIjIesyzH6RMB');
define('AUTH_SALT',        '|HIQ}Rs}OoJa+<b*dH}fjg`cDC_l*~Q-J/dx3531|rT/z#!7tR$@v`^%5dvB+2/r');
define('SECURE_AUTH_SALT', 'yl3Jx~hYOb}|.o=0]uS9tG.rBU N}1E!+EPgQe`tpXl=|*|kl%z>gm*:T#<)Y]Rz');
define('LOGGED_IN_SALT',   '&9LKedMQ+8d8|<OH~*NW[h7j1:cUvyax+^[>#C#[px%ub~ait|&Cv;:Cp!Jv}>yh');
define('NONCE_SALT',       '&uA|OG-%SK,j%{LrL?qw<^u__V|z*HCsT6xRYNWypaKB:>h=}N&$Mq<Ep0gIV W*');

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
