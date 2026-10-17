<?php

class AddIdToWysiwygHeadline
{
    public static function init ($content): array|string|null
    {
        return preg_replace_callback(
            '/<h2([^>]*)>(.*?)<\/h2>/is',
            static function ($matches) {
                $attributes = $matches[1];
                $text = wp_strip_all_tags($matches[2]);

                // Keep an existing ID.
                if (preg_match('/\bid\s*=/i', $attributes)) {
                    return $matches[0];
                }

                $id = sanitize_title($text);

                return '<h2' . $attributes . ' id="' . esc_attr($id) . '">'
                    . $matches[2]
                    . '</h2>';
            },
            $content
        );
    }
}

