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
define( 'DB_NAME', 'markwordpress' );

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
define( 'AUTH_KEY',         'BzS5YA>(ca={e~#MeN8#%R|I:#6x?:9`6>U_qvjq*8c/l3%7m]/;$590OT@4;D!F' );
define( 'SECURE_AUTH_KEY',  'FDnB$+%HI#VEYVZBE!D7r.cwUA>6g]L,R%O|c(^XG{lcwbKlb1M5[GeOzv0mrNJl' );
define( 'LOGGED_IN_KEY',    '3PtyZfob}XoiLLz_JJxVs}lJqHF7fleYti@EH#L,^6qZY5ZFb1+LxnQ>dR{1dk3O' );
define( 'NONCE_KEY',        'BX}~oED||==U@q<:sD$w@sTRKpI|<l#NdJN!(60J^;_!7ogL!|.VV7Sg.NC G8Ws' );
define( 'AUTH_SALT',        'Jb> !0{!2&cTH;;Su+ty}dI1@0L?J8h Sea&G0GB<WDwLZ87g{+=;gfg3F?f3G(c' );
define( 'SECURE_AUTH_SALT', 'X>[TT_yL 8w5sBjw}J6tg3lEt0m0+-K4emVlI)k%Az$2HB9H$1pYyy%wrlh@M!tu' );
define( 'LOGGED_IN_SALT',   'X2= imTn/cP`mLwmT,ZUm_o.jcOYS9U=LS!nwE m.CteIP)adf_Tow3qb! |-k@;' );
define( 'NONCE_SALT',       'wR+m2trvUr6M(+FVU9r|dzd)~n%4+6E[)PlS`rFH%_@<6I.|yp{|SPI,55X9xYGo' );

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
