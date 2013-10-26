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
	// ACP
	'SO_ACP'		=> 'Share On MOD',
    'SO_TITLE'		=> 'Configuración de Share On MOD',
	'SO_EXPLAIN'	=> 'Aquí puedes configurar en que páginas quieres compartir tus temas.',	
	'SHARE_ON_MOD'	=> 'Share On',	
	'SO_CONFIG'		=> 'Configuración',
	'SO_VERSION_OLD'	=> 'Versión Actual del MOD:',
	'SO_VERSION_NEW'	=> 'Versión mas reciente del MOD:',
	'SO_SAVED'		=> 'Cambios Guardados.',
	'SO_SELECT'		=> 'Compartir en:',
	'SO_STATUS'		=> 'Activar Share On MOD:',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'Twitter',
	'SO_ORKUT'		=> 'Orkut',
	'SO_DIGG'		=> 'Digg',
	'SO_REDDIT'		=> 'Reddit',
	'SO_DELICIOUS' 	=> 'Delicious',
	'SO_TECHNORATI'	=> 'Technorati',
	'SO_TUENTI'		=> 'Tuenti',
	'SO_SONICO'		=> 'Sonico',
	'SO_FRIENDFEED'	=> 'FriendFeed',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_GOOGLE'		=> 'Google+',

	// Share On Position
	'SO_POSITION'	=> 'Posición:',
	'SO_DEFAULT'	=> 'Estándar',
	'SO_AFTER_POST'	=> 'Después del primer mensaje',
	'SO_POSITION_EXPLAIN'	=> 'La posición <strong>Estándar</strong> muestra los botones después del botón de editar en prosilver y después del botón de reportar en subsilver2. La posición <strong>Después del primer mensaje</strong> muestra los botones después del primer mensaje.',
	
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Compartir en Facebook',
	'SHARE_ON_TWITTER'		=> 'Compartir en Twitter',
	'SHARE_ON_TUENTI'		=> 'Compartir en Tuenti',
	'SHARE_ON_SONICO'		=> 'Compartir en Sonico',
	'SHARE_ON_FRIENDFEED'	=> 'Compartir en FriendFeed',
	'SHARE_ON_ORKUT'		=> 'Compartir en Orkut',
	'SHARE_ON_DIGG'			=> 'Compartir en Digg',
	'SHARE_ON_REDDIT'		=> 'Compartir en Reddit',
	'SHARE_ON_DELICIOUS'	=> 'Compartir en Delicious',
	'SHARE_ON_TECHNORATI'	=> 'Compartir en Technorati',
	'SHARE_ON_TUMBLR'		=> 'Compartir en Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Compartir en Google+',
));