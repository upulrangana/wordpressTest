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
define( 'DB_NAME', 'wordpresstest_db' );

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
define( 'AUTH_KEY',         'e~N&JQchzM+WHqZ{3T&XRb+>@{wSE:Qc&3e>aHn98Q5@RQ-i>@_iGXZaVW}/$6Vu' );
define( 'SECURE_AUTH_KEY',  '@WQR|]#M}5(A?_,/1%X%$^k^4`}NM[s_mY5/ 9bAvf@D5]F~GeFrlpoPDz!=jQo-' );
define( 'LOGGED_IN_KEY',    'olHqHNgOk><v;X0w/`Bdw0KRhPcz<v7pNi_nSR@OhAINlvTe]2i24x<<2Lrx>TEj' );
define( 'NONCE_KEY',        ');GntPocu#VFkgrf3eE5VLmO1rfxGVp`Et*]lIP+gbNs>}-DTjh0`To65r#AId_^' );
define( 'AUTH_SALT',        'XxUz2<7I{bUay3tEz%xel::q9#*gUk0%9z7Gn?`$>4-6M:r6Ke&`uIDnrCsTE8^+' );
define( 'SECURE_AUTH_SALT', 'd{V))>(]Ioon-Rrswn0DkYb!1)4Bet*S_Dj&c}AwV+9k=bsmlst(Ao.hx%&&KMc}' );
define( 'LOGGED_IN_SALT',   'j>~%N-z:W*gUVB/]4C,+NPb7rC?.6](/#f sXo}5[#7&F:bp5fQdT*L$a(<q[v-Y' );
define( 'NONCE_SALT',       'xHv7j(#R&leAyc%1lL8{Q7j61u+s Vc$ |ME,K<RHz{BLwzn~BSg_RS-9W OBbj>' );

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
