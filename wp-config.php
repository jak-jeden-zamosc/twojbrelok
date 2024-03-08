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
define( 'DB_NAME', 'twojbrelok' );

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
define( 'AUTH_KEY',         'T>L&o(;Xp[T,p=].%c@Ui)-*G)B$&NtIf~xrD!%C+J#|.A8c@iyE+!v?#F@R_^gY' );
define( 'SECURE_AUTH_KEY',  'wRwUjLt8@Zo$$GZVN5^6?TZ1pWLCZB_01zifpkYJ^ly~elR*De)8aL&[:Gv6lB(M' );
define( 'LOGGED_IN_KEY',    'O1^6hP;|e^Y+BE4%lMcdg|WR)6Z2#T%+%!X2(EBHSCc-u,54xteq5onTMd8t;dB-' );
define( 'NONCE_KEY',        '#.%259~fttA9Bh0wvh]m(J>X4!TFp&]{%s1GD.;nW}(x-D<lSaG1TT$h1m0iIkxM' );
define( 'AUTH_SALT',        'Ar{X)0D/`d4^wL8{d/rm:4A)dMN=WWe7*b+d&^,&6K,3v]UsKB`.+3vbm jIdW8P' );
define( 'SECURE_AUTH_SALT', 'eGWhytKWGpiIl:V8/Z K yfAH{`mHRd=0-%n@WMbmy2nE]1aD*l+T[A-wc^Er~ne' );
define( 'LOGGED_IN_SALT',   '};7R,isT>& hszXD7RhP>5^r[i@CVXmwvbiC=H-@O7]7M#uM$HIHft4Te#ZKJwm*' );
define( 'NONCE_SALT',       'lPJTH+L0cG$6J4ea*J,x-484@,=jqvxMMlBD4>kqIkp4G/g 4hf?OcT3TXg98m~y' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
