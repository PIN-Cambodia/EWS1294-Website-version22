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
define('DB_NAME', 'wp_ews');

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
define('AUTH_KEY',         't7siNZIT~[%[%]s<L)WZeJKpGCnO{dn}t6|b!N&2bZgk] #].D63?f;NM*5BP^Y>');
define('SECURE_AUTH_KEY',  '{^Uk~%Y~4jxM=NG.HjRC:^w mLP)BG/:`[0n9yT|W,?Lh#Nh|Fct(YSI &##yy.2');
define('LOGGED_IN_KEY',    '$e:roS;XH<cj?|]_TfkuU0M{I!S_U^5;<il34B`VamO!6>H4l$`1B&-O3y4v4Mv,');
define('NONCE_KEY',        'XlHK2?i*68+0D`tLGdf4Ib1iBB[{28fnM9SR(Skyop3*U{[HOYz$ O3 Dt,#@(fs');
define('AUTH_SALT',        '0{:k|.</O//uSn-A.&&^a8obS%QHQ}*0)&q@omD}RM]ZVug.e6FLU`>OzF2s8Mn4');
define('SECURE_AUTH_SALT', 'TDxykkso$ThV6j&:eU^o.gfBW[A!~B2nwxv8,Rb0)6O4=iT-eyawW~YU+;PaIR6x');
define('LOGGED_IN_SALT',   'PJxB?#CnG;HX?/sF?n041&~]}ZK7 n=I4p%j F/Rago^#=w5+=n]vv|O0L/etJ?.');
define('NONCE_SALT',       '%J3b>%LRCp<&@o&Uhvtz bWNHq-U+YujiFTX/|`Dnx.6LE~i/NxN<K[ x}s+zHGW');

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
