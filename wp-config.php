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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'paperlinksoftware' );

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
define( 'AUTH_KEY',         '!J{7Yg%vIU5>8dP8krhv+ej+bB/$UE@>nF_Zp[jyP0N@TH|J8@qn)(%YpvQk{OjA' );
define( 'SECURE_AUTH_KEY',  'DjRy(/yN^rM87=g$@(8tTjU0#hsp>+yVJp+hT=4,Ok5iA,MwRNNlX?kS{*KDF_F|' );
define( 'LOGGED_IN_KEY',    'R(%BaY$M9kNhGZ~RQ[Q52yUy@7#UmL21a2~U]}>Mis;8)# S=uWD0?qWDZVs]`KP' );
define( 'NONCE_KEY',        '8I>,P(}jPjW?.W2gCyMYS`qw4MV(=$/LLdMjX-e[u3Bo>{qW(R}#e=|xgD>4VlL6' );
define( 'AUTH_SALT',        'Z5L~?()d[E0$Clf065/m*{j?ErmU _9=|Mi(^@Gm:=BvNa$0~?<#`o$]i#-vWuGf' );
define( 'SECURE_AUTH_SALT', '?uwZ2=A8,hv93;&GIvUc4]yz<-{0nN4#05Yt* 1K4lJ.KXK_[8:E_@XA<PhbvIvt' );
define( 'LOGGED_IN_SALT',   '/@qMGgqSlC 6;Qnfi.1EkN3Xkbz@)2I_iE:yT(6uSmm(puT>qwxy}n2Ws3vS3hAh' );
define( 'NONCE_SALT',       '[, (@oQ;I|V-1GoUslL@f,axz$.Kmp4Z/]T`M}*9cjA4T]7FBh-Q1U*| 6jFLq%D' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

