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
define('DB_NAME', 'WP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'tW@B%4_2[rVV=+[12s!o7^j_Pfy|6Pjt*#rS0$9K6<&WU6 arEKX/!Ca&03/GyeG');
define('SECURE_AUTH_KEY',  '`acFL|W{_=mBc0r*.0)Dor@??MAQ ay]I7zq(U >+u@D>m062~i[CT-b@?tM0`4_');
define('LOGGED_IN_KEY',    'jBmboC/QsAftcv2<2twfT>0k)ipm<M7?[m3n/`;!<O6Is(;IB#1s4BSB&pF=O2;C');
define('NONCE_KEY',        '  ^7HiUww^j>79uX`bV7l;g|yiXECatpnn]L[BD%$tdNmQ(/lD{yXXIvS`?6VyFU');
define('AUTH_SALT',        '`bKbF0by$%i n3Rb8E4vJ)uU[g:6D<c(C;<y1YB7H5q4rss}374q6;!~I5ccs^4C');
define('SECURE_AUTH_SALT', '{6vg)%*3Loq~vYgc+1&8li&dxW:D*=Ic{95``xh ~Q1pcqW.){DLmuq}8_0?])hk');
define('LOGGED_IN_SALT',   '@PBxTdbqbi,XR!<.s2iq3d4W77j[V5i_bZ4bD+e^+ =n1?3y58y,3q{9Bx`U.L`k');
define('NONCE_SALT',       'OC%L?jEp=kd3!XXN2A&9*]c[x=U60Ee-5V-;<abu0G{I6E8-xwub~m5uoO$d.nA@');

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
