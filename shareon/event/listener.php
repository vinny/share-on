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

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.common'							=> 'common_setup',
			'core.user_setup'						=> 'load_language_on_setup',
			'core.viewtopic_modify_post_row'		=> 'viewtopic_postrow_shareon',
		);
	}

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var string */
	protected $root_path;

	/** @var string */
	protected $php_ext;

	/**
	* Constructor
	* 
	* @param \phpbb\controller\helper	$helper		Controller helper object
	* @param \phpbb\template			$template	Template object
	*/
	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\config\config $config, $php_ext)
	{
		$this->helper = $helper;
		$this->template = $template;
		$this->config = $config;
		$this->php_ext = $php_ext;
	}

	public function common_setup($event)
	{
		$this->template->assign_vars(array(
			'S_SO_STATUS'		=> $this->config['so_status'] ? true : false,
			'S_SO_TYPE'			=> $this->config['so_type'] ? true : false,
			'S_SO_FACEBOOK'		=> $this->config['so_facebook'] ? true : false,
			'S_SO_TWITTER'		=> $this->config['so_twitter'] ? true : false,
			'S_SO_TUENTI'		=> $this->config['so_tuenti'] ? true : false,
			'S_SO_SONICO'		=> $this->config['so_sonico'] ? true : false,
			'S_SO_FRIENDFEED'	=> $this->config['so_friendfeed'] ? true : false,
			'S_SO_DIGG'			=> $this->config['so_digg'] ? true : false,
			'S_SO_REDDIT'		=> $this->config['so_reddit'] ? true : false,
			'S_SO_DELICIOUS'	=> $this->config['so_delicious'] ? true : false,
			'S_SO_VK'			=> $this->config['so_vk'] ? true : false,
			'S_SO_TUMBLR'		=> $this->config['so_tumblr'] ? true : false,
			'S_SO_GOOGLE'		=> $this->config['so_google'] ? true : false,
		));
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'vinny/shareon',
			'lang_set' => 'shareon',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function viewtopic_postrow_shareon($event)
	{
		if (!$this->config['so_status'])
		{
			return;
		}

		$row = $event['row'];
		$postrow = $event['post_row'];
		$topic_data = $event['topic_data'];
		$forum_id = (int) $row['forum_id'];
		$topic_title = $event['topic_data']['topic_title'];

		$topic_url = generate_board_url() . "/viewtopic.$this->php_ext?" . 'f=' . $forum_id . '&t=' . $event['row']['topic_id'];
		$post_url = generate_board_url() . "/viewtopic.$this->php_ext?" . 'p=' . $event['row']['post_id'] . '#p' . $event['row']['post_id'];
		$share_url = !$this->config['so_type'] ? $post_url : $topic_url;

		$postrow = array_merge($postrow, array(
			'U_FACEBOOK'	=> 'https://www.facebook.com/share.php?t=' . urlencode($topic_title) . '&amp;u=' . urlencode($share_url),
			'U_TWITTER'		=> 'https://twitter.com/share?text=' . urlencode($topic_title) .'&amp;url=' . urlencode($share_url),
			'U_DIGG'		=> 'http://digg.com/submit?phase=2&amp;url=' . urlencode($share_url) . '&amp;title=' . urlencode($topic_title),
			'U_REDDIT'		=> 'http://www.reddit.com/submit?url=' . urlencode($share_url) . '&amp;title=' . urlencode($topic_title),
			'U_DELICIOUS' 	=> 'https://delicious.com/post?url=' . urlencode($share_url) . '&amp;title='. urlencode($topic_title),
			'U_VK'			=> 'http://vk.com/share.php?url=' . urlencode($share_url),
			'U_TUENTI'		=> 'http://www.tuenti.com/?m=Share&amp;func=index&amp;suggested-text='. urlencode($topic_title) .'&amp;url=' . urlencode($share_url),
			'U_SONICO'		=> 'http://www.sonico.com/share.php?title='. urlencode($topic_title) .'&amp;url=' . urlencode($share_url),
			'U_FRIENDFEED'	=> 'http://friendfeed.com/share?url=' . urlencode($share_url),
			'U_TUMBLR'		=> 'https://www.tumblr.com/share/link?url=' . urlencode($share_url) . '&amp;name=' . urlencode($topic_title),
			'U_GOOGLE'		=> 'https://plus.google.com/share?url=' . urlencode($share_url),
		));
		$event['post_row'] = $postrow;
	}
}
