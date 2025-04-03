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
define('DB_NAME', 'hoclaixe');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '&r3$)7s-bHvcw8M|3*R:]ZENX!ASjngKcQKQKNpzvL9KQ@Br]-eGypCm|Jjy9G?v');
define('SECURE_AUTH_KEY',  '+1^ZpiSbUoqw1A2Q?mqu#he}W8q&?YNQ9GCRG8owh-:p,Cl(d6&_:&6oZ3M9>+%q');
define('LOGGED_IN_KEY',    'zpD-;mCyIC0.4)pvXPRi%F%w_5 TW*(-.|DFTt0<qMTYy=(O,e]k9Bu?tpkh*@ha');
define('NONCE_KEY',        'pSJB4.OL1K]. _@Y8d;0/lEWa-9/ZM=*A@XcWY5iq)#oy:-SS`)PgA{pimb{gIHq');
define('AUTH_SALT',        'b%!;KAvVoc> 0jt`%;HA(R4[$]gpU1}mxEF*)l^ap[x[|&| QwrIx=Nt)Wif;zqV');
define('SECURE_AUTH_SALT', 'yyu8cLxd:]dAGw>>[+{9/-m0,18Ob{S.[LM>( Hi5`RgWsbDe%.J^N_p8dXAf}tg');
define('LOGGED_IN_SALT',   '_mYYyAvaLkSc:~y?^j8XXJ0>KBS}{$?K>qe6E/>+cyF=AK}?CrE7L5yO|s$4XO! ');
define('NONCE_SALT',       'V4Z+X%xBt2%7 ~T3uhyT#MDBM.~T)P&}tcTo IF)q*0~~#<.0kxX/If#l=D>[Ef|');

/**#@-*/
@ini_set('upload_max_filesize', '500M');
@ini_set('post_max_size', '128M');
@ini_set('memory_limit', '256M');
@ini_set('max_execution_time', '300');
@ini_set('max_input_time', '300');
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
