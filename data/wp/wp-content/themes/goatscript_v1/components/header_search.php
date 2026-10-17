<button class="icon-button search-button" id="searchFocus" type="button" aria-expanded="false"
        aria-controls="searchLayer" title="<?php pll_e('Seite durchsuchen'); ?>">
    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <circle cx="10.8" cy="10.8" r="6.5" stroke="currentColor" stroke-width="1.8"/>
        <path d="m16 16 4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
    </svg>
</button>

<div class="search-layer" id="searchLayer" hidden>
    <form class="search-form" id="searchForm" action="" method="get">
        <label for="searchQuery" data-copy="searchLabel"><?php pll_e('Seite durchsuchen'); ?></label>
        <div class="search-form-row">
            <input id="searchQuery" name="s" type="text" data-copy-placeholder="searchPlaceholder"
                   placeholder="<?php pll_e('Suchbegriff eingeben'); ?>" autocomplete="off">
            <button class="search-submit" type="submit"
                    data-copy="searchSubmit"><?php pll_e('Suchen'); ?></button>
            <button class="search-close" id="searchClose" type="button" title="<?php pll_e('Schließen'); ?>">×
            </button>
        </div>
    </form>
</div>
