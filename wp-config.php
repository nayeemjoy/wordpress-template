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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!yQ6ZJ</-J/RD(D0i&Gur-h<8sujoi$!$d>Ofk!9S=i0yVb2]x$pX.5h&B?(*F#^');
define('SECURE_AUTH_KEY',  'Z!re)M:xq-t1Vx9_H|H`g!(b}a7:9pJiUNC^d~Rj:io<&@FKV8^3cR8aHP5:!$ /');
define('LOGGED_IN_KEY',    'YUABtX[l{@i[mU%D^Sr1(!|b=YN_97!jIN_=9s+tDs%B`D%8u.%:P`,GPIVtXfVd');
define('NONCE_KEY',        'u|B.JHd?U khNY(xJ1gN|NxzU`(p97{n6!QJ%9)T,:;yrFjvCw*X[qaxP6JQdB(y');
define('AUTH_SALT',        '%)4$6521`P@8]MSJDmY)0*X^0sui ,`;Z.;zZ7=nIs 7r6&xYfp}a,)E$Y+eqk; ');
define('SECURE_AUTH_SALT', ',{;/&0X~iXUBI8^Z]5YmWoqR18[^d;~,MrQK3[,({#NysbrU)w{xMPVfW}u#>EO3');
define('LOGGED_IN_SALT',   '$_~(=#I38I%Siz0t8,F8e1@e`A?YNOKbuuWS]>rg!QCh&)XL39haEI^x?i ;P6Sa');
define('NONCE_SALT',       '.H+,lfE.S!sMAr51,CZVgTIqFVOL{YPf:%7[1H2mq0F}aM_.p)Sk`N[}5Wr7thhW');

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
