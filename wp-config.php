<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'themewordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l8B@NUz(i1SV`Yo^06j>GA;6p^jraT/tU0UHL#4+/l^v.1#=jx+mSvmU6?3hRb?E' );
define( 'SECURE_AUTH_KEY',  'y{z>~-+bfJ_0*5xa$ o}],hhEh?$of9x$V(H3ga]QO,;[X@i#uS[vJ SZlKEn%z&' );
define( 'LOGGED_IN_KEY',    '&TVL$iwcvAA~ychpc30,}I_gjTI/i}Y1&:#E&r1Z@}&-0h1~.u<fN|SweVq@_OIL' );
define( 'NONCE_KEY',        '5GSwzpU?GP$~{c]B02ZWEHTkA5p0E#TljJ=0ul|-B|?=0&=LK[}w2M^+L]DM|1L/' );
define( 'AUTH_SALT',        'C+9cW<CGrmo>,/K*Zb-/n;hIq7zg!.!-5JQv)hj|ai=*)In7?*^LG%(~Z>^;[d;L' );
define( 'SECURE_AUTH_SALT', '+NkfNjhmC Qn;*=F=MW;relNy[`;+ %#Bh`r^A%88ZtuqhsZIpFBwhuNs!-,XisI' );
define( 'LOGGED_IN_SALT',   '&j!f|#?7PBI1TsDdLNNHfJ4+I*i1vXs:u}0@Sg>UM/H{kz.1h{p]q1&rWbr7yBN.' );
define( 'NONCE_SALT',       '.TjP;~cRlQq8A7u(RKa81]wf`<Ez?juLz8p)9O$NYImrRRN#]*fnA&fG^~+5TKap' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
