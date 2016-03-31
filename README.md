     ___________  __    _____  ___        __       ___      ___  _______     ______    
    ("     _   ")|" \  (\"   \|"  \      /""\     |"  \    /"  ||   _  "\   /    " \   
     )__/  \\__/ ||  | |.\\   \    |    /    \     \   \  //   |(. |_)  :) // ____  \  
        \\_ /    |:  | |: \.   \\  |   /' /\  \    /\\  \/.    ||:     \/ /  /    ) :) 
        |.  |    |.  | |.  \    \. |  //  __'  \  |: \.        |(|  _  \\(: (____/ //  
        \:  |    /\  |\|    \    \ | /   /  \\  \ |.  \    /:  ||: |_)  :)\        /   
         \__|   (__\_|_)\___|\____\)(___/    \___)|___|\__/|___|(_______/  \"_____/    

Description
===========

Tinambo is a one-file blogging system written in PHP (version doesnt' matter),
that doesn't have any other requirements than PHP to run. It doesn't need a
database, it stores the posts and pages into JSON text files.

Features
========

- posts, pages, image attachments.
- customizable URL slug for admin panel (security by obscurity is good).
- editor area for easy blog administration.
- contact form.
- full-text search.
- Facebook and Twitter integration.
- Google Analytics integration.
- image editing via Picozu Image Editor.
- Facebook or Disqus comments.
- built-in jQuery via Google AJAX libs.
- RSS and ATOM feeds.
- JSON API output so you can integrate 3rd party apps to post/view data
	to/from your blog.
- minify option that will minimize and obfuscate the HTML code.
- full HTML5-compliant.
- embed mode when you want to embed the blog into an existing design.
- many other things that you can discover in this 130Kb application (comments,
	lots of them, included in that).

Installation
============

Simply edit the settings at the top of the blog.php file, then copy the blog.php
file to your host and rename it if you want. The script will automatically create
the `images` `pages` and `posts` directories.

Configuration
=============

All Tinambo's settings are located at the top of the blog.php file, each is
commented as well as possible, make sure you only change what you need and
understand the implications. Changing the `key` to something different than
`false` is required before you can login to the admin panel.

License
=======

Tinambo is written by Marius Stanciu - Sergiu <marius@vox.space> and released
into the Public Domain. It can't get any more free than that.

Source code
===========

The application can be downloaded from https://vox.space or from GitHub.com
by issueing:

`git clone https://github.com/voxspace/tinambo.git`
