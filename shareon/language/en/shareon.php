<?php
/**
*
* shareon [English]
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
	'SO_SELECT'				=> 'Share On',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Share on Facebook',
	'SHARE_ON_TWITTER'		=> 'Share on Twitter',
	'SHARE_ON_TUENTI'		=> 'Share on Tuenti',
	'SHARE_ON_SONICO'		=> 'Share on Sonico',
	'SHARE_ON_FRIENDFEED'	=> 'Share on FriendFeed',
	'SHARE_ON_DIGG'			=> 'Share on Digg',
	'SHARE_ON_REDDIT'		=> 'Share on Reddit',
	'SHARE_ON_DELICIOUS'	=> 'Share on Delicious',
	'SHARE_ON_VK'			=> 'Share on VK',
	'SHARE_ON_TUMBLR'		=> 'Share on Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Share on Google+',
));