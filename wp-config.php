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
define( 'DB_NAME', 'agora-technology' );

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
define( 'AUTH_KEY',         '=BFAgRZtC){*P<z; i&rOEMYit_``_}t%6JTI2qsX|+zICLQILXAT>?BiRxm2&rK' );
define( 'SECURE_AUTH_KEY',  '~=IUVlI|fC|nw^/2Q|s-dT=m+?WjEgI/)H[;5o_UYEBDim)eS=|^*AXg+a>lga$F' );
define( 'LOGGED_IN_KEY',    '>_TbG2tsb2[@w,:vcqp(VnD`5oM*UJ7__yhcO9ZG,4$!F6S}LuY+^_.moIucG6hE' );
define( 'NONCE_KEY',        'BKlpb :ZND7tulbLr+p?IeE`fG<?e9+K=^7Z^,STxW5T^.*Pn9eqZBBFk;r>]U$5' );
define( 'AUTH_SALT',        '6;$dtYqNo@l>my9{2[F4G!s#Q!O2xV>%`KbecI`5W~#:t8@)-J8{/]tryexMZ^6G' );
define( 'SECURE_AUTH_SALT', '!~G7y#M@|l$wLmbk@G*6 9Wm&5=1QJ]XsTX>[{@<Ed?~y7dVU@9T2W~to{>g:L$)' );
define( 'LOGGED_IN_SALT',   '8u(k$UG/Y&)gJ3xuwi}cuyO:;ATQ%@>061u6#b?$*YHi3;>]iCkoZr5Zj#@74-BQ' );
define( 'NONCE_SALT',       ';hz/]4J`D13&WQ::&#JF3[k>>ABh-G(2L^=._w}zzm?]Y ;B)*_`T/R17]/!*4zT' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
