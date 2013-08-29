<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'at_wp');

/** MySQL database username */
define('DB_USER', 'at85');

/** MySQL database password */
define('DB_PASSWORD', 'viewsonic1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '^au0++<LOt.,dt,Yht1FJx7_j|+ESw*V-S!,1HGh?WN$n|B-%/J{z1)s%s$L6-K,');
define('SECURE_AUTH_KEY',  '$/)~@cH]WsZN=|Ju]Q/1lzi?fMI +2s4J%@,U>*q86h5,%sX=RT/E@,XL2 LeDB$');
define('LOGGED_IN_KEY',    'b04ze:c`1zWyR^h[Y|p>5;9=`=S&zw0JNJai2>O$nJXipaTB|ic,-=hxW`}-v+E9');
define('NONCE_KEY',        'A~TL8v5j?jdK+U.<N`0^N%Sf_S-,]^w?@y{c@,%33^E|QiB5I6~d--R+UHv,*X]N');
define('AUTH_SALT',        '-41KV*Xv?Ov,NQV%}H(>+ &e8D=CnogSXrPB[e8AqhS|LOw3HWcpv7M[w*|>P@&8');
define('SECURE_AUTH_SALT', '])Ak15{3M@@K)&#,#;R-z!>f?((IMn8VJ3wsX,05|#xC[H;bl<])cf:M5H+dPxEH');
define('LOGGED_IN_SALT',   '!BT.o,h(C0Pj,2l<_-]x|b2wDwZE)7iccX]&k@t/4;)cPP5)}B;~A+nEppH6MgXd');
define('NONCE_SALT',       'SnOcIR2J=wh$o]B~AKG+=?}4lv3,kS?`/:fV,8dkyn=yQ?XaKNT7X#${.:gi-)I%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pw_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
