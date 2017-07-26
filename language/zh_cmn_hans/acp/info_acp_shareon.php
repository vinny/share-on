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
	// ACP
	'SO_ACP'		=> 'Share On',
	'SO_TITLE'		=> 'Share On 设置',
	'SO_EXPLAIN'	=> '设置你的主题或帖子分享到指定的社交网站。',
	'SHARE_ON_MOD'	=> 'Share On',
	'SO_CONFIG'		=> '设置',
	'SO_SAVED'		=> '修改已保存。',
	'SO_SELECT'		=> '选择社交网站',
	'SO_STATUS'		=> '启用',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'Twitter',
	'SO_DIGG'		=> 'Digg',
	'SO_REDDIT'		=> 'Reddit',
	'SO_DELICIOUS' 	=> 'Delicious',
	'SO_VK'			=> 'VK',
	'SO_TUENTI'		=> 'Tuenti',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_GOOGLE'		=> 'Google+',
	'SO_WHATSAPP'	=> 'Whatsapp',
	'SO_POCKET'		=> 'Pocket',

	// Share Type
	'SO_TYPE'			=> '分享类型',
	'SO_TYPE_EXPLAIN'	=> '你可以选择分享 <strong>主题</strong> 链接还是主题中的每一个单独 <strong>帖子</strong>。',
));
