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
define('DB_NAME', 'wp-yurrebilla-bones');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ',-W6CqaQw7(R`v9|8FMlI}$xemg;Y~e==FSu^bGAfnLSR$xs/sxkZ~Si(2F,c;Z%');
define('SECURE_AUTH_KEY',  '#tE oc[|X#3*5)#DgYR?dE14n(Z`J(l,~12 oSiOjD~]X5ku(Vjth6|2hl=>(yrb');
define('LOGGED_IN_KEY',    '^9)IPSix2Mui.s}w3bZr[b0P%tuD`ZY6oLusboquBm%BIkre-[aj E/#{hcdnKw&');
define('NONCE_KEY',        'V{vlA$J/8<?`{V rOX5wz4PyOZHF_B~{FQPRfE8r4Ic5:GWgTO3</mn/W0o-QZhZ');
define('AUTH_SALT',        '@z68.e3QiCFUm6!OLV;_CutIW9!31vL,5wo8-r~_~736ltY<oCY+X^aBrL2m61z8');
define('SECURE_AUTH_SALT', 'L;9-kSx{?6,w^BYJ(*yz/LpTltag^[{[}H`#^KdggX{?W0y.;T}Rc?~==C|,)V43');
define('LOGGED_IN_SALT',   'h&Xs*,J{:8wyvo?:Y9!.R40N<RjLKM!B[MA*CpnQVF!o$@qWyn($kNKP|)>q2@fk');
define('NONCE_SALT',       '{-me|6H#3Xdj8y2Q]#j,A&tqGjC&G{[eIF~fUaSBBztVH[v;5|Z`8+VS2 .GxMd6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

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
