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
define( 'DB_NAME', 'tracking.dose.com' );

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
define( 'AUTH_KEY',         '2^`|yx%|2Fe<*5NK1G(RaNO6yO<XRS`(=i=AxEA8g:F!J`4C=pD&G}tl>AC9q+pl' );
define( 'SECURE_AUTH_KEY',  'qb,HS<wFc{I %2V)6|Y:+B5l*ciX@;PBtT;+5[!;jcz|O.w;HdF$^5(moW^>&1^g' );
define( 'LOGGED_IN_KEY',    '5FLRu5y.F-%KywlnshH{^1Qo-aS)8f<xfM^!#J],.R{&fz9UTPHbBxa#0MeIFMY/' );
define( 'NONCE_KEY',        'A{ *Jb==Fih,Gwj$UJgxuD2`IK;)-ky]3L,ag=nPIcO*Ex+RcXZ1_@&.<4931k(o' );
define( 'AUTH_SALT',        '&Xo!hTVZYUALCd`A/k^A@2uM7s|gLB*plc-Cau;_kMn@u,<S`pm)nYJJB!aN8kr(' );
define( 'SECURE_AUTH_SALT', '^HeT}45.MK$Ll`}~4Yz|<E_Ti]}Fs}F(mEu N(C:4Bi_4eQ.5Z>~*OVpY{ZpG-3z' );
define( 'LOGGED_IN_SALT',   'f`<:lAz!n-u!tTVZ1}FG-KR*S1^scw>@J>vw+<vj8<Hnd-UU)*h7uL!2Wu+TL@t}' );
define( 'NONCE_SALT',       'vY-w3u58rM{}HI-gym<NZu8z,?MJ0K.ylu}Pp`i!W796psRVY+b)Bd&z2sVHkl6q' );

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
