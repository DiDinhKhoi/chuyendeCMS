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
define( 'DB_NAME', 'chuyendecms' );

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
define( 'AUTH_KEY',         'mW}=C*dO`b^Yu`S)PI&)zNssLVCZwr8^|3$D:S^TW|]1t39qGUM&S^{T_EMw?%4^' );
define( 'SECURE_AUTH_KEY',  '+^&6G1PKe<po1Qi<&4Uj6{MH:ZyH(R]G1QVW@r{4/XWisTr$i`d`]KSR >t!MfzY' );
define( 'LOGGED_IN_KEY',    '(@f8lY.,R.Fa?>gEE`#3fpUS.la`qjM%98BBrw:_~mFfib(uKef;1Q3RFjWsB)J[' );
define( 'NONCE_KEY',        'i<?UZ%F;X~<;[K)y#F;pENZlb-YxX9<)l0R`VZDjHdKS,&7>HTL:NM?Cck-eV6i6' );
define( 'AUTH_SALT',        'NR8t6+JgS%A*:a@|72b%:kH7yS#XxHjn`K{jl^(o[DngF0~8yismb7QFFmdgL<A^' );
define( 'SECURE_AUTH_SALT', 'C<c_iqm bI=oeWy]{_J6M$2{A~b!o-}{.0N)8qq%?ZF<6nUrRaT8[=N(uA_Ie_Dq' );
define( 'LOGGED_IN_SALT',   '&HWd(:L?gS:^{3Gs#fPqaMTJ&}Vnf/UEoB{t^dKifrAHC+WBBkT<U~{qe=i)<ol4' );
define( 'NONCE_SALT',       'SsL46n,!a^H=_kIsP&&uPfzJO#_%*Z#AX,sm>_9hu|IN&.xkN1rxg:B!;ZMT,K{e' );

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
