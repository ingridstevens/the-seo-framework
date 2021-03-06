<?php
/**
 * The SEO Framework plugin
 * Copyright (C) 2015 - 2016 Sybre Waaijer, CyberWire (https://cyberwire.nl/)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 3 as published
 * by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Class AutoDescription_Siteoptions
 *
 * Holds Site Options for the plugin.
 *
 * @since 2.2.2
 */
class AutoDescription_Siteoptions extends AutoDescription_Sanitize {

	/**
	 * Site Settings field.
	 *
	 * @since 2.2.2
	 *
	 * @var string Settings field.
	 */
	protected $settings_field;

	/**
	 * Hold the Page ID for this plugin.
	 *
	 * @since 2.2.2
	 *
	 * @var string The page ID
	 */
	public $page_id;

	/**
	 * Holds the update option.
	 *
	 * @since 2.6.0
	 *
	 * @var string The Updated option name.
	 */
	protected $o_plugin_updated;

	/**
	 * Constructor, load parent constructor and set up cachable variables.
	 */
	public function __construct() {
		parent::__construct();

		$this->settings_field = THE_SEO_FRAMEWORK_SITE_OPTIONS;
		$this->o_plugin_updated = 'updated_' . str_replace( '.', '', THE_SEO_FRAMEWORK_VERSION );
		$this->page_id = 'autodescription-settings';

		//* Set up site settings and save/reset them
		add_action( 'admin_init', array( $this, 'register_settings' ), 5 );

		//* Update site options at plugin update.
		add_action( 'admin_init', array( $this, 'site_updated_plugin_option' ), 10 );

	}

