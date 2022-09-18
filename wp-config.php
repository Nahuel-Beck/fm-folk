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
define( 'DB_NAME', 'fmfolk' );

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
define( 'AUTH_KEY',         'Y6+Q@{k_.A[v5nY^I,qiB$(p=k$Mog-O!K%G)^;)Sz*JT$D^a]*r$UEQR^VP-6HK' );
define( 'SECURE_AUTH_KEY',  'oeI.xFBBwC|V|1tK.7K&fEABy?#)O-YV|(4%W$]&d%R+kO5wB6#DL9`vQIUv[x4Q' );
define( 'LOGGED_IN_KEY',    '?w@# Q0q5)^]YU]>?]4@RA5ei&7c1M1C3Ijt[d@NnXKEoE*M-Gm5cMNDz;`Ub 2&' );
define( 'NONCE_KEY',        '[*dO{7dc(3/L[;nb;zK:g|y-; Z[oV+Z&)sfN8{aU7/<U7SoEWaG-]enh,:>lxa~' );
define( 'AUTH_SALT',        'ozUhVs2qQX6D=>F7^>qeoJfd(fALsa&)%:`my2H;YV+c)vU:o&$$hK IKu!76jsm' );
define( 'SECURE_AUTH_SALT', 'EHPETGppAzC4~.q1xzVEMuhOVe)$@Vbz0b$|48rj8t# U]%91DCL7yRoh]; ^d&C' );
define( 'LOGGED_IN_SALT',   'S#E*:|f0]XRK|1bnl^.r%{rhz7s+%TsoG.x_CRJ9;28H:(JeV3sTlZ #o!=:?3Mg' );
define( 'NONCE_SALT',       'K?7z$tl}^I)i&T@o8`*t@~)W(np&l.Q;2P>C37J}=XCs064Y&/2Rva1bf_a4V;(=' );

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
