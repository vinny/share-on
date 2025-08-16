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
		$this->template->assign_vars(array(
			'S_SO_STATUS'		=> $this->config['so_status'] ? true : false,
			'S_SO_TYPE'			=> $this->config['so_type'] ? true : false,
			'S_SO_FACEBOOK'		=> $this->config['so_facebook'] ? true : false,
			'S_SO_TWITTER'		=> $this->config['so_twitter'] ? true : false,
			'S_SO_REDDIT'		=> $this->config['so_reddit'] ? true : false,
			'S_SO_VK'			=> $this->config['so_vk'] ? true : false,
			'S_SO_TUMBLR'		=> $this->config['so_tumblr'] ? true : false,
			'S_SO_WHATSAPP'		=> $this->config['so_whatsapp'] ? true : false,
			'S_SO_BLUESKY'		=> $this->config['so_bluesky'] ? true : false,
		));
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

		$topic_url = generate_board_url() . "/viewtopic.$this->php_ext?" . 'f=' . $forum_id . '&t=' . $event['row']['topic_id'];
		$post_url = generate_board_url() . "/viewtopic.$this->php_ext?" . 'p=' . $event['row']['post_id'] . '#p' . $event['row']['post_id'];
		$share_url = !$this->config['so_type'] ? $post_url : $topic_url;

		$postrow = array_merge($postrow, array(
			'U_FACEBOOK'	=> 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($topic_title) . '&amp;u=' . urlencode($share_url),
			'U_TWITTER'		=> 'https://x.com/share?text=' . urlencode($topic_title) .'&amp;url=' . urlencode($share_url),
			'U_REDDIT'		=> 'https://www.reddit.com/submit?url=' . urlencode($share_url) . '&amp;title=' . urlencode($topic_title),
			'U_VK'			=> 'https://vk.com/share.php?url=' . urlencode($share_url),
			'U_TUMBLR'		=> 'http://tumblr.com/widgets/share/tool?canonicalUrl=' . urlencode($share_url) . '&amp;name=' . urlencode($topic_title),
			'U_WHATSAPP'	=> 'https://wa.me/?text=' . urlencode($topic_title) . '&nbsp;' . urlencode($share_url),
			'U_BLUESKY'		=> 'https://bsky.app/intent/compose?text=' . urlencode($topic_title) .'&nbsp;' . urlencode($share_url),
		));
		$event['post_row'] = $postrow;
	}
}
