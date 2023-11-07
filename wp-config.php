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
define( 'DB_NAME', 'yumchatDB' );

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
define( 'AUTH_KEY',         'A>t2?F;$Qdmd1= zd(y`]r*;JYes~j(pzX7DJ5Qi`#>gmISMn247/{$0lSqzqk:,' );
define( 'SECURE_AUTH_KEY',  'zS=*O7:YQp%yAs4yoSGEYw@ O,IZPz0+G!CGWrd|OWbhJ,?5I>Z_g}mZPUB8nRAi' );
define( 'LOGGED_IN_KEY',    'v8Er&~-Qc!cu2h<r,aj`|SltJ80$7(<;3sk4M!x,2T+(2g}-.B:<emiC^0$zK;MF' );
define( 'NONCE_KEY',        'b-)H/?1R^`OeQhkryOaj^3oF6k^FwVDP07UqDhV4)56/R95:1@A<~zTka{zW]`.7' );
define( 'AUTH_SALT',        'Jg P7<soh#X8KN}y6*A` lnF<wY7&JsxS.A#/xgX{6NH$_i&T*M2tE-v?Hr}]qF~' );
define( 'SECURE_AUTH_SALT', '/,!?4u#-m9HpW3F![OS!Lp]$A08W! ND1Y~EmS*F?!jPZqk0p($K,Dg^:3~HPP?~' );
define( 'LOGGED_IN_SALT',   'Z04D6|N=fv`aheBpIZZy8@ahypI7pVTx<5I8:KMU)4b5Zp~B*&Xl7BH4J]A%$`~@' );
define( 'NONCE_SALT',       '[^.G+7TK|b-.+}lShgbgmG1lZz9w`c@&~Iv8}WtJY^bsb,]MJt@L]Dy7UHv_BOP~' );

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
