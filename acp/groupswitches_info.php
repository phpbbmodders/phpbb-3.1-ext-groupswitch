<?php
/**
 *
 * Group Switches extension for the phpBB Forum Software package
 *
 * @author RMcGirr83 (Rich McGirr) rmcgirr83@phpbbmodders.net
 * @copyright (c) 2015 phpbbmodders.net
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\groupswitches\acp;

/**
* @package module_install
*/
class groupswitches_info
{
	function module()
	{
		return array(
			'filename'	=> 'phpbbmodders\groupswitches\acp\groupswitches_module',
			'title'		=> 'GROUP_SWITCHES',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'main'	=> array('title' => 'GROUP_SWITCHES', 'auth'	=> 'ext_phpbbmodders/groupswitches && acl_a_group', 'cat'	=> array('ACP_GROUPS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
