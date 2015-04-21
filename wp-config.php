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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/avideu1/frpy.net/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'frpy_net');

/** MySQL database username */
define('DB_USER', 'frpynet');

/** MySQL database password */
define('DB_PASSWORD', 'u1pBU5%17RoX*#G2g9A4');

/** MySQL hostname */
define('DB_HOST', 'mysql.frpy.net');

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
define('AUTH_KEY',         'u_sz&@G5VOf@cIm()6pX^8qg?WtnDRz$k#V^%A%Yz5e95IGdybg2gt_|H_S_f*?T');
define('SECURE_AUTH_KEY',  'z+6~4hN$)VZPgpeFhRO@DksH_uBP*iuK$x|T9LRSu4$f9VDNRX_fuOBtJzb)4~IW');
define('LOGGED_IN_KEY',    ';W5@50`Fz+wr8Fq*z$X$aNlKtbByf%XLyn!+iF/:5ZL6kRv0%47FYXE~Gg@%1CY9');
define('NONCE_KEY',        '%4b?#6njnNUph|+XfpE:*3lPNn`i#MfV4Sid!$+Q+#&&tfkvJMZV33BHtY;R9h~)');
define('AUTH_SALT',        'FF"$|Dr$jq!vDS^KG0CXj!*?kn5I)t;ldz0ZDS*E|xgD`cq^PYi)n;L:`?1s4iK4');
define('SECURE_AUTH_SALT', '/uPQ?e8b$ck_a~a%2MIZ9;nFPOOv1f27HIQM+%_!DOkNmu)"0q%EItF^1baexIc!');
define('LOGGED_IN_SALT',   'J;DXLC%s@!F9h/G9Bu0m(63V~fI540"D3@ikAQ1Rh*!oh8c550Q91ty6x_&JLu1e');
define('NONCE_SALT',       '79vQeppF@45o02RDDW^c/?$3/~YNTInZ/v5?+9Hc|fL`dS`0Q0OGC;3%WfqS35&8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_yu4s3b_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

