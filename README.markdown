BourbonWP
===============================

A naked Wordpress theme with the convenience of having Bourbon and Neat already builtin.
-------------------------------

This is a naked Wordpress theme that you can use to create your own theme.
The markup is based Twentythirteen Theme
I'm sure you can get something fancier, based on the latest Twenty-something Wordpress theme, but I like this one as it's plain an simple.

The css is generated using Sass (hence, you need Ruby on your machine) and the awesome [Bourbon](http://bourbon.io) and [Neat](http://neat.bourbon.io) libraries.
The latest update to the styles folder has been done on the 6th of September 2013.

This theme includes Modernizr, Respond, jQuery and a conditional call (for old IE browsers) to Selectivizr.

In functions.php I have registered a custom menu, activated post thumbnails, registered the sidebar.

As a bonus, cheatsheet.txt contains some useful snippets to make your development faster :D

Getting Started
---------------
1. Install Ruby on your systen if you haven't already. Once it's installed, install SASS (gem install sass).
2. Add the BourbonWP folder to your wp-content/themes folder.
3. Create a first version of your stylesheets by opening the command line, switching to the "styles" folder inside this theme, and finally by issuing the command "sass --watch styles.scss:styles.css --style compressed". This way each time you change any of the scss files, styles.scss will be overwritten.
4. Activate the theme. WP-Admin > Appearance > Themes
5. Add some of the "Root Files" to the root directory of your website (explained below).
6. Style away.

Note: As a default I have created _vars.scss, containing variables, _helpers.scss, where you can add helpful classes, _reset.scss for your resets, _grid_settings.scss for Neat customization and _layout.scss, where the bulk of your code has to go.
If you like, you can create as many partials as you wish of course - many people like to divide their scss files in tiny bits, each referring to different modules. Your choice!

Root Files
----------

### 404 Page
If you use permanlinks (WP-Admin > Settings > Permalinks), then WordPress handles any 404s with the 404.php included in the theme. If you don't use permalinks, then add the 404.html file you find in the html5-boilerplate folder to the root of your site.

### crossdomain.xml
If you don't know what this is, you probably don't need it.
www.adobe.com/devnet/flashplayer/articles/cross_domain_policy.html

### robots.txt
Tells all search engines that they can read and index all pages. This is handled by WordPress so you shouldn't need to move this to the root.

Root Images
-----------
Included are default HTML5 boilerplate icons, change them with your own.

License
-------

The Unlicense (aka: public domain) http://unlicense.org


Put together by
-------
Alessandro Muraro - [alexmuraro.me](http://www.alexmuraro.me)
