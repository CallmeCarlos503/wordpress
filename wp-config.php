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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'dSk+Y6 |j/c _xTSV=G$E>FjD4a;`I,F9[VckW1H 8Z5ZS.,$NVB`P|ZEZ/h}J`l' );
define( 'SECURE_AUTH_KEY',  '9P%ME.Er+gFNqH8C-N=H{O_%|bN~ U<=s/H8DhK|:%%XyF~G^x3 Q}^Ld7TfYE_i' );
define( 'LOGGED_IN_KEY',    'C$%G9O90Xob=F`19ko jx`oNqnW!BxyJb]y&t4{Lqpe<=d5N4c&vsv!UXg@i6roK' );
define( 'NONCE_KEY',        '5HxVq2gUHo9YnVw W5MFp~4]3r.e/tg5j[+Owe?tmb:Y99DwVk2}w_Y-)V^<^Zgb' );
define( 'AUTH_SALT',        '>vEalcJQ:}.EZgaoZf8iKaji0vMC `$Jx=_+-P]B8O ?G$/dk6`:)%J*<O)Kn8za' );
define( 'SECURE_AUTH_SALT', ':ywbcp8L)k{6/,hnD|o{hZP4!+j#p#IGjZg0J,Uf]~+d`I_:+]ff?7YQA9!9,EqX' );
define( 'LOGGED_IN_SALT',   'T(8FZMmTBugeth>oL-@Mo ~/<o-(*w8xR%Z;}U{l:?GV/f]big{gd.FIy.+B;;$~' );
define( 'NONCE_SALT',       'GE)82x>e/<~FBV^!]4Hu_ G&P h`uRoFu9cfZPTH8s/zF, SG(f0~A-CbwM586oC' );

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
