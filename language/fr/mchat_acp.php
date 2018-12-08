<?php
/**
 *
 * mChat. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 dmzx <http://www.dmzx-web.net> - <kasimi - https://kasimi.net>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, [
	// ACP Configuration sections
	'MCHAT_SETTINGS_INDEX'							=> 'Paramètres de la page de l’index du forum',
	'MCHAT_SETTINGS_CUSTOM'							=> 'Paramètres personnalisés de page',
	'MCHAT_SETTINGS_ARCHIVE'						=> 'Paramètres de la page d’archive',
	'MCHAT_SETTINGS_POSTS'							=> 'Paramètres des nouveaux messages',
	'MCHAT_SETTINGS_MESSAGES'						=> 'Paramètres des messages',
	'MCHAT_SETTINGS_PRUNE'							=> 'Paramètres de délestage (accessible uniquement aux membres fondateurs)',
	'MCHAT_SETTINGS_LOG'							=> 'Paramètres des journaux (accessible uniquement aux membres fondateurs)',
	'MCHAT_SETTINGS_STATS'							=> 'Paramètres de « Qui est dans le chat »',

	'MCHAT_GLOBALUSERSETTINGS_EXPLAIN'				=> 'Les paramètres <strong>non personnalisables</strong> pour un utilisateur sont appliqués comme configuré ci-dessous.<br>Les nouveaux utilisateur disposeront des paramètres initiaux tels que configurés ci-dessous.<br><br>Accéder à l’onglet <em>mini-tchat dans l’UCP</em> de la section des permissions d’utilisateur pour ajuster les autorisations de personnalisation.<br>Accéder au formulaire <em>Préférences</em> de la section <em>Gestion des utilisateurs</em> pour afficher l’état des paramètres de chaque utilisateur.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE'			=> 'Remplacer les paramètres pour tous les utilisateurs',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_EXPLAIN'	=> 'Applique les paramètres définis ci-dessus à <em>tous</em> les comptes utilisateur.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_CONFIRM'	=> 'Confirmer l’écrasement des paramètres du mini-tchat pour tous les utilisateurs',

	'MCHAT_ACP_USER_PREFS_EXPLAIN'					=> 'Ci-dessous sont listées toutes les préférences du mini-tchat de l’utilisateur sélectionné. Les paramètres pour lesquels l’utilisateur sélectionné n’a pas la permission de personnaliser sont désactivés. Ces paramètres peuvent être modifiés dans la section de configuration du mini-tchat <em>Paramètres utilisateur</em>.',

	// ACP settings
	'MCHAT_ACP_CHARACTERS'							=> 'caractères',
	'MCHAT_ACP_MESSAGES'							=> 'messages',
	'MCHAT_ACP_SECONDS'								=> 'secondes',
	'MCHAT_ACP_HOURS'								=> 'heures',
	'MCHAT_ACP_DAYS'								=> 'jours',
	'MCHAT_ACP_WEEKS'								=> 'semaines',
	'MCHAT_ACP_GLOBALSETTINGS_TITLE'				=> 'Paramètres du mini-tchat',
	'MCHAT_ACP_GLOBALUSERSETTINGS_TITLE'			=> 'Paramètres utilisateur du mini-tchat',
	'MCHAT_VERSION'									=> 'Version',
	'MCHAT_RULES'									=> 'Règles',
	'MCHAT_RULES_EXPLAIN'							=> 'Saisir les règles ici. Code HTML autorisé.<br/>Ce message peut être traduit en modifiant la valeur MCHAT_RULES_MESSAGE du fichier /ext/dmzx/mchat/language/XX/mchat.php.',
	'MCHAT_CONFIG_SAVED'							=> 'La configuration du mini-tchat a été mise à jour',
	'MCHAT_AVATARS'									=> 'Afficher les avatars',
	'MCHAT_AVATARS_EXPLAIN'							=> 'Si défini sur Oui, les avatars utilisateur seront redimensionnés',
	'MCHAT_INDEX'									=> 'Afficher le mini-tchat sur la page d’index',
	'MCHAT_INDEX_HEIGHT'							=> 'Hauteur sur la page d’index',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'					=> 'Hauteur de la zone de chat en pixels sur la page d’index.<br><em>Valeurs limites de 50 à 1000 (250 par défaut).</em>',
	'MCHAT_TOP_OF_FORUM'							=> 'En haut',
	'MCHAT_BOTTOM_OF_FORUM'							=> 'En bas',
	'MCHAT_REFRESH'									=> 'Intervalle d’actualisation',
	'MCHAT_REFRESH_EXPLAIN'							=> 'Nombre de secondes pour l’actualisation du chat.<br><em>Valeurs limites de 5 à 60 secondes (10 par défaut).</em>',
	'MCHAT_LIVE_UPDATES'							=> 'Mises à jour en direct des messages modifiés et supprimés',
	'MCHAT_LIVE_UPDATES_EXPLAIN'					=> 'Lorsqu’un utilisateur modifie ou supprime des messages, les modifications sont mises à jour en direct pour tous le monde, sans qu’il soit nécessaire de rafraichir la page. Désactiver cette option si des problèmes de performances sont constatés.',
	'MCHAT_PRUNE'									=> 'Activer le délestage des messages',
	'MCHAT_PRUNE_GC'								=> 'Interval de délestage des messages',
	'MCHAT_PRUNE_GC_EXPLAIN'						=> 'Durée en secondes entre chaque délestage des messages. Note : Ce paramètre contrôle <em>quand</em> les messages peuvent être délestés. Il <em>ne</em> contrôle pas <em>quels</em> messages seront supprimés.<br><em>Par défaut 86400 = 24 heures.</em>',
	'MCHAT_PRUNE_NUM'								=> 'Messages à conserver lors du délestage',
	'MCHAT_PRUNE_NUM_EXPLAIN'						=> 'Lors de l’utilisation de ’smessages’, un nombre fixe de messages sera conservé. Lors de l’utilisation de ’heures’, ’jours’ ou ’semaines’ tous les messages plus anciens que la période spécifiée au moment du délestage seront supprimés.',
	'MCHAT_PRUNE_NOW'								=> 'Délester les messages maintenant',
	'MCHAT_PRUNE_NOW_CONFIRM'						=> 'Confirmer le délestage des messages',
	'MCHAT_PRUNED'									=> '%1$d messages du mini-tchat ont été délestés',
	'MCHAT_NAVBAR_LINK_COUNT'						=> 'Afficher le nombre de sessions de chat actives dans le lien de la barre de navigation',
	'MCHAT_MESSAGE_NUM_CUSTOM'						=> 'Nombre initial de messages à afficher sur la page personnalisée',
	'MCHAT_MESSAGE_NUM_CUSTOM_EXPLAIN'				=> '<em>Valeurs limites de 5 à 50 (10 par défaut).</em>',
	'MCHAT_MESSAGE_NUM_INDEX'						=> 'Nombre initial de messages à afficher sur la page d’index',
	'MCHAT_MESSAGE_NUM_INDEX_EXPLAIN'				=> '<em>Valeurs limites de 5 à 50 (10 par défaut).</em>',
	'MCHAT_MESSAGE_NUM_ARCHIVE'						=> 'Nombre de messages à afficher sur la page d’archive',
	'MCHAT_MESSAGE_NUM_ARCHIVE_EXPLAIN'				=> 'Le nombre maximum de messages à afficher par page sur la page d’archive.<br><em>Valeurs limites de 10 à 100 (25 par défaut).</em>',
	'MCHAT_ARCHIVE_SORT'							=> 'Tri des messages',
	'MCHAT_ARCHIVE_SORT_TOP_BOTTOM'					=> 'Toujours trier les messages du plus vieux au plus récent',
	'MCHAT_ARCHIVE_SORT_BOTTOM_TOP'					=> 'Toujours trier les messages du plus récent au plus vieux',
	'MCHAT_ARCHIVE_SORT_USER'						=> 'Le tri des messages dépends du paramètre utilisateur <em>Emplacement des nouveaux messages</em>',
	'MCHAT_FLOOD_TIME'								=> 'Durée du flood',
	'MCHAT_FLOOD_TIME_EXPLAIN'						=> 'Nombre de secondes d’attente avant de pouvoir envoyer un nouveau message dans le chat.<br><em>Valeurs limites de 0 à 60 (0 par défaut). Mettre à 0 pour désactiver.</em>',
	'MCHAT_EDIT_DELETE_LIMIT'						=> 'Limite de temps pour modifier et supprimer des messages',
	'MCHAT_EDIT_DELETE_LIMIT_EXPLAIN'				=> 'Les messages plus anciens que le nombre de secondes spécifié ne peuvent plus être modifiés ou supprimés par l’auteur. Les utilisateurs qui ont <em>les permissions d’un modérateur sont exemptés</em> de cette limite de temps.<br>Mettre à 0 pour permettre la modification et la suppression.',
	'MCHAT_MAX_MESSAGE_LENGTH'						=> 'Longueur maximale du message',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'				=> 'Nombre maximum de caractères autorisés par message affiché.<br><em>Valeurs limites de 0 à 1000 (500 par défaut). Mettre à 0 pour désactiver.</em>',
	'MCHAT_MAX_INPUT_HEIGHT'						=> 'Hauteur maximale du champ d’entrée',
	'MCHAT_MAX_INPUT_HEIGHT_EXPLAIN'				=> 'Le champ de saisie ne s’étendra pas au-delà de ce nombre de pixels.<br><em>Valeurs limites de 0 à 1000 (150 par défaut). Mettre à 0 pour ne pas authoriser les lignes multiples.</em>',
	'MCHAT_CUSTOM_PAGE'								=> 'Activer la page personnalisée',
	'MCHAT_CUSTOM_HEIGHT'							=> 'Hauteur de la page personnalisée',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'					=> 'Hauteur de la zone de chat en pixels sur la page personnalisée.<br><em>Valeurs limites de 50 à 1000 (350 par défaut).</em>',
	'MCHAT_BBCODES_DISALLOWED'						=> 'BBcodes interdits',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'				=> 'Permet de saisir les BBcodes <strong>interdits</strong> dans les messages.<br> Séparés les BBcodes avec une barre verticale, par exemple : <br>b|i|u|code|list|list=|flash|quote et/ou un %1$sBBcode personnalisé%2$s',
	'MCHAT_STATIC_MESSAGE'							=> 'Message statique',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'					=> 'Permet de définir un message statique à afficher aux utilisateurs du chat. Code HTML autorisé. Laisser vide pour désactiver l’affichage.<br>Ce message peut être traduit en modifiant la valeur MCHAT_STATIC_MESSAGE du fichier /ext/dmzx/mchat/language/XX/mchat.php.',
	'MCHAT_TIMEOUT'									=> 'Expiration de la session',
	'MCHAT_TIMEOUT_EXPLAIN'							=> 'Définir le nombre de secondes pour la durée d’une session dans le chat.<br>Mettre à 0 pour aucune temporisation. Attention, la session d’un utilisateur du mini-tchat n’expire jamais !<br><em>Vous êtes limité au %1$sparamètre de session du forum%2$s qui est actuellement fixé à %3$d secondes</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'					=> 'Ignorer la limite des smileys',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'			=> 'Mettre la valeur à Oui pour remplacer le paramètre de limite des smileys des forums pour les messages de discussion',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'					=> 'Ignorer la limite minimale de caractères',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'			=> 'Mettre la valeur à Oui pour remplacer le paramètre de caractères minimum des forums pour les messages de discussion',
	'MCHAT_LOG_ENABLED'								=> 'Ajoute les entrées au journal d’administration',
	'MCHAT_LOG_ENABLED_EXPLAIN'						=> 'Cela affecte la modification, la suppression, l’élagage et la purge des messages.',

	'MCHAT_POSTS_AUTH_CHECK'						=> 'Requiert la permission utilisateur',
	'MCHAT_POSTS_AUTH_CHECK_EXPLAIN'				=> 'Si la valeur est oui, les utilisateurs qui ne peuvent pas utiliser le mini-tchat ne génèreront aucun message de notification de publication/connexion..',

	'MCHAT_WHOIS_REFRESH'							=> 'Intervalle d’actualisation de « Qui est dans le chat »',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'					=> 'Nombre de secondes avant l’actualisation de « Qui est dans le chat ».<br><em>Valeurs limites de 10 à 300 (60 par défaut).</em>',
	'MCHAT_SOUND'									=> 'Activer des sons pour les nouveaux messages, modifiés et supprimés',
	'MCHAT_PURGE'									=> 'Supprimer tous les messages maintenant',
	'MCHAT_PURGE_CONFIRM'							=> 'Confirmer la suppression de tous les messages',
	'MCHAT_PURGED'									=> 'Tous les messages du mini-tchat ont été supprimés avec succès',

	// '%1$s' contains 'Retain posts' and 'Delete posts' respectively
	'MCHAT_RETAIN_MESSAGES'							=> '%1$s et conserver les messages du mini-tchat',
	'MCHAT_DELETE_MESSAGES'							=> '%1$s et supprimer les messages du mini-tchat',

	// Error reporting
	'TOO_LONG_MCHAT_BBCODE_DISALLOWED'				=> 'La valeur BBcodes non autorisée est trop longue.',
	'TOO_SMALL_MCHAT_CUSTOM_HEIGHT'					=> 'La valeur de hauteur personnalisée est trop petite.',
	'TOO_LARGE_MCHAT_CUSTOM_HEIGHT'					=> 'La valeur de hauteur personnalisée est trop grande.',
	'TOO_LONG_MCHAT_DATE'							=> 'Le format de date saisi est trop long.',
	'TOO_SHORT_MCHAT_DATE'							=> 'Le format de date saisi est trop court.',
	'TOO_LARGE_MCHAT_FLOOD_TIME'					=> 'La valeur du temps de flood est trop grande.',
	'TOO_SMALL_MCHAT_INDEX_HEIGHT'					=> 'La valeur de hauteur de l’index est trop petite.',
	'TOO_LARGE_MCHAT_INDEX_HEIGHT'					=> 'La valeur de hauteur de l’index est trop grande.',
	'TOO_LARGE_MCHAT_MAX_MESSAGE_LNGTH'				=> 'La valeur maximale de la longueur du message est trop grande.',
	'TOO_LARGE_MCHAT_MAX_INPUT_HEIGHT'				=> 'La valeur maximale de la hauteur est trop grande.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_CUSTOM'			=> 'Le nombre de messages à afficher dans la page du mini-tchat est trop petit.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_CUSTOM'			=> 'Le nombre de messages à afficher sur la page personnalisée est trop grand.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_INDEX'				=> 'Le nombre de messages à afficher sur la page d’index est trop petit.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_INDEX'				=> 'Le nombre de messages à afficher sur la page d’index est trop grand.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_ARCHIVE'			=> 'Le nombre de messages à afficher sur la page d’archivage est trop petit.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_ARCHIVE'			=> 'Le nombre de messages à afficher sur la page d’archivage est trop grand.',
	'TOO_SMALL_MCHAT_REFRESH'						=> 'La valeur de d’actualisation est trop petite.',
	'TOO_LARGE_MCHAT_REFRESH'						=> 'La valeur de d’actualisation est trop grande.',
	'TOO_SMALL_MCHAT_TIMEOUT'						=> 'La valeur de délai d’expiration de l’utilisateur est trop petite.',
	'TOO_LARGE_MCHAT_TIMEOUT'						=> 'La valeur de délai d’expiration de l’utilisateur est trop grande.',
	'TOO_SMALL_MCHAT_WHOIS_REFRESH'					=> 'La valeur d’actualisation du « Qui est en ligne » est trop petite.',
	'TOO_LARGE_MCHAT_WHOIS_REFRESH'					=> 'La valeur d’actualisation du « Qui est en ligne » est trop grande.',

	'MCHAT_30X_REMNANTS'							=> 'L’installation a été interrompue.<br/>Il existe des modules restants du MOD mChat pour phpBB 3.0.x dans la base de données. L’extension mChat ne fonctionne pas correctement avec ces modules restants.<br/>Il est nécessaire de désinstaller complètement le MOD mChat avant de pouvoir installer l’extension mChat. Plus précisément, les modules avec les ID suivants doivent être supprimés de la %1$stable des modules: %2$s',
]);
