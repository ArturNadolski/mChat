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
	'MCHAT_ADD'						=> 'Envoyer',
	'MCHAT_ARCHIVE'					=> 'Archives',
	'MCHAT_ARCHIVE_PAGE'			=> 'Archives du mini-tchat',
	'MCHAT_CUSTOM_PAGE'				=> 'Mini-tchat',
	'MCHAT_BBCODES'					=> 'BBCodes',
	'MCHAT_CUSTOM_BBCODES'			=> 'BBCodes Personnalisés',
	'MCHAT_DELCONFIRM'				=> 'Confirmer la suppression de ce message.',
	'MCHAT_EDIT'					=> 'Modifier',
	'MCHAT_EDITINFO'				=> 'Modifier le message ci-dessous.',
	'MCHAT_NEW_CHAT'				=> 'Nouveau message !',
	'MCHAT_SEND_PM'					=> 'Envoyer un message privé',
	'MCHAT_LIKE'					=> 'Aimer ce message',
	'MCHAT_LIKES'					=> 'Aime ce message',
	'MCHAT_FLOOD'					=> 'Merci de patienter avant de pouvoir envoyer un nouveau message.',
	'MCHAT_FOE'						=> 'Ce message a été écrit par <strong>%1$s</strong> qui est actuellement dans votre liste noire.',
	'MCHAT_RULES'					=> 'Règles',
	'MCHAT_WHOIS_USER'				=> 'Consulter le WHOIS pour l’IP de %1$s',
	'MCHAT_MESS_LONG'				=> 'Votre message est trop long. Merci de le réduire à %1$d caractères au maximum.',
	'MCHAT_NO_CUSTOM_PAGE'			=> 'La page personnalisée du mini-tchat n’est pas activée en ce moment.',
	'MCHAT_NO_RULES'				=> 'La page des règles du mini-tchat n’est pas activée pour le moment.',
	'MCHAT_NOACCESS_ARCHIVE'		=> 'Il ne vous est pas permis de consulter la page archive.',
	'MCHAT_NOJAVASCRIPT'			=> 'Merci d’activer JavaScript pour utiliser le mini-tchat.',
	'MCHAT_NOMESSAGE'				=> 'Aucun messages',
	'MCHAT_NOMESSAGEINPUT'			=> 'Merci de saisir un message',
	'MCHAT_MESSAGE_DELETED'			=> 'Ce message a été supprimé.',
	'MCHAT_OK'						=> 'OK',
	'MCHAT_PAUSE'					=> 'En pause',
	'MCHAT_PERMISSIONS'				=> 'Modifier les autorisations de l’utilisateur',
	'MCHAT_REFRESHING'				=> 'Actualisation …',
	'MCHAT_RESPOND'					=> 'Répondre à l’utilisateur',
	'MCHAT_SMILES'					=> 'Smilies',
	'MCHAT_TOTALMESSAGES'			=> 'Total des messages: <strong>%1$d</strong>',
	'MCHAT_USESOUND'				=> 'Activer les sons',
	'MCHAT_SOUND_ON'				=> 'Le son est allumé',
	'MCHAT_SOUND_OFF'				=> 'Le son est éteint',
	'MCHAT_ENTER'					=> 'Utiliser la combinaison des touches CTRL / CMD + Entrée pour l’action alternative',
	'MCHAT_ENTER_SUBMIT'			=> 'La touche « Entrée » envoie le message',
	'MCHAT_ENTER_LINEBREAK'			=> 'La touche « Entrée » ajoute une nouvelle ligne',
	'MCHAT_COLLAPSE_TITLE'			=> [
		0 => 'Masquer le mini-tchat',
		1 => 'Afficher le mini-tchat',
	],
	'MCHAT_WHO_IS_REFRESH_EXPLAIN'	=> 'Actualisation toutes les <strong>%1$d</strong> secondes',
	'MCHAT_MINUTES_AGO'				=> [
		0 => 'à l’instant',
		1 => 'il y a %1$d minute',
		2 => 'il y a %1$d minutes',
	],

	// These messages are formatted with JavaScript, hence {} and no %d
	'MCHAT_CHARACTER_COUNT'			=> '<strong>{current}</strong> caractères',
	'MCHAT_CHARACTER_COUNT_LIMIT'	=> '<strong>{current}</strong> sur {max} caractères',
	'MCHAT_MENTION'					=> ' @{username} ',
]);
