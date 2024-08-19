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
define( 'DB_NAME', 'db_kp' );

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
define( 'AUTH_KEY',         'RbE**`mpzuVoVC)V~id{|PUuf:llm2;?^/o/&D~m|-rk{~{cB|WvAg(Zpyp[]NFI' );
define( 'SECURE_AUTH_KEY',  ')-#qLn-QU.$=f0%.QTeQ&9c_ZpJbMqScS*xu,rAM:WNO@3((ndy-&,*eK.raG(C$' );
define( 'LOGGED_IN_KEY',    'TYN@=Yf~4yB3R&vJJ3h0LJzo`9mU+N)I2WQsQDlCc0=*(vJc,m-fO)~j6>R_-Z;&' );
define( 'NONCE_KEY',        '`{@nh_1n<Nc=BzMfd7FZ=qb}U<H-Dz{L6U5(WwJ*w/ae[/ncrU^v _6 cf>uiP%9' );
define( 'AUTH_SALT',        ']/[.^o,Z}~;]Q,XQK~yNG}r>t$5G{}yUIwxm#O5?sd`{p:R]L1@;.>@5OE7IkPj)' );
define( 'SECURE_AUTH_SALT', '{/mh+bj*:&^o.[`(j/>*&oaZH~_8$_%ZO*v~6jGs~{Y$}=:N}ug7rYa_y.xceBi}' );
define( 'LOGGED_IN_SALT',   ',3(I~Nv8xzW&(nw|Ot>azxiJZuDTM^rT~87+TP(Ql?xU]1/?.`sf6smNt(T#0~cR' );
define( 'NONCE_SALT',       'mC)]. wce3GlD;j#T)b}>^,i2tn3l%,^[RNx3Nw+ZrxQ|.e,!Us9ygsBRl*#e$.O' );

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
