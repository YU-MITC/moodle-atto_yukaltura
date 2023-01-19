# YU Kaltura Media Package

"YU Kaltura Media Package" is a third-party's Kaltura plugin package (a series of plugins) for Moodle 3.9 or later.
This package is developed by the Center for Information Infrastructure, Yamaguchi University.
By using this package, users can upload media to the Kaltura server, and easily embed the media in Moodle courses.
Moreover, this package provides some useful functions.
Since this package does not require Kaltura Application Framework (KAF), can work with Kaltura Community Edition (CE) and other editions.

In order to use this package, administrators must install "[YU Kaltura Media Local Libraries](https://moodle.org/plugins/local_yukaltura)" and "[YU Kaltura Media Gallery](https://moodle.org/plugins/local_yumymedia)".
These plugins provide functions such as uploading, playing back and deleting media files to users.

In addition, the administrators can install "[YU Kaltura Media Assignment](https://moodle.org/plugins/mod_kalmediaassign)", "[YU Kaltura Media Resource](https://moodle.org/plugins/mod_kalmediares)", and "[YU Kaltura Media for Atto](https://moodle.org/plugins/atto_yukaltura)".
These plugins provide teachers ability of creating resource and activity modules which use kaltura media in their Moodle courses.
And, user can embed his/her media into text area (introduction or page content) through the Atto HTML editor.

Please note that there is a chance this module will not work on some Moodle environment.
Also, this package is only available in English and Japanese. Stay tuned to future versions for other language supports.

Original plugin package ("Kaltura Video Package") has better functions than ours and is easy to use. So that, for customers of the "Kaltura SaaS Edition", use the original plugin package is the better.

YU Kaltura Media for Atto
------

This is a sub-plugin for the Atto HTML editor.
By using this plugin, users can embed Kaltura media into text content.
For example, introduction of resource/activity content, page content, label content, report as online text, feedback comment, etc.
Users can embed existing Kaltura media into text area of the Atto.
In addition, they can upload new media and can embed it.
For PCs, users can record new media by using a webcam, and can upload the media.
Then, they can embed the media into text area of the Atto.

This plugin is updated with stable releases. To follow active development on GitHub, click [here](https://github.com/YU-MITC/moodle-atto_yukaltura/).

Requirements
------

* PHP5.3 or greater.
* Web browsers must support the JavaScript and HTML5.
* System administrators must use the HTTPS protocol for their Moodle site and Kaltura server.
* Administrators must not delete "Default" access control profile from their Kaltura server. If they delete the "Default" profile, they must create new profile named "Default" before install our plugins.
* These plugins do not support Flash players. Therefore, please use HTML5 players.
* "local_yukaltura" and "local_yumymedia" plugins.

Supported themes
-----

* Clean
* Boost (version 1.1.7 and later)
* Classic (version 1.3.0 and later)

This plugin package might be able to work with other themes.

Installation
------

Unzip this plugin, and copy the directory (lib/editor/atto/plugins/yukaltura) under moodle root directory (ex. /moodle).
Installation will be completed after you log in as an administrator and access the notification menu.

After installation, the administrator must access setting page of local_yukaltura, and must set some items for this plugin.
Next, the administrator must access setting page of the Atto HTML editor, and must add "yukaltura" keyword to toolbar's setting.

How to use
------

* User's guide, click [here](http://www.cc.yamaguchi-u.ac.jp/guides/cas/plugins/userguide_version2.1.pdf).
* Demonstration web page, click [here](http://www.cc.yamaguchi-u.ac.jp/guides/cas/plugins/demo/).

Targeted Moodle versions
------

Moodle 3.9, 3.10, 3.11, 4.0, 4.1

Branches
------

* MOODLE_39_STABLE -> Moodle 3.9 branch
* MOODLE_310_STABLE -> Moodle 3.10 branch
* MOODLE_311_STABLE -> Moodle 3.11 branch
* MOODLE_400_STABLE -> Moodle 4.0 branch
* MOODLE_401_STABLE -> Moodle 4.1 branch

First clone the repository with "git clone", then "git checkout MOODLE_400_STABLE(branch name)" to switch branches.

Warning
------

* We are not responsible for any problem caused by this software. 
* This software follows the license policy of Moodle (GNU GPL v3).
* "Kaltura" is the registered trademark of the Kaltura Inc.
* Web-camera recording function supports the Mozilla Firefox, Google Chrome, Opera and Safari. For smartphones and tablets, you can record movies through a normal media uploader.
* Uploading and recording functions in resource and activity modules may not work well with smartphones. Because, low resolution screen cannot display these forms correctly.

Known issues
------

* In some browsers, preview window (modal window) cannot receive MPEG-DASH/HLS/HDS streaming data. And, if Kaltura server employs HTTPS and users embed their media into web sites employs HTTP, Kaltura players cannot receive streaming data. For local_yumymedia and mod_kalmediaassign, we recommend Kaltura players which receive video using progressive download.

Change log of YU Kaltura Media for Atto
------

Version 2.1.0

* fixed copyright statements in various files.
* fixed provider.php, in order to only support formats employed in Moodle 3.5 and laters.

Version 2.0.0

* fixed copyright statements in various files.
* fixed various files in order to delete statements using print_error function.
* fixed atto_selector.php, attorecorder.js, attoselector.js, and attouploader.js, in order to support Kaltura OVP media players (TV Platform studio).

Version 1.5.0

* fixed README.md, in order to support the Moodle 3.10.

Version 1.4.2

* fixed README.md, in order to support the Moodle 3.9.

Version 1.4.1

* fixed copyright statements in all files.
* fixed atto_selector.php, in order to adopt upload URI.

Version 1.4.0R3

* fixed some statements in atto_selector.php, in order to resolve an issue about search keyword handling.

Version 1.4.0R2

* fixed video codec selection scheme in attorecorder.js, in order to support the recent versions of Mozilla Firefox.

Version 1.4.0

* fixed javascript files based on JSDoc warnings.
* fixed javascript files in order to support the Safari 12.x/13.x on macOS.
* added privacy functions ans strings to comply with GDPR.
* fixed "Requirements" in README.md.

Version 1.0.4

* fixed some statements in attoselector.js, in order to according to the Moodle coding style.

Version 1.0.3

* fixed some statements in attorecorder.js, and button.js, in order to according to the Moodle coding style.

Version 1.0.2

* fixed some statements in attorecorder.js, attouploader.js, and button.js, in order to according to the Moodle coding style.

Version 1.0.1

* fixed comments in attorecorder.js, attouploader.js, atto_recorder.php, and atto_uploader.php

Version 1.0.0

* released first version.

