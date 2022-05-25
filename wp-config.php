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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'artwood' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'j<Ged<g7BtD2:XiNT8{[F`Ox?{Qu0pV&X3G;_m4D?(NvGIvLnMs4N5zUV@W,fV4;' );
define( 'SECURE_AUTH_KEY',  '4K82e&a6nlqx->]S7UmqG@J|I3F3)k@-m;%}=qw1{MxT*oskf5:DTzY4go/*!z*D' );
define( 'LOGGED_IN_KEY',    'QX34ia(-rPzy03kw3Ow-l_gznHoOKeeEt@y~+@,y*%r]`<#hWrSl>iT}Ijbdk6{g' );
define( 'NONCE_KEY',        'Ffi-R#Tf1w[JeO1qQ{b.hU_.)hX&!?oPl;.ggN0l*:Nikf$1=Phd}2SW<0a7NS%`' );
define( 'AUTH_SALT',        'OXq$5N#0l{+RU/T8?()Jo7LwF(#M~Fd[j$=P>Za1KBT7ia>v;n<I0kF$_b{ S9a;' );
define( 'SECURE_AUTH_SALT', 'M%5ggL)g2*QE!^/-:>,X6BP!~;;;^K8GjYjI`4oFz*p}oq-JkM<)fKUA.soNFQ.;' );
define( 'LOGGED_IN_SALT',   'gfihpbJ;nEY_QOO^vp.SfI]2Wob,0YIFc7G8tAp&:>UZlokg*,{m)OQ7bW=n%=<3' );
define( 'NONCE_SALT',       'EPJ1@pk+L<vNE:!>B{/)!4&;=Acto<%B>[$/ ?UVcSj!:W!{u~+Nb9#Lss8E+*EP' );

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
