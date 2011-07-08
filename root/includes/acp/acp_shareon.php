<?php

/**
*
* @package - Share On
* @version $Id: acp_shareon.php 2010-03-12 02:40 Saske1 $
* @copyright (c) Saske1 ( http://www.phpbbsaske.eshsot.es/foro/ )
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
* @package acp
*/
class acp_shareon
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		include($phpbb_root_path . 'includes/acp/info/acp_shareon.' . $phpEx);

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_shareon';
		$this->page_title = $user->lang['SHARE_ON_MOD'];
		add_form_key('acp_shareon');

		// Install and update the ShareOn MOD through the ACP file
		$version = new acp_shareon_info();
				  
		$shareon_version = $version->module();
		$shareon_version = $shareon_version['version'];

		if (!isset($config['shareon_mod_version']))
		{
			$version->install($this->u_action);
		}
		else if (version_compare($config['shareon_mod_version'], $shareon_version, '<'))
		{
			$version->update($this->u_action);
		}

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('acp_shareon'))
			{
				trigger_error('FORM_INVALID');
			}

			set_config('so_status', request_var('so_status', 0));
			set_config('so_facebook', request_var('so_facebook', 0));
			set_config('so_twitter', request_var('so_twitter', 0));
			set_config('so_tuenti', request_var('so_tuenti', 0));
			set_config('so_sonico', request_var('so_sonico', 0));
			set_config('so_friendfeed', request_var('so_friendfeed', 0));
			set_config('so_orkut', request_var('so_orkut', 0));
			set_config('so_digg', request_var('so_digg', 0));
			set_config('so_myspace', request_var('so_myspace', 0));
			set_config('so_delicious', request_var('so_delicious', 0));
			set_config('so_technorati', request_var('so_technorati', 0));

			trigger_error($user->lang['SO_SAVED'] . adm_back_link($this->u_action));
		}
		
		$template->assign_vars(array(
			'SO_STATUS'      => $config['so_status'],
			'SO_FACEBOOK'   => $config['so_facebook'],
			'SO_TWITTER'   => $config['so_twitter'],
			'SO_TUENTI'   => $config['so_tuenti'],
			'SO_SONICO'   => $config['so_sonico'],
			'SO_FRIENDFEED'   => $config['so_friendfeed'],
			'SO_ORKUT'      => $config['so_orkut'],
			'SO_DIGG'		=> $config['so_digg'],
			'SO_MYSPACE'	=> $config['so_myspace'],
			'SO_DELICIOUS' 	=> $config['so_delicious'],
			'SO_TECHNORATI'	=> $config['so_technorati'],
			'U_ACTION'      => $this->u_action,
		));
	}
}

?>