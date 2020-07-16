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
define( 'DB_NAME', 'wpbd' );

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
define( 'AUTH_KEY',         'knSM,vT9qq0&+ESeA0~5[fD8X1M|ZAzIh5lR!;:rKP7V{.8O-XM@WGma}b4&ewdT' );
define( 'SECURE_AUTH_KEY',  'XW01Ic_,kGjSFxkW`!sToM.^l AP2oDhjvww.b^Ph;uIhooV$#M|`n$fhb75L`X@' );
define( 'LOGGED_IN_KEY',    'J,e;OgL-K?slj17~G7zV+R3zBC@$]yu&J%qO<r(2;Eec2d<0W+mY)15B?H2A<nP$' );
define( 'NONCE_KEY',        '_]>I<!EXI(@~WuU1-2bf*Mum91$~e1?(xND]b6*F;-D/;FK>/;c>or&nJ0WqG#0R' );
define( 'AUTH_SALT',        'kR)au%-Z}SqGBXB.seA52wTs0q9&IYh~R5?3)J5 `nB!#z>b{@a4_I<6bXs5-5;g' );
define( 'SECURE_AUTH_SALT', ']bEvZS5`qx#Eo#Q@U )C8*9ij6:mK:J#@}Vn{Hp5`@QI{n]XRQA8i|W_+%b?;ik%' );
define( 'LOGGED_IN_SALT',   'Ks`_PI_r;#d%K^?fKlP4}yI82Qg[?~usHo{8z&a8 1cL+,)MG2v{R;ZQz1BY+=6v' );
define( 'NONCE_SALT',       '8BQezUUmaol]Z<k2A/wpCR*#@(>)jb-_g6qnVV*`}QIh;oP-q)u)KV.3?UaUjNQX' );
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
