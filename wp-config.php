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
define( 'DB_NAME', 'softsolnic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ntAe*7SaD$HGQw;LNx`R|elJS<GtR~mfzvH(M{{.G%]oyoH&#QR#/T;P!Mql)?i1' );
define( 'SECURE_AUTH_KEY',  '$/_{l3nyqI@Dtqjx4n*D?Ka~XCt)lH[3b*eXh/_ALw!rPK%@#V2i)B@K>OqQ1wzj' );
define( 'LOGGED_IN_KEY',    '|~|jB_gE<0viYOX@amD{X5SZ}zID?]fZe ehhIJK<Cg0`P]!xsx$_s]aO,kG}]?q' );
define( 'NONCE_KEY',        '<,2!U _Q>.Oz LA5@K= )udVWYVn=7N,x}J7z4Dr>f3!c1%e7O yyJrHMn^pI5h.' );
define( 'AUTH_SALT',        '/C+QKc`zqdMDxZ=vidV(n{&1x?,f$oBl(+).>C_Fq^?UJ@!N_XgdxQhe2%7*z~XR' );
define( 'SECURE_AUTH_SALT', 'NIh2Q$CZb_z*+X{/]d8MEs8)HB$*D):ocOHk@;TaH<W0([[,TrxXy>{<0uc}]b[B' );
define( 'LOGGED_IN_SALT',   'Fv7lR6sP+b#(DX^aUt+EsTCA%-^&, 3RCSJ!TG~HTEzb[&Uvbmu0iBQ*?.wR)t>k' );
define( 'NONCE_SALT',       'L{FX96]m<nz6nwl.J[,L$ezF1<#_;R|Rd^4U%wjh1_po%;O&8y<jIp~gg~><c<Ew' );

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
