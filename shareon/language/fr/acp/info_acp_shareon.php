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
	// ACP
	'SO_ACP'		=> 'Extension Share On',
    'SO_TITLE'		=> 'Paramètres du Extension Share On',
	'SO_EXPLAIN'	=> 'Vous permet de sélectionner dans quels sites vous souhaitez partager vos sujets.',
	'SHARE_ON_MOD'	=> 'Share On',
	'SO_CONFIG'		=> 'Paramètres',
	'SO_SELECT'		=> 'Partager sur',
	'SO_VERSION_OLD'	=> 'Version actuelle du Extension',
	'SO_VERSION_NEW'	=> 'Dernière version du Extension',
	'SO_SAVED'		=> 'Modifications sauvegardées.',
	'SO_STATUS'		=> 'Activer le Extension Share On',
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
	'SO_TYPE'			=> 'Méthode de partage',
	'SO_TYPE_EXPLAIN'	=> 'Vous pouvez choisir de partager le lien vers un <strong>sujet</strong> ou partager uniquement un <strong>message</strong> d’un sujet.',
));