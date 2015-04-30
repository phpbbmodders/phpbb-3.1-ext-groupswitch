phpbb-3.1-ext-groupswitches
=========================

phpBB 3.1 extension to allow the use of group switches in HTML files.



[![Build Status](https://travis-ci.org/phpbbmodders/phpbb-3.1-ext-groupswitch.svg)](https://travis-ci.org/phpbbmodders/phpbb-3.1-ext-groupswitch)
## Installation

### 1. clone
Clone (or download and move) the repository into the folder phpBB3/ext/phpbbmodders/groupswitches:

```
cd phpBB3
git clone https://github.com/phpbbmodders/phpbb-3.1-ext-groupswitch.git ext/phpbbmodders/groupswitches
```

### 2. activate
Go to admin panel -> tab customise -> Manage extensions -> enable Group Switches

### 3. use
To use this extension you should know the template events that are available for you.  You can find these template events [here](https://wiki.phpbb.com/Event_List#Template_Events) toward the bottom of the page.

Once you determine the template event you want to use, simply make a new template event html file with the code you want for the group switch to display.  An example can be found [here](https://www.phpbb.com/support/docs/en/3.0/kb/article/creating-group-template-switches/) you do not need the edits to the core PHP phpBB files.

Directories have been created but unpopulated in the extensions directory where you can add your html file and it will be automagically included into the forums html files (use the "all" directory if you want it displayed on every template or prosilver or subsilver if you only want it to display on those styles).  Simply add your html file into the event directory of whichever style.

To achieve a list of numbers that are associated with your groups visit the user and groups tab and click on the Group Switches link.