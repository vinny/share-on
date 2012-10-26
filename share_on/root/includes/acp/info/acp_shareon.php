<?php
/**
*
* @package - Share On
* @version $Id: acp_shareon.php 2010-03-12 02:40 Saske1 $
* @copyright (c) Saske1 ( http://www.phpbb-es.com )
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
* @package module_install
*/
class acp_shareon_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_shareon',
			'title'		=> 'SO_ACP',
			'version'	=> '2.1.0',
			'modes'		=> array(
				'settings'		=> array('title' => 'SO_CONFIG', 'auth' => 'acl_a_board', 'cat' => array('SHARE_ON_MOD')),
			),
		);
	}
	
	function install()
    {
	}
       
	function uninstall()
	{
	}
       
}

?>