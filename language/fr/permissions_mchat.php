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
	'ACL_U_MCHAT_USE'						=> 'Peut utiliser le mini-tchat.',
	'ACL_U_MCHAT_VIEW'						=> 'Peut voir le mini-tchat.',
	'ACL_U_MCHAT_EDIT'						=> 'Peut modifier ses messages.',
	'ACL_U_MCHAT_DELETE'					=> 'Peut supprimer ses messages.',
	'ACL_U_MCHAT_MODERATOR_EDIT'			=> 'Peut modifier tous les messages.',
	'ACL_U_MCHAT_MODERATOR_DELETE'			=> 'Peut supprimer tous les messages.',
	'ACL_U_MCHAT_IP'						=> 'Peut voir les adresses IP.',
	'ACL_U_MCHAT_PM'						=> 'Peut utiliser les messages privés.',
	'ACL_U_MCHAT_LIKE'						=> 'Peut aimer les messages.',
	'ACL_U_MCHAT_QUOTE'						=> 'Peut citer des messages.',
	'ACL_U_MCHAT_FLOOD_IGNORE'				=> 'Peut ignorer la limite de flood.',
	'ACL_U_MCHAT_ARCHIVE'					=> 'Peut voir les archives.',
	'ACL_U_MCHAT_BBCODE'					=> 'Peut utiliser les BBCodes.',
	'ACL_U_MCHAT_SMILIES'					=> 'Peut utiliser les smileys.',
	'ACL_U_MCHAT_URLS'						=> 'Peut publier des liens.',

	'ACL_U_MCHAT_AVATARS'					=> 'Peut personnaliser : « <em>Afficher les avatars</em> ».',
	'ACL_U_MCHAT_CAPITAL_LETTER'			=> 'Peut personnaliser : « <em>Première lettre en majuscule</em> ».',
	'ACL_U_MCHAT_CHARACTER_COUNT'			=> 'Peut personnaliser : « <em>Afficher le nombre de caractères</em> ».',
	'ACL_U_MCHAT_DATE'						=> 'Peut personnaliser : « <em>Format de la date</em> ».',
	'ACL_U_MCHAT_INDEX'						=> 'Peut personnaliser : « <em>Afficher sur la page de l’index du forum</em> ».',
	'ACL_U_MCHAT_LOCATION'					=> 'Peut personnaliser : « <em>Emplacement du mini-tchat sur la page de l’index du forum</em> ».',
	'ACL_U_MCHAT_MESSAGE_TOP'				=> 'Peut personnaliser : « <em>Emplacement des nouveaux messages du mini-tchat</em> ».',
	'ACL_U_MCHAT_POSTS'						=> 'Peut personnaliser : « <em>Afficher les nouveaux messages</em> ».',
	'ACL_U_MCHAT_RELATIVE_TIME'				=> 'Peut personnaliser : « <em>Afficher le temps relatif</em> ».',
	'ACL_U_MCHAT_SOUND'						=> 'Peut personnaliser : « <em>Activer les sons</em> ».',
	'ACL_U_MCHAT_WHOIS_INDEX'				=> 'Peut personnaliser : « <em>Afficher « qui est dans le mini-tchat » sous le mini-tchat</em> ».',
	'ACL_U_MCHAT_STATS_INDEX'				=> 'Peut personnaliser : « <em>Afficher « qui est dans le mini-tchat » dans la section statistiques</em> ».',

	'ACL_A_MCHAT'							=> 'Peut gérer les paramètres du mini-tchat.',
]);
