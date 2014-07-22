<?php
/**
*
* shareon [Português Brasileiro]
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
	'SO_SELECT'		=> 'Compartilhar Em',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Compartilhar no Facebook',
	'SHARE_ON_TWITTER'		=> 'Compartilhar no Twitter',
	'SHARE_ON_TUENTI'		=> 'Compartilhar no Tuenti',
	'SHARE_ON_SONICO'		=> 'Compartilhar no Sonico',
	'SHARE_ON_FRIENDFEED'	=> 'Compartilhar no FriendFeed',
	'SHARE_ON_ORKUT'		=> 'Compartilhar no Orkut',
	'SHARE_ON_DIGG'			=> 'Compartilhar no Digg',
	'SHARE_ON_REDDIT'		=> 'Compartilhar no Reddit',
	'SHARE_ON_DELICIOUS'	=> 'Compartilhar no Delicious',
	'SHARE_ON_VK'			=> 'Compartilhar no VK',
	'SHARE_ON_TUMBLR'		=> 'Compartilhar no Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Compartilhar no Google+',
));