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
define( 'DB_NAME', 'www' );

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
define( 'AUTH_KEY',         'G3#0o6/ynC7Z,0r@r6pZp6pjfXXU@N/%Wn,`2!-a!IPpc`#nLbY~tbT#lS~lqG,|' );
define( 'SECURE_AUTH_KEY',  '$;,FK tfU:gV9(TA=m2v63{H%HQsTk<Wm9P5eBUQ|Q!Tw4?dc$w)*-);WnH|tv[V' );
define( 'LOGGED_IN_KEY',    '[R?6,Tw-Y=OJU{`nw2$x$[*Ouv48{g8o#%Ol^-$1*L;2TcY4emY9qJ e|UmaB+3^' );
define( 'NONCE_KEY',        'ND%LxCrVPB9lvVy!^$uO>AUoEh2(K&8CVPg=az?!Ay*l]3<KZ07k`7hQ~l{s)sZ@' );
define( 'AUTH_SALT',        '6Kx9_hB?l.6 8kR`Q(i#uH-YLar$KlI g<55Y>XCR4}D!UxU%eNLDE*]2}TbWEE|' );
define( 'SECURE_AUTH_SALT', 'Q@]nuN$-nvUdcpv[9mBbEcr:PSy|*hZj%!+n4]^f]+|;q4|O=`NFw}kAuL9X jnR' );
define( 'LOGGED_IN_SALT',   '_V#u5NVt|#6Q7OmU5 lgROGU$w<;v/i!4U/!DmMf$PDyQ/UL#GFWX}1EH1d3JH8;' );
define( 'NONCE_SALT',       '>3O4|]+gfT~d.=$^}dAUVmvG(N Q.s< W*fd/0M/cze]-]3+9SF1GQ75m,=$@Pn^' );

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
