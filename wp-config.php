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
define( 'DB_NAME', 'eastongeo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '!!BassNinja2541!!' );

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
define( 'AUTH_KEY',         '=yN9Elq6P;LSnW6W^w%~wkrM@+KZG$nY)`m>MhTugQRxhplaVv$4V&Rj<>!3t{~<' );
define( 'SECURE_AUTH_KEY',  '+?=N[~88Rgz^/Rn<9W|gT@XQlhgX+FKz{6W&Nz:?duo~N2873qTQv9:~LmSuP9&!' );
define( 'LOGGED_IN_KEY',    'umMQO.AKP <G_G#C#Q_6kA)z5qd+`WKqn$ro7kP]WQ^M,Wtk,2nq j&4POvZWF5U' );
define( 'NONCE_KEY',        '4O9VJpYffkY~(w&,X5xtL1F70APqop67a{)-itC6r4vSJ2kllkG]ay*6Z/ks<H``' );
define( 'AUTH_SALT',        'GOf#{8;] oLX]l:a*Ynv9`H(Vw88-O3GGjL0o/Qa~(0k1BlqONeaKs<{_zSbw(a}' );
define( 'SECURE_AUTH_SALT', '#bnkktQH9%T|=?=x*qi.AWv,;C(V%.vFF2.z|}U3$)a[6[C3Qvn|/l|jD9%)1(pA' );
define( 'LOGGED_IN_SALT',   '27<>(ic[ 3Ue{F@d}.1LsI5&3}eLF<O@ dm>m(}uFtjMv3?`x{bAFbJVA^tS9igA' );
define( 'NONCE_SALT',       'w.u~6;pjzt*P)7$1.49if]`VMGFb2tT|>>]2JH**VX=e;)Xgk1]`95,U%tLuMF;^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
// define( 'WP_DEBUG', false );

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
