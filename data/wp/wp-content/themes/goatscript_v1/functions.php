<?php

require_once __DIR__ . '/inc/GoatScriptTranslations.php';
require_once __DIR__ . '/inc/RegisterPostFields.php';
require_once __DIR__ . '/inc/AddIdToWysiwygHeadline.php';
require_once __DIR__ . '/inc/TableOfContents.php';
require_once __DIR__ . '/inc/LanguageSwitcher.php';

const GENERAL_CATEGORIES = [1, 7];

add_action('init', [GoatScriptTranslations::class, 'init']);
add_action('acf/include_fields', [RegisterPostFields::class, 'register']);
add_filter('the_content', [AddIdToWysiwygHeadline::class, 'init']);

add_action('init', function () {
    register_nav_menus([
        'main_menu'   => 'Main navigation',
        'footer_menu' => 'Footer navigation',
    ]);
});

/**
 * Get top tags
 */
function getTopTags(int $limit = 10): array
{
    $tags = get_terms([
        'taxonomy' => 'post_tag',
        'orderby'  => 'count',
        'order'    => 'DESC',
        'number'   => $limit,
    ]);

    if (empty($tags) || is_wp_error($tags)) {
        return [];
    }

    return $tags;
}

add_filter('excerpt_length', function ($length) {
    return 20;
}, 999);

// Secure REST api
add_filter('rest_authentication_errors', function ($result) {
    if (! is_user_logged_in()) {
        return new WP_Error('rest_API_cannot_access', ['status' => rest_authorization_required_code()]);
    }
    return $result;
});

add_filter('rest_url_prefix', function () {
    return 'fs8d97g'; // You have to resave permalinks if you change this
});
