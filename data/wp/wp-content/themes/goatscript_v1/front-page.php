<?php get_header(); ?>

<?php echo get_template_part('components/hero'); ?>

<div class="content-grid">
    <section>
        <div class="section-heading">
            <div>
                <div class="eyebrow"><?php pll_e('Lass dich inspirieren'); ?></div>
                <h2 id="notes-title"><?php pll_e('Neue Beiträge'); ?></h2></div>
        </div>
        <div class="post-list" id="postList">
            <?php
            $query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC',
            ]);
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
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
        <?php // echo get_template_part('components/list_widget'); ?>
        <?php echo get_template_part('components/add'); ?>
        <?php // echo get_template_part('components/newsletter_widget'); ?>
    </aside>
</div>

<?php get_footer(); ?>
