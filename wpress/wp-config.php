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
define( 'DB_NAME', 'wpress' );

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
define( 'AUTH_KEY',         ';h%kT#,^Sq,>#a/4mU5(nnkq`7ba;/n78PY!:u+KX|j9fwz7cQ8&-W#E-@U0x *>' );
define( 'SECURE_AUTH_KEY',  'E+HJ);q^6V5DX0%WoUqYB=Gx/2KkjG)_ #tvsyauBh1Fyv=rvoF]:ZWxemav@xl}' );
define( 'LOGGED_IN_KEY',    '5@S-PM7OVXF2N2gF{Nl+V[~G3A_0;X)9:@=jSP4xdBzcC&h3K/tY_,,wP7`qkE X' );
define( 'NONCE_KEY',        'LM8iNlm~qE[2<4lm3D?2!%aP!@NFc6b1P ^[[`R(POs_2+Q[_.R[98Ae[&(uUJpa' );
define( 'AUTH_SALT',        '*xfZb7{Xo=W8};(]usp(zHMS0R;ruar@b7Zic,W3TC9.T$ SL0ub9&}KwzGs~vv%' );
define( 'SECURE_AUTH_SALT', 'CWN]O(u=NWdLJ*7}].><*_u.YQeFwXSLkLRUa|n4tyVEys)uQb;_6-V!>rc&@tBn' );
define( 'LOGGED_IN_SALT',   'BzR*a$anC`tJkVJ0b@)5O+&jbilAdDF1B<)W7F*RK}+!LcI9!ZM0|mMm%A9ibkU{' );
define( 'NONCE_SALT',       'Dr_q+K#~J(v`0>n{:CHPBS/hvcVg/c8{OHNJsyI&dhOGVLfzqlor{(/5#5-kBLZD' );

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
