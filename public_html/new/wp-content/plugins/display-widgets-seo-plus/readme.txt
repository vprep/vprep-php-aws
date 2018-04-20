=== Display Widgets SEO Plus ===
Contributors: seo-dave
Donate link: http://stallion-theme.co.uk/display-widgets-seo-plus-plugin/
Tags: Widget, Widgets, Widget Logic, Widget Context, Sidebar, WPML, WPML Language, WPML Language Plugin, Display Widgets, SEO, Silo SEO, SEO silo structure, WordPress SEO Plugin, WordPress SEO, SEO Plugin, PageRank, PR, Link Benefit, Filter, Conditional, Categories, Custom Taxonomies, BuddyPress, bbPress
Requires at least: 4.4
Tested up to: 4.7
Stable tag: 1.1.2
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

Control how WordPress widgets are shown, works with the WPML language plugin, bbPress/BuddyPress and as part of a Silo SEO links structure.

== Description ==

The Display Widgets SEO Plus Plugin is an updated version of the popular Display Widgets Plugin v2.05. Major improvements include a significant increase in the number of WordPress conditional functions (like is_attachment() and is_paged()) are now supported. WPML Language Plugin support has been significantly improved and support for bbPress forums and BuddyPress groups has been added (since v1.1.0).

Display Widgets v2.05 WPML language plugin support wasn't working correctly, v2.05 language options overrode other options: could only set Show or Hide on a language section.

Display Widgets SEO Plus v1.1.0 adds support for the BuddyPress plugin and the bbPress plugin.

**Why Use Display Widgets SEO Plus?**

WordPress widgets are awesome, widgets can be used to add all sorts of content to a WordPress sites sidebars and other widget areas (under "Appearance" > "Widgets"). However, the vast majority of WordPress themes lack awareness of what section of the site they are on: by default WordPress widgets lack support for the built in conditional functions like the ones listed below.

**Site Section - WordPress Conditional Function**

* Static Front Page - is_front_page()
* Home Page Archives - is_home()
* Category Archives - is_category()
* Tag Archives - is_tag()
* Dated Archives - is_date()
* Author Archives - is_author()
* Search Results - is_search()
* Archives - is_archive()
* Posts - is_single()
* Static Pages - is_page()
* Attachment Pages - is_attachment()
* 404 Error Page - is_404()
* Custom Taxonomy Archives - is_tax()
* Custom Post Type Archives - is_post_type_archive()
* Specific Custom Post Type - via get_post_type()

In most WordPress themes a widget can't be set to only load on Tag Archives or only load on Posts, or don't load on a few selected Static Pages: WordPress by default has NO widget logic.

The Display Widgets SEO Plus Plugin adds the above WordPress conditional functions AND other widget logic features to most WordPress widgets. When the Display Widgets SEO Plus Plugin is active it's possible using simple dropdown selections and tick boxes (added to the bottom of widgets under "Appearance" > "Widgets") to Show OR Hide a widget on a Single Page, a Single Category, only on Posts, only on Tags, only on Search Results and so much more.....

The above conditional options are further extended with these conditional functions:

* Paged Archives/Paged Comments - via is_paged()
* Specific Categories
* Posts Within Specific Categories
* Specific WPML Languages
* Specific bbPress sections
* Specific BuddyPress sections

Works with Custom Taxonomies, Custom Post Types, Custom Post Type Archives and the WPML language plugin, bbPress and BuddyPress.

**WPML Language Plugin Widget Logic Support**

The widget logic is so advanced it works seamlessly with the very popular WPML Language Plugin: WPML is an advanced language plugin for WordPress, can be used to create multiple language versions of a site under one WordPress installation.

For example a widget could be set to Show (or Hide) on One Category Archive AND the Posts in that Category, BUT only when in a specific language section of the site: i.e. a German Category, with German Posts, when on the German part of the site. Or a widget could be set to only load on the Posts of a specific Category and on a few select Static Pages, on the 404 Error page and on the Home Page.

