<?php
$categories = get_the_category();
$category = null;
if (count($categories) && !in_array($categories[0]->term_id, GENERAL_CATEGORIES)) {
    $category = $categories[0];
}
?>
<article class="post-card u-position-relative">
    <div class="post-meta">
        <strong>12.06.2024</strong>
        <?php if ($category) { echo sprintf('<span class="post-meta-detail">%s</span>', $category->name); } ?>
    </div>
    <div><h3><?php echo get_the_title(); ?></h3>
        <p><?php echo get_field('intro') ?? get_the_excerpt(); ?></p>
    </div>
    <a href="<?php echo get_page_link(); ?>" class="post-arrow wcag-link" aria-label="<?php echo sprintf('%s \'%s\'', pll__('Zum Beitrag'), get_the_title()); ?>">
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M5 12h13m-5-5 5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
</article>
