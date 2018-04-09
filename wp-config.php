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
define('DB_NAME', 'demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'WRPl L3+~Mo>1]W;S/GKj$(!m5w)/LRo#3HdRWVyYWFWl-wO!m|C>Nogfh}6sxg4');
define('SECURE_AUTH_KEY',  'P4HHT9`pnBVHj:LwhnZTPnX|WykN7Q%X4$dL4/U^A4r]DkJ~;e*+FLx3XVFMw7sr');
define('LOGGED_IN_KEY',    'EEv}1O.mK<u]o,8.BeC+vz{)u[x1Us{1R=QE#)zQj^PP(02k~Q(drqoboxFF8-|`');
define('NONCE_KEY',        '~;BcM%fpV)a uR`Xm85WgQ*y<UkA U@T<d-Sr|H+`-9YS1EGDU.0Ox_4}uc/M~4d');
define('AUTH_SALT',        '| M3-G~y}.D/<>XaL8;5l9PcShuwPNn`=N$QVC{p#BHKxs5u n}*hxVeY3B%c{Xh');
define('SECURE_AUTH_SALT', '{}?aj5? nM|cCu7$?Uzo5}ts+lL[irB;YIJ;Z5*ML9AApS_kUntE7?)HRl}Em}(t');
define('LOGGED_IN_SALT',   'HLKE4[yDfY@2P.,<<w)0UcP~z_3mg&0gBXObe+hRf@@Kb ,?J7K}1cS(sLcx#&l#');
define('NONCE_SALT',       '`I;J5b~:?^Cwl8;1N!~dhupcC/LGq{mFs%E1A-!7;7tXkP%E{QXbdrho@lVd:Afq');

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
