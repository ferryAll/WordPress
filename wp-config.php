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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'kfaZJ)t^|.5~L OfgauC5E{(UzccQ*$6G5EnFc=}6Xu*Pb~f~)ek,kkOO!3{]p89');
define('SECURE_AUTH_KEY',  '`UShF,>(9;e|m{;japi8B(Ny/aueYaOsYQK uyg(RSxLNMCs-Ws05yR37IBFK#]<');
define('LOGGED_IN_KEY',    '7&P88_B)3cW,i%9kF,IP*PcAj,gUZRD}X.M;T?/>bm[h-tIZC]h3CmkREAncu~F1');
define('NONCE_KEY',        'UNkaY-+ukNd`WYj->KgYsah:;;k/g#vKrz7y<9SRjCqO]x$ |hTF7>bKC*.oL *u');
define('AUTH_SALT',        'A=O2$~5|QkN%Tz<m1YLj@gCyRPApowA6r$!8CkjI#?wgVTyXO[AQ2(OL}$3OEqDN');
define('SECURE_AUTH_SALT', ')^zZc,mk3#?&8(-{%mvefCWF4EO8uJSeo3V*<!W(E{m)>vtW/~ymPy6|v}3XZe(d');
define('LOGGED_IN_SALT',   'qgYR*8K:T:$)t0vw:s[i#Rq!hJ&7:MwhR/7%SP_RYD]/X[K.Vl%@,~e*_4|*`m2_');
define('NONCE_SALT',       'fkUFdAVxc,(s2).53sO=wC$[2[Wc7MqkP;78Pu+~&@SpQ?b%D5S(#16aM#}ZB(;H');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');