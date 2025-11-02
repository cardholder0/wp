<?php wp_footer(); ?>
<footer>
    <div class="footer_wrapper">
        <?php
            require_once get_template_directory() . '/inc/classes/class-footer-walker.php';
        ?>

        <section class="footer_nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer_menu',
                'container'      => false,
                'walker'         => new Footer_Walker(),
                'items_wrap'     => '%3$s',
            ]);
            ?>
        </section>
        <div class="footer_lower">
            <span class="footer_lower_copyrighting">
                Copyrighting © <?php echo date('Y'); ?> IREV. All rights reserved.
            </span>
            <div>
                <a>LINKEDIN, </a>
                <a>FACEBOOK, </a>
                <a>INSTAGRAM, </a>
                <a>X</a>
            </div>
        </div>
        <img class="footer_logo" src="<?php echo esc_url(get_theme_file_uri('src/icons/IREV.svg')); ?>"
        alt="irev" />
    </div>
</footer>
</body>
</html>