<?php
/**
*
* Share On extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vinny\shareon;

class ext extends \phpbb\extension\base
{
	/**
	 * List of social networks and their share URLs
	 *
	 * @var array<string, array{url: string, args: string[]}>
	 *
	 * Example usage:
	 *   foreach (array_keys(ext::SO_NETWORKS) as $network) { ... }
	 *   $url = sprintf(ext::SO_NETWORKS[$network]['url'], ...);
	 */
	public const SO_NETWORKS = [
		'facebook'  => [
			'url'   => 'https://www.facebook.com/sharer/sharer.php?t=%s&amp;u=%s',
			'args'  => ['topic_title', 'share_url'],
			'icon'  => 'facebook-f',
			'color' => '#4060A5',
		],
		'twitter'   => [
			'url'   => 'https://x.com/share?text=%s&amp;url=%s',
			'args'  => ['topic_title', 'share_url'],
			'icon'  => 'x-twitter',
			'color' => '#000000',
		],
		'bluesky'   => [
			'url'   => 'https://bsky.app/intent/compose?text=%s%%20%s',
			'args'  => ['topic_title', 'share_url'],
			'icon'  => 'bluesky', // Only on FA 6.5.2 =(
			'color' => '#1185FE',
		],
		'reddit'    => [
			'url'   => 'https://www.reddit.com/submit?title=%s&amp;url=%s',
			'args'  => ['topic_title', 'share_url'],
			'icon'  => 'reddit-alien',
			'color' => '#ff4500',
		],
		'vk'        => [
			'url'   => 'https://vk.com/share.php?title=%s&amp;url=%s',
			'args'  => ['topic_title', 'share_url'],
			'icon'  => 'vk',
			'color' => '#4a76a8',
		],
		'tumblr'    => [
			'url'   => 'http://tumblr.com/widgets/share/tool?name=%s&amp;canonicalUrl=%s',
			'args'  => ['topic_title', 'share_url'],
			'icon'  => 'tumblr',
			'color' => '#3a5876',
		],
		'whatsapp'  => [
			'url'   => 'https://wa.me/?text=%s%%20%s',
			'args'  => ['topic_title', 'share_url'],
			'icon'  => 'whatsapp',
			'color' => '#25d366',
		],
	];
}
