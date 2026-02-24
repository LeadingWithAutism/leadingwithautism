<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u481759095_Ing0F' );

/** Database username */
define( 'DB_USER', 'u481759095_Kg2dM' );

/** Database password */
define( 'DB_PASSWORD', 'wg0D7bucKk' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'V0t2KvF>d4Mp^0~N9`#poZ~2fU[dbF1YcA|q9Ea%V#IpS_F8$5nMGONGcGF9Q6$/' );
define( 'SECURE_AUTH_KEY',   'ql1F!+}%mqE@u]/wZ]7<[dxd);Z[CH~*?Nz`>e,K1(FKoKu?kp/Z>=^uK]P`Exo2' );
define( 'LOGGED_IN_KEY',     '3f1EABu#,5F)ntgX8@vbC}`BvKYsi3vQCZbfM-7PT@s.d<.;v,5ss-0AKZ%0z s{' );
define( 'NONCE_KEY',         'G-*RfnAXFF#wJq~(^;q!,U*ciO(o)PV/WMs4>l5h!})|V7sjvi|J#2e%EmN|B3Il' );
define( 'AUTH_SALT',         'Rk3pLMSmD=:Zm+8 JT_BH/Su*zx2l_MvO{8UW3496#<>$d&{y9V i:~G?Mwq4H4,' );
define( 'SECURE_AUTH_SALT',  '2a:_zT#o%K>gc0)ED)Oxaw=o>MotUl9Qj-|arShR{p(dEP~Cj@]`H@G5CXe-W%[X' );
define( 'LOGGED_IN_SALT',    '~fKC]lo{a4+Zr9tV$FIC2hyW%9WL5a8%yFzy(P|B`9Sm?kKBUgK.j&^B-I/dPRzE' );
define( 'NONCE_SALT',        'Xv@u~]1}h+F:Hauz;=<!% g%JBrSO#VzsdfhyUqnNWyq(~#iov!](+$@i`:&t+[9' );
define( 'WP_CACHE_KEY_SALT', 'H6bWBU:CO80AJMNae)Cw@~W;#TcD2TbX-/E]{GcqO}=M+@JX,wI=2EFPw]Cx6 Y;' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '86789d707d1f111e97d7ae88b0a5da3a' );
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
