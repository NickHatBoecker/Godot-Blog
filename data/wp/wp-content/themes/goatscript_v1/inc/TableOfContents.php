<?php

class TableOfContents
{
    /**
     * Find all headlines (h1-h6) with an `id` in the post-content.
     */
    public static function getItems(WP_Post $post): array
    {
        $content = $post->post_content;
        $content = apply_filters('the_content', $content); // Add ids to headline
        $anchors = [];

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $content);

        self::collectHeadlines($dom->childNodes, $anchors);

        return $anchors;
    }

    private static function collectHeadlines(DOMNodeList $nodes, array &$headlines): void
    {
        foreach ($nodes as $node) {
            /** @var DOMNode $node */
            if ($node->nodeName === 'h2' && $node->getAttribute('id')) {
                $id = trim($node->getAttribute('id'));
                $headlines[] = [
                    'url'      => sprintf('#%s', $id),
                    'title'    => self::generateTitle($node->textContent),
                    'children' => [],
                ];
            }

            /** @var DOMNode $node */
            if ($node->nodeName === 'h3' && $node->getAttribute('id')) {
                $id = trim($node->getAttribute('id'));
                $headlines[count($headlines) - 1]['children'][] = [
                    'url'      => sprintf('#%s', $id),
                    'title'    => self::generateTitle($node->textContent),
                    'children' => [],
                ];
            }

            if ($node->hasChildNodes()) {
                self::collectHeadlines($node->childNodes, $headlines);
            }
        }
    }

    private static function generateTitle(string $title): string
    {
        $newTitle = trim($title);
        if (preg_match('/^(\d\.).*/', $newTitle, $matches)) {
            // Remove numbers from the title, because the table of contents will display them already.
            $newTitle = str_replace($matches[1], '', $newTitle);
        }

        return $newTitle;
    }
}
