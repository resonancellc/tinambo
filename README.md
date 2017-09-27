     ___________  __    _____  ___        __       ___      ___  _______     ______    
    ("     _   ")|" \  (\"   \|"  \      /""\     |"  \    /"  ||   _  "\   /    " \   
     )__/  \\__/ ||  | |.\\   \    |    /    \     \   \  //   |(. |_)  :) // ____  \  
        \\_ /    |:  | |: \.   \\  |   /' /\  \    /\\  \/.    ||:     \/ /  /    ) :) 
        |.  |    |.  | |.  \    \. |  //  __'  \  |: \.        |(|  _  \\(: (____/ //  
        \:  |    /\  |\|    \    \ | /   /  \\  \ |.  \    /:  ||: |_)  :)\        /   
         \__|   (__\_|_)\___|\____\)(___/    \___)|___|\__/|___|(_______/  \"_____/    

Description [![No Maintenance Intended](http://unmaintained.tech/badge.svg)](http://unmaintained.tech/) 
===========

Tinambo is a one-file flat-file blogging system written in PHP (version doesn't matter), that doesn't have any other requirements than PHP to run. It doesn't need a database, it stores the posts and pages into JSON text files and it is fully PHP 7 compatible.

As a flat-file system, Tinambo stores the content in files and folders, which has a handful of advantages. You don’t need to query the database each time you show a page and the flat-file system generates dynamic pages.

There’s no need to configure or maintain a database and this is a big thing for a lot of people; it saves a lot of time and often is a headache. Installation is usually just a matter of uploading files to a server and boom. Your site is ready.

Features
========

- full responsive for best mobile experience.
- posts, pages, image attachments.
- customizable URL slug for admin panel (security by obscurity is good).
- editor area for easy blog administration.
- contact form.
- full-text search.
- Facebook and Twitter integration.
- Google Analytics integration.
- image editing via [Picozu Image Editor](https://www.picozu.com).
- Facebook or Disqus comments.
- built-in jQuery via Google AJAX libs.
- RSS, ATOM and OPML feeds.
- JSON API output so you can integrate 3rd party apps to post/view data to/from your blog.
- minify option that will minimize and obfuscate the HTML code.
- full HTML5-compliant.
- embed mode when you want to embed the blog into an existing design.
- many other things that you can discover in this under-200Kb application (code comments, lots of them, included in that).

Installation
============

Simply edit the settings at the top of the blog.php file, then copy the blog.php file to your host and rename it if you want. The script will automatically create the `images` `pages` and `posts` directories.

Configuration
=============

All Tinambo's settings are located at the top of the blog.php file, each is commented as well as possible, make sure you only change what you need and understand the implications. Changing the `key` to something different than `false` is required before you can login to the admin panel.

License
=======

Tinambo is written by Marius Stanciu - Sergiu marius AT vox.space and released into the Public Domain. It can't get any more free than that.

Contributing
============

Contributions are welcome! If you need any help, contact me at marius AT vox.space.

Source code
===========

The application can be downloaded from https://vox.space or from GitHub.com by issueing:

`git clone https://github.com/voxspace/tinambo.git`

Additional links
================

| Resource					| Link 											|
| --------------------------|-----------------------------------------------|
| vox.space 				| https://vox.space 							|
| PHP 						| https://php.net 								|
| JSON						| http://www.json.org 							|
| RSS 1.0 specification 	| http://web.resource.org/rss/1.0/				|
| RSS 2.0 specification		| http://www.rssboard.org/rss-specification		|
| Atom Syndication Format	| https://tools.ietf.org/html/rfc4287			|
| Atom Publishing Protocol	| https://tools.ietf.org/html/rfc5023			|
| OPML 2.0 specification 	| http://dev.opml.org/spec2.html 				|
