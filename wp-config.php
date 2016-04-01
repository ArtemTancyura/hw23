<?php
define('WP_SITEURL', 'http://artemtancyura-hw20.zzz.com.ua');
define('WP_HOME', 'http://artemtancyura-hw20.zzz.com.ua'); 
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
define('DB_NAME', 'artemtancyura_hw20_zzz_com_ua');

/** MySQL database username */
define('DB_USER', 'artemartem');

/** MySQL database password */
define('DB_PASSWORD', 'temaao333');

/** MySQL hostname */
define('DB_HOST', 'mysql.zzz.com.ua');

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
define('AUTH_KEY',         '%F)si{Xn,U2 uY_Mb$%jqp:L*M!c,i> VNipe!R-zo/th#:K%x&%mhLYX/G->%_N');
define('SECURE_AUTH_KEY',  'oKCG5l1,<dJ(@7,[1s-qI{T>!9GB0w.+oz;-`UL]|XV]eOL/}P^xhCEv?arp@7`4');
define('LOGGED_IN_KEY',    '/*Do!j!jf(I-E*yek%Z3@a1BH#42{k,59^)kAPNe}~0kzR9~|DRig-&T80dre|z6');
define('NONCE_KEY',        '=Ppy`PhGr2rc5F/aom~&m:ny]!A(%2-X^QaPBy6v8rRmOy+q  Rixu0O_dPZ5XW/');
define('AUTH_SALT',        'vkbf[p1C3P#@Xq5v_Q::S+fOqAm9XLl$u4%EP[D[dOB s@DbdnF_gW=KvXn7h&5-');
define('SECURE_AUTH_SALT', 'JnNL #ou5fc8@S@jyl!!@H#|x</R!|mZs]e?`$A7|]LKnu%x442_0C)a05OAn-L3');
define('LOGGED_IN_SALT',   '4oBe?;H&-ehiEx@=T8$Kx$j,+ZfK|U$T5|.)5jX6#]~^?rZckkXzlm!y6,hiS3me');
define('NONCE_SALT',       'gL/2(S=[ <f[i%P5g9ZLeC]s~2%N]Os=gq?@;^R,:=&G@zr@r+&<DEZb1%-.?koV');

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
