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
define( 'DB_NAME', 'walkntalk' );

/** Database username */
define( 'DB_USER', 'walkntalk' );

/** Database password */
define( 'DB_PASSWORD', '04127890' );

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
define( 'AUTH_KEY',         'cQ7OdLvD-A$58=VtM]VVF |p?Q($R>T/]U=5oo<)]{%r5k9P5)N(knrPtMJy.b#u' );
define( 'SECURE_AUTH_KEY',  'q:6M_oJ}U)[4Ie}|>gS=}tTsNY`u5YRyNx[#*12!5Zt/_4.;%|$vqtABJ&B[.<;t' );
define( 'LOGGED_IN_KEY',    'wwK><8D#B&#W_s|{$]gg:*4YK{M{@6]wNOivpqn#*-QDVbdtS#ai#eW%GzK*OxBg' );
define( 'NONCE_KEY',        'G<{miY<1U<HjZ{i!n]HDhF+ima#yUc= LS#TjX3SeqMwt55^o*6#v()>rU1=/__d' );
define( 'AUTH_SALT',        '$;g3&Q0ASy]DM2>$L7^SChzHr4?TpJ50Z?h,mvdIOY>gd}Bi5Um8ihjcu5oE(Ov&' );
define( 'SECURE_AUTH_SALT', 'F4trMa1If[r(nI{4.pNq}ZZF HgQ~n99Gh/V~K|f{rk/hUm+Yv8r5R{2,?V]~nA&' );
define( 'LOGGED_IN_SALT',   '`+C7@VBDBL0.Li=h^SSo^X+/}`Q9ORyPV=m3c5UpZ6cMvd7|iku(bQ.VyVcZps?_' );
define( 'NONCE_SALT',       'a E[N=$Mu|uLv,Nfbb?a.8,vJ$,77WhxCMOJ3PtRBY.) r;/:^L4)RZd,UI%ChEO' );

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
