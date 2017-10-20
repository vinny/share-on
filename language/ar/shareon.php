<?php
/**
*
* Share On extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'SO_SELECT'				=> 'مُشاركة المواقع الإجتماعية',
	'SHARE_TOPIC'			=> 'شارك هذا الموضوع',
	'SHARE_POST'			=> 'شارك هذه المُشاركة',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'المُشاركة في الفيس بوك',
	'SHARE_ON_TWITTER'		=> 'المُشاركة في تويتر',
	'SHARE_ON_TUENTI'		=> 'المُشاركة في توينتي',
	'SHARE_ON_DIGG'			=> 'المُشاركة في ديج',
	'SHARE_ON_REDDIT'		=> 'المُشاركة في ريديت',
	'SHARE_ON_DELICIOUS'	=> 'المُشاركة في ديليشيس',
	'SHARE_ON_VK'			=> 'المُشاركة في فيكي',
	'SHARE_ON_TUMBLR'		=> 'المُشاركة في تامبلار',
	'SHARE_ON_GOOGLE'		=> 'المُشاركة في جوجل بلاس',
	'SHARE_ON_WHATSAPP'		=> 'المُشاركة في الواتساب',
	'SHARE_ON_POCKET'		=> 'المُشاركة في بوكيت',
));
