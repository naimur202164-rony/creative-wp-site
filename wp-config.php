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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ':s[,w.)? H=`2H%PFQ66 1d+X4e_=,|`Slv:}Er*dPdtY=TLln$seQ~07B!]di+%' );
define( 'SECURE_AUTH_KEY',   '[Kk<gQQ0ed@1]HY..A~j6&M_5DAdOc*-|dn3*}VjN-6WKG:#2Q:=_p<J&2B^K:b7' );
define( 'LOGGED_IN_KEY',     'PPCA]2N%,j|KEGr6&HS@$OJX)}>7j8TrKKZm>J3w]SXugZEp1zpAcRw^oplHV~p#' );
define( 'NONCE_KEY',         'Ng&[,Cl*{bI1Zp`x?pX_EK MMn)cDTQ}9~a}B8`+48]/d*r|~~Wk=EvuY07t!<#%' );
define( 'AUTH_SALT',         'Q(C),i1G3.Q}5WFq1]0f-THQof,$Y.jF=FKxX=ojWt*suX5[H7@v).OTsj%9##CK' );
define( 'SECURE_AUTH_SALT',  'E+VX1SaY;TT5)mm1@.{nRuHM81F3TP~ eX-|W +0V9/IZMG]<P<BdD(HM~T-Jt4T' );
define( 'LOGGED_IN_SALT',    'X TjL?2xZcMmB@b;L#9k$SQjX%YL`%PXbz6D5a.tr]aY?~(7rI^sx(Apl=TB`;&f' );
define( 'NONCE_SALT',        ';m~4Rmup:84:[SenNV+}#c{w!DVq`NkX`kNE,))oV*;V>c`[1/y}I@Ncwm&p{(hM' );
define( 'WP_CACHE_KEY_SALT', '%]kEbCf#nN;d9:jn<;w[]?WB[^AsS&kGD:bj@k{.AI+IRd:K$eZ9Vqkfc2^UE4#t' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
