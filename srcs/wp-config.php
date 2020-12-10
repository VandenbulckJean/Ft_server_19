<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */


// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
 define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'jvanden-' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'jvanden-' );

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
* {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
* Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
* Cela forcera également tous les utilisateurs à se reconnecter.
*
* @since 2.6.0
 */
define('AUTH_KEY',         'SIZaT=f&<lg<u;I}4#OvR+= cC=jCo4Q)Jty-;2;$>5Z<-(b&| s]-g+$R4f(eR%');
define('SECURE_AUTH_KEY',  '+7MsMw`-T=2mnG^L$:wH}PuW6P(ep6htMm+aBH0+Ax&s$HG_x/D`/Z0c)G,z.y/_');
define('LOGGED_IN_KEY',    'iLTPjtm1<a^of{5F]E_rR7_zS/GY| 41s|kXvWYeuw G^FL*>e|xwEP$&!^+`|~,');
define('NONCE_KEY',        '):|MA><4uhY18w!IXw!Xj|~=m1fggvL.JVf6quBqUkwU.wRza3Re^l-(brh19+2s');
define('AUTH_SALT',        'p$MTROfXub-xbCmRKdVU/*YS@^x5rIMq$~KoNQ48>wArH^acU^Y;hc5)eGAk5rUI');
define('SECURE_AUTH_SALT', '6-U;YMg1lr&nqY*Y;U?&|Ey7?A|qQ:)T/C;N8{9,Jz}05]twnF(JZ44#<-e*%Rpq');
define('LOGGED_IN_SALT',   'X2XANpybHnzHZZj#|!-tyv6J!;*_/YALIY6,*>}xV([eT-:E@x*Pf.,u: wYFzb{');
define('NONCE_SALT',       ')oXhYS:sB)2FmM+M4!+66(XHIVD0M5&|PT(Pfvx+Zp-|hS2bQD|gVSYB7mCEIXEp');


/**
* Préfixe de base de données pour les tables de WordPress.
*
* Vous pouvez installer plusieurs WordPress sur une seule base de données
* si vous leur donnez chacune un préfixe unique.
* N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
* @link https://codex.wordpress.org/Debugging_in_WordPress
*/
define('WP_DEBUG', false);
define('WP_ALLOW_REPAIR', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
