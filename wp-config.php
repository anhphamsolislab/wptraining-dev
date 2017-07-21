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
define('DB_NAME', 'phpdemo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '&2CRT83A,gcr+|I%l+4x]aJMaD8#u*|ogHDKl[Bs/V9#}5eE^4F&d0it4m) I6bV');
define('SECURE_AUTH_KEY',  ';=3V9@oBS)a0G}vZ]>Q@V{Et^ hRC7[OjbxkdLia-7D+D>%HX@NUuRy-O/rT[y]m');
define('LOGGED_IN_KEY',    'eXz]m)3|.y;V@5DG[Id-L-%jedQmT4*:QT.{sqeb*$Q[P;$J^kY?DpG*]G?Nqn+&');
define('NONCE_KEY',        '>2#<:Xh;dmP(}rEe#/Dka= PxaY:7rv%:DOvZOhtPLR&Im7%Lqx(J9bQ,R$g803Z');
define('AUTH_SALT',        'JN@x {>1byzP^oVRaf2z/[0)kByFM5sDT=)R@UBrp@wr%!esM#+[X^O6~Gzo,Z9*');
define('SECURE_AUTH_SALT', 'kJJyjs$L}2Onp~7XC=46h;~7xceIRA3B}F{,|)Z~%1[i3ek`~JmTp9uB.8>_jmA*');
define('LOGGED_IN_SALT',   '_G~Ou .urF3UlmPPyYp/0 |#V?^cy8q4|t@7FF(C&W_r6Re!&ZW.=}LdR]8fS,L%');
define('NONCE_SALT',       '*5;a,5=9^;TB<BjS{j2{N*6Q!XCNXR/,P^vyCoCW8v~ /Ll<RZ9S_VA*_&-/I.wk');

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
