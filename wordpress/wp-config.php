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
define('DB_NAME', 'ros2');

/** MySQL database username */
define('DB_USER', 'rgtech');

/** MySQL database password */
define('DB_PASSWORD', 'Rgold123!@#');

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
define('AUTH_KEY',         ' ~dgW4gyba}nP-&3Mk[c~fpt2u4bX7ONU&2-%F/UP,1U&bVM86aGn =ggWdG3]St');
define('SECURE_AUTH_KEY',  '! o:iP`p_t%KhXJJEM_AGy-=|c,x!X7sp G(=3nSOEa.V!/@NO1kS1K^S7npU*W?');
define('LOGGED_IN_KEY',    'Pl[`tyf^O0$jpZ0MNDg^<dQ?_JRioV/3Pt,!cnXQ``*x+3,o[g^ri.q|Y}=c/hqk');
define('NONCE_KEY',        '@Rm.M/~>ZDX$[UWWM(5|aBVo4=U*r}#YSG7]OAXptzL~0*&m2UiBToGHa:-Q[Cr[');
define('AUTH_SALT',        '6,@)vh=^F{@I|H1P=,u@E|p CzwLY|KeZ7ku?gX<+!oZ@|+Tz>*z_1.Bk^j-,@-k');
define('SECURE_AUTH_SALT', '~S_Ooi46J&*u,yazZJm;zNGH$$#NLI}L/)+W3hlk$|zvRsdxSY-Cb{&|nAMWcyeW');
define('LOGGED_IN_SALT',   ' oHrdP|O*e4s,WmhyCFpgqs1hb@:Q;JzzjK#C:qLGu/K5C*+;ftZKEA;(hB;8;ad');
define('NONCE_SALT',       'Qp=u)`{Ph<ow$O?n.#qgaaDKl8#+FsrvdSEAVoX+?-Eu!Lf%q;Y(!br+Nq/b2+9~');

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
