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
define( 'DB_NAME', 'portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5uzMb*ta,Esx;fk4(e&gTr*2^0B=unHQuzvT^?T8C[f*r$lLYV#]HBQJ4M3H+K2K' );
define( 'SECURE_AUTH_KEY',  'Q@K.(=C(Q9_4cx?sj}LC/Rb.Yo#wc=9Au%#Bb-_B;?tU5LoHQa4Qw5I=M.pT$Q$0' );
define( 'LOGGED_IN_KEY',    'BN@[A>02^#HeBI3ClT2&/nA81ZeViX]{=XF(|QvrAS8J2KI}hZDWy7GKq_Wa} }@' );
define( 'NONCE_KEY',        'q(!@QaXBM+u/u]|qVlzo[c.}&/1xkG`e4SoEdTQrY8.vV7vH0<;rcjL#NqWAaa;&' );
define( 'AUTH_SALT',        'El|4^k)rd9ISf!6>mK+-#Xl#=0;qJK}a:g:q7y:+1__ne:bl#J&?d(|xY7/tc]>%' );
define( 'SECURE_AUTH_SALT', 'Y6%C,;Fe6c,#KIrc*U9@,*-:+S~UcyCyrH=ZHiFE;RkoJL(C=a~}%C?/id ~XUu+' );
define( 'LOGGED_IN_SALT',   '~B#{q+}f(e()mN7o?t4X=s^x.b.%X^Z^?e5B _)jUYcR 0My+Ve$bZ @AwpZ[IPT' );
define( 'NONCE_SALT',       '(}#&Vcz!h!4D-!W_?@*JZ#]2>73D]@.<k(}vo>P8yS9VFaq*;V~ri8aHGg^Da_Q7' );

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
