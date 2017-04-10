<?php
/**
*
* Share On extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Translated By : Basil Taha Alhitary - www.alhitary.net
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
	'SO_ACP'		=> 'مشاركة المواقع الإجتماعية',
	'SO_TITLE'		=> 'إعدادات مشاركة المواقع الإجتماعية',
	'SO_EXPLAIN'	=> 'من هنا تستطيع تحديد المواقع التي تريد مُشاركة مواضيع منتداك.',
	'SHARE_ON_MOD'	=> 'مشاركة المواقع الإجتماعية',
	'SO_CONFIG'		=> 'الإعدادات',
	'SO_SAVED'		=> 'تم حفظ الإعدادات بنجاح.',
	'SO_SELECT'		=> 'المُشاركة في ',
	'SO_STATUS'		=> 'تفعيل ',
	'SO_FACEBOOK'	=> 'الفيس بوك Facebook ',
	'SO_TWITTER'	=> 'تويتر Twitter ',
	'SO_DIGG'		=> 'ديج Digg ',
	'SO_REDDIT'		=> 'ريديت Reddit ',
	'SO_DELICIOUS' 	=> 'ديليشيس Delicious ',
	'SO_VK'			=> 'فيكي VK ',
	'SO_TUENTI'		=> 'توينتي Tuenti ',
	'SO_TUMBLR'		=> 'تامبلار Tumblr ',
	'SO_GOOGLE'		=> 'جوجل بلاس Google+ ',
	'SO_WHATSAPP'	=> 'الواتساب Whatsapp ',

	// Share Type
	'SO_TYPE'			=> 'نوع المشاركة ',
	'SO_TYPE_EXPLAIN'	=> 'تستطيع تحديد مشاركة رابط <strong>الموضوع</strong> فقط أو كل <strong>مشاركة</strong> على حده.',
));
