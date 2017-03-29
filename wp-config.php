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
define('DB_NAME', 'db673761638');

/** MySQL database username */
define('DB_USER', 'dbo673761638');

/** MySQL database password */
define('DB_PASSWORD', 'Admin!7282');

/** MySQL hostname */
define('DB_HOST', 'db673761638.db.1and1.com');

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
define('AUTH_KEY',         '[wx+Mt*+Y>[gnYl Z3iU.ZB/Rq>L3HivC^GH5gSgcGCD%oZm:D@eAH{>_^d_jh|>');
define('SECURE_AUTH_KEY',  'Hm)[G=.`O}^ Y-^_m47EQ{Fn*gPGWwM<MY)ji*h:%aVRYI;)z{,<Gq+{qC`%3:9y');
define('LOGGED_IN_KEY',    '>!>=sMSr/ QH7I/e?^zzv2K]!I-7+WUJ]HOsytV(IB5{2_LA/6,]~/032w(469El');
define('NONCE_KEY',        '!@Ayyl[jh!mx?Cs5)!!P)uc%`MuLa8gYR]G;}{`~#C}.7<r>@}C`sx)=dqcXi@c5');
define('AUTH_SALT',        'i>:H#Ez}mAgj_kVvFv[xuFkqu=ufc[5>cAb2tc$kO<oWiUdpvbxknh>j)Qmh}cJF');
define('SECURE_AUTH_SALT', 'wwg:V7X`LXr7EYj[bFNgrBDw;b582[j$kO!C,%[q2w0Bj+~kt-{/i{ Kh3?{=-DB');
define('LOGGED_IN_SALT',   't_PPk1+<&,y(:<%Yt> +71xon8Bru3 =+OZdGZD-7SGf5zMd5&,Tn[AViO(RB%E%');
define('NONCE_SALT',       'Az4f*Z0wjXW-#J>s`45QzPcRpN3^V*;Iiuy|e 3{OmkdCI~({6}4*;fWpC5yxD#M');

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
