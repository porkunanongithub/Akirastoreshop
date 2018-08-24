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
define('DB_NAME', 'id6730027_akirastore');

/** MySQL database username */
define('DB_USER', 'id6730027_akirastore');

/** MySQL database password */
define('DB_PASSWORD', '0843213453');

/** MySQL hostname */
define('DB_HOST', 'databases.000webhost.com');

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
define('AUTH_KEY',         'JeK.E7$FjRy9c=RpAWpU,.~F[:?qXts(&}* NMePtOU b@|QZZ^7LOF8Ki~0:2,F');
define('SECURE_AUTH_KEY',  'T~7}JX*3|5dlt6+;2%4,&2&zzrWUQ)8?Hz<!RnNMu=:Rpm^dn9zW3+/vmpCizM6F');
define('LOGGED_IN_KEY',    'YG^AQSbJ+3$1hp*A}a8GE(8*I4r9@RdKjq2=HJcTuD hqe7ClkrZ(-~wIy=w*6y~');
define('NONCE_KEY',        'U$d`Zjk:=,$6Ep7, i SFIkf x=eHk<1/B9%D_VJ>UyPv/VeisPVG&=KVM-BvS7G');
define('AUTH_SALT',        'kHj.Ja$e3+s#.GPr@*6q]dCjH/Fe|=4sza(XHZ7HR}e +M0b>MdaTRW;!59Ew<X<');
define('SECURE_AUTH_SALT', '-y.3M$.YjplPO3&.v[~al9`iCDz),OF)=.D{Y`L9#& U*QK^-7k#w|h@hmb}VMR/');
define('LOGGED_IN_SALT',   '&p#d-b$~+;mZ6C[~6[y3Uz*:zVb6*1pTQ6XL7}BC#t@U?)O^D(~6~H/,_FE[u8`F');
define('NONCE_SALT',       'OxK:2L?7XQ$-7xIGd)WJeb(L<V_tYEy?L=~1pn?_pnk:BhSIIl7,abEOy7J|uUR_');

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

define('WP_MEMORY_LIMIT', '256M');
