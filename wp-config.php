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
define('DB_NAME', 'danie465_slicedbread');

/** MySQL database username */
define('DB_USER', 'danie465_sliced');

/** MySQL database password */
define('DB_PASSWORD', 'YpfBay4Zrs1xa2Z');

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
define('AUTH_KEY',         'l{MXHL7B6(3B0kb`2Oc}g+TYP6Q?nO&I.xWJe|R9K,w{:ce#qWFD/nXw>A.^<qEy');
define('SECURE_AUTH_KEY',  ']{y66rh{A_FQ2:3xDvR3N9(FPBtK*+^M$jmM~L;wYOq7^1Ot7%5$xAt=Khj-|12M');
define('LOGGED_IN_KEY',    '8lcjo$@_kHc;she .G80cT/g+cYW<BhL:wq*9yD)wQB`U?rvhT=+[uO(qLc|LLPp');
define('NONCE_KEY',        'n>Ulx<m`nx/$*k_X%fjg-djN%*G0oR$Dp8P^:?y~11uN]l,-`~nGkd 8v/9uP`B!');
define('AUTH_SALT',        '*v,oATPF}C_.~twZ[bW,Ep$kmvP(v4>a(wna@{w1`q,=`_8e&E?*LCUSRr[xR2h9');
define('SECURE_AUTH_SALT', 'Dg+xfIu_OM=Y3Wu1L>!KY[C3$l{T<jrk6XMJ>F=G6K{[cIZ4W[)3!wB0X+R#H/m]');
define('LOGGED_IN_SALT',   '*Aj:WW-(0c^#+YCJYhuN*d||g?]?0S,9xR&P9j~_b:jkUpWchg@=rm0>a!;[ %jm');
define('NONCE_SALT',       ':v0rp;pD(25cxN39JxM8+WJ )cl;AL9^EQdt>Wj~WqQ9hDl+oJI$}a$8-Lh,*?.n');

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
//define('WP_MEMORY_LIMIT', '256M');
