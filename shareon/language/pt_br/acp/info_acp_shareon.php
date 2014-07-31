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
	// ACP
	'SO_ACP'		=> 'Share On Extension',
	'SO_TITLE'		=> 'Configurações Share On Extension',
	'SO_EXPLAIN'	=> 'Selecione em quais redes sociais você deseja compartilhar seus tópicos.',	
	'SHARE_ON_MOD'	=> 'Share On',
	'SO_CONFIG'		=> 'Configurações',
	'SO_VERSION_OLD'	=> 'Versão atual instalada',
	'SO_VERSION_NEW'	=> 'Última versão',
	'SO_SAVED'		=> 'Configurações alteradas com sucesso.',
	'SO_SELECT'		=> 'Compartilhar Em',
	'SO_STATUS'		=> 'Ativar Share On Extension',
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
	'SO_TYPE'			=> 'Tipo de Compartilhamento',
	'SO_TYPE_EXPLAIN'	=> 'Você pode escolher entre compartilhar o endereço do <strong>tópico</strong> ou compartilhar cada <strong>mensagem</strong> do tópico.',
));