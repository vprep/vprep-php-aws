<?php
/**
 * @link              http://stallion-theme.co.uk/
 * @since             1.0.0
 * @package           Display_Widgets_SEO_Plus
 *
 * @wordpress-plugin
 * Plugin Name:       Display Widgets SEO Plus
 * Plugin URI:        http://stallion-theme.co.uk/display-widgets-seo-plus-plugin/
 * Description:       Based on the popular Display Widgets plugin with MANY more conditional arguments including full WPML language support and BuddyPress/bbPress support. Set widgets to be shown/hidden via the following conditions: Is Specific WPML Language, multiple BuddyPress/bbPress conditions, Is Logged In, Is Logged Out, Is Front Page, Is Home Page Archives, Is Category Archive, Is Tag Archive, Is Custom Taxonomy Archive, Is Date Archive, Is Search Results Archive, Is Any Archive, Is Any Post, Is Specific Post, Is Any Static Page, Is Specific Static Page, Is Attachment Page, Is 404 Error Page, Is Specific Category Archive, Is Specific Category Archive AND It's Posts, Is The Posts From a Specific Category. Plus most of the above conditions with: Is First Page, Is Pages 2,3,4,... of Paged Archive/Comments.
 * Version:           1.1.2
 * Author:            David Law
 * Author URI:        http://stallion-theme.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       display-widgets-seo-plus
 * Domain Path:       /languages
 */
/*
  Based on the the "Display Widgets" plugin v2.05 by "Strategy11" : http://strategy11.com and the "Stallion Responsive Theme" v8.4 "Display Widgets" Plugin v1.24-mod by "David Law".
 */

  // Change the hook this is triggered on with a bit of custom code. Copy and paste into your theme functions.php or a new plugin.

