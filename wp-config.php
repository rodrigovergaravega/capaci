<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'wordpress' );
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
define( 'AUTH_KEY',         '5/i%G^w,gJ]6._gV@iH3rs6c89qy0JpU?^FSdp!rVkS>7%5IU=zaEZ.py0RklD8l' );
define( 'SECURE_AUTH_KEY',  '5,;1fzMjYGE0L*9:E75k]wT9/yg|P2pcMBGyg7iCvlt_S#`s:FF+[<<YnAx?LXx2' );
define( 'LOGGED_IN_KEY',    'd(asD84x:>lvw&854.)GyR#y*tv?^_ <!AUd6prv85`8v1_YOn-Sw^vFg&b8:TBN' );
define( 'NONCE_KEY',        '<og!s{Fm<Pz^*tD=H{B3ysP.m!KI(*43+Cu`QtG`x@f9$~BXd#/*q>{~|}>Ryf(n' );
define( 'AUTH_SALT',        '>T?V)Ka.Qu1uAy$R$m,lQf!x-Wz-TeRAXJ$]g1d7/Iaqoiwe7C]zT.jS;C3fqd/*' );
define( 'SECURE_AUTH_SALT', 'g1?j}{UFzt?pkOZ$3B8$0%JL0vIEBw0mW?hLAbcwO}wh(R_vgQp_4n>RErpG4c<O' );
define( 'LOGGED_IN_SALT',   'u1|7l{U{-Wqj}z8OBWO06-~SEcWyKF0;4Skl/`j9e.6Lz=kQs),wf@ZxMU+j{!=N' );
define( 'NONCE_SALT',       'F9bZHj^{)Q^7gUugCmgf39zn-as;ck/$64B)Ip4oI{Q:jS=qPkWHf9KuOU5%}IM~' );
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