<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="Ein zeitgemäßes GoatScript-Blog für praktische Godot-Engine-Beiträge.">
    <?php wp_head(); ?>
    <link href="<?php echo get_theme_file_uri('style.css'); ?>" rel="stylesheet">
</head>
<body>
<div class="page-shell">
    <header class="topbar">
        <a class="brand" href="<?php echo pll_home_url(); ?>" aria-label="GoatScript Startseite">
            <span class="brand-mark" aria-hidden="true">
              <img src="<?php echo get_theme_file_uri('assets/images/logo.png'); ?>" width="60" height="60"/>
            </span>
            <span>GoatScript</span>
        </a>

        <?php
        $menuTranslations = [
            'menuOpen'  => pll__('Menü öffnen'),
            'menuClose' => pll__('Menü schließen'),
        ];
        ?>
        <div data-translations="<?php echo htmlentities(json_encode($menuTranslations)); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'main_menu',
                'container'      => 'nav',
                'menu_class'     => 'main-nav',
            ]);
            ?>
        </div>

        <div class="utility-actions">
            <?php
            $languageSwitchLink = LanguageSwitcher::getLanguageSwitchLink();
            if ($languageSwitchLink['disabled']):
                ?>
                <button disabled lang="<?php echo $languageSwitchLink['language']; ?>"
                    class="theme-button language-button"
                    id="languageToggle"
                    title="<?php pll_e('language_switcher_missing_translation'); ?>"
                >
                    <span id="languageLabel"><?php echo strtoupper($languageSwitchLink['language']); ?></span>
                </button>
                <?php
            else:
            ?>
            <a href="<?php echo $languageSwitchLink['url']; ?>" lang="<?php echo $languageSwitchLink['language']; ?>"
                class="theme-button language-button"
                id="languageToggle"
                title="<?php echo $languageSwitchLink['label']; ?>"
            >
                <span id="languageLabel"><?php echo strtoupper($languageSwitchLink['language']); ?></span>
            </a>
            <?php endif; ?>

            <?php echo get_template_part('components/header_search'); ?>

            <button
                class="theme-button"
                id="themeToggle"
                type="button"
                aria-label="<?php pll_e('Farbschema ändern'); ?>"
                data-system="<?php pll_e('System'); ?>"
                data-dark="<?php pll_e('Dunkel'); ?>"
                data-light="<?php pll_e('Hell'); ?>"
            >
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path
                        d="M12 3v2.1M12 18.9V21M3 12h2.1M18.9 12H21M5.6 5.6l1.5 1.5m9.8 9.8 1.5 1.5m0-12.8-1.5 1.5m-9.8 9.8-1.5 1.5"
                        stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <circle cx="12" cy="12" r="3.5" stroke="currentColor" stroke-width="1.7"/>
                </svg>
                <span id="themeLabel"><?php pll_e('System'); ?></span>
            </button>
            <button class="icon-button menu-toggle" id="menuToggle" type="button" aria-controls="mainNav"
                    aria-expanded="false" title="<?php pll_e('Menü öffnen'); ?>">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </header>

    <main id="top">
