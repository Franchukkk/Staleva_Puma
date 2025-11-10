

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

<script>
jQuery(document).ready(function($) {
    
    var $form = $('#contact-form'); 
    var $submitButton = $form.find('.btn-solid');
    var $formMessage = $form.find('.form-message');

    $form.on('submit', function(e) {
        e.preventDefault(); 

        var formData = $(this).serialize();
        
        
        $submitButton.prop('disabled', true).text('Відправка...');
        $formMessage.hide().text('');

        $.ajax({
            type: 'POST',
            
            url: '<?php echo get_template_directory_uri(); ?>/send-to-telegram.php',
            data: formData,
            dataType: 'json', 

            success: function(response) {
                if (response.status === 'success') {
                   
                    $form.trigger('reset'); 
                    $formMessage.css('color', '#5acafa').text(response.message).fadeIn();
                    $submitButton.prop('disabled', false).text('Записатись');
                } else {
                   
                    $formMessage.css('color', '#f44336').text(response.message).fadeIn();
                    $submitButton.prop('disabled', false).text('Спробувати ще');
                }
            },
            error: function(xhr, status, error) {
            
                $formMessage.css('color', '#f44336').text('Сталася помилка сервера. Спробуйте пізніше.').fadeIn();
                $submitButton.prop('disabled', false).text('Спробувати ще');
            }
        });
    });
});
</script>

</body>
</html>
