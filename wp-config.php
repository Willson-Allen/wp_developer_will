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
define( 'DB_NAME', 'wp1019' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AI0Zs4pkPq;Y_b=P#]5u,6vX nfSq!k|B{U#9rY7L_:V}Od=Fqe7]1&jU0%r%),`' );
define( 'SECURE_AUTH_KEY',  '?$vCt:%USE%R~bOeXd{ii9Frf5F_4Om9;!OL.pqNoA}ud|Ks#~s`nQR%UYvYl*>_' );
define( 'LOGGED_IN_KEY',    '}[K-dqyc21uG!0hk/tl](t_MjV5pMG(# ~N1*A jT.^:u>!;OV1babsfL{N:?L;$' );
define( 'NONCE_KEY',        'dcBb|x$P1nR:?q%/d5!a!17v!o}FfaY6!DL:{&Q|8If9{e1/%@pc`_Y~_TAzH15,' );
define( 'AUTH_SALT',        '-.Z]%Jx^_(KTe9o.=,5f)nz(Lu[:A$[vx%lxR>,UkM|?zf8wZA|@!dSF{hJ_Uj#(' );
define( 'SECURE_AUTH_SALT', '<}sDQXqF5sPzKb!jjUXLQ@7QCk?XRNF6O9i?)]q#G$ODos+{@Z/SLVGwpIODfIFK' );
define( 'LOGGED_IN_SALT',   'j6WM>%E+7;2C[&s@/E*;`43[ci4}H%W;~*r.C?yK[Ct3[Y::nX>N?]Srh_H%qOy/' );
define( 'NONCE_SALT',       '~15tFnu`Zy/? k.^Ci oA4:7yi!9p.1*j[>0-[qQFP!zfsc)BM}!N}>o1IVSowFs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
