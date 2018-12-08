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
	'MCHAT_TITLE'					=> 'Mini-tchat',
	'MCHAT_TITLE_COUNT'				=> [
		0 => 'Mini-tchat',
		1 => 'Mini-tchat [<strong>%1$d</strong>]',
	],
	'MCHAT_NAVBAR_CUSTOM_PAGE'		=> 'Page du mini-tchat',
	'MCHAT_NAVBAR_ARCHIVE'			=> 'Archive',
	'MCHAT_NAVBAR_RULES'			=> 'Règles',

	// Who is chatting
	'MCHAT_WHO_IS_CHATTING'			=> 'Qui est dans le mini-tchat',
	'MCHAT_ONLINE_USERS_TOTAL'		=> [
		0 => 'Membre(s) dans le mini-tchat',
		1 => '<strong>%1$d</strong> membre dans le mini-tchat',
		2 => '<strong>%1$d</strong> membres dans le mini-tchat',
	],
	'MCHAT_ONLINE_EXPLAIN'			=> 'basé sur les membres actifs au cours des dernières %1$s',
	'MCHAT_HOURS'					=> [
		1 => '%1$d heure',
		2 => '%1$d heures',
	],
	'MCHAT_MINUTES'					=> [
		1 => '%1$d minute',
		2 => '%1$d minutes',
	],
	'MCHAT_SECONDS'					=> [
		1 => '%1$d seconde',
		2 => '%1$d secondes',
	],

	// Custom translations for administrators
	'MCHAT_RULES_MESSAGE'			=> '',
	'MCHAT_STATIC_MESSAGE'			=> '',

	// Post notification messages (%1$s is replaced with a link to the new/edited post, %2$s is replaced with a link to the forum)
	'MCHAT_NEW_POST'				=> 'a publié un nouveau sujet : « %1$s » dans le forum : « %2$s ».',
	'MCHAT_NEW_POST_DELETED'		=> 'a publié un nouveau sujet qui vient d’être supprimé.',
	'MCHAT_NEW_REPLY'				=> 'a publié un message : « %1$s » dans le forum : « %2$s ».',
	'MCHAT_NEW_REPLY_DELETED'		=> 'a publié un message qui vient d’être supprimé.',
	'MCHAT_NEW_QUOTE'				=> 'a répondu en citant : « %1$s » dans le forum : « %2$s ».',
	'MCHAT_NEW_QUOTE_DELETED'		=> 'a publié une réponse qui vient d’être supprimée.',
	'MCHAT_NEW_EDIT'				=> 'a modifié un message : « %1$s » dans le forum : « %2$s ».',
	'MCHAT_NEW_EDIT_DELETED'		=> 'a modifié un message qui vient d’être supprimé.',
	'MCHAT_NEW_LOGIN'				=> 'vient de se connecter au forum.',
]);
