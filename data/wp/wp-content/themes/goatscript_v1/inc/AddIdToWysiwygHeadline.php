<?php

class AddIdToWysiwygHeadline
{
    public static function init($content): array|string|null
    {
        return preg_replace_callback(
            '/<(h[23])([^>]*)>(.*?)<\/\1>/is',
            static function ($matches) {
                $tag = $matches[1];
                $attributes = $matches[2];
                $text = wp_strip_all_tags($matches[3]);

                // Keep an existing ID.
                if (preg_match('/\bid\s*=/i', $attributes)) {
                    return $matches[0];
                }

                $id = sanitize_title($text);

                return '<' . $tag . $attributes . ' id="' . esc_attr($id) . '">'
                    . $matches[3]
                    . '</' . $tag . '>';
            },
            $content
        );
    }
}
