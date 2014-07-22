<?php
/**
*
* @package Share On
* @copyright (c) 2013 Vinny
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vinny\shareon\acp;

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
class shareon_info
{
	function module()
	{
		return array(
			'filename'	=> '\vinny\shareon\acp\shareon_module',
			'title'		=> 'SO_ACP',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'	=> array('title' => 'SO_CONFIG', 'auth'	=> 'ext_vinny/shareon', 'cat'	=> array('SHARE_ON_MOD')),
			),
		);
	}
}