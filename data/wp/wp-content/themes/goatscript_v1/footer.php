</main>

<footer class="footer">
    <span>GoatScript · &copy; NickHatBoecker 2026</span>
    <?php
    wp_nav_menu([
        'theme_location' => 'footer_menu',
        'container'      => 'nav',
        'menu_class'     => 'footer-links',
    ]);
    ?>
</footer>

<?php wp_footer(); ?>

</div>

<script src="<?php echo get_theme_file_uri('assets/js/theme.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('assets/js/search.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('assets/index.js'); ?>"></script>

</body>
</html>
