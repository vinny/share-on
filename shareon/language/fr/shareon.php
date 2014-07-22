<?php
/**
*
* shareon [French]
*
* @package language Share On
* @copyright (c) 2014 Vinny
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
	'SO_SELECT'				=> 'Partager sur',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Partager sur Facebook',
	'SHARE_ON_TWITTER'		=> 'Partager sur Twitter',
	'SHARE_ON_TUENTI'		=> 'Partager sur Tuenti',
	'SHARE_ON_SONICO'		=> 'Partager sur Sonico',
	'SHARE_ON_FRIENDFEED'	=> 'Partager sur FriendFeed',
	'SHARE_ON_DIGG'			=> 'Partager sur Digg',
	'SHARE_ON_REDDIT'		=> 'Partager sur Reddit',
	'SHARE_ON_DELICIOUS'	=> 'Partager sur Delicious',
	'SHARE_ON_VK'			=> 'Partager sur VK',
	'SHARE_ON_TUMBLR'		=> 'Partager sur Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Partager sur Google+',
	'SHARE_ON_MYSPACE'		=> 'Partager sur MySpace',
));