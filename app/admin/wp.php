<?php

// customize the wp title
add_filter('wp_title', 'wpTitle', 10, 2);
function wpTitle($title, $separator)
{
    // Don't affect wp_title() calls in feeds.
    if (is_feed()) {
        return $title;
    }

    // The $paged global variable contains the page number of a listing of posts.
    // The $page global variable contains the page number of a single post that is paged.
    // We'll display whichever one applies, if we're not looking at the first page.
    global $paged, $page;

    if (is_search()) {
        // If we're a search, let's start over:
        $title = sprintf(__('Search results for %s'), '"' . get_search_query() . '"');

        // Add a page number if we're on page 2 or more:
        if ($paged >= 2) {
            $title .= " $separator " . sprintf(__('Page %s'), $paged);
        }

        // Add the site name to the end:
        $title .= " $separator " . get_bloginfo('name', 'display');
        // We're done. Let's send the new title back to wp_title():
        return $title;
    }

    // Otherwise, let's start by adding the site name to the end:
    $title .= get_bloginfo('name', 'display');

    // If we have a site description and we're on the home/front page, add the description:
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
        $title .= " $separator " . $site_description;
    }

    // Add a page number if necessary:
    if ($paged >= 2 || $page >= 2) {
        $title .= " $separator " . sprintf(__('Page %s'), max($paged, $page));
    }

    // Return the new title to wp_title():
    return $title;
}
