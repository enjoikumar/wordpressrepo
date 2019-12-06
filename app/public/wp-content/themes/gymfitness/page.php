<?php get_header();  ?>
  <main class="container page section">
    <?php while(have_posts()): the_post(); ?>
      <h1 class="text-center text-primary">
        <?php the_title(); ?>
      </h1>

      <?php the_post_thumbnail(); ?>

      <div class="text-center">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </main>
<?php get_footer(); ?>
