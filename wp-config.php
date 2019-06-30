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
define( 'DB_NAME', 'db_customtheme' );

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
define( 'AUTH_KEY',         'IU{|3Vi|L#<aCkd#Md/;JgbE)|06tGq6J_[GrZ^NURF>  b$RE_yU(5Z9>>p?C)8' );
define( 'SECURE_AUTH_KEY',  'HAU&tbiq0MoJhhVzID8lK4r[d<LJrSd.M>0E~9VcO7Z1?IMC-9IDuf|Mm-M,Cbj]' );
define( 'LOGGED_IN_KEY',    'MQ2n8T:MJ7_56{qkH1/ammdrE`>#VSy4lz`vA#5Azn1^:5(&k ^,oB{}s<]l(TKh' );
define( 'NONCE_KEY',        'eDjhRERS`U:!`+=_$W 2LiTH-{f [?qq+BO4TH4>k$I?>S-]Yvph-MVMu,7LUU|K' );
define( 'AUTH_SALT',        ',ejgB<>0DGe-25<l2+={oD!uFJ*+05O(eWU`1#mX|b2+O:&L5mTYr4>)w/rGDdF{' );
define( 'SECURE_AUTH_SALT', '`^=Rki_1E6EA3$>~331qaDWIS_M3)TAS#T&@,ksBxR2iR)/m}@FsyJBei{0ie?Pk' );
define( 'LOGGED_IN_SALT',   'ggpuNrn9F>6K[XsUk9K3Fa)xJ4m8Z-~;[W}::EGoasO6/Ufss;!Syqv1:If?L->n' );
define( 'NONCE_SALT',       'ky l}r[1^,q?^mB_oCmX&8{<=nufE8lJM5o@;F o:>|x|pCP8P;C=Za 6F/OGT|-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cst_';

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