/*
	add_filter( 'dwplus_callback_trigger', 'dwplus_callback_trigger' );
	function dwplus_callback_trigger() {
		return 'wp_head'; //plugins_loaded, after_setup_theme, wp_loaded, wp_head
	}
*/
// Only run when original Display Widgets plugin isn't active
if ( !class_exists( 'DWPLUSPlugin' ) && !class_exists( 'DWPlugin' ) && !function_exists( 'show_dw_widget' ) ) {

	class DWPLUSPlugin {
		var $transient_name = 'dwplus_details';
		var $checked = array();
		var $id_base = '';
		var $number = '';
		// pages on site
		var $pages = array();
		// custom post types
		var $cposts = array();
		// categories
		var $cats = array();
		// tags
#		var $tags = array();
		// taxonomies
		var $taxes = array();
		// WPML languages
		var $langs = array();

		function __construct() {
			add_filter( 'widget_display_callback', array( &$this, 'show_widget' ) );
			// change the hook that triggers widget check
			$hook = apply_filters( 'dwplus_callback_trigger', 'wp_loaded' );
			add_action( $hook, array( &$this, 'trigger_widget_checks' ) );
			add_action( 'in_widget_form', array( &$this, 'hidden_widget_options' ), 10, 3 );
			add_filter( 'widget_update_callback', array( &$this, 'update_widget_options' ), 10, 3 );
			add_action( 'wp_ajax_dwsp_show_widget', array( &$this, 'show_widget_options' ) );
			add_action( 'admin_footer', array( &$this, 'load_js' ) );
			// when a post/page is saved
			add_action( 'save_post', array( &$this, 'delete_transient' ), 10, 3 );
			// when a new category/taxonomy is created
			add_action( 'created_term', array( &$this, 'delete_transient' ), 10, 3 );
			add_action( 'edited_term', array( &$this, 'delete_transient' ), 10, 3 );
			add_action( 'delete_term', array( &$this, 'delete_transient' ), 10, 3 );
			// when a custom post type is added and Permalinks are resaved
			add_action( 'update_option_rewrite_rules', array( &$this, 'delete_transient' ) );
			// reset transient after activating the plugin
			register_activation_hook( dirname(__FILE__) . '/display-widgets-seo-plus.php', array( &$this, 'delete_transient' ) );
			add_action( 'plugins_loaded', array( &$this, 'load_lang' ) );
			// get custom Page Walker
			$this->page_list = new DWPLUS_Walker_Page_List();
			// Remove Widget Title Plugin check
			if ( ! function_exists( 'remove_widget_title' ) ) {
				add_filter( 'widget_title', array( &$this, 'dwsp_widget_title' ) );
			}
		}

		// Add ! to front of Widget Title to Hide title : http://wordpress.org/plugins/remove-widget-titles/
		function dwsp_widget_title( $widget_title ) {
			if ( substr ( $widget_title, 0, 1 ) == '!' ) {
				return;
			} else {
				return ( $widget_title );
			}
		}

		function trigger_widget_checks() {
			add_filter( 'sidebars_widgets', array( &$this, 'sidebars_widgets' ) );
		}

		function show_widget( $instance ) {
			global $cpage;
			$show = null;
			$instance['dw_logged'] = self::show_logged( $instance );
			$instance['dw_include'] = isset( $instance['dw_include'] ) ? $instance['dw_include'] : 0;
			$instance['other_ids'] = isset( $instance['other_ids'] ) ? $instance['other_ids'] : '';
			$instance['dw_includelang'] = isset( $instance['dw_includelang'] ) ? $instance['dw_includelang'] : 1;
			$instance['dw_includecat'] = isset( $instance['dw_includecat'] ) ? $instance['dw_includecat'] : '';
/*			$instance['dw_includetag'] = isset( $instance['dw_includetag'] ) ? $instance['dw_includetag'] : '';*/
			// check logged in first
			if ( in_array( $instance['dw_logged'], array( 'in', 'out' ) ) ) {
				$user_ID = is_user_logged_in();
				if ( ( 'out' == $instance['dw_logged'] && $user_ID ) ||
					( 'in' == $instance['dw_logged'] && !$user_ID ) ) {
					return false;
				}
			}
			// Get Current Post/Page ID
			$post_id = get_queried_object_id();
			$post_id = self::get_lang_id( $post_id, 'page' );
			// Content Types +/- Home Page Archives - Page 1 Only
			if ( is_home() && !is_paged() ) {
				$show = isset( $instance['page-home1'] ) ? ( $instance['page-home1'] ) : false;
				// Static Pages +/-
				if ( !$show && $post_id ) {
					$show = isset( $instance['page-' . $post_id] ) ? $instance['page-' . $post_id] : false;
				}
				// Content Types +/- Front Page
				if ( !$show && is_front_page() && isset( $instance['page-front'] ) ) {
					$show = $instance['page-front'];
				}
			// Content Types +/- Home Page Archives - Pages 2,3,4...
			} elseif ( is_home() && is_paged() ) {
				$show = isset( $instance['page-home'] ) ? ( $instance['page-home'] ) : false;
				// Static Pages +/-
				if ( !$show && $post_id ) {
					$show = isset( $instance['page-' . $post_id] ) ? $instance['page-' . $post_id] : false;
				}
			// Content Types +/- Front Page
			} elseif ( is_front_page() ) {
				$show = isset( $instance['page-front'] ) ? $instance['page-front'] : false;
				// Static Pages +/-
				if ( !$show && $post_id ) {
					$show = isset( $instance['page-' . $post_id] ) ? $instance['page-' . $post_id] : false;
				}
			// Content Types +/- Category
			} elseif ( is_category() ) {
				// Content Types +/- All Category Archives - Page 1 Only
				if ( is_category() && !is_paged() && isset( $instance['page-category1'] ) ) {
					$show = isset( $instance['page-category1'] ) ? ( $instance['page-category1'] ) : false;
				// Content Types +/- All Category Archives - Pages 2,3,4...
				} elseif ( is_category() && is_paged() && isset( $instance['page-category'] ) ) {
					$show = isset( $instance['page-category'] ) ? ( $instance['page-category'] ) : false;
				// Categories +/- Category Page 1 and All it's Posts
				} elseif ( is_category() && !is_paged() && $instance['dw_includecat'] == '0' ) {
					$show = isset( $instance['cat-' . get_query_var( 'cat' )] ) ? ( $instance['cat-' . get_query_var( 'cat' )] ) : false;
				// Categories +/- Category Pages 1,2,3� and All it's Posts
				} elseif ( is_category() && $instance['dw_includecat'] == '1' ) {
					$show = isset( $instance['cat-' . get_query_var( 'cat' )] ) ? ( $instance['cat-' . get_query_var( 'cat' )] ) : false;
				// Categories +/- Category Page 1 and NOT it's Posts
				} elseif ( is_category() && !is_paged() && $instance['dw_includecat'] == '2' ) {
					$show = isset( $instance['cat-' . get_query_var( 'cat' )] ) ? ( $instance['cat-' . get_query_var( 'cat' )] ) : false;
				// Categories +/- Category Pages 1,2,3� and NOT it's Posts
				} elseif ( is_category() && $instance['dw_includecat'] == '3' ) {
					$show = isset( $instance['cat-' . get_query_var( 'cat' )] ) ? ( $instance['cat-' . get_query_var( 'cat' )] ) : false;
				}
			// Content Types +/- Tag
			} elseif ( is_tag() ) {
				// Content Types +/- All Tag Archives - Page 1 Only
				if ( is_tag() && !is_paged() && isset( $instance['page-tag1'] ) ) {
					$show = isset( $instance['page-tag1'] ) ? ( $instance['page-tag1'] ) : false;
				// Content Types +/- All Tag Archives - Pages 2,3,4...
				} elseif ( is_tag() && is_paged() && isset( $instance['page-tag'] ) ) {
					$show = isset( $instance['page-tag'] ) ? ( $instance['page-tag'] ) : false;
				}
/*				// Tags +/- Tag Page 1 and All it's Posts
				} elseif ( is_tag() && !is_paged() && $instance['dw_includetag'] == '0' ) {
				$show = isset( $instance['tag-' . get_query_var( 'tag' )] ) ? ( $instance['tag-' . get_query_var( 'tag' )] ) : false;
				// Tags +/- Tag Pages 1,2,3� and All it's Posts
				} elseif ( is_tag() && $instance['dw_includetag'] == '1' ) {
					$show = isset( $instance['tag-' . get_query_var( 'tag' )] ) ? ( $instance['tag-' . get_query_var( 'tag' )] ) : false;
				// Tags +/- Tag Page 1 and NOT it's Posts
				} elseif ( is_tag() && !is_paged() && $instance['dw_includetag'] == '2' ) {
					$show = isset( $instance['tag-' . get_query_var( 'tag' )] ) ? ( $instance['tag-' . get_query_var( 'tag' )] ) : false;
				// Tags +/- Tag Pages 1,2,3� and NOT it's Posts
				} elseif ( is_tag() && $instance['dw_includetag'] == '3' ) {
					$show = isset( $instance['tag-' . get_query_var( 'tag' )] ) ? ( $instance['tag-' . get_query_var( 'tag' )] ) : false;
				}
			} */
			// Custom Taxonomies : todo consider expanding out like cats
			} elseif ( is_tax() ) {
				$term = get_queried_object();
				$show = isset( $instance['tax-' . $term->taxonomy] ) ? ( $instance['tax-' . $term->taxonomy] ) : false;
				unset( $term);
			// Custom Post Type Archives
			} elseif ( is_post_type_archive() ) {
				$type = get_post_type();
				$show = isset( $instance['type-' . $type . '-archive'] ) ? $instance['type-' . $type . '-archive'] : false;
			// Content Types +/- Date Archives Catch All
			} elseif ( is_date() && !is_paged() ) {
				$show = isset( $instance['page-darchive1'] ) ? ( $instance['page-darchive1'] ) : false;
			} elseif ( is_date() && is_paged() ) {
				$show = isset( $instance['page-darchive'] ) ? ( $instance['page-darchive'] ) : false;
			// Content Types +/- Author archives Catch All
			} elseif ( is_author() && !is_paged() ) {
				$show = isset( $instance['page-authora1'] ) ? ( $instance['page-authora1'] ) : false;
			} elseif ( is_author() && is_paged() ) {
				$show = isset( $instance['page-authora'] ) ? ( $instance['page-authora'] ) : false;
			// Content Types +/- Search Results Catch All
			} elseif ( is_search() && !is_paged() ) {
				$show = isset( $instance['page-search1'] ) ? ( $instance['page-search1'] ) : false;
			} elseif ( is_search() && is_paged() ) {
				$show = isset( $instance['page-search'] ) ? ( $instance['page-search'] ) : false;
			// Content Types +/- Posts or Pages or Attachment Catch All for Pages 2,3,4..
			} elseif ( !empty( $cpage ) && $cpage >= '1' && is_singular() ) {
				$type = get_post_type();
				// echo 'get_post_type = ' . $type . '<br />';
				if ( $type != 'page' && $type != 'post' && $type != 'attachment' ) {
					$show = isset( $instance['type-' . $type] ) ? ( $instance['type-' . $type] ) : false;
				// echo 'Custom get_post_type = ' . $type . '<br />';
				}
				if ( !$show && $type == 'post' ) {
					$show = isset( $instance['page-single'] ) ? ( $instance['page-single'] ) : false;
					// WordPress Posts +/-
					if ( !$show && $post_id && isset( $instance['other_ids'] ) && !empty( $instance['other_ids'] ) ) {
						$other_ids = explode( ',', $instance['other_ids'] );
						foreach ( $other_ids as $other_id ) {
							if ( $post_id == (int) $other_id ) {
								$show = true;
							}
						}
					}
				}
				if ( !$show && $type == 'page' ) {
					$show = isset( $instance['page-staticpages'] ) ? ( $instance['page-staticpages'] ) : false;
					// Static Pages +/-
					if ( !$show && $post_id ) {
						$show = isset( $instance['page-' . $post_id] ) ? $instance['page-' . $post_id] : false;
					}
				}
				if ( !$show && $type == 'attachment' ) {
					$show = isset( $instance['page-attachments'] ) ? ( $instance['page-attachments'] ) : false;
				}
				// Categories +/- Posts From Ticked Categories
				if ( !$show && ( $instance['dw_includecat'] == '0' || $instance['dw_includecat'] == '1' || $instance['dw_includecat'] == '4' || $instance['dw_includecat'] == '5' ) ) {
					$catss = get_the_category();
					foreach ( $catss as $cat ) {
						if ( $show ) {
							break;
						}
						$c_id = self::get_lang_id( $cat->cat_ID, 'category' );
						if ( isset( $instance['cat-' . $c_id] ) ) {
							$show = $instance['cat-' . $c_id];
						}
					}
				}
				// Possible future feature using Tags : not implemented due to a lot of tags and hard to combine results with cats
/*				if ( !$show && ( $instance['dw_includetag'] == '0' || $instance['dw_includetag'] == '1' || $instance['dw_includetag'] == '4' || $instance['dw_includetag'] == '5' ) ) {
					$tags = get_the_tags();
					if ( $tags ) {
						foreach ( $tags as $tag ) {
							if ( $show ) {
								break;
							}
#							$tag_id = dw_get_lang_id( $tag->term_id, 'post_tag' );
							$tag_id = self::get_lang_id( $tag->term_id, 'post_tag' );
							if ( isset( $instance['tag-' . $tag_id] ) ) {
								$show = $instance['tag-' . $tag_id];
							}						}					}				} */
			// Content Types +/- Posts or Pages or Attachment Catch All for Pages 1
			} elseif ( empty( $cpage ) && is_singular() ) {
				$type = get_post_type();
				// echo 'get_post_type = ' . $type . '<br />';
				if ( $type != 'page' && $type != 'post' && $type != 'attachment' ) {
					$show = isset( $instance['type-' . $type] ) ? ( $instance['type-' . $type] ) : false;
				// echo 'Custom get_post_type = ' . $type . '<br />';
				}
				if ( !$show && $type == 'post' ) {
					$show = isset( $instance['page-single1'] ) ? ( $instance['page-single1'] ) : false;
					// WordPress Posts +/-
					if ( !$show && $post_id && isset( $instance['other_ids'] ) && !empty( $instance['other_ids'] ) ) {
						$other_ids = explode( ',', $instance['other_ids'] );
						foreach ( $other_ids as $other_id ) {
							if ( $post_id == (int) $other_id ) {
								$show = true;
							}
						}
					}
				}
				if ( !$show && $type == 'page' ) {
					$show = isset( $instance['page-staticpages1'] ) ? ( $instance['page-staticpages1'] ) : false;
					// Static Pages +/-
					if ( !$show && $post_id ) {
						$show = isset( $instance['page-' . $post_id] ) ? $instance['page-' . $post_id] : false;
					}
				}
				if ( !$show && $type == 'attachment' ) {
					$show = isset( $instance['page-attachments1'] ) ? ( $instance['page-attachments1'] ) : false;
				}
				// Categories +/- Posts From Ticked Categories
				if ( !$show && ( $instance['dw_includecat'] == '0' || $instance['dw_includecat'] == '1' || $instance['dw_includecat'] == '4' || $instance['dw_includecat'] == '5' ) ) {
					$catss = get_the_category();
					foreach ( $catss as $cat ) {
						if ( $show ) {
							break;
						}
						$c_id = self::get_lang_id( $cat->cat_ID, 'category' );
						if ( isset( $instance['cat-' . $c_id] ) ) {
							$show = $instance['cat-' . $c_id];
						}
					}
				}
				// Possible future feature using Tags : not implemented due to a lot of tags and hard to combine results with cats
/*				if ( !$show && ( $instance['dw_includetag'] == '0' || $instance['dw_includetag'] == '1' || $instance['dw_includetag'] == '4' || $instance['dw_includetag'] == '5' ) ) {
					$tags = get_the_tags();
					if ( $tags ) {
						foreach ( $tags as $tag ) {
							if ( $show ) {
								break;
							}
#							$tag_id = dw_get_lang_id( $tag->term_id, 'post_tag' );
							$tag_id = self::get_lang_id( $tag->term_id, 'post_tag' );
							if ( isset( $instance['tag-' . $tag_id] ) ) {
								$show = $instance['tag-' . $tag_id];
							}						}					}				} */
			// Content Types +/- 404 error
			} elseif ( is_404() ) {
				$show = isset( $instance['page-404'] ) ? ( $instance['page-404'] ) : false;
			// Nothing Set to Show/Hide
			} else {
				$show = false;
			}
			// WordPress Posts +/- : Custom Post Types
			if ( !$show && $post_id && isset( $instance['other_ids'] ) && !empty( $instance['other_ids'] ) ) {
				$other_ids = explode( ',', $instance['other_ids'] );
				foreach ( $other_ids as $other_id ) {
					if ( $post_id == (int) $other_id ) {
						$show = true;
					}
				}
			}
			// Content Types +/- All Archives Catch All
			if ( !$show && is_archive() && !is_paged() ) {
				$show = isset( $instance['page-archive1'] ) ? ( $instance['page-archive1'] ) : false;
			} elseif ( !$show && is_archive() && is_paged() ) {
				$show = isset( $instance['page-archive'] ) ? ( $instance['page-archive'] ) : false;
			}
			// BuddyPress
			if ( !$show && class_exists( 'BuddyPress' ) ) {
				if ( function_exists( 'is_buddypress' ) && is_buddypress() ) {
					// ALL BuddyPress Pages
					$show = isset( $instance['page-bpisbuddypress'] ) ? ( $instance['page-bpisbuddypress'] ) : false;
					// BuddyPress Activity Streams Directory
					if ( !$show && function_exists( 'bp_is_activity_directory' ) && bp_is_activity_directory() ) {
						$show = isset( $instance['page-bpisactivitydirectory'] ) ? ( $instance['page-bpisactivitydirectory'] ) : false;
					}
					// BuddyPress Activity Streams Item
					if ( !$show && function_exists( 'bp_is_single_activity' ) && bp_is_single_activity() ) {
						$show = isset( $instance['page-bpissingleactivity'] ) ? ( $instance['page-bpissingleactivity'] ) : false;
					}
					// BuddyPress User Pages
					if ( !$show && function_exists( 'bp_is_user' ) && bp_is_user() && ( function_exists( 'bp_is_single_activity' ) && !bp_is_single_activity() ) ) {
						$show = isset( $instance['page-bpisuser'] ) ? ( $instance['page-bpisuser'] ) : false;
					}
					// BuddyPress Members Directory
					if ( !$show && function_exists( 'bp_is_members_directory' ) && bp_is_members_directory() ) {
						$show = isset( $instance['page-bpismembersdirectory'] ) ? ( $instance['page-bpismembersdirectory'] ) : false;
					}
					// BuddyPress Groups Directory
					if ( !$show && function_exists( 'bp_is_groups_directory' ) && bp_is_groups_directory() ) {
						$show = isset( $instance['page-bpisgroupsdirectory'] ) ? ( $instance['page-bpisgroupsdirectory'] ) : false;
					}
					// BuddyPress Group
					if ( !$show && function_exists( 'bp_is_group' ) && bp_is_group() ) {
						$show = isset( $instance['page-bpisgroup'] ) ? ( $instance['page-bpisgroup'] ) : false;
						// - BuddyPress Group Forum
						if ( !$show && ( function_exists( 'bp_is_current_action' ) && bp_is_current_action( 'forum' ) ) && ( function_exists( 'bp_is_group_forum_topic' ) && !bp_is_group_forum_topic() ) ) {
							$show = isset( $instance['page-bpisgroupforum'] ) ? ( $instance['page-bpisgroupforum'] ) : false;
						}
						// - BuddyPress Group Forum Topic
						if ( !$show && function_exists( 'bp_is_group_forum_topic' ) && bp_is_group_forum_topic() ) {
							$show = isset( $instance['page-bpisgroupforumtopic'] ) ? ( $instance['page-bpisgroupforumtopic'] ) : false;
						}
					}
					// BuddyPress Registration Page
					if ( !$show && function_exists( 'bp_is_register_page' ) && bp_is_register_page() ) {
						$show = isset( $instance['page-bpisregisterpage'] ) ? ( $instance['page-bpisregisterpage'] ) : false;
					}
					// BuddyPress Activation Page
					if ( !$show && function_exists( 'bp_is_activation_page' ) && bp_is_activation_page() ) {
						$show = isset( $instance['page-bpisactivationpage'] ) ? ( $instance['page-bpisactivationpage'] ) : false;
					}
				}
			}
			// All BuddyPress AND All bbPress ticked
			if ( !$show && class_exists( 'BuddyPress' ) && class_exists( 'bbPress' ) && function_exists( 'is_buddypress' ) && is_buddypress() && function_exists( 'is_bbpress' ) && is_bbpress() && isset( $instance['page-bpisbuddypress'] ) && isset( $instance['page-bbpisbbpress'] ) ) {
				$show = isset( $instance['page-bbpisbbpress'] ) ? ( $instance['page-bbpisbbpress'] ) : false;
			}
			// bbPress 
			if ( ( class_exists( 'BuddyPress' ) && function_exists( 'is_buddypress' ) && !is_buddypress() ) || ( !class_exists( 'BuddyPress' ) ) ) {
				if ( !$show && class_exists( 'bbPress' ) ) {
					if ( function_exists( 'is_bbpress' ) && is_bbpress() ) {
						// ALL bbPress Pages
						$show = isset( $instance['page-bbpisbbpress'] ) ? ( $instance['page-bbpisbbpress'] ) : false;
						// bbPress Forum Archive
						if ( !$show && function_exists( 'bbp_is_forum_archive' ) && bbp_is_forum_archive() ) {
							$show = isset( $instance['page-bbpisforumarchive'] ) ? ( $instance['page-bbpisforumarchive'] ) : false;
						}
						// bbPress Category Forum
						if ( !$show && function_exists( 'bbp_is_forum_category' ) && bbp_is_forum_category() ) {
							$show = isset( $instance['page-bbpisforumcategory'] ) ? ( $instance['page-bbpisforumcategory'] ) : false;
						}
						// bbPress Forum
						if ( !$show && function_exists( 'bbp_is_single_forum' ) && bbp_is_single_forum() && ( function_exists( 'bbp_is_forum_category' ) && !bbp_is_forum_category() ) ) {
							$show = isset( $instance['page-bbpissingleforum'] ) ? ( $instance['page-bbpissingleforum'] ) : false;
						}
						// bbPress Forum Topic
						if ( !$show && function_exists( 'bbp_is_single_topic' ) && bbp_is_single_topic() ) {
							$show = isset( $instance['page-bbpissingletopic'] ) ? ( $instance['page-bbpissingletopic'] ) : false;
						}
						// bbPress Topic Tag
						if ( !$show && function_exists( 'bbp_is_topic_tag' ) && bbp_is_topic_tag() ) {
							$show = isset( $instance['page-bbpistopictag'] ) ? ( $instance['page-bbpistopictag'] ) : false;
						}
						// bbPress User Pages
						if ( !$show && function_exists( 'bbp_is_single_user' ) && bbp_is_single_user() ) {
							$show = isset( $instance['page-bbpissingleuser'] ) ? ( $instance['page-bbpissingleuser'] ) : false;
						}
					}
				}
			}

			$show = apply_filters( 'dw_instance_visibility', $show, $instance );

			// Languages +/-
			if ( class_exists( 'SitePress' ) && defined( 'ICL_LANGUAGE_CODE' ) && $instance['dw_includelang'] != '1' ) {
				// Show, Specific Language, Use Earlier Options (4)
				if ( $show && $instance['dw_includelang'] == '4' && isset( $instance['lang-' . ICL_LANGUAGE_CODE] ) ) {
					$show = $show && isset( $instance['lang-' . ICL_LANGUAGE_CODE] ) ? $instance['lang-' . ICL_LANGUAGE_CODE] : false;
					##echo '<br /><small>#1 Show, Specific Language, Use Earlier Options (4) = ' . $show . '</small><br />';
				}
				// Show, NOT Specific Language, Use Earlier Options (4)
				elseif ( $show && $instance['dw_includelang'] == '4' && !isset( $instance['lang-' . ICL_LANGUAGE_CODE] ) ) {
					$show = false;
					##echo '<br /><small>#2 Show, NOT Specific Language, Use Earlier Options (4) = ' . $show . '</small><br />';
				}
				// Show, Specific Language, Ignore Earlier Options (2)
				elseif ( $show && $instance['dw_includelang'] == '2' && isset( $instance['lang-' . ICL_LANGUAGE_CODE] ) ) {
					$show = isset( $instance['lang-' . ICL_LANGUAGE_CODE] ) ? $instance['lang-' . ICL_LANGUAGE_CODE] : false;
					##echo '<br /><small>#3 Show, Specific Language, Ignore Earlier Options (2) = ' . $show . '</small><br />';
				}
				// Show, NOT Specific Language, Ignore Earlier Options (2)
				elseif ( $show && $instance['dw_includelang'] == '2' && !isset( $instance['lang-' . ICL_LANGUAGE_CODE] ) ) {
					$show = false;
					##echo '<br /><small>#4 Show, NOT Specific Language, Ignore Earlier Options (2) = ' . $show . '</small><br />';
				}
				// NOT Show, Specific Language, Ignore Earlier Options (2)
				elseif ( !$show && $instance['dw_includelang'] == '2' && isset( $instance['lang-' . ICL_LANGUAGE_CODE] ) ) {
					$show = isset( $instance['lang-' . ICL_LANGUAGE_CODE] ) ? $instance['lang-' . ICL_LANGUAGE_CODE] : false;
					##echo '<br /><small>#5 NOT Show, Specific Language, Ignore Earlier Options (2) = ' . $show . '</small><br />';
				}
				// NOT Show, NOT Specific Language, Ignore Earlier Options (2)
				elseif ( !$show && $instance['dw_includelang'] == '2' && !isset( $instance['lang-' . ICL_LANGUAGE_CODE] ) ) {
					$show = false;
					##echo '<br /><small>#6 NOT Show, NOT Specific Language, Ignore Earlier Options (2) = ' . $show . '</small><br />';
				}
			}
			// Nothing Set to Show/Hide
			if ( !$show ) {
				$show = false;
			}

			// Hide OR Show Widget - What to do with those listed Show/Not Show
			// (And Show On Ticked + NOT $show )
			if ( ( $instance['dw_include'] && $show == false ) ||
				// or (And Hide On Ticked + NOT $show ) = Widget not loaded
				( $instance['dw_include'] == 0 && $show ) ) {
				return false;
			}

			return $instance;
		}

		function sidebars_widgets( $sidebars ) {

			if ( is_admin() ) {
				return $sidebars;
			}

			global $wp_registered_widgets;

			foreach ( $sidebars as $s => $sidebar ) {
				if ( $s == 'wp_inactive_widgets' || strpos( $s, 'orphaned_widgets' ) === 0 || empty( $sidebar ) ) {
					continue;
				}

				foreach ( $sidebar as $w => $widget ) {
					// $widget is the id of the widget
					if ( !isset( $wp_registered_widgets[$widget] ) ) {
						continue;
					}

					if ( isset( $this->checked[$widget] ) ) {
						$show = $this->checked[$widget];
					} else {
						$opts = $wp_registered_widgets[$widget];
						$id_base = is_array( $opts['callback'] ) ? $opts['callback'][0]->id_base : $opts['callback'];

						if ( !$id_base) {
							continue;
						}

						$instance = get_option( 'widget_' . $id_base );

						if ( !$instance || !is_array( $instance ) ) {
							continue;
						}

						if ( isset( $instance['_multiwidget'] ) && $instance['_multiwidget'] ) {
							$number = $opts['params'][0]['number'];
							if ( !isset( $instance[$number] ) ) {
								continue;
							}

							$instance = $instance[$number];
							unset( $number);
						}

						unset( $opts);

						$show = self::show_widget( $instance );

						$this->checked[$widget] = $show ? true : false;
					}

					if ( !$show ) {
						unset( $sidebars[$s][$w] );
					}

					unset( $widget);
				}
				unset( $sidebar);
			}

			return $sidebars;
		}

		function hidden_widget_options( $widget, $return, $instance ) {

			if ( $_POST && isset( $_POST['id_base'] ) && $_POST['id_base'] == $widget->id_base ) {
				// widget was just saved so it's open
				self::show_hide_widget_options( $widget, $return, $instance );
				return;
			}
#####			self::register_globals(); // this really messed transient saving up!

			$instance['dw_include'] = isset( $instance['dw_include'] ) ? $instance['dw_include'] : 0;
			$instance['dw_logged'] = self::show_logged( $instance );
			$instance['other_ids'] = isset( $instance['other_ids'] ) ? $instance['other_ids'] : '';
			$instance['dw_includelang'] = isset( $instance['dw_includelang'] ) ? $instance['dw_includelang'] : 1;
			$instance['dw_includecat'] = isset( $instance['dw_includecat'] ) ? $instance['dw_includecat'] : '';
/*			$instance['dw_includetag'] = isset( $instance['dw_includetag'] ) ? $instance['dw_includetag'] : '';*/
			?>
			<div class="dwsp_opts">
				<input type="hidden" name="<?php echo esc_attr( $widget->get_field_name( 'dw_include' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'dw_include' ) ); ?>" value="<?php echo esc_attr( $instance['dw_include'] ); ?>" />
				<input type="hidden" id="<?php echo esc_attr( $widget->get_field_id( 'dw_logged' ) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'dw_logged' ) ); ?>" value="<?php echo esc_attr( $instance['dw_logged'] ); ?>" />
				<input type="hidden" name="<?php echo esc_attr( $widget->get_field_name( 'dw_includecat' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'dw_includecat' ) ); ?>" value="<?php echo esc_attr( $instance['dw_includecat'] ); ?>" />
				<input type="hidden" name="<?php echo esc_attr( $widget->get_field_name( 'dw_includelang' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'dw_includelang' ) ); ?>" value="<?php echo esc_attr( $instance['dw_includelang'] ); ?>" />
			<?php /* 	<input type="hidden" name="<?php echo esc_attr( $widget->get_field_name( 'dw_includetag' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'dw_includetag' ) ); ?>" value="<?php echo esc_attr( $instance['dw_includetag'] ); ?>" /> */ ?>

			<?php
			foreach ( $instance as $k => $v ) {
				if ( !$v ) {
					continue;
				}

				if ( strpos( $k, 'page-' ) === 0 ||
					strpos( $k, 'type-' ) === 0 ||
					strpos( $k, 'cat-' ) === 0 ||
					strpos( $k, 'tax-' ) === 0 ||
					strpos( $k, 'lang-' ) === 0) {
					?>
						<input type="hidden" id="<?php echo esc_attr( $widget->get_field_id( $k ) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( $k ) ); ?>" value="<?php echo esc_attr( $v ); ?>"  />
						<?php
				}
			}
				?>
				<input type="hidden" name="<?php echo esc_attr( $widget->get_field_name( 'other_ids' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'other_ids' ) ); ?>" value="<?php echo esc_attr( $instance['other_ids'] ); ?>" />
			</div>
			<?php
		}

		function show_widget_options() {
			$instance = htmlspecialchars_decode( nl2br( stripslashes( $_POST['opts'] ) ) );
			$instance = json_decode( $instance, true );
			$this->id_base = sanitize_text_field( $_POST['id_base'] );
			$this->number = sanitize_text_field( $_POST['widget_number'] );

			$new_instance = array();
			$prefix = 'widget-' . $this->id_base . '[' . $this->number . '][';
			foreach ( $instance as $k => $v) {
				$n = str_replace( array( $prefix, ']' ), '', $v['name'] );
				$new_instance[$n] = $v['value'];
			}

			self::show_hide_widget_options( $this, '', $new_instance);
			wp_die();
		}

		function show_hide_widget_options( $widget, $return, $instance ) {
			self::register_globals();
			$wp_page_types = self::page_types();

			$instance['dw_include'] = isset( $instance['dw_include'] ) ? $instance['dw_include'] : 0;
			$instance['dw_logged'] = self::show_logged( $instance );
			$instance['other_ids'] = isset( $instance['other_ids'] ) ? $instance['other_ids'] : '';
			$instance['dw_includelang'] = isset( $instance['dw_includelang'] ) ? $instance['dw_includelang'] : 1;
			$instance['dw_includecat'] = isset( $instance['dw_includecat'] ) ? $instance['dw_includecat'] : '';
/*			$instance['dw_includetag'] = isset( $instance['dw_includetag'] ) ? $instance['dw_includetag'] : '';*/
			?>

			<p>
				<label for="<?php echo esc_attr( $widget->get_field_id( 'dw_include' ) ); ?>"><strong><?php
			$dwplus_link_url = 'http://stallion-theme.co.uk/display-widgets-seo-plus-plugin/';
			$dwplus_link = sprintf( wp_kses(__( '<a href="%s" target="_blank">Display Widgets SEO Plus</a> Options', 'display-widgets-seo-plus' ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( $dwplus_link_url) );
			echo $dwplus_link;
			?></strong></label>
				<select name="<?php echo esc_attr( $widget->get_field_name( 'dw_logged' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'dw_logged' ) ); ?>" class="widefat">
					<option value=""><?php _e( "Hide OR Show For Everyone", "display-widgets-seo-plus" ); ?></option>
					<option value="out" <?php echo selected( $instance['dw_logged'], 'out' ); ?>><?php _e( "Hide For Logged In Users + Logged Out Users Use Options Below", "display-widgets-seo-plus" ); ?></option>
					<option value="in" <?php echo selected( $instance['dw_logged'], 'in' ); ?>><?php _e( "Hide For Logged Out Users + Logged In Users Use Options Below", "display-widgets-seo-plus" ); ?></option>
				</select>
			</p>

			<p><?php _e( "Hide OR Show Widget", "display-widgets-seo-plus" ); ?><br />
				<select name="<?php echo esc_attr( $widget->get_field_name( 'dw_include' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'dw_include' ) ); ?>" class="widefat">
					<option value="0"><?php _e( "Hide On Ticked", "display-widgets-seo-plus" ); ?></option>
					<option value="1" <?php echo selected( $instance['dw_include'], 1); ?>><?php _e( "Show On Ticked", "display-widgets-seo-plus" ); ?></option>
				</select>
			</p>

			<h4 class="dwsp_toggle" style="cursor:pointer;"><?php _e( "Categories", "display-widgets-seo-plus" ); ?> +/-</h4>
			<div class="dwsp_collapse">
				<div style="height:300px; overflow:auto; border:1px solid #dfdfdf; padding:3px; margin-bottom:5px;">
					<p>
						<label for="<?php echo esc_attr( $widget->get_field_id( 'dw_includecat' ) ); ?>"><?php _e( "Show On Ticked or Hide On Ticked", "display-widgets-seo-plus" ); ?></label>
						<select name="<?php echo esc_attr( $widget->get_field_name( 'dw_includecat' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'dw_includecat' ) ); ?>" class="widefat">
							<option value=""><?php echo "..."; ?></option>
							<option value="0" <?php echo selected( $instance['dw_includecat'], 0 ); ?>><?php _e( "Category Page 1 and All it's Posts", "display-widgets-seo-plus" ); ?></option>
							<option value="1" <?php echo selected( $instance['dw_includecat'], 1 ); ?>><?php _e( "Category Pages 1,2,3... and All it's Posts", "display-widgets-seo-plus" ); ?></option>
							<option value="2" <?php echo selected( $instance['dw_includecat'], 2 ); ?>><?php _e( "Category Page 1 and NOT it's Posts", "display-widgets-seo-plus" ); ?></option>
							<option value="3" <?php echo selected( $instance['dw_includecat'], 3 ); ?>><?php _e( "Category Pages 1,2,3... and NOT it's Posts", "display-widgets-seo-plus" ); ?></option>
							<option value="4" <?php echo selected( $instance['dw_includecat'], 4 ); ?>><?php _e( "Categories Posts ONLY Page 1", "display-widgets-seo-plus" ); ?></option>
							<option value="5" <?php echo selected( $instance['dw_includecat'], 5 ); ?>><?php _e( "Categories Posts ONLY Pages 1,2,3...", "display-widgets-seo-plus" ); ?></option>
						</select>
					</p><?php _e( "Set a Condition Above to Act on the Ticked Categories Below", "display-widgets-seo-plus" ); ?>

					<?php
					foreach ( $this->cats as $cat ) {
						$instance['cat-' . $cat->cat_ID] = isset( $instance['cat-' . $cat->cat_ID] ) ? $instance['cat-' . $cat->cat_ID] : false;
						?>
						<p><input class="checkbox" type="checkbox" <?php checked( $instance['cat-' . $cat->cat_ID], true ); ?> id="<?php echo esc_attr( $widget->get_field_id( 'cat-' . $cat->cat_ID ) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'cat-' . $cat->cat_ID ) ); ?>" />
							<label for="<?php echo $widget->get_field_id( 'cat-' . $cat->cat_ID ); ?>"><?php echo $cat->cat_name; ?></label>
						</p>
						<?php
						unset( $cat );
					}
					?>
				</div>
			</div>

			<?php /*
			<h4 class="dwsp_toggle" style="cursor:pointer;"><?php _e( "Tags", "display-widgets-seo-plus" ); ?> +/-</h4>
				<div class="dwsp_collapse">
					<div style="height:300px; overflow:auto; border:1px solid #dfdfdf; padding:3px; margin-bottom:5px;">
						<p>
							<label for="<?php echo esc_attr( $widget->get_field_id( 'dw_includetag' ) ); ?>"><?php _e( "Show On Ticked or Hide On Ticked", "display-widgets-seo-plus" ); ?></label>
							<select name="<?php echo esc_attr( $widget->get_field_name( 'dw_includetag' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'dw_includetag' ) ); ?>" class="widefat">
							<option value=""><?php echo "..."; ?></option>
							<option value="0" <?php echo selected( $instance['dw_includetag'], 0 ); ?>><?php _e( "Tag Page 1 and All it's Posts", "display-widgets-seo-plus" ); ?></option>
							<option value="1" <?php echo selected( $instance['dw_includetag'], 1 ); ?>><?php _e( "Tag Pages 1,2,3... and All it's Posts", "display-widgets-seo-plus" ); ?></option>
							<option value="2" <?php echo selected( $instance['dw_includetag'], 2 ); ?>><?php _e( "Tag Page 1 and NOT it's Posts", "display-widgets-seo-plus" ); ?></option>
							<option value="3" <?php echo selected( $instance['dw_includetag'], 3 ); ?>><?php _e( "Tag Pages 1,2,3... and NOT it's Posts", "display-widgets-seo-plus" ); ?></option>
							<option value="4" <?php echo selected( $instance['dw_includetag'], 4 ); ?>><?php _e( "Tags Posts ONLY Page 1", "display-widgets-seo-plus" ); ?></option>
							<option value="5" <?php echo selected( $instance['dw_includetag'], 5 ); ?>><?php _e( "Tags Posts ONLY Pages 1,2,3...", "display-widgets-seo-plus" ); ?></option>
							</select>
						</p><?php _e( "Set a Condition Above to Act on the Ticked Tags Below", "display-widgets-seo-plus" ); ?>

						<?php
						foreach ( $this->tags as $tag ) {
							$instance[ 'tag-' . $tag->term_id ] = isset( $instance[ 'tag-' . $tag->term_id ] ) ? $instance[ 'tag-' . $tag->term_id] : false;
							?>
							<p><input class="checkbox" type="checkbox" <?php checked( $instance['tag-'. $tag->term_id], true ); ?> id="<?php echo esc_attr( $widget->get_field_id( 'tag-'. $tag->term_id) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'tag-'. $tag->term_id) ); ?>" />
							<label for="<?php echo $widget->get_field_id( 'tag-'. $tag->term_id); ?>"><?php echo $tag->name ?></label>
							</p>
							<?php
							unset( $tag );
						}
						?>
					</div>
				</div>
			 */ ?>

			<h4 class="dwsp_toggle" style="cursor:pointer;margin-top:0;"><?php _e( "Content Types", "display-widgets-seo-plus" ); ?> +/-</h4>
			<div class="dwsp_collapse">
				<div style="height:300px; overflow:auto; border:1px solid #dfdfdf; padding:5px; margin-bottom:5px;">
					<?php
					foreach ( $wp_page_types as $key => $label ) {
						$instance['page-' . $key] = isset( $instance['page-' . $key] ) ? $instance['page-' . $key] : false;
						?>
						<p><input class="checkbox" type="checkbox" <?php checked( $instance['page-' . $key], true ); ?> id="<?php echo esc_attr( $widget->get_field_id( 'page-' . $key ) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'page-' . $key ) ); ?>" />
							<label for="<?php echo esc_attr( $widget->get_field_id( 'page-' . $key ) ); ?>"><?php echo $label; ?></label></p>
						<?php }
					?>
				</div>
			</div>

			<h4 class="dwsp_toggle" style="cursor:pointer;"><?php _e( "Static Pages", "display-widgets-seo-plus" ); ?> +/-</h4>
			<div class="dwsp_collapse">
				<div style="height:250px; overflow:auto; border:1px solid #dfdfdf; padding:5px; margin-bottom:5px;">
					<?php
					foreach ( $this->pages as $page ) {
						$instance['page-' . $page->ID] = isset( $instance['page-' . $page->ID] ) ? $instance['page-' . $page->ID] : false;
					}
					// use custom Page Walker to build page list
					$args = array( 'instance' => $instance, 'widget' => $widget );
					$page_list = $this->page_list->walk( $this->pages, 0, $args );
					if ( $page_list ) {
						echo '<ul>' . $page_list . '</ul>';
					}
					?>
				</div>
			</div>

			<?php if ( !empty( $this->cposts ) ) { ?>
				<h4 class="dwsp_toggle" style="cursor:pointer;"><?php _e( "Custom Post Types", "display-widgets-seo-plus" ); ?> +/-</h4>
				<div class="dwsp_collapse">
					<div style="overflow:auto; border:1px solid #dfdfdf; padding:5px; margin-bottom:5px;">
						<?php
						// unset Post and Page links from custom post types
						foreach ( array( 'post', 'page' ) as $unset ) {
							unset( $this->cposts[$unset] );
						}
						foreach ( $this->cposts as $post_key => $custom_post ) {
							$instance['type-' . $post_key] = isset( $instance['type-' . $post_key] ) ? $instance['type-' . $post_key] : false;
							?>
							<p><input class="checkbox" type="checkbox" <?php checked( $instance['type-' . $post_key], true ); ?> id="<?php echo esc_attr( $widget->get_field_id( 'type-' . $post_key ) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'type-' . $post_key ) ); ?>" />
								<label for="<?php echo esc_attr( $widget->get_field_id( 'type-' . $post_key ) ); ?>"><?php echo stripslashes( $custom_post->labels->name ); ?></label></p>
							<?php
							unset( $post_key, $custom_post );
						}
						?>
					</div>
				</div>

				<h4 class="dwsp_toggle" style="cursor:pointer;"><?php _e( "Custom Post Type Archives", "display-widgets-seo-plus" ); ?> +/-</h4>
				<div class="dwsp_collapse">
					<div style="overflow:auto; border:1px solid #dfdfdf; padding:5px; margin-bottom:5px;">
						<?php
						foreach ( $this->cposts as $post_key => $custom_post ) {
							if ( !$custom_post->has_archive ) {
								// don't give the option if there is no archive page
								continue;
							}
							$instance['type-' . $post_key . '-archive'] = isset( $instance['type-' . $post_key . '-archive'] ) ? $instance['type-' . $post_key . '-archive'] : false;
							?>
							<p><input class="checkbox" type="checkbox" <?php checked( $instance['type-' . $post_key . '-archive'], true); ?> id="<?php echo esc_attr( $widget->get_field_id( 'type-' . $post_key . '-archive' ) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'type-' . $post_key . '-archive' ) ); ?>" />
								<label for="<?php echo esc_attr( $widget->get_field_id( 'type-' . $post_key . '-archive' ) ); ?>"><?php echo stripslashes( $custom_post->labels->name); ?> <?php _e( "Archive", "display-widgets-seo-plus" ); ?></label></p>
						<?php } ?>
					</div>
				</div>
			<?php } ?>

			<?php if ( !empty( $this->taxes ) ) { ?>
				<h4 class="dwsp_toggle" style="cursor:pointer;"><?php _e( "Custom Taxonomy Archives", "display-widgets-seo-plus" ); ?> +/-</h4>
				<div class="dwsp_collapse">
					<div style="overflow:auto; border:1px solid #dfdfdf; padding:5px; margin-bottom:5px;">
						<?php
						// unset Tag link from custom taxonomies
						foreach ( array( 'post_tag' ) as $unset ) {
							unset( $this->taxes[$unset] );
						}
						foreach ( $this->taxes as $tax => $taxname ) {
							$instance['tax-' . $tax] = isset( $instance['tax-' . $tax] ) ? $instance['tax-' . $tax] : false;
							?>
							<p><input class="checkbox" type="checkbox" <?php checked( $instance['tax-' . $tax], true ); ?> id="<?php echo esc_attr( $widget->get_field_id( 'tax-' . $tax ) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'tax-' . $tax ) ); ?>" />
								<label for="<?php echo esc_attr( $widget->get_field_id( 'tax-' . $tax ) ); ?>"><?php echo str_replace( array( '_', '-' ), ' ', ucfirst( $taxname ) ); ?></label></p>
							<?php
							unset( $tax );
						}
						?>
					</div>
				</div>
			<?php } ?>

			<h4 class="dwsp_toggle" style="cursor:pointer;"><?php _e( "WordPress Posts", "display-widgets-seo-plus" ); ?> +/-</h4>
			<div class="dwsp_collapse">
				<p><label for="<?php echo esc_attr( $widget->get_field_id( 'other_ids' ) ); ?>"><?php _e( "Comma Separated list of IDs of posts not listed above", "display-widgets-seo-plus" ); ?>:</label>
					<input type="text" value="<?php echo esc_attr( $instance['other_ids'] ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'other_ids' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'other_ids' ) ); ?>" />
				</p>
			</div>

			<?php if ( !empty( $this->langs) ) { ?>
				<h4 class="dwsp_toggle" style="cursor:pointer;"><?php _e( "Languages", "display-widgets-seo-plus" ); ?> +/-</h4>
				<div class="dwsp_collapse">
					<p>
						<label for="<?php echo esc_attr( $widget->get_field_id( 'dw_includelang' ) ); ?>"><?php _e( "Show On Ticked Languages", "display-widgets-seo-plus" ); ?></label>
						<select name="<?php echo esc_attr( $widget->get_field_name( 'dw_includelang' ) ); ?>" id="<?php echo esc_attr( $widget->get_field_id( 'dw_includelang' ) ); ?>" class="widefat">
							<option value="1" <?php echo selected( $instance['dw_includelang'], 1 ); ?>><?php _e( "Language Support OFF", "display-widgets-seo-plus" ); ?></option>
							<option value="2" <?php echo selected( $instance['dw_includelang'], 2 ); ?>><?php _e( "Ignore Above Options : Ticked Languages ONLY", "display-widgets-seo-plus" ); ?></option>
							<option value="4" <?php echo selected( $instance['dw_includelang'], 4 ); ?>><?php _e( "Use Above Options : AND Ticked Languages", "display-widgets-seo-plus" ); ?></option>
						</select>
					</p><?php _e( "Set a Condition Above to Act on", "display-widgets-seo-plus" ); ?>

					<?php
					foreach ( $this->langs as $lang ) {
						$key = $lang['language_code'];
						$instance['lang-' . $key] = isset( $instance['lang-' . $key] ) ? $instance['lang-' . $key] : false;
						?>
						<p><input class="checkbox" type="checkbox" <?php checked( $instance['lang-' . $key], true ); ?> id="<?php echo esc_attr( $widget->get_field_id( 'lang-' . $key ) ); ?>" name="<?php echo esc_attr( $widget->get_field_name( 'lang-' . $key ) ); ?>" />
							<label for="<?php echo esc_attr( $widget->get_field_id( 'lang-' . $key ) ); ?>"><?php echo $lang['native_name'] ?></label></p>
						<?php
						unset( $lang, $key );
					}
					?>
				</div>
			<?php } ?>
<?php
		}

		function update_widget_options( $instance, $new_instance, $old_instance) {
			self::register_globals();

			if ( !empty( $this->pages ) ) {
				foreach ( $this->pages as $page ) {
					if ( isset( $new_instance['page-' . $page->ID] ) ) {
						$instance['page-' . $page->ID] = 1;
					} elseif ( isset( $instance['page-' . $page->ID] ) ) {
						unset( $instance['page-' . $page->ID] );
					}
					unset( $page );
				}
			}

			if ( !empty( $this->cats ) ) {
				foreach ( $this->cats as $cat ) {
					if ( isset( $new_instance['cat-' . $cat->cat_ID] ) ) {
						$instance['cat-' . $cat->cat_ID] = 1;
					} elseif ( isset( $instance['cat-' . $cat->cat_ID] ) ) {
						unset( $instance['cat-' . $cat->cat_ID] );
					}
					unset( $cat );
				}
			}

/*			if ( !empty( $this->tags ) ) {
				foreach ( $this->tags as $tag ) {
					if ( isset( $new_instance['tag-' . $tag->term_id] ) ) {
						$instance['tag-' . $tag->term_id] = 1;
					} elseif ( isset( $instance['tag-' . $tag->term_id] ) ) {
						unset( $instance['tag-' . $tag->term_id] );
					}
					unset( $tag );
				}
			}*/

			if ( !empty( $this->cposts ) ) {
				foreach ( $this->cposts as $post_key => $custom_post ) {
					if ( isset( $new_instance['type-' . $post_key] ) ) {
						$instance['type-' . $post_key] = 1;
					} elseif ( isset( $instance['type-' . $post_key] ) ) {
						unset( $instance['type-' . $post_key] );
					}

					if ( isset( $new_instance['type-' . $post_key . '-archive'] ) ) {
						$instance['type-' . $post_key . '-archive'] = 1;
					} elseif ( isset( $instance['type-' . $post_key . '-archive'] ) ) {
						unset( $instance['type-' . $post_key . '-archive'] );
					}

					unset( $custom_post );
				}
			}

			if ( !empty( $this->taxes) ) {
				foreach (array( 'post_tag' ) as $unset) {
					unset( $this->taxes[$unset] );
				}

				foreach ( $this->taxes as $tax => $taxname) {
					if ( isset( $new_instance['tax-' . $tax] ) ) {
						$instance['tax-' . $tax] = 1;
					} elseif ( isset( $instance['tax-' . $tax] ) ) {
						unset( $instance['tax-' . $tax] );
					}
					unset( $tax );
				}
			}

			if ( !empty( $this->langs ) ) {
				foreach ( $this->langs as $lang ) {
					if ( isset( $new_instance['lang-' . $lang['language_code']] ) ) {
						$instance['lang-' . $lang['language_code']] = 1;
					} elseif ( isset( $instance['lang-' . $lang['language_code']] ) ) {
						unset( $instance['lang-' . $lang['language_code']] );
					}
					unset( $lang );
				}
			}

			$instance['dw_include'] = ( isset( $new_instance['dw_include'] ) && $new_instance['dw_include'] ) ? 1 : 0;
			$instance['dw_logged'] = ( isset( $new_instance['dw_logged'] ) && $new_instance['dw_logged'] ) ? $new_instance['dw_logged'] : '';
			$instance['other_ids'] = ( isset( $new_instance['other_ids'] ) && $new_instance['other_ids'] ) ? $new_instance['other_ids'] : '';
			$instance['dw_includelang'] = ( isset( $new_instance['dw_includelang'] ) && $new_instance['dw_includelang'] ) ? $new_instance['dw_includelang'] : 1;

			$instance['dw_includecat'] = $new_instance['dw_includecat'];
/*			$instance['dw_includetag'] = $new_instance['dw_includetag']; */
#			$instance['dw_includecat'] = ( isset( $new_instance['dw_includecat'] ) && $new_instance['dw_includecat'] ) ? $new_instance['dw_includecat'] : '';
/*			$instance['dw_includetag'] = ( isset( $new_instance['dw_includetag'] ) && $new_instance['dw_includetag'] ) ? $new_instance['dw_includetag'] : '';*/

			$page_types = self::page_types();
			foreach ( array_keys( $page_types ) as $page ) {
				if ( isset( $new_instance['page-' . $page] ) ) {
					$instance['page-' . $page] = 1;
				} elseif ( isset( $instance['page-' . $page] ) ) {
					unset( $instance['page-' . $page] );
				}
			}
			unset( $page_types );

			return $instance;
		}

		function get_field_name( $field_name ) {
			return 'widget-' . $this->id_base . '[' . $this->number . '][' . $field_name . ']';
		}

		function get_field_id( $field_name ) {
			return 'widget-' . $this->id_base . '-' . $this->number . '-' . $field_name;
		}

		function load_js() {
			global $pagenow;

			if ( $pagenow != 'widgets.php' ) {
			//only load the js on the widgets page
				return;
			}
?>
<script type="text/javascript">
/*<![CDATA[*/
jQuery(document).ready(function ( $) {
	$( '.widgets-holder-wrap' ).on( 'click', '.dwsp_toggle', dwsp_toggle);
});
jQuery(document.body).bind( 'click.widgets-toggle', dwsp_show_opts);
function dwsp_show_opts(e) {
	var target = jQuery(e.target);
	var widget = target.closest( 'div.widget' );
	var inside = widget.children( '.widget-inside' );
	var opts = inside.find( '.dwsp_opts' );
	if (opts.length == 0) {
		return;
	}

	inside.find( '.spinner' ).show();

	jQuery.ajax({
		type: 'POST', url: ajaxurl,
		data: {
			'action': 'dwsp_show_widget',
			'opts': JSON.stringify(opts.children( 'input' ).serializeArray() ),
			'id_base': inside.find( 'input.id_base' ).val(),
			'widget_number': (inside.find( 'input.multi_number' ).val() == '' ) ? inside.find( 'input.widget_number' ).val() : inside.find( 'input.multi_number' ).val()
		},
		success: function (html) {
			opts.replaceWith(html);
			inside.find( '.spinner' ).hide();
		}
	});
}
function dwsp_toggle() {
	jQuery(this).next( '.dwsp_collapse' ).toggle();
}
/*]]>*/
</script>
<style type="text/css">
.dwsp_collapse {
	display: none;
}
h4.dwsp_toggle {
	color: #0074a2;
	line-height: 24px;
	text-decoration: underline;
	cursor: pointer;
}
h4.dwsp_toggle:hover {
	color: red;
}
.dwsp_collapse li {
	line-height: 1.5em;
	margin: 1em 0;
}
</style>
<?php
		}

		function show_logged( $instance ) {
			if ( isset( $instance['dw_logged'] ) ) {
				return $instance['dw_logged'];
			}

			if ( isset( $instance['dw_logout'] ) && $instance['dw_logout'] ) {
				$instance['dw_logged'] = 'out';
			} elseif ( isset( $instance['dw_login'] ) && $instance['dw_login'] ) {
				$instance['dw_logged'] = 'in';
			} else {
				$instance['dw_logged'] = '';
			}

			return $instance['dw_logged'];
		}

		function page_types() {
			$page_types = array(
				'front'			=> __( "Static Front Page", "display-widgets-seo-plus" ),
				'home1'			=> __( "Home Page Archives - Page 1 Only", "display-widgets-seo-plus" ),
				'home'			=> __( "Home Page Archives - Pages 2,3,4...", "display-widgets-seo-plus" ),
				'category1'		=> __( "All Category Archives - Page 1 Only", "display-widgets-seo-plus" ),
				'category'		=> __( "All Category Archives - Pages 2,3,4...", "display-widgets-seo-plus" ),
				'tag1'			=> __( "All Tag Archives - Page 1 Only", "display-widgets-seo-plus" ),
				'tag'			=> __( "All Tag Archives - Pages 2,3,4...", "display-widgets-seo-plus" ),
				'darchive1'		=> __( "All Dated Archives - Page 1 Only", "display-widgets-seo-plus" ),
				'darchive'		=> __( "All Dated Archives - Pages 2,3,4...", "display-widgets-seo-plus" ),
				'authora1'		=> __( "All Author Archives - Page 1 Only", "display-widgets-seo-plus" ),
				'authora'		=> __( "All Author Archives - Pages 2,3,4...", "display-widgets-seo-plus" ),
				'search1'		=> __( "All Search Results - Page 1 Only", "display-widgets-seo-plus" ),
				'search'		=> __( "All Search Results - Pages 2,3,4...", "display-widgets-seo-plus" ),
				'archive1'		=> __( "All Archives - Page 1 Only", "display-widgets-seo-plus" ),
				'archive'		=> __( "All Archives - Pages 2,3,4...", "display-widgets-seo-plus" ),
				'single1'		=> __( "All Posts - Page 1 Only", "display-widgets-seo-plus" ),
				'single'		=> __( "All Posts - Pages 2,3,4...", "display-widgets-seo-plus" ),
				'staticpages1'	=> __( "All Static Pages - Page 1 Only", "display-widgets-seo-plus" ),
				'staticpages'	=> __( "All Static Pages - Pages 2,3,4...", "display-widgets-seo-plus" ),
				'attachments1'	=> __( "All Attachment Pages - Page 1 Only", "display-widgets-seo-plus" ),
				'attachments'	=> __( "All Attachment Pages - Pages 2,3,4...", "display-widgets-seo-plus" ),
				'404'			=> __( "404 Error Page", "display-widgets-seo-plus" ),
			);

			if ( class_exists( 'BuddyPress' ) ) {
				$page_types_bp = array(
					'bpisbuddypress'		=> __( "ALL BuddyPress Pages", "display-widgets-seo-plus" ),
					'bpismembersdirectory'	=> __( "BuddyPress Members Directory", "display-widgets-seo-plus" ),
					'bpisuser'				=> __( "BuddyPress User Pages", "display-widgets-seo-plus" ),
					'bpisactivitydirectory'	=> __( "BuddyPress Activity Streams Directory", "display-widgets-seo-plus" ),
					'bpissingleactivity'	=> __( "BuddyPress Activity Streams Item", "display-widgets-seo-plus" ),
					'bpisgroupsdirectory'	=> __( "BuddyPress Groups Directory", "display-widgets-seo-plus" ),
					'bpisgroup'				=> __( "BuddyPress Group", "display-widgets-seo-plus" ),
					'bpisgroupforum'		=> __( "- BuddyPress Group Forum", "display-widgets-seo-plus" ),
					'bpisgroupforumtopic'	=> __( "- BuddyPress Group Forum Topic", "display-widgets-seo-plus" ),
					'bpisregisterpage'		=> __( "BuddyPress Registration Page", "display-widgets-seo-plus" ),
					'bpisactivationpage'	=> __( "BuddyPress Activation Page", "display-widgets-seo-plus" ),
				);

				$page_types = array_merge($page_types, $page_types_bp);
			}

			if ( class_exists( 'bbPress' ) ) {
				$page_types_bbp = array(
					'bbpisbbpress'			=> __( "ALL bbPress Pages", "display-widgets-seo-plus" ),
					'bbpissingleuser'		=> __( "bbPress User Pages", "display-widgets-seo-plus" ),
					'bbpisforumarchive'		=> __( "bbPress Forum Archive", "display-widgets-seo-plus" ),
					'bbpisforumcategory'	=> __( "bbPress Category Forum ", "display-widgets-seo-plus" ),
					'bbpissingleforum'		=> __( "bbPress Forum", "display-widgets-seo-plus" ),
					'bbpissingletopic'		=> __( "bbPress Forum Topic", "display-widgets-seo-plus" ),
					'bbpistopictag'			=> __( "bbPress Topic Tag", "display-widgets-seo-plus" ),
				);

				$page_types = array_merge($page_types, $page_types_bbp);
			}

			return apply_filters( 'dw_pages_types_register', $page_types );
		}

		function register_globals() {
			if ( !empty( $this->checked ) ) {
				return;
			}

			$saved_details = get_transient( $this->transient_name );
			if ( $saved_details ) {
				foreach ( $saved_details as $k => $d ) {
					if ( empty( $this->{$k} ) ) {
						$this->{$k} = $d;
					}
					unset( $k, $d );
				}
			} else {
				// Is the WPML plugin active
				if ( class_exists( 'SitePress' ) ) {
					if ( empty( $this->cats ) ) {
						// remove WPML plugin filters
						global $sitepress;
						remove_filter( 'get_terms_args', array( $sitepress, 'get_terms_args_filter' ) );
						remove_filter( 'get_term', array( $sitepress, 'get_term_adjust_id' ), 1 );
						remove_filter( 'terms_clauses', array( $sitepress, 'terms_clauses' ) );
						// Get ALL categories no matter the language
						$this->cats = get_categories( array(
							'hide_empty' => false,
						) );
						// re-add WPML plugin filters
						add_filter( 'terms_clauses', array( $sitepress, 'terms_clauses' ) );
						add_filter( 'get_term', array( $sitepress, 'get_term_adjust_id' ) );
						add_filter( 'get_terms_args', array( $sitepress, 'get_terms_args_filter' ), 10, 2 );
					}
				} else {
					if ( empty( $this->cats ) ) {
						$this->cats = get_categories( array(
							'hide_empty' => false,
						) );
					}
				}

/*				if ( empty( $this->tags ) ) {
					$this->tags = get_tags( array(
						'hide_empty'	=> false,
					) );
				} */

				if ( empty( $this->pages ) ) {
					$this->pages = get_posts( array(
						'post_type'		=> 'page',
						'post_status'	=> 'publish',
						'numberposts'	=> -1,
						'orderby'		=> 'title',
						'order'			=> 'ASC',
						'fields'		=> array( 'ID', 'name' ),
					) );
				}

				if (empty( $this->cposts ) ) {
					$this->cposts = get_post_types(
						array( 'public' => true, ), 'object'
					);

					foreach (array( 'revision', 'attachment', 'nav_menu_item' ) as $unset ) {
						unset( $this->cposts[$unset] );
					}

					foreach ( $this->cposts as $c => $type ) {
						$post_taxes = get_object_taxonomies( $c );
						foreach ( $post_taxes as $post_tax ) {
							if ( in_array( $post_tax, array( 'category', 'post_format' ) ) ) {
								continue;
							}

							$taxonomy = get_taxonomy( $post_tax );
							$name = $post_tax;

							if ( isset( $taxonomy->labels->name ) && !empty( $taxonomy->labels->name ) ) {
								$name = $taxonomy->labels->name;
							}

							$this->taxes[$post_tax] = $name;
						}
					}
				}

				// If transient not available regenerate the data and save the transient for up to 7 days
				set_transient( $this->transient_name, array(
					'cats'		=> $this->cats,
##					'tags'		=> $this->tags,
					'pages'		=> $this->pages,
					'cposts'	=> $this->cposts,
					'taxes'		=> $this->taxes,
				),
				60 * 60 * 24 * 7
				);
			}

			if ( empty( $this->langs ) && function_exists( 'icl_get_languages' ) ) {
				$this->langs = icl_get_languages( 'skip_missing=0&orderby=code' );
			}

			if ( empty( $this->checked) ) {
				$this->checked[] = true;
			}
		}

		function delete_transient() {
			delete_transient( $this->transient_name);
		}

		function load_lang() {
			load_plugin_textdomain( 'display-widgets-seo-plus', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
		}

		/* WPML Support for Page ID */
		function get_lang_id( $id, $type = 'page' ) {
			if ( function_exists( 'icl_object_id' ) ) {
				$id = icl_object_id( $id, $type, true);
			}

			return $id;
		}

	}

	// Custom Page Walker class
	class DWPLUS_Walker_Page_List extends Walker_Page {

		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$output .= "\n<ul class='children'>\n";
		}

		function end_lvl(&$output, $depth = 0, $args = array() ) {
			$output .= "</ul>\n";
		}

		function start_el( &$output, $page, $depth = 0, $args = array(), $current_page = 0) {
			if ( $depth) {
				$indent = str_repeat( "&mdash; ", $depth);
			} else {
				$indent = '';
			}
			// args: $instance, $widget
			extract( $args, EXTR_SKIP );

			if ( '' === $page->post_title ) {
				$page->post_title = sprintf(__( '#%d (no title)', 'display-widgets-seo-plus' ), $page->ID );
			}

			$output .= '<li>' . $indent;
			$output .= '<input class="checkbox" type="checkbox" ' . checked( $instance['page-' . $page->ID], true, false ) . ' id="' . esc_attr( $widget->get_field_id( 'page-' . $page->ID ) ) . '" name="' . esc_attr( $widget->get_field_name( 'page-' . $page->ID ) ) . '" />';

			$output .= '<label for="' . esc_attr( $widget->get_field_id( 'page-' . $page->ID ) ) . '">' . apply_filters( 'the_title', $page->post_title, $page->ID ) . '</label>';
		}

		function end_el( &$output, $page, $depth = 0, $args = array() ) {
			$output .= "</li>\n";
		}

	}
	new DWPLUSPlugin();
}