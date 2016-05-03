<?php

/**
 * This is free and unencumbered software released into the public domain.
 *
 * Anyone is free to copy, modify, publish, use, compile, sell, or
 * distribute this software, either in source code form or as a compiled
 * binary, for any purpose, commercial or non-commercial, and by any
 * means.
 *
 * In jurisdictions that recognize copyright laws, the author or authors
 * of this software dedicate any and all copyright interest in the
 * software to the public domain. We make this dedication for the benefit
 * of the public at large and to the detriment of our heirs and
 * successors. We intend this dedication to be an overt act of
 * relinquishment in perpetuity of all present and future rights to this
 * software under copyright law.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 *
 *  ___________  __    _____  ___        __       ___      ___  _______     ______    
 * ("     _   ")|" \  (\"   \|"  \      /""\     |"  \    /"  ||   _  "\   /    " \   
 *  )__/  \\__/ ||  | |.\\   \    |    /    \     \   \  //   |(. |_)  :) // ____  \  
 *     \\_ /    |:  | |: \.   \\  |   /' /\  \    /\\  \/.    ||:     \/ /  /    ) :) 
 *     |.  |    |.  | |.  \    \. |  //  __'  \  |: \.        |(|  _  \\(: (____/ //  
 *     \:  |    /\  |\|    \    \ | /   /  \\  \ |.  \    /:  ||: |_)  :)\        /   
 *      \__|   (__\_|_)\___|\____\)(___/    \___)|___|\__/|___|(_______/  \"_____/    
 *                                                                                  
 * the one-file blogging system
 * https://vox.space
 *
 * Written by Marius Stanciu - Sergiu <marius@vox.space>
 * Visit https://vox.space for more info
 * Version 2.1.0
 *
 */


/**
 * Tinambo Configuration class
 */
class TinamboConfig {

    private $settings = array(
        /* index page, rename this if you want, make sure the name of
         * this file is the same as the value below. changing this will
         * invalidate all links to your blog */
        'index' => 'blog.php',
        /* your blog title */
        'title' => 'My Blog',
        /* your blog description */
        'description' => 'Not just another blog',
        /* your e-mail address, used for the contact form, not visible
         * anywhere to your visitors */
        'email' => 'you@yourdomain.com',
        /* relative path to the folder containing post files */
        'postsDir' => 'posts/',
        /* relative path to the folder containing page files */
        'pagesDir' => 'pages/',
        /* relative path to the folder containing blog images */
        'imagesDir' => 'images/',
        /* number of posts per page to display on blog homepage */
        'postsPerPage' => 5,
        /* list of blog authors, the first name is the default author */
        'authors' => array('Me'),
        /* Facebook application id or false to disable Facebook integration */
        'facebookAppId' => false,
        /* Twitter handle or false to disable Twitter integration */
        'twitterHandle' => false,
        /* your website domain, http(s):// prefixed and with a trailing slash,
         * add the folder name if the blog resides inside a folder, for example:
         * http://www.mydomain.com/blog/ */
        'domain' => 'http://localhost/tinambo/',
        /* date format for blog posts */
        'dateFormat' => 'd-m-Y H:i',
        /* enable the pages system, excluding contact page */
        'enablePages' => true,
        /* whether the blog runs in embed mode, which strips the HTML header
         * and footer tags, including the stylesheet, meta tags, jQuery, icon
         * fonts, etc. Only if you know what you are doing, you will need to add
         * the required tags to your own template that embeds the blog */
        'embed' => false,
        /* session name for authentication, if you change this you need to
         * authenticate again */
        'sessionName' => 'tinambo_sess',
        /* enable debugging mode, which does not minify the HTML code */
        'debug' => true,
        /* enable visitors to search through the posts */
        'enableSearch' => true,
        /* enable blog image upload */
        'enableUpload' => true,
        /* enable JSON output */
        'enableJSON' => true,
        /* if you want the JSON endpoint to behave like an API, for example
         * allow you to create posts or pages remotely from a mobile or
         * desktop app, you will need to configure the two settings below
         * and make them really unique, at least 8 random alphanumeric chars */
        'apiKey' => false,
        'apiSecret' => false,
        /* enable OPML feeds */
        'enableOPML' => true,
        /* enable ATOM feeds */
        'enableATOM' => true,
        /* enable the contact form page */
        'enableContact' => true,
        /* Picozu API key if you want image editing functions in blog editor
         * or false to disable it */
        'picozuKey' => false,
        /* enable RSS 2.0 feeds */
        'enableRSS' => true,
        /* enable loading of external libraries from the libs/ directory */
        'enableLibs' => false,
        /* enable authors to actually delete post files */
        'enableDeleteFiles' => true,
        /* enable pretty URLs, requires URL rewriting enabled in your web
         * server and a .htaccess file */
        'rewriteURLs' => false,
        /* extension of post and page files. if you change this, you need
         * to rename all the files inside the posts/ and pages/ folders */
        'fileExtension' => 'json',
        /* Google Analytics tracking id or false to disable Google Analytics
         * integration */
        'gaTrackingId' => false,
        /* type of the comments form, can be 'facebook' for Facebook comments
         * (needs a facebookAppId), 'disqus' for Disqus comments (needs a
         * disqusId) or false to have comments disabled */
        'commentsType' => false,
        /* Disqus forum id or false to disable Disqus integration */
        'disqusId' => false,
        /* Text encoding, by default should be utf-8 */
        'textEncoding' => 'utf-8',
        /* enable JSON files encryption, you will need a base64-encoded encryption
         * key and a base64-encoded initialisation vector */
        /* ATTENTION once you enter a key and iv, DO NOT ever change them else
         * you will be unable to decrypt your JSON files */
        'enableEncryption' => false,
        'encryptionKey' => false,
        'encryptionIV' => false,
        /* your admin area slug, change this if you want more security */
        'slugs' => array(
            'editor' => 'editor',
            'blog' => 'blog'
        ),
        /* your auth key, CHANGE THIS to something only you know, and
         * change it at least monthly */
        'key' => false,
    );

    /**
     * Get a value from a configuration key
     *
     * @public
     * @returns String || Boolean
     * @param String $key
     */
    public function get($key) {
        return (isset($this->settings[$key]) ? $this->settings[$key] : false);
    }

    /**
     * Get the whole configuration array
     *
     * @public
     * @returns Array
     */
    public function getAll() {
        return $this->settings;
    }
}

/**
 * Main Tinambo class
 */
class TinamboBlog {

    public $paginator;
    public $template;
    public $security;
    public $css;
    public $js;
    public $config;

    private $version = '2.1.0';

    private $postFiles;
    private $posts;
    private $pageFiles;
    private $images;
    private $pages;

    private $lastPostId = 0;
    public $isOK = false;

    /**
     * Object constructor
     */
    public function __construct() {
        session_start();
        $this->config = new TinamboConfig();
        $this->security = new TinamboSecurity($this);
        $this->template = new TinamboTemplate($this);
        $this->js = new TinamboJS($this);
        $this->css = new TinamboCSS($this);
        $this->paginator = new TinamboPaginator($this);

        $this->_check();
        $this->_getPosts();
        $this->_getImages();

        if ($this->config->get('enablePages') == true) {
            $this->_getPages();
        }
        if (count($this->posts) > 0) {
            $this->_sortPosts();
        }
        $this->_parseURL();
    }

    /**
     * Check if the installation is ok, all directories exist
     * and they are writable.
     * 
     * @private
     * @returns Boolean
     */
    private function _check() {
        /** Check if the 'posts' directory exists, if not, create it
            with 744 rights */
        if (@file_exists($this->config->get('postsDir'))) {
            $this->isOK = true;
        } else if (@mkdir($this->config->get('postsDir'), 0744)) {
            $this->isOK = true;
        } else {
            $this->isOK = false;
        }
        /** Check if the 'images' directory exists, if not, create it
            with 744 rights */
        if (@file_exists($this->config->get('imagesDir'))) {
            $this->isOK = true;
        } else if (@mkdir($this->config->get('imagesDir'), 0744)) {
            $this->isOK = true;
        } else {
            $this->isOK = false;
        }
        /** Check if the 'pages' directory exists, if not, create it
            with 744 rights */
        if ($this->config->get('enablePages') && @file_exists($this->config->get('pagesDir'))) {
            $this->isOK = true;
        } else if ($this->config->get('enablePages') && @mkdir($this->config->get('pagesDir'), 0744)) {
            $this->isOK = true;
        } else {
            $this->isOK = false;
        }
        return $this->isOK;
    }

    /**
     * Check if the encryption is setup correctly and if we need to convert
     * old JSON files (not implemented yet)
     *
     * @todo
     * @public
     * @returns Boolean | Array
     */
    public function check_encryption() {
        if ($this->config->get('enableEncryption') &&
                $this->config->get('encryptionKey') == false &&
                $this->config->get('encryptionIV') == false) {
            return $this->security->generateKeyIV();
        }
        else if ($this->config->get('enableEncryption') &&
                $this->config->get('encryptionKey') == true &&
                $this->config->get('encryptionIV') == true) {
            return false;
        }
        else {
            return false;
        }
    }

    /**
     * Load an external file (if it exists)
     *
     * @public
     * @param String $file
     * @param String $type
     * @param String $data
     * @returns String
     */
    public function loadExternalFile($file, $type = 'template', $data = null) {
        $file = $this->security->sanitizeFileName($file);
        switch ($type) {
            case 'css':
                $fileName = 'css/' . $file . '.css';
                break;
            case 'js':
                $fileName = 'js/' . $file . '.js';
                break;
            case 'extension':
                if ($this->config->get('enableLibs') == true) {
                    $fileName = 'lib/' . $file . '.php';
                }
                break;
            case 'template':
            default:
                $fileName = 'templates/' . $file . '.php';
                break;
        }
        if (!file_exists($fileName)) {
            return $this->$type->get($file, $data);
        } else {
            ob_start();
            include($fileName);
            $page = ob_get_contents();
            ob_end_clean();
            return $page;
        }
    }

    /**
     * Parse the URL into something more manageable by Tinambo
     *
     * @private
     */
    private function _parseURL() {
        $out = '';
        $mode = (isset($_GET['mode'])) ? $this->security->cleanup($_GET['mode']) : 'index';
        $page = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
        $section = (isset($_GET['section'])) ? $this->security->cleanup($_GET['section']) : 'dashboard';
        $id = isset($_GET['id']) ? intval($_GET['id']) : false;
        $name = (isset($_GET['name'])) ? $this->security->sanitizeFileName($_GET['name']) : false;
        switch ($mode) {
            case 'css':
                header('Content-type: text/css');
                $out .= $this->loadExternalFile('site', 'css');
                break;
            case 'rss':
                if (!$this->config->get('enableRSS')) {
                    $this->get404();
                }
                header('Content-type: text/xml');
                $out .= $this->loadExternalFile('header_rss') .
                        $this->loadExternalFile('rss', 'template', $this->posts) .
                        $this->loadExternalFile('footer_rss');
                break;
            case 'opml':
                if (!$this->config->get('enableOPML')) {
                    $this->get404();
                }
                header('Content-type: text/x-opml');
                $out .= $this->loadExternalFile('header_opml') .
                        $this->loadExternalFile('opml', 'template', $this->posts) .
                        $this->loadExternalFile('footer_opml');
                break;
            case 'atom':
                if (!$this->config->get('enableATOM')) {
                    $this->get404();
                }
                header('Content-type: application/atom+xml');
                $out .= $this->loadExternalFile('header_atom') .
                        $this->loadExternalFile('atom', 'template', $this->posts) .
                        $this->loadExternalFile('footer_atom');
                break;
            case 'json':
                if (!$this->config->get('enableJSON')) {
                    $this->get404();
                }
                header('Content-type: application/json');
                $out .= $this->loadExternalFile('json');
                break;
            case 'js':
                header('Content-type: application/javascript');
                $out .= $this->loadExternalFile('main', 'js');
                break;
            case 'index':
                $out .= $this->loadExternalFile('header') .
                        $this->loadExternalFile('index', 'template', $this->paginate($page)) .
                        $this->loadExternalFile('footer');
                break;
            case 'login':
                $out .= $this->loadExternalFile('header') .
                        $this->loadExternalFile('login') .
                        $this->loadExternalFile('footer');
                break;
            case 'logout':
                if ($this->isLogin() == true) {
                    $this->logout();
                }
                header('Location: ' . $this->formatURL());
                break;
            case 'search':
                if (!$this->config->get('enableSearch')) {
                    $this->get404();
                }
                $out .= $this->loadExternalFile('header') .
                        $this->loadExternalFile('search') .
                        $this->loadExternalFile('footer');
                break;
            case 'contact':
                if (!$this->config->get('enablePages')) {
                    $this->get404();
                }
                $out .= $this->loadExternalFile('header') .
                        $this->loadExternalFile('contact') .
                        $this->loadExternalFile('footer');
                break;
            case 'post':
                if (!$id) {
                    $this->get404();
                }
                $post = $this->_getPostById($id);
                if ($post == false || !$post->isPublished()) {
                    $this->get404();
                }
                $out .= $this->loadExternalFile('header', 'template', $post) .
                        $this->loadExternalFile('post', 'template', $post) .
                        $this->loadExternalFile('footer');
                break;
            case 'page':
                if (!$this->config->get('enablePages') || !$id) {
                    $this->get404();
                }
                $page = $this->_getPageById($id);
                if ($page == false || !$page->isPublished()) {
                    $this->get404();
                }
                $out .= $this->loadExternalFile('header', 'template', $page) .
                        $this->loadExternalFile('page', 'template', $page) .
                        $this->loadExternalFile('footer');
                break;
            case $this->getSlug('editor'):
                $post = null;
                if (!$this->isLogin()) {
                    header('Location: ' . $this->formatURL('login'));
                }
                if ($section == 'editpost' || $section == 'deletepost') {
                    if (!$id || !$post = $this->_getPostById($id)) {
                        $this->get404();
                    }
                } else if ($section == 'editpage' || $section == 'deletepage') {
                    if (!$id || !$post = $this->_getPageById($id)) {
                        $this->get404();
                    }
                } else if ($section == 'info') {
                    if (!$name || !$post = $this->_getImageByName($name)) {
                        $this->get404();
                    }
                }
                $out .= $this->loadExternalFile('header') .
                        $this->loadExternalFile($section, 'template', $post) .
                        $this->loadExternalFile('footer');
                break;
            default:
                $this->get404();
                break;
        }
        if (!$this->config->get('debug')) {
            $out = preg_replace('/^\s+|\n|\r|\s+$/m', '', $out);
        }
        exit($out);
    }

    /**
     * Return the specified URL slug
     *
     * @public
     * @param String $slug
     * @returns String
     */
    public function getSlug($slug) {
        $slugs = $this->config->get('slugs');
        return $slugs[$slug];
    }

    /**
     * Format the URL according to the specified parameters
     *
     * @public
     * @param String $mode
     * @param Integer $id
     * @param String $page
     * @returns String
     */
    public function formatURL($mode = null, $id = null, $page = null) {
        if ($this->config->get('rewriteURLs') == true) {
            return $this->config->get('domain') .
                $this->getSlug('blog') .
                ($mode != null ? '/' . $mode : '') .
                ($id != null ? '/' . $id : '') .
                ($page != null ? '/' . $page : '');
        } else {
            $str = '';
            $str .= ($mode != null ? '?mode=' . $mode : '');
            $str .= ($id != null ? '&amp;id=' . $id : '');
            $str .= ($page != null ? '&amp;page=' . $page : '');
            return $this->config->get('domain') . $this->config->get('index') . ($str != '' ? $str : '');
        }
    }

    /**
     * Populate the array containing the list of blog posts
     *
     * @private
     */
    private function _getPosts() {
        $this->postFiles = glob($this->config->get('postsDir') . '*.' . $this->config->get('fileExtension'));
        foreach ($this->postFiles as $key => &$file) {
            $post = new TinamboPost($this, $file);
            if ($post->getId() > $this->lastPostId) {
                $this->lastPostId = $post->getId();
            }
            $this->posts[] = $post;
        }
    }

