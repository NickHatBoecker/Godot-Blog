<?php

require_once __DIR__ . '/inc/GoatScriptTranslations.php';
require_once __DIR__ . '/inc/RegisterPostFields.php';
require_once __DIR__ . '/inc/AddIdToWysiwygHeadline.php';
require_once __DIR__ . '/inc/TableOfContents.php';
require_once __DIR__ . '/inc/LanguageSwitcher.php';

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