Thinking of upgrading from the original Display Widgets Plugin v2.05, the above is NOT possible in version 2.05. In the original Display Widgets Plugin the WPML language options override the widget logic settings: could only set a widget to be Shown or Hidden on an entire language section.

I considered offering the new features to the Display Widgets plugin author, but looks like the plugin is either abandoned or close to it: Display Widgets v2.05 hasn't been updated for well over a year and support requests aren't answered. If this new plugin becomes popular I'll be adding new widget logic features in the future (the first update v1.1.0 of the Display Widgets SEO Plus Plugin added bbPress and BuddyPress support), so made sense to fork the code into a new plugin.

There are so many widget logic permutations almost anything is achievable now.

**BuddyPress Plugin and bbPress Plugin Support** 

Display Widgets SEO Plus v1.1.0 adds support for the BuddyPress plugin and the bbPress plugin.

BuddyPress Plugin Conditional Widget Logic Functions

* ALL BuddyPress Pages - is_buddypress()
* BuddyPress Members Directory - bp_is_members_directory()
* BuddyPress User Pages - bp_is_user()
* BuddyPress Activity Streams Directory - bp_is_activity_directory()
* BuddyPress Activity Streams Item - bp_is_single_activity()
* BuddyPress Groups Directory - bp_is_groups_directory()
* BuddyPress Group - bp_is_group()
* BuddyPress Group Forum - bp_is_current_action( 'forum' )
* BuddyPress Group Forum Topic - bp_is_group_forum_topic()
* BuddyPress Registration Page - bp_is_register_page()

bbPress Plugin Conditional Widget Logic Functions

* ALL bbPress Pages - is_bbpress()
* bbPress User Pages - bbp_is_single_user()
* bbPress Forum Archive - bbp_is_forum_archive()
* bbPress Category Forum - bbp_is_forum_category()
* bbPress Forum - bbp_is_single_forum()
* bbPress Forum Topic - bbp_is_single_topic()
* bbPress Topic Tag - bbp_is_topic_tag()

= Tags =
Widget, Widgets, Widget Logic, Widget Context, Sidebar, WPML, WPML Language, WPML Language Plugin, Display Widgets, SEO, Silo SEO, SEO silo structure, WordPress SEO Plugin, WordPress SEO, SEO Plugin, PageRank, PR, Link Benefit, Filter, Conditional, Categories, Custom Taxonomies, BuddyPress, bbPress

== Other Notes ==

**SEO Silo Structure in WordPress**

