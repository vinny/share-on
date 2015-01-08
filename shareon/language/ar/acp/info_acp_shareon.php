<?php
/**
*
* shareon [Arabic]
*
* @package language Share On
* @copyright (c) 2013 Vinny
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Basil Taha Alhitary - www.alhitary.net
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP
	'SO_ACP'		=> 'مشاركة المواقع الإجتماعية',
    'SO_TITLE'		=> 'الإعدادات',
	'SO_EXPLAIN'	=> 'اعداد المواقع الإجتماعية التي تريد مشاركة المواضيع فيها.',	
	'SHARE_ON_MOD'	=> 'مشاركة المواقع الإجتماعية',
	'SO_CONFIG'		=> 'الإعدادات',
	'SO_SELECT'		=> 'مشاركة المواقع الإجتماعية',
	'SO_VERSION_OLD'	=> 'إصدار النسخة ',
	'SO_VERSION_NEW'	=> 'آخر إصدار للإضافة',
	'SO_SAVED'		=> 'تم الحفظ.',
	'SO_STATUS'		=> 'تفعيل',
	'SO_FACEBOOK'	=> 'الفيس بوك Facebook',
	'SO_TWITTER'	=> 'تويتر Twitter',
	'SO_DIGG'		=> 'ديج Digg',
	'SO_REDDIT'		=> 'ريديت Reddit',
	'SO_DELICIOUS' 	=> 'ديليشيس Delicious',
	'SO_VK'			=> 'فيكي VK',
	'SO_TUENTI'		=> 'توينتي Tuenti',
	'SO_SONICO'		=> 'سونيكو Sonico',
	'SO_FRIENDFEED'	=> 'فريند فيد FriendFeed',
	'SO_TUMBLR'		=> 'تامبلار Tumblr',
	'SO_GOOGLE'		=> 'جوجل بلاس Google+',

	// Share Type
	'SO_TYPE'			=> 'نوع المشاركة',
	'SO_TYPE_EXPLAIN'	=> 'تستطيع تحديد مشاركة رابط <strong>الموضوع</strong> أو كل <strong>مشاركة</strong> على حده.',
));
