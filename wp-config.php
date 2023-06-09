<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecomm' );

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
define( 'AUTH_KEY',         'Y8/g<nP@GNPv mZ=1)wOl*%v<No,GFFyrXI$F{8C/]|q:@m?r8r|}!B8[ilVOYkc' );
define( 'SECURE_AUTH_KEY',  'j~n:YFwIzCHCK !X!6mq0[86Qp2m5[[>-^,a~~9~vRwXvza9J2L$p&P1FX{}A8B7' );
define( 'LOGGED_IN_KEY',    'J2g2k[NNk5kDCjwR-?Jg+*6./7O*hX9Pxu{hcqCc<V,5Y#j6?Wa`:}!c;{&%M#5_' );
define( 'NONCE_KEY',        'GsS+IwzW:|p-nI[>jd#8RL72WyAtdWKf0Oo#s,mq3W8G?cP5(ef77#o5wHXOY:Y{' );
define( 'AUTH_SALT',        'Z6(zBaEuowESv9u5I}t,`B+Cz]P:v~318fqZTs@~+WR}.mTGy]!q? =moN^JgCt?' );
define( 'SECURE_AUTH_SALT', '^7Xp5{)8e7]AXh.J}Fkkx1uSgc[d4H0u}j>20}4SO~8NI=k[LqM;10_~6)?aijb[' );
define( 'LOGGED_IN_SALT',   'HUkVohn&{JY08OfJ %&w*>)&XC.:EZ?wL645Vk#zkb=_#?;zpJh[dK^*TX/aj{my' );
define( 'NONCE_SALT',       'a%P^;clWC=wcTJ{Uc{:&!,<xH{bbLZ]mUp3B0AcsV 6+<VS9AhRp=%N/v~&Kw,49' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
