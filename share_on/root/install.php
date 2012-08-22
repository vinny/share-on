<?php

/**
* @author _Vinny_ vinny@suportephpbb.com.br
* @package Share On
* @version $Id install.php
* @copyright (c) 2012 _Vinny_ ( http://www.suportephpbb.com.br ), Saske1 ( http://www.phpbb-es.com )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
   trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$language_file = 'mods/info_acp_shareon';

// The name of the mod to be displayed during installation.
$mod_name = 'SO_ACP';

$version_config_name = 'shareon_version';

$versions = array(
   // Version 1.2.0
   '1.2.0'   => array(
      // Lets add a config setting
      'config_add' => array(
         array('so_status', true),
		 array('so_facebook', true),
		 array('so_twitter', true),
		 array('so_tuenti', true),
		 array('so_sonico', true),
		 array('so_friendfeed', true),
		 array('so_orkut', true),
		 array('so_digg', true),
		 array('so_myspace', true),
		 array('so_delicious', true),
		 array('so_technorati', true),
		),
	  
	  // Now add the module
		'module_add' => array(
			// First, lets add a new category named SO_ACP to ACP_CAT_DOT_MODS
			array('acp', 'ACP_CAT_DOT_MODS', 'SO_ACP'),
			// next let's add our module
			array('acp', 'SO_ACP', array(
					'module_basename'	=> 'shareon',
					'modes'				=> array('settings'),
				),
			),
		),
	),
   
   	// Version 2.0.0
	'2.0.0' => array(
		// Nothing changed in this version.
	),

	// Version 2.0.1
	'2.0.1' => array(
	// Lets add a config setting
	'config_add' => array(
		array('so_tumblr', true),
		),
	),

	// Version 2.1.0
	'2.1.0' => array(
	// Lets add a config setting
	'config_add' => array(
		array('so_google', true),
		array('so_position', true),
		),

	'cache_purge' => array('', 'template', 'theme'),
	),
	
);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>