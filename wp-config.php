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
define('DB_NAME', 'gusle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'php');

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
define('AUTH_KEY',         'kn&DlQT6RU~CXYRI!7T*<ZT_h0*YhON04YXm<%mw:&`cCESe/IFOaGplUk44=X|Y');
define('SECURE_AUTH_KEY',  '9tZ/ea@zGic_g|B>?r)h50|P|+%mmh1Q7A.4c/39G4DM>%u}wCBs$b|x`$sy<57n');
define('LOGGED_IN_KEY',    'rD`i a3-?vRI|+e9 JQ+,@Fy|5$~O#V`Pc+`@M-|~uIE_ $B(-!63JK8M)I2N%W(');
define('NONCE_KEY',        'n&DBBs:^5P<k|R#-Rj@l@,qU`AK<aCEcX@+]M`s,4@WHo}U^V)?@Xr+9XY6uW iz');
define('AUTH_SALT',        '-]p?mX#%Uj1R)vXEPwd&BPw6]V*&*N92i8Rk>Z3=lKZrM6|.a)8%L3?U5$?C]9mJ');
define('SECURE_AUTH_SALT', 'K;wd~:|n}gdpQFj}K/vcYOqj_]|]N}^eOt3$SM|(u*HL&nk^!t| <4>CTKJ`nok1');
define('LOGGED_IN_SALT',   '$_)/ggE o-08f0A7|2#.w.u+qk@+-9!W2pj4dR@;-w!Dvc+~i(3Hgr9n. G-x|*l');
define('NONCE_SALT',       'U[g5??GeL,]v)3g=UY9SexG&V8^nuaj~nB|!#<dmu--.3U;e[@0LHUqs%$b tZfD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'sr_RS');

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
