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
define( 'DB_NAME', 'achosikha' );

/** Database username */
define( 'DB_USER', 'achosikha' );

/** Database password */
define( 'DB_PASSWORD', 'achoSikha23' );

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
define( 'AUTH_KEY',         'Z]~<6_UF;hK8C/c.8]Y[,r.69Es:H!7><#y#$R%r=yFdAn+6?TYGI7;of #t+`f}' );
define( 'SECURE_AUTH_KEY',  ')omFMS gb/N2WHY&`xhzfeblv--ypLY4c#/FCLM;[FA_Fl9n]_gJ)4*7J#^XmJ)z' );
define( 'LOGGED_IN_KEY',    '5khl)~pLrGbPp=+BiQYv^WRk&$b|~aHgoT*[EtPJ^w m2SLm/%KCPNh28c_#*`X|' );
define( 'NONCE_KEY',        'j}{/;Rd=C+8B)!+w#;MY6XBOW8d%DI?sK1QL7gWY-uxVz+e9k,{R:cP?5x0d{)U<' );
define( 'AUTH_SALT',        '7.r|c$eyj(0#iU_7rV:.Y!eg?$kp+0Lv+u_R<4 p C?0}9]uKk<tQYE1jSTCl`+N' );
define( 'SECURE_AUTH_SALT', 'R1HuYh%T+&$w-W2#LZ:7ZWfNYdWkB_0|Tc?{BWY,p`T;)/n/FzQ&pZ5`(zK}-f36' );
define( 'LOGGED_IN_SALT',   '~)dVX=}scI{z?FS_BP^|-lD`8LW>D*MDM!+sfynNq8NF%dWZLHTE8zB]>f~ViaP#' );
define( 'NONCE_SALT',       '8h03uPvCPR&^GXqRR45zk)^WFpLns,f(<}g.Pi><aFeCA>@7NO4Ud25vWv=$Vc8)' );

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
