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
	'SO_SELECT'				=> 'Поделиться в',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Поделиться в Facebook',
	'SHARE_ON_TWITTER'		=> 'Поделиться в Twitter',
	'SHARE_ON_TUENTI'		=> 'Поделиться в Tuenti',
	'SHARE_ON_SONICO'		=> 'Поделиться в Sonico',
	'SHARE_ON_FRIENDFEED'	=> 'Поделиться в FriendFeed',
	'SHARE_ON_DIGG'			=> 'Поделиться в Digg',
	'SHARE_ON_REDDIT'		=> 'Поделиться в Reddit',
	'SHARE_ON_DELICIOUS'	=> 'Поделиться в Delicious',
	'SHARE_ON_VK'			=> 'Поделиться в VK',
	'SHARE_ON_TUMBLR'		=> 'Поделиться в Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Поделиться в Google+',
));