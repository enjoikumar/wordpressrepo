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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'TJh56q1D2RBi1NLzKtBD8L7UA77996HxVFeVEMIr/WFTOeWD2NnuL/1SqzLGFcVDTh4mNEC8TsfaD7H3aQd4iQ==');
define('SECURE_AUTH_KEY',  '5iTGCV1QjW5baGmAc4BdDc7VKKUI8dbSkybkmC+3cuTku3GVjw5ufrgJtBFn+Qv/5yyvjg106xkzQXBh6AYhBQ==');
define('LOGGED_IN_KEY',    'fXmREWO2z+E07zU1mgW6nJHiWmKQMz/3MNmho6aG79B72hQFQTpDIXnIUXjE0Cgd6KaN5kO+1hxuU2T3WQ37IA==');
define('NONCE_KEY',        'IwaXgyhMZ8us9i9jveb2XuTR526Qil48m2+/ULSHr2unEgW+WO65B/j52PZyNVOXpvzU22E0+q5Jw6bISVyQtQ==');
define('AUTH_SALT',        'M+2WWFs9qOTmC2/f41kQNnH0KaJvnclacj312F5l+vmOqaV81DXbwREZ6JDaIBMA8RkVwcJBbr8143x8W3ixyA==');
define('SECURE_AUTH_SALT', 'J7VDlbgeRIE/ZOQAv05+N51BcNUKbuFyGW0hcVUF4YhbkIkh293vMdiwBgIH8b1melKbjTjT8Rv0Tnd2wLE35g==');
define('LOGGED_IN_SALT',   'VuE+kTEwxNFaZQUQyKPSFR0GothZr3ZVEqn/2GQuqA2JfvpkY8RtfarVBpavi3pzFvHKuaZBLuTw6s0t8uqv7w==');
define('NONCE_SALT',       'HyszSBX47hRbQE2rTuNxGG4UdD8nXDSJ0RF6/dFdqEnZKyU5qR1g3pqAmXHxgUziV7o2Xiwcu56e/80Ig4qOGA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
