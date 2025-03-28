<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'education' );

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
define( 'AUTH_KEY',         'r#m}$-4o=o{1^YK~wtZVx8wivcI6&qNr3Z950 N}]B xY1q|wDngJVR:k#Xr,L>-' );
define( 'SECURE_AUTH_KEY',  'Q%?P Q:`.mM5wFXB_8CFQxnAD}^+|W9Bh-]#(tJlBXNOR/xMaFQ~^rp)P=!S<-JC' );
define( 'LOGGED_IN_KEY',    '*F77k%S|5E#vjX1P/C-@!9w~<8*=AAH>L[mxSlIe =o^{w)Xs8)_v,KU*i<_(8/f' );
define( 'NONCE_KEY',        'c,2J@uuY6!XfI&<v]|eZqTzh(O?+R+6*HHj$x1$0T5|Hd;@kN_ZY6HcnB70~%*mo' );
define( 'AUTH_SALT',        'hHAP<^3<]YtATNBX|5.P_BW9$,Sm]EY!RMM{zD_KzVy34M4<{B#dD0ifVRX,f0_W' );
define( 'SECURE_AUTH_SALT', 'G%)2iP&@G?uYmCahw#kOD)~QjseH-np+.rSsx!+lx%]aKCwHd%)^w0w}oeS[wdi}' );
define( 'LOGGED_IN_SALT',   'jLoi>U,i;|q^(Dt4Lazo;<+/kYuU|R$Oa0>7ZS[9~Q{@Mp1=6Vzfo>Nu(sLfa7ln' );
define( 'NONCE_SALT',       'j}y`7MN1N@mOff{2.Ib6[jB%qFqO2r%2h;&u3QgUw:w Q[Rv+A,*N]*#w%iTWMvy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_edu';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
