<?php



// BEGIN iThemes Security - Do not modify or remove this line

// iThemes Security Config Details: 2

define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor

// END iThemes Security - Do not modify or remove this line



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


define('DB_NAME', 'hmatzbla_newwpbalchi');



/** MySQL database username */

define('DB_USER', 'hmatzbla_newYeti');



/** MySQL database password */

define('DB_PASSWORD', 'KP[+Ir)GI,3p');



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

define('AUTH_KEY',         'h`M4PFB^~bX>/;5.Jn63v{46MgSkmK6Y!*Y(UN*sT0Y)qsu.hjshRq`e*D ,!uTr');

define('SECURE_AUTH_KEY',  '>_G!j@a+#6}Kw[[DkHskOkhyP*.uBM0Tb]u,<?nCW/Shv!e6T89m@T[m$|})5H&M');

define('LOGGED_IN_KEY',    'F7),hu&(/6$(.&/t=VU^_dVL&1-P!;&?j,}CsU={gjWXWK|P (wd`IYIutObC:@+');

define('NONCE_KEY',        'qM!u 5%^(qT^/XaM].`I=Of^G%%Ny-pDaqC#7ucuLVFs^dn1@E=4aI5xgGm?qlj$');

define('AUTH_SALT',        '.#8Yki{/_R$gokz/)cQUsa.;Z2|w9#_,+KNhyyx0FyZqpnDaWykYGhHFl,]#vq)m');

define('SECURE_AUTH_SALT', 'f$;e!~RMSRc#~<,Kp ^F|bUL9-MO^lf%GO5*d1:QZ5F|jGltfD**qfzFQC2o (--');

define('LOGGED_IN_SALT',   '{qmK*]u4E]>|3ZcTarOMo79ev&Jf2:xrp5qLp|X+ sU{g8t_{;v38$Kw)78`$LD?');

define('NONCE_SALT',       ',1)=W1t: ,*9K+K?PWvN/2RFc&k&S}QW[4:S3XrkHDg/*YUD&/h(+|JXZjTWXP+1');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'bc_';



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

