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
	// ACP
	'SO_ACP'		=> 'Share On Extension',
    'SO_TITLE'		=> 'Share On Extension Settings',
	'SO_EXPLAIN'	=> 'Configure in which sites you want to share your topics.',	
	'SHARE_ON_MOD'	=> 'Share On',
	'SO_CONFIG'		=> 'Settings',
	'SO_SELECT'		=> 'Share On',
	'SO_VERSION_OLD'	=> 'Current version of the Extension',
	'SO_VERSION_NEW'	=> 'Latest version of the Extension',
	'SO_SAVED'		=> 'Changes Saved.',
	'SO_STATUS'		=> 'Enable Share On Extension',
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
	'SO_TYPE'			=> 'Share Type',
	'SO_TYPE_EXPLAIN'	=> 'You can choose to share the <strong>topic</strong> link or share every single <strong>post</strong> from the topic.',
));