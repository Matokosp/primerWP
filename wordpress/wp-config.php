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
define('DB_NAME', 'primerwp');

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
define('AUTH_KEY',         'FwthOb2[m5(2~10Gjl0U5Ws,NCmaiI0L(z~EWw1 < Z`WNc7vZaOVo!aCL?c(}@q');
define('SECURE_AUTH_KEY',  'DD-U+viqrU^$/]i!1lN?6pl1Q3~;;h_zO16^y0QhsR=NXXH(d<UQk,Xpi^RP3in?');
define('LOGGED_IN_KEY',    'GBqx6Xn+-;y26& *)%zQAQe8=i#^AQMd.-CW0hAdU1Q#vNo8muh*(~Ry2240r!q~');
define('NONCE_KEY',        'BLfA@nm~bE>U6q<{+s8!`S!Bv.V!3_z+#J,([J&hU8 m=dL!Ewfu_*MiKl_x5MSG');
define('AUTH_SALT',        'd//g7o`hU7<HflZUeYaD8TG%R-.&7qX4i9wDsDcMokHM5@fsu0c^NwjVpWLYE1]p');
define('SECURE_AUTH_SALT', 'MxaW8J[=T&C,A%8(sMvh52g+m.UP]?drOE8LK;rA8q-nY;q}##9{iXB#3<}FbQi,');
define('LOGGED_IN_SALT',   ':}na}LpqxufM}4*w;^84K!xGcbFCXa2yB(YR>;Ib?%~,&A4l6qty{:Jz?&-Kq7V/');
define('NONCE_SALT',       'BL/Eeh{7KH;q%c=Xv*)PNkE5(9RbNY[A)bvWrsoqGH}#kM-*^/,VNJL`mX0>3IXQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pimer_';

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
