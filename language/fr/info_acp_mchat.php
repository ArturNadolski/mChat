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
	// Module titles
	'ACP_CAT_MCHAT'					=> 'Mini-tchat',
	'ACP_CAT_MCHAT_USER_CONFIG'		=> 'Mini-tchat dans le panneau l’utilisateur',
	'ACP_MCHAT_GLOBALSETTINGS'		=> 'Paramètres',
	'ACP_MCHAT_GLOBALUSERSETTINGS'	=> 'Paramètres utilisateur',

	// Log entries (%1$s is replaced with the user name who triggered the event)
	'LOG_MCHAT_CONFIG_UPDATE'		=> '<strong>Configuration du mini-tchat mise à jour</strong><br>» %1$s',
	'LOG_MCHAT_TABLE_PRUNED'		=> '<strong>Messages du mini-tchat délestés: %2$d</strong>',
	'LOG_MCHAT_TABLE_PURGED'		=> '<strong>Messages du mini-tchat purgés</strong><br>» %1$s',
	'LOG_DELETED_MCHAT'				=> '<strong>Message du mini-tchat supprimé</strong><br>» %1$s',
	'LOG_EDITED_MCHAT'				=> '<strong>Message du mini-tchat modifié</strong><br>» %1$s',
]);
