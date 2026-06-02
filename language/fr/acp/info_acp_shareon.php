<?php
/**
*
* Share On extension for the phpBB Forum Software package.
* French translation by Maël Soucaze (http://www.maelsoucaze.com) & Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
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

$lang = array_merge($lang, array(
	// ACP
	'SO_ACP'		=> 'Partager sur les réseaux sociaux',
	'SO_TITLE'		=> 'Paramètres du l’extension « Partager sur les réseaux sociaux »',
	'SO_EXPLAIN'	=> 'Permet de choisir les sites sur lesquels les sujets ou messages seront partagés.',
	'SHARE_ON_MOD'	=> 'Partager sur les réseaux sociaux',
	'SO_CONFIG'		=> 'Paramètres',
	'SO_SAVED'		=> 'Les modifications ont été sauvegardées.',
	'SO_SELECT'		=> 'Partager sur',
	'SO_STATUS'		=> 'Activer l’extension',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'X',
	'SO_REDDIT'		=> 'Reddit',
	'SO_VK'			=> 'VK',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_WHATSAPP'	=> 'Whatsapp',
	'SO_BLUESKY'	=> 'Bluesky',

	// Share Type
	'SO_TYPE'			=> 'Type de partage',
	'SO_TYPE_EXPLAIN'	=> 'Permet de choisir si le lien de partage redirige vers un <strong>sujet</strong> ou uniquement vers un <strong>message</strong> d’un sujet.',
));
