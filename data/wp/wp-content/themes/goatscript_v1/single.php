<?php get_header(); ?>

    <div class="page-content">
        <div class="post-list">
            <div class="post-list__items">
                <?php
                while (have_posts()):
                    the_post();
                    get_template_part('components/single-post');
                endwhile;
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
