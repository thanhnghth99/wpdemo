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
define( 'DB_NAME', 'wpdemo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'G8NBEN}#J,nX_,k|+6|fG1?2Uqt-~B;9{aGqSeu$-5VRctgMoP$x&L3=Sbc&Fkz~' );
define( 'SECURE_AUTH_KEY',  '/H c,d:,3F3D6j4J2p@7yt>)[M7}1)VCgrt})Zs-TQ6wjLL&Xr!^mz5=Sc/V9XAp' );
define( 'LOGGED_IN_KEY',    '##D-Dhdi*cn:@7la;(t?tqz}>NzOf)Mot5=/*cF}tBz:iI2~Y)MqAppa+sNS,YYH' );
define( 'NONCE_KEY',        's^aN0;DRsoJn?xF~c_oQAu%7Y`eV(FmCQLgb@tH()CYV~=)|,H=Yc61lCP8&6Z?V' );
define( 'AUTH_SALT',        'i_v)lkZ$kXXvJ,6h_of{XYHo<?%C75Xs`C2$.8`qZYO7>SBieWshTEbcj,~:X^]2' );
define( 'SECURE_AUTH_SALT', 'Xh<7m5)y IYym6XX,lj7ujRR2HVx?B?[&-V%`4w<1$jgY]Jc*_g/,gXz2#%zjUU6' );
define( 'LOGGED_IN_SALT',   'tI#>Sq=b7||tTTHiWjIiKo=Ru+rt&pu/hhCU|wx&B9Q-}Sx$2yzD-%izo.IS9ov$' );
define( 'NONCE_SALT',       '8FqKuI#Ht=0v*0fzbh.E(g#hlbBIJ27LbRU]oHvugk6GC]M%$`=yisbE,,AvXnLA' );

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

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
