<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'm}dGd`cWmN6EkG:Tui)0?6MkB5-A!&[(ZUf4R29_5j!3OW$/u5+Rnst|y|~h`T4;');
define('SECURE_AUTH_KEY',  'ijR++x)<87fjP|L[9{1mo|nj@g4Gl@d3L=nDeoX(8NR^a[vz+C-6}`|RLJ,ydqU-');
define('LOGGED_IN_KEY',    'D@@S4ay(Q1~q|hmjc6?.<.;A25?f}zdfZ-guY+}%$8%5sw-m[Ev-]tN54LTComj}');
define('NONCE_KEY',        'ub<wR(<lGJR6QC/+KV8|(j?[vQ-z)uCbD(UA^XH;tDpx#*qD;kq~e=m$jp02/8`6');
define('AUTH_SALT',        '~-&vU^kR5Vq0& ~wCZ3&tr>{{&-%g(O^Z@;6}tH.n>D[J!R@RzB;s8;eGx.m>$j<');
define('SECURE_AUTH_SALT', 'HO|{8Bd. +`] >-QUZBTVXjo&6d$P-6&C(]jq}3Jiys[ f+9H6p7Q-lc+amUoA%1');
define('LOGGED_IN_SALT',   'U;)=f-6j>9.>|Xym-U|6oY;=t$4SfX3LKU[FUDev@E=Fd$kW9ReSV9gjY0I0`I: ');
define('NONCE_SALT',       'b~>ty8PD#/K& _tGfU[;Z O#S_U 8Bm} E5ZVF<4Xc_QE~[%9-@+6-d$h@.fP4Bv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
