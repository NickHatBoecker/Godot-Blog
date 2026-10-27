<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="Ein zeitgemäßes GoatScript-Blog für praktische Godot-Engine-Beiträge.">
    <?php wp_head(); ?>
    <link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('assets/images/favicon.png'); ?>">
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

        <nav class="main-nav" id="mainNav" aria-label="Hauptnavigation">
            <?php
            $menuTranslations = [
                'menuOpen'  => pll__('Menü öffnen'),
                'menuClose' => pll__('Menü schließen'),
            ];
            ?>
            <div class="js-main-nav-translations" data-translations="<?php echo htmlentities(json_encode($menuTranslations)); ?>" style="width: 100%;">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container'      => 'nav',
                    'menu_class'     => 'main-navigation',
                ]);
                ?>
            </div>

            <div class="mobile-menu-controls" role="group" aria-label="Menüeinstellungen">
                <?php echo get_template_part('components/language_switch'); ?>
                <?php echo get_template_part('components/theme_toggle'); ?>
            </div>
        </nav>

        <div class="utility-actions">
            <button class="icon-button menu-toggle" id="menuToggle" type="button" aria-controls="mainNav"
                    aria-expanded="false" title="<?php pll_e('Menü öffnen'); ?>">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
            </button>

            <?php echo get_template_part('components/header_search'); ?>
        </div>
    </header>

    <main id="top">
