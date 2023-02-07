<?php
/**
*
* Share On extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vinny\shareon\migrations;

class install_shareon_4_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['shareon_version']) && version_compare($this->config['shareon_version'], '2.1.0', '>=');
	}

	static public function depends_on()
	{
		return array('\vinny\shareon\migrations\install_shareon_3_0_0');
	}

	public function update_data()
	{
		return array(
			array('config.remove', array('so_tuenti')),
			array('config.remove', array('so_digg')),
			array('config.remove', array('so_delicious')),
			array('config.remove', array('so_google')),
			array('config.remove', array('so_pocket')),
			array('config.update', array('shareon_version', '2.1.0')),
		);
	}
}
