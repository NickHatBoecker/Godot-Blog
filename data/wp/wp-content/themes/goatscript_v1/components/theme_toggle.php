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