	/**
	 * Holds default site options.
	 *
	 * @since 2.6.0
	 *
	 * @return array Default site options.
	 */
	public function get_default_site_options() {

		/**
		 * Switch when RTL is active;
		 * @since 2.5.0
		 */
		if ( is_rtl() ) {
			$titleloc = 'left';
			$h_titleloc = 'right';
		} else {
			$titleloc = 'right';
			$h_titleloc = 'left';
		}

		/**
		 * Default site settings. Separated from Author, page or network settings.
		 *
		 * These settings can be overwritten per page or post depending on type and setting.
		 *
		 * @since 2.2.2
		 *
		 * No longer directly applies filters
		 * @since 2.2.7
		 */
		return array(
			// Title.
			'title_seperator'		=> 'pipe',		// Title separator (note: TYPO), dropdown
			'title_location'		=> $titleloc,	// Title separation location
			'title_rem_additions'	=> 0,			// Remove title additions
			'title_rem_prefixes'	=> 0, 			// Remove title prefixes

			// Description.
			'description_separator'	=> 'pipe',	// Description separator, dropdown
			'description_additions'	=> 1,		// "Title on Blogname" within Description
			'description_blogname'	=> 1, 		// "on Blogname" within Description
			'description_custom'	=> '',		// Custom prefix

			// Robots directory.
			'noodp'					=> 1, 	// Site noopd robots settings
			'noydir'				=> 1, 	// Site noydir robots settings

			// Robots index.
			'category_noindex'		=> 0,	// Category Archive robots noindex
			'tag_noindex'			=> 0,	// Tag Archive robots noindex
			'author_noindex'		=> 0,	// Author Archive robots noindex
			'date_noindex'			=> 1,	// Date Archive robots noindex
			'search_noindex'		=> 1,	// Search Page robots noindex
			'attachment_noindex'	=> 1,	// Attachment Pages robots noindex
			'site_noindex'			=> 0,	// Site Page robots noindex

			// Robots follow.
			'category_nofollow'		=> 0,	// Category Archive robots nofollow
			'tag_nofollow'			=> 0,	// Tag Archive robots nofollow
			'author_nofollow'		=> 0,	// Author Archive robots nofollow
			'date_nofollow'			=> 0,	// Date Archive robots nofollow
			'search_nofollow'		=> 0,	// Search Page robots nofollow
			'attachment_nofollow'	=> 0,	// Attachment Pages robots noindex
			'site_nofollow'			=> 0,	// Site Page robots nofollow

			// Robots archive.
			'category_noarchive'	=> 0,	// Category Archive robots noarchive
			'tag_noarchive'			=> 0,	// Tag Archive robots noarchive
			'author_noarchive'		=> 0,	// Author Archive robots noarchive
			'date_noarchive'		=> 0,	// Date Archive robots noarchive
			'search_noarchive'		=> 0,	// Search Page robots noarchive
			'attachment_noarchive'	=> 0,	// Attachment Page robots noarchive
			'site_noarchive'		=> 0,	// Site Page robots noarchive

			// Robots pagination index.
			'paged_noindex'			=> 1,	// Every second or later page noindex
			'home_paged_noindex'	=> 0,	// Every second or later homepage noindex

			// Robots home.
			'homepage_noindex'		=> 0,	// Home Page robots noindex
			'homepage_nofollow'		=> 0,	// Home Page robots noarchive
			'homepage_noarchive'	=> 0,	// Home Page robots nofollow

			// Home meta.
			'homepage_title'		=> '',	// Home Page Title string
			'homepage_tagline'		=> 1,	// Home Page add blog Tagline
			'homepage_description'	=> '',	// Home Page Description string
			'homepage_title_tagline' => '',	// Home Page Tagline string
			'home_title_location'	=> $h_titleloc,	// Title separation location

			// Relationships
			'shortlink_tag'			=> 0,	// Adds shortlink tag
			'prev_next_posts'		=> 0,	// Adds next/prev tags
			'prev_next_archives'	=> 1,	// Adds next/prev tags
			'prev_next_frontpage'	=> 1,	// Adds next/prev tags

			// Facebook.
			'facebook_publisher'	=> '',	// Facebook Business Url
			'facebook_author'		=> '',	// Facebook User URl
			'facebook_appid'		=> '',	// Facebook App ID

			// Dates.
			'post_publish_time'		=> 1,	// Article Published Time
			'post_modify_time'		=> 1,	// Article Modified Time

			'page_publish_time'		=> 0,	// Article Published Time
			'page_modify_time'		=> 0,	// Article Modified Time

			'home_publish_time'		=> 0,	// Article Modified Time
			'home_modify_time'		=> 0,	// Article Modified Time

			// Twitter.
			'twitter_card' 			=> 'summary_large_image',	// Twitter Card layout. If no twitter:image image is found, it'll change to 'summary', dropdown
			'twitter_site' 			=> '', 	// Twitter business @username
			'twitter_creator' 		=> '', 	// Twitter user @username

			// Social on/off.
			'og_tags' 				=> 1,	// Output of Open Graph meta tags
			'facebook_tags'			=> 1, 	// Output the Facebook meta tags
			'twitter_tags'			=> 1, 	// Output the Twitter meta tags
			'googleplus_tags'		=> 1, 	// Output the Google+ meta tags

			// Webmasters.
			'google_verification'	=> '', 	// Google Verification Code
			'bing_verification'		=> '', 	// Bing Verification Code
			'yandex_verification'	=> '', 	// Yandex Verification Code
			'pint_verification'		=> '', 	// Pinterest Verification Code

			// Knowledge general. https://developers.google.com/structured-data/customize/contact-points - This is extremely extended and valuable. Expect a premium version.
			'knowledge_output'		=> 1,				// Default for outputing the Knowledge SEO.
			'knowledge_type'		=> 'organization',	// Organization or Person, dropdown

			// Knowledge business. https://developers.google.com/structured-data/customize/logos
			'knowledge_logo'		=> 1,	// Fetch logo from WP Favicon
			'knowledge_name'		=> '',	// Person or Organization name

			// 'Sameas'
			'knowledge_facebook'	=> '',	// Facebook Account
			'knowledge_twitter'		=> '',	// Twitter Account
			'knowledge_gplus'		=> '',	// Google Plus Account
			'knowledge_instagram'	=> '',	// Instagram Account
			'knowledge_youtube'		=> '',	// Youtube Account
			'knowledge_linkedin'	=> '',	// Linkedin Account
		//	'knowledge_myspace'		=> '',	// MySpace Account // meh.
			'knowledge_pinterest'	=> '',	// Pinterest Account
			'knowledge_soundcloud'	=> '',	// SoundCloud Account
			'knowledge_tumblr'		=> '',	// Tumblr Account

			// Sitemaps.
			'sitemaps_output'		=> 1,	// Output of sitemaps
			'sitemaps_modified'		=> 1,	// Add sitemaps modified time
			'sitemap_timestamps'	=> '1',	// Sitemaps modified time format, dropdown
			'sitemaps_robots'		=> 1,	// Add sitemaps location to robots.txt
			'ping_google'			=> 1,	// Ping Google
			'ping_bing'				=> 1,	// Ping Bing
			'ping_yandex'			=> 1,	// Ping Yandex

			// Feed.
			'excerpt_the_feed'		=> 1,	// Generate feed Excerpts
			'source_the_feed'		=> 1,	// Add backlink at the end of the feed

			// Schema
			'ld_json_searchbox'		=> 1,	// LD+Json Sitelinks Searchbox
			'ld_json_sitename'		=> 1,	// LD+Json Sitename
			'ld_json_breadcrumbs'	=> 1,	// LD+Json Breadcrumbs

			// Misc.
			'counter_type' => 3, // JS counter type.

			// Cache.
			$this->o_plugin_updated => 1,	// Plugin update cache.
		);
	}

