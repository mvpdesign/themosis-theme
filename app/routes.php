<?php

use MVPDesign\ThemosisTheme\Models\WordPress;
use MVPDesign\ThemosisTheme\Models\Theme;

/*
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::any('home', 'MVPDesign\ThemosisTheme\Controllers\HomeController@index');
Route::any('front', 'MVPDesign\ThemosisTheme\Controllers\HomeController@index');
Route::any('template', array('home', 'uses' => 'MVPDesign\ThemosisTheme\Controllers\HomeController@index'));

/*
 * Define your view composers
 *
 */

// html partial
View::composer('partials.html', function ($view) {
    $general = new WordPress\General;

    $data = array(
        'languageAttributes' => $general->getLanguageAttributes(),
        'isAdminBarShowing' => is_admin_bar_showing()
    );

    $view->with($data);
});

// head partial
View::composer('partials.head', function ($view) {
    $general = new WordPress\General;

    $data = array(
        'wpHead' => $general->wpHead()
    );

    $view->with($data);
});

// favicons partial
View::composer('includes.favicons', function ($view) {
    $theme = new WordPress\Theme;

    $data = array(
        'templateDirectoryURI' => $theme->getTemplateDirectoryURI()
    );

    $view->with($data);
});

// body partial
View::composer('partials.body', function ($view) {
    $general = new WordPress\General;

    $data = array(
        'bodyClass' => $general->getBodyClass(),
        'wpFooter'  => $general->wpFooter()
    );

    $view->with($data);
});

// meta data include
View::composer('includes.metaData', function ($view) {
    $general = new WordPress\General;

    $data = array(
        'charset'     => $general->getBlogInfo('charset'),
        'title'       => $general->getPageTitle('|', 'right'),
        'description' => $general->getBlogInfo('description')
    );

    $view->with($data);
});
