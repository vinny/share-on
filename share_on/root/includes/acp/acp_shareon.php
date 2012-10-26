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
		$config['SHAREON_VERSION'] = (isset($config['SHAREON_VERSION'])) ? $config['SHAREON_VERSION'] : '2.1.0';

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('acp_shareon'))
			{
				trigger_error('FORM_INVALID');
			}

			set_config('so_status', request_var('so_status', true));
			set_config('so_position', request_var('so_position', true));
			set_config('so_facebook', request_var('so_facebook', true));
			set_config('so_twitter', request_var('so_twitter', true));
			set_config('so_tuenti', request_var('so_tuenti', true));
			set_config('so_sonico', request_var('so_sonico', true));
			set_config('so_friendfeed', request_var('so_friendfeed', true));
			set_config('so_orkut', request_var('so_orkut', true));
			set_config('so_digg', request_var('so_digg', true));
			set_config('so_myspace', request_var('so_myspace', true));
			set_config('so_delicious', request_var('so_delicious', true));
			set_config('so_technorati', request_var('so_technorati', true));
			set_config('so_tumblr', request_var('so_tumblr', true));
			set_config('so_google', request_var('so_google', true));

			trigger_error($user->lang['SO_SAVED'] . adm_back_link($this->u_action));
		}
		
		$template->assign_vars(array(
			'SO_STATUS'		=> (!empty($config['so_status'])) ? true : false,
			'SO_POSITION'	=> (!empty($config['so_position'])) ? true : false,
			'SO_FACEBOOK'	=> (!empty($config['so_facebook'])) ? true : false,
			'SO_TWITTER'	=> (!empty($config['so_twitter'])) ? true : false,
			'SO_TUENTI'		=> (!empty($config['so_tuenti'])) ? true : false,
			'SO_SONICO'		=> (!empty($config['so_sonico'])) ? true : false,
			'SO_FRIENDFEED'	=> (!empty($config['so_friendfeed'])) ? true : false,
			'SO_ORKUT'		=> (!empty($config['so_orkut'])) ? true : false,
			'SO_DIGG'		=> (!empty($config['so_digg'])) ? true : false,
			'SO_MYSPACE'	=> (!empty($config['so_myspace'])) ? true : false,
			'SO_DELICIOUS'	=> (!empty($config['so_delicious'])) ? true : false,
			'SO_TECHNORATI'	=> (!empty($config['so_technorati'])) ? true : false,
			'SO_TUMBLR'		=> (!empty($config['so_tumblr'])) ? true : false,
			'SO_GOOGLE'		=> (!empty($config['so_google'])) ? true : false,
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