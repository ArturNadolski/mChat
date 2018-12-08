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
	'MCHAT_PREFERENCES'				=> 'Préférences mini-tchat',
	'MCHAT_NO_SETTINGS'				=> 'Vous n’êtes pas autorisé à personnaliser les paramètres.',

	'MCHAT_INDEX'					=> 'Affichage sur la page de l’index du forum',
	'MCHAT_SOUND'					=> 'Activer le son',
	'MCHAT_WHOIS_INDEX'				=> 'Afficher <em>« Qui est dans le chat »</em> sous le chat',
	'MCHAT_STATS_INDEX'				=> 'Afficher <em>« Qui est dans le chat »</em> dans la section statistiques',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> 'Affiche les utilisateurs dans le chat sous la section <em>« Qui est en ligne »</em> de la page de l’index du forum.',
	'MCHAT_AVATARS'					=> 'Affiche les avatars',
	'MCHAT_CAPITAL_LETTER'			=> 'Met en majuscule la première lettre de vos messages',
	'MCHAT_POSTS'					=> 'Afficher les nouveaux messages (actuellement désactivé, peut être activé dans la section Paramètres globaux du mini-tchat de le PCA)',
	'MCHAT_DISPLAY_CHARACTER_COUNT'	=> 'Afficher le nombre de caractères lors de la saisie d’un message',
	'MCHAT_RELATIVE_TIME'			=> 'Afficher le temps relatif pour les nouveaux messages',
	'MCHAT_RELATIVE_TIME_EXPLAIN'	=> 'Afficher « A l’instant », « Il y a 1 minute » et ainsi de suite pour chaque message. Définir sur <em>Non</em> pour toujours afficher la date complète.',
	'MCHAT_MESSAGE_TOP'				=> 'Emplacement des nouveaux messages du chat',
	'MCHAT_MESSAGE_TOP_EXPLAIN'		=> 'Les nouveaux messages apparaissent en haut ou en bas du chat.',
	'MCHAT_LOCATION'				=> 'Emplacement sur la page de l’index du forum',
	'MCHAT_BOTTOM'					=> 'En bas',
	'MCHAT_TOP'						=> 'En haut',

	'MCHAT_POSTS_TOPIC'				=> 'Afficher les nouveaux sujets',
	'MCHAT_POSTS_REPLY'				=> 'Afficher les nouvelles réponses',
	'MCHAT_POSTS_EDIT'				=> 'Afficher les messages modifiés',
	'MCHAT_POSTS_QUOTE'				=> 'Afficher les messages cités',
	'MCHAT_POSTS_LOGIN'				=> 'Afficher les connexions utilisateur',

	'MCHAT_DATE_FORMAT'				=> 'Format de date',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> 'La syntaxe utilisée est identique à celle de la fonction PHP <a href="http://www.php.net/date">date()</a>.',
	'MCHAT_CUSTOM_DATEFORMAT'		=> 'Personnalisée…',
]);
