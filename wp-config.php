<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aula');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E1D($JN&~/qw$`}KofE.;9x`c*)YLVs5imMlWab/Sv@v/Y+RjE5a[w/!buAag2;u');
define('SECURE_AUTH_KEY',  'j|qRkm_<h^<S|O+w{>AS|9y)C:FV|+=;Vax~x9+.f:y2F2S1LV(4.^dD/+hG$t9X');
define('LOGGED_IN_KEY',    '% 4Z65PRc{c*b[PvL|p7I }J,BO{4m/L9&Q^`QpE~sax--x@q:9#|(c6@JoDolBG');
define('NONCE_KEY',        'Y~9dL>|`YS{dkRvz/sI%oDYYO>rVCq@@0l|]-jGGn5!r<&;A>RL(ea=+wr>ezmT`');
define('AUTH_SALT',        '~teznuGzPt//^t`5+>#|t-Rro+Xje~f^5(ZbP:gI@HERy?91-]03)H:#K1Zyr;c|');
define('SECURE_AUTH_SALT', '28]o!K||6k+eDXJCyeZz;>MC6Cr_|U,pFMxD-Q6:w9OB?5*|V>gez/o:7J$x/|t9');
define('LOGGED_IN_SALT',   '_-Hk(@L OL(47Y9nV;_YYeQh#5vn(oA0H6a|gOO3Z@2=]W,&|NFdND!e.,|:H+v#');
define('NONCE_SALT',       'QaV}ygdK[,ATRN1b 6DM+Pf8W2SRd[F@D7aG?$4nOIr4>#76BKdfQOs(GwB?|f<n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
