<?php
$searchTerm = get_search_query() ?? '';
?>
<?php get_header(); ?>

<form class="search-form mb-36" action="" method="GET">
    <div class="search-form-row">
        <input class="form-control" type="text" name="s" placeholder="<?php pll_e('Suchbegriff eingeben'); ?>" value="<?php echo sanitize_text_field($searchTerm); ?>" autocomplete="off" />
        <button class="search-submit" type="submit" data-copy="searchSubmit">Search</button>
    </div>
</form>

<?php
$headline = pll__('Suche');
if ($searchTerm) {
    $headline = sprintf('%s "%s"', pll__('Suchergebnisse für'), sanitize_text_field($searchTerm));
}
?>
<h1 class="h2 archive-headline<?php if (!$searchTerm || !have_posts()) { echo ' mb-24'; } ?>"><?php echo $headline; ?></h1>

<?php
if ($searchTerm):
    ?>
    <div class="post-list">
        <div class="post-list__items mb-120">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    get_template_part('components/list-item-post');
                endwhile;
            else:
                echo '<p class="empty-result">'.pll_e('Keine Beiträge zu deinem Suchbegriff gefunden.').'</p>';
            endif;
            ?>
        </div>

        <?php
        if (get_the_posts_pagination()) {
            echo '<div class="post-list__separator mb-54"></div>';
            the_posts_pagination();
        }
        ?>
    </div>
<?php
else:
    echo '<p class="empty-result">'.pll__('Suchbegriff eintippen, Enter drücken und los geht’s!<br>Oder einen der folgenden Vorschläge ausprobieren').':</p>';

    // Render some top tags
    $tags = getTopTags(10);
    $tagList = __DIR__ . '/components/tag-list.php';
    if ($tags && file_exists($tagList)) {
        include $tagList;
    }
endif;
?>

<?php get_footer(); ?>
