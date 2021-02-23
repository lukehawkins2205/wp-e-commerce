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
define('AUTH_KEY',         'zArWGa8fRlt3hiy86oBK0/CDKpiPNUQGdzCCz9Fb75tuLQnJcJaUbi91Ab/lUi1N8JFdn0zq7oToveN6kA3nhA==');
define('SECURE_AUTH_KEY',  'x0laqL1rR2QCSCm9wvA0KLmlTU7h8FzSH6f3648R41Y8yLYa2Ha5yiIV8zE5ssY3u1Or2ZrB+WG/86aLBqgtlw==');
define('LOGGED_IN_KEY',    'F5eqHoXrR3jx6u1w0nHKSF1nNAfHioChg0AsrFubsqnMHznJJh4kj2jUS4WIzKwVKN8WDXcsaa4nHUM2kOtRpg==');
define('NONCE_KEY',        'Ao5rHgrPaDPu77iHiLy1F3cc7prwd1L3ruN94v/+wm8E2rBcmveayLzW3bHb4tmWwK92UmCKmpZq6KdC3VF5YA==');
define('AUTH_SALT',        'ngtEvGVGqVNScTcq1Wglc1atdqFSdnCg6gnD4C0N2gXH2/BebQepdhHO7Ezx2F2DBospakvzT4hH17BSj6lvcg==');
define('SECURE_AUTH_SALT', 'RxIMEsn/HUnGI7UUQm/8ydiDovMh76wsQnEXFO4oTnbvPZBeOKp746k2WPPA39WWcHW8J94NFeHRnxYpLH4F/g==');
define('LOGGED_IN_SALT',   'i0JYycY2JFkVqI6CBfXFVe/PtULXFIocswV/N1FuS194FpEbFA17Jx2ECBLQbzkSFHqytu+Uun0N+fNviHnLFw==');
define('NONCE_SALT',       '6uG1XfcX5k10VfqZ/bfNo0ImKU3e9DGLKI/orDA3TsiPAhdilIw55yOpMIy7gRPBJ6FJZimKHsvhhu2QlE2PCg==');

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
