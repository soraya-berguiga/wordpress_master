
<!-- -----------------PAGE STATIQUE ACCUEIL---------------- -->

<?php get_header(); ?>
  <section class="page-header front-page-header<?php if(get_theme_mod('fp_container_boxy')) : echo 'boxy-header'; endif; ?>"
    style="background-image: url('<?php echo get_theme_mod('fp_container_image'); ?>');">

    <h1 class="page-title" style="font-size: <?php echo get_theme_mod('fp_texts_title'); ?>px;">
      <?php echo (get_theme_mod('fp_texts_title'));?>
    </h1>

    <a href="<?php echo get_theme_mod('fp_button_url'); ?>">

      <button type="button" class="call-to-action <?php echo get_theme_mod('fp_button_style'); ?>">
        <?php echo get_theme_mod('fp_button_text'); ?>
      </button>


  </a>
  </section>
  <main class="container front-content">
    <section class="custom-presentation">
      <img src="<?php echo get_theme_mod('fp_container_image2'); ?>" alt="">
      <div class="custom-presentation-infos">
         <h2 class="custom-title"style="font-size: <?php echo get_theme_mod('fp_texts_title_size'); ?>px;">
       <?php echo get_theme_mod('fp_texts_title'); ?></h2>
        <p class="custom-content">
          <?php echo get_theme_mod('fp_texts_description'); ?>

        </p>
        <a href="<?php echo get_theme_mod('fp_button_url_bis'); ?>">
          <button type="button" class="call-to-action<?php echo get_theme_mod('fp_button_style_bis'); ?>">
            <?php echo get_theme_mod('fp_button_text_bis'); ?></button>
        </a>
      </div>
    </section>

    <section class="custom-blocks">
      <div class="custom-block">

        <img src="<?php echo get_theme_mod('fp_container_image_small1'); ?>">
        <h3 class="custom-title"style="font-size: <?php echo get_theme_mod('fp_texts_title_size2'); ?>px;">>
      <?php echo get_theme_mod('fp_texts_title2'); ?>
        </h3>
        <p class="custom-content">
          <?php echo get_theme_mod('fp_texts_description'); ?>

        </p>
      </div>
      <div class="custom-block">

        <img src="<?php echo get_theme_mod('fp_container_image_small2'); ?>">
        <h3 class="custom-title"style="font-size: <?php echo get_theme_mod('fp_texts_title_size3'); ?>px;">>
      <?php echo get_theme_mod('fp_texts_title3'); ?>
        </h3>
        <p class="custom-content">
           <?php echo get_theme_mod('fp_texts_description'); ?>
        </p>
      </div>
      <div class="custom-block">

        <img src="<?php echo get_theme_mod('fp_container_image_small3'); ?>">
        <h3 class="custom-title"style="font-size: <?php echo get_theme_mod('fp_texts_title_size4'); ?>px;">>
      <?php echo get_theme_mod('fp_texts_title4'); ?>
        </h3>
        <p class="custom-content">
          <?php echo get_theme_mod('fp_texts_description'); ?>

        </p>
      </div>
    </section>
    <section class="custom-section  <?php echo get_theme_mod('fp_quote_background'); ?>">
      <blockquote class="star-quote">
        <p class="quote-content">
          <?php echo get_theme_mod('fp_quote_text'); ?>
        </p>
        <cite class="quote-footer">
          <?php echo get_theme_mod('fp_quote_source'); ?>
        </cite>
      </blockquote>
    </section>
  <?php get_footer(); ?>
