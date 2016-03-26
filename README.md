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

- @name Tinambo
- @package Tinambo
- @author Marius Stanciu - Sergiu <marius@vox.space>
- @website https://vox.space
- @version 2.0.0
- @license Public Domain https://vox.space/LICENSE