	/**
	 * Holds warned site options array.
	 *
	 * @since 2.6.0
	 *
	 * @return array $options.
	 */
	public function get_warned_site_options() {
		/**
		 * Warned site settings. Only accepts checkbox options.
		 * When listed as 1, it's a feature which can destroy your website's SEO value when checked.
		 *
		 * Unchecking a box is simply "I'm not active." - Removing features generally do not negatively impact SEO value.
		 * Since it's all about the content.
		 *
		 * Only used within the SEO Settings page.
		 */
		return array(
			'title_rem_additions'	=> 1, 	// Title remove additions.
			'title_rem_prefixes'	=> 0, 	// Title remove prefixes.

			'noodp'					=> 0, 	// Site noopd robots settings
			'noydir'				=> 0, 	// Site noydir robots settings

			'description_additions'	=> 0,	// "Title on Blogname" within Description
			'description_blogname'	=> 0, 	// "on Blogname" within Description

			'category_noindex'		=> 0,	// Category Archive robots noindex
			'tag_noindex'			=> 0,	// Tag Archive robots noindex
			'author_noindex'		=> 0,	// Author Archive robots noindex
			'date_noindex'			=> 0,	// Date Archive robots noindex
			'search_noindex'		=> 0,	// Search Page robots noindex
			'attachment_noindex'	=> 0,	// Attachment Pages robots noindex
			'site_noindex'			=> 1,	// Site Page robots noindex

			'category_nofollow'		=> 0,	// Category Archive robots nofollow
			'tag_nofollow'			=> 0,	// Tag Archive robots nofollow
			'author_nofollow'		=> 0,	// Author Archive robots nofollow
			'date_nofollow'			=> 0,	// Date Archive robots nofollow
			'search_nofollow'		=> 0,	// Search Page robots nofollow
			'attachment_nofollow'	=> 0,	// Attachment Pages robots noindex
			'site_nofollow'			=> 1,	// Site Page robots nofollow

			'category_noarchive'	=> 0,	// Category Archive robots noarchive
			'tag_noarchive'			=> 0,	// Tag Archive robots noarchive
			'author_noarchive'		=> 0,	// Author Archive robots noarchive
			'date_noarchive'		=> 0,	// Date Archive robots noarchive
			'search_noarchive'		=> 0,	// Search Page robots noarchive
			'attachment_noarchive'	=> 0,	// Attachment Page robots noarchive
			'site_noarchive'		=> 0,	// Site Page robots noarchive

			'paged_noindex'			=> 0,	// Every second or later page noindex
			'home_paged_noindex'	=> 0,	// Every second or later homepage noindex

			'homepage_noindex'		=> 1,	// Home Page robots noindex
			'homepage_nofollow'		=> 1,	// Home Page robots noarchive
			'homepage_noarchive'	=> 0,	// Home Page robots nofollow

			'homepage_tagline'		=> 0,	// Home Page add blog Tagline

			'shortlink_tag'			=> 0,	// Adds shortlink tag

			'prev_next_posts'		=> 0,	// Adds next/prev tags
			'prev_next_archives'	=> 0,	// Adds next/prev tags
			'prev_next_frontpage'	=> 0,	// Adds next/prev tags

			'post_publish_time'		=> 0,	// Article Published Time
			'post_modify_time'		=> 0,	// Article Modified Time

			'page_publish_time'		=> 0,	// Article Published Time
			'page_modify_time'		=> 0,	// Article Modified Time

			'home_publish_time'		=> 0,	// Article Modified Time
			'home_modify_time'		=> 0,	// Article Modified Time

			'og_tags' 				=> 0,	// Output of Open Graph meta tags
			'facebook_tags'			=> 0, 	// Output the Facebook meta tags
			'twitter_tags'			=> 0, 	// Output the Twitter meta tags
			'googleplus_tags'		=> 0, 	// Output the Google+ meta tags

			'knowledge_output'		=> 0,	// Default for outputing the Knowledge SEO.
			'knowledge_logo'		=> 0,	// Fetch logo from WP Favicon

			'sitemaps_output'		=> 0,	// Output of sitemaps
			'sitemaps_modified'		=> 0,	// Add sitemaps modified time
			'sitemaps_robots'		=> 0,	// Add sitemaps location to robots.txt
			'ping_google'			=> 0,	// Ping Google
			'ping_bing'				=> 0,	// Ping Bing
			'ping_yandex'			=> 0,	// Ping Yandex

			'excerpt_the_feed'		=> 0,	// Generate feed Excerpts
			'source_the_feed'		=> 0,	// Add backlink at the end of the feed

			'ld_json_searchbox'		=> 0,	// LD+Json Sitelinks Searchbox
			'ld_json_sitename'		=> 0,	// LD+Json Sitename
			'ld_json_breadcrumbs'	=> 0,	// LD+Json Breadcrumbs
		);

	}

