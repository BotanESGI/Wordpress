<footer class="site-footer">
  <div class="container">
    <div class="footer-left">
      <h1 class="footer-logo mb-5">ESGI.</h1>
      <p>2022 Figma Template by ESGI</p>
    </div>
    <div class="footer-right">
      <div class="contact-info">
        <h2>Manager</h2>
          <br>
        <p>+33 1 53 31 25 23</p>
        <p class="pFooter2">info@esgi.com</p>
      </div>
      <div class="contact-info">
        <h2>CEO</h2>
          <br>
        <p>+33 1 53 31 25 25</p>
        <p class="pFooter2">ceo@company.com</p>
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
