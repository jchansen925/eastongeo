<?php
/*
Template Name: Privacy
*/
get_header();
?>
  <main>
    <section class="privacy">
      <div class="privacy-container">
      <?php if ( get_field('privacy_content')): 
          echo get_field('privacy_content'); ?>
        <?php endif; ?></p>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
</body>
</html>