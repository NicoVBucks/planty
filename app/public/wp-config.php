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
define( 'AUTH_KEY',          'Ck;!G99m]{c29@.2F2NKmguF=/7tN7]b@2j20e6zGS/CF:Iw&DCyB,^1jBqv^WeF' );
define( 'SECURE_AUTH_KEY',   'h=~u^:5c_!5*dWcj--{{$8@1-GxKOwb+$?0<shTxy]RnW^/Z&2Aan(_8ZT5)doT:' );
define( 'LOGGED_IN_KEY',     '=,GzMI#G#vRFciO!D|l%UuUUayx8{t4bT32Sy3G2EM,39UoKi1ZVsKBUphvqx7Q`' );
define( 'NONCE_KEY',         'bMv:yp=2#6pBvKAuWVwdi6/ceuf@{3:ViX0*%wy9[:0L6qEhosUFeW_O-rQKwD%n' );
define( 'AUTH_SALT',         '}eqd[|XvOb5#j.XR.rE>Udc3]a^/GL;]&Shk)Th?V,!L*6E4J%j{nN0uusEax;qr' );
define( 'SECURE_AUTH_SALT',  '2(FKhC&P~pcuBWi/C66KB+0PLz$M|+^YC.qq6UpGCZ5`nxc#AC:]}Lw4[f:BD/U$' );
define( 'LOGGED_IN_SALT',    '.k&v=v5P39G/$2(HhTcOYP>>+ILtY^7U={D{5dB~Z i:bc1?Pz>L}nT*h=XWJ`SQ' );
define( 'NONCE_SALT',        ',gGSC&~>$>Zxrrwy/!{dG)=1Ck]tvA6J_%WAy&XmA(wE1+}-=1@wo+0!.*)[9<9K' );
define( 'WP_CACHE_KEY_SALT', 'PLIqak:SKiKlC{0?12a.GLA/(OJ?6z%dPtXlaRiYl?<00kO:^~cP`$b03g;1dpb2' );


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
