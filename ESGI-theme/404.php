<?php get_header(); ?>
<footer class="site-footer">
    <div class="container" style="align-items: end !important;">
        <div class="footer-left">
            <h1 class="footer-logo">ESGI.</h1>
            <br>
            <main id="site-main-wp" class="site-main-wp">
                <div class="row-404">
                    <h1 class="mb-5">404 Error</h1>
                    <p class="mb-5">The page you were looking for couldn't be found.<br>
                        Maybe try a search?
                    </p>
                    <?php get_search_form(); ?>
                </div>
            </main>
            <p>2022 Figma Template by ESGI</p>
        </div>
        <div class="footer-right">
            <div class="contact-info">
                <h2>Manager</h2>
                <br>
                <p>+33 1 53 31 25 23</p>
                <p>info@esgi.com</p>
            </div>
            <div class="contact-info">
                <h2>CEO</h2>
                <br>
                <p>+33 1 53 31 25 25</p>
                <p>ceo@company.com</p>
                <br>
                <ul style="margin-top:8%; justify-content: end; display: flex;">
                    <?php if (get_theme_mod('url_twitter')) : ?>
                        <li style="margin-right: 5%">
                            <a href="<?= get_theme_mod('url_twitter') ?>"
                            ><?= esgi_getIcon('twitter') ?></a
                            >
                        </li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('url_facebook')) : ?>
                        <li style="margin-right: 5%">
                            <a href="<?= get_theme_mod('url_facebook') ?>"
                            ><?= esgi_getIcon('facebook') ?></a
                            >
                        </li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('url_google')) : ?>
                        <li style="margin-right: 5%">
                            <a href="<?= get_theme_mod('url_google') ?>"
                            ><?= esgi_getIcon('google') ?></a
                            >
                        </li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('url_linkedin')) : ?>
                        <li style="margin-right: 5%">
                            <a href="<?= get_theme_mod('url_linkedin') ?>"
                            ><?= esgi_getIcon('linkedin') ?></a
                            >
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
