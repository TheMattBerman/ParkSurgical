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
define( 'DB_NAME', 'emerjsur_wp243' );

/** MySQL database username */
define( 'DB_USER', 'emerjsur_wp243' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mp67)4.SZ8' );

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
define( 'AUTH_KEY',         'c3u1bi0dxpqq6qgukfjyyxh9qrezs8ombiw7moimzle0hlzejf6aa9hor02kgwhz' );
define( 'SECURE_AUTH_KEY',  'qvewkt2krmyahw4blmswrvlirvvysfmluadpdydr9kapfpog5fy49ogmsmjtj4xp' );
define( 'LOGGED_IN_KEY',    'gt8jlsbdnv249thrghfycur5kemdyn7xleyfgpq3ppjephzewhtarv3ppnvbfbjl' );
define( 'NONCE_KEY',        'gqmzcp34m2i4xtobtren1yhq68adveqpn9w8wag1lscxulny6n2fm09a0hhup7xj' );
define( 'AUTH_SALT',        'ksdhcbdmfmokimrtonnrlwoeo3o2wrhxtdtqo1j2jeoltd6wqshpvwt7ti8i3bs4' );
define( 'SECURE_AUTH_SALT', 'ibusi17iufece9ignwvvvej03b4qzkgcq3bazs7gf6ma3syklgcgubmc0fwnodio' );
define( 'LOGGED_IN_SALT',   '8zm4pv16hzsnsbaz3wuowpgadkpyv4o2qoqygfdeivosy1pfgdcjvdhwujlqgc9m' );
define( 'NONCE_SALT',       'ciy5cz0bowu1flyhega8qrdzvtejkdi8t4ve0go8exccfnngenufnht9wn78g7yy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqt_';

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
