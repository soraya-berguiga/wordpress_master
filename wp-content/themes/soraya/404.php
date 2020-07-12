
<!-- --PAGE 404-- -->

<?php get_header(); ?>
  <main class="container site-content">
    <section class="error-404">
      <h2 class="entry-title">
        <?php _e( 'Erreur 404');
        ?>&nbsp<i class="fas fa-search"></i>
      </h2>
      <h3>
        <?php
  		get_search_form(
  			array(
  				'label' => ( 'Erreur 404')
  			)
  		);
  		  ?>
      </h3>
      <div class="intro-text">
        <h3 class="error-page">
          <?php _e( 'La page que vous cherchez n\'existe pas !'); ?>
        </h3>
      </div>
      <a href="<?php echo get_bloginfo('url') . '/' ; ?>">
        <button type="button" class="call-to-action">
        </i>&nbsp Appuyez ici pour revenir à l'accueil &nbsp
        </button>
      </a>
    </section>
  </main>
<?php get_footer();?>
