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
define('DB_NAME', 'instasharep');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vertrigo');

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
define('AUTH_KEY',         'baH:Xdky(r-2+*k/:Tnu}dpj$Xs,4n N61Y?FW4n]]u>!TWJ 3I8|sY*[:{Ou9oY');
define('SECURE_AUTH_KEY',  '(=P=Pr kVk[Z|<^cRmk^pW(b0wNf6.1Qyo)C#y*%|:w8<7.PV1 SIo3~Ot-dxE?y');
define('LOGGED_IN_KEY',    'JEUWn4i9-Oh-.!4!2ODo`=%0^:&`12#H+@p[;cyr^?M4-Oe$~9TIOofoh8;%eeX%');
define('NONCE_KEY',        'AQb+M:Bwaz3q ->^xh9S/!xlPKN`{>(XC`sE{^h$W~,ZX)4c1LbT|RIpRh8;j`#R');
define('AUTH_SALT',        'b{M,#lXsFjcQxX432mz6(KpLbQ]j`<:]od*=9X*6/|zj|I1z ucS]3eS%#j-))2X');
define('SECURE_AUTH_SALT', 's$[gqJAF2*$-iuC8ch<imT.%HvpUqQP@T<Oj_u@4uT<zo.pi=_t=8Skka*sV,K5X');
define('LOGGED_IN_SALT',   '5`a]){>lpXoh:(wMTHSx8]z}Eu}g|fyK9x%<8`}&39obA==UTW|w8d2!V2F$9hx9');
define('NONCE_SALT',       '%|&Tnaau)%iO&~`D-ya/T3e33zxz/V#&6b5J2@u:NI{Td0VG1O|y^?-C^oj [#+`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpd_';

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
