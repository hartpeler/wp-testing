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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '4$ |2xw+3q#r;7R+]`=M}:lf|*!0$N^cqwUjpww5k32#M_-c7s9F}IajTd`vv4$*' );
define( 'SECURE_AUTH_KEY',  'Fa4x.=h0ka}1PpaQczA##nIDkn}S@AOZ<oGe?6UAfVD@`$S:FLGSH!h7K#i|:FXZ' );
define( 'LOGGED_IN_KEY',    'g;$0FM|.8#${3DYRV1R#tkuC6;-{:e?4*9OT,zdP:LLcK}#3WfyfEI/`%Vkusw:j' );
define( 'NONCE_KEY',        'U3Zb7:qI<$-x>4OB/~ScK=mIAp{;0oTh#`i1m&z[dE0&{ OK10fk9&zr:7vl9%*w' );
define( 'AUTH_SALT',        '=k+rA7wYl{~ioSqYqczgkn:Zi70FX|Hm$_NX;,I 8aSb].(lHpq&e%`Yk?T~7w^4' );
define( 'SECURE_AUTH_SALT', 'RByS-q!w^F:TOq4F1/(y$ DOYm?7jErJ|eN<i7{gO;{2hQyfPDrL|HNYYoQ[d3zF' );
define( 'LOGGED_IN_SALT',   'K)dsFbxznBvyRXBH.404TEd@b?PJSx,p<M%=UhXnXV}:lMo&<aG{(9}*|Lewz|&B' );
define( 'NONCE_SALT',       'fuqVTra=9foo>$_I#Q,mj<LQHhgDft/A1jb~9YzL5{#g`8u_e4llAzs@|eRlh  T' );

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
