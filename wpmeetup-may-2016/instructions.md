## Workshop: Building a WordPress Theme from Scratch
### WordPress Meetup Tokyo (May 15, 2016)

#### First Things First

1. What is a WordPress theme?
 * Let's take a quick look at files included in a theme
2. Resources for learning theme devlelopment
 * [Theme Handbook &raquo; Theme Basics](https://developer.wordpress.org/themes/basics/)
 * Learn from high-quality existing themes
3. Basic Terminology
 * [Template Files](https://developer.wordpress.org/themes/basics/template-files/)
 * [Template Tags](https://developer.wordpress.org/themes/basics/template-tags/)
 * [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-files/)
4. Local dev environment setup
 * [Setting up a Development Environment](https://developer.wordpress.org/themes/getting-started/setting-up-a-development-environment/)

If you have a hard time digesting all the information at this point, you may not be ready for building a theme from scratch yet. That’s ok - you can learn how to modify existing themes by learning how theme is built.

#### Getting Started

1. Set `WP_DEBUG` to `true` in `wp-config.php`
 * See also: [5 Ways to Debug WordPress](https://nacin.com/2010/04/23/5-ways-to-debug-wordpress/)
2. Download wpmeetup-tokyo.zip, which contains:
 * empty index.php
 * style.css without header comments (copy of Twenty Sixteen theme)
 * header.php
 * footer.php
 * sidebar.php
 * Stripped-down functions.php
3. If your local site has no posts, download and import the Theme Unit Test xml file from [this page](http://codex.wordpress.org/Theme_Unit_Test) 
4. Add header comments to style.css
5. Add header / footer include tag to index.php
6. Add a loop
7. Add code to display title and contents of posts
s
#### Next Steps

* Continue adding more elements to index.php and sidebar.php
* Rewrite the CSS from scratch
* Add another template file
* Check out the [Developer](http://wordpress.org/plugins/developer/) and [Theme Check](https://wordpress.org/plugins/theme-check/) plugins