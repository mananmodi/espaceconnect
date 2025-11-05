<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'espaceconnect' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xcG)U+DDe1[tLGEX;e$+$xMsYC<O1Ol.4j$pc#@r--ykU=~5([Ic;ODbpD8!0Mi}' );
define( 'SECURE_AUTH_KEY',  'C`pBEEpTCC6;n:P?>% G#}8`o=ZDOy4rq9q90^FbOpWDC4t)V*L4{6^}flU6B>U7' );
define( 'LOGGED_IN_KEY',    '=.vv!6AUsOORfjvnoklt4OfEkQ~XX]Sui|]BRSJ|7DWRR/%[evr_`AvGJNoxUNwJ' );
define( 'NONCE_KEY',        'G3D?t+LTnqb[/cjRKf*ez:g$]?)Doc-pl{6v+R0425DsAD3yMrVu(|?:{g.<,>}Y' );
define( 'AUTH_SALT',        'au)dE>0~$l~;VY0Y,Gu(Tx6f-c%;.F2IVX=n!ZcP2~]#3``zM<{-|{;o,t/N{k4{' );
define( 'SECURE_AUTH_SALT', 'KyeN8%;SE/$urhqob( Ag~tF}ZD9*m8J{8s|f098@S(uS|hj0++@3E?}&s4G:m+7' );
define( 'LOGGED_IN_SALT',   '[]uC`TVy9DIT)#NL!hfS-a)q:&y/6I:/T5M @#Lu.*B?q0&CN::ACcolvAmh7=j;' );
define( 'NONCE_SALT',       'oTT< ^~-lqt-#:suEUp&,,*t&52.4pJ0<KMg/Of,qIBEj*it oFzBV6SUlOrhx2&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'esp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
