<h1 id="article-title"><?php echo get_the_title(); ?></h1>

<div class="article-meta">
    <span>
        <i class="meta-dot" aria-hidden="true"></i>
        <span><?php echo get_the_date(); ?></span>
    </span>

    <span>
        <i class="meta-dot" aria-hidden="true"></i>
        <?php
        $readTime = do_shortcode('[rt_reading_time]') ?? '';
        ?>
        <span class="gap-0"><?php echo sprintf('%s%s %s', $readTime, pll__('min'), pll__('Lesezeit')); ?></span>
    </span>
</div>
