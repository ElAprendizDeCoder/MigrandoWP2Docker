<?php
define('FORCE_SSL_ADMIN', true);

define('WP_HOME','https://dand.info');
define('WP_SITEURL','https://dand.info');

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
       $_SERVER['HTTPS']='on';



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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'user_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P4ssWordpress' );

/** MySQL hostname */
define( 'DB_HOST', '172.24.0.2' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vF)sZ;%MLl$nS|D/nmxjsmDqnfTgvbRfj%fVZ2Nw-l{xV~TODU<fC:| ~mOzh#kB' );
define( 'SECURE_AUTH_KEY',  '4n$t8Tw.6Dc!G/b.6iiBkX&Yz8cN,[KmB=tt5[VYklhI(YFZxu1:Iitzny1uM=x(' );
define( 'LOGGED_IN_KEY',    'FRkBF[w[y{djR:[oMnui3,,29Rlv edjJ$z%5eS R8II]^;e/d)(G<^uw1NAEY76' );
define( 'NONCE_KEY',        'Yq-kiwU;l>NVxBhXk?pdH#Ad^<-Ol@;JP$[2sXK^JVt6F9.hqs[kAuE?y*?%4;LX' );
define( 'AUTH_SALT',        '9uVhFBwLza}yn/A#g>}ge7j>QwI7A+6p1GL*K#^zB>swd$R78;E?d{6tNyu&1:(%' );
define( 'SECURE_AUTH_SALT', '*iwA1.|w(&9v(7@KLoRaR#x2S/tBAxX@EH++1hBZy;k^=-e*+R/pbG|yNp4AS1il' );
define( 'LOGGED_IN_SALT',   '0w8Y|5gRK7vb kXxULcA]yTEMU-=10kN>{i&]q|;TK_ =ZO#d}QvfNt2R77`s2lQ' );
define( 'NONCE_SALT',       'A.V Ye-!RY Ol$MKw(_YdSbICm<3bk.p]?KgRUL 8~p69o$Q{46v{cLJIK1M?.1L' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
