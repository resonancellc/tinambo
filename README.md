Description
===========

Tinambo is a one-file blogging system written in PHP that doesn't have any other
requirements than PHP to run. It doesn't need a database, it stores the posts
and pages into JSON text files.

Features
========

- posts, pages, image attachments
- editor area for easy blog administration
- contact form
- full-text search
- Facebook and Twitter integration
- Google Analytics integration
- Image editing via Picozu Image Editor
- Facebook or Disqus comments

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
