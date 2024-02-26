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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vgsitsolution' );

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
define( 'AUTH_KEY',         'QJ+?t^Vy5}`*W xkYdc}o.i,JxRtVs:a5^nO.U*];$dn@$N7e@$&kgy OS[Zyx(}' );
define( 'SECURE_AUTH_KEY',  '!6Gh:{NPJSQz+sLeo|lxZmb5jEl+]8yQ0OvgGN./i5T!00FaCWmS(]Sblt{i.F]C' );
define( 'LOGGED_IN_KEY',    '3,g&Yjq4a`vRM+b3)ZJgGJ%?n~dj$LYM 8#nx.:quh?L9#N{NM2},sB8i`!`vOP%' );
define( 'NONCE_KEY',        'Gk,b<17m.[As0j~V`9v^JMSNb8$(,d]5/]D=ElOQ|EMG=FUJbpubxY^8)K)<}D0U' );
define( 'AUTH_SALT',        'DBQ,s#6*&46 F<kLReuS.aWE*[o x;- iax|~gSZwQI6Y7`_8,=OR95:O3,uN^Kc' );
define( 'SECURE_AUTH_SALT', '588ERllKHZ*HGW-G2kT|1E A65>E!z4mhI!sC[^^:cOULKJ$iQ%a3Bhr$C[0c91J' );
define( 'LOGGED_IN_SALT',   '<Jp|-Ssn%]4ap!d#Iv:P/W#sq;b94e>[ZlVvbpg:.YA:*Z5bz5%GemC9F?dBtb]4' );
define( 'NONCE_SALT',       'jN*Xv:Xt8ZxN.N Q%jD^W05wS>%L +lPevxGWe[~W3BTR_}2w99faOqx[~/BPh|4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
