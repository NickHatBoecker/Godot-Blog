<?php

class GoatScriptTranslations {
    public const string TEXT_DOMAIN = 'goatscript';

    public static function init(): void {
        pll_register_string('close', 'Schließen', self::TEXT_DOMAIN, false);
        pll_register_string('menu_open', 'Menü öffnen', self::TEXT_DOMAIN, false);
        pll_register_string('menu_close', 'Menü schließen', self::TEXT_DOMAIN, false);
        pll_register_string('home_code_example', 'Beispiel für ein GDScript', self::TEXT_DOMAIN, false);

        // Search
        pll_register_string('search_headline', 'Suche', self::TEXT_DOMAIN, false);
        pll_register_string('search_posts', 'Seite durchsuchen', self::TEXT_DOMAIN, false);
        pll_register_string('search_cta', 'Suchen', self::TEXT_DOMAIN, false);
        pll_register_string('search_placeholder', 'Suchbegriff eingeben', self::TEXT_DOMAIN, false);
        pll_register_string('search_results_for', 'Suchergebnisse für', self::TEXT_DOMAIN, false);
        pll_register_string('search_no_results', 'Keine Beiträge zu deinem Suchbegriff gefunden.', self::TEXT_DOMAIN, false);
        pll_register_string('search_intro', 'Suchbegriff eintippen, Enter drücken und los geht’s!<br>Oder einen der folgenden Vorschläge ausprobieren', self::TEXT_DOMAIN, true);

        pll_register_string('theme_change', 'Farbschema ändern', self::TEXT_DOMAIN, false);
        pll_register_string('theme_dark', 'Dunkel', self::TEXT_DOMAIN, false);
        pll_register_string('theme_light', 'Hell', self::TEXT_DOMAIN, false);
        pll_register_string('theme_system', 'System', self::TEXT_DOMAIN, false);
        pll_register_string('slogan', '<span id="hero-title-before">Spiele entwickeln.</span><br><em id="hero-title-em">Godot</em> verstehen.', self::TEXT_DOMAIN, false);
        pll_register_string('tags', 'Godot · GDScript · Clean Code · Pixelart', self::TEXT_DOMAIN, false);
        pll_register_string('blog_description', 'blog_description', self::TEXT_DOMAIN, true);
        pll_register_string('blog_description_cta', 'Zu den Beiträgen', self::TEXT_DOMAIN, false);
        pll_register_string('newest_posts', 'Neue Beiträge', self::TEXT_DOMAIN, false);
        pll_register_string('newest_posts_dateline', 'Lass dich inspirieren', self::TEXT_DOMAIN, false);
        pll_register_string('switch_to_language', 'switch_to_language', self::TEXT_DOMAIN, false);
        pll_register_string('go_to_post', 'Zum Beitrag', self::TEXT_DOMAIN, false);
        pll_register_string('reading_time', 'Lesezeit', self::TEXT_DOMAIN, false);
        pll_register_string('minute_short', 'min', self::TEXT_DOMAIN, false);
        pll_register_string('tags_headline', 'Schlagwörter', self::TEXT_DOMAIN, false);
        pll_register_string('article_navigation', 'Artikel-Navigation', self::TEXT_DOMAIN, false);
        pll_register_string('article_index', 'Inhaltsverzeichnis', self::TEXT_DOMAIN, false);
        pll_register_string('in_this_article', 'In diesem Beitrag', self::TEXT_DOMAIN, false);
        pll_register_string('next_up', 'Als Nächstes', self::TEXT_DOMAIN, false);
        pll_register_string('more_posts', 'Weitere Beiträge', self::TEXT_DOMAIN, false);
        pll_register_string('all_posts', 'Alle Beiträge', self::TEXT_DOMAIN, false);
        pll_register_string('language_switcher_missing_translation', 'language_switcher_missing_translation', self::TEXT_DOMAIN, false);

        // Add (single post)
        pll_register_string('single_post_add_dateline', 'single_post_add_dateline', self::TEXT_DOMAIN, false);
        pll_register_string('single_post_add_text', 'single_post_add_text', self::TEXT_DOMAIN, true);
        pll_register_string('single_post_add_cta_url', 'single_post_add_cta_url', self::TEXT_DOMAIN, false);
        pll_register_string('single_post_add_cta_title', 'single_post_add_cta_title', self::TEXT_DOMAIN, false);
        pll_register_string('single_post_add_cta_text', 'single_post_add_cta_text', self::TEXT_DOMAIN, false);
    }
}
