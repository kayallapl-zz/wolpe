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
define( 'DB_NAME', 'wolpe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'coffee2751*' );

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
define( 'AUTH_KEY',         'okjrhjdtsmcphwoa9y3f83nnmeiwjqeubgeta0xoya6jrh6bzryiamp48pvudzsw' );
define( 'SECURE_AUTH_KEY',  'fgtdoegovlfj3ayovytw1iihwk0vuwc1vaijtlrtrpwsfkezqug4deqxsdejavs7' );
define( 'LOGGED_IN_KEY',    'fgllw9tdscbxjtjteoxthe0u6v9hype5abror94lert2ey09datdnombv7d6yhuo' );
define( 'NONCE_KEY',        'zmfqjvkc0pnvd6ptnlvyp4rzt7vamaneo8egdcqydndb27eahjpjjjy60x03jqzd' );
define( 'AUTH_SALT',        'wjt2fzqurqmrdqu8vvitgglddaosqororte0yqhhfz1dd5r3d3wr4f7xn57hwvqz' );
define( 'SECURE_AUTH_SALT', 'smgtfnqnqxwb0w6ydum3rkq3swxvvon8r1s60kb21ij1pyzjgzfbod7ooltjsd6n' );
define( 'LOGGED_IN_SALT',   'xloghvnlcx8ccjwvmopmpsksp9kkigwk6yatkf93zgt0yvoitx0ftnn1ij4lcblw' );
define( 'NONCE_SALT',       'oqlvx9uxxpsr5vt9x37rjvcuew2n3jdxk3pceocbhwys5jdy8wmntbfaysmapr86' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1r_';

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
