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
define( 'DB_NAME', 'wordpress100');

/** MySQL database username */
define( 'DB_USER', 'user100');

/** MySQL database password */
define( 'DB_PASSWORD', 'password');

/** MySQL hostname */
define( 'DB_HOST', '172.24.0.2');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7291dcde530e511a4729cc7320523d337e0a274d');
define( 'SECURE_AUTH_KEY',  'b0b9a4d7ac4251f0e2349256f7d18f3daaaebc6a');
define( 'LOGGED_IN_KEY',    'da14fbefc3cdba92da8a3fdb94aa560ab79ba626');
define( 'NONCE_KEY',        'b4cb9b3922ccb6dbd4a5e31e077c0cf97cd3f322');
define( 'AUTH_SALT',        '46ab7c8131a5fe46aaf9b1b4973eb5e06caa7ca5');
define( 'SECURE_AUTH_SALT', 'ce2b35638bbbd075fe966adc7724e5497d635283');
define( 'LOGGED_IN_SALT',   'd4ec117e28272467bdb1cb9dc0c545b31be4c013');
define( 'NONCE_SALT',       '4244ae9a8ad9f77274279c3d269e72c35a14bb69');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
