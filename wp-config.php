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
define('DB_NAME', 'gabyc_db');

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
define('AUTH_KEY',         ':q;!DOc7am@GQt6~Ly0:0%K.9^XGYqE;~f,cm7rByd*Yt s6oSDQDjIBU<x&6drN');
define('SECURE_AUTH_KEY',  '6ji]SMj@F4 J?1a<1Tf[tg{kkTqDb|=un4CdMD>]n ,y!6m4(Ol4}wSDE`C8)(V?');
define('LOGGED_IN_KEY',    'mI7oc_~+/,JCqjn5];ZP:Gt5HCl[@N(a_Y`-s[4XaJT!?!>Gzz-#}6Z~h$FZ4[ i');
define('NONCE_KEY',        'kNb),IVhS>oOIm?Pxh8p#xRI-0?1#Yw1`ehap{]zP;b@bF)zmL?huh<3,hQa9Gq/');
define('AUTH_SALT',        '&B5KSUl,]*5[E15}Z#PW0~a{d{.2@.$E+FK,>F@KXBaW@][]c><eZp9?PJh4@a2E');
define('SECURE_AUTH_SALT', ':-h1Jwd~C)^b6dW%FZ/AY `e3hL)ry*!oZMcmv5w/zi%] `t&LB%m;O fINH%.f*');
define('LOGGED_IN_SALT',   '$bYeMiPUV5|{CYB1E% 7$:(BR)z.@Bf=5[!YyOc(-rGC;t&OC7S:K9_0I_S[|4H&');
define('NONCE_SALT',       'R_z(jM+[6z@P;mpC7CM)d0J[_T&=2p};ON?geXbMrh.<]c5FoT;B!-6O+XNloHO3');

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
