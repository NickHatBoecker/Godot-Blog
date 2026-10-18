<?php get_header(); ?>

<header class="article-intro" aria-labelledby="article-title">
    <h1 id="article-title"><?php echo get_the_title(); ?></h1>
</header>

<div class="article-layout">
    <div>
        <?php if (get_field('intro')): ?>
            <p class="intro dek"><?php the_field('intro'); ?></p>
        <?php endif; ?>

        <article class="article-body">
            <?php the_content(''); ?>
        </article>
    </div>

    <aside class="article-sidebar">
        <?php get_template_part('components/table_of_contents'); ?>
        <?php get_template_part('components/add'); ?>
    </aside>
</div>

<?php get_footer(); ?>
