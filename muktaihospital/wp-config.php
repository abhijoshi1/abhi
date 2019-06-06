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
define( 'DB_NAME', 'wordpress22' );

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
define( 'AUTH_KEY',         'Z|) =jxQxsWIu7ECmZQENZ$6f}Ls[VU:Bj1p:N2ZAR<Caog.MH4>?+[1F[]T9WJn' );
define( 'SECURE_AUTH_KEY',  '{%e0@v7aRe=4Fsz68Jpa|)(tmMS$pBQ]Sc;GOz )xPfnO(A]?%>Ai&|852c{#UXy' );
define( 'LOGGED_IN_KEY',    'Vv+?Vd0gre8SfSp$UB,s`Lb;5PA&to!we8!Ox*Yw]UR](4T%3(bK)yDU1obbC}wu' );
define( 'NONCE_KEY',        'QKmK}ZKXK<brPM7,otQw@u)7-RdWCsW{@_6V/i/ot5|A>{,QVqB>Ed6-u3HtI$w]' );
define( 'AUTH_SALT',        'Sox4`hTu@GhM!.XN*6<%$}+Meou%;95/zRCKZv}y#s |p52GbG!3;&;(ReAOz_Qs' );
define( 'SECURE_AUTH_SALT', '<84jVsnkq(266X]Ks?2lS?FP..Z&g]AY)&MWhH=8J9 .$55o?;ke~wGV}Md~nHaq' );
define( 'LOGGED_IN_SALT',   'F6p-)XufJVX!TZAa cDgCcSMxR3P1ZPHuC{SRWccBSh`&j;l@FrEq.WO(!sQgMNV' );
define( 'NONCE_SALT',       '$+e1`fBUL%Su7?xswpjBnt/KpBL2rS*BPglw|<0`}Ib!Z3>B}Y<~Z!>oWafx]DCS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
