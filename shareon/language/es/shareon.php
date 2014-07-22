<?php
/**
*
* shareon [Español]
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
	'SO_SELECT'		=> 'Compartir en',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Compartir en Facebook',
	'SHARE_ON_TWITTER'		=> 'Compartir en Twitter',
	'SHARE_ON_TUENTI'		=> 'Compartir en Tuenti',
	'SHARE_ON_SONICO'		=> 'Compartir en Sonico',
	'SHARE_ON_FRIENDFEED'	=> 'Compartir en FriendFeed',
	'SHARE_ON_DIGG'			=> 'Compartir en Digg',
	'SHARE_ON_REDDIT'		=> 'Compartir en Reddit',
	'SHARE_ON_DELICIOUS'	=> 'Compartir en Delicious',
	'SHARE_ON_VK'			=> 'Compartir en VK',
	'SHARE_ON_TUMBLR'		=> 'Compartir en Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Compartir en Google+',
));