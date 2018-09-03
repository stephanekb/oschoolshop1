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
define('DB_NAME', 'oschoolshop1');

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
define('AUTH_KEY',         '%#BME`oE g%)Y0OdOkR^j*`LtI{#JL2zgaPlY#96J&jFd;W{%Pu7*rxgkp*]4%=$');
define('SECURE_AUTH_KEY',  'jvRBATs}RX=U)x|iZ:S(b@XF+Ue0{5KX_3uAi9)[5&76+4w{v~,jVSUx52d2L}$@');
define('LOGGED_IN_KEY',    '(L5[:_hc^]@F~T-$2S(x9f`mQ Ua&gs;!1$0,Y&<zTNj/D5F>IO=!LT+Sj/6r4VG');
define('NONCE_KEY',        '=|2]BEPG4(Lt *WT9_gzU[,>6v*k7#h&^Q,|*TdY:$q]U!XuHT*%JD)YjvdsdB);');
define('AUTH_SALT',        'Cax-7huUuDN0cdrl5KX{Y8`epXdcH.|r_/Arq.oZE:PR,pNQlh (Fj|~vbKU{,GP');
define('SECURE_AUTH_SALT', 'iBl@1OcObg;;vsAId?|YA*y2KfQE_*^#8Hr`C-raqxsKPd~QJxs#c^ABQNgc_G:F');
define('LOGGED_IN_SALT',   'X0@r.$$o6B?V8=G8Vq;pB]zed!JAhAuz:k]h8N-~6n`yrcXXuP&[&+:}VJx4<gcM');
define('NONCE_SALT',       '|wz<dOz;n{ZK$6DWFNEhNeJ+!c*)BV}XM{1m*Q|vYk?Z7fI[(KZr!8eK(RIaIYCD');
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