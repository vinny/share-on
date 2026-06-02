<?php
/**
*
* Share On extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vinny\shareon\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\user */
	protected $user;

	/** @var string PHP file extension */
	protected $php_ext;

	/**
	* Constructor
	*
	* @param \phpbb\template\template $template Template object
	* @param \phpbb\config\config     $config   Config object
	* @param \phpbb\user              $user     User object
	* @param string $php_ext
	*/

	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config, \phpbb\user $user, $php_ext)
	{
		$this->template = $template;
		$this->config = $config;
		$this->user = $user;
		$this->php_ext = $php_ext;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.common'							=> 'common_setup',
			'core.viewtopic_modify_post_row'		=> 'viewtopic_postrow_shareon',
		);
	}

	public function common_setup($event)
	{
		$vars = array(
			'S_SO_STATUS'		=> $this->config['so_status'] ? true : false,
			'S_SO_TYPE'			=> $this->config['so_type'] ? true : false,
		);

		foreach (\vinny\shareon\ext::SO_NETWORKS as $network => $data)
		{
			$vars['S_SO_' . strtoupper($network)] = $this->config['so_' . $network] ? true : false;
		}

		$this->template->assign_vars($vars);
	}

	public function viewtopic_postrow_shareon($event)
	{
		if (!$this->config['so_status'])
		{
			return;
		}

		$this->user->add_lang_ext('vinny/shareon', 'shareon');
		$row = $event['row'];
		$postrow = $event['post_row'];
		$topic_data = $event['topic_data'];
		$forum_id = (int) $row['forum_id'];
		$topic_title = $event['topic_data']['topic_title'];

		$topic_url = generate_board_url() . "/viewtopic.$this->php_ext?" . 't=' . $event['row']['topic_id'];
		$post_url = generate_board_url() . "/viewtopic.$this->php_ext?" . 'p=' . $event['row']['post_id'] . '#p' . $event['row']['post_id'];
		$share_url = !$this->config['so_type'] ? $post_url : $topic_url;

		$urls = array();
		$networks = array();
		foreach (\vinny\shareon\ext::SO_NETWORKS as $network => $data)
		{
			if (!$this->config['so_' . $network])
			{
				continue;
			}
			$args = array();
			foreach ($data['args'] as $arg)
			{
				if ($arg === 'topic_title')
				{
					$args[] = urlencode($topic_title);
				}
				elseif ($arg === 'share_url')
				{
					$args[] = urlencode($share_url);
				}
			}
			$url = vsprintf($data['url'], $args);
			$urls['U_' . strtoupper($network)] = $url;
			$networks[] = array(
				'NAME'  => $network,
				'URL'   => $url,
				'ICON'  => $data['icon'] ?? '',
				'COLOR' => $data['color'] ?? '',
			);
		}

		$postrow = array_merge($postrow, $urls);
		$postrow['shareon_networks'] = $networks;
		$event['post_row'] = $postrow;
	}
}
