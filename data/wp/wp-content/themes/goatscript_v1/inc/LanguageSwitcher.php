<?php

class LanguageSwitcher
{
    public static function getLanguageSwitchLink(): array
    {
        if (is_home()) {
            $post = null;
            $otherLanguage = self::getOtherLanguage($post);
            $postUrl = pll_home_url($otherLanguage);
        } elseif (is_search()) {
            $post = null;
            $otherLanguage = self::getOtherLanguage($post);
            $postUrl = sprintf('%s?s=%s', pll_home_url($otherLanguage), sanitize_text_field(get_search_query() ?? ''));
        } else {
            wp_reset_query();
            $post = get_post();
            $otherLanguage = self::getOtherLanguage($post);
            $postUrl = self::getOtherLanguagePostUrl($post);
        }

        $label = pll_translate_string('switch_to_language', $otherLanguage);
        $disabled = false;

        if (!$postUrl) {
            // Post has no translation
            $disabled = true;
        }

        return [
            'language' => $otherLanguage,
            'url'      => $postUrl,
            'label'    => $label,
            'disabled' => $disabled,
        ];
    }

    public static function getOtherLanguage(?WP_Post $post = null): string
    {
        $options = ['raw' => 1];
        if ($post) {
            $options['post_id'] = $post->ID;
        }

        $languages = pll_the_languages($options);
        $otherLanguage = array_find($languages, static function (array $language) {
            return $language['current_lang'] === false;
        });

        return $otherLanguage['slug'] ?? '';
    }

    public static function getOtherLanguagePostUrl(WP_Post $post): string
    {
        $otherLanguageId = pll_get_post($post->ID, self::getOtherLanguage($post));
        if ($otherLanguageId === 0) return '';

        return get_permalink(get_post($otherLanguageId));
    }
}
