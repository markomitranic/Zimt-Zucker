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
define('DB_NAME', 'zimt0074');

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
define('AUTH_KEY',         'gtYhhEp*48qog)^g4;k-[O+`<NA!$!pF3n^B1EpYz[1QXc:$aGOi3&`KQ!hY^|gJ');
define('SECURE_AUTH_KEY',  '@M>#LL+3{a1 !./AM;)Us&#PqdL[so3:}6IH3Zq:yY<k:llHbu9DQgCO&>Y[r!pF');
define('LOGGED_IN_KEY',    'Rl}~z=rJgAM7SC)f!O5:1inW]7/@!0P::K]72_JhI<ZTSuFyupufwgA.;Dagg;J`');
define('NONCE_KEY',        'pD5k3 OH>V28R|61SrVOm8|NF89O)/}2r0&AoT6)(kv9_:_:TGb7V-fg{7NchdT!');
define('AUTH_SALT',        'Yz<wtM,8o}2xeS_q&DWH!*J=NSjsJiC1H4{N?mQaFS1T%jG|QI[QV8X}kGFZMU,*');
define('SECURE_AUTH_SALT', 'P&@J8bkOiLL@{>Rf`=L<!SXE;aCFB97,tDH@He%>:D@n(46|H<Z2b_MnaCX;zko%');
define('LOGGED_IN_SALT',   '3W0,!|xKRLlC7 P-6.bxPs&:5xEmxT$Mb7kz9,sE I`vUs>>hIJ/ph1oZ(biUSP$');
define('NONCE_SALT',       '|Xq90iU+$F1AnX,t-`rh`=-,WtX0EY6GH1B^^4yI/,o$gGpGL?E&S&NO>j;#y4Rw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpz_';

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