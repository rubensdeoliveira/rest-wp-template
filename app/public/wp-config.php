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
define('AUTH_KEY',         'gnjXUgLx0ddrk7DBd/bjF1gH6p+ecZAkXQLhDEJ7QYTaogn7wLvqf1O4SN2wy50rL4acBoY8x0JvpGA5fUVDXg==');
define('SECURE_AUTH_KEY',  'G0Z1upsdUhpBEIoqhb5SWJRyB0LQdnVlYH8SEs/vepwzU6lw6a5cHs6F/A5Tp76i0h7cP1BCNaM6xUvV2+FOEw==');
define('LOGGED_IN_KEY',    '4e6HNnO4vrvsuBvXdHIH/0FS4/neFht9+PdlKNYcSiLtBd8EIgU4LPHzu50b/wZM2YxuvUWffQaQeU096351Iw==');
define('NONCE_KEY',        '3K+PrDwDqOBhWKfQeERvEBoQiTACsG/Z2nN262FuPosvHEwtTySVu4wdB8+DZHA2rhukN/jHbXFZK/kEiEw7kA==');
define('AUTH_SALT',        'yT/rUeUoobpLgH22gt72zShWlD+x1d2PxxdwzgmPX3j15S7LRPOP36gkitSiqj1dVyePEjleAjl64eqSMa1CTw==');
define('SECURE_AUTH_SALT', 'PsfT2MmEhd7aRBFrUZeNK2tr9+oy7SX7JkUQ4Zr0XkbAvdZd5oaN0a2DnHFDIDxB7dC+wSH+CuC2B7hrTEhPYw==');
define('LOGGED_IN_SALT',   'fn011ilxzeBP95QDYvedE9bGgrFc+2N7crC+uu/vfvS/5vbXiskkOAmfoN2RE1ew+T6aX2RGQ4Pa4ncuxFJxOA==');
define('NONCE_SALT',       'P7LWMHtoJ3xDLTcAL2/wdb6BWaVZMMGgLpi/wdF6BnyBH5PQy1FpmnVUK0JRW1dEgpuFTFr31a81MyajSXMmcw==');

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