	/**
	 * Updates special hidden values to default on settings save.
	 *
	 * @since 2.6.0
	 */
	protected function update_hidden_options_to_default() {

		//* Disables the New SEO Settings Updated notification.
		$plugin_updated = $this->o_plugin_updated;
		$_POST[THE_SEO_FRAMEWORK_SITE_OPTIONS][$plugin_updated] = 1;

	}

	/**
	 * Updates option from default options at plugin update.
	 *
	 * @since 2.6.0
	 * @access private
	 *
	 * @return void early if already has been updated.
	 */
	public function site_updated_plugin_option() {

		if ( false === $this->is_admin() )
			return;

		$plugin_updated = $this->o_plugin_updated;

		/**
		 * Prevent this function from running more than once after update.
		 * Also prevent running if no settings field is found.
		 */
		if ( $this->get_option( $plugin_updated ) || empty( $this->settings_field ) )
			return;

		//* If current user isn't allowed to update options, don't do anything.
		if ( ! current_user_can( $this->settings_capability() ) )
			return;

		/**
		 * Applies filters 'the_seo_framework_update_options_at_update' : bool
		 * @since 2.6.0
		 */
		if ( ! apply_filters( 'the_seo_framework_update_options_at_update', true ) )
			return;

		$updated = false;
		$options = $this->get_all_options();
		$new_options = $this->default_site_options();

		/**
		 * Stop this madness from happening again until next update.
		 * Also prevent $updated to become true on this call.
		 */
		$new_options[$plugin_updated] = 1;
		$options[$plugin_updated] = 1;

		//* Merge the options. Add to if it's non-existent.
		foreach ( $new_options as $key => $value ) {

			//* Shut up already.
			if ( $plugin_updated === $key )
				continue;

			if ( ! isset( $options[$key] ) ) {
				if ( ! empty( $new_options[$key] ) ) {
					$options[$key] = $new_options[$key];
					$updated = true;
				}
			}
		}

		//* Updated the options. Check for updated flag and see if settings pages are loaded.
		if ( update_option( $this->settings_field, $options ) && $updated && $this->load_options ) {
			$this->pre_output_site_updated_plugin_notice();
		}
	}

	/**
	 * Determine whether to output update notice directly or on refresh.
	 * Run before headers are sent.
	 *
	 * @since 2.6.0
	 */
	protected function pre_output_site_updated_plugin_notice() {

		if ( $this->is_seo_settings_page() ) {
			//* Redirect to current page if on options page to correct option values. Once.
			if ( ! isset( $_REQUEST['seo-updated'] ) || 'true' !== $_REQUEST['seo-updated'] )
				$this->admin_redirect( $this->page_id, array( 'seo-updated' => 'true' ) );

			//* Notice has already been sent.
			return;
		}

		//* Make sure this plugin's scripts are being loaded.
		$this->init_admin_scripts();

		//* Output notice.
		add_action( 'admin_notices', array( $this, 'site_updated_plugin_notice' ) );

	}

	/**
	 * Echos plugin updated notification.
	 *
	 * @since 2.6.0
	 *
	 * @access private
	 */
	public function site_updated_plugin_notice() {

		$notice = $this->page_defaults['plugin_update_text'];

		$settings_url = $this->seo_settings_page_url();
		$link = sprintf( '<a href="%s" title="%s" target="_self">%s</a>', $settings_url, __( 'SEO Settings', 'autodescription' ), __( 'here', 'autodescription' ) );

		$go_to_page = sprintf( _x( 'View the new options %s.', '%s = here', 'autodescription' ), $link );

		$notice = $notice . ' ' . $go_to_page;

		echo $this->generate_dismissible_notice( $notice, 'updated' );

	}

	/**
	 * Return SEO options from the SEO options database.
	 *
	 * @since 2.2.2
	 *
	 * @uses $this->the_seo_framework_get_option() Return option from the options table and cache result.
	 * @uses THE_SEO_FRAMEWORK_SITE_OPTIONS
	 *
	 * @param string  $key       Option name.
	 * @param boolean $use_cache Optional. Whether to use the cache value or not. Defaults to true.
	 *
	 * @return mixed The value of this $key in the database.
	 */
	public function get_option( $key, $use_cache = true ) {
		return $this->the_seo_framework_get_option( $key, THE_SEO_FRAMEWORK_SITE_OPTIONS, $use_cache );
	}

