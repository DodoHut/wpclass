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
define('AUTH_KEY',         '/h89/hZIurmNjD+NoII/lAqF6tCJ5IcGnESnoeGFChlLqQi8YFZDWD5UY4Dp3tjFdR650KxnBuNoH+ckH749uA==');
define('SECURE_AUTH_KEY',  '1qLvB9C8wDiH/OU8xQiKS4dgUBNvfzkeepxY1+iuHM9XLxc+IK7eTWPUtDBspJaTdlUUYQAkdNMJ5dhRuS4FcQ==');
define('LOGGED_IN_KEY',    'YHIaB6KoxYuamfwxewg72uW7J+LdoBmgsa3qwA5b8N9UG8detDUOkfIAzAQ1oFpHZ8CgVZ8no9VIfb6YrmVxfw==');
define('NONCE_KEY',        'JdZ4CRP5OOlif90x+4aSXj1qKeX9PSCs5BzcrOgtW/PlHRhD+NgCGLhE5d2e66uEeBdgcxAcyHP4KVg6O2gObg==');
define('AUTH_SALT',        'xf9N8V0ma7j2kOZMUKwKmCHm5aL4NvXGfMI9yllhR/mFHqAIR2AGnd4tP9asaDXYNZvpgXmFS8QFR7g0YPOafg==');
define('SECURE_AUTH_SALT', 'aevynhpYOtTA1BrBhsxw0QVGZnApJZLVWylxemt3ns8Cla8KLvujasW8WX0dmwxAzMKMPkScsGMM6sFl4pKjxA==');
define('LOGGED_IN_SALT',   'WzP8SO9yACe+bVnqpuTGeleMGgFOurVGkQKjvSQjy4BwOYWKWW+PEkLSyepxVC4po84HzxhJkgj7JscBNVt5QA==');
define('NONCE_SALT',       'ZBVQdXcvp1q3KbEb24Ci5+r616dyOD7IA50NgN9sQQNvqrgm37ca5bPOA8fs9ru9Ug7kVv+CHLimTwFtj+b29Q==');

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
