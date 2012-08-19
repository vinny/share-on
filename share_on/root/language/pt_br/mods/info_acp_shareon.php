<?php
/**
*
* Share On [Português Brasileiro]
*
* @package language
* @version $Id: info_acp_shareon.php
* @copyright (c) _Vinny_ ( http://www.suportephpbb.com.br )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* 
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
    $lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	// ACP
	'SO_ACP'		=> 'Share On MOD',
	'SO_TITLE'		=> 'Configurações Share On Mod',
	'SO_EXPLAIN'	=> 'Selecione em quais redes sociais você deseja compartilhar seus tópicos.',	
	'SHARE_ON_MOD'	=> 'Share On',
	'SO_CONFIG'		=> 'Configurações',
	'SO_VERSION_OLD'	=> 'Versão atual instalada:',
	'SO_VERSION_NEW'	=> 'Última versão:',
	'SO_SAVED'		=> 'Configurações alteradas com sucesso.',
	'SO_SELECT'		=> 'Compartilhar Em:',
	'SO_STATUS'		=> 'Ativar Share On MOD:',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'Twitter',
	'SO_ORKUT'		=> 'Orkut',
	'SO_DIGG'		=> 'Digg',
	'SO_MYSPACE'	=> 'MySpace',
	'SO_DELICIOUS' 	=> 'Delicious',
	'SO_TECHNORATI'	=> 'Technorati',
	'SO_TUENTI'		=> 'Tuenti',
	'SO_SONICO'		=> 'Sonico',
	'SO_FRIENDFEED'	=> 'FriendFeed',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_GOOGLE'		=> 'Google+',

	// Share On Position
	'SO_POSITION'	=> 'Posição:',
	'SO_DEFAULT'	=> 'Padrão',
	'SO_AFTER_POST'	=> 'Após primeira mensagem',
	'SO_POSITION_EXPLAIN'	=> 'A posição <strong>Padrão</strong> mostra os botões ao lado do icone Editar em prosilver e o subsilver2 ao lado do icone Reportar. Na posição <strong>Após primeira mensagem</strong> mostra os botões, obvio, após a primeira mensagem no tópico.',
	
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Compartilhar no Facebook',
	'SHARE_ON_TWITTER'		=> 'Compartilhar no Twitter',
	'SHARE_ON_TUENTI'		=> 'Compartilhar no Tuenti',
	'SHARE_ON_SONICO'		=> 'Compartilhar no Sonico',
	'SHARE_ON_FRIENDFEED'	=> 'Compartilhar no FriendFeed',
	'SHARE_ON_ORKUT'		=> 'Compartilhar no Orkut',
	'SHARE_ON_DIGG'			=> 'Compartilhar no Digg',
	'SHARE_ON_MYSPACE'		=> 'Compartilhar no MySpace',
	'SHARE_ON_DELICIOUS'	=> 'Compartilhar no Delicious',
	'SHARE_ON_TECHNORATI'	=> 'Compartilhar no Technorati',
	'SHARE_ON_TUMBLR'		=> 'Compartilhar no Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Compartilhar no Google+',
));

?>