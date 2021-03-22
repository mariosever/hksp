<?php /* footer.php */ ?>

<footer>
    <div class="container">
        <div class="row row-cols-1 d-flex justify-content-center">
            <div class="col">
                <div class="footer-box">
                    <span class="material-icons">mail_outline</span>
                    <p class="icon-text">info@hksp.com</p>
                </div>
                <div class="footer-box">
                    <span class="material-icons">room</span>
                    <p class="icon-text">Ulica sv. Mateja 70/a <br> 10000 Zagreb</p>
                </div>
                <div class="footer-box">
                    <a href="https://www.facebook.com/komorasocijalnihpedagoga" target="_blank">
                        <img class="fb-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Facebook.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/komora_socijalnih_pedagoga/" target="_blank">
                        <img class="insta-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Instagram.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2021. Hrvatska komora socijalnih pedagoga.</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>