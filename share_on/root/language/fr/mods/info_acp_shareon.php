<?php
/**
*
* Share On [French]
*
* @package language
* @version $Id: info_acp_shareon.php
* @copyright (c) Maël Soucaze ( http://www.maelsoucaze.com/ )
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
	'SO_ACP'		=> 'MOD Share On',
	'SO_TITLE'		=> 'Param&egrave;tres du MOD Share On',
	'SO_EXPLAIN'	=> 'Vous permet de s&eacute;lectionner dans quels sites vous souhaitez partager vos sujets.',        
	'SHARE_ON_MOD'	=> 'Share On',
	'SO_CONFIG'		=> 'Param&egrave;tres',
	'SO_VERSION_OLD'	=> 'Version actuelle du MOD :',
	'SO_VERSION_NEW'	=> 'Derni&egrave;re version du MOD :',
	'SO_SAVED'		=> 'Modifications sauvegard&eacute;es.',
	'SO_SELECT'		=> 'Partager sur :',
	'SO_STATUS'		=> 'Activer le MOD Share On :',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'Twitter',
	'SO_ORKUT'		=> 'Orkut',
	'SO_DIGG'		=> 'Digg',
	'SO_REDDIT'		=> 'Reddit',
	'SO_DELICIOUS'	=> 'Delicious',
	'SO_VK'			=> 'VK',
	'SO_TUENTI'		=> 'Tuenti',
	'SO_SONICO'		=> 'Sonico',
	'SO_FRIENDFEED'	=> 'FriendFeed',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_GOOGLE'		=> 'Google+',
	'SO_MYSPACE'	=> 'MySpace',

	// Share On Position
	'SO_POSITION'	=> 'Position :',
	'SO_DEFAULT'	=> 'Par d&eacute;faut',
	'SO_AFTER_POST'	=> 'Apr&egrave;s le premier message',
	'SO_POSITION_EXPLAIN'	=> 'La position <strong>par d&eacute;faut</strong> affiche les boutons, dans prosilver, &agrave; c&ocirc;t&eacute; du bouton d	&#146;&eacute;dition, et, dans subsilver2, &agrave; c&ocirc;t&eacute; du bouton de rapport. La position <strong>apr&egrave;s le premier message</strong> affiche, comme son nom l&#146;indique, les boutons apr&egrave;s chaque premier message d&#146;un sujet.',

	// Share Type
	'SO_TYPE'			=> 'M&eacute;thode de partage :',
	'SO_TYPE_EXPLAIN'	=> 'Vous pouvez choisir de partager le lien vers un <strong>sujet</strong> ou partager uniquement un <strong>message</strong> d&#146;un sujet. Vous devriez utiliser la position <strong>par d&eacute;faut</strong> afin d&#146;utiliser cette fonctionnalit&eacute;.',

	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Partager sur Facebook',
	'SHARE_ON_TWITTER'		=> 'Partager sur Twitter',
	'SHARE_ON_TUENTI'		=> 'Partager sur Tuenti',
	'SHARE_ON_SONICO'		=> 'Partager sur Sonico',
	'SHARE_ON_FRIENDFEED'	=> 'Partager sur FriendFeed',
	'SHARE_ON_ORKUT'		=> 'Partager sur Orkut',
	'SHARE_ON_DIGG'			=> 'Partager sur Digg',
	'SHARE_ON_REDDIT'		=> 'Partager sur Reddit',
	'SHARE_ON_DELICIOUS'	=> 'Partager sur Delicious',
	'SHARE_ON_VK'			=> 'Partager sur VK',
	'SHARE_ON_TUMBLR'		=> 'Partager sur Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Partager sur Google+',
	'SHARE_ON_MYSPACE'		=> 'Partager sur MySpace',
));

?>
