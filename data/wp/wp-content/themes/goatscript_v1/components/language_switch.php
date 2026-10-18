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
