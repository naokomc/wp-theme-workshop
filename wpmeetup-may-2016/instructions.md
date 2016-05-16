# Workshop: Building a WordPress Theme from Scratch
## WordPress Meetup Tokyo (May 15, 2016)

### Introduction

* Brief intro of yourself
* Your experience level of building a WordPress themes

### First Things First

1. What is a WordPress theme?
 * A quick look at files included in a theme
2. Resources for learning theme devlelopment
 * [Theme Handbook &raquo; Theme Basics](https://developer.wordpress.org/themes/basics/)
 * _High-quality_ existing themes
3. Basic Terminology
 * [Template Files](https://developer.wordpress.org/themes/basics/template-files/)
 * [Template Tags](https://developer.wordpress.org/themes/basics/template-tags/)
 * [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
4. Local dev environment setup
 * [Setting up a Development Environment](https://developer.wordpress.org/themes/getting-started/setting-up-a-development-environment/)

---

If you have a hard time digesting all the information up to this point, you may not be ready for building a theme from scratch yet. That’s ok - you can learn how to modify existing themes by learning how theme is built.

---

### Getting Started

1. Set `WP_DEBUG` to `true` in `wp-config.php`
 * See also: [5 Ways to Debug WordPress](https://nacin.com/2010/04/23/5-ways-to-debug-wordpress/)
2. Download `wpmeetup-tokyo` from [here](https://github.com/naokomc/wp-theme-workshop). The demo theme folder contains:
 * empty index.php
 * style.css without header comments (copy of Twenty Sixteen theme)
 * header.php
 * footer.php
 * sidebar.php
 * Stripped-down functions.php
3. If your local site has no posts, download and import the Theme Unit Test xml file from [this page](http://codex.wordpress.org/Theme_Unit_Test) 
4. Add header comments to style.css
 * [WordPress Codex &raquo; File Header](https://codex.wordpress.org/File_Header)
5. Add header / footer / sidebar include tags to index.php
 * [get_header](https://developer.wordpress.org/reference/functions/get_header/)
 * [get_sidebar](https://developer.wordpress.org/reference/functions/get_sidebar/)
 * [get_footer](https://developer.wordpress.org/reference/functions/get_footer/)
6. Add a WordPress Loop
 * [The Loop](https://developer.wordpress.org/themes/basics/the-loop/)
7. Add some code to display title and contents of posts
 * [Template Tags](https://developer.wordpress.org/themes/basics/template-tags/)

### Next Steps

* Continue adding more elements to index.php and sidebar.php
* Rewrite the CSS from scratch
* Add another template file
* Check out the [Developer](http://wordpress.org/plugins/developer/) and [Theme Check](https://wordpress.org/plugins/theme-check/) plugins