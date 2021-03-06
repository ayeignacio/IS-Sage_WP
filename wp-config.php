<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'venerous_sage_wp');

/** MySQL database username */
define('DB_USER', 'venerous');

/** MySQL database password */
define('DB_PASSWORD', 'p6cFY1w0w7');

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
define('AUTH_KEY',         'jN5!RB#j|ELR|,Ey IHe<&CHS|c|<(jC:4$+#!2ZdPW~BsE+JR>ThB+J0ws*fleb');
define('SECURE_AUTH_KEY',  '9Hp=C>;yP`L`7hf0: o(h Z4P*EMQ!KPz=ip/;O3*LT>A}_K&0+Aa~YB^$nR_m(:');
define('LOGGED_IN_KEY',    'I]f$([AQlgpf-6jSku_0FWf#XKg3|]Wc!<E ~usCjy<D-l6+/2hU4Q-NF.,e>oz5');
define('NONCE_KEY',        '~PJLOg`Dy-.fkZrKVuX4$p8EQ@6;b ool.^[lVdV56 Nkv)dQ;`2r /|mySI[02V');
define('AUTH_SALT',        '#%.4K3hV|D]uHR5/.+.%MHwQD^<@$B[[qu,@hrjcI{8I(O^e*YJYf^1YW<Hu5TbF');
define('SECURE_AUTH_SALT', '9d$3rZZ!jcDnHAt*Dh{04#)tAQM2Z.0GM&e-q6ty:{-O;-0JfoKz]bDPrLOa3+{9');
define('LOGGED_IN_SALT',   'b$O+h/|?l9rUa%Az(8Nh4Y3DEg`V:iN/|C81l+(|k*qe=Sq $YowX-|M=W`lTDRH');
define('NONCE_SALT',       'SJ~Y1Xl#p]b-_X(=y*?1gaV7,%WLK)bSM%F-(9.D8<&,6f,_&wp}!R( :Z/KZmPs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
