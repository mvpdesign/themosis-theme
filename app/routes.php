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
        'languageAttributes' => $general->getLanguageAttributes()
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
