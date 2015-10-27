<?php
/**
*
* Share On extension for the phpBB Forum Software package.
* Portuguese translation
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
	'SO_ACP'		=> 'Share On Extension',
	'SO_TITLE'		=> 'Configurações Share On Extension',
	'SO_EXPLAIN'		=> 'Selecione em quais redes sociais deseja partilhar os seus tópicos.',	
	'SHARE_ON_MOD'		=> 'Share On',
	'SO_CONFIG'		=> 'Configurações',
	'SO_SAVED'		=> 'Configurações alteradas com sucesso.',
	'SO_SELECT'		=> 'Partilhar Em',
	'SO_STATUS'		=> 'Ativar Share On Extension',
	'SO_FACEBOOK'		=> 'Facebook',
	'SO_TWITTER'		=> 'Twitter',
	'SO_DIGG'		=> 'Digg',
	'SO_REDDIT'		=> 'Reddit',
	'SO_DELICIOUS	 	=> 'Delicious',
	'SO_VK'			=> 'VK',
	'SO_TUENTI'		=> 'Tuenti',
	'SO_SONICO'		=> 'Sonico',
	'SO_FRIENDFEED'		=> 'FriendFeed',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_GOOGLE'		=> 'Google+',

	// Share Type
	'SO_TYPE'		=> 'Tipo de partilha',
	'SO_TYPE_EXPLAIN'	=> 'Pode escolher entre partilhar o endereço do <strong>tópico</strong> ou partilhar cada <strong>mensagem</strong> do tópico.',
));
