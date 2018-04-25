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
define('DB_NAME', 'db1');

/** MySQL database username */
define('DB_USER', 'adbusters');

/** MySQL database password */
define('DB_PASSWORD', '#jammer;');

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
define('AUTH_KEY',         'sKXmGAp3RJWSBfRcQgMV3|8[Ef+=`bs6672/nfhimQ@MHK(t>}+SJj(gS#MR4#`<');
define('SECURE_AUTH_KEY',  'LR>p l7Q 0;]0;nf7]~Y h_Yk&rK`F`S&+T$Y2O5}^1}qUTLL08QUv6U8 aR6f?/');
define('LOGGED_IN_KEY',    'O+1!_G>.o0A^wW^I&[a,&Ay71hv<#MPEsV>;%aWN;/va1^e6hZJBJsJ[-)bYgjxK');
define('NONCE_KEY',        'lj~lU9[M{hNvkU3F&d: `]x*6XVw<Kf>lii8*b.8?Nm0FNiNV*]oi-~<.?]S&E^S');
define('AUTH_SALT',        'Zt6,6Qg}{_g@wf@s^@p.{?DBxo%~|GpkW4Q~zlpiu}54yi(W;M=Qpq,i)B{e3PBq');
define('SECURE_AUTH_SALT', 'E!HW=+iIC7N+,Y51x ZlD#A<E_s-+SNq <swzAZN,V~.SRWypjMKv1K6WanNpG[L');
define('LOGGED_IN_SALT',   'nClndw]-dJ~-pPByDmaRhu+=c~|a_=:7XIfUCk%mUQ-H@Uh:`/G`LTZg]XzWj52M');
define('NONCE_SALT',       '162kqPQ;4f/pg)!n#}_1tGw@fpRV(/Z*VJPVUQqUE~u>/$Kl!PFu}dC(:{3ssoK.');

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
