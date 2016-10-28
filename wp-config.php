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
define('DB_NAME', 'devr52_portfolio');

/** MySQL database username */
define('DB_USER', 'emon');

/** MySQL database password */
define('DB_PASSWORD', 'dsJ84VAEVqxB5rwr');

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
define('AUTH_KEY',         '_~@Q?-/iiN!kQKYrj{G95j9)0+d{VXKf)CGg<Pt/6Qa.tIU*dEC??e3+c{3z;@_a');
define('SECURE_AUTH_KEY',  ';ZZ*+uq&lRy[L{.7()lK`V{8@PSn$AR7gi`b6Uw6JiNOqh@eLGPy*EnzS9Y|M[z+');
define('LOGGED_IN_KEY',    'ZxOg*c$[g*GZUjp!!=$!AwjFyL|e28k]_7V~T/v?zH &?P0?$;?*P:]Sj{:]N1S#');
define('NONCE_KEY',        '1z/$)f|0>Va#nQ5#(+%rRfrr&&zq=7V);BDsK`5b-5y(.4f_Jr4% `;7w76}Av-&');
define('AUTH_SALT',        'p.<#:g>+ 8/>/]SYOORk w#( A/GQex#gu]Lzn!cqiz>hOvn.,C)/#EfPwfNCdg;');
define('SECURE_AUTH_SALT', '1+$/~5ZCXtQ5AGOZ$SbkHUmIu{;{4BnN3Y?vw&mR.3yR#j`ZU3ya3Iq@7_D+zq[[');
define('LOGGED_IN_SALT',   ']R:CrUQ5Ik5nE0Vj5?m.)Fky&~ W5AL wIr{ddO>xcd+4BUXrf4t>^SbO%IE&)&#');
define('NONCE_SALT',       '6J,zR8m}ULJQB~w48EqAfqAJ{Y<J{H/F6Pg|,ymJ5]ny,,Apf 9HXUxfm=aPFI^T');

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
