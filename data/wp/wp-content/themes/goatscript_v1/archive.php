<?php get_header(); ?>

<h1><?php echo get_the_archive_title(); ?></h1>

<div class="content-grid">
    <section>
        <div class="post-list" id="postList">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    get_template_part('components/list-item-post');
                endwhile;
            else:
                echo '<p>'.pll__('Hier gibt es noch nichts zu entdecken. Neue Beiträge sind bereits in Planung!').'</p>';
            endif;
            ?>
        </div>

        <?php
        if (get_the_posts_pagination()) {
            echo '<div class="post-list__separator mb-54"></div>';
            the_posts_pagination();
        }
        ?>
    </section>

    <aside class="sidebar">
        <?php echo get_template_part('components/add'); ?>
    </aside>
</div>

<?php get_footer(); ?>
