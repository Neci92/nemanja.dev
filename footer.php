
<footer data-module="FOOTER" class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <!-- <p class="footer__message">Blagojevic Nemanja 2021.</p> -->
            <ul class="navigation__list">
                <li class="navigation__list-item">
                    <a class="button button--icon" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.svg" alt="User icon">
                    <span class="navigation__link-text navigation__link-text--footer">Instagram</span>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a class="button button--icon" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.svg" alt="Search icon">
                    <span class="navigation__link-text navigation__link-text--footer">Linkedin</span>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a class="button button--icon" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/github.svg" alt="Contact me">
                    <span class="navigation__link-text navigation__link-text--footer">Github</span>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a class="button button--icon" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.svg" alt="Contact me">
                    <span class="navigation__link-text navigation__link-text--footer">Twitter</span>
                    </a>
                </li>
            </ul>

            <?php include("template-parts/navigation.php"); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
