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
define( 'DB_NAME', 'amv-blog' );

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
define( 'AUTH_KEY',         'v}068E:#3h>THf<_(<U(v(1}g>u}?>v)F:BSc{brIW;`f7(+KUz[ ]Zm@_+T;a^J' );
define( 'SECURE_AUTH_KEY',  'p;5_++o3Jjq;n2^};eq}HyE8P~/f?Q]|}<T$MI&>VOP3:xPh.S8;n+jeB+_6XD,W' );
define( 'LOGGED_IN_KEY',    '17,t;,WtR$bqkf8(C+Kf.9Ct~KF$-ucEY$gOl@it)M:Z(1=|*oEch5|gPa5re11x' );
define( 'NONCE_KEY',        'A@3py}E*(8xGZ;[zg04C.d<=^u3=dbERFBTR8,Z;=ty4axF$/D!!/SJC;*;;e[vh' );
define( 'AUTH_SALT',        '.~zc.a.+Wl(?SQXl%E)MS=8z:9MA({;7*SMALd`T>!?uS]6|C[mqaL?2oCQ&$647' );
define( 'SECURE_AUTH_SALT', 'ExTM#:oaUVhkW^+~0oe]TWw%;G~Yzlcrj|;`>QxVT0!hm)%&%@>EnZNZ63wN5tGe' );
define( 'LOGGED_IN_SALT',   '<3c7VzqL(!J gRO-9-k`xE)3yN!qH:!Gn+n/-F9NGeb@x|pDkYgWN{|C.G_.60Ze' );
define( 'NONCE_SALT',       't?!~2,ogmm?uX61:Qhhju1SAPa#p[8.-jZ6W,rfb}Dxe;_8jpO+z|,vkkR#[60m_' );

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