I developed the advanced widget logic (been using this in the [Stallion Responsive SEO Theme](http://stallion-theme.co.uk/stallion-responsive-theme/) for years) so I could easily build SEO silo link structures in WordPress using widgets. Most WordPress users who understand silo SEO structures tend to use Static Pages to build silo structures and this was SLOW to build and limited in scope.

Silo SEO linking structures are used to link related (niched) content together into a silo: basically content that's in the same niche, the same category.

To build silo SEO linking structures on any website, you try to limit the number of links FROM your most important content (in WordPress your most important content is your Posts and Static Pages) to unrelated content.

In a perfect SEO world a WordPress Post about the [Stallion WordPress SEO Plugin](http://stallion-theme.co.uk/stallion-wordpress-seo-plugin/ "WordPress SEO Plugin") (another WordPress SEO plugin I develop) would mostly link to other Posts, Static Pages, Category archives etc... which include the keywords: Stallion, WordPress, SEO, Plugin and related keywords (like search engine optimization, plugins....) as the anchor text of the links. The Stallion WordPress SEO Plugin Post would also NOT link to unrelated content like Dated Archives (their anchor text is AWFUL SEO wise: do NOT use this widget), unrelated Posts, unrelated Categories etc...

This is easy to achieve manually if you don't mind linking your content together one link at a time and your WordPress site has no widgets, no navigation menus, no automated internal linking!!! No one wants to use WordPress this way, the whole point of using a CMS like WordPress is how it automatically links content together.

**An SEO compromise is using conditional widget logic:**

For example if you have a set of Posts within the WordPress SEO Plugin silo/niche, to build a silo SEO link structure you would link them together (SEO isn't that hard to understand). This is easy to achieve manually, BUT time consuming and if you add standard WordPress widgets (Dated Archives, Tags, Categories...) sitewide there will be more links to unrelated content: non-silo links will be greater than silo links and this damages your silo structure!

Many WordPress sites use a sitewide Categories widget, Tagcloud widget, Dated Archives widget, Recent Posts widget etc... it's a LOT of unrelated links from your Posts and Pages. On most WordPress sites the average Post or Page will have FAR more unrelated links than silo links!

Using the Display Widgets SEO Plus Plugin options on say a Category widget, the widget can be set to NOT load on Posts and Pages. The categories would still be linked to via the rest of the site (will have more than enough links for Google to find, spider and index them), but on your important content (Posts/Pages) the unrelated links are gone.

By removing the unrelated links (links to unrelated categories, tags, dated archives...) from your Posts and Pages it adds additional SEO value to any related links: links to other Posts and Pages in the same silo/niche/categories.

You still have to add the related silo links, this could be via multiple custom text widgets with links to the Posts in a particular silo (I used to do it this way).

On my site I have a WordPress SEO Plugin silo (has content related to SEO plugins), if you visit the [Stallion WordPress SEO Plugin](http://stallion-theme.co.uk/stallion-wordpress-seo-plugin/ "WordPress SEO Plugin") Post for example it's in theses three related categories: "Stallion WordPress SEO Plugin Tutorials", "WordPress SEO Plugins" and "Yoast WordPress SEO Tutorial".

You will see there's only two widgets loaded with links: the keyword targeting on links anchor text is really important SEO wise.

The two widgets are a Recent Posts widgets (called "Latest Articles") which is loaded sitewide (I want new content found by Google quickly, for a more extreme silo SEO link structure I could hide it on Posts/Pages).

And the Popular Articles widgets: the is a Stallion Responsive SEO Theme specific widget called the [Stallion SEO Posts Widget](http://stallion-theme.co.uk/stallion-responsive-wordpress-seo-posts-widget/), (I plan to release a stand alone version of the Stallion SEO Posts Widget which will work with most themes) this has additional silo SEO features: it uses widget logic to load Posts ONLY from the categories the Post viewed is in (in this case only from the three categories "Stallion WordPress SEO Plugin Tutorials", "WordPress SEO Plugins" and "Yoast WordPress SEO Tutorial").

There's 5 random links from the Latest Articles widget, these aren't siloed/niched in any way.

And 20 links from the Popular Articles widget and all those links are to Posts in the three categories "Stallion WordPress SEO Plugin Tutorials", "WordPress SEO Plugins" and "Yoast WordPress SEO Tutorial": since the post is about a WordPress SEO Plugin and all the links are to Posts in categories about WordPress SEO Plugins, most of the links are going to have anchor text related to WordPress SEO Plugins: that's a SEO silo link structure and it's automated. Added one Stallion SEO Posts Widget, set it to load Popular Posts (based on most commented Posts), set the relevant widget logic and that's it, don't have to touch it again, the Posts loaded changes based on which categories a Post viewed is in, it's all automated (awesome set of SEO features).

So 20 of the 25 links from widgets are probably part of the same silo/niche as the Post viewed.

If we had a sitewide categories widget it would add a further 25 category links via widgets (view the Home page and you'll see the categories widget in the Footer area). Some of the category links will be related to the Stallion WordPress SEO Plugin article, but many won't be. My site is quite strongly niched towards WordPress, SEO, Themes, Plugins... so it wouldn't damage my silo structure for this Post too much, but I have Posts about Making Money Online, AdSense Blogger Templates and other varied content, I don't want to link the unrelated sections together too much.

**WordPress SEO Resources**

For WordPress SEO tips and tutorials, check out the following articles:

* [WordPress SEO Tutorial](http://stallion-theme.co.uk/seo-tutorial-for-wordpress/)
* [WordPress SEO Tutorial Friendly Permalinks](http://stallion-theme.co.uk/seo-friendly-wordpress-permalinks/)
* [WordPress SEO Tutorial Title Tag Optimization](http://stallion-theme.co.uk/wordpress-title-element-tag-optimization/)
* [WordPress SEO Tutorial 301 Redirects](http://stallion-theme.co.uk/wordpress-seo-tutorial-301-redirects/)
* [WordPress SEO Tutorial Anchor Text](http://stallion-theme.co.uk/wordpress-seo-tutorial-anchor-text/)
* [WordPress SEO Tutorial Alt Text](http://stallion-theme.co.uk/wordpress-seo-tutorial-alt-text/)
* [WordPress SEO Tutorial Related Posts Plugins](http://stallion-theme.co.uk/wordpress-seo-tutorial-related-posts-plugins/)
* [WordPress SEO Tutorial Duplicate Content](http://stallion-theme.co.uk/wordpress-seo-tutorial-duplicate-content-and-canonical-urls/)
* [WordPress SEO Tutorial Google XML Sitemaps](http://stallion-theme.co.uk/wordpress-seo-tutorial-google-xml-sitemaps/)
* [WordPress SEO Comments Plugin](http://stallion-theme.co.uk/wordpress-seo-comments-plugin/)

**WordPress SEO Plugins**

* [Stallion WordPress SEO Plugin](http://wordpress.org/plugins/stallion-wordpress-seo-plugin/)
* [WordPress SEO Comments Plugin](http://wordpress.org/plugins/blog-comments-seo/)
* [Display Widgets SEO Plus Plugin](http://wordpress.org/plugins/display-widgets-seo-plus/)

== Installation ==

You can use the built in WordPress plugin installer (under 'Plugins >> Add New : Upload') and plugin upgrader, or you can install the Display Widgets SEO Plus plugin manually using FTP.

1. Upload the `display-widgets-seo-plus` folder to the `/wp-content/plugins/` directory using FTP
2. Activate the Display Widgets SEO Plus plugin through the 'Plugins' menu in WordPress
3. Under "Appearance" > "Widgets" each widget includes a new Display Widgets SEO Plus Options section.

== Frequently Asked Questions ==

= How to upgrade the Display Widgets Plugin v2.05 to the new Display Widgets SEO Plus Plugin. =

To upgrade from Display Widgets v2.05 to the new Display Widgets SEO Plus Plugin.

Under "Plugins" > "Installed Plugins" deactivate the Display Widgets Plugin v2.05.

Under "Plugins" > "Add New" use the Keyword Search form to search for "Display Widgets SEO" and install "Display Widgets SEO Plus".
Activate the Display Widgets SEO Plus Plugin.

Deactivating Display Widgets v2.05 and activating Display Widgets SEO Plus won't change any of your current widget logic options, go to "Appearance" > "Widgets" and check each widgets Display Widgets options and change as required (see next FAQ item).

= Will the Display Widgets Plugin v2.05 widget settings work with Display Widgets SEO Plus? =

Display Widgets SEO Plus uses the same database names etc... for some of the old Display Widgets v2.05 options, though some have been split into two options, so when switching to Display Widgets SEO Plus it's recommended you check each widgets settings.

Some of the old 2.05 options under "Miscellaneous +/-" have been split into two options. If you have 

* "Miscellaneous +/-" - "Archives" Ticked
* "Miscellaneous +/-" - "Single Post" Ticked
* "Miscellaneous +/-" - "Search" Ticked

You will find the new Display Widgets SEO Plus options:

* "Content Types +/-" - "All Archives - Pages 2,3,4..." is Ticked
* "Content Types +/-" - "All Posts - Pages 2,3,4..." is Ticked
* "Content Types +/-" - "All Search Results - Pages 2,3,4..." is Ticked

You would be missing Page 1 of the set, to replicate the original 2.05 options set these to ticked:

* "Content Types +/-" - "All Archives - Page 1 Only"
* "Content Types +/-" - "All Archives - Pages 2,3,4..."

* "Content Types +/-" - "All Posts - Page 1 Only"
* "Content Types +/-" - "All Posts - Pages 2,3,4..."

* "Content Types +/-" - "All Search Results - Page 1 Only"
* "Content Types +/-" - "All Search Results - Pages 2,3,4..."

The Display Widgets v2.05 the "Categories +/-" options have changed in the new plugin.

The "All Categories" option has been removed and replaced with two options:

* "Content Types +/-" - "All Category Archives - Page 1 Only"
* "Content Types +/-" - "All Category Archives - Pages 2,3,4..."

The list of Categories ticked under "Categories +/-" in Display Widgets 2.05 will still be ticked under "Categories +/-" of the new plugin, but you will need to set and additional option (a dropdown selection form) of what you want to happen in those selected Categories.

These are the new "Categories +/-" settings:

* Category Page 1 and All it's Posts
* Category Pages 1,2,3... and All it's Posts
* Category Page 1 and NOT it's Posts
* Category Pages 1,2,3... and NOT it's Posts
* Categories Posts ONLY Page 1
* Categories Posts ONLY Pages 1,2,3...

Rather than one Categories option, we have six.

The remaining Display Widgets v2.05 options are pretty much the same as the corresponding Display Widgets SEO Plus options, though some have different names and the Language options (for the WPML language plugin) work correctly (partially broken in the old plugin v2.05).

= Some widgets lack the Display Widgets SEO Plus Options? =

Old widgets created for WordPress versions pre 2.8 are quite basic in format and lack the WordPress hooks to add additional widget logic options. This tends to be widgets which lack a multi-widget option (can't add the same widget multiple times). There's no work around.

= Widgets are No longer available when the Widget Display SEO Plus Plugin is active! =

Some WordPress plugins and themes alter when widget checking starts. Try adding this to your WordPress themes functions.php file or within a plugin:

`	add_filter( 'dwplus_callback_trigger', 'dwplus_callback_trigger' );
	function dwplus_callback_trigger() {
		return 'wp_head'; // change to: plugins_loaded, after_setup_theme, wp_loaded, wp_head, or a hook of your choice
	}`

The above code is also commented out near the top (between lines 25 and 30) of the `display-widgets-seo-plus.php` file under `/wp-content/plugins/display-widgets-seo-plus/`. Edit the file and activate this code by deleting the /* on line 25 and the */ on line 30. 

= I would like the same options available to Categories to be available with Tags and Custom Taxonomies, is this possible? =

Currently no, but in principal yes it is possible. This is version 1.* and includes a lot of new conditional options not available in the Display Widgets plugin v2.05 including the advanced Categories settings.

I started adding the Tags version of the Categories options, (in version 1.0.0) but the logic is confusing (couldn't get it working smoothly), so commented out the code and left it as a todo (if possible) future feature. In v1.1.0 fixed a WPML language plugin bug (selected foreign Categories not saved correctly) and added bbPress/BuddyPress support (more features on the way).

= How can I add more widget logic? =

The Display Widgets SEO Plugin includes most of the core WordPress conditional logic and some of the logic related to plugins like WPML Language plugin, BuddyPress and bbPress, but it can't cover everything (would mean hundreds of options to cover various plugins etc...!).

Currently there's no built in way to add additional widget logic, but I've tested the Display Widgets SEO plugin with the Widget Logic Plugin http://wordpress.org/plugins/widget-logic/ and the widget logic (basically PHP code) added to the Widget Logic Plugin form works.

The Widget Logic Plugin hasn't been updated for a couple of years, in the future I might update the code and either add it to the Display Widgets SEO Plus Plugin or revamp the plugin and release a new one.

= I'd like to hide some Widget Titles, is this possible?  =

Yes it is. Maybe you have a WordPress site with dozens of widgets with different Widget Logic settings and some of them lack Widget Titles: no obvious way to distinguish one widget from another.

For example if you have 10 Text Widgets with empty Widget Titles all 10 will be listed under "Appearance" > "Widgets" with the the Widget Title "Text". This can be difficult to manage, to edit a specific widget you might have to open up all 10 Text Widgets to find the right one!

As of Display Widgets SEO Plus v1.1.0 you can add a "Hidden Widget Title" simply by adding an explanation mark (!) before the Widget Title like so.

`!Hidden Widget Title`

This would result in the Widget Title (!Hidden Widget Title) NOT showing on the front end (your visitors won't see it), but under "Appearance" > "Widgets" you can see the Widget Title.

= After a plugin update no Categories are listed under the "Categories +/-" form! =

The Display Widgets SEO Plus Plugin uses a WordPress Transient (a cache version) of the Categories for performance reasons. In v1.0.0 (first release) the Categories part of the cache was disabled (there were bugs in the code, fixed in v1.1.0+).

If you update manually via FTP from v1.0.0 to v1.1.0+ the WordPress Transient (the cache) isn't automatically cleared and you will find no Categories listed under the "Categories +/-" form of widgets.

This is easily fixed by rebuilding the transient/cache, this can be achieved by:

Waiting for about a week for the transient/cache to expire (it's automatically expired and rebuilt at least once a week).

Deactivate and reactivate the Display Widgets SEO Plus Plugin: turn it off and on :-).

Create/Edit/Delete a WordPress Post or Static Page : Simply editing any Post/Page and clicking the "Update" button rebuilds the transient/cache.

Create/Edit/Delete a WordPress Category/Tag/Taxonomy : Simply editing any Category/Tag etc.. and clicking the "Update" button rebuilds the transient/cache.

This should only occur when updating from v1.0.0 to v1.1.0+, though if I add a similar set of options under "Categories +/-" for Tags or Custom Taxonomies (would like to) the same issue will occur when first updating.

== Screenshots ==

1. Display Widgets SEO Plus Options on a Widget.

2. Display Widgets SEO Plus Options on a Widget : shows the `Categories +/-` options open. Note there are six Category condition options.

3. Display Widgets SEO Plus Options on a Widget : shows the `Content Types +/-` options open. Note there are twenty two condition options.

4. Display Widgets SEO Plus Options on a Widget : shows the `Static Pages +/-` options open. Select specific pages to hide/show the widget on: the example is set to "Show On Ticked".

5. Display Widgets SEO Plus Options on a Widget : shows the `Languages +/-` options open, available when the WPML languages plugin is active. Select specific languages to hide/show the widget on: the example is set to "Show On Ticked" AND to "Use Above Options : AND Ticked Languages" which means the earlier ticked options are combined with the language options.

6. Display Widgets SEO Plus Options on a Widget : shows the `Languages +/-` options open, available when the WPML languages plugin is active. Select specific languages to hide/show the widget on: the example is set to "Hide On Ticked" AND to "Ignore Above Options : Ticked Languages ONLY" which means the earlier ticked options are ignored, only the language options work.

7. Display Widgets SEO Plus Options on a Widget : shows the BuddyPress Plugin widget logic options under `Content Types +/-`.

8. Display Widgets SEO Plus Options on a Widget : shows the bbPress Plugin widget logic options under `Content Types +/-`.

== Changelog ==
= 1.1.2 =
* Bug Fix: Under "WordPress Posts +/-" Posts IDs associated with Custom Post Types didn't work: accidentally blocked Post IDs that wasn't associated as a WordPress Post.
* Tested in WordPress Version 4.7

= 1.1.1 =
* Bug Fix: The options "All Archives - Page 1 Only" and "All Archives - Pages 2,3,4..." settings under "Content Types +/-" worked for Categories and Tags (correctly), but not for the other Archives: Dated Archives, Author Archives, Custom Post Type Archive or Custom Taxonomy Archive. Caused by a code inconsistency.
* Tested in WordPress Version 4.7 Release Candidate 1

= 1.1.0 =
* Bug Fix: The options "All Archives - Page 1 Only" and "All Archives - Pages 2,3,4..." settings under "Content Types +/-" were ignored - Was a simple mistake in the v1.0.0 code order.
* Bug Fix: The WPML Language plugin issue related to transients and the `register_globals()` function being called three times - Issue left over from the original Display Widgets 2.05 plugin code.
* Bug Fix: The WPML Language plugin issue related to when the "WPML" > "Languages" : "Make themes work multilingual" - "Adjust IDs for multilingual functionality" option is ticked resulting in duplicate Categories listed under "Categories +/-" - Required two more WPML filers removing when the "get_categories()" function was called.
* Bug Fix: The Display Widgets SEO Plus transient (Static Pages, Categories cache etc...) not deleting when a Post/Static Page was saved - Original Display Widgets v2.05 uses the wrong WordPress hook.
* Bug Fix: The Display Widgets SEO Plus transient (Static Pages, Categories cache etc...) not deleting when a Taxonomy (Category for example) was saved or deleted - Missing hooks in original Display Widgets Plugin v2.05.

* Rebuilt the code behind the Display Widgets SEO Plus transient cache: the new code is more efficient and works correctly now.
* New Feature: Added support for the BuddyPress plugin (see below).
* New Feature: Is ALL BuddyPress Pages - is_buddypress()
* New Feature: Is BuddyPress Members Directory - bp_is_members_directory()
* New Feature: Is BuddyPress User Pages - bp_is_user()
* New Feature: Is BuddyPress Activity Streams Directory - bp_is_activity_directory()
* New Feature: Is BuddyPress Activity Streams Item - bp_is_single_activity()
* New Feature: Is BuddyPress Groups Directory - bp_is_groups_directory()
* New Feature: Is BuddyPress Group - bp_is_group()
* New Feature: Is BuddyPress Group Forum - bp_is_current_action( 'forum' )
* New Feature: Is BuddyPress Group Forum Topic - bp_is_group_forum_topic()
* New Feature: Is BuddyPress Registration Page - bp_is_register_page()
* New Feature: Added support for the bbPress plugin (see below).
* New Feature: Is ALL bbPress Pages - is_bbpress()
* New Feature: Is bbPress User Pages - bbp_is_single_user()
* New Feature: Is bbPress Forum Archive - bbp_is_forum_archive()
* New Feature: Is bbPress Category Forum - bbp_is_forum_category()
* New Feature: Is bbPress Forum - bbp_is_single_forum()
* New Feature: Is bbPress Forum Topic - bbp_is_single_topic()
* New Feature: Is bbPress Topic Tag - bbp_is_topic_tag()

= 1.0.0 =
* First release: Built from the Display Widgets Plugin v2.05 with the addition of lots of new conditionals (see below list of New Features) and an improvement how widgets are hidden/shown when the WPML languages plugin is active.
* New Feature: Is Dated Archive - is_date()
* New Feature: Is Author Archive - is_author()
* New Feature: Is Tag Archive - is_tag()
* New Feature: Is WordPress Post - is_single()
* New Feature: Is Static Page - is_page()
* New Feature: Is Attachment Page - is_attachment()
* New Feature: Is Custom Post Type Archive - is_post_type_archive()
* New Feature: Is Specific Custom Post Type - via get_post_type()
* New Feature: Is Paged Archive/Paged Comments - via is_paged()
* New Feature: Is Specific Categories
* New Feature: Is WordPress Posts Within Specific Categories
* New Feature: Is Specific WPML Languages Plus Other Widget Logic Options

== Upgrade Notice ==

= 1.1.2 =
Fixed a minor code bug in the "WordPress Posts +/-" options : now works with Custom Post Types.