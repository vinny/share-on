<?php
/**
*
* shareon [Russian]
*
* @package language Share On
* @copyright (c) 2013 Vinny
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'SO_ACP'		=> 'Поделиться',
    'SO_TITLE'		=> 'Настройка расширения поделиться',
	'SO_EXPLAIN'	=> 'Настройка сайтов на которых вы хотите поделиться своими темами.',	
	'SHARE_ON_MOD'	=> 'Поделиться в',
	'SO_CONFIG'		=> 'Настройки',
	'SO_SELECT'		=> 'Поделиться в',
	'SO_VERSION_OLD'	=> 'Текущая версия расширения',
	'SO_VERSION_NEW'	=> 'Последние версии расширения',
	'SO_SAVED'		=> 'Изменения сохранены.',
	'SO_STATUS'		=> 'Включить расширении Поделиться',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'Twitter',
	'SO_DIGG'		=> 'Digg',
	'SO_REDDIT'		=> 'Reddit',
	'SO_DELICIOUS' 	=> 'Delicious',
	'SO_VK'			=> 'VK',
	'SO_TUENTI'		=> 'Tuenti',
	'SO_SONICO'		=> 'Sonico',
	'SO_FRIENDFEED'	=> 'FriendFeed',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_GOOGLE'		=> 'Google+',

	// Share Type
	'SO_TYPE'			=> 'Тип',
	'SO_TYPE_EXPLAIN'	=> 'Вы можете выбрать чем поделиться: ссылкой на <STRONG> тему<STRONG /> или поделиться каждым<STRONG> сообщением </ STRONG> от темы.',
));