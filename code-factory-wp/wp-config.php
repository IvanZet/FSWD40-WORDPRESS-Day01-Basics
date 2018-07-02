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
define('DB_NAME', 'codefactory_wp');

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
define('AUTH_KEY',         '8a~DwcLR1zafzg;TazOR:Ggk=8K6JGCQUcMF*[%xG[F^~P,>ueXgJe,{.9W6=}.%');
define('SECURE_AUTH_KEY',  '/W+E`OnZ6&MBQ7wMBNmCwry::1L?Lad^.,I$0evKT]`~~/25H!)f k8;Fmx^`]m&');
define('LOGGED_IN_KEY',    '!H;O#ug#ftdy,-7Xs~(QxiYX<E^v]fV>o=+K=Fw|5s[gIk5+U.vDGGH.:(sExxW#');
define('NONCE_KEY',        'G`%{K x9_2}P`!`]OAn!;{yIw3Vx*?[Nj/%$4.:e?[q+3mbgg9-hAybOk5l|m+7o');
define('AUTH_SALT',        '1jI,H?{}(E/;-?~nO1Lw|`b3pRB&p0.k0@fDo$s~G)%<bU?[uR(P]kPG}-+PH$i8');
define('SECURE_AUTH_SALT', 'NA:abrUMV&4)`oCU^T_DPrkbsb7hchMj4~b<(y]~~gy6e.UxR;xU3Hz_c@Gh,nin');
define('LOGGED_IN_SALT',   '?_cq`6=JXP^U.eJ>O_-+GrS`6I61oPBfo{%cmVI__<G+Xw:I_krDSc~8H%~[3j B');
define('NONCE_SALT',       'Fx+_ZsscBjkoH~2(^15h`&vEKV*z})`V+zlz6YE.#I<sh@o##bj.3l$)f+d#hg p');

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
