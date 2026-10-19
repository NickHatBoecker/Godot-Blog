<?php
$headlines = TableOfContents::getItems(get_post());
if (count($headlines) > 1):
    ?>
    <section class="side-card">
        <div class="eyebrow"><?php pll_e('Inhaltsverzeichnis'); ?></div>
        <h2><?php pll_e('In diesem Beitrag'); ?></h2>

        <ol class="toc">
            <?php
            $i = 0;
            foreach ($headlines as $headline) {
                ++$i;

                $childrenHtml = '';
                /* Uncomment to render children
                if ($headline['children'] ?? []) {
                    $childrenHtml .= '<ul>';
                    foreach ($headline['children'] as $child) {
                        $childrenHtml .= sprintf('<li><a href="%s">%s</a></li>', $child['url'], $child['title']);
                    }
                    $childrenHtml .= '</ul>';
                }
                */

                echo sprintf(
                    '<li><a href="%s"><span>%s</span><b>%s</b></a>%s</li>',
                    $headline['url'],
                    str_pad($i, 2, '0', STR_PAD_LEFT),
                    $headline['title'],
                    $childrenHtml
                );
            }
            ?>
        </ol>
    </section>
<?php endif; ?>
