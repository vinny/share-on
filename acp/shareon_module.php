<?php
/**
*
* Share On extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vinny\shareon\acp;

class shareon_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $user, $template, $request, $config;

		$this->config = $config;
		$this->request = $request;

		$user->add_lang('acp/common');
		$user->add_lang_ext('vinny/shareon', 'acp/info_acp_shareon');
		$this->tpl_name = 'acp_shareon';
		$this->page_title = $user->lang['SHARE_ON_MOD'];
		add_form_key('acp_shareon');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_shareon'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('so_status', $request->variable('so_status', true));
			$config->set('so_type', $request->variable('so_type', true));

			foreach (\vinny\shareon\ext::SO_NETWORKS as $network => $data)
			{
				$config->set('so_' . $network, $request->variable('so_' . $network, true));
			}


			trigger_error($user->lang['SO_SAVED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'SO_STATUS'		=> (!empty($this->config['so_status'])) ? true : false,
			'SO_TYPE'		=> (!empty($this->config['so_type'])) ? true : false,
			'U_ACTION'		=> $this->u_action,
		));

		foreach (\vinny\shareon\ext::SO_NETWORKS as $network => $data)
		{
			$template->assign_block_vars('networks', array(
				'NAME'			=> $network,
				'UPPER_NAME'	=> strtoupper($network),
				'LANG'			=> $user->lang('SO_' . strtoupper($network)),
				'VALUE'			=> (!empty($this->config['so_' . $network])) ? true : false,
			));
		}
	}
}
