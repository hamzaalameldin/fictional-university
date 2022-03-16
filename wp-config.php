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
define( 'AUTH_KEY',         '(brFxOg+>3dl.4bs~s  pjxVtM%%hskR0nBJS[+QdM6^i=$K!*Dx4<komXB2B@>F' );
define( 'SECURE_AUTH_KEY',  '<maRr*;u,C|7t6y.y+Tg9QJt0>mvbhHQlV;h?}S?tz{Q/O%6Bc(T#ESo?mM/dqS^' );
define( 'LOGGED_IN_KEY',    '(yAuU%c]wL4XN,0))P271F`?8K4ZHm-I]JcH?zEw<f =me|n:&;~jH9[BX-RL6$T' );
define( 'NONCE_KEY',        'F}!cz`4m^y7-}~;<^|2bsGB18sCZg!ly^rP+)c3`PGv=ov]Kpg9/$EUmfP-S+,o-' );
define( 'AUTH_SALT',        '9_)]]HGv{!-T7g^><3Q]r%AT6d]~N,zQS!a0>5|>);^-d_3NLHVLx=EBfi8)*BD^' );
define( 'SECURE_AUTH_SALT', '7tN&C^wEP.?h]bwl-!H3kK9RkmcA0=,EJc^)^H<:czm+/$-#r_oY#4/|ofG5*?NJ' );
define( 'LOGGED_IN_SALT',   '[U8ek%l+Oh$9mCr=d>l}UdM))v#WuAw0)`k:22Q+k|,fSHM&m *%?CFJPiN;P ZO' );
define( 'NONCE_SALT',       '$kFXhb>L[I*nR#.H62f]{2x>_Gx{/m^UFsgXYx@+;s<LW^:,dcSNFmzj8DN,g{$P' );

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
