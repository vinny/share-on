<?php
/**
*
* Share On extension for the phpBB Forum Software package.
* @简体中文语言　David Yin <https://www.phpbbchinese.com/>
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
	'SO_SELECT'				=> 'Share On',
	'SHARE_TOPIC'			=> '分享主题到',
	'SHARE_POST'			=> '分享帖子到',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> '分享到 Facebook',
	'SHARE_ON_TWITTER'		=> '分享到 X',
	'SHARE_ON_REDDIT'		=> '分享到 Reddit',
	'SHARE_ON_VK'			=> '分享到 VK',
	'SHARE_ON_TUMBLR'		=> '分享到 Tumblr',
	'SHARE_ON_WHATSAPP'		=> '分享到 Whatsapp',
	'SHARE_ON_BLUESKY'		=> '分享到 Bluesky',
));
