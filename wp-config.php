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
define( 'DB_NAME', 'samadoc' );

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
define( 'AUTH_KEY',         'Ze_p@s(t<RMnR&$NYj$:h-1/`WdFlcsH/dH2tVKkw~LgEONjo<[d*M5.4!Zl){=#' );
define( 'SECURE_AUTH_KEY',  'LTvi|L/cG;PI2LB<E)SI6ar!CKsljU c`[K3.Y6CGG)wAo@6p!XP87QsPH+icLq2' );
define( 'LOGGED_IN_KEY',    'bSQBus==,:{0!QCHCOlA2V>jdf@[Hz9zI&19Ym tIlA9&cq:aGW3l.Q9*jdaV8_D' );
define( 'NONCE_KEY',        ':)0l%qGc}]<q~a7EKJYL<L=4G)%rn[]&cqFp_I/_~s0+CUp:3Y622EK#,63q`7pw' );
define( 'AUTH_SALT',        'sCQi&SmaZBR$~8Az:UScJv/.WDK>taR!3[7!U9H{^{A^eon*FbY>fj$k)6x.qOP~' );
define( 'SECURE_AUTH_SALT', '}T,C,L-AwYP397n$*9_w</|F~TIv#Apf:YsD*l]:y~4A0]<nN:hYtDW$?:;0*>),' );
define( 'LOGGED_IN_SALT',   'eMXn?qfIku[!I`5twKuU96C)sO&s?8Zbc21(70nGNC6ndy,?7i.eFPQ$VErls/3<' );
define( 'NONCE_SALT',       'ezJU],nB@t4U&3qdFxYq@(gxA]{_X.-oSV2XXlWX+KLY6zXw_sD5JY#odPt*5>+2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sd_';

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
