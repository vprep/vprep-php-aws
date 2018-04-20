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
 * @link http://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vprep');

/** MySQL database username */
define('DB_USER', 'swadhin');

/** MySQL database password */
define('DB_PASSWORD', '12345');

/** MySQL hostname */
define('DB_HOST', 'vprep.in');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n3GHtXIX/6[#fNw}j>7<Z2>pyrH#:`),3jy_Mh}c3j]XNI^N3Tn}|]ywsf$QdLkF');
define('SECURE_AUTH_KEY',  '; :ji8VmM^HZc+2<VLSIC<2i-sB;>Qk8TyQ8^i925JTnC?=?Ls<TQySQG{oU0&DN');
define('LOGGED_IN_KEY',    'T!v:_!Gt)g5mHow_ATX+%Qp4*`5rXt@sCH1bOG2qimp37([*65^n(2_WO~r<l+Z?');
define('NONCE_KEY',        'ioSjV+e0) UFk{EIT7|pjvPF4LHBh%O1YxYXB*@f^4:>ppYG]SStRtn^/ @9H:/E');
define('AUTH_SALT',        'lV+t7c%AXPb63b_-N(QC+q{Ao@0:*$me7>b1JgY#BYq&}vSH$(Bze)|(qABP-I:]');
define('SECURE_AUTH_SALT', 'pM2iVG6f~pwhPb?mk 4b^m!2QnoW2b3CW,T:NtI9?3*rQ2tY}@N#i1]t,<l;Ok=A');
define('LOGGED_IN_SALT',   'Z|jeM.V&$8GBl4i$P%cfNX<9HdEyCl`/D2.l3hD ?:D]]6*sh1i!suwC-/D.x4n}');
define('NONCE_SALT',       '7Uag]D;qy6rYXz7qZbO_9yiQO~^$f6yS5KXLH7@x6b&{Jw3u^A2+ORTG3W*T`]S.');

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
 * @link http://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
