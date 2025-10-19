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
define( 'DB_NAME', 'if0_40194745_wp696' );

/** Database username */
define( 'DB_USER', '40194745_2' );

/** Database password */
define( 'DB_PASSWORD', 'S-(h9p9H60' );

/** Database hostname */
define( 'DB_HOST', 'sql211.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'scsq698yupxgpsqlj69iyagen2vp6jid6sqdldtljksdqxwgvspd5wqw8zkkkp8r' );
define( 'SECURE_AUTH_KEY',  'h5tuf2i8hulymiqzihneeqqzu4nmjeqovd3xjhplpgyq1spgrpo0rala8voma167' );
define( 'LOGGED_IN_KEY',    'gapkkdsdtdyyfjr0arpvavsiftkwsqz0ly4o9rg5j46wi9nc7zn85nyymmaicz2o' );
define( 'NONCE_KEY',        'faq6lxpedhccximaxterg8ppkzywgtevynvqgxes6psdnjmebm6xppajwi1azhoc' );
define( 'AUTH_SALT',        'hw8vwfes8rkvdw1ghwmepxfmw73btcfciu4vq5austfhezkn5uox64sgvaf1qkzn' );
define( 'SECURE_AUTH_SALT', 'mepljkaiqnlvj4rmykdzc9po3rz8ozpmqjb4ppg7wl7rzvmmyulp81whb5gmara8' );
define( 'LOGGED_IN_SALT',   'lxo5zfpvxvcolrwiidqljt8pfgyv6kd7ps2lqapca3rdmfz2ukdbjyd25gtfcpal' );
define( 'NONCE_SALT',       'wcodaq7k5ug2l14dgsq7w5s2il8ab6atv9fo94kidnixeqzxezbxfn75ywlydvmc' );

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
$table_prefix = 'wpd6_';

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
