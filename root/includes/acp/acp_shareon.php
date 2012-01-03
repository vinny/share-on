<?php

/**
*
* @package - Share On
* @version $Id: acp_shareon.php 2010-03-12 02:40 Saske1 $
* @copyright (c) Saske1 ( http://www.phpbbsaske.com )
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

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_shareon';
		$this->page_title = $user->lang['SHARE_ON_MOD'];
		add_form_key('acp_shareon');
		// Version Check
		$config['SHAREON_VERSION'] = (isset($config['SHAREON_VERSION'])) ? $config['SHAREON_VERSION'] : '2.0.1';

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
			set_config('so_tumblr', request_var('so_tumblr', 0));

			trigger_error($user->lang['SO_SAVED'] . adm_back_link($this->u_action));
		}
		
		$template->assign_vars(array(
			'SO_STATUS'		=> $config['so_status'],
			'SO_FACEBOOK'	=> $config['so_facebook'],
			'SO_TWITTER'	=> $config['so_twitter'],
			'SO_TUENTI'		=> $config['so_tuenti'],
			'SO_SONICO'		=> $config['so_sonico'],
			'SO_FRIENDFEED'	=> $config['so_friendfeed'],
			'SO_ORKUT'		=> $config['so_orkut'],
			'SO_DIGG'		=> $config['so_digg'],
			'SO_MYSPACE'	=> $config['so_myspace'],
			'SO_DELICIOUS'	=> $config['so_delicious'],
			'SO_TECHNORATI'	=> $config['so_technorati'],
			'SO_TUMBLR'		=> $config['so_tumblr'],
			'U_ACTION'		=> $this->u_action,
			'SHAREON_VERSION'		=> $config['SHAREON_VERSION'],
			'S_VERSION_UP_TO_DATE'	=> $this->shareon_version_compare($config['SHAREON_VERSION']),
		));
	}
	/**
	* Obtains the latest version information
	* @param string    $current_version    version information
	* @param int       $ttl             Cache version information for $ttl seconds. Defaults to 86400 (24 hours).
	* 
	* @return bool       false on failure.
	**/
	function shareon_version_compare($current_version = '', $version_up_to_date = true, $ttl = 86400)
	{
		global $cache, $template;

		$info = $cache->get('shareon_versioncheck');

		if ($info === false)
		{
		$errstr = '';
		$errno = 0;

		$info = get_remote_file('www.suportephpbb.com.br', '/shareon', 'shareon.txt', $errstr, $errno);
		if ($info === false)
		{
			$template->assign_var('S_VERSIONCHECK_FAIL', true);
			$cache->destroy('shareon_versioncheck');
		}
		}

		if ($info !== false)
	{
		$cache->put('shareon_versioncheck', $info, $ttl);
		$latest_version_info = explode("\n", $info);

		$latest_version = strtolower(trim($latest_version_info[0]));
		$current_version = strtolower(trim($current_version));
		$version_up_to_date = version_compare($current_version, $latest_version, '<') ? false : true;

		$template->assign_vars(array(
			'U_VERSIONCHECK'	=> ($version_up_to_date) ? false : $latest_version_info[1],
			'S_VERSIONOLD'		=> $current_version,
			'S_VERSIONNEW'		=> ($version_up_to_date) ? false : $latest_version_info[0],
		));
	}

		return $version_up_to_date;
	}
}

?>