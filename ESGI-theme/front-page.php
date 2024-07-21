<?php get_header(); ?>

<main id="site-content">
  <div class="hero">
      <h1 class="top-title title-home"><?php echo get_theme_mod('top_title', 'A really professional structure for all your events!'); ?></h1>
      <img style="width: 74%;margin-left: 26%;" class="top-image" src="<?php echo get_theme_mod('top_image', get_template_directory_uri() . '/assets/img/top-image.jpg'); ?>"/>
  </div>

  <?php
    get_template_part('template-parts/apropos2');
    get_template_part('template-parts/services');
    get_template_part('template-parts/partenaires');
    ?>
</main>

<?php get_footer(); ?>
