# Group Switches

[![Tests](https://github.com/phpbbmodders/phpbb-3.1-ext-groupswitch/actions/workflows/tests.yml/badge.svg)](https://github.com/phpbbmodders/phpbb-3.1-ext-groupswitch/actions/workflows/tests.yml) [![Lint](https://github.com/phpbbmodders/phpbb-3.1-ext-groupswitch/actions/workflows/lint.yml/badge.svg)](https://github.com/phpbbmodders/phpbb-3.1-ext-groupswitch/actions/workflows/lint.yml)

Lets style templates show or hide content based on the viewer's groups.

## Features

- Sets a template switch `S_GROUP_<id>` for every group the current user is in, on every page.
- An ACP page lists your groups with their IDs.

## Requirements

- phpBB 3.3.19 or later
- PHP 7.4 or later

## Installation

1. Copy the extension to `/ext/phpbbmodders/groupswitches`
2. In the Administration Control Panel, go to **Customise → Manage extensions**
3. Enable the **Group Switches** extension
4. Find your group IDs under **ACP → Users and Groups → Group Switches**

## Usage

Put the content in a template event file inside the extension, using the group's ID from the ACP page. For example, `styles/all/template/event/overall_header_navbar_before.html`:

```twig
{% if S_GROUP_5 %}
	<div class="rules">Only members of group 5 see this (Administrators, on a default install).</div>
{% endif %}
```

Use `styles/all/` for every style, or a style's own folder (such as `styles/prosilver/`) for just that style, then purge the board cache. The template events you can use are listed in phpBB's [event documentation](https://area51.phpbb.com/docs/dev/3.3.x/extensions/events_list.html).

## Contributing

Contributions are welcome!

- **Bug reports**: [Open an issue](https://github.com/phpbbmodders/phpbb-3.1-ext-groupswitch/issues).
- **Everything else** (questions, feature requests, ideas, general discussion): [Use Discussions](https://github.com/orgs/phpbbmodders/discussions), or the [community forum](https://www.phpbbmodders.com/community/).
- Pull requests are welcome for bug fixes or discussed features.

## Acknowledgments

- Original extension by Rich McGirr ([RMcGirr83](https://github.com/rmcgirr83)).
- Code review, bug fixes, and documentation assisted by [Claude](https://www.anthropic.com/claude).

## License

This extension is licensed under the **GNU General Public License v2.0**.

See [license.txt](license.txt) for more information.
