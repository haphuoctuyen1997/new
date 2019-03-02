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
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         'k]-#$]DY?Bpn jK+| ^#%n1rurS9]epr@-oYO&+{3Mx,R&d[3.Lyi;Ip23EmEHf%' );
define( 'SECURE_AUTH_KEY',  'GOR8}3ZB6R!^T]hCi(eUuq1s]cx3wIqGWs$JpF|CzauithnHv]WN$~;qd~$[GL%|' );
define( 'LOGGED_IN_KEY',    'tho@)@YtW~8TO@I`:c0A myM|kT*,Gxh^1!r8bv%nl.,>[88/5b}Do6nBn4c|HYd' );
define( 'NONCE_KEY',        '4vLtg(MBAEocZc*zOavwc3^l=z-}}z -FsjnQHv)lr8yOqWXBN:g4S 3*^`|hem<' );
define( 'AUTH_SALT',        'Q^2p.Y~L5a<6w?LmD`Sz7oi|~-fXL@;LtVe<%>!{AB%M2n5@?8)A!PNw/5}>}_9Y' );
define( 'SECURE_AUTH_SALT', '3S5pS?zRU&piOEyIRLKawtF^#[gXk+d_85[{.y_6~yUvy)U($uqms;Kia4B,A0E)' );
define( 'LOGGED_IN_SALT',   'a>l%1s52y<yO1fJd vJ.p&*(j{KCTEUbv%)9-Mks2qt84pC6R<l*xNex_SXMmsF+' );
define( 'NONCE_SALT',       '}!^xBy.Xb?FA?k.1RYIc!&8bE|`rsVYMgZfkH6UgWbTYQB}a~bX^Ht3E#J0A{JZ;' );

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
