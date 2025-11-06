

<footer class="site-footer">
    <div class="container">
        
        <div class="footer-main">
            
            <div class="footer-widget footer-phone">
                <a href="tel:+380636364320">+38 063-63-64-320</a>
            </div>

            <div class="footer-widget footer-social">
                <a href="https://instagram.com" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/icon-instagram.png" alt="Instagram">
                </a>
            </div>

            <div class="footer-widget footer-logo">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/default-logo.png" alt="<?php bloginfo('name'); ?>">
                    </a>
                    <?php
                }
                ?>
            </div>

            <div class="footer-widget footer-social">
                <a href="https://facebook.com" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/icon-facebook.png" alt="Facebook">
                </a>
            </div>

            <div class="footer-widget footer-address">
                <p>м. Київ, Пр-т<br>Берестейський, 131-А</p>
            </div>

        </div> <div class="footer-copyright">
            <p>&copy; <?php echo date('Y'); ?> Copyright by steel puma | <a href="/privacy-policy">Privacy Policy</a></p>
        </div>

    </div> </footer>

<?php wp_footer();  ?>

</body>
</html>
