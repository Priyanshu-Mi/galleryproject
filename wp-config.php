<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gallerydb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IW)Runj,sxvN>0VFKh3SV%VkNGfa3Dc!^c%]Fx@3;?$!&/<M//fZdf?+xeKAV5:p' );
define( 'SECURE_AUTH_KEY',  '4dM=#QRz@Sp^SIw/H@m`pUrv;/caFC,m:N@bCt-C{)p~KXtDv]lP6umiFJ.DdvLn' );
define( 'LOGGED_IN_KEY',    'K<2udXd$lE5g#~_Nlo!bL?*j}O>BJ#3BZ[sTQ5k>pAC<=e.n&XWn8Q.$1N;r]!<$' );
define( 'NONCE_KEY',        'd+CvXmj9924Ip?wZNX<4-M2WV`,9/D%_$fq*Y;9L(,ahZjFU=0RTrH/pEsjW)u!X' );
define( 'AUTH_SALT',        '(Te_[lf9A#rk;`Hv.=fyF$#ixsdUj>;w1fg;DrEs}HZGwTwyq-z7--?%D-Zs,Fq~' );
define( 'SECURE_AUTH_SALT', 'D>TP(SH.W]l{=JwEhGLl9[TuW3qz~io*h@p+q(S[wp`1B5XT7}Osy avz~SetBKt' );
define( 'LOGGED_IN_SALT',   '=@=Oj->gT#3x$9F; Z!9.1EnG}A%|Ub;Vo<}g1~!_)^}IW>D8RVf4g/~A1UZA5j;' );
define( 'NONCE_SALT',       'Ge%K/g32 VNh=W]%^)AU)%RZi!6q4l8+bky0tfMvhlbS}6*FQER~F+YJdqo6*uh|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
