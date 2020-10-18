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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'Luis' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ANAYA15761a' );

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
define( 'AUTH_KEY',         'pa;!^-BoC*aNE8k{1M+,2/>2>D0|0T)kQtb=6nI<yNLGnF`tm tt4kT@4@RX)A4y' );
define( 'SECURE_AUTH_KEY',  'R0:*%bv!lFP!d|R4j4,@LTDy{@s9%f%O)E/@98%k,4sd1Di6v-|#Vq7(PzC^E@>T' );
define( 'LOGGED_IN_KEY',    '!8/%<lz[H6]ZWOyhxGm0=NA^; q uOP9:^E!h;&>!7)_!hH/H<+l@D9WeirGj xJ' );
define( 'NONCE_KEY',        '.sDfyZ.Goic`2vscK}J}Z(Oww8rp)cn5v:/eRRTquCwn&Q~z$<=%}#R%IQu&}1Zg' );
define( 'AUTH_SALT',        '2^Rzj;73*8E`th54^d?0{k!^CkC`{Y4D/_a5Yb( [KUnv}FW9j[gt{#P0K)3L#:-' );
define( 'SECURE_AUTH_SALT', '!~PE 3}?6ZHDkQ!p @9PD<65C`N(PZ$);iY0-0LV?NHGUY+`*Vq:{1]qrM}qUuS/' );
define( 'LOGGED_IN_SALT',   'g;S6u%sT fa#~P0q0kl(+R:!:D[Ie;f$ERHVH9mLBc?59S-P=eKv0k7`Kn&iSCL@' );
define( 'NONCE_SALT',       'm-}Pu8x~iO4%5CgA.,L/g-&<hRIwft)rMg)c2Lm<t]W>c}_;~&gJKNN)exG6rYp3' );

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
