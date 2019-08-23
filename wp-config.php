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
define('DB_NAME', 'wp_snh'); 

/** MySQL database username */
define('DB_USER', 'tson');

/** MySQL database password */
define('DB_PASSWORD', 'mysqlHaoilaHa');

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
define('AUTH_KEY',         'z:6[pvls}ou;&@n#/dAxcf=WF43:81|~g[p]r5IXK[5$O-&a7ai2Qxfn@P?6vGb^');
define('SECURE_AUTH_KEY',  'Z9Ksb$z`,_.d7Uk/m nl,tS[J:4!KI[i^KhGh.5@/|wO!VqemGi`/|uc?/TxSnj8');
define('LOGGED_IN_KEY',    'TxWFlB;gY,q`pi/{=2c:j_+ZTd=sh[sQ=%uh%BKN6~NS@k /u=6(hAI[m3Iw35i;');
define('NONCE_KEY',        '{yj5{$)SVhO%m,AH%M&18aBUpm^vQq/:5XlbazX=X}]0Sf:h)FRTDKdhr>dVA6lX');
define('AUTH_SALT',        'h9/]gk]7~H[Dstv[=@d}2fi!$Pnv{nHp1[SACIcdrdg2,?j:$J]]a7#Y+Tqk<B/~');
define('SECURE_AUTH_SALT', 'Pm|N+DRh/K.bNCjT,/4II*$.av;n8{FdrSR<Rt^4Sr mqqMP9P3UAO hACA1Hlhr');
define('LOGGED_IN_SALT',   '$df(tB2w!uRLxd*Y.w_r?CwWKOEG~ &1pm5(X+v(>o`I2`8Yv5DWs2/7im1-.`h9');
define('NONCE_SALT',       'GhZ-SJ3I?GF8Sr]TiIAp%E2)?|;^96)m8uV5j|t,cZ.S`UQXl]KlODS#QbOJ:N0h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sher_';

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

define('DISALLOW_FILE_EDIT', true); define('FS_METHOD','direct');