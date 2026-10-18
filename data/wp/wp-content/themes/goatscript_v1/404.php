<?php get_header(); ?>

<header class="article-intro" aria-labelledby="article-title">
    <h1 id="article-title">404</h1>
</header>

<div class="article-layout">
    <div>
        <div lang="en">
            <h2>Page not found</h2>
            <p>Looks like this page sneaked out of the Scene Tree.<br>Maybe someone accidentally called queue_free().</p>
            <a class="text-link" href="<?php echo pll_home_url('en'); ?>">Back to homepage <?php echo get_template_part('components/icons/arrow-right'); ?></a>
        </div>

        <hr>

        <div lang="de">
            <h2>Seite nicht gefunden</h2>
            <p>Sieht so aus, als hätte sich diese Seite aus dem Scene Tree geschlichen.<br>Vielleicht hat jemand versehentlich queue_free() aufgerufen.</p>
            <a class="text-link" href="<?php echo pll_home_url('de'); ?>">Zurück zur Startseite <?php echo get_template_part('components/icons/arrow-right'); ?></a>
        </div>
    </div>

    <aside class="article-sidebar">
        <?php get_template_part('components/add'); ?>
    </aside>
</div>

<?php get_footer(); ?>
