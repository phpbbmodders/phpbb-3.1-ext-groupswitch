<?php
/**
 *
 * @package phpBB Extension - Group Switches
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@phpbbmodders.net
 * @copyright (c) 2015 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\groupswitches\acp;

class groupswitches_module
{

	/** @var string */
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $db, $template, $user;

		$this->tpl_name = 'acp_groupswitches';
		$this->page_title = 'GROUP_SWITCHES';

		// just create a list of groups and their associated numbers
		// Get us all the groups
		// this is only to assist the admin with retrieving the appropriate group number
		$sql = 'SELECT group_name, group_id
			FROM ' . GROUPS_TABLE . '
			ORDER BY group_name';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$group_name = (!empty($user->lang['G_' . $row['group_name']]))? $user->lang['G_' . $row['group_name']] : $row['group_name'];

			$template->assign_block_vars('groups', array(
				'GROUP_NAME'	=> $group_name,
				'GROUP_ID'		=> $row['group_id'],
				'L_GROUP_SWITCHES_VERSION' => sprintf($user->lang['GROUP_SWITCHES_VERSION'], $config['groupswitches_version']),
			));
		}
		$db->sql_freeresult($result);

		$template->assign_vars(array(
			'L_GROUP_SWITCHES_VERSION' => sprintf($user->lang['GROUP_SWITCHES_VERSION'], $config['groupswitches_version']),
		));	
	}
}
