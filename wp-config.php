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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#69oS feVji(Xxt$HvG;NZ=y..Ck-dTv}|KYhWk]eeoiPBezt!hPE>#N!(W!anxI');
define('SECURE_AUTH_KEY',  'sHWP!2EHbvC.BjZY9L67.Qc:L`UzO`E#EB*Q/tVf4=5)Aj5qw%6+sFANjc1hP(i{');
define('LOGGED_IN_KEY',    '#wbK.9Nzk?^QaIzCDHleFK$evWe|#;SIj+/1,t#wUP$4X3#4)Pomhe(4.b:V$~F>');
define('NONCE_KEY',        'NW]l!dw<0z/Zhhn?Hh9fhTP@O38{Q<IG3!Py25GPJ,2{#~c,L-~<6Q: .&*D2X}J');
define('AUTH_SALT',        'K{E?+oK_6jbqim/ wt40P]ESdhL?+Z59x/?^7w,S}?w}BKuApDcD$0]#ZjSY%Yu/');
define('SECURE_AUTH_SALT', 'mre_B{0SJ+K+v/U8u9;b/ &YWNVtZ.K?.#}0hEXoDAXGJ=53pd/cI@Z}nqZPh,b*');
define('LOGGED_IN_SALT',   ';}eaRCePHf`,xZdE_wuz`X@jHoSx9+R.biVb*%Enf(!I(A-VA`@kk-P&N8U;y$3/');
define('NONCE_SALT',       '3;SF/a|y?mSHS %i6]h0}L]Fs,a8)5LI0Iqa?ZnXA`?%hO4*i0|04.7!>-K;ND:.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
