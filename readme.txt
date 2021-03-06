=== The SEO Framework ===
Contributors: Cybr
Donate link: https://theseoframework.com/donate/
Tags: open graph, description, automatic, generate, generator, title, breadcrumbs, ogtype, meta, metadata, search, engine, optimization, seo, framework, canonical, redirect, bbpress, twitter, facebook, google, bing, yahoo, jetpack, genesis, woocommerce, multisite, robots, icon, cpt, custom, post, types, pages, taxonomy, tag, sitemap, sitemaps, screenreader, rtl, feed
Requires at least: 3.8.0
Tested up to: 4.5.2
Stable tag: 2.6.6
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

The SEO Framework plugin provides an automated and advanced SEO solution for your WordPress website.

== Description ==

= The SEO Framework =

**Easy for beginners, awesome for experts. WordPress SEO for Everyone.**

An accessible, unbranded and extremely fast SEO solution for any WordPress website.

> <strong>This plugin strongly helps you create better SEO value for your content.</strong><br>
> But at the end of the day, it all depends on how entertaining or well-constructed your content or product is.
>
> No SEO plugin does the magic thing to be found instantly. But doing it right helps a lot.<br>
> The SEO Framework helps you doing it right. Give it a try!
>
> The Default Settings are recommended within the SEO Settings page. If you know what you're doing, go ahead and change them! Each option is also documented.

= What this plugin does, in a few lines =

* Automatically configures SEO for every page, post, taxonomy and term.
* Allows you to adjust the SEO globally.
* Allows you to adjust the SEO for every applicable page, post, taxonomy and term.
* Shows you how to improve your SEO with a beautiful SEO bar for each supported Post, Page and Taxonomy.
* Helps your pages get ranked distinctively through various Metatag and scripting techniques.
* Helps your pages get shared more beautiful through Facebook, Twitter and other social sites.
* Allows plugin authors to easily extend this plugin.
* Supports custom post types, like WooCommerce and bbPress.
* Automatically upgrades itself from Genesis SEO.
* Allows for easy SEO plugin switch using a tool.

*Read **Transferring SEO Content using SEO Data Transporter** below for SEO plugin transitioning instructions.*

= Unbranded, Free and for the Professional =
This plugin is unbranded! This even means that we don't even put the name "The SEO Framework" anywhere within the WordPress interface, aside from the plugin activation page.
This plugin makes great use of the default WordPress interface elements, like as if this plugin is part of WordPress. No ads, no nags.
The small and hidden HTML comment can easily be disabled with the use of a filter.

Nobody has to know about the tools you've used to create your or someone else's website. A clean interface, for everyone.

= Numbers don't lie, performance matters =
Optimizing SEO is a fundamental process for any website. So we try to be non-intrusive with The SEO Framework.
The SEO Framework is byte and process optimized on PHP level, with each update the optimization is improved when possible.
Page rendering time matters in SEO. This is where we lay focus on.

* This plugin is written with massive and busy (multi-)sites in mind.
* This plugin uses various caching methods which store heavy calculations in memory and the database.
* This plugin is on average 1.49x to 1.95x faster compared to other popular SEO plugins.
* This plugin consumes on average 1.42x more server resources than other popular SEO plugins in exchange for improved performance.
* This plugin has on average 1.30 to 1.60x more database interactions in exchange for improved performance.
* And last but not least, this plugin always has 100% fewer advertisements. Let's keep it that way.

*Numbers may vary per installation and version. Last checked: 14th May 2016.*
*The numbers are based on actual plugin code runtime.*

