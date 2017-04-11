<?php
/**
* Brazilian Portuguese translation
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
	'SO_SELECT'				=> 'Compartilhar Em',
	'SHARE_TOPIC'			=> 'Compartilhar tópico no',
	'SHARE_POST'			=> 'Compartilhar mensagem no',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Compartilhar no Facebook',
	'SHARE_ON_TWITTER'		=> 'Compartilhar no Twitter',
	'SHARE_ON_TUENTI'		=> 'Compartilhar no Tuenti',
	'SHARE_ON_DIGG'			=> 'Compartilhar no Digg',
	'SHARE_ON_REDDIT'		=> 'Compartilhar no Reddit',
	'SHARE_ON_DELICIOUS'	=> 'Compartilhar no Delicious',
	'SHARE_ON_VK'			=> 'Compartilhar no VK',
	'SHARE_ON_TUMBLR'		=> 'Compartilhar no Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Compartilhar no Google+',
	'SHARE_ON_WHATSAPP'		=> 'Compartilhar no Whatsapp',
	'SHARE_ON_POCKET'		=> 'Compartilhar no Pocket',
));
