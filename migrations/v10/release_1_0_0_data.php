<?php
/**
 *
 * @package phpBB Extension - Group Switches
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@phpbbmodders.net
 * @copyright (c) 2015 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\groupswitches\migrations\v10;

class release_1_0_0_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['groupswitches_version']) && version_compare($this->config['groupswitches_version'], '1.0.0', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('groupswitches_version', '1.0.0')),
			array('module.add', array(
				'acp',
				'ACP_GROUPS',
				array(
					'module_basename'	=> '\phpbbmodders\groupswitches\acp\groupswitches_module',
					'auth'				=> 'ext_phpbbmodders/groupswitches && acl_a_group',
					'modes'				=> array('main'),
				),
			)),
		);
	}
}