= Completely pluggable =
The SEO Framework also features pluggable functions. All functions are active and can be called within the WordPress Loop.
This allows other developers to extend the plugin wherever needed.
We have also provided an API documentation located at [The SEO Framework API Docs](http://theseoframework.com/docs/api/).

= Still not convinced? Let's dive deeper =

**By default, this plugin automatically generates:**

* Title, with super-fast 'wrong themes' support.
* Description, with anti-spam techniques.
* A canonical URL.
* Various Open Graph, Facebook and Twitter tags.
* Special Open Graph description, which organically integrates with the Facebook and Twitter snippets.
* Extended Open Graph Images support, including image manipulation.
* Canonical, with full WPMUdev Domain Mapping, subdomain and HTTPS support to prevent duplicated content.
* Schema.org LD+Json script that adds extended search support for Google Search and Chrome.
* Schema.org LD+Json script for Knowledge Graph (Personal/Business site relations, name and logo).
* Advanced Schema.org LD+Json script for Breadcrumbs (just like the visual one) which extends page relation support in Google Search.
* Schema.org LD+Json script to show the correct site name in Google Breadcrumbs.
* Publishing and editing dates, accurate to the day.
* Link relationships, with full WPMUdev Domain Mapping and HTTPS support.
* Simple Sitemap with Pages, Posts and Custom Post Types (CPT), which listens to the in-post settings.
* Feed excerpts and backlinks to prevent content scraping.

**This plugin goes further, behind the screens it:**

* Prevents canonical errors with categories, pages, subdomains and Multisite Domain Mapping.
* Disables 404 pages and empty categories from being indexed, even if they don't send a 404 response.
* Automatically notifies Google, Bing and Yandex on Post or Page update and deletion when sitemaps are enabled.

**This plugin allows you to manually set these values for each post, page, supported CPT and term:**

* Title
* Description
* Canonical URL
* Robots (nofollow, noindex, noarchive)
* Redirect, with optional Multisite spam filter (Post/Page/CPT only)
* Local on-site search settings (Post/Page/CPT only)

**This plugin allows you to adjust over 90 site settings, including:**

* Title and Description Separators and additions.
* Automated description output.
* Schema.org output, including Knowledge Graph options.
* Various robots options.
* Many home page specific options.
* Facebook, Twitter and Pinterest social integration
* Shortlink tag output.
* Link relationships
* Google, Bing, Pinterest and Yandex Webmaster verification
* Sitemap integration.
* Robots.txt sitemap integration.
* Feed anti-scraper options.
* And much, much more.

**This plugin helps you to create better content, at a glance. By showing you:**

* If the title is too long, too short, duplicated, and/or automatically generated.
* If the description is too long, too short, duplicated, has too many repeated words and/or automatically generated.
* If the page is indexed, redirected, followed and/or archived, while looking at other WordPress settings.

**We call this The SEO Bar. Check out the [Screenshots](https://wordpress.org/plugins/autodescription/screenshots/#plugin-info) to see how it helps you!**

> This plugin is fully compatible with the [Domain Mapping plugin by WPMUdev](https://premium.wpmudev.org/project/domain-mapping/) and the [Domain Mapping plugin by Donncha](https://wordpress.org/plugins/wordpress-mu-domain-mapping/).<br>
> This compatibility ensures **prevention of canonical errors**. This way your site will always be correctly indexed, no matter what you use!<br>

= Caching =

This plugin's code is highly optimized on PHP-level and uses variable, object and transient caching. This means that there's little extra page load time from this plugin, even with more Meta tags used.
A caching plugin isn't even needed for this plugin as you won't notice a difference, however it's supported wherever best suited.

**If you use object caching:**
The output will be stored for each page, if you've edited a page the page output Meta will stay the same until the object cache expires. So be sure to clear your object cache or wait until it expires.

**Used Caches:**

* Server-level Opcode (optimized).
* Staticvar functions (prevents running code twice or more).
* Staticvar class (instead of discouraged globals, prevents constructors running multiple times).
* Object caching for unique database calls and full front-end output.
* Transients for process intensive operations and persistent communication with front-and back end.

**All caching plugins are supported. If you use one, be sure to clear your cache when you want to robots to notice your changes.**

= Compatibility =

**Basics:**

* Full internationalization support through WordPress.org.
* Extended Multibyte support (CJK).
* Full Right to Left (RTL) language support.
* Extended Color vision deficiency accessibility.
* Screen reader accessibility.
* MultiSite, this plugin is in fact built upon one.
* Detection of robots.txt and sitemap.xml files.
* Detection of theme Title output "doing it right" (or wrong).

**Plugins:**

* W3 Total Cache, WP Super Cache, Batcache, etc.
* WooCommerce: Shop Page, Products, Product Breadcrumbs, Product Galleries, Product Categories and Product Tags.
* Custom Post Types, (all kinds of plugins) with automatic integration.
* WPMUdev and Donncha's Domain Mapping with full HTTPS support.
* WPMUdev Avatars for og:image and twitter:image if no other image is found.
* bbPress: Forums, Topics, Replies.
* BuddyPress profiles.
* Ultimate Member profiles.
* AnsPress Questions, Profiles and Pages, also Canonical errors have been fixed.
* StudioPress SEO Data Transporter for Posts and Pages.
* WPML, URLs, full sitemap and per-page/post SEO settings (Documentation is coming soon).
* qTranslate X, URLs, per-page/post SEO settings, the main language's sitemap (Documentation is coming soon).
* Polylang, URLs, per-page/post SEO settings, the main language's sitemap.
* Confirmed Jetpack modules: Custom Content Types (Testimonials, Portfolio), Infinite Scroll, Photon, Sitemaps, Publicize.
* Most popular SEO plugins, let's not get in each other's way.
* Many, many more plugins, yet to be confirmed.
* Divi Builder by Elegant Themes
* Visual Composer by WPBakery
* Page Builder by SiteOrigin
* Beaver Builder by Fastline Media

**Themes:**

* All themes.
* Special extended support for Genesis & Genesis SEO. This plugin takes all Post, Page, Category and Tag SEO values from Genesis and uses them within The SEO Framework Options. The easiest upgrade!

If you have other popular SEO plugins activated, this plugin will most likely automatically prevent SEO mistakes by deactivating itself on almost every part.

= Transferring SEO data using SEO Data Transporter =

Because this plugin was initially written to extend the Genesis SEO, it uses the same option name values. This makes transferring from Genesis SEO to The SEO Framework work automatically.

> If you didn't use Genesis SEO previously, Nathan Rice (StudioPress) has created an awesome plugin for your needs to transfer your SEO data.
>
> Get the [SEO Data Transporter from WordPress.org](https://wordpress.org/plugins/seo-data-transporter/).
>
> Usage:<br>
> 1. Install and activate SEO Data Transporter.<br>
> 2. Go to the <strong>SEO Data Transporter menu within Tools</strong>.<br>
> 3. Select your <strong>previous SEO plugin</strong> within the first dropdown menu.<br>
> 4. Select <strong>Genesis</strong> within the second dropdown menu.<br>
> 5. Click <strong>Analyze</strong> for extra information about the data transport.<br>
> 6. Click <strong>Convert</strong> to convert the data.
>
> The SEO Framework now uses the same data from the new Genesis SEO settings on Posts, Pages and Taxonomies.

= About the Sitemap =

The Sitemap generated with The SEO Framework is sufficient for Search Engines to find Posts, Pages and supported Custom Post Types throughout your website.
It also listens to the noindex settings on each of the items.
If you however require a more expanded Sitemap, feel free to activate a dedicated Sitemap plugin. The SEO Framework will automatically deactivate its Sitemap functionality when another (known) Sitemap plugin is found.
If it is not automatically detected and no notification has been provided on the Sitemap Settings, feel free to open a support ticket and it will be addressed carefully.

The Breadcrumb script generated by this plugin on Posts will also make sure Google easily finds related categories which aren't included within the Sitemap of this plugin.

= Other notes =

*Genesis SEO will be disabled upon activating this plugin. This plugin takes over and extends Genesis SEO.*

***The Automatic Description Generation will work with any installation, but it will exclude shortcodes. This means that if you use shortcodes or a page builder, be sure to enter your custom description or the description will fall short.***

***The home page tagline settings won't have any effect on the title output if your theme's title output is not written according to the WordPress standards, which luckily are enforced strongly on new WordPress.org themes since recently.***

> <strong>Check out the "[Other Notes](https://wordpress.org/plugins/autodescription/other_notes/#Other-Notes)" tab for the API documentation.</strong>

== Installation ==

1. Install The SEO Framework either via the WordPress.org plugin directory, or by uploading the files to your server.
1. Either Network Activate this plugin or activate it on a single site.
1. That's it!

1. Let the plugin automatically work or fine-tune each page with the metaboxes beneath the content or on the taxonomy pages.
1. Adjust the SEO settings through the SEO settings page if desired. Red checkboxes are rather left unchecked. Green checkboxes are default enabled.

== Screenshots ==

1. This plugin shows you what you can improve, at a glance. With full color vision deficiency support.
2. Hover over any of the SEO Bar's items to see how you can improve the page's SEO. Red is bad, orange is okay, green is good. Blue is situational.
3. The dynamic Post/Page SEO settings Metabox. This box is also neatly implemented in Categories and Tags.
4. The SEO Settings Page. With over 90 settings, you are in full control. Using the Default Settings and filling in the Knowledge Graph Settings and Social Meta Settings is recommended to do.

== Frequently Asked Questions ==

= Is The SEO Framework Free? =

Absolutely! It will stay free as well, without ads or nags!

= I have a feature request, I've found a bug, a plugin is incompatible... =

Please visit [the support forums](https://wordpress.org/support/plugin/autodescription) and kindly tell me about it. I try to get back to you within 48 hours. :)

= Is this really a Framework? =

This plugin is not in particular a framework in a technical sense, but it is built with a framework's mindset. It is however a framework for your website's SEO, a building block that keeps everything together.
This means that this plugin will do all the great Search Engine Optimization, and also allows for extensions and real-time alterations. For when you really want or need to change something.
Extensions built for this plugin might just as well work as a standalone. The SEO Framework provides an easier and cached way of doing so, however.

= I am a developer, how can I help? =

The SEO Framework is currently a one-man project. However, any input is greatly appreciated and everything will be considered.
Please leave feature requests in the Support Forums and I will talk you through the process of implementing it if necessary.

= I'm not a developer, how can I help? =

A way of donating is available through the donation link on the plugin website.
However, you can also greatly help by telling your friends about this plugin :).

= I want to remove or change stuff, but I can't find an option! =

The SEO Framework is very pluggable on many fields. Please refer to the [Other Notes](https://wordpress.org/plugins/autodescription/other_notes/).
Please note that a free plugin is underway which will allow you to change all filters from the dashboard. No ETA yet.

= No ads! Why? =

Nope, no ads! No nags! No links! Never!
Why? Because I hate them, probably more than you do.
I also don't want to taint your website from the inside, like many popular plugins do.
Read more about this on the [Plugin Guidelines, Section 7](https://wordpress.org/plugins/about/guidelines/).

***But how do you make a living?***

Currently, The SEO Framework is non-profit.
This plugin was first released to the public in March 15th, 2015. From there it has grown, from 179 lines of code, to more than 17100 lines.
With over 600,000 characters of code written, this plugin is absolutely a piece of art in my mind.
And that's what it should stay, (functional) art.
I trust that people are good at heart and will tell their friends and family about the things they enjoy the most, what they're excited about, what they find beneficial or even beautiful.

With The SEO Framework I try to achieve exactly that. It's made with <3.

= Does this plugin collect my data? =

Absolutely not! Read more about this on the [Plugin Guidelines, Section 7](https://wordpress.org/plugins/about/guidelines/).

= Premium version? =

Nope! Only premium extensions. These are planned and being developed.

= If a premium extensions is released, what will happen to this plugin? =

This plugin is built to be an all-in-one SEO solution for professional environments, so:

1. No advertisements about the premium extensions will be placed within this plugin.
1. No features will be removed or replaced for premium-only features.
1. The premium extensions will most likely only be used for big-business SEO. Which are very difficult to develop and which will confuse most users anyway.

= I've heard about an extension manager, what's that? =

Currently it's not available. When it is, it will allow you to download and activate extensions for The SEO Framework. It will support both multisite and single-site and the registration will be based on the Akismet plugin.

= The sitemap doesn't contain categories, images, news, etc. is this OK? =

This is not a problem. Search Engines love crawling WordPress because its structure is consistent and well known.
If a visitor can't find a page, why would a Search Engine? Don't rely on your sitemap, but on your content and website's usability.

= What's does the application/ld+json script do? =

The LD+Json scripts are Search Engine helpers which tell Search Engines how to connect and index the site. They tell the Search Engine if your site contains an internal search engine, what sites you're socially connected to and what page structure you're using.

= The (home page) title is different from the og:title, or doesn't do what I want or told it to. =

The theme you're using is using outdated standards and is therefore doing it wrong. Inform your theme author about this issue.

Give the theme author these two links: https://codex.wordpress.org/Title_Tag https://make.wordpress.org/themes/2015/08/25/title-tag-support-now-required/

If you know your way around PHP, you can speed up this process by replacing the `<title>some code here</title>` code with `<title><?php wp_title('') ?></title>` within the `header.php` file of the theme you're using.

= The meta data is not being updated, and I'm using a caching plugin. =

All The SEO Framework's metadata is put into Object cache when a caching plugin is available. The descriptions and schema.org scripts are put into Transients. Please be sure to clear your cache.
If you're using W3 Total Cache you might be interested in [this free plugin](https://wordpress.org/plugins/w3tc-auto-pilot/) to do it for you.

= Ugh, I don't want anyone to know I'm using The SEO Framework! =

Aww :(
Oh well, here's the filter you need to remove the HTML tags saying where the Meta tags are coming from:
`add_filter( 'the_seo_framework_indicator', '__return_false' );`

= I'm fine with The SEO Framework, but not with you! =

Well then! D: We got off on the wrong foot, I guess..
If you wish to remove only my name from your HTML code, here's the filter:
`add_filter( 'sybre_waaijer_<3', '__return_false' );`

= I want to transport SEO data from other plugins to The SEO Framework, how do I do this? =

Please refer to this small guide: [SEO Data Migration](http://theseoframework.com/docs/seo-data-migration/).
Transporting Terms and Taxonomies SEO data isn't supported.

== Changelog ==

= 2.7.0 - Contemporary Apsiration =

**Release date:**
/
* TODO

** Summarized:**
/
* As the Extension Manager is on its way, it's the first time I actually need to make use of this plugin's application framework.
* With this, I noticed some things are to be improved. And with this update, a lot has been. As this is an Open Source project, the source sometimes needs a little change too.
* This is a maintenance release, and although nothing noticable has been changed, added or fixed; however, this update makes everything a lot lighter on your server.
* For developers, the code has been cleaned up again, massively. Enjoy!
* For everyone, this plugin now makes use of the WordPress core term data handling. Making this plugin much more reliable, and 30% faster (according to xDebug) TODO is expected BENCHMARK to see real results.
* TODO This is my goal, but is it achieved? Update this if nessecary.

**SEO Tip of the Update:**
/
* TODO

**Detailed Log:**
/
***The code is strong with [this one](https://theseoframework.com/?p= TODO #detailed).***

**For everyone:**
/
TODO
**Added:**
	/
	* General compatibility and other improvements for the upcoming extension manager.
	* TODO
**Improved:**
	/
	* TODO
	* Dismissible notices are now dismissible on every admin page when called.
**Changed:**
	/
	* TODO
	* TODO The SEO Settings page is now a submenu page, name "SEO Settings". This change is only visible when another submenu is added.
**Updated:**
	/
	* TODO
	* TODO POT translation file.
**Fixed:**
	/
	* TODO

**For developers:**
/
TODO
**Added:**
	/
	* TODO
**Improved:**
	/
	* TODO
**Changed:**
	/
	* 'AutoDescription_Siteoptions::page_id' is now publicly accessible. Making it easier to add submenu items.
**Fixed:**
	/
	* Function `the_seo_framework_dot_version()` now works as intended.
**Removed:**
	/
	* Network admin functions. Network admin settings constants and filters are held intact. Changes are listed below.
	* Public function `AutoDescription_Adminpages::add_network_menu_link()`, without deprecation.
	* Public function `AutoDescription_Adminpages::network_admin()`, without deprecation.
**Filter notes:**
	/
	* TODO
**Notes:**
	/
	* TODO
	* Cleaned up code. A whole lot.

= Full changelog =

**The full changelog can be found [here](http://theseoframework.com/?cat=3).**

== Upgrade Notice ==

= 2.6.4 =
Highly recommended update that fixes various query checks and caches.

= 2.6.3 =
This update resolves an issue with the Home Page (blog) Title and Description output.

= 2.6.2 =
This update resolves an issue with the WooCommerce Shop Page Canonical URL. Installing this update is therefore highly recommended.

== Other Notes ==

= Filters =

= Add any of the filters to your theme's functions.php or a plugin to change this plugin's output. =

Learn about them here: [The SEO Framework filters](http://theseoframework.com/docs/api/filters/)

= Constants =

= Overwrite any of these constants in your theme's functions.php or a plugin to change this plugin's output by simply defining the constants. =

View them here: [The SEO Framework constants](http://theseoframework.com/docs/api/constants/)

= Actions =

= Use any of these actions to add your own output. =

They are found here: [The SEO Framework actions](http://theseoframework.com/docs/api/actions/)

= Settings API =

= Add settings to and interact with The SEO Framework. =

Read how to here: [The SEO Framework Settings API](http://theseoframework.com/docs/api/settings/)

= Beta Version =

= Want to test the latest version before it's released? =

If there's a beta, it will be available [on Github](https://github.com/sybrew/the-seo-framework). Please note that changes there might not reflect the final outcome of the full version release. Use at own risk.