    /**
     * Populate the array containing the list of blog pages
     *
     * @private
     */
    private function _getPages() {
        $this->pageFiles = glob($this->config->get('pagesDir') . '*.' . $this->config->get('fileExtension'));
        foreach ($this->pageFiles as $key => &$file) {
            $page = new TinamboPost($this, $file, true);
            if ($page->getId() > $this->lastPostId) {
                $this->lastPostId = $page->getId();
            }
            $this->pages[] = $page;
        }
    }

    /**
     * Populate the array containing the list of uploaded images
     *
     * @private
     */
    private function _getImages() {
        $img = glob($this->config->get('imagesDir') . '*.{jpg,png,gif}', GLOB_BRACE);
        foreach ($img as $key => &$file) {
            $this->images[] = str_replace($this->config->get('imagesDir'), '', $file);
        }
    }

    /**
     * Search through the list of images and return the name of the image
     * if it does exist
     *
     * @public
     * @param String $id
     * @returns String || Boolean
     */
    public function _getImageByName($id) {
        for ($i = 0; $i < count($this->images); $i++) {
            if ($this->images[$i] == $id) {
                return $this->images[$i];
            }
        }
        return false;
    }

    /**
     * Return the array containing the list of posts
     *
     * @public
     * @returns Array
     */
    public function getPosts() {
        return $this->posts;
    }

    /**
     * Return the array containing the list of pages
     *
     * @public
     * @returns Array
     */
    public function getPages() {
        return $this->pages;
    }

    /**
     * Return the array containing the list of images
     *
     * @public
     * @returns Array
     */
    public function getImages() {
        if (count($this->images) == 0) {
            $this->_getImages();
        }
        return $this->images;
    }

    /**
     * Sort the blog posts according to the post date
     *
     * @private
     */
    private function _sortPosts() {
        usort($this->posts, function($a, $b) {
            return strtotime($b->getDate()) - strtotime($a->getDate());
        });
    }

    /**
     * Return a post by specifying its id
     *
     * @private
     * @param Integer $id
     * @returns TinamboPost || Boolean
     */
    private function _getPostById($id) {
        for ($i = 0; $i < count($this->posts); $i++) {
            if ($this->posts[$i]->getId() == $id) {
                return $this->posts[$i];
            }
        }
        return false;
    }

    /**
     * Return a page by specifying its id
     *
     * @private
     * @param Integer $id
     * @returns TinamboPost || Boolean
     */
    private function _getPageById($id) {
        for ($i = 0; $i < count($this->pages); $i++) {
            if ($this->pages[$i]->getId() == $id) {
                return $this->pages[$i];
            }
        }
        return false;
    }

