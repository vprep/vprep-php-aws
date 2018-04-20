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
define('DB_NAME', 'vprep_new');

/** MySQL database username */
define('DB_USER', 'absolutprep');

/** MySQL database password */
define('DB_PASSWORD', 'Saundaryam@1164');

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
define('AUTH_KEY',         '*o9K.!c;Y.U KG]4=R]O31:K#$3Tpg|h__4AsTl%zR=|36a{X``I SN?se o7Z/u');
define('SECURE_AUTH_KEY',  '86!zLO1$d0cjxy,5$M% .^b5,)Ck^}/`nlBH+BDoe=a^{`5JL]*uzVmxLjg33{kG');
define('LOGGED_IN_KEY',    'zV%|U7G<VOK8,Cv~[xOmSUk6sf`Y8Oaw`$#{Vb`e7g`4C7eY*nAyg{rjB/8}+zfh');
define('NONCE_KEY',        '4b,6kHnh8c6Y-.hR]AHYw[?a*0g (& WoUD?V(/B+gZ|.QSF(=Frm,N@`3Y_#Qh7');
define('AUTH_SALT',        '^ EM%FwI6:0w)5q,,6Uzu1cEFfUn%?7#S;1iSFPwf;*Vv,565/FMH-7l;Sw9u0R0');
define('SECURE_AUTH_SALT', 'M( g=-fmoO89v=P;2 ^B0cJ<T$mIb5NF~u2&(w771[R%||m)I{1M=R4WCZ?)^R-n');
define('LOGGED_IN_SALT',   'n}]$rN*>aS4B+c.K|Wft5M.JC6O:C:mO+6:iQrDlDI8`}))Z{Oe@+h4PD=`-EI=b');
define('NONCE_SALT',       'qE@~shTuv$,Q`E8&j7vRA?EQ:{$!H^7bv.,6SpdGN@jc:!=}u9r_]WnTiu^8(9(L');

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
