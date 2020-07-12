<?php get_header(); ?>
<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>

    <?php if(has_post_thumbnail()) : ?>
    <section class="page-header" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <?php endif; ?>

      <h1 class="page-title"><?php the_title(); ?></h1>
    </section>


  <main class="container site-content">
      <article class="entry page">
        <section class="entry-content">
        <?php the_content(); ?>

<!-- --FORMULAIRE-- -->
          <section class="comments">
            <h3 class="comments-title">Laisser un message</h3>
            <form class="comment-form" action="index.php" method="post">
              <label for="name">Nom</label>
              <input type="text" name="name" required>
              <label for="email">E-mail</label>
              <input type="email" name="email" required>
              <label for="comment">Commentaire</label>
              <input type="textarea" rows="10" cols="80" name="comment" required>
              <input type="submit" name="submit" value="Envoyer">
            </form>
          </section>

      </section>
      </article>

</main>



    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
