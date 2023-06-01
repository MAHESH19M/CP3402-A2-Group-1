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
define( 'DB_NAME', 'example_db' );

/** Database username */
define( 'DB_USER', 'WebDev' );

/** Database password */
define( 'DB_PASSWORD', 'PMS2023' );

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
define( 'AUTH_KEY',         '14P}w=QVdf4F,DY(X3p^+4RTR5V+5TyL14P<,[k3i6q8(8U~3Sc ho$]lcmA_W!x' );
define( 'SECURE_AUTH_KEY',  'vHk;KEazQu([V*+3(cheZ:T:=1+&64/1wfowL(VbcW?/=rW^^i^CIdU|tv9oTe}@' );
define( 'LOGGED_IN_KEY',    'xQ.-,cj`8XIdgtJqQ%o~Qe*,, V6<5{JCWqqxVdOrX[b  IAXMj]re=2,1$o hP4' );
define( 'NONCE_KEY',        'os Ww1QdJnQI);5`.,^o#~/pJlM;{a_$U[mjqA2([E=**1pOOMt^-Kfo8t#IMnP1' );
define( 'AUTH_SALT',        'U`|^ ]+NaBwH%DMaikVq^=+(S5BG`9gL=(}nul0=iH36.vZmUNy{G[1Wy!,0JKT}' );
define( 'SECURE_AUTH_SALT', ';,ZeJkwlrety#1V*P)8(P61Rib0_tHU/PgVE?6mi7Q<5cW:oSz$4+M(T`PPnI9^2' );
define( 'LOGGED_IN_SALT',   'TkcGgH1n5!rwf;q{cUtQ!wx98}7q``#qGZ:X4C++Fu[;&?p#Iu&r/qe>bZ5t}&09' );
define( 'NONCE_SALT',       '-?A}E#O!w2t-,:iyb/iOR#?.~Q?=Fb3U;2F*A|x5`_ r=T-`xC,P3FnoPO6Rf6Jp' );

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
