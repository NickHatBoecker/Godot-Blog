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
            echo '<div class="post-list__separator mb-54"></div>';
            the_posts_pagination();
        }
        ?>
    </section>

    <aside class="sidebar">
        <section class="side-panel" id="serien" aria-labelledby="series-title">
            <div class="eyebrow">Langstrecke</div>
            <h2 id="series-title">Serien</h2>
            <div class="series-list">
                <div class="series-item"><span class="series-number">01</span>
                    <div><strong>Vom Prototyp zum
                            Spiel</strong><span>Scope, Feedback und die Entscheidungen dazwischen.</span>
                    </div>
                </div>
                <div class="series-item"><span class="series-number">02</span>
                    <div><strong>Scene Tree
                            Clinic</strong><span>Architekturfragen aus echten kleinen Projekten.</span></div>
                </div>
                <div class="series-item"><span class="series-number">03</span>
                    <div><strong>Pixel für
                            Pixel</strong><span>2D-Bewegung, Timing und das richtige Gefühl.</span></div>
                </div>
            </div>
        </section>

        <?php echo get_template_part('components/add'); ?>

        <!--
        <section class="side-panel newsletter-panel" id="newsletter" aria-labelledby="newsletter-title">
            <div class="eyebrow">Kein Lärm</div>
            <h2 id="newsletter-title">Der nächste Beitrag</h2>
            <p id="newsletterCopy">Ein kurzer Impuls, wenn ein neuer Beitrag landet. Ungefähr zweimal im
                Monat.</p>
            <form class="newsletter-form" id="newsletterForm">
                <label class="filter-label" for="emailInput"
                       style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);white-space:nowrap;">E-Mail-Adresse</label>
                <input id="emailInput" type="email" placeholder="name@studio.dev" required>
                <button type="submit">Eintragen</button>
                <p class="form-status" id="formStatus" aria-live="polite"></p>
            </form>
        </section>
        -->
    </aside>
</div>

<?php get_footer(); ?>