	/**
	 * Return current option array.
	 *
	 * Applies filters 'the_seo_framework_get_options' : boolean
	 *
	 * @since 2.6.0
	 * @staticvar array $cache The option cache.
	 *
	 * @return array Options.
	 */
	public function get_all_options( $setting = null ) {

		static $cache = array();

		if ( isset( $cache[$setting] ) )
			return $cache[$setting];

		if ( is_null( $setting ) )
			$setting = THE_SEO_FRAMEWORK_SITE_OPTIONS;

		return $cache[$setting] = apply_filters( 'the_seo_framework_get_options', get_option( $setting ), $setting );
	}

	/**
	 * Return option from the options table and cache result.
	 *
	 * Applies `the_seo_framework_get_options` filters.
	 * This filter retrieves the (previous) values from Genesis if exists.
	 *
	 * Values pulled from the database are cached on each request, so a second request for the same value won't cause a
	 * second DB interaction.
	 * @staticvar array $settings_cache
	 * @staticvar array $options_cache
	 *
	 * @since 2.0.0
	 *
	 * @param string  $key        Option name.
	 * @param string  $setting    Optional. Settings field name. Eventually defaults to null if not passed as an argument.
	 * @param boolean $use_cache  Optional. Whether to use the cache value or not. Default is true.
	 *
	 * @return mixed The value of this $key in the database.
	 *
	 * @thanks StudioPress (http://www.studiopress.com/) for some code.
	 */
	public function the_seo_framework_get_option( $key, $setting = null, $use_cache = true ) {

		//* If we need to bypass the cache
		if ( ! $use_cache ) {
			$options = get_option( $setting );

			if ( ! is_array( $options ) || ! array_key_exists( $key, $options ) )
				return '';

			return is_array( $options[$key] ) ? stripslashes_deep( $options[$key] ) : stripslashes( wp_kses_decode_entities( $options[$key] ) );
		}

		//* Setup caches
		static $options_cache = array();

		//* Check options cache
		if ( isset( $options_cache[$setting][$key] ) )
			//* Option has been cached
			return $options_cache[$setting][$key];

		$options = $this->get_all_options( $setting );

		//* Check for non-existent option
		if ( ! is_array( $options ) || ! array_key_exists( $key, (array) $options ) ) {
			//* Cache non-existent option
			$options_cache[$setting][$key] = '';
		} else {
			//* Option has not been previously been cached, so cache now
			$options_cache[$setting][$key] = is_array( $options[$key] ) ? stripslashes_deep( $options[$key] ) : stripslashes( wp_kses_decode_entities( $options[$key] ) );
		}

		return $options_cache[$setting][$key];
	}

	/**
	 * Return SEO options from the SEO options database.
	 *
	 * @since 2.2.2
	 *
	 * @uses $this->the_seo_framework_get_option() Return option from the options table and cache result.
	 * @uses THE_SEO_FRAMEWORK_NETWORK_OPTIONS
	 *
	 * @param string  $key       Option name.
	 * @param boolean $use_cache Optional. Whether to use the cache value or not. Defaults to true.
	 *
	 * @return mixed The value of this $key in the database.
	 */
	public function get_site_option( $key, $use_cache = true ) {
		return $this->the_seo_framework_get_option( $key, THE_SEO_FRAMEWORK_NETWORK_OPTIONS, $use_cache );
	}

	/**
	 * Return Default SEO options from the SEO options array.
	 *
	 * @since 2.2.5
	 *
	 * @uses $this->get_default_settings() Return option from the options table and cache result.
	 * @uses THE_SEO_FRAMEWORK_SITE_OPTIONS
	 *
	 * @param string  $key       Option name.
	 * @param boolean $use_cache Optional. Whether to use the cache value or not. Defaults to true.
	 *
	 * @return mixed The value of this $key in the database.
	 */
	public function get_default_option( $key, $use_cache = true ) {
		return $this->get_default_settings( $key, THE_SEO_FRAMEWORK_SITE_OPTIONS, $use_cache );
	}

	/**
	 * Return the parsed default options array.
	 *
	 * @since 2.2.7
	 *
	 * Applies filters the_seo_framework_default_site_options : The default site options array.
	 *
	 * @param array $args Additional default options to filter.
	 *
	 * @return array The SEO Framework Options
	 */
	protected function default_site_options( $args = array() ) {
		return wp_parse_args(
			$args,
			apply_filters(
				'the_seo_framework_default_site_options',
				wp_parse_args(
					$args,
					$this->get_default_site_options()
				)
			)
		);
	}

	/**
	 * Return the Warned site options. Options which should be 'avoided' return true.
	 *
	 * @since 2.3.4
	 *
	 * Applies filters the_seo_framework_warned_site_options The warned site options array.
	 *
	 * @param array $args Additional warned options to filter.
	 *
	 * @return array The SEO Framework Warned Options
	 */
	protected function warned_site_options( $args = array() ) {
		return wp_parse_args(
			$args,
			apply_filters(
				'the_seo_framework_warned_site_options',
				wp_parse_args(
					$args,
					$this->get_warned_site_options()
				)
			)
		);
	}

