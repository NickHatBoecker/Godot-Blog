<section class="hero" aria-labelledby="hero-title">
    <div class="hero-copy">
        <div class="eyebrow"><?php pll_e('Godot · GDScript · Clean Code · Pixelart'); ?></div>
        <h1 class="hero-title" id="hero-title"><?php pll_e('<span id="hero-title-before">Spiele entwickeln.</span><br><em id="hero-title-em">Godot</em> verstehen.'); ?></h1>
        <p class="hero-intro"><?php pll_e('blog_description'); ?></p>
        <div class="hero-actions">
            <a class="primary-link" href="#notizen"><span id="hero-notes-link"><?php pll_e('Zu den Beiträgen'); ?></span>
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M5 12h13m-5-5 5 5-5 5" stroke="currentColor" stroke-width="1.8"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>

    <?php echo get_template_part('components/home_code_box'); ?>
</section>
