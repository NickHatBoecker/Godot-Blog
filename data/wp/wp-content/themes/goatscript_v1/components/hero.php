<section class="hero" aria-labelledby="hero-title">
    <div class="hero-copy">
        <div class="eyebrow" lang="en"><?php pll_e('Godot · GDScript · Clean Code · Pixelart'); ?></div>
        <h1 class="hero-title" id="hero-title"><?php pll_e('<span id="hero-title-before">Spiele entwickeln.</span><br><em id="hero-title-em">Godot</em> verstehen.'); ?></h1>
        <p class="hero-intro"><?php pll_e('blog_description'); ?></p>
        <div class="hero-actions">
            <a class="primary-link" href="<?php echo get_post_type_archive_link('post'); ?>">
                <span><?php pll_e('Zu den Beiträgen'); ?></span>
                <?php echo get_template_part('components/icons/arrow-right'); ?>
            </a>
        </div>
    </div>

    <?php echo get_template_part('components/home_code_box'); ?>
</section>
