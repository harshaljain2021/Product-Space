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
define( 'DB_NAME', 'productspace' );

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
define( 'AUTH_KEY',         '!n74B]Wz!H$s%]S%M#f Ck~m=rnunX);OLGONEYN^{FAd_oi%.m>C9R!Wyc%at)%' );
define( 'SECURE_AUTH_KEY',  ',uv2%3u`/dh~k_;bTTs:OFKVwsVEJPryKH^YyCxX(Rt6Q.a K=LPfC}|a6WaDEE;' );
define( 'LOGGED_IN_KEY',    'iB<o~IyMwnIV;j;$fQi MRK<f<nVe}0Hykj ~O?(Qj4>;{W!tAGyzAw>Cs+`eibx' );
define( 'NONCE_KEY',        '<(T=2O}i 4a_qR-)9Fh1@7,&6T<?~W&JDQB8 :d9{IIc+02&{{[ pTy-ABa#z5lg' );
define( 'AUTH_SALT',        'Yjq_}!Lj45`iSRI,G-ptQ|([Td #6&pvsa7fHyN)JT?mvJY9r*#~*4JdRgc`Zo|[' );
define( 'SECURE_AUTH_SALT', 'QJo1{/WY`X(ceaC}]d:H>_BfvW5v?PVzV0bRze?;9gpFm8YKCJ1oY04AT}$HK)BR' );
define( 'LOGGED_IN_SALT',   '+XTct#+mZO=9FpIdr/TTT+l.<%JoE40N&HwrgQMY>^)Y(X`GPlb:}J:?WZm--@D3' );
define( 'NONCE_SALT',       '5{=bNB<I0SnH{UwSChr# +R20BeV.`USEZS9O%Kcu]03h9Wkj-~LlU~0oT.5H*A)' );

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
