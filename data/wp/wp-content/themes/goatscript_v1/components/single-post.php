<?php
$categories = get_the_category();
$category = null;
if (count($categories) && ! in_array($categories[0]->term_id, [1, 7])) {
    $category = $categories[0];
}
?>

<header class="article-intro" aria-labelledby="article-title">
    <?php if ($category): ?>
    <div class="article-kicker">
        <span class="category-pill"><?php echo $category->name; ?></span>
    </div>
    <?php endif; ?>

    <?php echo get_template_part('components/single_meta'); ?>
</header>

<div class="article-layout">
    <div>
        <?php if (get_field('intro')): ?>
        <p class="intro dek"><?php the_field('intro'); ?></p>
        <?php endif; ?>

        <article class="article-body">
            <?php the_content(''); ?>

            <?php
            if ($tags = get_tags()) {
                echo '<div class="tag-list" aria-label="'.pll__('Schlagwörter').'">';
                foreach ($tags as $tag) {
                    echo sprintf('<a class="tag" href="%s">#%s</a>', get_tag_link($tag), $tag->name);
                }
                echo '</div>';
            }
            ?>
        </article>
    </div>

    <aside class="article-sidebar">
        <?php get_template_part('components/table_of_contents'); ?>
        <?php get_template_part('components/add'); ?>
    </aside>
</div>

<section class="related-section" aria-labelledby="related-title">
    <div class="related-heading">
        <div>
            <div class="eyebrow"><?php pll_e('Als Nächstes'); ?></div>
            <h2 id="related-title"><?php pll_e('Weitere Beiträge'); ?></h2>
        </div>
        <a class="back-link" href="index.html#notizen">
            <?php pll_e('Alle Beiträge'); ?>
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h13m-5-5 5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
    </div>

    <div class="related-grid">
        <a class="related-card" href="index.html#notizen">
            <?php
            $category = 'Szenen';
            $readTime = sprintf('09 %s', pll__('min'));
            ?>
            <div class="eyebrow"><?php echo sprintf('%s · %s', $category, $readTime); ?></div>
            <h3>Wann eine Szene eine Szene bleiben sollte</h3>
            <span class="related-arrow"><?php pll_e('Zum Beitrag'); ?> →</span>
        </a>
        <a class="related-card" href="index.html#notizen">
            <?php
            $category = 'Game Feel';
            $readTime = sprintf('07 %s', pll__('min'));
            ?>
            <div class="eyebrow"><?php echo sprintf('%s · %s', $category, $readTime); ?></div>
            <h3>Juice ohne Chaos: kleine Animationen mit großer Wirkung</h3>
            <span class="related-arrow"><?php pll_e('Zum Beitrag'); ?> →</span>
        </a>
        <a class="related-card" href="index.html#notizen">
            <?php
            $category = 'Debugging';
            $readTime = sprintf('05 %s', pll__('min'));
            ?>
            <div class="eyebrow"><?php echo sprintf('%s · %s', $category, $readTime); ?></div>
            <h3>Debugger-Fallen: drei Ausgaben, die mehr sagen als ein Print</h3>
            <span class="related-arrow"><?php pll_e('Zum Beitrag'); ?> →</span>
        </a>
    </div>
</section>
