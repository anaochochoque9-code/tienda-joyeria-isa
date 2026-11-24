<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joyeriaisa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '089Sfd34L5JkGBKOSNWM2TBP2cUWCPgIaaMJAH4MerRpYpA8Bte6QJHc0osV9uH7' );
define( 'SECURE_AUTH_KEY',  'k3EaWgaHuJ9uywnVICBfRV1WLaNBwud5owOY10WDb5X4EaxBo3RpBqSFnaPwt1CS' );
define( 'LOGGED_IN_KEY',    'pUdZHFMZmqMOsMPbMcULzoN7FmmZy4O3aTI9AK5g4cPIK0PUnSM7sqXK1NxsMc2F' );
define( 'NONCE_KEY',        '0E145W8XDT8yTDHATj8eGe8RK4k2Bo53oVoDO16yTpY6gIuT3nAzhqsVWFpHxsax' );
define( 'AUTH_SALT',        'bHeOqHT3rVnh3GVewuRnfOkau78PbL1iLN6iZE35KajaXWT56mRMe5QDkSuRaWbH' );
define( 'SECURE_AUTH_SALT', '4YhQlGxIGo9wVeI0B1u6lRCMNgdpa5cJAa5ZBnzesdmkp2BBBoSUJONBnfiCBPvB' );
define( 'LOGGED_IN_SALT',   'ekRSi3GDH3YC00Si2OrIvWbwcR8xzeNSBZAImMhekpMHKjwfoMK2jTWJJaQVYd5h' );
define( 'NONCE_SALT',       'fyKzf0CvsqQKwYRjbAEvVENXLM8MHo4pyo7Q0u3CbPBd2L4juVoLlaD7SWiiUYHN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
