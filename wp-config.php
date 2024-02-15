<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '5y. +;C~5$a)KR`JzI7iK|j2a:._Is#hLR^[?D/h6{mqQ-2Vkax~4hfRXvQh|cxh' );
define( 'SECURE_AUTH_KEY',  'Q|}sNc|VpMXraS:K#FY]1 9]iCl|D`xIj=iLwm K1<|U,<>jAz@~-(eidPT {].w' );
define( 'LOGGED_IN_KEY',    'cC^A[*%2-qKa)+XBT0KRW.{ndKPL8VTV6=#/S6}kc.mCu3BdBBBg9e4j4Vi>h^:a' );
define( 'NONCE_KEY',        '/<D(Ks#D@M=~f}]68dRp0TvuVnq4E]a*gVzBmqcgHrpvM[M!c)yO%]N@rud@M]GS' );
define( 'AUTH_SALT',        'Z%<94*JEzT~FGeB)K1hOXe/S?b;; zA+,p#Mz X9:oMQd C-)[^u!/oE9&N5^WjH' );
define( 'SECURE_AUTH_SALT', 'rwKVn-E]$c5S*-<_(}DTd1]3(Ns{z|McbqoXarZ}t#w.Yym?v/Kv0:=W!Z!n52ff' );
define( 'LOGGED_IN_SALT',   '#Sb8~L``yp#$%DxEHpZS;&c?q,z{J|=SD*)RcSy;6S49dnBC3~x e?NQ(kydUZ?;' );
define( 'NONCE_SALT',       'KAiAu@VH+Ig,JkE+x{W.P,F=}}HY1wukPg20Khz|h{Ia]vw49r )ZslOu.@h!flW' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