	/**
	 * Register the database settings for storage.
	 *
	 * @since 2.2.2
	 *
	 * @return void
	 *
	 * @thanks StudioPress (http://www.studiopress.com/) for some code.
	 */
	public function register_settings() {

		//* If this page doesn't store settings, no need to register them
		if ( empty( $this->settings_field ) )
			return;

		register_setting( $this->settings_field, $this->settings_field );
		add_option( $this->settings_field, $this->default_site_options() );

		//* If this page isn't the SEO Settings page, there's no need to check for a reset.
		if ( false === $this->is_seo_settings_page() )
			return;

		if ( $this->get_option( 'reset', $this->settings_field ) ) {
			if ( update_option( $this->settings_field, $this->default_site_options() ) )
				$this->admin_redirect( $this->page_id, array( 'reset' => 'true' ) );
			else
				$this->admin_redirect( $this->page_id, array( 'error' => 'true' ) );
			exit;
		}

	}

	/**
	 * Get the default of any of the The SEO Framework settings.
	 *
	 * @since 2.2.4
	 *
	 * @uses $this->settings_field
	 * @uses $this->default_site_options()
	 *
	 * @param string $key required The option name
	 * @param string $setting optional The settings field
	 * @param bool $use_cache optional Use the options cache or not. For debugging purposes.
	 *
	 * @staticvar array $defaults_cache
	 *
	 * @return 	int|bool|string default option
	 *			int '-1' if option doesn't exist.
	 */
	public function get_default_settings( $key, $setting = '', $use_cache = true ) {

		if ( ! isset( $key ) || empty( $key ) )
			return false;

		//* Fetch default settings if it's not set.
		if ( empty( $setting ) )
			$setting = $this->settings_field;

		//* If we need to bypass the cache
		if ( ! $use_cache ) {
			$defaults = $this->default_site_options();

			if ( ! is_array( $defaults ) || ! array_key_exists( $key, $defaults ) )
				return -1;

			return is_array( $defaults[$key] ) ? stripslashes_deep( $defaults[$key] ) : stripslashes( wp_kses_decode_entities( $defaults[$key] ) );
		}

		static $defaults_cache = array();

		//* Check options cache
		if ( isset( $defaults_cache[$key] ) )
			//* Option has been cached
			return $defaults_cache[$key];

		$defaults_cache = $this->default_site_options();

		if ( ! is_array( $defaults_cache ) || ! array_key_exists( $key, (array) $defaults_cache ) )
			$defaults_cache[$key] = -1;

		return $defaults_cache[$key];
	}

	/**
	 * Get the warned setting of any of the The SEO Framework settings.
	 *
	 * @since 2.3.4
	 *
	 * @uses $this->settings_field
	 * @uses $this->warned_site_options()
	 *
	 * @param string $key required The option name
	 * @param string $setting optional The settings field
	 * @param bool $use_cache optional Use the options cache or not. For debugging purposes.
	 *
	 * @staticvar array $warned_cache
	 *
	 * @return 	int 0|1 Whether the option is flagged as dangerous for SEO.
	 *			int '-1' if option doesn't exist.
	 */
	public function get_warned_settings( $key, $setting = '', $use_cache = true ) {

		if ( empty( $key ) )
			return false;

		//* Fetch default settings if it's not set.
		if ( empty( $setting ) )
			$setting = $this->settings_field;

		//* If we need to bypass the cache
		if ( ! $use_cache ) {
			$warned = $this->warned_site_options();

			if ( ! is_array( $warned ) || ! array_key_exists( $key, $warned ) )
				return -1;

			return $this->s_one_zero( $warned[$key] );
		}

		static $warned_cache = array();

		//* Check options cache
		if ( isset( $warned_cache[$key] ) )
			//* Option has been cached
			return $warned_cache[$key];

		$warned_options = $this->warned_site_options();

		if ( ! is_array( $warned_options ) || ! array_key_exists( $key, (array) $warned_options ) )
			$warned_cache[$key] = -1;

		$warned_cache[$key] = $this->s_one_zero( $warned_options[$key] );

		return $warned_cache[$key];
	}

