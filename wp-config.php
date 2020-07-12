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
define( 'DB_NAME', 'wordpress_projet_master' );

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
define( 'AUTH_KEY',         'J[GE&Y<j?D|}`mQ&Qc(|~Og}4/W2igL9L!kj.3GQpX;fW>wE@2-]]qPL90^8[9Vs' );
define( 'SECURE_AUTH_KEY',  '6y1_pO@$w~q2#T28=}4T@ku<.<nJggVa_)5]k6gBvqa/>Jgg@UJ,U%N?e`i#F-r~' );
define( 'LOGGED_IN_KEY',    '+>2S:es:PwF,xeF9w0P4`]>AdJpq~F_FS(%c4];L*LhKa_qTgS,Z,[=s6N]l_qAA' );
define( 'NONCE_KEY',        'NO,[D8(:>KHl^|Dme=?u.(~D*,gi;*WyTEpO]!/Y=@@z y7OAI5)krAOkeOXKy?g' );
define( 'AUTH_SALT',        'eu[r:97<W09]36:WwW;QgzzxHDV-J`K<VM1(2Tu,:~/[}/t56giKq1LN&IQ%:U}d' );
define( 'SECURE_AUTH_SALT', '8ZF2_mG!v)dUs<S(t%*km:s;lot#3N^LIbJ;jFYVro/[a+~Dby!4~MJHs`)gegS0' );
define( 'LOGGED_IN_SALT',   'ybq`h9mU~hC2+ZY<S;^0sYadjRNPx`Hb:!<S<zHC1%5z*Wc~u-j}4yhiNc$BlA[=' );
define( 'NONCE_SALT',       'f@9cyhLD6OkC=X:/*n_qH0eZo<T6u/#B33`To2LqD-;_Yu{1h8[wg+,6#w(.m(-*' );

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
