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
define( 'DB_NAME', 'wp_grche' );

/** MySQL database username */
define( 'DB_USER', 'wp_7naza' );

/** MySQL database password */
define( 'DB_PASSWORD', '@E0Sj21#J?e9h0L~' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ')@6g5ZQ:266O2y%N[YcKz9[B708~k6oiT85Me0N:!Ai8yWN2~3Bm&5-*3vP;cmO#');
define('SECURE_AUTH_KEY', 'W9A@@9Mxb60e_T5ZRI(@6597P0x-C__4lrO]NhA44r&09E69U];2Y%A1Ip-(T5Id');
define('LOGGED_IN_KEY', '(8[XL7R4m6E[Nl8YaAw5|&|0MYg!ZJD5iZ)vVjiU3WrfS3hAJ0932|3+:h-3250[');
define('NONCE_KEY', '7lB0bcT#Z-*I90107P2P0X#RBMaGZ]7LUeOF00jU6GOrM6(0P819AUmx6/Sf[@4:');
define('AUTH_SALT', '13tWnO+-xxVSI3;A;6ff%NuM%0360tSN8bwZ+#eDN/5m0bJp3se0Xx5i8V[Y4%-K');
define('SECURE_AUTH_SALT', '3|23_0c5)f-O@2G90gT-LEl(k*+j(sE6_PjQCkoobw0&q5%D8p6bCeFbJ+@Kv7XA');
define('LOGGED_IN_SALT', 'FjziMF;n&1xt(j1aX#oKP9w7*1b1:11C8J10K7_U[zx~Zx@(1P&@9O@bN@Q;04d;');
define('NONCE_SALT', 'L6db:X]1@Pt128Z0_)Ha9*#)6sonWS45|eo;l9)/d80W/p5iA-kq0nwD!s9v8:pf');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '4Q8qU1S_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
