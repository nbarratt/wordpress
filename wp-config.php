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
define('DB_NAME', 'local_wordpress');

/** MySQL database username */
define('DB_USER', 'localwordpress');

/** MySQL database password */
define('DB_PASSWORD', '7fe6417051*');

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
define('AUTH_KEY',         '+A@Izi*hFW@|n0GeG`ZQ;!uAmTWEo%-+:Yt$$qykO2`(?gA4 sv``VniBJdqsm-_');
define('SECURE_AUTH_KEY',  'PA:dW@u&~9S>c+nY[Y32z)U]|L.TJ-QcFY&d=JkuQHqjq!QRi+uJ6gA4sO-~/jE[');
define('LOGGED_IN_KEY',    'W@:5cn?T?h}ku^EzC TXDp[c6Q#^oitt[&6)%pOso)-tF#10,93@;1U}o?+2Qq3t');
define('NONCE_KEY',        'I)}-D)o+QB2]U$-95fg~2U-L+fH ->>m)Y0AwA?Qsm%`T[k^@6`*~Ju_9My|l?Cu');
define('AUTH_SALT',        'Y)m0P%I6Qr+ZiZ?suqcs:l?Q:%J/.|K73G^|t+AsvVy:S.N>`c|rlf[1X@1p>H7u');
define('SECURE_AUTH_SALT', 'RDtE}1/In#.s$6qS!EZLb2g*T 6)`t1A@pb%+0u-ZXU}Fw6Amp[A]f8CXFU-n$1/');
define('LOGGED_IN_SALT',   'SBUuqRmVk1Djld-v)3mox4U^Oyz$f|@a]W+pcg^9|lme4z9O*H??Am|7`}dR/I2G');
define('NONCE_SALT',       '*QdJ.)~v&_yYQ 3wv2J6wP)+7S|/5%;(W#ESogwoA(;DYS*=6dSh&M[&LZ!?_VnH');

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
