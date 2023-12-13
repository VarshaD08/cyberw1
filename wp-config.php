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
define( 'DB_NAME', 'cyberw1' );

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
define( 'AUTH_KEY',         '<-r1#[hh)W<^.RACVxxzFk/K?21g3NxJGBZRZ+hM3f`%)i0N:)qtMB_=}hDJ+q]+' );
define( 'SECURE_AUTH_KEY',  ',xjq]nF,TF.^Uwgndy@1IAyS ihlc82cP9dlTF|$l<zE}QBk$WZ* 70J]0?Vm8r0' );
define( 'LOGGED_IN_KEY',    '*NX*yOR-yBwTO!;<V /}L3.1>u@UAaidP|(r1jiQ$wx;5~knL?IKMvrdm_mJc#/.' );
define( 'NONCE_KEY',        'n3,J/dMnB(SW u@h9m=oX5JU7ha34|PaiQsr_OG~8IGKi|bYAjBd1}-4G]?H>;(~' );
define( 'AUTH_SALT',        ' Ae7v(JCX/<&(cvzwdhjk(C1- #ja?H|zXybWA[S[s3YB5^F.,0MD|kU=AvI(+1f' );
define( 'SECURE_AUTH_SALT', 'm*61.%32hwC&+>Pu(of*5}a_w_ky 0d0swj{r!M8J+E}YP>*X wqmlLo!aR`DxC^' );
define( 'LOGGED_IN_SALT',   'VH!06F-0vU(T=JEaq*e(rp)H,pPtqhhEbd~Me 5,v4CsoKFZ^6$V-]kFbLUoKh>r' );
define( 'NONCE_SALT',       '_A(N<.)=WNIsn0IU$C9ETB=N$8>c7&D[|oN+va)>.+$Ojp<S?AhKrPffPlS:N@q+' );

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
