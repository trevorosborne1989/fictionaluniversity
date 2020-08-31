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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2OeqmsjnGRiWCnVWaUIoIOOQyVcg6I1AzhYDWpOdyTFb5sTTcDCD7BGEY1yB3YGmDL8s0+yD9CXXXFyLL+KFWw==');
define('SECURE_AUTH_KEY',  '36GOxWxs5H3H8nORU3Dme1q5/kRWr8MvKsYJrPIARRYNKmm+oeyWn/8zyZjZ3zDZ5lYQYwcuiik5Y3Z4yrtUHw==');
define('LOGGED_IN_KEY',    'n28saUCbHSnur5nGDoqXTF1j8oaf6dQakTsEGt7NyPHEfpRsJACGg0Rnqx/54S7rYy1e8sx5Z06dnFvkNWTzmw==');
define('NONCE_KEY',        'A3I4UYzoIMzC5yLEl7I/s+ZBjV1OwqeFkkqe3fsOKuSJSnJdILemGR3b2rf/umrzW2HWSrkNsNGemxMoGwprLA==');
define('AUTH_SALT',        '1I+Fwr7ovCwAh1/h10yeE3bAJspH/gIMZPt6k3dFTljfUzfI7ogJKC+1sViD0vUiwb6ilhpUimZXPPX6t//74g==');
define('SECURE_AUTH_SALT', 'lhCsKRNXSI+zI7aavtevP5exQn/VUrAL5A/AM/Oj+j6JUf4hselWGxGl2e2ZdqV1CnEZ6iyo15KO/ITvABU+PQ==');
define('LOGGED_IN_SALT',   '0tum26bRpd69P2+ouviDkMESKYW9rjhHCrRHlWuulocUy3Oleyy1e+6Bgm/stAbCfpzrQkcVGlmTAB6LD5kHHg==');
define('NONCE_SALT',       'cNqSncE3GUrd58A4RVTcoFIj4gT1WvL9/ETkIiHF4TTxyHM1046daGyOUJ//KUy9Vk5w3vt/+jUS5dRymSLzjg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
