</main>
<footer class="site-footer">
  <section class="widgets-sections container">
    <div class="widgets-section widgets-section-1">
      <?php
        if(is_active_sidebar('widgets-section-1')) :
          dynamic_sidebar('widgets-section-1');
        endif;
      ?>

    </div>
    <div class="widgets-section widgets-section-2">
      <?php
        if(is_active_sidebar('widgets-section-2')) :
          dynamic_sidebar('widgets-section-2');
        endif;
       ?>

    </div>
    <div class="widgets-section widgets-section-3">
      <?php
        if(is_active_sidebar('widgets-section-3')) :
          dynamic_sidebar('widgets-section-3');
        endif;
       ?>

    </div>
    <div class="widgets-section widgets-section-4">
      <?php
        if(is_active_sidebar('widgets-section-4')) :
          dynamic_sidebar('widgets-section-4');
        endif;
       ?>

    </div>
  </section>
 <section class="footer-infos container">
    <div class="copyright">
      <p>© <?php echo date('Y'); bloginfo("name"); echo" Tous droits réservés." ?> </p>
    </div>
    <div class="social-medias">
      <nav class="navigation navigation-bottom">
        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'footer'
          )
        );
         ?>

      </nav>
    </div>
  </section>
</footer>
<?php wp_footer(); ?>

</body>
</html>
