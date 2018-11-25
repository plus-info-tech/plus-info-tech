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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'lyroIGkN33qxKbNafj6aIkrbAlgMToM0kETWG0d5OswOXA0zJSQsI/2w5p3Ck45uQ0l6+coFEo+L0X9kIySVyg==');
define('SECURE_AUTH_KEY',  'AtNcCcLvADT7i6amMHoLaTtH9lUPLZBehWsOl76YkIPeIQFNp5pef6TJMpv7EGb5NN/qmmsEsc/dUXeXh9W6rw==');
define('LOGGED_IN_KEY',    '3dYexe6m2GQj2suNrJS8vvT9ODXTmjHKSYi9LJ5bWJOHTOz3XUvYU2a+9iwu/Xnszrx4BsceERHS6O2sFpw37g==');
define('NONCE_KEY',        'qb192NqjsrC4uVXKrH6gXy5D8IqGl9wbPySBqQO476ixOC6bcYnavsXLQBW6iV3MseQWYxMrHSxpo0rnoyLeAg==');
define('AUTH_SALT',        'RJRKXSS9lYpjxHSDmq9+3pHH7Glp5+Jkz/D4lHJ1Dv734miHwEcZ56C9aEQyPdLKKd7uJX31rzca5CbNQVmPjw==');
define('SECURE_AUTH_SALT', 'GvYLH9XwUBG9aUa3H4iVHig4VAnMyzXp0MfCk3hXgYFSbFkA3dgvZmHSdL953f2eqsToUsm/UJfLPuDU2DfYGw==');
define('LOGGED_IN_SALT',   '4atBQBGLrdD+FFjzTb1RWZ7pYOQnq2Mg+k8JUt0p3LEiTEELT0zGIsC8Z3bBQmM7HPNBUgjMYbcmRb2rZzh5kQ==');
define('NONCE_SALT',       '8SxwLXVTuvKbboQQMzMYJrhyrN6tYoqzVagMLfX71JOmTF94jNY8c8PLpAk+Z+VW9uierbvLQdmBEq6jUBYEkQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