	/**
	 * Returns Facebook locales array
	 *
	 * @see https://www.facebook.com/translations/FacebookLocales.xml
	 *
	 * @since 2.5.2
	 * @return array Valid Facebook locales
	 */
	public function fb_locales() {
		return array(
			'af_ZA', // Afrikaans
			'ak_GH', // Akan
			'am_ET', // Amharic
			'ar_AR', // Arabic
			'as_IN', // Assamese
			'ay_BO', // Aymara
			'az_AZ', // Azerbaijani
			'be_BY', // Belarusian
			'bg_BG', // Bulgarian
			'bn_IN', // Bengali
			'br_FR', // Breton
			'bs_BA', // Bosnian
			'ca_ES', // Catalan
			'cb_IQ', // Sorani Kurdish
			'ck_US', // Cherokee
			'co_FR', // Corsican
			'cs_CZ', // Czech
			'cx_PH', // Cebuano
			'cy_GB', // Welsh
			'da_DK', // Danish
			'de_DE', // German
			'el_GR', // Greek
			'en_GB', // English (UK)
			'en_IN', // English (India)
			'en_PI', // English (Pirate)
			'en_UD', // English (Upside Down)
			'en_US', // English (US)
			'eo_EO', // Esperanto
			'es_CL', // Spanish (Chile)
			'es_CO', // Spanish (Colombia)
			'es_ES', // Spanish (Spain)
			'es_LA', // Spanish
			'es_MX', // Spanish (Mexico)
			'es_VE', // Spanish (Venezuela)
			'et_EE', // Estonian
			'eu_ES', // Basque
			'fa_IR', // Persian
			'fb_LT', // Leet Speak
			'ff_NG', // Fulah
			'fi_FI', // Finnish
			'fo_FO', // Faroese
			'fr_CA', // French (Canada)
			'fr_FR', // French (France)
			'fy_NL', // Frisian
			'ga_IE', // Irish
			'gl_ES', // Galician
			'gn_PY', // Guarani
			'gu_IN', // Gujarati
			'gx_GR', // Classical Greek
			'ha_NG', // Hausa
			'he_IL', // Hebrew
			'hi_IN', // Hindi
			'hr_HR', // Croatian
			'hu_HU', // Hungarian
			'hy_AM', // Armenian
			'id_ID', // Indonesian
			'ig_NG', // Igbo
			'is_IS', // Icelandic
			'it_IT', // Italian
			'ja_JP', // Japanese
			'ja_KS', // Japanese (Kansai)
			'jv_ID', // Javanese
			'ka_GE', // Georgian
			'kk_KZ', // Kazakh
			'km_KH', // Khmer
			'kn_IN', // Kannada
			'ko_KR', // Korean
			'ku_TR', // Kurdish (Kurmanji)
			'ky_KG', // Kyrgyz
			'la_VA', // Latin
			'lg_UG', // Ganda
			'li_NL', // Limburgish
			'ln_CD', // Lingala
			'lo_LA', // Lao
			'lt_LT', // Lithuanian
			'lv_LV', // Latvian
			'mg_MG', // Malagasy
			'mi_NZ', // Māori
			'mk_MK', // Macedonian
			'ml_IN', // Malayalam
			'mn_MN', // Mongolian
			'mr_IN', // Marathi
			'ms_MY', // Malay
			'mt_MT', // Maltese
			'my_MM', // Burmese
			'nb_NO', // Norwegian (bokmal)
			'nd_ZW', // Ndebele
			'ne_NP', // Nepali
			'nl_BE', // Dutch (België)
			'nl_NL', // Dutch
			'nn_NO', // Norwegian (nynorsk)
			'ny_MW', // Chewa
			'or_IN', // Oriya
			'pa_IN', // Punjabi
			'pl_PL', // Polish
			'ps_AF', // Pashto
			'pt_BR', // Portuguese (Brazil)
			'pt_PT', // Portuguese (Portugal)
			'qu_PE', // Quechua
			'rm_CH', // Romansh
			'ro_RO', // Romanian
			'ru_RU', // Russian
			'rw_RW', // Kinyarwanda
			'sa_IN', // Sanskrit
			'sc_IT', // Sardinian
			'se_NO', // Northern Sámi
			'si_LK', // Sinhala
			'sk_SK', // Slovak
			'sl_SI', // Slovenian
			'sn_ZW', // Shona
			'so_SO', // Somali
			'sq_AL', // Albanian
			'sr_RS', // Serbian
			'sv_SE', // Swedish
			'sy_SY', // Swahili
			'sw_KE', // Syriac
			'sz_PL', // Silesian
			'ta_IN', // Tamil
			'te_IN', // Telugu
			'tg_TJ', // Tajik
			'th_TH', // Thai
			'tk_TM', // Turkmen
			'tl_PH', // Filipino
			'tl_ST', // Klingon
			'tr_TR', // Turkish
			'tt_RU', // Tatar
			'tz_MA', // Tamazight
			'uk_UA', // Ukrainian
			'ur_PK', // Urdu
			'uz_UZ', // Uzbek
			'vi_VN', // Vietnamese
			'wo_SN', // Wolof
			'xh_ZA', // Xhosa
			'yi_DE', // Yiddish
			'yo_NG', // Yoruba
			'zh_CN', // Simplified Chinese (China)
			'zh_HK', // Traditional Chinese (Hong Kong)
			'zh_TW', // Traditional Chinese (Taiwan)
			'zu_ZA', // Zulu
			'zz_TR', // Zazaki
		);
	}

