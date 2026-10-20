<?php /* Template Name: Discover Topics */ ?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<div class="content-grid">
    <section>
        <!-- Categories -->
        <div class="u-flex u-flex--wrap gap-12">
            <?php
            $categories = get_categories([
                'taxonomy'   => 'category',
                'orderby'    => 'name',
                'order'      => 'ASC',
                'hide_empty' => true,
                'exclude'    => implode(',', GENERAL_CATEGORIES),
            ]);
            if (count($categories)):
                foreach ($categories as $category):
                    /** @var WP_Term $category */
                    ?>
                    <article class="category-card side-panel u-position-relative" style="width: 49%;">
                        <div class="u-flex u-flex--vertical-center gap-12">
                            <div class="u-flex--grow">
                                <div class="eyebrow"><?php pll_e('category'); ?></div>
                                <h2><?php echo $category->name ?></h2>
                                <?php if ($category->description): ?><span
                                    class="text-muted"><?php echo $category->description; ?></span><?php endif; ?>
                                <div style="margin-top: 12px;">
                                    <small>
                                        <?php
                                        if ($category->count === 1) {
                                            pll_e('discover_num_article');
                                        } else {
                                            echo str_replace('%d', $category->count, pll__('discover_num_articles'));
                                        }
                                        ?>
                                    </small>
                                </div>
                            </div>
                            <div>
                                <a href="<?php echo get_category_link($category); ?>" class="post-arrow wcag-link" aria-label="<?php echo sprintf('%s \'%s\'', pll__('Gehe zu allen Beiträgen mit dem Thema'), $category->name); ?>">
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M5 12h13m-5-5 5 5-5 5" stroke="currentColor" stroke-width="1.8"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                    </article>
                <?php
                endforeach;
            endif;
            ?>
        </div>

        <!-- Tags -->
        <h2 style="margin-top: 48px;"><?php pll_e('Weitere Themen'); ?></h2>
        <div class="u-flex u-flex--wrap gap-12">
            <?php
            $tags = get_categories([
                'taxonomy'   => 'post_tag',
                'number'     => 10, // @TODO Order randomly to discover more than 10?
                'orderby'    => 'name',
                'order'      => 'ASC',
                'hide_empty' => false,
            ]);
            if (count($tags)):
                foreach ($tags as $tag):
                    /** @var WP_Term $tag */
                    ?>
                    <article class="category-card side-panel u-position-relative" style="width: 29%;">
                        <div class="u-flex u-flex--vertical-center gap-12">
                            <div class="u-flex--grow">
                                <div class="eyebrow">#<?php echo $tag->name ?></div>
                            </div>
                            <div>
                                <a href="<?php echo get_category_link($tag); ?>" class="post-arrow wcag-link" aria-label="<?php echo sprintf('%s \'%s\'', pll__('Gehe zu allen Beiträgen mit dem Thema'), $category->name); ?>">
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M5 12h13m-5-5 5 5-5 5" stroke="currentColor" stroke-width="1.8"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                    </article>
                <?php
                endforeach;
            endif;
            ?>
        </div>
    </section>

    <aside class="sidebar">
        <?php echo get_template_part('components/add'); ?>
    </aside>
</div>

<?php get_footer(); ?>
