<?php
if (!empty($tags)) {
    echo '<div class="tag-list mt-48">';
    echo '<h2 class="sr-only">Schlagwörter zu diesem Beitrag</h2>';
    foreach ($tags as $tag) {
        echo sprintf('<a href="%s" title="Mehr Beiträge zum Thema %s" class="tag-list__item button button--primary-outline">%s</a>', get_tag_link($tag), $tag->name, $tag->name);
    }
    echo '</div>';
}
