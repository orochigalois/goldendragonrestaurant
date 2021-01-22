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
define('AUTH_KEY',         'pNSHa0GfCAXAp65ftn1xMFVbFkpGlsikYays9xkZoz45eXi2xszTy1vQD0e1XfVab0JVu/8mObOHxuuMJsJcOg==');
define('SECURE_AUTH_KEY',  'Ck4XyQSyHWTPJEeaCV6FG2va4oYfQdl36G2NzlFG+2isirap80r4zBlFXHQnL1ywZcQc4x2J3wqk3sWQL+jZig==');
define('LOGGED_IN_KEY',    '1JEOGnLEWoSjB3l73IJKmtPpDoJ8CoBw124nAmAmvNphPEmMupJiUkRsgSqaCMaQvS1+19wSrFzYx5MXGlVtkw==');
define('NONCE_KEY',        'QoVp6bxaNVVXZPCpL1aOpIBrDzvAaxw2tOrz35SzoYzaGaJQ3uKsjutZKjrYay3ehnaqynFMtTriwWvhxOCSWQ==');
define('AUTH_SALT',        'JQiaCKTU5lXkDepy7X3YyhInwf1iHtBakevzj7gSWeD7+hhMJ2QRjZq/AFDoRuvZssVsX5KSmzjGTv5shHVY6Q==');
define('SECURE_AUTH_SALT', 'E29qyXPn2kEfKdbCXhlh71f9OfJjolY4/VWctPj5vHWS4N9xK4i4Xl+OY8Aqh0agkm512/KiwxcjiBgfhnRZvg==');
define('LOGGED_IN_SALT',   'ZnJly+To76kZ0LtfumOPlQmQKd4QtgxBJ5JSfUmHCv2GiL2Neu49GuZVuzOqlqusHxHGzdmFxQD8vd4lgDUg/Q==');
define('NONCE_SALT',       'CihLp9AunciyJpja6sNWssFIDw6Pd5FuokT94G25WzJ2ciqpnmQMJATRTK8+EYIVYYON0MotCXAT5y5la5+2Hg==');

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
