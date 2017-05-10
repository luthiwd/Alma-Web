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
define('DB_NAME', 'db649073470');

/** MySQL database username */
define('DB_USER', 'dbo649073470');

/** MySQL database password */
define('DB_PASSWORD', 'Almasonlospadres2014');

/** MySQL hostname */
define('DB_HOST', 'db649073470.db.1and1.com');

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
define('AUTH_KEY',         '44Tsoz|?Ko(@BMwPpZl4)oDF.QVnq(pgZ>j;m^Ix-Wm9?V%u3>M13Y) r77]^Z--');
define('SECURE_AUTH_KEY',  '6zag;74y/k39JVW($!QHA@,5knj/8dKS$8f8=@hL}{`b+W,r8c/Nbgu2T05w,uh8');
define('LOGGED_IN_KEY',    '`]K.?vD$QZU*nn%j+?(%+}--G&fA_[gBf;h^T2{j^^M:Pn&U$7/uFWm[q#N?Qfi4');
define('NONCE_KEY',        'i<q<V:5f5`_Q,aA$&t8yL;ob +k?qxo C7Xm{xw7Ww-LhTb-D0<qi39W#58`x*.)');
define('AUTH_SALT',        'arZ3|y*V5@v<x`AqjjgAsW:]O>&Fm8rk7%4~Z=Qo?nWWHk%L<ewv,=oq2V^Y`(Lc');
define('SECURE_AUTH_SALT', 'NB[_7:qyvCu9zXTV]yMZjMdZ>3(lBAl)+/uacnStIX/gWbtiYQ8rt5`S]_H|k&^%');
define('LOGGED_IN_SALT',   'p.GJd&QT83`@=tC}n!o7s^nYq6_Uf5buO%GzDwv*ax:r[sDt_un(i[G7]Kk!Dp_Y');
define('NONCE_SALT',       'W>YNfgw}baM#WbE%H7E=griz L2y{(TN?P3B^Im5ZwU95vK|RlTk#xQM!4E8pby>');

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
