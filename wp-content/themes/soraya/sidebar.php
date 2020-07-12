
<!-- ZONE DE WIDGET -->

<aside class="sidebar" id="widgets-sidebar">
  <?php
    if(is_active_sidebar('widgets-sidebar')) :
      dynamic_sidebar('widgets-sidebar');
    endif;
   ?>
</aside>
