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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_gb?UA1(r:t-=ajy9`n!EZV8.I9-15m-RR<S8BocX:2#}@-ft1%pb!IHeT2;)#nW' );
define( 'SECURE_AUTH_KEY',  ')s^n$8j>*5pXs.O278-*y_Iq`+6|f$G$t7D_M&wi*JL:H]A+CQh=>{X3w/Tm=:Ub' );
define( 'LOGGED_IN_KEY',    'Bdlf0/fKP2,AL^b9$r{<Fe6Y_n`ol,q%N==-/W5RHE^;`/YjB@*};dPUD>6b#=IS' );
define( 'NONCE_KEY',        'T0JoQ`7Iz|^tc}coe6RV]HNM,QI%^i4 9K_(y^oJJ>)|VXbt[nv(r0yk>0lZ2$=2' );
define( 'AUTH_SALT',        '}t)*lRjf,RU0I6ZhR6SbU_cr0g}8 A[mUd>`xFVr:ReiLTfPkg6<C]D&}6#vV=5^' );
define( 'SECURE_AUTH_SALT', 'xBU9BXPDTy*>,JZEHZ;G&RfIM{FM~jA cN|bXw3NlN:Icue.YDSU&#:<M=[;WG.<' );
define( 'LOGGED_IN_SALT',   '.-Kve9W>#8],o9iR4b0JrTh~RY3(#*Qz-~+Psj iv;;+TlUc2S{r hVqN?e<ET4;' );
define( 'NONCE_SALT',       'HrN5v#ky*}Z`uQ)Y%zy1;8wtr=|7=&{&M[|Pf~QOiQp]A!MzfGu#B&MGrxpl=bN<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
