<?php
/**
 * This is the posts page, not the homepage per se.
 */
?>
<?php get_header(); ?>

<h1><?php pll_e('Alle Beiträge'); ?></h1>

<div class="content-grid">
    <section>
        <div class="post-list" id="postList">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    get_template_part('components/list-item-post');
                endwhile;
            endif;
            ?>
        </div>

        <?php
        if (get_the_posts_pagination()) {
            the_posts_pagination();
        }
        ?>
    </section>

    <aside class="sidebar">
        <?php echo get_template_part('components/add'); ?>
    </aside>
</div>

<?php get_footer(); ?>
