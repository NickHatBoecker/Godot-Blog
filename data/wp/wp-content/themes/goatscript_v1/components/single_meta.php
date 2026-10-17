<h1 id="article-title"><?php echo get_the_title(); ?></h1>

<div class="article-meta">
    <?php if (!is_page()): ?>
    <span>
        <i class="meta-dot" aria-hidden="true"></i>
        <span>12.06.2024</span>
    </span>
    <?php endif; ?>

    <span>
        <i class="meta-dot" aria-hidden="true"></i>
        <span><?php echo sprintf('06 %s %s', pll__('min'), pll__('Lesezeit')); ?></span>
    </span>
</div>
