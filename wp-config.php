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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'unittest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GqHPHrF#@-X(z9r=QK~Av 3;9D&5CD_={+<2-PZ:E8j)|mEC3lU|Zd]J@Yk}RXVV');
define('SECURE_AUTH_KEY',  '1;g+Y2T$J~(;P>F zGZNzA&&S9R8sy?V)${zPz@rSi1;^<_$-Y!d{9b?&f_fy$X-');
define('LOGGED_IN_KEY',    'hL@.$ w?`+v-EvWf@-V*&^3p).ZUavd4N&~|-iDD3, kV0|lS&ho!{?:M,Shf+TL');
define('NONCE_KEY',        '?wg66u`/w5{mt@CF,Klhex{if#{6:ys+I-J|dOchYClib!Dck{trD.JC_qp#l-J&');
define('AUTH_SALT',        '/aTPj,.ia]r__9bM{V=v_d.9sX&2W0eQ-D3HN|Y|]jT~({>wm!x-I?rc.BPs`GGY');
define('SECURE_AUTH_SALT', 'jt$iKiiJ&^Pua/{Y%1|b>p:D *j&=[Ew}v3BPW[t/HQEK>X-B3SLph.QX:}7BN-|');
define('LOGGED_IN_SALT',   's^yrlZf%&iHZj& |)#a+U~*TKjhK%t3=37h+kC3==FY&44aur;G,f*35`&a~tUUJ');
define('NONCE_SALT',       'ibi.4+!MEtF)^N7t#ljf,(rIf`j3o5]~H?5,pp{+Os.mXpE]I!;kz8w9h)*xq~`L');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
