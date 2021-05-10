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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'midterm' );

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
define( 'AUTH_KEY',         '#`R}aD0Y!`o*v)!fodey[M~:dIv,Q++?){3Z)bbBxui%]i[%)fHhmvTTAC*~-LM^' );
define( 'SECURE_AUTH_KEY',  'L#(5$X1ZCY{:hJh(1;IOr[2^MA-u-9D.|/FpVA)#xi;bk>XG_~gy4ed;5>oFic:V' );
define( 'LOGGED_IN_KEY',    'p8MV|j 4kAKH+tE9cn}<gpd;,%#RS4fbM>;V4Tt,Q~pZr+vqqJ1#=`H>!_zgH6`=' );
define( 'NONCE_KEY',        'vr0iq`9)jy`mj,c51bFK.jCEyp<kO:`0AC@@tXQGtvNzj@]$kCLN%HMsE`zn6`jf' );
define( 'AUTH_SALT',        'a,8^E|]IIl|DyA_daIOu^@ibaFzOX@zvU.BBe--;D4yzV1gHlydtrW=x9(c7M>B[' );
define( 'SECURE_AUTH_SALT', 'G0:3?jCrWMan[!v? PYbxH@p@0Fe`/*dX vxCBmTOx~[xgxnak^FtApCZB9zaayN' );
define( 'LOGGED_IN_SALT',   'swv:<%n=eZ!~z6LvfHI!m3qh#8YD.QIaqwOA5P+RaO;<J)Q[gbVTN%!Bt;vPVyr*' );
define( 'NONCE_SALT',       'vvI[@)G`C#d9mt!Vu^PtB$,Gyq=[J9{@dO#caQ@NnK1,|g%c:Z~nz6IqG0-G^~>s' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
