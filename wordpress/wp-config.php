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
define('AUTH_KEY',         'IRuyJc8bcp[,0*G?G&8{T)2;T+$Z`(xTbD8s$wK6s;K{LkGYG}Evc]3HR]!mxe%3');
define('SECURE_AUTH_KEY',  'O{*k]jI2)t(LKe,W/_z5>G&FiedZ[*l,0d~*c|gz{p=DJPrYhY5BW*ftiAtWkyR$');
define('LOGGED_IN_KEY',    ',B5]%oz#_fh#vJ*^jCz{dX?X-q(uy?W9)J3/TcU#}yWKuc|zv+_-(84Y]K1>ES?u');
define('NONCE_KEY',        '^-+B>fuV.u$RnDJ=p$8|q:>[jV==ay0]ro[N55V;}m#W&5/`g&=m1q>HC;!tx<u ');
define('AUTH_SALT',        'ED65AtJH:O`DaL:N<|!t:xik)ceGi.-j)-Nupt5&u2TRsAysay`EZF.#JXz&2A>m');
define('SECURE_AUTH_SALT', '!+_7gNyv]d(g*KUp83Tz_bl; /X/^A9JzeBt*oeACAycJz-3cgTTA}OsnNY)VA0M');
define('LOGGED_IN_SALT',   'Cv5n}Z}%9zlz{Agd@PO,:S>B9X7NSzh>,pPW[|G-(qw-p?5(bm&&,<1%V3Xghp>/');
define('NONCE_SALT',       ':gQA]Zo^7oltGnw3v~vmu}0G|15+jlPk4q9v){i@9m?1O)Zbn^s5]P~I8GMdNnUh');

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
