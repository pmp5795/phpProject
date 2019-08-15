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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'HCZDPhY/+=vJ;eVoPca<^Co[sGPNT4h,J+whS&;!TkgrC$A(,+x9AXO-r95QLO#+' );
define( 'SECURE_AUTH_KEY',  '=?j3!;aSn9L/3i7HyBH}[Yqj1Iwa~Z0Lv3]2Ad{-/PH3},/oP0&#_/Zd[-7,4zJ1' );
define( 'LOGGED_IN_KEY',    'C8S^^-=>^oBS-krOc5vp&qE$Qk7uC0:jXQ=)xe !6ldWx8Q&ruMTK&,9C}03bZbL' );
define( 'NONCE_KEY',        'h9@l*UZSSR6r.3e&up~}p:3^~4tY1?4s>ks/Y@0F@l{S9Nt!_)+f0vc,&,%-D,jP' );
define( 'AUTH_SALT',        '8PdTji=un%f_`M3?14z`v%?!7QMTsK&Zp3qA%vlz(NZ6Q/<B(3~AWwvW#l];_e+b' );
define( 'SECURE_AUTH_SALT', '$.:<9FNRvf3um]/xs4#bdtlLv5kE1ozoIjdbm(E~4oCMuk{S}M1aIYzhY@(!^QwT' );
define( 'LOGGED_IN_SALT',   '7yGx,SwfPsU&|$0vyZoqws@zp>)JY!SpTV0Dp`+eC`uaz4RRrPj[~>3KE):aFd95' );
define( 'NONCE_SALT',       'qc8).]/Lek:7CYvF~1ttfr].)|1cSE(20S1KdAhoy~4td!WZE(|OR^ainHH]=Ine' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
