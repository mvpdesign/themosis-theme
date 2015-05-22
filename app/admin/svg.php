<?php

// all svg media uploads
add_filter('upload_mimes', 'svgMimeTypes');
function svgMimeTypes($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}

add_filter('wp_mime_type_icon', 'svgMimeTypeIcon', 10, 3);
function svgMimeTypeIcon($icon, $mime, $post_id)
{
    if ($mime == 'image/svg+xml') {
        $icon = wp_get_attachment_url($post_id);
    }

    return $icon;
}

add_action('admin_enqueue_scripts', 'svgStyles');
function svgStyles()
{
    wp_add_inline_style('wp-admin', '.attachment .type-image[class*="subtype-svg"] .filename { display: none; }
                                     .attachment .type-image[class*="subtype-svg"] .thumbnail .centered img.icon { transform: translate(-50%, -50%); }');
}
