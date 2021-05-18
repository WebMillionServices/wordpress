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
define( 'DB_NAME', 'gh-pages' );

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
define( 'AUTH_KEY',         'A+J4pn+P=;ZUWmuv!CH5x6s|p?qN1:1zB2/]RKIcjvzS1P]NA[@,l<Smh2&):MrO' );
define( 'SECURE_AUTH_KEY',  '.|.);t?]wuYpxkMi-Z>~y.sCjLb_^_W(Nz|Z.!&qwW,fD~oZ*Hsq}1b}h2##;`Gx' );
define( 'LOGGED_IN_KEY',    '?mF*WtFS#hi;P|p`z[Du:pzWQ/]Jd<U,2x^HRu an#l=:zg@h-jWHo/mp.q[J+1+' );
define( 'NONCE_KEY',        '&}QMW%E)*CsgtsQc%vfdgxX<t&9$@9yoP3U9 *3EBp:=,1%[uh:c?1m@u#i<B?RV' );
define( 'AUTH_SALT',        'W,UE!Vr9bN2Gl[[GMOr8>Z Tw,OP_C??*4H)y`WuQ,nP()YjW@{h=kQ_F]<7Zi)t' );
define( 'SECURE_AUTH_SALT', 'C4jLB lrP`805[M,]y+KDD.!!v^&eWG4uoJ7sB:EXk+d%IB6[ulBl97M9=yVQM:!' );
define( 'LOGGED_IN_SALT',   '7_BV6J*M=!478h<][PjN)/=1)skcP5A:rJm&z$EGw4 Px0:_v<i];8Y*OD5R9^d5' );
define( 'NONCE_SALT',       'tIH+306kgHFzFpC$qpWo_JKS&Gv>B#IU,S{2c7QUv?j]~yO>_NL1-^.!sPf{D`QU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