	/**
	 * Returns Facebook locales array keys.
	 * This is apart from the fb_locales array since there are "duplicated" keys.
	 * Use this to compare the numeric key position.
	 *
	 * @see https://www.facebook.com/translations/FacebookLocales.xml
	 *
	 * @since 2.5.2
	 * @return array Valid Facebook locales
	 */
	public function language_keys() {
		return array(
			'af', // Afrikaans
			'ak', // Akan
			'am', // Amharic
			'ar', // Arabic
			'as', // Assamese
			'ay', // Aymara
			'az', // Azerbaijani
			'be', // Belarusian
			'bg', // Bulgarian
			'bn', // Bengali
			'br', // Breton
			'bs', // Bosnian
			'ca', // Catalan
			'cb', // Sorani Kurdish
			'ck', // Cherokee
			'co', // Corsican
			'cs', // Czech
			'cx', // Cebuano
			'cy', // Welsh
			'da', // Danish
			'de', // German
			'el', // Greek
			'en', // English (UK)
			'en', // English (India)
			'en', // English (Pirate)
			'en', // English (Upside Down)
			'en', // English (US)
			'eo', // Esperanto
			'es', // Spanish (Chile)
			'es', // Spanish (Colombia)
			'es', // Spanish (Spain)
			'es', // Spanish
			'es', // Spanish (Mexico)
			'es', // Spanish (Venezuela)
			'et', // Estonian
			'eu', // Basque
			'fa', // Persian
			'fb', // Leet Speak
			'ff', // Fulah
			'fi', // Finnish
			'fo', // Faroese
			'fr', // French (Canada)
			'fr', // French (France)
			'fy', // Frisian
			'ga', // Irish
			'gl', // Galician
			'gn', // Guarani
			'gu', // Gujarati
			'gx', // Classical Greek
			'ha', // Hausa
			'he', // Hebrew
			'hi', // Hindi
			'hr', // Croatian
			'hu', // Hungarian
			'hy', // Armenian
			'id', // Indonesian
			'ig', // Igbo
			'is', // Icelandic
			'it', // Italian
			'ja', // Japanese
			'ja', // Japanese (Kansai)
			'jv', // Javanese
			'ka', // Georgian
			'kk', // Kazakh
			'km', // Khmer
			'kn', // Kannada
			'ko', // Korean
			'ku', // Kurdish (Kurmanji)
			'ky', // Kyrgyz
			'la', // Latin
			'lg', // Ganda
			'li', // Limburgish
			'ln', // Lingala
			'lo', // Lao
			'lt', // Lithuanian
			'lv', // Latvian
			'mg', // Malagasy
			'mi', // Māori
			'mk', // Macedonian
			'ml', // Malayalam
			'mn', // Mongolian
			'mr', // Marathi
			'ms', // Malay
			'mt', // Maltese
			'my', // Burmese
			'nb', // Norwegian (bokmal)
			'nd', // Ndebele
			'ne', // Nepali
			'nl', // Dutch (België)
			'nl', // Dutch
			'nn', // Norwegian (nynorsk)
			'ny', // Chewa
			'or', // Oriya
			'pa', // Punjabi
			'pl', // Polish
			'ps', // Pashto
			'pt', // Portuguese (Brazil)
			'pt', // Portuguese (Portugal)
			'qu', // Quechua
			'rm', // Romansh
			'ro', // Romanian
			'ru', // Russian
			'rw', // Kinyarwanda
			'sa', // Sanskrit
			'sc', // Sardinian
			'se', // Northern Sámi
			'si', // Sinhala
			'sk', // Slovak
			'sl', // Slovenian
			'sn', // Shona
			'so', // Somali
			'sq', // Albanian
			'sr', // Serbian
			'sv', // Swedish
			'sy', // Swahili
			'sw', // Syriac
			'sz', // Silesian
			'ta', // Tamil
			'te', // Telugu
			'tg', // Tajik
			'th', // Thai
			'tk', // Turkmen
			'tl', // Filipino
			'tl', // Klingon
			'tr', // Turkish
			'tt', // Tatar
			'tz', // Tamazight
			'uk', // Ukrainian
			'ur', // Urdu
			'uz', // Uzbek
			'vi', // Vietnamese
			'wo', // Wolof
			'xh', // Xhosa
			'yi', // Yiddish
			'yo', // Yoruba
			'zh', // Simplified Chinese (China)
			'zh', // Traditional Chinese (Hong Kong)
			'zh', // Traditional Chinese (Taiwan)
			'zu', // Zulu
			'zz', // Zazaki
		);

	}

}
