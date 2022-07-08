<?php
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
define( 'DB_NAME', 'Max_shoping' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'jF|OLYwtmKq5X-s2igE#,1Y?0>/a^_1~zuN9Rj0@u_drNBT80XL-n+ON|!})n5]R' );
define( 'SECURE_AUTH_KEY',  '~lfmynruw]Ph9`a.g||W.AP?|&i:;KHr+$;JFZ4Gw:)~:]sQb@t!iW$aus=^!cu>' );
define( 'LOGGED_IN_KEY',    'oTf*2U2OZ+pP3mTXe;vu1K4H;GG/JATuf?}aV>RuD-?_Un|R|i0Cx?!d+^ZBW{z6' );
define( 'NONCE_KEY',        'C3;KX_9=DQJ36(Zy7VCszeJ8V5 S$re::20f$(5@5e}IHf+aB#Vn2bT_&7c1?vc;' );
define( 'AUTH_SALT',        '4iOmnS;ERG0kgn/{ga{)7ZNbB2l(;A.[-y-c8by(I_7pJhjdEdg7Q,3Q6v3D11}N' );
define( 'SECURE_AUTH_SALT', '/74bd>o[ua2DU}UH5-{9pQGPpi+HQ5q7ET^qY-]jWBPXnkvi_urN]|AvU:wX%G5,' );
define( 'LOGGED_IN_SALT',   'Jt]k_,d#CZ(P3_|*d~QMoF-fQRl6KRroE/$,z~#/9|;F@*O; #e}uM^iF /s^$`=' );
define( 'NONCE_SALT',       'tOc%;HBnonM#Kktbj4/$:r1V*YzyVaNVwulx3-WO`A1$u{o2`vloa2i.wnAZ1@ $' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
