<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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

define( 'DB_NAME', "landingu_sman2tsm" );


/** Database username */

define( 'DB_USER', "landingu_sman2sm" );


/** Database password */

define( 'DB_PASSWORD', "Ardata2024!" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'e9YqjhR93>#RdXWTQ,!E>[Wp$Y[4e@ eJ`u567?n9R3mW~hG>XG~<.-46|lW$7Y{' );

define( 'SECURE_AUTH_KEY',  '< vY!Qqv7Wp?Cs3a!$3oNR[pbYDyNvIaGU%LOO$A3h^^x^;[Q=hU}]|^1KBGPjt ' );

define( 'LOGGED_IN_KEY',    '5D{,Xq0FTB t<R6%p:y|_Bg6+;YvRya_)ASHDSM iHx Eefq@0EU4UM@#L83Fw(9' );

define( 'NONCE_KEY',        'YFni22y,4U|<-(#X@Ef!sQN=0+by6=%H3xX>|G?PO(|)S rIE8Y(ZUT^?A@!0$Ez' );

define( 'AUTH_SALT',        '9D]mr3O_E/n)ZM6G7Ud%fm=ZU|qLC==Dy]n?#pb~FYm]MCb_: +erBn[fr.j!9:u' );

define( 'SECURE_AUTH_SALT', ']MyOkTcy]bOTJ)i&Sf0q:p01AQZ[==:+ 95z<;>1!:G,u0Q^U!}@d#P80R,XtB{.' );

define( 'LOGGED_IN_SALT',   '[]me3#>kAS/nb|Xhb$}MQb&E@,qX#=a7@Ztqju>!sP37$#`YQPh2`UN&fTv/ NW8' );

define( 'NONCE_SALT',       'vjl^gMGN#tSbdnMu8Q)ST]R^#sO[8/88Dl}uskDPBd1,7DH>rL:lRj>+Zl_6Z$?w' );


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




#define( 'DUPLICATOR_AUTH_KEY', '@NXk=HK0s<x7PiiW7/s16DiNshRwje&`Ipl>>+dwzrW^T4As(YSr}>t2FI,7o>|A' );
#define( 'WP_PLUGIN_DIR', '/home/u1567848/public_html/sman2-tsm.sch.id/wp-content/plugins' );
#define( 'WPMU_PLUGIN_DIR', '/home/u1567848/public_html/sman2-tsm.sch.id/wp-content/mu-plugins' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname(__FILE__) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

