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
//define('DB_NAME', '932212_wordpress1');
define('DB_NAME', 'ankit_somrasa');

/** MySQL database username */
//define('DB_USER', '932212_word1');
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', '121asd)8&2A12');
define('DB_PASSWORD', 'root');

/** MySQL hostname */
//define('DB_HOST', 'mariadb-046.wc1.ord1.stabletransit.com');
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
define('AUTH_KEY',         '9RU(!6&x 2lJ1Bjc,E!` ?+1:=}#l@!CF4m@va D5%~}gK^kJm:$qF7S|UrP&~qC');
define('SECURE_AUTH_KEY',  '[|yO#fIKWD@&gXuL4dn:vM26?bQQv5!gqQI<xjMY63KOx,(;T>r7F:#erH]]pIJ ');
define('LOGGED_IN_KEY',    'WfjGx}x<}1mRqG*N|>uu1Pn*ipJ[^[*0@;SIMxdaK;LG$ BsdLPWK*,Hg-UZ7lvL');
define('NONCE_KEY',        'pwq|]/?Mxn*W~,8~pwGZECR$PKo(&Lbhww:0.uI*9R@0: @/)lN+CRz#F$v6ihpL');
define('AUTH_SALT',        'AE%q~I`^..bmK>y}+&[z>6ly*~^}u%Igj0/FH<XX<_A@v04&9G3r ](U%f87U]o;');
define('SECURE_AUTH_SALT', '}+`I 6^~P&-6/>F :)Wb 2g/KYfQp2::Xvhe`_xKR0N_jjcC=!SPd5Z1-`ukw*x!');
define('LOGGED_IN_SALT',   '8K=~O#TWugJ9RIX0Ln>sb`h=.gF<~b5e|lAf9|p)*1*7KZss3Dm- |H+!6-;Wish');
define('NONCE_SALT',       'm4N?w,s-C9Nq2A6Zd>H|fD@POyqC%$t28Qn}ZfQ1Y_:y8[ZGd+Q0No27pQdcRYsF');

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
