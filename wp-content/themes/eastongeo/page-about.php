<?php
/*
Template Name: About
*/
get_header();
?>
  <main>
    <section class="about">
      <div class="about-container">
        <h1 class="heading-primary__services">
        <?php if ( get_field('about_header' ) ): 
          echo esc_html( get_field('about_header') ); ?>
        <?php endif; ?></p>
        </h1>
        <p class="about-description">
        <?php if ( get_field('about_description' ) ): 
          echo esc_html( get_field('about_description') ); ?>
        <?php endif; ?>
       </p>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
</body>
</html>