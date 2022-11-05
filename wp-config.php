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
define( 'DB_NAME', 'impression_test_db' );

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
define( 'AUTH_KEY',         '|,ADo;aX] hW%g!GVF D3!on$/##|ga9og/@!$aGKt@0,>s-4~i)AfZw[ 89[vm}' );
define( 'SECURE_AUTH_KEY',  '7Wp&]hm}HFfOEbK uo9_vnm40OD$!D2Y~4Z05&jaaOBp**Ohn)Vzc]^Dg!syshDC' );
define( 'LOGGED_IN_KEY',    'vLzv,NP*Hl:&:]Gfz@#}%@>o6d$/oRw8B6erG?=`=QU7t68J5^Bj1``iR}WT8frC' );
define( 'NONCE_KEY',        '3_Sgl@F<[RQ$eDw rmyyKKWo<]4NI o%x:wkBg}$_JWvczieyxc}5CRf~x^.m2.G' );
define( 'AUTH_SALT',        '?&^v?)HmX>z[T;b=@=kM6`GSp$YG0.;EN>jL3 5gC(QInJQ$Rat1Q>*e8~3L}7LJ' );
define( 'SECURE_AUTH_SALT', '4B,,cAqf#g}c8wh<P/1g$MA_GLINr^}BteI!(?Cj+M^!&Fu2>Qb@87uwU!G.a18 ' );
define( 'LOGGED_IN_SALT',   '~!JbsP2z|sZh2H0: zKijQq4DEt/K15E(=I-FzkL/sU>Z]vd.8SE1i?<VeLyeTYC' );
define( 'NONCE_SALT',       'WMF<8#VBcQ_lO$NL-v{X[$@@z_f2p~5!W C-@)lsOM4nvGa$(cGASxA9.yJxzV/V' );

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
