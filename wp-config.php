<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'testproject');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Nb=NYsw&|K(SUuw|X`DK;X[yc5?PL=cZ} -S:bJ1;Z4rRf_g]4OE0Y.61 C|a.{k');
define('SECURE_AUTH_KEY',  'C;2tKN6CpiM]VIK!$Nv$yxf+~05>0V,Gk;iL0Lb9Z|q]{.n>4zH`1ciW>,5KyqUi');
define('LOGGED_IN_KEY',    '|DVa)K6@A,Q`J.rX@r^$+2Q-9 5W}|w0:}g}u].=jRp_2E;KU`+-}h7DZrsei#Qp');
define('NONCE_KEY',        'Nz&b}RgKThX{59Ha2YmqbB+-*5ddWepo>mjldEG UVxsS;j|I2b:1lu]`Q.AhTyt');
define('AUTH_SALT',        'KQ9>puZ}=8^y|Ed|e2V|@+W4y.sdpwZ%w9#ZmX+4q=kiYu]$3~LNhV9F;CvO*T},');
define('SECURE_AUTH_SALT', '-T{VJFXZ46z}_Jl$&hFY8v,.wmzS?4bn!RGP3u)HaWRZ517r%Z]xa%:8)_5j )F0');
define('LOGGED_IN_SALT',   '%LHb9q]^-tZAVTOESbz E1)JFTC=sCxCw!y^:J?y3e1kt;trj+3!z-I_e)hF4|`t');
define('NONCE_SALT',       'V/1xWR ^|Mo+]++--*Sw&D#QI6oZ4*h~8?RvnA3j|mFEzFQzuIb=3=^C8klH:rqZ');

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
