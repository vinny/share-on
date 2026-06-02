<?php
/**
*
* Share On extension for the phpBB Forum Software package.
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// ACP
	'SO_ACP'		=> 'Compartir en',
	'SO_TITLE'		=> 'Ajustes de Compartir en',
	'SO_EXPLAIN'	=> 'Aquí puede configurar en que sitios quiere compartir sus temas o mensajes.',
	'SHARE_ON_MOD'	=> 'Share On',
	'SO_CONFIG'		=> 'Ajustes',
	'SO_SAVED'		=> 'Cambios guardados.',
	'SO_SELECT'		=> 'Compartir en',
	'SO_STATUS'		=> 'Habilitar',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'X',
	'SO_REDDIT'		=> 'Reddit',
	'SO_VK'			=> 'VK',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_WHATSAPP'	=> 'Whatsapp',
	'SO_BLUESKY'	=> 'Bluesky',

	// Share Type
	'SO_TYPE'			=> 'Modo de Compartir',
	'SO_TYPE_EXPLAIN'	=> 'Puede elegir el compartir el enlace del <strong>tema</strong> o compartir simplemente cada <strong>mensaje</strong> del tema.',
));