    /**
     * Create a GUID
     *
     * @public
     * @returns String
     */
    public function getGuid() {
        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X',
            mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535),
            mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535),
            mt_rand(0, 65535), mt_rand(0, 65535));
    }

    /**
     * Search for the specified term in all the published posts
     *
     * @public
     * @returns String || Boolean
     * @param String $query
     */
    public function search($query) {
        $posts = $this->getPosts();
        $hasResults = false;
        $out = '<ul>';
        for ($i = 0; $i < count($posts); $i++) {
            if ($posts[$i]->isPublished() && stripos($posts[$i]->getContent(), $query) != false) {
                $out .= $this->template->tagAnchorWrap($posts[$i]->getPermalink(), $posts[$i]->getTitle());
                $hasResults = true;
            }
        }
        $out .= '</ul>';
        return ($hasResults == true) ? $out : false;
    }

    /**
     * Save incoming $_POST data into an actual blog post or page
     *
     * @public
     * @param Boolean $isPage
     * @returns Array
     */
    public function savePostData($isPage = false, $update = false, $oldPost = false) {
        $data = array(
            'error' => false,
            'result' => false,
            'post' => false,
            'message' => false
        );
        if ($this->requestPost('title')) {
            $post = new TinamboPost($this, $_POST, ($isPage == true) ? true : false);
            $filename = $this->security->cleanup($post->getTitle()) . '.' . $this->config->get('fileExtension');
            if ($update == true && $oldPost != false) {
                $newPost = new TinamboPost($this, $_POST, ($isPage == true) ? true : false);
                if (!$newPost->saveAs($oldPost->getFile())) {
                    $data['error'] = _L::get('There was an error saving your ' . (($isPage == true) ? 'page' : 'post') . ' file. Please try again!');
                    $data['result'] = false;
                } else {
                    $data['message'] = _L::get((($isPage == true) ? 'Page' : 'Post') . ' successfully updated.');
                    $data['result'] = true;
                    $data['post'] = $newPost;
                }
            } else {
                if (file_exists((($isPage == true) ? $this->config->get('pagesDir') : $this->config->get('postsDir')) . $filename)) {
                    $data['error'] = _L::get('There is already an existing ' . (($isPage == true) ? 'page' : 'post') . ' with this name! Please choose another.');
                    $data['result'] = false;
                } else if (!$post->saveAs((($isPage == true) ? $this->config->get('pagesDir') : $this->config->get('postsDir')) . $filename)) {
                    $data['error'] = _L::get('There was an error saving your ' . (($isPage == true) ? 'page' : 'post') . ' file. Please try again!');
                    $data['result'] = false;
                } else {
                    $data['message'] = _L::get((($isPage == true) ? 'Page' : 'Post') . ' successfully created.');
                    $data['result'] = true;
                }
            }
        } else {
            $data['error'] = _L::get('Invalid method data.');
            $data['result'] = false;
        }
        return $data;
    }

    /**
     * Paginate the list of posts by using the request URI
     *
     * @public
     * @returns String
     * @param Integer $page
     */
    public function paginate($page) {
        return $this->paginator->paginate($this->posts, $_SERVER['REQUEST_URI'], $page);
    }

    /**
     * Create the URL of the index page by prepending the blog domain
     *
     * @public
     * @returns String
     */
    public function getIndex() {
        return $this->config->get('domain') . $this->config->get('index');
    }

    /**
     * Return the blog title as specified in configuration
     *
     * @public
     * @returns String
     */
    public function getTitle() {
        return $this->config->get('title');
    }

    /**
     * Return the blog description as specified in configuration
     *
     * @public
     * @returns String
     */
    public function getDescription() {
        return $this->config->get('description');
    }

    /**
     * Return the blog email as specified in configuration
     *
     * @public
     * @returns String
     */
    public function getEmail() {
        return $this->config->get('email');
    }

    /**
     * Get the list of the blog authors
     *
     * @public
     * @returns Array
     */
    public function getAuthors() {
        return $this->config->get('authors');
    }

    /**
     * Create the URL of the admin panel
     *
     * @public
     * @returns String
     */
    public function getAdminURL() {
        return $this->getIndex() . '?mode=' . $this->getSlug('editor');
    }

    /**
     * Return the version of the blog software
     *
     * @public
     * @returns String
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * Output a 404 not found page
     *
     * @public
     */
    public function get404() {
        header('HTTP/1.0 404 Not Found');
        exit($this->loadExternalFile('header') .
            $this->loadExternalFile('404') .
            $this->loadExternalFile('footer'));
    }

    /**
     * Output a 401 not authorized page
     *
     * @public
     */
    public function get401() {
        header('HTTP/1.0 401 Not Authorized');
        exit($this->loadExternalFile('header') .
            $this->loadExternalFile('401') .
            $this->loadExternalFile('footer'));
    }

    /**
     * Output a string with the Tinambo website link
     *
     * @public
     * @returns String
     */
    public function getPromotion() {
        return _L::get('running on') . ' ' . $this->template->tagAnchor('https://vox.space', 'Tinambo', 'tinambo', '_blank');
    }

    /**
     * Return the authentication key
     *
     * @public
     * @returns String
     */
    public function getAuthKey() {
        return $this->config->get('key');
    }

    /**
     * Check whether the currently logged in user is in the admin panel
     *
     * @public
     * @returns Boolean
     */
    public function isAdmin() {
        $mode = (isset($_GET['mode'])) ? $this->security->cleanup($_GET['mode']) : 'index';
        return (($this->isLogin()) && ($mode == $this->getSlug('editor'))) ? true : false;
    }

    /**
     * Return $_GET data from the specified key
     *
     * @public
     * @param String $key
     * @returns $String || Boolean
     */
    public function requestGet($key, $return = false) {
        if (isset($_GET[$key])) {
            return $this->security->sanitize($_GET[$key]);
        } else {
            return $return;
        }
    }

    /**
     * Return $_POST data from the specified key
     *
     * @public
     * @param String $key
     * @returns $String || Boolean
     */
    public function requestPost($key, $return = false) {
        if (isset($_POST[$key])) {
            return $this->security->sanitize($_POST[$key]);
        } else {
            return $return;
        }
    }

    /**
     * Check whether the current request is a valid API request
     *
     * @public
     * @returns Boolean
     */
    public function isAPIrequest() {
        $key = $this->requestPost('api_key');
        $secret = $this->requestPost('api_secret');
        if (($key != false && $secret != false) && ($key == $this->config->get('apiKey') && $secret == $this->config->get('apiSecret'))) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Check whether the specified user is an author
     *
     * @public
     * @returns Boolean
     * @param String $author
     */
    public function isAuthor($author) {
        $authors = $this->getAuthors();
        foreach ($authors as $key => $value) {
            if ($value == $author) {
                return true;
            }
        }
        return false;
    }

    /**
     * Increment the last post id and return it
     *
     * @public
     * @returns Integer
     */
    public function getNewPostId() {
        return $this->lastPostId + 1;
    }

    /**
     * Check if the current user is logged in
     *
     * @public
     * @returns Boolean
     */
    public function isLogin() {
        if (isset($_SESSION[$this->config->get('sessionName')]) && password_verify($this->getAuthKey(), $_SESSION[$this->config->get('sessionName')])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get info from the URL
     *
     * @public
     * @returns String || Array
     * @param String $fragment
     */
    public function getURLInfo($fragment) {
        if ($fragment) {
            $url = parse_url($this->config->get('domain'));
            return $url[$fragment];
        } else {
            return parse_url($this->config->get('domain'));
        }
    }

    /**
     * Log out the current user and destroy the session and the associated
     * cookie
     *
     * @public
     * @returns Boolean
     */
    public function logout() {
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        unset($_SESSION[$this->config->get('sessionName')]);
        session_destroy();
        return true;
    }

    /**
     * Log in the current user using the specified data
     *
     * @public
     * @param String $author
     * @param String $password
     * @returns Boolean
     */
    public function login($author, $password) {
        if ($author != '' && $password != '') {
            if ($this->isAuthor($author) && $password == $this->getAuthKey()) {
                $_SESSION[$this->config->get('sessionName')] = password_hash($this->getAuthKey(), PASSWORD_DEFAULT);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}

/**
 * Tinambo Template generation class
 */
class TinamboTemplate {

    private $blog;
    private $adminPages = array();
    private $shortCodes = array();

    /**
     * Object constructor
     * 
     * @param TinamboBlog $blog
     */
    public function __construct($blog) {
        $this->blog = $blog;
        $this->adminPages = array(
            _L::get('Dashboard') => $blog->getAdminURL(),
            _L::get('Posts') => array(
                _L::get('List Posts') => $blog->getAdminURL() . '&amp;section=posts',
                _L::get('New Post') => $blog->getAdminURL() . '&amp;section=newpost'
            ),
            _L::get('Images') => array(
                _L::get('List Images') => $blog->getAdminURL() . '&amp;section=images',
                _L::get('Upload Image') => $blog->getAdminURL() . '&amp;section=newimage'
            ),
            _L::get('Pages') => array(
                _L::get('List Pages') => $blog->getAdminURL() . '&amp;section=pages',
                _L::get('New Page') => $blog->getAdminURL() . '&amp;section=newpage'
            ),
            _L::get('Configuration') => $blog->getAdminURL() . '&amp;section=config',
            _L::get('Logout') => $blog->formatURL('logout')
        );
        if (!$this->blog->config->get('enablePages')) {
            unset($this->adminPages[_L::get('Pages')]);
        }
        if (!$this->blog->config->get('enableUpload')) {
            unset($this->adminPages[_L::get('Images')][_L::get('Upload Image')]);
        }
    }

    /**
     * Return a string that can be used as the top site menu
     *
     * @public
     * @returns String
     */
    public function getTopMenu() {
        $pages = $this->blog->getPages();
        $out = '';
        if ($this->blog->config->get('enablePages') == true) {
            $out .= $this->getPagesList('li');
        }
        if ($this->blog->config->get('enableSearch') == true) {
            $out .= $this->tagAnchorWrap($this->blog->formatURL('search'), _L::get('Search'));
        }
        if ($this->blog->config->get('enableContact') == true) {
            $out .= $this->tagAnchorWrap($this->blog->formatURL('contact'), _L::get('Contact'));
        }
        return $out;
    }

    /**
     *
     *
     * @private
     * @returns String
     * @param String $mode
     * @param Integer $level
     * @param Integer $parent
     * @param Integer $exclude
     */
    private function _getPagesChildren($mode = 'li', $level = 0, $parent, $exclude = false) {
        $out = '';
        $children = $parent->getChildren();
        if ($children != false) {
            switch ($mode) {
                case 'li':
                    $out .= '<ul class="sub-menu">';
                    for ($x = 0; $x < count($children); $x++) {
                        $c = $children[$x]->getChildren();
                        $out .= '<li>' . $this->tagAnchor($this->blog->formatURL('page', $children[$x]->getId()), $children[$x]->getTitle());
                        if ($c != false) {
                            $out .= $this->_getPagesChildren($mode, $level, $children[$x]);
                        }
                        $out .= '</li>';
                    }
                    $out .= '</ul>';
                    break;
                case 'select':
                    $indent = '';
                    for ($i = 0; $i < $level + 4; $i++) {
                        $indent .= '&nbsp;';
                    }
                    for ($x = 0; $x < count($children); $x++) {
                        if ($exclude != $children[$x]->getId()) {
                            $c = $children[$x]->getChildren();
                            $out .= '<option value="' . $children[$x]->getId() . '">' . $indent . $children[$x]->getTitle() . '</option>';
                            if ($c != false) {
                                $out .= $this->_getPagesChildren($mode, $level + 4, $children[$x]);
                            }
                        }
                    }
                    break;
                case 'td':
                    $indent = '';
                    for ($i = 0; $i < $level + 4; $i++) {
                        $indent .= '&nbsp;';
                    }
                    for ($x = 0; $x < count($children); $x++) {
                        if ($exclude != $children[$x]->getId()) {
                            $c = $children[$x]->getChildren();
                            $out .= '<tr>
                            <td>' . $children[$x]->getId() . '</td>
                            <td><span class="entypo-right-open"></span>' . $indent . $children[$x]->getTitle() . '</td>
                            <td>' . ($children[$x]->isPublished() ? '<span class="entypo-check"></span>' : '') . '</td>
                            <td>
                                <a title="' . _L::get('View this Page') . '" class="entypo-upload" href="' . $this->blog->formatURL('page', $children[$x]->getId()) . '"></a> 
                                <a title="' . _L::get('Edit this Page') . '" class="entypo-doc-text" href="' . $this->blog->getAdminURL() . '&amp;section=editpage&amp;id=' . $children[$x]->getId() . '"></a> 
                                ' . ($this->blog->config->get('enableDeleteFiles') == true ? '<a title="' . _L::get('Delete this Page') . '" onclick="return confirm(\'' . _L::get('Are you sure you want to delete this page?') . '\');" class="entypo-trash" href="' . $this->blog->getAdminURL() . '&amp;section=deletepage&amp;id=' . $children[$x]->getId() . '"></a>' : '') .
                                    '</td>
                            </tr>';
                            if ($c != false) {
                                $out .= $this->_getPagesChildren($mode, $level + 4, $children[$x]);
                            }
                        }
                    }
                    break;
            }
        }
        return $out;
    }

    /**
     * Build the list of authors as a specific HTML tag
     *
     * @public
     * @returns String
     * @param Boolean $selected
     * @param String $as
     */
    public function getAuthorsList($as = 'select', $selected = false) {
        $out = '';
        $authors = $this->blog->getAuthors();
        if (count($authors) > 1) {
            $out .= '<select class="last" name="author">';
            for ($i = 0; $i < count($authors); $i++) {
                $out .= '<option ' . ($selected == $authors[$i] ? 'selected="selected"' : '') . 'value="' . $authors[$i] . '">' . $authors[$i] . '</option>';
            }
            $out .= '</select>';
        }
        return $out;
    }

    /**
     * Build the pages list as a specific HTML tag
     *
     * @public
     * @returns String
     * @param String $as
     * @param Boolean $selected
     * @param Integer $exclude
     */
    public function getPagesList($as = 'select', $selected = false, $exclude = false) {
        $out = '';
        $pages = $this->blog->getPages();
        switch ($as) {
            case 'select':
                $out .= '<option value="false">-- ' . _L::get('select parent') . ' --</option>';
                for ($i = 0; $i < count($pages); $i++) {
                    if ($selected == $pages[$i]->getId()) {
                        $select = ' selected="selected"';
                    } else {
                        $select = '';
                    }
                    if (($pages[$i]->getParent() == false) && ($exclude != $pages[$i]->getId())) {
                        $out .= '<option' . $select . ' value="' . $pages[$i]->getId() . '">' . $pages[$i]->getTitle() . '</option>';
                        $out .= $this->_getPagesChildren('select', 0, $pages[$i], $exclude);
                    }
                }
                break;
            case 'li':
                for ($i = 0; $i < count($pages); $i++) {
                    if ($pages[$i]->getParent() == false && $pages[$i]->isPublished()) {
                        $out .= '<li>' . $this->tagAnchor($this->blog->formatURL('page', $pages[$i]->getId()), $pages[$i]->getTitle());
                        $out .= $this->_getPagesChildren('li', 0, $pages[$i]);
                        $out .= '</li>';
                    }
                }
                break;
            case 'td':
                for ($i = 0; $i < count($pages); $i++) {
                    if ($pages[$i]->getParent() == false) {
                        $out .= '<tr>
                            <td>' . $pages[$i]->getId() . '</td>
                            <td>' . $pages[$i]->getTitle() . '</td>
                            <td>' . ($pages[$i]->isPublished() ? '<span class="entypo-check yes">' . _L::get('yes') . '</span>' : '') . '</td>
                            <td>
                                <a title="' . _L::get('View this Page') . '" class="entypo-upload" href="' . $this->blog->formatURL('page', $pages[$i]->getId()) . '"></a> 
                                <a title="' . _L::get('Edit this Page') . '" class="entypo-doc-text" href="' . $this->blog->getAdminURL() . '&amp;section=editpage&amp;id=' . $pages[$i]->getId() . '"></a> 
                                ' . ($this->blog->config->get('enableDeleteFiles') == true ? '<a title="' . _L::get('Delete this Page') . '" onclick="return confirm(\'' . _L::get('Are you sure you want to delete this page?') . '\');" class="entypo-trash" href="' . $this->blog->getAdminURL() . '&amp;section=deletepage&amp;id=' . $pages[$i]->getId() . '"></a>' : '') .
                                '</td>
                            </tr>';
                        $out .= $this->_getPagesChildren('td', 0, $pages[$i]);
                    }
                }
                break;
        }
        return $out;
    }

    /**
     * Return a string used as the top feeds menu
     *
     * @public
     * @returns String
     */
    public function getFeedsMenu() {
        $feeds = array();
        if ($this->blog->config->get('enableRSS') == true) {
            $feeds[] = '<a href="' . $this->blog->formatURL('rss') . '"><span class="entypo-rss"> ' . _L::get('rss') . '</span></a>';
        }
        if ($this->blog->config->get('enableATOM') == true) {
            $feeds[] = '<a href="' . $this->blog->formatURL('atom') . '"><span class="entypo-rss"> ' . _L::get('atom') . '</span></a>';
        }
        if ($this->blog->isLogin() == true) {
            $feeds[] = '<a href="' . $this->blog->formatURL($this->blog->getSlug('editor')) . '"><span class="entypo-feather"> ' . _L::get('editor') . '</span></a>';
        }
        if (count($feeds) > 0) {
            return '<li>' . implode('', $feeds) . '</li>';
        } else {
            return '';
        }
    }

    /**
     *
     *
     * @private
     * @returns String
     */
    private function _getOptionTopMenu() {
        $pages = $this->blog->getPages();
        $out = '<option value="' . $this->blog->formatURL() . '">' . _L::get('Home') . '</option>';
        if ($this->blog->config->get('enablePages') == true) {
            for ($i = 0; $i < count($pages); $i++) {
                $out .= '<option value="' . $this->blog->formatURL('page', $pages[$i]->getId()) . '">' . $pages[$i]->getTitle() . '</option>';
            }
        }
        $out .= '<option value="' . $this->blog->formatURL('contact') . '">' . _L::get('Contact') . '</option>';
        return $out;
    }

    /**
     *
     *
     * @private
     * @returns String
     * @param Array $menu
     * @param Boolean $li
     */
    private function _generateMenu($menu, $li = true) {
        $out = '';
        foreach ($menu as $key => $value) {
            if (is_array($value)) {
                $out .= ($li == true ? '<li><a href="#">' . $key . '</a>' : '<optgroup label="' . $key . '">') . '<ul class="sub-menu">';
                $out .= $this->_generateMenu($value, $li);
                $out .= '</ul>' . ($li == true ? '</li>' : '</optgroup>');
            } else {
                $out .= ($li == true ? $this->tagAnchorWrap($value, $key) : '<option value="' . $value . '">' . $key . '</option>');
            }
        }
        return $out;
    }

    /**
     * Create a meta tag
     *
     * @public
     * @returns String
     * @param String $key
     * @param String $value
     */
    public function tagMeta($key, $value) {
        return '<meta property="' . $key . '" content="' . $value . '" />';
    }

    /**
     * Create a script tag
     *
     * @public
     * @returns String
     * @param String $value
     */
    public function tagScript($value) {
        return '<script src="' . $value . '"></script>';
    }

    /**
     * Create a stylesheet tag
     *
     * @public
     * @returns String
     * @param String $value
     */
    public function tagCSS($value) {
        return '<link rel="stylesheet" type="text/css" href="' . $value . '" />';
    }

    /**
     * Create an input button tag
     *
     * @public
     * @returns String
     * @param String $value
     */
    public function tagButton($value) {
        return '<input type="submit" class="button" value="' . $value . '" />';
    }

    /**
     * Return a string that contains a site message or error
     *
     * @public
     * @returns String
     * @param String $value
     * @param Boolean $error
     */
    public function message($value, $error = false) {
        return '<div class="message' . ($error == true ? ' error' : ' info') . '">' . $value . '</div>';
    }

    /**
     * Output an anchor tag
     *
     * @public
     * @param String $href
     * @param String $title
     * @param String $className
     * @param String $targetName
     * @returns String
     */
    public function tagAnchor($href, $title, $className = '', $targetName = '') {
        return '<a href="' . $href . '" class="' . $className . '" target="' . $targetName . '">' . $title . '</a>';
    }

    /**
     * Output an anchor tag wrapped into another set of tags
     *
     * @public
     * @param String $href
     * @param String $title
     * @param String $wrapIn
     * @param String $className
     * @param String $targetName
     * @returns String
     */
    public function tagAnchorWrap($href, $title, $wrapIn = 'li', $className = '', $targetName = '') {
        $out = '<' . $wrapIn . '>';
        $out .= $this->tagAnchor($href, $title, $className = '', $targetName = '');
        $out .= '</' . $wrapIn . '>';
        return $out;
    }

    /**
     * Output a string as a site header with title
     *
     * @public
     * @param String $title
     * @returns String
     */
    public function tagHeader($title) {
        return '<header class="entry-header clearfix"><h1 class="entry-title">' . $title . '</h1></header>';
    }

    /**
     * Compose the contents of various site sections
     *
     * @public
     * @param String $template
     * @param TinamboPost $post
     */
    public function get($template, $post = null) {
        $out = '';
        $b = $this->blog;
        switch ($template) {
            case 'dashboard':
                $enc = $b->check_encryption();
                $out .= $this->tagHeader(_L::get('Dashboard')) . 
                '<div class="clearfix">
                    <p>' . _L::get('Welcome to Tinambo, the one-file blogging system. You heard it right, you only need this file to run your own blog, complete with posts, pages, contact form, custom themes, Facebook integration and more.') . '</p>
                    <p>' . _L::get('Start by checking the menu above, remember to change your authentication key, which currently is') . ' <span class="key' . ($b->getAuthKey() == 'x0x0' ? ' notok' : ' ok') . '">' . $b->getAuthKey() . '</span> ' . _L::get('and maybe change your editor slug, for better security.') . '</p>
                    <p>' . _L::get('All the configuration is done by opening this file in a text editor, looking at the variables at the beginning of the file and change as needed.') . '</p>' .
                        (!$b->isOK ? '<p class="note">' . _L::get('Tinambo could not create the required folders') . ', <code>' . $b->config->get('postsDir') . '</code>, <code>' . $b->config->get('pagesDir') . '</code> ' . _L::get('and') . ' <code>' . $b->config->get('imagesDir') . '</code> ' . _L::get('so you will need to do that before you can start using your website.') . '</p>' : '') .
                        ($enc !== false ? '<fieldset><legend>' . _L::get('Encryption') . '</legend><span class="label">' . _L::get('Key') . ':</span><span class="key ok">' . base64_encode($enc['key']) . '</span><br /><span class="label">' . _L::get('IV') . ':</span><span class="key ok">' . base64_encode($enc['iv']) . '</span><p>' . _L::get('Check out the documentation on how to use them, encryption will not be enabled until you copy them into the php file.') . '</p></fieldset>' : '') .
                        '<p class="greet">' . _L::get('Thank you for using') . ' <span class="tinambo">Tinambo</span>!</p> 
                </div>';
                break;
            case 'config':
                $out .= $this->tagHeader(_L::get('Configuration')) . 
                '<table>
                    <thead>
                        <tr>
                            <th>' . _L::get('Key') . '</th>
                            <th>' . _L::get('Value') . '</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>';
                foreach ($b->config->getAll() as $key => $value) {
                    if (!is_array($value) && $key != 'key') {
                        if (is_bool($value) && $value) {
                            $val = '<span class="entypo-check yes">' . _L::get('yes') . '</span>';
                        } else if (is_bool($value) && !$value) {
                            $val = '<span class="entypo-block no">' . _L::get('no') . '</span>';
                        } else {
                            $val = $value;
                        }
                        $out .= '<tr>
                                <td>' . $key . '</td>
                                <td>' . $val . '</td>
                                <td></td>
                            </tr>';
                    }
                }
                $out .= '</tbody>
                    <tfoot>
                        <tr>
                            <th>' . _L::get('Key') . '</th>
                            <th>' . _L::get('Value') . '</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>';
                break;
            case 'posts':
                $posts = $b->getPosts();
                $out .= '<header class="entry-header clearfix">
                    <h1 class="entry-title left">' . _L::get('Posts') . '</h1>
                    <p class="buttons">
                        <a class="button entypo-feather" href="' . $b->getAdminURL() . '&amp;section=newpost">' . _L::get('New Post') . '</a>
                    </p>
                </header>
                <table>
                    <thead>
                        <tr>
                            <th class="small"></th>
                            <th>' . _L::get('Title') . '</th>
                            <th>' . _L::get('Category') . '</th>
                            <th>' . _L::get('Author') . '</th>
                            <th>' . _L::get('Date') . '</th>
                            <th class="small">' . _L::get('sticky') . '</th>
                            <th class="small">' . _L::get('publish') . '</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>';
                if (count($posts) > 0) {
                    for ($i = 0; $i < count($posts); $i++) {
                        $out .= '<tr>
                            <td>' . $posts[$i]->getId() . '</td>
                            <td>' . $posts[$i]->getTitle() . '</td>
                            <td>' . $posts[$i]->getCategory() . '</td>
                            <td>' . $posts[$i]->getAuthor() . '</td>
                            <td>' . $posts[$i]->getDate() . '</td>
                            <td>' . ($posts[$i]->isSticky() ? '<span class="entypo-check yes">' . _L::get('yes') . '</span>' : '') . '</td>
                            <td>' . ($posts[$i]->isPublished() ? '<span class="entypo-check yes">' . _L::get('yes') . '</span>' : '') . '</td>
                            <td>
                                <a title="' . _L::get('View this Post') . '" class="entypo-upload" href="' . $b->formatURL('post', $posts[$i]->getId()) . '"></a> 
                                <a title="' . _L::get('Edit this Post') . '" class="entypo-doc-text" href="' . $b->getAdminURL() . '&amp;section=editpost&amp;id=' . $posts[$i]->getId() . '"></a>' .
                                ($b->config->get('enableDeleteFiles') == true ? '<a title="' . _L::get('Delete this Post') . '" onclick="return confirm(\'' . _L::get('Are you sure you want to delete this post?') . '\');" class="entypo-trash" href="' . $b->getAdminURL() . '&amp;section=deletepost&amp;id=' . $posts[$i]->getId() . '"></a>' : '') . '
                            </td>
                        </tr>';
                    }
                } else {
                    $out .= '<tr>
                            <td colspan="8">' . _L::get('You haven`t created any posts yet.') . '</td>
                        </tr>';
                }
                $out .= '</tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>' . _L::get('Title') . '</th>
                            <th>' . _L::get('Category') . '</th>
                            <th>' . _L::get('Author') . '</th>
                            <th>' . _L::get('Date') . '</th>
                            <th>' . _L::get('sticky') . '</th>
                            <th>' . _L::get('publish') . '</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>';
                break;
            case 'pages':
                if (!$b->config->get('enablePages')) {
                    $b->get404();
                }
                $pages = $b->getPages();
                $out .= '<header class="entry-header clearfix">
                    <h1 class="entry-title left">' . _L::get('Pages') . '</h1>
                    <p class="buttons">
                        <a class="button entypo-feather" href="' . $b->getAdminURL() . '&amp;section=newpage">' . _L::get('New Page') . '</a>
                    </p>
                </header>
                <table>
                    <thead>
                        <tr>
                            <th class="small"></th>
                            <th>' . _L::get('Title') . '</th>
                            <th class="small">' . _L::get('publish') . '</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>';
                if (count($pages) > 0) {
                    $out .= $this->getPagesList('td');
                } else {
                    $out .= '<tr>
                            <td colspan="4">' . _L::get('You haven`t created any pages yet.') . '</td>
                        </tr>';
                }
                $out .= '</tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>' . _L::get('Title') . '</th>
                            <th class="small">' . _L::get('publish') . '</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>';
                break;
            case 'images':
                $out .= '<header class="entry-header clearfix">
                        <h1 class="entry-title left">' . _L::get('Images') . '</h1>' .
                        ($b->config->get('enableUpload') == true ? '<p class="buttons"><a class="button entypo-feather" href="' . $b->getAdminURL() . '&amp;section=newimage">' . _L::get('Upload Image') . '</a></p>' : '') . '
                </header>
                <div class="images clearfix">';
                $images = $b->getImages();
                for ($i = 0; $i < count($images); $i++) {
                    $out .= '<div>
                        <a target="_blank" title="' . _L::get('Download image') . '" href="' . $b->config->get('imagesDir') . $images[$i] . '" class="controls preview entypo-download"></a>
                        <a title="' . _L::get('Image information') . '" href="' . $b->getAdminURL() . '&amp;section=info&amp;name=' . $images[$i] . '" class="controls image-info entypo-picture"></a>';
                    if ($b->config->get('picozuKey')) {
                        $out .= '<a title="' . _L::get('Open image in Picozu') . '" data-popup="true" href="' . $b->config->get('domain') . $images[$i] . '" class="controls picozu entypo-brush"></a>';
                    }
                    $out .= '<img src="' . $b->config->get('imagesDir') . $images[$i] . '" />
                        <input readonly type="text" onfocus="this.select();" class="imagepath" value="' . $b->config->get('imagesDir') . $images[$i] . '" />
                    </div>';
                }
                $out .= '</div>';
                break;
            case 'newimage':
                if (!$b->config->get('enableUpload')) {
                    $b->get404();
                }
                $out .= $this->tagHeader(_L::get('Upload Image'));
                if (isset($_FILES['image'])) {
                    $error = false;
                    if ($_FILES['image']['error'] != UPLOAD_ERR_OK) {
                        $error = true;
                    }
                    $info = getimagesize($_FILES['image']['tmp_name']);
                    if ($info == false) {
                        $error = true;
                    }
                    if (($info[2] != IMAGETYPE_GIF) && ($info[2] != IMAGETYPE_JPEG) && ($info[2] != IMAGETYPE_PNG)) {
                        $error = true;
                    }
                    if ($error) {
                        $out .= $this->message(_L::get('Upload failed. Please try again!'), true);
                    } else {
                        $uploadfile = $b->config->get('imagesDir') . basename($_FILES['image']['name']);
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                            $out .= $this->message(_L::get('File is valid, and was successfully uploaded.'));
                        } else {
                            $out .= $this->message(_L::get('Upload failed. Please try again!'), true);
                        }
                    }
                }
                $out .= '<form style="margin-bottom:5px" enctype="multipart/form-data" method="post">
                    <input name="image" type="file" value="' . _L::get('Upload image') . '" />
                    <br /><br />
                    <p>' . $this->tagButton(_L::get('Upload')) . '</p>
                </form>';
                break;
            case 'newpost':
                $out .= $this->tagHeader(_L::get('New Post'));
                if ($b->requestPost('title')) {
                    $result = $b->savePostData();
                    if ($result['result'] == true) {
                        $out .= $this->message($result['message']);
                    } else {
                        $out .= $this->message($result['error'], true);
                    }
                }
                $out .= '<form method="post">
                    <input type="text" placeholder="' . _L::get('Title') . '" name="title" />
                    <input class="last" type="text" placeholder="' . _L::get('Category') . '" name="category" />
                    <input type="text" placeholder="' . _L::get('Image') . '" name="headerImage" />'
                        . $this->getAuthorsList('select') .
                        '<input type="text" placeholder="' . date($b->config->get('dateFormat')) . '" name="date" style="width:250px" value="' . date($b->config->get('dateFormat')) . '" />
                    <label>' . _L::get('sticky') . '</label><input type="checkbox" name="sticky" value="true" />
                    <label>' . _L::get('publish') . '</label><input type="checkbox" name="published" value="true" />
                    <textarea cols="80" id="editor" name="content" rows="10"></textarea>
                    <p>' . $this->tagButton(_L::get('Create')) . '</p>
                </form>';
                break;
            case 'newpage':
                if (!$b->config->get('enablePages')) {
                    $b->get404();
                }
                $out .= $this->tagHeader(_L::get('New Page'));
                if ($b->requestPost('title')) {
                    $result = $b->savePostData(true);
                    if ($result['result'] == true) {
                        $out .= $this->message($result['message']);
                    } else {
                        $out .= $this->message($result['error'], true);
                    }
                }
                $out .= '<form method="post">
                    <input type="text" placeholder="' . _L::get('Title') . '" name="title" />
                    <select style="width:420px" name="parent">' . $this->getPagesList('select') . '</select>
                    <label>' . _L::get('publish') . '</label><input type="checkbox" name="published" value="true" />
                    <textarea cols="80" id="editor" name="content" rows="10"></textarea>
                    <p>' . $this->tagButton(_L::get('Create')) . '</p>
                </form>';
                break;
            case 'search':
                if (!$b->config->get('enableSearch')) {
                    $b->get404();
                }
                $out .= $this->tagHeader(_L::get('Search'));
                $out .= '<div class="search">
                        <form method="post">
                            <input type="text" placeholder="' . _L::get('Your search query') . '" name="search" class="search" />
                            <p>' . $this->tagButton(_L::get('Search')) . '</p>
                        </form>';
                if ($b->requestPost('search') && strlen($b->requestPost('search')) > 3) {
                    $search = $b->requestPost('search');
                    if ($search != '') {
                        $out .= '<h1 class="entry-title">' . _L::get('Search Results for ') . '<i>' . $search .'</i></h1>';
                        $results = $b->search($search);
                        if ($results != false) {
                            $out .= $results;
                        } else {
                            $out .= $this->message(_L::get('There are no results for the specified search term.'), false);
                        }
                    } else {
                        $out .= $this->message(_L::get('Please fill in the search term.'), true);
                    }
                }
                $out .= '</div>';
                break;
            case 'contact':
                if (!$b->config->get('enableContact')) {
                    $b->get404();
                }
                $out .= '<article class="page">
                    <h1 class="entry-title">' . _L::get('Contact') . '</h1>';
                if ($b->requestPost('content')) {
                    $subject = $b->requestPost('subject');
                    $email = $b->requestPost('email');
                    $name = $b->requestPost('name');
                    $message = $b->requestPost('content');
                    if ($name != '' && $subject != '' && $email != '' && $message != '') {
                        $_message = _L::get('You received a contact message on') . ' ' . $b->getTitle() . ' ' . _L::get('from') . ' ' . $name . ' <' . $email . '>' . "\r\n\r\n" . $message;
                        $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $b->getEmail() . "\r\n" . 'X-Mailer: Tinambo v' . $b->getVersion();
                        if (!mail($b->getEmail(), $subject, $_message, $headers)) {
                            $out .= $this->message(_L::get('There was an error sending the message. Please try again!'), true);
                        } else {
                            $out .= $this->message(_L::get('Your message has been successfully sent. Thank you!'));
                        }
                    } else {
                        $out .= $this->message(_L::get('Please fill in all the fields.'), true);
                    }
                }
                $out .= '<div class="contact">
                        <p>
                            <em>' . _L::get('Drop me a line and let`s get to know eachother!') . '</em>
                        </p>
                        <form method="post">
                            <input type="text" placeholder="' . _L::get('Your name') . '" name="name" />
                            <input type="text" placeholder="' . _L::get('Your e-mail') . '" name="email" />
                            <input type="text" placeholder="' . _L::get('Subject') . '" name="subject" />
                            <textarea placeholder="' . _L::get('Message') . '" cols="80" id="editor" name="content" rows="10"></textarea>
                            <p>' . $this->tagButton(_L::get('Send')) . '</p>
                        </form>
                    </div>
                </article>';
                break;
            case 'deletepost':
                if ($b->config->get('enableDeleteFiles') == true) {
                    $post->delete();
                }
                header('Location: ' . $b->getAdminURL() . '&section=posts');
                break;
            case 'deletepage':
                if (!$b->config->get('enablePages')) {
                    $b->get404();
                }
                if ($b->config->get('enableDeleteFiles') == true) {
                    $post->delete();
                }
                header('Location: ' . $b->getAdminURL() . '&section=pages');
                break;
            case 'editpost':
                $out .= $this->tagHeader(_L::get('Edit Post'));
                if ($b->requestPost('title')) {
                    $result = $b->savePostData(false, true, $post);
                    if ($result['result'] == true) {
                        $out .= $this->message($result['message']);
                        $post = $result['post'];
                    } else {
                        $out .= $this->message($result['error'], true);
                    }
                }
                $out .= '<form method="post">
                    <input type="hidden" name="id" value="' . $post->getId() . '" />
                    <input type="text" placeholder="' . _L::get('Title') . '" name="title" value="' . $post->getTitle() . '" />
                    <input class="last" type="text" placeholder="' . _L::get('Category') . '" name="category" value="' . $post->getCategory() . '" />
                    <input type="text" placeholder="' . _L::get('Image') . '" name="headerImage" value="' . $post->getHeaderImage() . '" />'
                        . $this->getAuthorsList('select', $post->getAuthor()) .
                        '<input type="text" placeholder="' . date($b->config->get('dateFormat')) . '" name="date" style="width:250px" value="' . $post->getDate() . '" />
                    <label>' . _L::get('sticky') . '</label><input type="checkbox" name="sticky" value="true"' . ($post->isSticky() ? ' checked' : '') . ' />
                    <label>' . _L::get('publish') . '</label><input type="checkbox" name="published" value="true"' . ($post->isPublished() ? ' checked' : '') . ' />
                    <textarea cols="80" id="editor" name="content" rows="10">' . $post->getRawContent() . '</textarea>
                    <p>' . $this->tagButton(_L::get('Update')) . '</p>
                </form>';
                break;
            case 'info':
                $out .= $this->tagHeader(_L::get('Image information'));
                $image_info = getimagesize($b->config->get('imagesDir') . $post);
                $out .= '<div>
                        <img src="' . $b->config->get('imagesDir') . $post .'" />
                        <hr />
                        <div class="info"><span>' . _L::get('File Name') . ':</span> ' . $post .'</div>
                        <div class="info"><span>' . _L::get('Image type') . ':</span> ' . $image_info['mime'] . '</div>
                        <div class="info"><span>' . _L::get('Dimensions') . ':</span> ' . $image_info[0] . ' x ' . $image_info[1]. ' ' . _L::get('pixels') . '</div>
                        <div class="info"><span>' . _L::get('Size') . ':</span> ' . filesize($b->config->get('imagesDir') . $post) .' ' . _L::get('bytes') . '</div>
                        <div class="info"><span>' . _L::get('Image tag') . ':</span> &lt;img src="' .  $b->config->get('imagesDir') . $post . '" alt="" /&gt;</div>
                    </div>';
                break;
            case 'editpage':
                if (!$b->config->get('enablePages')) {
                    $b->get404();
                }
                $out .= $this->tagHeader(_L::get('Edit Page'));
                if ($b->requestPost('title')) {
                    $result = $b->savePostData(true, true, $post);
                    if ($result['result'] == true) {
                        $out .= $this->message($result['message']);
                        $post = $result['post'];
                    } else {
                        $out .= $this->message($result['error'], true);
                    }
                }
                $out .= '<form method="post">
                    <input type="hidden" name="id" value="' . $post->getId() . '" />
                    <input type="text" placeholder="' . _L::get('Title') . '" name="title" value="' . $post->getTitle() . '" />
                    <select style="width:420px" name="parent">' . $this->getPagesList('select', $post->getParent(), $post->getId()) . '</select>
                    <label>' . _L::get('publish') . '</label><input type="checkbox" name="published" value="true"' . ($post->isPublished() ? ' checked' : '') . ' />
                    <textarea cols="80" id="editor" name="content" rows="10">' . $post->getRawContent() . '</textarea>
                    <p>' . $this->tagButton(_L::get('Update')) . '</p>
                </form>';
                break;
            case 'facebook_open_graph':
                if ($b->config->get('facebookAppId')) {
                    $out .= $this->tagMeta('og:title', $b->config->get('title')) .
                        $this->tagMeta('og:type', 'article') .
                        $this->tagMeta('og:description', $b->config->get('description')) .
                        $this->tagMeta('og:url', $b->config->get('domain')) .
                        $this->tagMeta('og:site_name', $b->config->get('title'));
                }
                break;
            case 'twitter_card':
                if ($b->config->get('twitterHandle')) {
                    $out .= $this->tagMeta('twitter:card', 'summary') .
                        $this->tagMeta('twitter:site', '@' . $b->config->get('twitterHandle')) .
                        $this->tagMeta('twitter:title', $b->config->get('title')) .
                        $this->tagMeta('twitter:description', $b->config->get('description')) .
                        $this->tagMeta('twitter:creator', '@' . $b->config->get('twitterHandle')) .
                        $this->tagMeta('twitter:domain', $b->getURLInfo('host'));
                }
                break;
            case 'header':
                if (!$b->config->get('embed')) {
                    $out .= '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>' . ($post != null ? $post->getTitle() . ' | ' : '') . $b->getTitle() . '</title>' .
                            $this->tagCSS($b->formatURL('css')) .
                            $this->tagCSS('//fonts.googleapis.com/css?family=Open+Sans|Mystery+Quest') .
                            $this->tagCSS('//weloveiconfonts.com/api/?family=entypo') .
                            (!$b->isAdmin() ?
                                (!$b->config->get('enableATOM') ? '' : '<link href="' . $this->blog->formatURL('atom') . '" type="application/atom+xml" rel="alternate" title="' . $b->getTitle() . ' ATOM Feed" />') .
                                (!$b->config->get('enableRSS') ? '' : '<link href="' . $this->blog->formatURL('rss') . '" type="application/rss+xml" rel="alternate" title="' . $b->getTitle() . ' RSS 2.0 Feed" />')
                                : ''
                            ) .
                            '<meta http-equiv="Content-Type" content="text/html;charset=' . $b->config->get('textEncoding') . '" />' .
                            $this->tagMeta('author', 'Tinambo v' . $b->getVersion()) .
                            (!$b->isAdmin() && $b->config->get('facebookAppId') ? $this->tagMeta('fb:app_id', $b->config->get('facebookAppId')) : '') .
                            $this->tagScript('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') .
                            (!$b->isAdmin() ? $this->get('twitter_card') . $this->get('facebook_open_graph') : '') . '
                        </head>
                        <body' . ($b->isAdmin() ? ' class="admin"' : '') . '>';
                }
                $out .= '<header class="site-header" role="banner">
                    <div class="content-width">
                        <div class="site-branding textlogo">
                            <h1 class="site-title ">
                                <a href="' . $b->formatURL() . '" title="' . $b->getTitle() . '" rel="home">' . $b->getTitle() . '</a>
                            </h1>
                        </div>
                        <nav class="main-navigation" role="navigation">
                            <div class="screen-reader-text skip-link">
                                <a href="#content" title="' . _L::get('Skip to content') . '">' . _L::get('Skip to content') . '</a>
                            </div>
                            <div class="menu-primary-container">
                                <ul id="menu-primary" class="menu">' .
                                    (!$b->isAdmin() ? $this->getTopMenu() : $this->_generateMenu($this->adminPages, true)) . '
                                </ul>
                            </div>
                            <select id="navigation-small">
                                <option value="" selected="selected">Go to...</option>' .
                                (!$b->isAdmin() ? $this->_getOptionTopMenu() : $this->_generateMenu($this->adminPages, false)) . '
                            </select>
                        </nav>
                        <div class="menu-social-container">
                            <ul class="menu">' . $this->getFeedsMenu() . '</ul>
                        </div>
                    </div>
                </header>
                <section id="content" class="site-content content-width">';
                break;
            case 'footer':
                $out .= $b->paginator->pageNav() . '
                    </section>
                    <footer class="site-footer" role="contentinfo">' . $b->getPromotion() . '</footer>' .
                        (!$b->isAdmin() && $b->config->get('facebookAppId') ? $this->tagScript('//connect.facebook.net/en_US/all.js#xfbml=1') : '') .
                        $this->tagScript($b->formatURL('js')) .
                        (!$b->isAdmin() ? $b->js->get('ga') : '');
                if (!$b->config->get('embed')) {
                    $out .= '</body>
                    </html>';
                }
                break;
            case 'index':
                $noposts = true;
                for ($i = 0; $i < count($post); $i++) {
                    if ($post[$i]->isPublished()) {
                        $out .= $this->get('excerpt', $post[$i]);
                        $noposts = false;
                    }
                }
                if ($noposts == true) {
                    $out .= $this->get('noposts');
                }
                break;
            case 'header_opml':
                $authors = $b->getAuthors();
                $out .= '<?xml version="1.0" encoding="' . $b->config->get('textEncoding') . '"?>
                    <opml version="2.0">
                        <head>
                            <title>' . $b->getTitle() . '</title>
                            <dateCreated>' . date('r') . '</dateCreated>
                            <dateModified>' . date('r') . '</dateModified>
                            <ownerName>' . $authors[0] . '</ownerName>
                            <ownerEmail>' . $b->getEmail() . '</ownerEmail>
                            <expansionState></expansionState>
                            <vertScrollState>1</vertScrollState>
                            <windowTop>60</windowTop>
                            <windowLeft>60</windowLeft>
                            <windowBottom>560</windowBottom>
                            <windowRight>840</windowRight>
                        </head>
                    <body>' . "\n";
                break;
            case 'footer_opml':
                $out .= '</body>' . "\n" . '
                    </opml>';
                break;
            case 'opml':
                if ($b->config->get('enableRSS')) {
                    $out .= '<outline text="' . $b->getTitle() . ' RSS2 Feed" description="' . $b->getDescription() . '" htmlUrl="' . $b->formatURL() . '" language="unknown" title="' . $b->getTitle() . '" type="rss" version="RSS2" xmlUrl="' . $this->blog->formatURL('rss') . '" />' . "\n";
                }
                if ($b->config->get('enableATOM')) {
                    $out .= '<outline text="' . $b->getTitle() . ' ATOM Feed" description="' . $b->getDescription() . '" htmlUrl="' . $b->formatURL() . '" language="unknown" title="' . $b->getTitle() . '" type="atom" version="ATOM" xmlUrl="' . $this->blog->formatURL('atom') . '" />' . "\n";
                }
                break;
            case 'header_rss':
                $out .= '<?xml version="1.0" encoding="' . $b->config->get('textEncoding') . '"?>
                    <rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:slash="http://purl.org/rss/1.0/modules/slash/">
                        <channel>
                            <title>' . $b->getTitle() . '</title>
                            <atom:link href="' . $b->formatURL('rss') . '" rel="self" type="application/rss+xml" />
                            <link>' . $b->formatURL() . '</link>
                            <description>' . $b->getDescription() . '</description>
                            <lastBuildDate>' . date('r') . '</lastBuildDate>
                            <language>en-US</language>
                            <sy:updatePeriod>hourly</sy:updatePeriod>
                            <sy:updateFrequency>1</sy:updateFrequency>
                            <generator>Tinambo v' . $b->getVersion() . '</generator>' . "\n";
                break;
            case 'footer_rss':
                $out .= '</channel>' . "\n" . '
                    </rss> ';
                break;
            case 'header_atom':
                $authors = $b->getAuthors();
                $out .= '<?xml version="1.0" encoding="' . $b->config->get('textEncoding') . '"?>
                    <feed xmlns="http://www.w3.org/2005/Atom">
                        <title>' . $b->getTitle() . '</title>
                        <link href="' . $b->formatURL() . '" />
                        <updated>' . date('c') . '</updated>
                        <author>
                            <name>' . $authors[0] . '</name>
                        </author>
                        <id>urn:uuid:' . $b->getGuid() . '</id>' . "\n";
                break;
            case 'footer_atom':
                $out .= '</feed>';
                break;
            case 'json':
                if ($b->isAPIrequest()) {
                    $data = array();
                    $endpoint = $b->requestPost('endpoint');
                    switch ($endpoint) {
                        case 'newpost':
                        case 'newpage':
                            $result = $b->savePostData(($endpoint == 'newpage') ? true : false);
                            if ($result['result'] == true) {
                                $data['message'] = $result['message'];
                            } else {
                                $data['error'] = $result['error'];
                            }
                            break;
                        case 'editpost':
                        case 'editpage':
                            $postId = intval($b->requestPost('id'));
                            $postData = ($endpoint == 'editpage') ? $b->_getPageById($postId) : $b->_getPostById($postId);
                            if ($postData) {
                                $result = $b->savePostData(($endpoint == 'editpage') ? true : false, true, $postData);
                                if ($result['result'] == true) {
                                    $data['message'] = $result['message'];
                                } else {
                                    $data['error'] = $result['error'];
                                }
                            } else {
                                $data['error'] = _L::get('Invalid method data.');
                            }
                            break;
                        default:
                            $data['error'] = _L::get('Invalid API endpoint.');
                            break;
                    }
                } else {
                    $data = array(
                        'blog' => array(
                            'title' => $b->getTitle(),
                            'description' => $b->getDescription(),
                            'url' => $b->formatURL(),
                            'authors' => $b->getAuthors(),
                            'software' => 'Tinambo v' . $b->getVersion(),
                            'encoding' => $b->config->get('textEncoding')
                        ),
                        'posts' => array(),
                        'pages' => array()
                    );
                    $post = $b->getPosts();
                    for ($i = 0; $i < count($post); $i++) {
                        if ($post[$i]->isPublished()) {
                            $data['posts'][] = $post[$i]->getArray();
                        }
                    }
                    $post = $b->getPages();
                    for ($i = 0; $i < count($post); $i++) {
                        if ($post[$i]->isPublished()) {
                            $data['pages'][] = $post[$i]->getArray();
                        }
                    }
                }
                $out .= json_encode($data);
                break;
            case 'rss':
                for ($i = 0; $i < count($post); $i++) {
                    if ($post[$i]->isPublished()) {
                        $out .= '<item>
                            <title>' . $post[$i]->getTitle() . '</title>
                            <link>' . $post[$i]->getPermalink() . '</link>
                            <pubDate>' . date('r', strtotime($post[$i]->getDate())) . '</pubDate>
                            <dc:creator><![CDATA[' . $post[$i]->getAuthor() . ']]></dc:creator>
                            <category><![CDATA[' . $post[$i]->getCategory() . ']]></category>
                            <guid isPermaLink="false">' . $post[$i]->getPermalink() . '</guid>
                            <description><![CDATA[' . $post[$i]->getRawExcerpt() . ']]></description>
                        </item>' . "\n";
                    }
                }
                break;
            case 'atom':
                for ($i = 0; $i < count($post); $i++) {
                    if ($post[$i]->isPublished()) {
                        $out .= '<entry>
                            <title>' . $post[$i]->getTitle() . '</title>
                            <link href="' . $post[$i]->getPermalink() . '" />
                            <id>urn:uuid:' . $b->getGuid() . '</id>
                            <updated>' . date('c', strtotime($post[$i]->getDate())) . '</updated>
                            <summary><![CDATA[' . $post[$i]->getRawExcerpt() . ']]></summary>
                        </entry>' . "\n";
                    }
                }
                break;
            case 'login':
                if ($b->requestPost('author')) {
                    if ($b->login($b->requestPost('author'), $b->requestPost('password'))) {
                        header('Location: ' . $b->formatURL($b->getSlug('editor')));
                    } else {
                        $out .= $this->message(_L::get('Unable to authenticate you. Please try again!'), true);
                    }
                }
                $out .= '<form method="post" action="" class="login">
                    <h2>' . _L::get('Login') . '</h2>
                    <input type="text" name="author" placeholder="' . _L::get('your name') . '" />
                    <input type="password" name="password" placeholder="' . _L::get('your password') . '" />
                    <p>
                        <input type="submit" class="button" value="' . _L::get('Login') . '" />
                    </p>
                </form>';
                break;
            case 'post':
                $out .= '<article class="post">' .
                        (($post->getHeaderImage()) ? '<div class="featured-image"><img src="' . $post->getHeaderImage() . '" alt="post image" /></div>' : '') . '
                    <div class="contents">
                        <h1 class="entry-title">' . $post->getTitle() . '</h1>
                        <div class="entry-meta entry-meta-header">
                            <span class="entypo-clock date">' . $post->formatDate() . '</span>
                            <span class="entypo-user author">' . $post->getAuthor() . '</span>
                            <span class="entypo-heart tag">' . $post->getCategory() . '</span>
                        </div>
                        <div class="body">' . $post->getContent() . '</div>
                        <div class="social">
                            <a class="entypo-facebook-circled" title="' . _L::get('Share to Facebook') . '" href="http://www.facebook.com/sharer.php?u=' . $post->getPermalink() . '"></a>
                            <a class="entypo-gplus-circled" title="' . _L::get('Share to Google+') . '" href="https://plus.google.com/share?url=' . $post->getPermalink() . '"></a>
                            <a class="entypo-twitter-circled" title="' . _L::get('Share to Twitter') . '" href="http://twitter.com/share?url=' . $post->getPermalink() . '"></a>
                            <a class="entypo-linkedin-circled" title="' . _L::get('Share to Linkedin') . '" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=' . $post->getPermalink() . '"></a>
                            <a class="entypo-pinterest-circled" title="' . _L::get('Share to Pinterest') . '" href="javascript:void((function()%7Bvar%20e=document.createElement(\'script\');e.setAttribute(\'type\',\'text/javascript\');e.setAttribute(\'charset\',\'UTF-8\');e.setAttribute(\'src\',\'http://assets.pinterest.com/js/pinmarklet.js?r=\'+Math.random()*99999999);document.body.appendChild(e)%7D)());"></a>
                        </div>
                    </div>
                </article>' .
                        ($b->config->get('commentsType') == 'facebook' && $b->config->get('facebookAppId') ? '<fb:comments href="' . $post->getPermalink() . '" width="1060"></fb:comments>' : '') .
                        ($b->config->get('commentsType') == 'disqus' && $b->config->get('disqusId') ? "<div id='disqus_thread'></div><script>var disqus_config=function(){this.page.url='" . $post->getPermalink() . "';this.page.identifier='" . $post->getId() . "';};(function(){var d=document,s=d.createElement('script');s.src='//" . $b->config->get('disqusId') . ".disqus.com/embed.js';s.setAttribute('data-timestamp',+new Date());(d.head||d.body).appendChild(s)})();</script><noscript>Please enable JavaScript to view the comments powered by Disqus.</noscript>" : '');
                break;
            case 'page':
                if (!$b->config->get('enablePages')) {
                    $this->get404();
                }
                $out .= '<article class="page">
                    <div class="contents">
                        <h2>' . $post->getTitle() . '</h2>
                        <div class="body">' . $post->getContent() . '</div>
                    </div>
                </article>';
                break;
            case 'excerpt':
                $out .= '<article class="excerpt">' .
                        (($post->getHeaderImage()) ? '<div class="featured-image"><img src="' . $post->getHeaderImage() . '" alt="post image" /></div>' : '') . '
                    <div class="contents">
                        <h1 class="entry-title">
                            <a href="' . $post->getPermalink() . '">' . $post->getTitle() . '</a>
                        </h1>
                        <div class="entry-meta entry-meta-header">
                            <span class="entypo-clock date">' . $post->formatDate() . '</span>
                            <span class="entypo-user author">' . $post->getAuthor() . '</span>
                            <span class="entypo-heart tag">' . $post->getCategory() . '</span>
                        </div>
                        <div class="excerpt clearfix">' . $post->getExcerpt() . '</div>
                    </div>
                </article>';
                break;
            case 'noposts':
                $out .= '<h1 class="entry-title">' . _L::get('No posts yet') . '</h1>
                <article class="post">
                    <div class="body padding">
                        <p>' . _L::get('Unfortunately you haven`t created any posts, so why not start writing some right now?') . '</p>
                    </div>
                </article>';
                break;
            case '401':
                $out .= '<article class="page">
                    <h1 class="entry-title">' . _L::get('Not Authorized') . '</h1>
                    <div class="body padding">
                        <p>' . _L::get('Unfortunately, you are not authorized to perform this request.') . ' <a href="' . $b->formatURL() . '">' . _L::get('Go to homepage') . '</a>?</p>
                    </div>
                </article>';
                break;
            case '404':
            default:
                $out .= '<article class="page">
                    <h1 class="entry-title">' . _L::get('Page not found') . '</h1>
                    <div class="body padding">
                        <p>' . _L::get('Unfortunately, the page you were looking for was not found.') . ' <a href="' . $b->formatURL() . '">' . _L::get('Go to homepage') . '</a>?</p>
                    </div>
                </article>';
                break;
        }
        return $out;
    }

}

/**
 * Tinambo Paginator class
 */
class TinamboPaginator {

    private $blog;
    private $pageCurrent;
    private $pageUrl;
    private $pagePostsTotal;

    /**
     * Object constructor
     * 
     * @param TinamboBlog $blog
     */
    public function __construct($blog) {
        $this->blog = $blog;
    }

    /**
     * Paginate the posts by using the request URI
     *
     * @public
     * @param Array $posts
     * @param String $url
     * @param Integer $page
     * @returns Array
     */
    public function paginate($posts, $url, $page) {
        $this->pageCurrent = $page;
        $this->pageUrl = preg_replace('/(\?|\&){1}page=\d+/', '', $url);
        $this->pagePostsTotal = count($posts);
        if (count($posts) > 0) {
            return array_slice($posts, ($this->pageCurrent - 1) * $this->blog->config->get('postsPerPage'), $this->blog->config->get('postsPerPage'));
        } else {
            return array();
        }
    }

    /**
     * Get a link to the next page
     *
     * @public
     * @returns String
     */
    public function nextPage() {
        return ($this->pageCurrent + 1) <= ceil($this->pagePostsTotal / $this->blog->config->get('postsPerPage')) ? '<div class="nav-next"><a href="' . $this->pageUrl . (strpos($this->pageUrl, '?') ? '&amp;' : '?') . 'page=' . ($this->pageCurrent + 1) . '">' . _L::get('Older') . ' <span class="meta-nav">&rarr;</span></a></div>' : '';
    }

    /**
     * Get a link to the previous page
     *
     * @public
     * @returns String
     */
    public function prevPage() {
        return ($this->pageCurrent - 1 > 0) ? '<div class="nav-previous"><a href="' . $this->pageUrl . (strpos($this->pageUrl, '?') ? '&amp;' : '?' ) . 'page=' . ($this->pageCurrent - 1) . '"><span class="meta-nav">&larr;</span>' . _L::get('Newer') . '</a></div>' : '';
    }

    /**
     * Output the page navigator
     *
     * @public
     * @returns String
     */
    public function pageNav() {
        return $this->pagePostsTotal > $this->blog->config->get('postsPerPage') ? '<nav class="post-navigation"><h1 class="screen-reader-text">Post navigation</h1>' . $this->nextPage() . $this->prevPage() . '</nav>' : '';
    }

}

/**
 * Tinambo post class
 */
class TinamboPost {

    private $id;
    private $title;
    private $date;
    private $author;
    private $content;
    private $headerImage;
    private $category;
    private $parent;
    private $published;
    private $sticky;
    private $file;
    private $blog;
    private $url;
    private $flagIsPage;

    /**
     * Object constructor
     * 
     * @param TinamboBlog $blog
     * @param String $file
     * @param Boolean $isPage
     */
    public function __construct($blog, $file, $isPage = false) {
        $this->blog = $blog;
        $parType = gettype($file);
        $this->flagIsPage = $isPage;
        if ($parType == 'string') {
            $data = ($this->blog->config->get('enableEncryption') == true ? json_decode($this->blog->security->decrypt(file_get_contents($file))) : json_decode(file_get_contents($file)));
            $this->id = intval($data->id);
            $this->title = $data->title;
            $this->parent = isset($data->parent) && $data->parent != 'false' ? intval($data->parent) : false;
            $this->date = isset($data->date) ? $data->date : false;
            $this->author = isset($data->author) ? $data->author : false;
            $this->content = $data->content;
            $this->headerImage = isset($data->headerImage) ? $data->headerImage : false;
            $this->category = isset($data->category) ? $data->category : false;
            $this->sticky = isset($data->sticky) ? $data->sticky : false;
            $this->published = isset($data->published) ? $data->published : false;
            $this->url = $this->getPermalink();
            $this->file = $file;
        } else if ($parType == 'array') {
            $authors = $this->blog->getAuthors();
            $this->id = isset($file['id']) ? intval($file['id']) : $this->blog->getNewPostId();
            $this->title = $blog->security->sanitize($file['title']);
            $this->date = isset($file['date']) ? $blog->security->sanitize($file['date']) : '';
            $this->parent = isset($file['parent']) && $file['parent'] != 'false' ? intval($file['parent']) : false;
            $this->author = isset($file['author']) ? $blog->security->sanitize($file['author']) : $authors[0];
            $this->content = $file['content'];
            $this->category = isset($file['category']) ? $blog->security->sanitize($file['category']) : '';
            $this->headerImage = isset($file['headerImage']) ? $blog->security->sanitize($file['headerImage']) : '';
            $this->sticky = isset($file['sticky']) ? true : false;
            $this->published = isset($file['published']) ? true : false;
            $this->url = $this->getPermalink();
            $this->file = false;
        }
    }

    /**
     * Get the id of this post
     *
     * @public
     * @returns Integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set the id of this post
     *
     * @public
     * @param Integer $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Get the title of this post
     *
     * @public
     * @returns String
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Get the date of this post
     *
     * @public
     * @returns String
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Format the date of this post
     *
     * @public
     * @returns String
     */
    public function formatDate() {
        return date($this->blog->config->get('dateFormat'), strtotime($this->date));
    }

    /**
     * Get the permalink of this post
     *
     * @public
     * @returns String
     */
    public function getPermalink() {
        return $this->blog->formatURL('post', $this->getId());
    }

    /**
     * Get the author of this post
     *
     * @public
     * @returns String
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Get the parent of this page
     *
     * @public
     * @returns Integer
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * Get the children of this page
     *
     * @public
     * @returns Array || Boolean
     */
    public function getChildren() {
        $out = array();
        $pages = $this->blog->getPages();
        for ($i = 0; $i < count($pages); $i++) {
            if ($pages[$i]->getParent() == $this->getId()) {
                $out[] = $pages[$i];
            }
        }
        if (count($out) == 0) {
            return false;
        } else {
            return $out;
        }
    }

    /**
     * Get the header image of this post
     *
     * @public
     * @returns String
     */
    public function getHeaderImage() {
        return $this->headerImage;
    }

    /**
     * Get the full path to the header image of this post
     *
     * @public
     * @returns String
     */
    public function getHeaderImageFull() {
        return $this->blog->config->get('domain') . $this->headerImage;
    }

    /**
     * Replace newlines with <br />
     *
     * @private
     * @returns String
     * @param String $content
     */
    private function replaceNewlines($content) {
        return preg_replace('/[\r\n]+/', '', nl2br(trim($content)));
    }

    /**
     * Get the excerpt of this post
     *
     * @public
     * @returns String
     */
    public function getExcerpt() {
        if (strpos($this->content, '--more--')) {
            $o = explode('--more--', strip_tags($this->content));
            return $this->replaceNewlines($o[0]) . '<br /><a href="' . $this->getPermalink() . '" class="more-link entypo-forward"> ' . _L::get('Read more') . '</a>';
        } else {
            return $this->replaceNewlines($this->content);
        }
    }

    /**
     * Get the raw excerpt of this post
     *
     * @public
     * @returns String
     */
    public function getRawExcerpt() {
        if (strpos($this->content, '--more--')) {
            $o = explode('--more--', strip_tags($this->content));
            return $o[0];
        } else {
            return $this->content;
        }
    }

    /**
     * Check whether this post is actually a page
     *
     * @public
     * @returns Boolean
     */
    public function isPage() {
        return $this->flagIsPage;
    }

    /**
     * Get the category of this post
     *
     * @public
     * @returns String
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Get the raw content of this post
     *
     * @public
     * @returns String
     */
    public function getRawContent() {
        return str_replace('\r\n', '<br />', $this->content);
    }

    /**
     * Get the contents of this post
     *
     * @public
     * @returns String
     */
    public function getContent() {
        return $this->replaceNewlines(str_replace('--more--', '', $this->content));
    }

    /**
     * Check whether this post is sticky or not
     *
     * @public
     * @returns Boolean
     */
    public function isSticky() {
        return $this->sticky;
    }

    /**
     * Check whether this post is published or not
     *
     * @public
     * @returns Boolean
     */
    public function isPublished() {
        return $this->published;
    }

    /**
     * Publish this post
     *
     * @public
     */
    public function publish() {
        $this->published = true;
    }

    /**
     * Unpublish this post
     *
     * @public
     */
    public function unpublish() {
        $this->published = false;
    }

    /**
     * Get the file linked to this post
     *
     * @public
     * @returns String
     */
    public function getFile() {
        return $this->file;
    }

    /**
     * Delete the file linked to this post
     *
     * @public
     * @returns Boolean
     */
    public function delete() {
        return @unlink($this->getFile());
    }

    /**
     * Save the post data to the file linked to this post
     *
     * @public
     * @returns Boolean
     */
    public function save() {
        return ($this->blog->config->get('enableEncryption') == true ? file_put_contents($this->getFile(), $this->blog->security->encrypt($this->getJSON())) : file_put_contents($this->getFile(), $this->getJSON()));
    }

    /**
     * Save the post data to a new file
     *
     * @public
     * @returns Boolean
     * @param String $filename
     */
    public function saveAs($filename) {
        return ($this->blog->config->get('enableEncryption') == true ? file_put_contents($filename, $this->blog->security->encrypt($this->getJSON())) : file_put_contents($filename, $this->getJSON()));
    }

    /**
     * Return the post data as a JSON string
     *
     * @public
     * @returns String
     */
    public function getJSON() {
        $data = new stdClass();
        $data->id = $this->id;
        $data->title = $this->title;
        $data->date = $this->date;
        $data->author = $this->author;
        $data->content = $this->content;
        $data->parent = $this->parent;
        $data->category = $this->category;
        $data->headerImage = $this->headerImage;
        $data->sticky = $this->sticky;
        $data->published = $this->published;
        $data->url = $this->url;
        return json_encode($data);
    }

    /**
     * Returns the post data as an array
     *
     * @public
     * @returns Array
     */
    public function getArray() {
        $data = array();
        $data['id'] = $this->id;
        $data['title'] = $this->title;
        $data['date'] = $this->date;
        $data['author'] = $this->author;
        $data['content'] = $this->content;
        $data['parent'] = $this->parent;
        $data['category'] = $this->category;
        $data['headerImage'] = $this->headerImage;
        $data['sticky'] = $this->sticky;
        $data['published'] = $this->published;
        $data['url'] = $this->url;
        return $data;
    }

}

/**
 * Tinambo Javascript generation class
 */
class TinamboJS {

    private $blog;

    /**
     * Object constructor
     * 
     * @param TinamboBlog $blog
     */
    public function __construct($blog) {
        $this->blog = $blog;
    }

    /**
     * Get the javascript data
     *
     * @public
     * @returns String
     * @param String $file
     */
    public function get($file) {
        $out = '';
        switch ($file) {
            case 'main':
                if ($this->blog->config->get('picozuKey')) {
                    $out .= "/* ClassyPicozu v1.0.0 https://vox.space */(function(c,p,m){c.extend(c.easing,{easeOutBackMin:function(a,b,c,e,f,g){g=1;return e*((b=b/f-1)*b*((g+1)*b+g)+1)+c}});c.extend({ClassyPicozu:{defaults:{style:{zIndex:99999,width:1100,height:768},overlay:{opacity:0.6},animation:{show:{duration:400,easing:\"easeOutBackMin\"},close:{duration:200,easing:\"easeOutBackMin\"},move:{duration:700,easing:\"easeOutBackMin\"}},iframe:{width:1100,height:768},maxSize:{width:-1,height:-1},from:\"top\"},options:{},animations:{},image:{},template:{lightbox:[],background:[], image:[],html:[]},visible:!1,maximized:!1,mode:\"iframe\",overlay:{_create:function(a){this.options=a;this.element=c('<div id=\"'+(new Date).getTime()+'\" class=\"picozu-lightbox-overlay\"></div>');this.element.css(c.extend({},{position:\"fixed\",top:0,left:0,opacity:0,display:\"none\",\"z-index\":this.options.zIndex},this.options.style));this.hidden=!0;this._build();return this},_build:function(){this.target=c(m.body);this.target.append(this.element)},_resize:function(a,b){this.element.css({height:0,width:0}); this.shim&&this.shim.css({height:0,width:0});c(m).width();var d=c(m).height();this.element.css({width:\"100%\",height:b||d});this.shim&&(this.shim.css({height:0,width:0}),this.shim.css({position:\"absolute\",left:0,top:0,width:this.element.width(),height:b||d}));return this},show:function(a){if(!this.hidden)return this;this.transition&&this.transition.stop();this.shim&&this.shim.css(\"display\",\"block\");this.element.css({display:\"block\",opacity:0});this._resize();this.hidden=!1;this.transition=this.element.fadeTo(this.options.showDuration, this.options.style.opacity,c.proxy(function(){this.options.style.opacity&&this.element.css(this.options.style);this.element.trigger(\"show\");c.isFunction(a)&&a()},this));return this},hide:function(a){if(this.hidden)return this;this.transition&&this.transition.stop();this.shim&&this.shim.css(\"display\",\"none\");this.hidden=!0;this.transition=this.element.fadeTo(this.options.closeDuration,0,c.proxy(function(){this.element.trigger(\"hide\");c.isFunction(a)&&a();this.element.css({height:0,width:0,display:\"none\"})}, this));return this}},_create:function(a){this.options=c.extend(!0,this.defaults,a);a=c('<div class=\"picozu-lightbox mode-image\"><a class=\"close\" href=\"#close\"><span>close</span></a><div class=\"background\"><span class=\"loader\"><span class=\"left\"><span class=\"anim\"></span></span><span class=\"right\"><span class=\"anim\"></span></span></span></div><div class=\"picozu-lightbox-html\"></div></div>');var b=this.template;this.overlay._create({style:this.options.overlay,zIndex:this.options.style.zIndex-1,callback:this.proxy(this.close), showDuration:this.options.animation.show.duration,closeDuration:this.options.animation.close.duration});b.lightbox=a;b.background=c(\".background\",a);b.html=c(\".picozu-lightbox-html\",a);b.move=c('<div class=\"picozu-lightbox-move\"></div>').css({position:\"absolute\",\"z-index\":this.options.style.zIndex,top:-999}).append(a);c(\"body\").append(b.move);this.win=c(p);this._setupEvents();return a},_setupEvents:function(){this.win[0].onorientationchange=function(){this.visible&&(this.overlay._resize(),this.move&& !this.maximized&&this._move())};this.win.bind(\"resize\",this.proxy(function(){this.visible&&(this.overlay._resize(),this.move&&!this.maximized&&this._move())}));this.win.bind(\"scroll\",this.proxy(function(){this.visible&&this.move&&!this.maximized&&this._move()}));c(\".picozu-lightbox .close\").bind(\"click touchend\",{fn:\"close\"},this.proxy(this.fn));this.overlay.element.bind(\"show\",this.proxy(function(){c(this).triggerHandler(\"show\")}));this.overlay.element.bind(\"hide\",this.proxy(function(){c(this).triggerHandler(\"close\")}))}, fn:function(a){this[a.data.fn].apply(this);a.preventDefault()},proxy:function(a){return c.proxy(a,this)},show:function(a,b,d){if(this.isEmpty(a))return!1;var e=this.win.width(),f=this.win.height(),g=a[0],h=!1;a=g.href;this._setupLoading();h=this.visible;this.open();!1===h&&this._move();b=c.extend(!0,{width:1100,height:768,move:!0,key:null,image:null,expand:\"right\",theme:\"default\",workspace:1,onOpen:function(){},onClose:function(){}},b||{},g);this.options.onOpen=b.onOpen;this.options.onClose=b.onClose; b.width&&0<(\"\"+b.width).indexOf(\"p\")&&(b.width=Math.round((e-20)*b.width.substring(0,b.width.indexOf(\"p\"))/100));b.height&&0<(\"\"+b.height).indexOf(\"p\")&&(b.height=Math.round((f-20)*b.height.substring(0,b.height.indexOf(\"p\"))/100));this.move=!!b.move;this.maximized=!1;if(\"\"===b.key||null===b.key)return this.error(\"You have to specify the Picozu API key.\"),!1;null!==b.image&&\"\"!==b.image&&(a=b.image);if(b.width)e=b.width,f=b.height;else return this.error(\"You have to specify the modal window size.\"), !1;b='<iframe id=\"IF_'+(new Date).getTime()+'\" frameborder=\"0\" src=\"https://www.picozu.com/editor/?i='+encodeURIComponent(window.btoa(a))+\"&amp;key=\"+b.key+\"&amp;theme=\"+b.theme+\"&amp;workspace=\"+b.workspace+'\" style=\"margin:0; padding:0;\"></iframe>';this._setupHTML(c(b).css({width:e,height:f}),e,f);this.callback=c.isFunction(d)?d:function(b){}},_setupHTML:function(a,b,c){var e=this.options,f=this.template,g=f.background;this._setupMode(\"html\");this._resize(b,c+20);g.bind(\"complete\",function(){f.html.append(a); g.unbind(\"complete\");e.onOpen.apply(this)})},_move:function(a,b){var d=c(this.win),e=this.template,f=null!=a?a:e.lightbox.outerWidth(!0),g=null!=b?b:e.lightbox.outerHeight(!0),h=0,k=0,n=d.width(),l=d.height(),k=d.scrollLeft(),d=d.scrollTop(),k=k+(n-f)/2;this.visible?h=d+(l-g)/2:\"bottom\"===this.options.from?h=d+l:\"top\"===this.options.from?h=d-g:\"right\"===this.options.from?(k=n,h=d+(l-g)/2):\"left\"===this.options.from&&(k=-f,h=d+(l-g)/2);this.visible?(this.animations.move||this._morph(e.move,{left:parseInt(k, 10)},\"move\"),this._morph(e.move,{top:parseInt(h,10)},\"move\")):e.move.css({left:parseInt(k,10),top:parseInt(h,10)})},_morph:function(a,b,d,e,f){a.animate(b,{queue:f||!1,duration:this.options.animation[d].duration,easing:this.options.animation[d].easing,complete:c.isFunction(e)?this.proxy(e,this):null})},_resize:function(a,b){var d=this.template;if(this.visible){var e=c(this.win).width(),f=c(this.win).height(),g=c(this.win).scrollLeft(),h=c(this.win).scrollTop(),e=Math.max(g+(e-a)/2,0),g=Math.max(h+ (f-b)/2,0);this.animations.move=!0;this._morph(d.move.stop(),{left:this.maximized&&0>e?0:e,top:this.maximized&&b>f?h:g},\"move\",c.proxy(function(){this.move=!1},this.animations));this._morph(d.html,{height:b-20},\"move\");this._morph(d.lightbox.stop(),{width:a,height:b-20},\"move\",{},!0);this._morph(d.background.stop(),{width:a,height:b-20},\"move\",function(){c(d.background).trigger(\"complete\")})}else d.html.css({height:b-20}),d.lightbox.css({width:a,height:b-20}),d.background.css({width:a,height:b})}, close:function(a){var b=this.template;this.visible=!1;this.options.onClose();b.move.animate({opacity:0,top:\"-=40\"},{queue:!1,complete:this.proxy(function(){b.background.empty();b.html.empty();this._move();b.move.css({display:\"none\",opacity:1,overflow:\"visible\"})})});this.overlay.hide(this.proxy(function(){c.isFunction(this.callback)&&this.callback.apply(this,c.makeArray(a))}));b.background.stop(!0,!1).unbind(\"complete\")},open:function(){this.visible=!0;this.template.move.stop().css({opacity:1,display:\"block\", overflow:\"visible\"}).show();this.overlay.show()},_setupMode:function(a){a!==this.mode&&(this.template.lightbox.removeClass(\"mode-\"+this.mode).addClass(\"mode-\"+a),this.mode=a);this.template.move.css(\"overflow\",\"visible\")},error:function(a){alert(a);this.close()},_calc:function(a,b){var c=0<this.options.maxSize.width?this.options.maxSize.width:this.win.width()-50,e=0<this.options.maxSize.height?this.options.maxSize.height:this.win.height()-50;a>c?(b*=c/a,a=c,b>e&&(a*=e/b,b=e)):b>e&&(a*=e/b,b=e,a>c&& (b*=c/a,a=c));return{width:parseInt(a,10),height:parseInt(b,10)}},_setupLoading:function(){var a=this.options.style,b=this.template,c=b.background;this._setupMode(\"image\");c.children().stop(!0);b.html.empty();!1===this.visible&&(this._move(a.width,a.height),this._resize(a.width,a.height))},getOptions:function(a){a=c(a);return c.extend({},{href:a.attr(\"href\"),rel:c.trim(a.attr(\"data-rel\")||a.attr(\"rel\")),relent:a.attr(\"data-rel\")?\"data-rel\":\"rel\",element:a[0]},c.parseJSON((a.attr(\"data-options\")|| \"{}\").replace(/\'/g,'\"'))||{})},link:function(a,b){var d=c(b.element),e=this.getOptions(d),f=e.rel,g=e.relent,h=b.options,k=[];d.blur();if(this.isEmpty(f)||\"nofollow\"===f)k=[e];else{var n=[],l=[],m=!1;c(\"a[\"+g+\"], area[\"+g+\"]\",this.ownerDocument).filter(\"[\"+g+'=\"'+f+'\"]').each(c.proxy(function(b,a){d[0]===a?(n.unshift(this.getOptions(a)),m=!0):!1===m?l.push(this.getOptions(a)):n.push(this.getOptions(a))},this));k=n.concat(l)}c.lightbox(k,h,b.callback,d);return!1},isEmpty:function(a){if(null==a)return!0; if(\"[object String]\"===Object.prototype.toString.call(a)||\"array\"===c.type(a))return 0===a.length}},lightbox:function(a,b,d){var e=[];if(c.ClassyPicozu.isEmpty(a))return c.ClassyPicozu;for(var f=0;f<a.length;f++)e[f]=c.extend({},b,a[f]);return c.ClassyPicozu.show(e,b,d)}});c.fn.ClassyPicozu=function(a,b){return c(this).on(\"click\",function(d){d.preventDefault();d.stopImmediatePropagation();return c.proxy(c.ClassyPicozu.link,c.ClassyPicozu)(d,c.extend({},{selector:this.selector,options:a,callback:b}, {element:this}))})};c(function(){c.ClassyPicozu._create()})})(jQuery,window,document);\n";
                }
                $out .= "/* Tinambo v" . $this->blog->getVersion() . " https://vox.space */$(document).ready(function(){ $('#navigation-small').change(function(){window.location = $(this).find('option:selected').val();});" . ($this->blog->config->get('picozuKey') ? "$('[data-popup]').ClassyPicozu({key:'" . $this->blog->config->get('picozuKey') . "'});" : "") . "});\n";
                break;
            case 'ga':
                if ($this->blog->config->get('gaTrackingId')) {
                    $out .= "<script>var _gaq=_gaq||[];_gaq.push(['_setAccount','" . $this->blog->config->get('gaTrackingId') . "']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl' : 'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga, s);})();</script>";
                }
                break;
        }
        return $out;
    }

}

/**
 * Tinambo Security class
 */
class TinamboSecurity {

    private $blog;

    /**
     * Object constructor
     * 
     * @param TinamboBlog $blog
     */
    public function __construct($blog) {
        $this->blog = $blog;
    }

    /**
     * Encrypting function using internal encryption key and initialisation
     * vector
     *
     * @public
     * @param String $data
     * @returns String
     */
    public function encrypt($data) {
        if (function_exists('openssl_encrypt') &&
                $this->blog->config->get('enableEncryption') == true &&
                $this->blog->config->get('encryptionKey') != false &&
                $this->blog->config->get('encryptionIV') != false) {
            return openssl_encrypt(
                $this->_pkcs7Pad($data, 16),
                'AES-256-CBC',
                $this->blog->config->get('encryptionKey'),
                0,
                $this->blog->config->get('encryptionIV')
            );
        }
        else {
            return data;
        }
    }

    /**
     * Generate encryption key and initialisation vector
     *
     * @public
     * @returns Array
     */
    public function generateKeyIV() {
        $key = openssl_random_pseudo_bytes(32, $strongKey);
        $iv = openssl_random_pseudo_bytes(16, $strongIV);
        if ($strongKey == true && $strongIV == true) {
            return array(
                'key' => $key,
                'iv' => $iv
            );
        }
        else {
            return $this->_generateKeyIV();
        }
    }

    /**
     * Decrypting function using internal encryption key and initialisation
     * vector
     *
     * @public
     * @param String $data
     * @returns String
     */
    public function decrypt($data) {
        if (function_exists('openssl_decrypt') &&
                $this->blog->config->get('enableEncryption') == true &&
                $this->blog->config->get('encryptionKey') != false &&
                $this->blog->config->get('encryptionIV') != false) {
            return $this->_pkcs7Unpad(
                openssl_decrypt(
                    $data,
                    'AES-256-CBC',
                    $this->blog->config->get('encryptionKey'),
                    0,
                    $this->blog->config->get('encryptionIV')
                )
            );
        }
        else {
            return data;
        }
    }

    /**
     * Internal method for padding data to the block size
     *
     * @private
     * @param String $data
     * @param Integer $size
     * @returns String
     */
    private function _pkcs7Pad($data, $size) {
        $length = $size - strlen($data) % $size;
        return $data . str_repeat(chr($length), $length);
    }

    /**
     * Internal method for unpadding data
     *
     * @private
     * @param String $data
     * @returns String
     */
    private function _pkcs7Unpad($data) {
        return substr($data, 0, -ord($data[strlen($data) - 1]));
    }

    /**
     * Sanitize the string
     *
     * @public
     * @returns String
     * @param String | Array $string
     */
    public function sanitize($string) {
        if (is_array($string)) {
            while (list($key) = each($string)) {
                $string[$key] = $this->sanitize($string[$key]);
            }
            return $string;
        }
        $string = $this->_removeInvisibleChars($string);
        do {
            $string = rawurldecode($string);
        }
        while (preg_match('/%[0-9a-f]{2,}/i', $string));
        $string = $this->_removeInvisibleChars($string);
        $string = str_replace("\t", ' ', $string);
        $converted_string = $string;
        $string = $this->_sanitizeNeverAllowed($string);
        if ($is_image === true) {
            $string = preg_replace('/<\?(php)/i', '&lt;?\\1', $string);
        }
        else {
            $string = str_replace(array('<?', '?'.'>'), array('&lt;?', '?&gt;'), $string);
        }
        $string = preg_replace(
            '#(alert|prompt|confirm|cmd|passthru|eval|exec|expression|system|fopen|fsockopen|file|file_get_contents|readfile|unlink)(\s*)\((.*?)\)#si',
            '\\1\\2&#40;\\3&#41;',
            $string
        );
        $string = $this->_sanitizeNeverAllowed($string);
        return $string;
    }

    /**
     * Sanitize a string by removing some parts of it
     *
     * @private
     * @param String $string
     * @returns String
     */
    private function _sanitizeNeverAllowed($string) {
        $badStr = array(
            'document.cookie' => '[removed]',
            'document.write' => '[removed]',
            '.parentNode' => '[removed]',
            '.innerHTML' => '[removed]',
            '-moz-binding' => '[removed]',
            '<!--' => '&lt;!--',
            '-->' => '--&gt;',
            '<![CDATA[' => '&lt;![CDATA[',
            '<comment>' => '&lt;comment&gt;'
        );
        $badRegex = array(
            'javascript\s*:',
            '(document|(document\.)?window)\.(location|on\w*)',
            'expression\s*(\(|&\#40;)',
            'vbscript\s*:',
            'wscript\s*:',
            'jscript\s*:',
            'vbs\s*:',
            'Redirect\s+30\d',
            "([\"'])?data\s*:[^\\1]*?base64[^\\1]*?,[^\\1]*?\\1?"
        );
        $string = str_replace(array_keys($badStr), $badStr, $string);
        foreach ($badRegex as $regex) {
            $string = preg_replace('#' . $regex . '#is', '[removed]', $string);
        }
        return $string;
    }

    private function _removeInvisibleChars($string, $urlEncoded = true) {
        $bad = array();
        if ($urlEncoded) {
            $bad[] = '/%0[0-8bcef]/';
            $bad[] = '/%1[0-9a-f]/';
        }
        $bad[] = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S';
        do {
            $string = preg_replace($bad, '', $string, -1, $count);
        }
        while ($count);
        return $string;
    }

    /**
     * Sanitize the file name
     *
     * @public
     * @param String $string
     * @param Boolean $relativePath
     * @returns String
     */
    public function sanitizeFileName($string, $relativePath = false) {
        $bad = array(
            '../', '<!--', '-->', '<', '>',
            "'", '"', '&', '$', '#',
            '{', '}', '[', ']', '=',
            ';', '?', '%20', '%22',
            '%3c',
            '%253c',
            '%3e',
            '%0e',
            '%28',
            '%29',
            '%2528',
            '%26',
            '%24',
            '%3f',
            '%3b',
            '%3d'
        );
        if (!$relativePath) {
            $bad[] = './';
            $bad[] = '/';
        }
        $string = $this->_removeInvisibleChars($string, false);
        do {
            $old = $string;
            $string = str_replace($bad, '', $string);
        }
        while ($old !== $string);
        return stripslashes($string);
    }

    /**
     * Cleanup the string to prepare it for using as an URL
     *
     * @public
     * @returns String
     * @param String $string
     */
    public function cleanup($string) {
        return strip_tags(strtolower(trim(str_replace(' ', '-', $string))));
    }

}

/**
 * Tinambo Stylesheet generation class
 */
class TinamboCSS {

    private $blog;

    /**
     * Object constructor
     * 
     * @param TinamboBlog $blog
     */
    public function __construct($blog) {
        $this->blog = $blog;
    }

    /**
     * Get the stylesheet data
     *
     * @public
     * @returns String
     * @param String $file
     */
    public function get($file) {
        $out = '';
        switch ($file) {
            case 'site':
                /* master Tinambo stylesheet */
                $out .= '/* Tinambo v' . $this->blog->getVersion() . ' https://vox.space */html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{border:0;font-family:inherit;font-size:100%;font-style:inherit;font-weight:inherit;margin:0;outline:0;padding:0;vertical-align:baseline}html{font-size:62.5%;overflow-y:scroll;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{background:#fff}article,aside,details,figcaption,figure,footer,header,main,nav,section{display:block}ol,ul{list-style:none}table{border-collapse:separate;border-spacing:0}caption,th,td{font-weight:normal;text-align:left}blockquote:before,blockquote:after,q:before,q:after{content:""}blockquote,q{quotes:"" ""}a:focus{outline:thin dotted}a:hover,a:active{outline:0}a img{border:0}body,button,input,select,textarea{color:#404040;font-family:"Open Sans",Helvetica,Arial,sans-serif;font-size:17px;line-height:28px}h1,h2,h3,h4,h5,h6{font-weight:bold;font-weight:600;margin:0 0 20px 0;letter-spacing:-1px}h1{font-size:28px}h2{font-size:24px}h3{font-size:20px}h4{font-size:18px}h5{font-size:20px}h6{font-size:16px}hr{clear:both;background-color:#ccc;border:0;height:1px;margin-bottom:20px}p{margin-bottom:20px}ul,ol{margin:0 0 20px 40px}ul{list-style:disc}ol{list-style:decimal}li>ul,li>ol{margin-bottom:0;margin-left:40px}dt{font-weight:bold}dd{margin:0 20px 20px}b,strong{font-weight:bold}dfn,cite,em,i{font-style:italic}blockquote{margin:0 40px}address{margin:0 0 20px}pre{background:#eee;font-family:Courier,monospace;margin-bottom:20px;padding:20px;overflow:auto;max-width:100%}code,kbd,tt,var{font:15px Monaco,Consolas,monospace}abbr,acronym{border-bottom:1px dotted #666;cursor:help}mark,ins{background:#fff9c0;text-decoration:none}sup,sub{font-size:75%;height:0;line-height:0;position:relative;vertical-align:baseline}sup{bottom:1ex}sub{top:.5ex}figure{margin:0}table{margin:0 0 20px;width:100%}th{font-weight:bold}img{height:auto;max-width:100%}button,input,select,textarea{font-size:100%;margin:0;vertical-align:baseline;*vertical-align:middle}button,input{line-height:normal}button,html input[type="button"],input[type="reset"],input[type="submit"],.button{border:1px solid #ccc;border-color:#ccc #ccc #bbb #ccc;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;background:#e6e6e6;box-shadow:inset 0 1px 0 rgba(255,255,255,0.5),inset 0 15px 17px rgba(255,255,255,0.5),inset 0 -5px 12px rgba(0,0,0,0.05);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5),inset 0 15px 17px rgba(255,255,255,0.5),inset 0 -5px 12px rgba(0,0,0,0.05);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5),inset 0 15px 17px rgba(255,255,255,0.5),inset 0 -5px 12px rgba(0,0,0,0.05);color:rgba(0,0,0,.8) !important;cursor:pointer;-webkit-appearance:button;font-size:12px;line-height:1;padding:9px 16px;text-shadow:0 1px 0 rgba(255,255,255,0.8)}button:hover,html input[type="button"]:hover,input[type="reset"]:hover,input[type="submit"]:hover,.button:hover{border-color:#ccc #bbb #aaa #bbb;box-shadow:inset 0 1px 0 rgba(255,255,255,0.8),inset 0 15px 17px rgba(255,255,255,0.8),inset 0 -5px 12px rgba(0,0,0,0.02);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.8),inset 0 15px 17px rgba(255,255,255,0.8),inset 0 -5px 12px rgba(0,0,0,0.02);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.8),inset 0 15px 17px rgba(255,255,255,0.8),inset 0 -5px 12px rgba(0,0,0,0.02)}button:focus,html input[type="button"]:focus,.button:focus,input[type="reset"]:focus,input[type="submit"]:focus,button:active,html input[type="button"]:active,input[type="reset"]:active,input[type="submit"]:active{border-color:#aaa #bbb #bbb #bbb;box-shadow:inset 0 -1px 0 rgba(255,255,255,0.5),inset 0 2px 5px rgba(0,0,0,0.15);-moz-box-shadow:inset 0 -1px 0 rgba(255,255,255,0.5),inset 0 2px 5px rgba(0,0,0,0.15);-webkit-box-shadow:inset 0 -1px 0 rgba(255,255,255,0.5),inset 0 2px 5px rgba(0,0,0,0.15)}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input[type="password"],input[type="text"],textarea{color:#666;border:1px solid #ccc;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px}input[type="password"]:focus,input[type="text"]:focus,textarea:focus{color:#111}input[type="password"],input[type="text"]{padding:3px}textarea{overflow:auto;padding-left:3px;vertical-align:top;width:98%}a,a:visited,.entry-title a:hover,.entry-meta a:hover,.site-footer a:hover{color:#e45348;text-decoration:none}.entry-title a,.entry-content a:hover,a:hover,a:focus,a:active{color:#333}a.more-link:hover{background:#e45348;color:#fff}.site-footer a,.entry-meta a{color:#888}.alignleft{display:inline;float:left;margin-right:20px}.alignright{display:inline;float:right;margin-left:20px}.aligncenter{clear:both;display:block;margin:0 auto}.entry-title{margin-bottom:5px}.page .entry-title,.admin .entry-title{margin-bottom:20px}.admin .left{float:left}.admin .buttons{float:right}#navigation-small{display:none;margin:19px 0 0 19px;border:auto;padding:0;width:auto;font-size:17px}.site-navigation{float:left}.main-navigation ul{margin:0 0 0 15px;display:block;position:relative;float:left}.main-navigation ul li{position:relative}.main-navigation li{list-style-type:none;display:inline-block}.main-navigation a,.main-navigation a:visited,.menu-social-container a,.menu-social-container a:visited{font-size:12px;padding:0 15px;line-height:60px;color:#afafaf}.menu-social-container a:hover,.main-navigation a:hover{color:#333}.main-navigation ul ul{margin:0;box-shadow:0 2px 2px rgba(0,0,0,0.1);-moz-box-shadow:0 2px 2px rgba(0,0,0,0.1);-webkit-box-shadow:0 2px 2px rgba(0,0,0,0.1);display:none;float:left;position:absolute;top:60px;z-index:99999}.main-navigation ul ul ul{left:100%;top:-1px}.main-navigation ul li:hover>ul{display:block}.main-navigation li.current-menu-ancestor>a,.main-navigation li.current_page_item>a,.main-navigation li.current-menu-item>a{color:#333}.main-navigation .sub-menu{width:200px;text-align:left;background:#fff}.main-navigation .sub-menu li{display:block}.main-navigation .sub-menu li:first-child{padding-top:10px}.main-navigation .sub-menu li:last-child{padding-bottom:8px}.main-navigation .sub-menu ul{top:-10px}.main-navigation .sub-menu li:first-child ul{top:-1px}.main-navigation .sub-menu a{text-transform:none;display:block;line-height:18px;padding:10px 20px}.menu-social-container{position:absolute;right:20px}.menu-social-container li{display:inline;font-size:12px;line-height:60px;position:relative}.menu-social-container a{padding-left:15px;padding-right:0}.menu-social-container a:before{position:relative;top:-3px;padding-right:3px}.page-links{clear:both;margin:0 0 30px}.entry-meta{font-size:11px;margin:0 0 25px 0}.featured-image{margin:0 0 30px 0}.featured-image img{box-shadow:0 0 2px 0 rgba(0,0,0,0.3);-moz-box-shadow:0 0 2px 0 rgba(0,0,0,0.3);-webkit-box-shadow:0 0 2px 0 rgba(0,0,0,0.3);width:1060px}.featured-image img,.featured-image a{display:block}.site-content [class*="navigation"]{margin:0 0 20px;overflow:hidden}[class*="navigation"] .nav-previous{float:left;width:50%}[class*="navigation"] .nav-next{float:right;text-align:right;width:50%}.site-header{background:#fff;min-height:60px;box-shadow:0 0 3px 0 rgba(0,0,0,0.3);-moz-box-shadow:0 0 3px 0 rgba(0,0,0,0.3);-webkit-box-shadow:0 0 3px 0 rgba(0,0,0,0.3);margin-bottom:60px}.site-branding{float:left;background:#e55449;padding:0 15px}.site-header .site-branding a{color:#fff;display:block}.site-branding:hover{opacity:.90}.site-header .site-title{font-weight:normal;font-weight:300;margin:0;font-size:19px;line-height:60px;white-space:nowrap;display:block}.site-header .imagelogo img{display:block}.site-header .imagelogo{background:0}.site-header .imagelogo .site-title{line-height:1}.content-width{margin:0 auto;position:relative}.site-content{padding-bottom:20px;word-wrap:break-word}.site-footer{font-size:12px;color:#afafaf;border-top:1px solid #ccc;padding:20px;text-align:center;width:1060px;margin:0 auto}.more-link{text-transform:uppercase;padding:6px 18px;border:2px solid #e45348;border-radius:4px;-moz-border-radius:4px;-webkit-border-radius:4px;display:inline-block;font-size:13px;margin-top:10px}*,*:before,*:after{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}.screen-reader-text{clip:rect(1px,1px,1px,1px);position:absolute !important}.screen-reader-text:hover,.screen-reader-text:active,.screen-reader-text:focus{background-color:#f1f1f1;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;box-shadow:0 0 2px 2px rgba(0,0,0,0.6);-moz-box-shadow:0 0 2px 2px rgba(0,0,0,0.6);-webkit-box-shadow:0 0 2px 2px rgba(0,0,0,0.6);clip:auto !important;color:#21759b;display:block;font-size:14px;font-weight:bold;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}.clear:before,.clear:after,[class*="content"]:before,[class*="content"]:after,[class*="site"]:before,[class*="site"]:after{content:"";display:table}.clear:after,[class*="content"]:after,[class*="site"]:after{clear:both}.content-width{width:1100px;padding:0 20px}@media only screen and (min-width:960px) and (max-width:1199px){.content-width{width:960px}}@media only screen and (min-width:768px) and (max-width:959px){.content-width{width:748px}}@media only screen and (max-width:767px){.main-navigation ul{display:none}.menu-social-container{display:none}.content-width,.site-footer{width:auto}.admin textarea{width:100%!important}.menu-social-container ul{margin:15px 0 0 0;text-align:center}#navigation-small{display:inline;display:inline-block}}@media only screen and (max-width:480px){#promo-wrap .promo-content{font-size:23px;line-height:33px}.column-grid .column{width:100%;display:block;float:none;clear:both}.hidemobile{display:none}}.login input[type=text],.contact input[type=text]{width:30%;margin:0 10px 10px 0}.contact textarea{margin-bottom:20px;resize:none}[class*="entypo-"]:before{padding:0 5px 0 5px;font-family:"entypo",sans-serif}.social{margin:20px 0;padding-top:10px}.social a{font-size:28px}.tinambo{font-family:"Mystery Quest"}article.excerpt{margin-bottom:30px}.greet{margin:0 0 20px 0;font-size:28px;text-align:right}.entry-meta span{margin-right:10px}.admin th.small{width:40px}.admin section p{line-height:26px}tr:nth-child(even){background-color:#fafafa}tr:nth-child(odd){background-color:#fff}tr:hover{background-color:#ededed}td,th{padding:4px 10px;text-align:left}th{background-color:#e55449;color:#fff}th:last-child,td:last-child{font-size:26px;text-align:center;width:140px}td span{color:#e55449}.admin input[type="text"],input.search,.admin select{font-size:20px;margin:0 10px 10px 0;width:522px;padding:5px;border:1px solid #b6b6b6}.admin .last{margin-right:0 !important}.admin textarea{font-size:20px;height:500px;resize:none;padding:5px;border:1px solid #b6b6b6;width:1060px}.admin .images div img{vertical-align:middle;max-height:147px;max-width:147px}.admin .images span.helper{display:inline-block;vertical-align:middle}.admin .images>div{position:relative;text-align:center;width:168px;height:168px;border:1px solid #b6b6b6;float:left;margin:0 8px 8px 0;padding:10px;background-color:#fff}.admin .images>div .imagepath{border-radius:0;position:absolute;width:168px;font-size:12px;bottom:-11px;left:-1px}.admin .images>div:hover{background-color:#f8f8f8}.admin th.small{width:40px}form label{margin-right:10px}input[type=file]{width:230px}.clearfix:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}* html .clearfix{height:1%}.admin form p{margin:20px 0}.message{padding:20px;margin:10px 0}.message.error{background-color:#ffafc1}.message.info{background-color:#aed8be}.key{color:#fff;padding:0 10px}.key.ok{background-color:#8fd800}.key.notok{background-color:#ff6e98}.admin .images>div{position:relative}.admin .images .controls{position:absolute;width:32px;height:32px;background-color:#fff;border:1px solid #b6b6b6;display:none}.admin .images .preview{top:0;left:0;border-top:0;border-left:0}.admin .images .image-info{top:32px;left:0;border-top:0;border-left:0}.admin .images .picozu{top:0;right:0;border-top:0;border-right:0}.admin .images>div:hover .controls{display:block}.admin div.info{background-color:#444;color:#fff;border:1px solid #555;padding:5px 10px}.admin div.info span{width:200px;display:inline-block;color:#888}span.yes{color:#119911}span.no{color:#e55449}.admin fieldset{border:1px solid #ddd;padding:0 10px}.admin fieldset legend{padding:5px 10px}.admin fieldset span.label{width:100px;display:inline-block}' . "\n";
                if ($this->blog->config->get('picozuKey')) {
                    $out .= '/* ClassyPicozu v1.0.1 https://vox.space */.picozu-lightbox-move *{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.picozu-lightbox-overlay{background:#2b2b2b;-webkit-tap-highlight-color:rgba(0,0,0,0)}.picozu-lightbox{position:relative;padding:0;border:7px solid #2b2b2b;border-radius:10px;-o-border-radius:10px;-ms-border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px}.picozu-lightbox-html{z-index:7000;position:relative;border:0;padding:0;vertical-align:top;-webkit-overflow-scrolling:touch}.picozu-lightbox-html iframe{vertical-align:top;display:block}.picozu-lightbox .background{position:absolute;top:0;left:0;z-index:6999;float:left;padding:0}.picozu-lightbox.mode-image .lightbox-html{z-index:6998;padding:0}.picozu-lightbox.mode-html .background{background:#fff}.picozu-lightbox.mode-html .lightbox-html{overflow:auto}.picozu-lightbox .close{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADsAAAAdBAMAAADm/gmrAAAAMFBMVEUAAABAMTgrKyv/cbErKyv/cbErKyv////+4+7U1NQ/Pz//nMhqamr/udiPj4+ysrICPbt1AAAABXRSTlMAI+qsrAlLTzEAAAEJSURBVHhetdM/SgNBFMfx8QZBsLeytrFXC2ubgYVlQSymWJakkm/ibpIqDOQAWcgBhD1A2BtkTxC8gd5AW3fAeTNbbaO/9jPvT/FGnd0byfOdUjc65FqpcwfikwsdZ6IeTJxbX+zLrwZ8qQd5VGaQp7/nrjKm4Oi5LbVOOQjbnjq2nump5cVzDtvc8ircE4HNJ4sGPjy/M0/gJDwDWMtqGcA82rwGdsLaApuIG1i8BU5cccRTWJnAGSxj7oBj4BY4BC4AKuEUoAzcQN0P95yAjTbPa9Yz2Hu2LDPYeJ7CztSsftmRe+K5cI0b4dQ1Tihl9vfeTfiS5q6vPf37tYxc6sidj/ySkT/2A1vvTc0qveHvAAAAAElFTkSuQmCC) no-repeat 0 0;position:absolute;top:12px;right:-26px;opacity:1;width:29px;height:29px}.picozu-lightbox .close:hover{background-position:-30px 0}.picozu-lightbox.mode-image .close{right:14px;z-index:7002;opacity:.7}.picozu-lightbox .close span{display:none}.picozu-lightbox.mode-image:hover .close{opacity:.9}.picozu-lightbox .loader{position:relative;display:block;height:46px;width:46px;margin:33% auto;border-radius:50%;-o-border-radius:50%;-ms-border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;background-color:#ddd;overflow:hidden}.picozu-lightbox .loader:after{content:"";position:absolute;top:9px;left:9px;display:block;height:28px;width:28px;background-color:#fff;border-radius:50%;-o-border-radius:50%;-ms-border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%}.picozu-lightbox .loader>span{position:absolute;height:100%;width:50%;overflow:hidden}.picozu-lightbox .left{left:0}.picozu-lightbox .right{left:50%}.picozu-lightbox .anim{position:absolute;left:100%;top:0;height:100%;width:100%;border-radius:999px;background-color:#ed1978;opacity:.7;-webkit-animation:ui-spinner-rotate-left 5s infinite;animation:ui-spinner-rotate-left 5s infinite;-webkit-transform-origin:0 50% 0;transform-origin:0 50% 0}.picozu-lightbox .left .anim{border-bottom-left-radius:0;border-top-left-radius:0}.picozu-lightbox .right .anim{border-bottom-right-radius:0;border-top-right-radius:0;left:-100%;-webkit-transform-origin:100% 50% 0;transform-origin:100% 50% 0}@keyframes ui-spinner-rotate-right{0{transform:rotate(0)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@keyframes ui-spinner-rotate-left{0{transform:rotate(0)}25%{transform:rotate(0)}50%{transform:rotate(180deg)}75%{transform:rotate(180deg)}100%{transform:rotate(360deg)}}@-webkit-keyframes ui-spinner-rotate-right{0{-webkit-transform:rotate(0)}25%{-webkit-transform:rotate(180deg)}50%{-webkit-transform:rotate(180deg)}75%{-webkit-transform:rotate(360deg)}100%{-webkit-transform:rotate(360deg)}}@-webkit-keyframes ui-spinner-rotate-left{0{-webkit-transform:rotate(0)}25%{-webkit-transform:rotate(0)}50%{-webkit-transform:rotate(180deg)}75%{-webkit-transform:rotate(180deg)}100%{-webkit-transform:rotate(360deg)}}' . "\n";
                }
                break;
        }
        return $out;
    }

}

class _L {

    /* localization lines, you only need to change the array values, the right side that is */
    public static $lines = array(
        'Read more' => '',
        'Newer' => '',
        'Older' => '',
        'Go to homepage' => '',
        'Unfortunately, the page you were looking for was not found.' => '',
        'Unfortunately you haven`t created any posts, so why not start writing some right now?' => '',
        'Share to Facebook' => '',
        'Share to Twitter' => '',
        'Share to Google+' => '',
        'Share to Linkedin' => '',
        'Share to Pinterest' => '',
        'Title' => '',
        'Update' => '',
        'Page successfully updated.' => '',
        'There was an error saving your page file. Please try again!' => '',
        'sticky' => '',
        'publish' => '',
        'Category' => '',
        'Search Results for ' => '',
        'Image' => '',
        'Post successfully updated.' => '',
        'There was an error saving your post file. Please try again!' => '',
        'Message' => '',
        'Send' => '',
        'Drop me a line and let`s get to know eachother!' => '',
        'Your e-mail' => '',
        'Your name' => '',
        'Subject' => '',
        'Edit Post' => '',
        'There are no results for the specified search term.' => '',
        'There is already an existing post with this name! Please choose another.' => '',
        'There is already an existing page with this name! Please choose another.' => '',
        'Edit Page' => '',
        'Please fill in all the fields.' => '',
        'Your message has been successfully sent. Thank you!' => '',
        'There was an error sending the message. Please try again!' => '',
        'Upload' => '',
        'Upload Image' => '',
        'running on' => '',
        'List Images' => '',
        'Home' => '',
        'Contact' => '',
        'rss' => '',
        'Configuration' => '',
        'atom' => '',
        'View Site' => '',
        'Unable to authenticate you. Please try again!' => '',
        'Dashboard' => '',
        'Posts' => '',
        'Pages' => '',
        'Images' => '',
        'Author' => '',
        'Open image in Picozu' => '',
        'Download image' => '',
        'Date' => '',
        'Skip to content' => '',
        'Actions' => '',
        'Value' => '',
        'Key' => '',
        'New Post' => '',
        'You haven`t created any posts yet.' => '',
        'View this Post' => '',
        'Edit this Post' => '',
        'Delete this Post' => '',
        'Are you sure you want to delete this post?' => '',
        'New Page' => '',
        'List Posts' => '',
        'List Pages' => '',
        'View this Page' => '',
        'Edit this Page' => '',
        'Delete this Page' => '',
        'Are you sure you want to delete this page?' => '',
        'You haven`t created any pages yet.' => '',
        'File is valid, and was successfully uploaded.' => '',
        'Upload failed. Please try again!' => '',
        'Upload image' => '',
        'Post successfully created.' => '',
        'Create' => '',
        'and' => '',
        'Page successfully created.' => '',
        'You received a contact message on' => '',
        'from' => '',
        'Welcome to Tinambo, the one-file blogging system. You heard it right, you only need this file to run your own blog, complete with posts, pages, contact form, custom themes, Facebook integration and more.' => '',
        'Start by checking the menu above, remember to change your authentication key, which currently is' => '',
        'All the configuration is done by opening this file in a text editor, looking at the variables at the beginning of the file and change as needed.' => '',
        'and maybe change your editor slug, for better security.' => '',
        'Thank you for using' => '',
        'Tinambo could not create the required folders' => '',
        'Login' => '',
        'your name' => '',
        'Search' => '',
        'Your search query' => '',
        'editor' => '',
        'Please fill in the search term' => '',
        'your password' => '',
        'Unfortunately, you are not authorized to perform this request.' => '',
        'Not Authorized' => '',
        'so you will need to do that before you can start using your website.' => '',
        'Invalid API endpoint.' => '',
        'Invalid method data.' => '',
        'Image information' => '',
        'File Name' => '',
        'Size' => '',
        'Dimensions' => '',
        'Image tag' => '',
        'pixels' => '',
        'bytes' => '',
        'Image type' => '',
        'yes' => '',
        'no' => '',
        'select parent' => '',
        'Encryption' => '',
        'Key' => '',
        'IV' => '',
        'Check out the documentation on how to use them, encryption will not be enabled until you copy them into the php file.' => ''
    );

    /**
     * Get the value of a key from the lines array
     *
     * @public
     * @returns String
     * @param String $key
     */
    public static function get($key) {
        return ((isset(self::$lines[$key]) && self::$lines[$key] != '') ? self::$lines[$key] : $key);
    }

}

/* initialize and boot up the main object and we sail into the blue depths */
$blog = new TinamboBlog();
