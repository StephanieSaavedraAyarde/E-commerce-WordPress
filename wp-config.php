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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ShoesStore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'M*|tl6Hw65<k+UY.s<:7Sj[Qy1S&fp*InHWytbcnPd7a3OQ0T;W{xQ1)8FhrbiQG' );
define( 'SECURE_AUTH_KEY',  'T#UUr2jUF3-n>;/(LbkKBy`YM9~URpW.sH@vVDR@Ih;+Nf3h0pB/[J<1shTMAwe9' );
define( 'LOGGED_IN_KEY',    '`57p919Qz8DWQ-ur,J$@[|CPAw&<)3k!yA%;!v(yk|cw:OPQ ZasMvEG6=.W#z>/' );
define( 'NONCE_KEY',        ';fo;k)0ODZ%Bt cd;!BkTL{3oA8d//JVZ0lUy6tMxW5kvl^l/0TmAI;}E}1,^dBn' );
define( 'AUTH_SALT',        '?9N#0d23GwVBo`V}XZlDx`gos@euRZa^W}QS=y/SH^`1<O5v(XRpnGn8UakDy+Ns' );
define( 'SECURE_AUTH_SALT', 'RI3ALbAw jE&5_FV1.0Afp^I&AP4y[|E^<nr3@st|6^k]H?V,PycDY{gF_zHZd[3' );
define( 'LOGGED_IN_SALT',   'w?l{d$@~4}k&-&/v!OKeR0l-)cOIeK{:o+?^yRi]Tjd`{#t~FW#gynImhtA3kd{^' );
define( 'NONCE_SALT',       '=747jy]ov02;qs0JxI? rjO&*v8Oh?3}f_<$,G[rt1jP43d34xkgPTnilW:krl4h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ss_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
