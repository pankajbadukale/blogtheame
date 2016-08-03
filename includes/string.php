<?php
/**
 * Text String / Translatable string used in tamatebako
 * @since 0.1.0
 */
function tamatebako_string( $context ){

	/* Open Sesame ! */
	$text = array();

	/* Paged Title Tag
	 * Translators: 1 is the page title and separator. 2 is the page number.
	 * Example Output: "{post title} | Page {page number}"
	 */
	$text['paged'] = _x( '%1$s Page %2$s', 'paged title tag', 'genbu' );

	/* Skip to content (accessibility) */
	$text['skip-to-content'] = _x( 'Skip to content', 'skip to content (accessibility)', 'genbu' );

	/* Read More */
	$text['read-more'] = _x( 'Continue reading', 'content read more', 'genbu' );

	/* Entry Permalink */
	$text['permalink'] = _x( 'Permalink', 'entry permalink', 'genbu' );

	/* Next, Previous */
	$text['next'] = _x( 'Next', 'next in pagination and navigation (accessibility)', 'genbu' );
	$text['previous'] = _x( 'Previous', 'previous in pagination and navigation (accessibility)', 'genbu' );

	/* Search */
	$text['search'] = _x( 'Search&hellip;', 'search text', 'genbu' );
	$text['search-button'] = _x( 'Search', 'search button (accessibility)', 'genbu' );
	$text['expand-search-form'] = _x( 'Expand Search Form', 'expand search form button (accessibility)', 'genbu' );

	/* Comments error */
	$text['comments-closed-pings-open'] = _x( 'Comments are closed, but trackbacks and pingbacks are open.', 'comments notice', 'genbu' );
	$text['comments-closed'] = _x( 'Comments are closed.', 'comments notice', 'genbu' );

	/* Content error */
	$text['error'] = _x( '404 Not Found', '404 title', 'genbu' );
	$text['error-msg'] = _x( 'Apologies, but no entries were found.', '404 content', 'genbu' );

	/* Theme Layout */
	$text['global-layout'] = _x( 'Global Layout', 'theme layouts', 'genbu' );
	$text['layout'] = _x( 'Layout', 'theme layouts', 'genbu' );

	$text = apply_filters( 'tamatebako_string', $text );

	/* Close Sesame ! */
	if ( isset( $text[$context] ) ){
		return $text[$context];
	}
	return '';
}


/**
 * Text String / Translatable string used in this theme
 * To keep track on language usage and separate from Hybrid Core.
 * @since 0.1.0
 */
function genbu_string( $context ){

	/* Open Sesame ! */
	$text = array();

	/* Layouts */
	$text['layout-c'] = _x( 'Content', 'layout', 'genbu' );
	$text['layout-c-s1'] = _x( 'Content / Sidebar 1', 'layout', 'genbu' );
	$text['layout-s1-c'] = _x( 'Sidebar 1 / Content', 'layout', 'genbu' );
	$text['layout-s2-c'] = _x( 'Sidebar 2 / Content', 'layout', 'genbu' );
	$text['layout-c-s2'] = _x( 'Content / Sidebar 2', 'layout', 'genbu' );
	$text['layout-s2-c-s1'] = _x( 'Sidebar 2 / Content / Sidebar 1', 'layout', 'genbu' );
	$text['layout-s2-s1-c'] = _x( 'Sidebar 2 / Sidebar 1 / Content', 'layout', 'genbu' );
	$text['layout-c-s1-s2'] = _x( 'Content / Sidebar 1 / Sidebar 2', 'layout', 'genbu' );
	$text['layout-s1-c-s2'] = _x( 'Sidebar 1 / Content / Sidebar 2', 'layout', 'genbu' );

	/* Register Menus */
	$text['menu-primary-name'] = _x( 'Navigation', 'nav menu location', 'genbu' );
	$text['menu-footer-name'] = _x( 'Footer Links', 'nav menu location', 'genbu' );

	/* Register Sidebar */
	$text['sidebar-primary-name'] = _x( 'Sidebar 1', 'sidebar name', 'genbu' );
	$text['sidebar-secondary-name'] = _x( 'Sidebar 2', 'sidebar name', 'genbu' );

	/* Custom Content Portfolio Project Link */
	$text['ccp-view-project'] = _x( 'View Project', 'custom content portfolio link', 'genbu' );

	$text = apply_filters( 'genbu_string', $text );

	/* Close Sesame ! */
	if ( isset( $text[$context] ) ){
		return $text[$context];
	}
	return '';
}
