<?php
/**
*
* @package Share On
* @copyright (c) 2013 Vinny
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vinny\shareon\acp;

class shareon_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		
		$this->config = $config;
		$this->request = $request;

		$user->add_lang('acp/common');
		$user->add_lang_ext('vinny/shareon', 'acp/info_acp_shareon');
		$this->tpl_name = 'acp_shareon';
		$this->page_title = $user->lang['SHARE_ON_MOD'];
		add_form_key('acp_shareon');
		// Version Check
		$this->config['SHAREON_VERSION'] = (isset($this->config['SHAREON_VERSION'])) ? $this->config['SHAREON_VERSION'] : '1.0.0';

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_shareon'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('so_status', $request->variable('so_status', true));
			$config->set('so_position', $request->variable('so_position', true));
			$config->set('so_facebook', $request->variable('so_facebook', true));
			$config->set('so_twitter', $request->variable('so_twitter', true));
			$config->set('so_tuenti', $request->variable('so_tuenti', true));
			$config->set('so_sonico', $request->variable('so_sonico', true));
			$config->set('so_friendfeed', $request->variable('so_friendfeed', true));
			$config->set('so_orkut', $request->variable('so_orkut', true));
			$config->set('so_digg', $request->variable('so_digg', true));
			$config->set('so_reddit', $request->variable('so_reddit', true));
			$config->set('so_delicious', $request->variable('so_delicious', true));
			$config->set('so_technorati', $request->variable('so_technorati', true));
			$config->set('so_tumblr', $request->variable('so_tumblr', true));
			$config->set('so_google', $request->variable('so_google', true));

			trigger_error($user->lang['SO_SAVED'] . adm_back_link($this->u_action));
		}
		
		$template->assign_vars(array(
			'SO_STATUS'		=> (!empty($this->config['so_status'])) ? true : false,
			'SO_POSITION'	=> (!empty($this->config['so_position'])) ? true : false,
			'SO_FACEBOOK'	=> (!empty($this->config['so_facebook'])) ? true : false,
			'SO_TWITTER'	=> (!empty($this->config['so_twitter'])) ? true : false,
			'SO_TUENTI'		=> (!empty($this->config['so_tuenti'])) ? true : false,
			'SO_SONICO'		=> (!empty($this->config['so_sonico'])) ? true : false,
			'SO_FRIENDFEED'	=> (!empty($this->config['so_friendfeed'])) ? true : false,
			'SO_ORKUT'		=> (!empty($this->config['so_orkut'])) ? true : false,
			'SO_DIGG'		=> (!empty($this->config['so_digg'])) ? true : false,
			'SO_REDDIT'		=> (!empty($this->config['so_reddit'])) ? true : false,
			'SO_DELICIOUS'	=> (!empty($this->config['so_delicious'])) ? true : false,
			'SO_TECHNORATI'	=> (!empty($this->config['so_technorati'])) ? true : false,
			'SO_TUMBLR'		=> (!empty($this->config['so_tumblr'])) ? true : false,
			'SO_GOOGLE'		=> (!empty($this->config['so_google'])) ? true : false,
			'U_ACTION'		=> $this->u_action,
			'SHAREON_VERSION'		=> $this->config['SHAREON_VERSION'],
			'S_VERSION_UP_TO_DATE'	=> $this->shareon_version_compare($this->config['SHAREON_VERSION']),
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